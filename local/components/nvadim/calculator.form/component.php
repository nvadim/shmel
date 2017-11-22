<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
/** @var CShmelCalculatorComponent $this */
/** @var array $arParams */
/** @var array $arResult */
/** @var string $componentPath */
/** @var string $componentName */
/** @var string $componentTemplate */
/** @global CDatabase $DB */
/** @global CUser $USER */
/** @global CMain $APPLICATION */
/** @global CCacheManager $CACHE_MANAGER */
/** @global CIntranetToolbar $INTRANET_TOOLBAR */

/*************************************************************************
 * Processing of received parameters
 *************************************************************************/
if (strlen($arParams["FILTER_NAME"]) <= 0 || !preg_match("/^[A-Za-z_][A-Za-z01-9_]*$/", $arParams["FILTER_NAME"])) {
    $arrFilter = array();
} else {
    global $$arParams["FILTER_NAME"];
    $arrFilter = ${$arParams["FILTER_NAME"]};
    if (!is_array($arrFilter))
        $arrFilter = array();
}

if (!isset($arParams["CACHE_TIME"]))
    $arParams["CACHE_TIME"] = 36000000;

if (!isset($arParams["COMPONENT_MARKER"]))
    $arParams["COMPONENT_MARKER"] = $this->randString();

$arParams["CACHE_FILTER"] = $arParams["CACHE_FILTER"] == "Y";
if (!$arParams["CACHE_FILTER"] && count($arrFilter) > 0)
    $arParams["CACHE_TIME"] = 0;


/*************************************************************************
 * Work with cache
 *************************************************************************/

$arResult['SAVED_DATA'] = [];
if(!empty($_POST)) {
    $arResult['SAVED_DATA'] = $this->save($_POST);
} elseif(!empty($_SESSION['MOVE_FORM'])) {
    $arResult['SAVED_DATA'] = $_SESSION['MOVE_FORM'];
}
$this->jumpToPage();
//d($arResult['SAVED_DATA']);
//d($_SESSION, $this->arParams['STEP']);

if ($this->StartResultCache(false, array($arParams['SESS_ID'], ($arParams["CACHE_GROUPS"] === "N" ? false : $USER->GetGroups())))) {



    $this->endResultCache();
}

$this->IncludeComponentTemplate();