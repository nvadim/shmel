<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();

$data = $arResult['SAVED_DATA'];

//$key = 'from';
//for($i = 0; $i<count($data['FROM']); $i++) {
//    if($i>0)
//        $i = 'intrm-' . $i;
//
//    $arResult['select_route'][$key] = $data['FROM'][$i];
//}
$arResult['select_route'] = $data['FROM'];
$arResult['select_route']['to'] = $data['TO'];