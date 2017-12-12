<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();


$sData = $arResult['SAVED_DATA'];
$currentStep = &$arResult['SAVED_DATA'][$arParams['STEP']];

$arResult['prev_step'] = $arParams['SEF_FOLDER'] . '#PAGE#/';
$countPlaceFrom = count($sData['FROM']);
$interMCount = $arParams['VARIABLES']['intermediate_num'];

switch($arParams['STEP']) {
case 'depart':
    $arResult['route_title'] = 'Пункт отправления';
    $arResult['address'] = $sData['FROM'][0];

    $prevPage = 'route';

    $arResult['num_bulavka'] = '1';
    break;
case 'dest':
    $arResult['route_title'] = 'Пункт назначения';
    $arResult['address'] = $sData['TO'];

    $arResult['num_bulavka'] = count($sData['FROM'])+1;

    if($interMCount && isset($sData['FROM'][$interMCount])) {
        if($interMCount==1)
            $prevPage = 'route';
        else
            $prevPage = 'intrm-' . ($interMCount-1);
    }

    break;
default:
    $arResult['route_title'] = 'Промежуточный адрес';
    $arResult['num_bulavka'] = $interMCount+1;

    if ($interMCount
        && isset($sData['FROM'][$interMCount])
    ) {
        $arResult['address'] = $sData['FROM'][$interMCount];
    }
}
//d($prevPage,'prevPage');
$arResult['prev_step'] = str_replace('#PAGE#', $prevPage, $arResult['prev_step']);

$currentStep['use_contact_not_checked'] = (!$currentStep['USE_CONTACT_DEFAULT']
        && $currentStep['CONTACT_NAME']
        && $currentStep['CONTACT_PHONE'])
    || !$sData['USE_CONTACT_FOR_ALL'];

$arResult['rigging_list'] = ShmelAPI\ApiWrapper::getInstance()->getData('rigging');
$arResult['services_list'] = ShmelAPI\ApiWrapper::getInstance()->getData('services');

