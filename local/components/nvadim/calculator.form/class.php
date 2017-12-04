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
            /*'transport' => [

            ],*/
        );
    public $nextPageTemplate = '';


    /**
     * @param $postData
     *
     * @return array - возвращает массив сохраненных данных со всех шагов
     */
    public function save($postData) {
        if(!isset($_SESSION['MOVE_FORM'])) {
            $_SESSION['MOVE_FORM'] = array();
        }

        $sessionMF = &$_SESSION['MOVE_FORM'];
        $sessionMF = array_merge($sessionMF, $postData);

        if(!in_array($this->arParams['STEP'], $sessionMF['PAGES_SAVED'])) {
            $sessionMF['PAGES_SAVED'][] = $this->arParams['STEP'];
        }

        return $sessionMF;
    }


    /**
     * Валидация полей формы
     * @param $data
     * @param $step
     *
     * @return bool
     */
    public function jumpToPage()
    {
        $nextPageTemplate = "{$this->arParams['SEF_FOLDER']}#PAGE#/";
        $nextPage = '';

        $data = $this->arResult['SAVED_DATA'];
        $step = $this->arParams['STEP'];
        if(strpos($step, 'intrm')!==false) {
            $step = 'intermediate';
        }

        if (empty($data['FROM']) && $step != 'route') {
            $urlToRedirect = str_replace('#PAGE#', 'route', $nextPageTemplate);
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
            break;

        case 'depart':
        case 'intermediate':
        case 'dest':
            $num = $this->arParams['VARIABLES']['intermediate_num'];

            if ($step=='dest') {
                $nextPage = 'transport';
            } elseif (count($data['FROM']) > 1 && !$num) {
                $nextPage = 'intrm-1';
            } elseif($num && count($data['FROM']) > $num+1) {
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

d($nextPage);
        if($nextPage) {
            $this->save($_POST);
            $urlToRedirect = str_replace('#PAGE#', $nextPage, $nextPageTemplate);
d($urlToRedirect,'$urlToRedirect');
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

        $curPage = ($_POST['CURRENT_PAGE'])? $_POST['CURRENT_PAGE']: '';
        $data = ($curPage)? $this->arResult['SAVED_DATA'][$curPage]: $this->arResult['SAVED_DATA'];
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
}