<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();


$data = $arResult['SAVED_DATA'];
$currentStep = &$arResult['SAVED_DATA'][$arParams['STEP']];

$arResult['prev_step'] = $arParams['SEF_FOLDER'] . '#PAGE#/';
$countPlaceFrom = count($data['route']['FROM']);
$interMCount = $arParams['VARIABLES']['intermediate_num'];

switch($arParams['STEP']) {
case 'depart':
    $arResult['route_title'] = 'Пункт отправления';
    $arResult['address'] = $data['route']['FROM'][0];

    $prevPage = 'route';

    $arResult['num_bulavka'] = '1';
    break;
case 'dest':
    $arResult['route_title'] = 'Пункт назначения';
    $arResult['address'] = $data['route']['TO'];

    $arResult['num_bulavka'] = count($data['route']['FROM'])+1;

    break;
default:
    $arResult['route_title'] = 'Промежуточный адрес';
    $arResult['num_bulavka'] = $interMCount+1;

    if ($interMCount
        && isset($data['route']['FROM'][$interMCount])
    ) {
        $arResult['address'] = $data['route']['FROM'][$interMCount];
    }
}

if($interMCount && isset($data['route']['FROM'][$interMCount])) {
    if($interMCount==1)
        $prevPage = 'depart';
    else
        $prevPage = 'intrm-' . ($interMCount-1);
} else {
    if($countPlaceFrom>1) {
        $prevPage = 'intrm-'.($countPlaceFrom-1);
    } else {
        $prevPage = 'depart';
    }
}

$arResult['prev_step'] = str_replace('#PAGE#', $prevPage, $arResult['prev_step']);

$currentStep['use_contact_not_checked'] = (!$currentStep['USE_CONTACT_DEFAULT']
        && $currentStep['CONTACT_NAME']
        && $currentStep['CONTACT_PHONE'])
    || !$data['route']['USE_CONTACT_FOR_ALL'];

$arResult['rigging_list'] = [
    ['ID' => 'rigging_pianino', 'NAME' => 'Пианино'],
    ['ID' => 'rigging_aqua', 'NAME' => 'Аквариум'],
    ['ID' => 'rigging_service', 'NAME' => 'Вывоз мусора'],
    ['ID' => 'rigging_other', 'NAME' => 'Другое'],
];
$arResult['services_list'] = ShmelAPI\ApiWrapper::getInstance()->getData('services');

