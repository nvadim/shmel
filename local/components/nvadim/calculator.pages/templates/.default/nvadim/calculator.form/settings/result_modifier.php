<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();

switch($arParams['STEP']) {
case 'depart':
    $arResult['route_title'] = 'Пункт отправления';
    $arResult['address'] = $arResult['SAVED_DATA']['FROM'][0];

    $arResult['next_step'] = 'dest';
    if(count($arResult['SAVED_DATA']['FROM'])>1) {
        $arResult['next_step'] = 'intrm-1';
    }

    $arResult['dest_page'] = 'DEPART';
    break;
case 'dest':
    $arResult['route_title'] = 'Пункт назначения';
    $arResult['address'] = $arResult['SAVED_DATA']['TO'];

    $arResult['next_step'] = 'transport';
    $arResult['dest_page'] = 'DEST';
    break;
default:
    d($arParams['STEP']);
    $arResult['route_title'] = 'Промежуточный адрес';
    $interMCount = $arParams['VARIABLES']['intermediate_num'];
    if ($interMCount
        && isset($arResult['SAVED_DATA']['FROM'][$interMCount])
    ) {
        $arResult['address'] = $arResult['SAVED_DATA']['FROM'][$interMCount];
    }

    if(count($arResult['SAVED_DATA']['FROM']) > ($interMCount+1)){
        $arResult['next_step'] = 'intrm-' . ($interMCount+1);
    } else {
        $arResult['next_step'] = 'dest';
    }

    $arResult['dest_page'] = 'INTRM-' . $interMCount;
}

//$arResult['USE_CONTACT_DEFAULT'] = false;
//if (isset($arResult['SAVED_DATA'][$arResult['dest_page']]['USE_CONTACT_DEFAULT'])) {
//
//}
$arResult['rigging_list'] = ShmelAPI\ApiWrapper::getInstance()->getData('rigging');
$arResult['services_list'] = ShmelAPI\ApiWrapper::getInstance()->getData('services');

