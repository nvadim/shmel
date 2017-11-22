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
/*
$obCache = \Bitrix\Main\Data\Cache::createInstance();
$cacheId = serialize(Array(
    Bitrix\Main\Context::getCurrent()->getRequest()->getRequestedPage(),
    $_SESSION['ROUTE_PAGE']['MOVE_TYPE'],
    $_GET
));
$cachePath = $CACHE_MANAGER->GetCompCachePath($componentPath);
if ($obCache->initCache($arParams["CACHE_TIME"], $cacheId, $cachePath)) {
    $vars = $obCache->GetVars();
    $arResult['ITEMS'] = $vars['ITEMS'];
    $arParams['ELEMENTS'] = $vars['ELEMENTS'];
} elseif ($obCache->startDataCache()) {
    if (!empty($_GET)) {
        $obCache->abortDataCache();
    }
    $arResult['ITEMS'] = GetData();
    if (is_array($arResult['ITEMS'])) {
        $arParams['ELEMENTS'] = array_keys($arResult['ITEMS']);
    }
    $obCache->endDataCache(Array(
        'ELEMENTS' => $arParams['ELEMENTS'],
        'ITEMS' => $arResult['ITEMS']
    ));
}*/


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
$arParams['STEP'] = ($arParams['STEP'])? trim($arParams['STEP']): 'route';
$arResult['queue_steps'] = [
    'route',
    'depart'
];
$arResult['additional_steps'] = [
    'dest',
    'transport',
    'loaders'
];

$SAVED_DATA = [];
if(!empty($_POST)) {
    $SAVED_DATA = $this->save($_POST);
}

if(isset($SAVED_DATA['ROUTE_PAGE']['FROM']) && count($SAVED_DATA['ROUTE_PAGE']['FROM'])>1) {
    foreach ($SAVED_DATA['ROUTE_PAGE']['FROM'] as $i => $itemFrom) {
        array_push($arResult['queue_steps'], 'intermediate'.($i+1));
    }
}
$arResult['queue_steps'] = array_merge($arResult['queue_steps'], $arResult['additional_steps']);


switch($arParams['STEP']) {
case 'depart':
    $arResult['route_title'] = 'Пункт отправления';
    $arResult['address'] = $SAVED_DATA['ROUTE_PAGE']['FROM'][0];

    $arResult['depart_page'] = 'DEPART';
    break;
case 'dest':
    $arResult['route_title'] = 'Пункт назначения';
    $arResult['address'] = $SAVED_DATA['ROUTE_PAGE']['TO'];

    $arResult['depart_page'] = 'DEST';
    break;
default:
    if (strpos($arParams['STEP'], 'intermediate') !== false) {
        $arResult['route_title'] = 'Промежуточный адрес';
        $interIndex = substr($arParams['STEP'], -1);
        $arResult['address'] = $SAVED_DATA['ROUTE_PAGE']['FROM'][$interIndex];

        $arResult['depart_page'] = 'INTERMEDIATE';
    }
}


// квартирный,офисный,дачный
$arResult['move_type'] = (!empty($_REQUEST['move_type']))? trim($_REQUEST['move_type']): $SAVED_DATA['ROUTE_PAGE']['MOVE_TYPE'];


d($SAVED_DATA, 'session');
d($_POST, 'post');
d($arResult['queue_steps'],'queue_steps');
// $arResult['form'] - форма текущего шага
// $arResult['sidebar'] - правая колонка
if ($this->startResultCache(false, array($arrFilter, $arParams))) {

// выбор соответствующего шаблона и данных
    switch($arParams['STEP']) {
    case 'route':
        $arResult['form'] = "route.php";
        $arResult['sidebar'] = "solutions.php";

        break;

    case 'depart':
    case 'dest':
    default:
        $arResult['form'] = "depart.php";
        $arResult['sidebar'] = "navigator.php";

        $arResult['rigging_list'] = ShmelAPI\ApiWrapper::getInstance()->getData('rigging');

        break;
    }

    $steps = array_flip($arResult['queue_steps']);
    $curPageIndex = $steps[$arParams['STEP']];

    $arResult['next_step'] = $arResult['queue_steps'][$curPageIndex+1];

// ссылки для навигатора
//    $arResult['page_route'] = $arParams['POINT_ENTRY'] . "?step=route";
//    $arResult['page_depart'] = $arParams['POINT_ENTRY'] . "?step=depart";
//    $arResult['page_intermediate'] = $arParams['POINT_ENTRY'] . "?step=intermediate";
//    $arResult['page_dest'] = $arParams['POINT_ENTRY'] . "?step=dest";


    $this->endResultCache();
}

$this->IncludeComponentTemplate();