<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();

/** @var CBitrixComponent $this */
class CShmelCalculatorComponent extends CBitrixComponent
{
    public $nextPageTemplate = '';
    public $stPage = 'route';
    public $arDayTime = ['день', 'дневное', 'днём', 'днем'];
    public $arNightTime = ['ночь', 'ночное', 'вечер', 'вечером'];

    private $arTypeLoaders = ['Только грузчик', 'Сборщик/разборщик'];
//    private $loaders = ['Только грузчик', 'Сборщик/разборщик'];

    private $_sessData = '';
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

        if(!isset($_SESSION[$sessCode])) {
            $_SESSION[$sessCode] = [];
        }

        $this->_sessData = &$_SESSION[$sessCode];

        $this->arResult['SAVED_DATA'] = array_merge($this->_sessData, (is_array($_POST))?$_POST:[]);
    }

    /**
     * @param $postData
     *
     * @return mixed - возвращает массив сохраненных данных со всех шагов
     */
    public function save($postData = array())
    {
        $step = $this->arParams['STEP'];

        $sessionMF = &$this->_sessData;
        $sessionMF = array_merge($sessionMF, $postData);

        foreach ($sessionMF[$step] as $sKey => $sess_item) {
            if (!isset($postData[$step][$sKey])) {
                unset($sessionMF[$step][$sKey]);
            }
        }

        // пакет подбирается только для точки А
        if ($step == 'depart') {
            $this->selectKit($sessionMF);
        }
        if ($step == 'route' && $sessionMF['suitable_kits']) {
            $this->setTransportPrices();
        }

        if (!in_array($this->arParams['STEP'], $sessionMF['PAGES_SAVED'])) {
            $sessionMF['PAGES_SAVED'][] = $step;
        }

        return $sessionMF;
    }


    /**
     * Редирект на след стр
     *
     * @return bool
     */
    public function jumpToPage()
    {
        $nextPageTemplate = "{$this->arParams['SEF_FOLDER']}#PAGE#/";
        $nextPage = '';

        $this->init();

        $data = $this->arResult['SAVED_DATA'];
        $step = $this->arParams['STEP'];
        if (strpos($step, 'intrm') !== false) {
            $step = 'intermediate';
        }

        if (empty($data[$this->stPage]['FROM']) && $step != $this->stPage) {
            $urlToRedirect = str_replace('#PAGE#', $this->stPage, $nextPageTemplate);
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
        $step = $this->arParams['STEP'];

        switch ($step) {
            case 'loaders':
            case 'loaders-edit':
                $this->pageLoaders();
                break;
        }
    }

    /**
     * Loaders PAGE
     */
    private function pageLoaders()
    {
        $data = $this->arResult['SAVED_DATA'];
        $_loaders = &$this->arResult['SAVED_DATA']['loaders'];
        if(!$_loaders) {
            $_loaders['TIME'] = intval($data['route']['TIME']);
            $LOADERS_DATA = $this->apiInstance->getData('loaders');
            foreach ($LOADERS_DATA as $loader) {
                // расчёт границ времени
                $curCategory = $loader->StructCathegory->Cathegory;
                $curCondition = $loader->StructRateCondition->RateCondition;
                if($curCategory == 'Вне категории') {
                    if($curCondition=='Начало дневного времени') {
                        $_loaders['DAY'] = $loader->Price;
                    }

                    if($curCondition=='Начало вечернего времени') {
                        $_loaders['NIGHT'] = $loader->Price;
                    }
                    continue;
                }

                if(!in_array($curCategory, $this->arTypeLoaders)) {
                    continue;
                }

                if(!$_loaders[$curCategory]['DAY_PRICE'] && $curCondition=='Стоимость 1 часа работы грузчика (по категории)') {
                    $_loaders[$curCategory]['DAY_PRICE'] = $loader->Price;
                    continue;
                }

                if(!$_loaders[$curCategory]['EVENING_PRICE'] && $curCondition=='Стоимость 1 часа работы грузчика (по категории) вечером') {
                    $_loaders[$curCategory]['EVENING_PRICE'] = $loader->Price;
                    continue;
                }

            }


            // подсчёт по пакету
            foreach ($data['suitable_kits'] as $kid => $kitItem) {
                for($c = 0; $c < count($kitItem->StructLoaders); $c++) {
                    // $curLoader->Number - кол-во часов работы - loaderTime
                    // $_loaders['TIME'] - время подачи
                    // $_loaders['DAY']- утр. время
                    // $_loaders['NIGHT']- вечер. время

                    $curLoader = $kitItem->StructLoaders[$c];
                    $loaderTime = $curLoader->Number;

                    $resPrice = 0;
                    if($_loaders[$curCategory]['DAY_PRICE'] && $_loaders[$curCategory]['EVENING_PRICE']) {
                        $resPrice = $this->setLoadersPrice(
                            $loaderTime,
                            $_loaders[$curCategory]['DAY_PRICE'],
                            $_loaders[$curCategory]['EVENING_PRICE']
                        );
                    }
                    $_loaders['ITEMS'][$curLoader->Cathegory]['COUNTS']++;
                    $_loaders['ITEMS'][$curLoader->Cathegory]['HOURS'][] = $curLoader->Number;
                    $_loaders['ITEMS'][$curLoader->Cathegory]['PRICE'][] = $resPrice;
                    $_loaders['ITEMS'][$curLoader->Cathegory]['RESULT_HOURS'] += $curLoader->Number;
                    $_loaders['ITEMS'][$curLoader->Cathegory]['RESULT_PRICE'] += $resPrice;
                }
            }

        }
    }

    /**
     * Цена для каждого грузчика
     *
     * @param $loaderTime
     * @param $dayPrice
     * @param $eveningPrice
     */
    private function setLoadersPrice($loaderTime, $dayPrice, $eveningPrice)
    {
        $resultPrice = 0;
        $loadersData = &$this->arResult['SAVED_DATA']['loaders'];
        if(!$loadersData['TIME']
            || !$loadersData['DAY']
            || !$loadersData['NIGHT']) {

            return -1;
        }

        if ($loadersData['TIME'] < $loadersData['NIGHT']
            && $loadersData['TIME'] > $loadersData['DAY']) { // утро

            if (($loadersData['TIME'] + $loaderTime) < $loadersData['NIGHT'])
            {
                $resultPrice = $loaderTime * $dayPrice;
            } else { // с учётом того, что время работы не может быть > 12
                $partDayTime = ($loadersData['NIGHT'] - $loadersData['TIME']);
                $partEvTime = $loaderTime - $partDayTime;

                $resultPrice = $partDayTime * $dayPrice + $partEvTime * $eveningPrice;
            }
        } else {// вечер = (24+$loadersData['DAY'])

            $evЕThreshold = 24 + $loadersData['DAY'];
            if (($loadersData['TIME'] + $loaderTime) <= $evЕThreshold)
            {
                $resultPrice = $loaderTime * $eveningPrice;
            } else {
                $partDayTime = ($loadersData['TIME'] + $loaderTime) - $evЕThreshold;
                $partEvTime = $loaderTime - $partDayTime;

                $resultPrice = $partDayTime * $dayPrice + $partEvTime * $eveningPrice;
            }
        }

        $loadersData['RESULT_PRICE'] += $resultPrice;
        return $resultPrice;
    }

    public function checkReqFields()
    {
        $isValid = false;
        $step = $this->arParams['STEP'];
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
    public function selectKit(&$saved_data)
    {
        $step = $this->arParams['STEP'];

        if (!$saved_data[$step])
            return false;

        $currentStepData = $saved_data[$step];
        $KITS = $this->apiInstance->getData('kits');
        $this->carsCategories = $this->apiInstance->getData('carscategories');

        $numRooms = $currentStepData['NUM_OF_ROOMS'];
        $class = $currentStepData['CLASS'];
        $filling = $currentStepData['FILLING'];

        unset($saved_data['suitable_kits']);
        unset($saved_data['transport_recomm']);
        for ($i = 0; $i < count($KITS); $i++) {
            $kitId = $KITS[$i]->ID;
            $strData = $KITS[$i]->StructBasicData;

            if ($strData->NumberOfRooms == $numRooms
                && $strData->ClassOfRoom == $class
                && $strData->Filling == $filling
                && !in_array($kitId, array_keys($saved_data['suitable_kits']))) {

                $saved_data['suitable_kits'][$kitId] = $KITS[$i];
                $this->saveTransport2Loc($saved_data, $KITS[$i]->StructTransports);

                break;
            }
        }

        // установим цены согласно тарифам ТС-в
        if (!empty($saved_data['transport_recomm'])) {
            $this->setTransportPrices();
        }
    }


    // объединяет общую информацию
    private function saveTransport2Loc(&$p_saved_data, $transport)
    {
        if (!$transport || !$this->carsCategories)
            return false;

        for ($i = 0; $i < count($this->carsCategories); $i++) {
            if ($this->carsCategories[$i]->ID != $transport->ID
                || $p_saved_data['transport_recomm'][$transport->ID]) {

                continue;
            }

            $p_saved_data['transport_recomm'][$transport->ID] = array_merge((array)$this->carsCategories[$i], (array)$transport);
        }
    }

    // цены на транспортные средства
    private function setTransportPrices()
    {
        $sessionMF = &$this->_sessData;

        if (!$sessionMF['timeRegion'])
            return false;

        $cars = ShmelTools\Transport1C::getTransport();
        $sessionMF['transport']['PRICE'] = 0;

        for($i = 0; $i<count($cars); $i++) {
            if(!$cars[$i])
                continue;

            $car = $cars[$i];
            $carId = $car['StructCathegory']['ID'];
            if ($car['StructRate']['Rate'] != 'Переезд Без НДС')
                continue;

            $carRateCondition = $car['StructRateCondition']['RateCondition'];
            $arCarRateCondintion = explode(' ', $carRateCondition);
            foreach ($sessionMF['transport_recomm'] as $catId => &$trItem) {
                if ($carId != $trItem['ID'])
                    continue;

                if ($carRateCondition == 'Стоимость 1 часа работы автомобиля') {

                    $trItem['PRICES'][1] = $car['Price'];
                    continue;
                }

                // оплата пропуска МКАД
                if ($sessionMF['IS_MKAD']
                    && $carRateCondition == 'Оплата пропускного режима МКАД') {

                    $trItem['PRICES']['MKAD'] = $car['Price'];
                    $sessionMF['transport']['PRICE'] += $car['Price'];
                }

                // оплата пропуска ТТК
                if ($sessionMF['IS_TTK']
                    && strpos($carRateCondition,'Оплата пропускного режима ТТК')!==false) {

                    $trItem['PRICES']['TTK'] = $car['Price'];
                    $sessionMF['transport']['PRICE'] += $car['Price'];
                }

                // оплата пропуска СК
                if ($sessionMF['IS_SK']
                    && strpos($carRateCondition, 'Оплата пропускного режима СК')!==false) {

                    $trItem['PRICES']['SK'] = $car['Price'];
                    $sessionMF['transport']['PRICE'] += $car['Price'];
                }

                if (!array_intersect($sessionMF['timeRegion'], $arCarRateCondintion))
                    continue;

                if (strpos($carRateCondition, 'Стоимость аренды автомобиля на') !== false) {
                    $hours = $arCarRateCondintion[4];
                    $trItem['PRICES'][$hours] = $car['Price'];
                }

                if (strpos($carRateCondition, $trItem['TypeOfLease']) !== false) {
                    $trItem['PRICES']['CAR_PRICE'] = $car['Price'];

                    $sessionMF['transport']['PRICE'] += $car['Price']; // результирующая стоимость страницы Транспорта
                }
            }
        }

        // Аренда вечером 8ми часовой отсутствует. Поэтому 4 часа вечером + добираем 1 доп часами расчет
        if (in_array('вечер', $sessionMF['timeRegion'])) {
            foreach ($sessionMF['transport_recomm'] as $catId => &$trItem) {
                $eightH = $trItem['PRICES'][8] = $trItem['PRICES'][4] + $trItem['PRICES'][1] * 4;
                if($trItem['TypeOfLease']=='8 часов') {
                    $trItem['PRICES']['CAR_PRICE'] = $eightH;
                    $sessionMF['transport']['PRICE'] += $eightH;
                }
            }
        }
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