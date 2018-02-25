<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();

$selectList = ShmelTools\Options::getInstance()->getProperty('selectList');
foreach ($selectList as $k => $v) {
    $arResult['select_list_value']["reference"][] = $v;
    $arResult['select_list_value']["reference_id"][] = $k;
}

$arResult['prev_step'] = $arParams['SEF_FOLDER'] . 'dest/';