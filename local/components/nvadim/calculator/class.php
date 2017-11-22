<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
/** @var CBitrixComponent $this */

class CShmelCalculatorComponent extends CBitrixComponent
{
    public $stepsProgress = array();

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

//    public
}