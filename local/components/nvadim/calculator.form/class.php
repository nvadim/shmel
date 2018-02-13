<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();

/** @var CBitrixComponent $this */
class CShmelCalculatorComponent extends CBitrixComponent
{
    public $nextPageTemplate = '';
    public $stPage = 'route';
    public $arDayTime = ['день', 'дневное', 'днём', 'днем'];
    public $arNightTime = ['ночь', 'ночное', 'вечер', 'вечером'];

    private $timeRegion = [];
    private $apiInstance = null;
    private $timeThreshold = 16; // пороговый час, разделяющий днемное и вечернее время

    private $carsCategories = false;

    public function __construct(CBitrixComponent $component = null)
    {
        parent::__construct($component);
        $this->apiInstance = ShmelAPI\ApiWrapper::getInstance();
    }


    /**
     * @param $postData
     *
     * @return mixed - возвращает массив сохраненных данных со всех шагов
     */
    public function save($postData = array())
    {
        if (!$this->arParams['SESSION_FORM_CODE'])
            return false;

        $formCode = $this->arParams['SESSION_FORM_CODE'];
        if (!isset($_SESSION[$formCode])) {
            $_SESSION[$formCode] = array();
        }
        $step = $this->arParams['STEP'];

        $sessionMF = &$_SESSION[$formCode];
        $sessionMF = array_merge($sessionMF, $postData);

//        if(!isset($sessionMF['mkadRegion'])) {
//            $sessionMF['mkadRegion'] = $this->;
//        }

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
//        $this->getDataDev();

        $nextPageTemplate = "{$this->arParams['SEF_FOLDER']}#PAGE#/";
        $nextPage = '';

        $data = $this->arResult['SAVED_DATA'];
        $step = $this->arParams['STEP'];
        if (strpos($step, 'intrm') !== false) {
            $step = 'intermediate';
        }

        if (empty($data[$this->stPage]['FROM']) && $step != $this->stPage) {
            $urlToRedirect = str_replace('#PAGE#', $this->stPage, $nextPageTemplate);
            LocalRedirect($urlToRedirect, true);
        }

        if (!isset($_POST['submit_next']) || !$this->checkReqFields()) {
            return true;
        }

        include("def_next_page/{$this->arParams['SECTION']}.php");

        if ($nextPage) {
            $this->save($_POST);
            $urlToRedirect = str_replace('#PAGE#', $nextPage, $nextPageTemplate);

            LocalRedirect($urlToRedirect, true);
        }
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
        $formCode = $this->arParams['SESSION_FORM_CODE'];
        $sessionMF = &$_SESSION[$formCode];

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

            $arCarCondintion = explode(' ', $car['StructRateCondition']['RateCondition']);
            foreach ($sessionMF['transport_recomm'] as $catId => &$trItem) {
                if ($carId != $trItem['ID'])
                    continue;

                if ($car['StructRateCondition']['RateCondition'] == 'Стоимость 1 часа работы автомобиля') {
                    $trItem['ADDITIONAL_PRICE'] = $car['Price'];
                    continue;
                }

                if (strpos($car['StructRateCondition']['RateCondition'], $trItem['TypeOfLease']) === false)
                    continue;

                if (array_intersect($sessionMF['timeRegion'], $arCarCondintion)) {
                    $trItem['PRICE'] = $car['Price'];
                    $sessionMF['transport']['PRICE'] += $car['Price'];
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

        $formCode = $this->arParams['SESSION_FORM_CODE'];
        $sessionMF = &$_SESSION[$formCode];

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

        $formCode = $this->arParams['SESSION_FORM_CODE'];
        $sessionMF = &$_SESSION[$formCode];

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