<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
/** @var CBitrixComponent $this */

class CShmelCalculatorComponent extends CBitrixComponent
{
    public $stepsProgress = array(
        'route',
        'depart',
        'intermediate',
        'dest',
        'transport',
    ); //«»
    public $reqFields
        = array(
            'route' => [
                'MOVE_TYPE' => 'Выберите тип переезда',
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
        switch ($this->arParams['STEP']) {
        case 'route':
            if ($this->checkReqFields()) {
                $nextPage = 'depart';
            }
            break;

        case 'depart':
        case 'intermediate':
        case 'dest':
            if(empty($this->arResult['SAVED_DATA']['FROM']))
                $nextPage = 'route';

            if(!$_POST['submit_next'] || !$this->checkReqFields())
                break;

            $num = $this->arParams['VARIABLES']['intermediate_num'];
            if (count($data['FROM']) > 1 && !$num) {
                $nextPage = 'intrm-1';
            } elseif($num && count($data['FROM']) > $num+1) {
                $nextPage = 'intrm-' . ($num+1);
            } elseif ($this->arParams['STEP']=='dest') {
                $nextPage = 'transport';
            } else {
                $nextPage = 'dest';
            }

            break;

        case 'transport':
            if ($this->checkReqFields()) {
                $nextPage = 'loaders';
            }
            break;

        default:

        }


        if($nextPage) {
            $urlToRedirect = str_replace('#PAGE#', $nextPage, $nextPageTemplate);
            LocalRedirect($urlToRedirect, true);
        }
    }

    public function checkReqFields()
    {
        if(!isset($_POST['submit_next']))
            return false;

        $isValid = false;
        $step = $this->arParams['STEP'];

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