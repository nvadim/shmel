<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();


$sData = $arResult['SAVED_DATA'];
$arResult['prev_step'] = $arParams['SEF_FOLDER'] . '#PAGE#/';
$countPlaceFrom = count($sData['FROM']);
$interMCount = $arParams['VARIABLES']['intermediate_num'];

switch($arParams['STEP']) {
case 'depart':
    $arResult['route_title'] = 'Пункт отправления';
    $arResult['address'] = $sData['FROM'][0];

    $arResult['next_step'] = 'dest';
    if(count($sData['FROM'])>1) {
        $arResult['next_step'] = 'intrm-1';
    }
    $prevPage = 'route';

    $arResult['num_bulavka'] = '1';
    $arResult['current_page'] = 'DEPART';
    break;
case 'dest':
    $arResult['route_title'] = 'Пункт назначения';
    $arResult['address'] = $sData['TO'];

    $arResult['num_bulavka'] = count($sData['FROM'])+1;
    $arResult['next_step'] = 'transport';

    if($interMCount && isset($sData['FROM'][$interMCount])) {
        if($interMCount==1)
            $prevPage = 'route';
        else
            $prevPage = 'intrm-' . ($interMCount-1);
    }

    $arResult['current_page'] = 'DEST';
    break;
default:
    $arResult['route_title'] = 'Промежуточный адрес';
    $arResult['num_bulavka'] = $interMCount+1;

    if ($interMCount
        && isset($sData['FROM'][$interMCount])
    ) {
        $arResult['address'] = $sData['FROM'][$interMCount];
    }

    if($interMCount && $countPlaceFrom > ($interMCount+1)){
        $arResult['next_step'] = 'intrm-' . ($interMCount+1);
    } else {
        $arResult['next_step'] = 'dest';
    }

    $arResult['current_page'] = 'INTRM-' . $interMCount;
}
$arResult['prev_step'] = str_replace('#PAGE#', $prevPage, $arResult['prev_step']);

$arResult['rigging_list'] = ShmelAPI\ApiWrapper::getInstance()->getData('rigging');
$arResult['services_list'] = ShmelAPI\ApiWrapper::getInstance()->getData('services');

