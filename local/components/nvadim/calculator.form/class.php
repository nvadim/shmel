<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
/** @var CBitrixComponent $this */

class CShmelCalculatorComponent extends CBitrixComponent
{
    public $reqFields
        = array(
            'route' => [
                'MOVE_TYPE' => 'Выберите тип переезда',
                'DATE' => 'Укажите дату переезда',
                'TIME' => 'Укажите время переезда',
                'FROM' => 'Укажите Пункт отправления',
                'TO' => 'Укажите Пункт назначения'
            ],
            'depart' => [
                'NUM_OF_ROOMS' => 'Укажите «Кол-во комнат»',
                'CLASS' => 'Выберите «Класс помещения»',
                'FILLING' => 'Выберите «Загруженность помещения»'
            ],
            'intermediate' => [
                'NUM_OF_ROOMS' => 'Укажите «Кол-во комнат»',
                'CLASS' => 'Выберите «Класс помещения»',
                'FILLING' => 'Выберите «Загруженность помещения»'
            ],
            'dest' => [
                'NUM_OF_ROOMS' => 'Укажите «Кол-во комнат»',
                'CLASS' => 'Выберите «Класс помещения»',
                'FILLING' => 'Выберите «Загруженность помещения»'
            ],
//            'transport' => [
//
//            ],
        );
    public $nextPageTemplate = '';
    public $stPage = 'route';

    private $timeRegion = [];


    /**
     * @param $postData
     *
     * @return array - возвращает массив сохраненных данных со всех шагов
     */
    public function save($postData = array()) {
        if(!isset($_SESSION['MOVE_FORM'])) {
            $_SESSION['MOVE_FORM'] = array();
        }
        $step = $this->arParams['STEP'];

        $sessionMF = &$_SESSION['MOVE_FORM'];
        $sessionMF = array_merge($sessionMF, $postData);
        if(!isset($sessionMF['timeRegion'])) {
            $sessionMF['timeRegion'] = $this->timeRegion;
        }
//        if(!isset($sessionMF['mkadRegion'])) {
//            $sessionMF['mkadRegion'] = $this->timeRegion;
//        }

        foreach ($sessionMF[$step] as $sKey => $sess_item) {
            if(!isset($postData[$step][$sKey])) {
                unset($sessionMF[$step][$sKey]);
            }
        }

        if(!in_array($this->arParams['STEP'], $sessionMF['PAGES_SAVED'])) {
            $sessionMF['PAGES_SAVED'][] = $step;
        }

        return $sessionMF;
    }


    /**
     * Валидация полей формы
     *
     * @return bool
     */
    public function jumpToPage()
    {
        $this->getDataDev();

        $nextPageTemplate = "{$this->arParams['SEF_FOLDER']}#PAGE#/";
        $nextPage = '';

        $data = $this->arResult['SAVED_DATA'];
        $step = $this->arParams['STEP'];
        if(strpos($step, 'intrm')!==false) {
            $step = 'intermediate';
        }

        if (empty($data[$this->stPage]['FROM']) && $step != $this->stPage) {
            $urlToRedirect = str_replace('#PAGE#', $this->stPage, $nextPageTemplate);
            LocalRedirect($urlToRedirect, true);
        }


        if (!isset($_POST['submit_next']) || !$this->checkReqFields()) {
            return true;
        }


        // редирект на след. шаги
        // в случае успешной валидации данных
        switch ($step) {
        case 'route':
            $nextPage = 'depart';
            $this->calcRegionTime();
            break;

        case 'depart':
        case 'intermediate':
        case 'dest':
            $num = $this->arParams['VARIABLES']['intermediate_num'];

            if ($step=='dest') {
                $nextPage = 'transport';
            } elseif (count($data[$this->stPage]['FROM']) > 1 && !$num) {
                $nextPage = 'intrm-1';
            } elseif($num && count($data[$this->stPage]['FROM']) > $num+1) {
                $nextPage = 'intrm-' . ($num+1);
            } else {
                $nextPage = 'dest';
            }

            break;

        case 'transport':
        case 'transport-edit':
            $nextPage = 'loaders';
            break;

        case 'loaders':
        case 'loaders-edit':
            $nextPage = 'packaging';
            break;

        default:

        }

        if($nextPage) {
            $this->save($_POST);
            $urlToRedirect = str_replace('#PAGE#', $nextPage, $nextPageTemplate);

            LocalRedirect($urlToRedirect, true);
        }
    }

    public function checkReqFields()
    {
        $isValid = false;
        $step = $this->arParams['STEP'];
        if(strpos($step, 'intrm')!==false) {
            $step = 'intermediate';
        }

        $curPage = $_POST['CURRENT_PAGE'];
        $data = $this->arResult['SAVED_DATA'][$curPage];
        $reqFields = $this->reqFields[$step];

        if(!$reqFields) {
            return true;
        }

        $arRequiredFields = array_diff(array_keys($reqFields), array_keys($data));
        if (!$arRequiredFields) {
            $isValid = true;
        }

        foreach ($arRequiredFields as $field) {
            if($reqFields[$field]) {
                $this->arResult['ERROR_MESSAGES'][] = $reqFields[$field];
            }
        }

        return $isValid;
    }


    private function calcRegionTime()
    {
        $data = $this->arResult['SAVED_DATA'][$this->stPage];
        $hours = explode(':', $data['TIME']);

        $hours[0] = intval($hours[0]);
        $hours[1] = intval($hours[1]);
        $this->timeRegion = ((9 <= $hours[0] && $hours[0] < 18)
            || ($hours[0] == 18 && $hours[1] == 0)) ? ['день', 'дневное', 'днём', 'днем']
            : ['ночь', 'ночное', 'вечер', 'вечером'];
    }


    /**
     * @TODO возможно удалить по завершению
     *
     * метод для удобное разработки
     */
    private function getDataDev()
    {
        $sessionMF = &$_SESSION['MOVE_FORM'];

        if(empty($sessionMF)) {
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