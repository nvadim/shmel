<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();

/** @var CBitrixComponent $this */
class CShmelCalculatorComponent extends CBitrixComponent
{
    public $nextPageTemplate = '';
    public $stPage = 'route';
    public $trEPage = 'transport-edit';
    public $lEPage = 'loaders-edit';
    public $pEPage = 'packaging-edit';
    public $arDayTime = ['день', 'дневное', 'днём', 'днем'];
    public $arNightTime = ['ночь', 'ночное', 'вечер', 'вечером'];

    private $arTypeLoaders = [
        '000000001'=>'Сборщик/разборщик',
        '000000002' => 'Только грузчик'
    ];

    private $_step = 'route';
    private $_sessData = '';
    private $_savedData = [];
    private $apiInstance = null;

    private $timeThreshold = 16; // пороговый час, разделяющий днемное и вечернее время

    private $carsCategories = false;

    public function __construct(CBitrixComponent $component = null)
    {
        parent::__construct($component);
        $this->apiInstance = ShmelAPI\ApiWrapper::getInstance();
    }

    private function init()
    {
        $sessCode = $this->arParams['SESSION_FORM_CODE'];
        if (!$sessCode)
            die('Не задан сессионный код в параметрах компонента');

        if (!isset($_SESSION[$sessCode])) {
            $_SESSION[$sessCode] = [];
        }

        $this->_sessData = &$_SESSION[$sessCode];
        if($this->_step!='transport-edit') {
            $this->_sessData[$this->_step]
                = array_merge($this->_sessData[$this->_step], (is_array($_POST)) ? $_POST : []);
        }

        $this->_savedData = $this->arResult['SAVED_DATA'] = $this->_sessData;
    }

    /**
     * @param $postData
     *
     * @return mixed - возвращает массив сохраненных данных со всех шагов
     */
    private function save($postData = array())
    {
        $step = $this->_step;
        if(!$this->_sessData[$step])
            $this->_sessData[$step] = [];

        $sessionMF = &$this->_sessData;
        switch($step) {
            case 'transport-edit':
                $this->customizeTransport();
                break;
            case 'loaders-edit':

                break;
            default:
                $sessionMF[$step] = array_merge($sessionMF[$step], $postData);

        }

//        foreach ($sessionMF[$step] as $sKey => $sess_item) {
//            if (!isset($postData[$sKey])) {
//                unset($sessionMF[$step][$sKey]);
//            }
//        }

        // пакет подбирается только для точки А
        if ($this->_step == 'depart') {
            $this->selectKit();
        }

        if ($this->_step == 'route'
            && $sessionMF['suitable_kits']) {
            $this->setTransportPrices();
        }


        switch($this->_step) {
            case 'transport-edit':
                $step = 'transport';
                break;
            case 'loaders-edit':
                $step = 'loaders';
                break;
            case 'packaging-edit':
                $step = 'packaging';
                break;
            default:
                $step = $this->_step;
        }
        if (!in_array($step, $sessionMF['PAGES_SAVED'])) {
            $sessionMF['PAGES_SAVED'][] = $step;
        }

        return $sessionMF;
    }

    private function customizeTransport()
    {
        $sessionMF = &$this->_sessData;
        $postData = $_POST;
        if(!$postData['transport_key'])
            return false;

        $carItem = [];
        foreach ($postData['transport_key'] as $postKey) {
            $h = $postData['quantity_time'][$postKey];
            $addH = $postData['additional_time'][$postKey];
            $catId = $postData['transport_category'][$postKey];
            $catPrice = $sessionMF['transport']['categories'][$catId]['PRICE'];
            $carItem = [
                'ID' => $catId,
                'TypeOfLease' => "{$h} часов",
                'ADDITIONAL_TIME' => $addH,
                'ADD_RESULT_PRICE' => $addH*$catPrice
            ];

            $this->_sessData['transport-edit'][] = $carItem;
        }

        $this->setTransportPrices('transport-edit');
    }

    /**
     * Редирект на след стр
     *
     * @return bool
     */
    public function jumpToPage()
    {
        $this->_step = $this->arParams['STEP'];

        $nextPageTemplate = "{$this->arParams['SEF_FOLDER']}#PAGE#/";
        $nextPage = '';

        $this->init();

        $data = $this->_savedData;
        if (strpos($this->_step, 'intrm') !== false) {
            $this->_step = 'intermediate';
        }

        if (empty($data[$this->stPage]['FROM']) && $this->_step != $this->stPage) {
            $urlToRedirect = str_replace('#PAGE#', $this->stPage, $nextPageTemplate);
            LocalRedirect($urlToRedirect, true);
        }

//        if($this->_step=='transport' && !empty($data[$this->trEPage])) {
//            $urlToRedirect = str_replace('#PAGE#', $this->trEPage, $nextPageTemplate);
//            LocalRedirect($urlToRedirect, true);
//        }

        if($this->_step=='loaders' && !empty($data[$this->lEPage])) {
            $urlToRedirect = str_replace('#PAGE#', $this->lEPage, $nextPageTemplate);
            LocalRedirect($urlToRedirect, true);
        }

        if($this->_step=='packaging' && !empty($data[$this->pEPage])) {
            $urlToRedirect = str_replace('#PAGE#', $this->pEPage, $nextPageTemplate);
            LocalRedirect($urlToRedirect, true);
        }

        // for save data...
        if (!isset($_POST['submit_next']) || !$this->checkReqFields()) {
            $this->preparePage();
            return true;
        }

        include("def_next_page/{$this->arParams['SECTION']}.php");
        if ($nextPage) {
            $this->save($_POST);
            $urlToRedirect = str_replace('#PAGE#', $nextPage, $nextPageTemplate);

            LocalRedirect($urlToRedirect, true);
        }
    }

    /**
     * Load pages data
     *
     */
    private function preparePage()
    {
        if ($this->_step != 'route') {
            \ShmelTools\Tools::getRouteList($this->arResult, $this->_sessData['route']);
        }
        $this->arResult['NIGHT_TIME']
            = $this->_sessData['NIGHT_TIME']
            = $this->timeThreshold;

        switch ($this->_step) {
            case 'route':
//                $this->pageTransports();
                break;
            case 'transport':
            case 'transport-edit':
                $this->pageTransports();
                break;
            case 'loaders':
            case 'loaders-edit':
                $this->pageLoaders();
                break;
            case 'packaging':
            case 'packaging-edit':
                $this->pagePackaging();
                break;
        }
    }


    /**
     * СТраница транспорта
     */
    private function pageTransports()
    {
        $categories = ShmelTools\Options::getInstance()->getProperty('catTransport');
        $pricesByCat = $this->_sessData['transport']['categories'];
        foreach ($categories as $cid => $catItem) {
            $this->arResult['categories'][$cid] = array_merge($catItem, $pricesByCat[$cid]);
        }

        $this->arResult['ITEMS'] = ($this->_sessData['transport-edit'])
            ? $this->_sessData['transport-edit']
            : $this->_sessData['transport_recomm'];
    }

    /**
     * Страница упаковки
     */
    private function pagePackaging()
    {
        // список товаров из 1С
        $GOODS_DATA = $this->apiInstance->getData('goods');
        $currentKit = current($this->_savedData['suitable_kits']);

        $this->arResult['RESULT_PRICE'] = 0;

        for($i = 0; $i < count($currentKit->StructGoods); $i++) {
            $curGood = $currentKit->StructGoods[$i];
            $addItem = [
                'ID' => $curGood->ID,
                'NAME' => $curGood->Name,
                'NUM' => $curGood->Number,
                'PRICE' => 0,
                'UNIT' => 'шт',
            ];

            for ($c = 0; $c < count($GOODS_DATA); $c++) {
                $good = $GOODS_DATA[$c];
                if($good->ID != $curGood->ID) {
                    continue;
                }

                $addItem['PRICE'] = $good->Price;
                $addItem['RESULT_PRICE'] = $good->Price*$curGood->Number;
                $addItem['UNIT'] = $good->Unit;
            }

            $this->arResult['ITEMS'][] = $addItem;
            $this->arResult['RESULT_PRICE'] += $addItem['RESULT_PRICE'];
        }

    }

    /**
     * Страница грузчиков
     */
    private function pageLoaders()
    {
        $data = $this->_savedData;
        $_loaders = &$this->arResult;
        if (!$data['loaders']['ITEMS']) {
            $_loaders['RESULT_PRICE'] = 0;
            $_loaders['TIME'] = intval($data['route']['TIME']);
            $LOADERS_DATA = $this->apiInstance->getData('loaders');
            foreach ($LOADERS_DATA as $loader) {
                // расчёт границ времени
                $curID = $loader->StructCathegory->ID;
                $curCategory = $loader->StructCathegory->Cathegory;
                $curCondition = $loader->StructRateCondition->RateCondition;
                if ($curCategory == 'Вне категории') {
                    if ($curCondition == 'Начало дневного времени') {
                        $_loaders['DAY'] = $loader->Price;
                    }

                    if ($curCondition == 'Начало вечернего времени') {
                        $_loaders['NIGHT'] = $loader->Price;
                    }
                    continue;
                }

                if (!in_array($curID, array_keys($this->arTypeLoaders))) {
                    continue;
                }

                if(!$_loaders['ITEMS'][$curID]) {
                    $_loaders['ITEMS'][$curID] = [
                        'ID' => $curID,
                        'NAME' => $curCategory,
                    ];
                }
                if (!$_loaders['ITEMS'][$curID]['DAY_PRICES'] && $curCondition == 'Стоимость 1 часа работы грузчика (по категории)') {
                    $_loaders['ITEMS'][$curID]['DAY_PRICES'][1] = $loader->Price;
                    $_loaders['ITEMS'][$curID]['DAY_PRICES'][4] = $loader->Price * 4;
                    $_loaders['ITEMS'][$curID]['DAY_PRICES'][6] = $loader->Price * 6;
                    $_loaders['ITEMS'][$curID]['DAY_PRICES'][8] = $loader->Price * 8;
                    continue;
                }

                if (!$_loaders['ITEMS'][$curID]['NIGHT_PRICES'] && $curCondition == 'Стоимость 1 часа работы грузчика (по категории) вечером') {
                    $_loaders['ITEMS'][$curID]['NIGHT_PRICES'][1] = $loader->Price;
                    $_loaders['ITEMS'][$curID]['NIGHT_PRICES'][4] = $loader->Price * 4;
                    $_loaders['ITEMS'][$curID]['NIGHT_PRICES'][6] = $loader->Price * 6;
                    $_loaders['ITEMS'][$curID]['NIGHT_PRICES'][8] = $loader->Price * 8;
                    continue;
                }

            }


            // подсчёт по пакету
            unset($this->_sessData['loaders']['RESULT_PRICE']);

            $currentKit = current($data['suitable_kits']);
            for ($c = 0; $c < count($currentKit->StructLoaders); $c++) {
                // $curLoader->Number - кол-во часов работы - loaderTime
                // $_loaders['TIME'] - время подачи
                // $_loaders['DAY']- утр. время
                // $_loaders['NIGHT']- вечер. время

                $curLoader = $currentKit->StructLoaders[$c];
                $loaderTime = $curLoader->Number;
                $LCID = $curLoader->ID;

                $resPrice = 0;
                if ($_loaders['ITEMS'][$LCID]['DAY_PRICES'] && $_loaders['ITEMS'][$LCID]['NIGHT_PRICES']) {
                    $resPrice = $this->setLoadersPrice(
                        $loaderTime,
                        $_loaders['ITEMS'][$LCID]['DAY_PRICES'][1],
                        $_loaders['ITEMS'][$LCID]['NIGHT_PRICES'][1]
                    );
                }

                $_loaders['ITEMS'][$LCID]['COUNTS']++;
                $_loaders['ITEMS'][$LCID]['HOURS'][] = $curLoader->Number;
                $_loaders['ITEMS'][$LCID]['PRICE'][] = $resPrice;
                $_loaders['ITEMS'][$LCID]['RESULT_HOURS'] += $curLoader->Number;
                $_loaders['ITEMS'][$LCID]['RESULT_PRICE'] += $resPrice;
                $this->_sessData['loaders']['RESULT_PRICE'] += $resPrice;
            }

        }
    }

    /**
     * Цена для каждого грузчика
     *
     * @param $loaderTime
     * @param $dayPrice
     * @param $nightPrice
     */
    private function setLoadersPrice($loaderTime, $dayPrice, $nightPrice)
    {
        $resultPrice = 0;
        $loadersData = &$this->arResult;
        if (!$loadersData['TIME']
            || !$loadersData['DAY']
            || !$loadersData['NIGHT']) {

            return -1;
        }

        if ($loadersData['TIME'] < $loadersData['NIGHT']
            && $loadersData['TIME'] > $loadersData['DAY']) { // утро

            if (($loadersData['TIME'] + $loaderTime) < $loadersData['NIGHT']) {
                $resultPrice = $loaderTime * $dayPrice;
            } else { // с учётом того, что время работы не может быть > 12
                $partDayTime = ($loadersData['NIGHT'] - $loadersData['TIME']);
                $partEvTime = $loaderTime - $partDayTime;

                $resultPrice = $partDayTime * $dayPrice + $partEvTime * $nightPrice;
            }
        } else {// вечер = (24+$loadersData['DAY'])

            $evЕThreshold = 24 + $loadersData['DAY'];
            if (($loadersData['TIME'] + $loaderTime) <= $evЕThreshold) {
                $resultPrice = $loaderTime * $nightPrice;
            } else {
                $partDayTime = ($loadersData['TIME'] + $loaderTime) - $evЕThreshold;
                $partEvTime = $loaderTime - $partDayTime;

                $resultPrice = $partDayTime * $dayPrice + $partEvTime * $nightPrice;
            }
        }

        $loadersData['RESULT_PRICE'] += $resultPrice;
        return $resultPrice;
    }

    public function checkReqFields()
    {
        $isValid = false;
        $step = $this->_step;
        if (strpos($step, 'intrm') !== false) {
            $step = 'intermediate';
        }

        $curPage = $_POST['CURRENT_PAGE'];
        $data = $this->arResult['SAVED_DATA'][$curPage];
        $reqFields = $this->arParams['REQUIRED'][$step];

        if (!$reqFields) {
            return true;
        }

        $arRequiredFields = array_diff(array_keys($reqFields), array_keys($data));
        if (!$arRequiredFields) {
            $isValid = true;
        }

        foreach ($arRequiredFields as $field) {
            if ($reqFields[$field]) {
                $this->arResult['ERROR_MESSAGES'][] = $reqFields[$field];
            }
        }

        return $isValid;
    }

    /**
     * Отбор подходящих пакетов
     *
     */
    public function selectKit()
    {
        if (!$this->_sessData[$this->_step])
            return false;

        $currentStepData = $this->_sessData[$this->_step];
        $KITS = $this->apiInstance->getData('kits');
        $this->carsCategories = $this->apiInstance->getData('carscategories');

        $numRooms = $currentStepData['NUM_OF_ROOMS'];
        $class = $currentStepData['CLASS'];
        $filling = $currentStepData['FILLING'];

        unset($this->_sessData['suitable_kits']);
        unset($this->_sessData['transport_recomm']);
        for ($i = 0; $i < count($KITS); $i++) {
            $kitId = $KITS[$i]->ID;
            $strData = $KITS[$i]->StructBasicData;

            if ($strData->NumberOfRooms == $numRooms
                && $strData->ClassOfRoom == $class
                && $strData->Filling == $filling
                && !in_array($kitId, array_keys($this->_sessData['suitable_kits']))) {

                $this->_sessData['suitable_kits'][$kitId] = $KITS[$i];
                $this->saveTransport2Loc($KITS[$i]->StructTransports);

                break;
            }
        }

        // установим цены согласно тарифам ТС-в
        if (!empty($this->_sessData['transport_recomm'])) {
            $this->setTransportPrices();
        }
    }


    // объединяет общую информацию
    private function saveTransport2Loc($transport)
    {
        if (!$transport || !$this->carsCategories)
            return false;

        for ($i = 0; $i < count($this->carsCategories); $i++) {
            if ($this->carsCategories[$i]->ID != $transport->ID
                || $this->_sessData['transport_recomm'][$transport->ID]) {

                continue;
            }

            $this->_sessData['transport_recomm'][$transport->ID] = array_merge((array)$this->carsCategories[$i], (array)$transport);
        }
    }

    /**
     * Цены на транспортные средства
     */
    private function setTransportPrices($to = 'transport_recomm')
    {
        $sessionMF = &$this->_sessData;

        if (!$sessionMF['timeRegion'])
            return false;

        $categories = ShmelTools\Options::getInstance()->getProperty('catTransport');
        $cars = ShmelTools\Transport1C::getTransport();
        $sessionMF['transport']['PRICE'] = 0;

        for ($i = 0; $i < count($cars); $i++) {
            if (!$cars[$i])
                continue;

            $car = $cars[$i];
            $catId = $car['StructCathegory']['ID'];
            if ($car['StructRate']['Rate'] != 'Переезд Без НДС')
                continue;

            $carRateCondition = $car['StructRateCondition']['RateCondition'];
            $arCarRateCondintion = explode(' ', $carRateCondition);

            if ($carRateCondition == 'Стоимость 1 часа работы автомобиля'
                && !$sessionMF['transport']['categories'][$catId]) {
                $sessionMF['transport']['categories'][$catId]['PRICE'] = $car['Price'];
            }

            foreach ($sessionMF[$to] as $key => &$sessCarItem) {
                if ($catId != $sessCarItem['ID'])
                    continue;

                if ($carRateCondition == 'Стоимость 1 часа работы автомобиля') {
                    $sessCarItem['PRICES'][1] = $car['Price'];
                    continue;
                }

                // оплата пропуска МКАД
                if ($sessionMF['IS_MKAD']
                    && $carRateCondition == 'Оплата пропускного режима МКАД'
                    && $categories[$catId]['pass']) {

                    $sessCarItem['PRICES']['MKAD'] = $car['Price'];
                    $sessionMF['transport']['PRICE'] += $car['Price'];
                }

                // оплата пропуска ТТК
                if ($sessionMF['IS_TTK']
                    && strpos($carRateCondition, 'Оплата пропускного режима ТТК') !== false
                    && $categories[$catId]['pass']) {

                    $sessCarItem['PRICES']['TTK'] = $car['Price'];
                    $sessionMF['transport']['PRICE'] += $car['Price'];
                }

                // оплата пропуска СК
                if ($sessionMF['IS_SK']
                    && strpos($carRateCondition, 'Оплата пропускного режима СК') !== false
                    && $categories[$catId]['pass']) {

                    $sessCarItem['PRICES']['SK'] = $car['Price'];
                    $sessionMF['transport']['PRICE'] += $car['Price'];
                }

                if (!array_intersect($sessionMF['timeRegion'], $arCarRateCondintion))
                    continue;

                if (strpos($carRateCondition, 'Стоимость аренды автомобиля на') !== false) {
                    $hours = $arCarRateCondintion[4];
                    $sessCarItem['PRICES'][$hours] = $car['Price'];
                }

                if (strpos($carRateCondition, $sessCarItem['TypeOfLease']) !== false) {
                    $sessCarItem['PRICES']['CAR_PRICE'] = $car['Price'];
                    $sessCarItem['WORK_HOURS'] = explode(' ', $sessCarItem['TypeOfLease'])[0];

                    $sessionMF['transport']['PRICE'] += $car['Price']; // результирующая стоимость страницы Транспорта
                }
            }
        }

        // Аренда вечером 8ми часовой отсутствует. Поэтому 4 часа вечером + добираем 1 доп часами расчет
        if (in_array('вечер', $sessionMF['timeRegion'])) {
            foreach ($sessionMF[$to] as $k => &$sessCarItem) {
                $eightH = $sessCarItem['PRICES'][8] = $sessCarItem['PRICES'][4] + $sessCarItem['PRICES'][1] * 4;
                if ($sessCarItem['TypeOfLease'] == '8 часов') {
                    $sessCarItem['PRICES']['CAR_PRICE'] = $eightH;
                    $sessCarItem['WORK_HOURS'] = 8;

                    $sessionMF['transport']['PRICE'] += $eightH;
                }
            }
        }
        d($sessionMF);
        d($this->_sessData);
    }


    // используется в отдельном подключаемом файле
    // в контексте компонента
    private function calcRegionTime()
    {
        $data = $this->arResult['SAVED_DATA'][$this->stPage];
        $hours = explode(':', $data['TIME']);

        $hours[0] = intval($hours[0]);
        $hours[1] = intval($hours[1]);

        $sessionMF = &$this->_sessData;

        $sessionMF['timeRegion'] = ((9 <= $hours[0] && $hours[0] < $this->timeThreshold)
            || ($hours[0] == $this->timeThreshold && $hours[1] == 0)) ? $this->arDayTime
            : $this->arNightTime;
    }


    /**
     * @TODO возможно удалить по завершению
     *
     * метод для удобное разработки
     */
    private function getDataDev()
    {
        if (!$this->arParams['SESSION_FORM_CODE'])
            return;

        $sessionMF = &$this->_sessData;

        if (empty($sessionMF)) {
            $data = file_get_contents($_SERVER['DOCUMENT_ROOT'] . $this->getPath() . "/data.json");
            $data = json_decode($data, true);

            $this->arResult['SAVED_DATA'] = $sessionMF = $data;
        } else {
            $fp = fopen($_SERVER['DOCUMENT_ROOT'] . $this->getPath() . '/data.json', 'w');
            fwrite($fp, json_encode($sessionMF));
            fclose($fp);
        }
    }
}