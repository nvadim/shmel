<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
/** @var CBitrixComponent $this */

class CShmelCalculatorComponent extends CBitrixComponent
{
    public $stepsProgress = array();
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
        $urlToRedirect = '';

        switch ($this->arParams['STEP']) {
        case 'route':
            if (!empty($this->arResult['SAVED_DATA']['FROM'][0])
                && !empty($this->arResult['SAVED_DATA']['TO']
                && $_POST['submit_next'])
            ) {
                $urlToRedirect = str_replace('#PAGE#', 'depart', $nextPageTemplate);
            }
            break;

        case 'depart':
            if(empty($this->arResult['SAVED_DATA']['FROM'])) {
                $urlToRedirect = str_replace('#PAGE#', 'route', $nextPageTemplate);

                break;
            }

            if(!$_POST['submit_next'])
                break;

            if (count($this->arResult['SAVED_DATA']['FROM']) > 1) {
                $urlToRedirect = str_replace('#PAGE#', 'intrm-1', $nextPageTemplate);
            } else {
                $urlToRedirect = str_replace('#PAGE#', 'dest', $nextPageTemplate);
            }

            break;

        default:

        }


        if($urlToRedirect) {
            LocalRedirect($urlToRedirect, true);
        }
    }
}