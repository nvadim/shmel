<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();

$arResult['categoriesTransport'] = ShmelTools\Options::getInstance()->getProperty('catTransport');

$data = $arResult['SAVED_DATA'];
$arResult['select_route'] = $data['route']['FROM'];
$arResult['select_route']['to'] = $data['route']['TO'];

$arResult['select_list_value'] = [
    'load' => 'Загрузка',
    'upload' => 'Выгрузка',
    'both_load' => 'Загрузка/Выгрузка',
];

$arResult['categories'] = ShmelTools\Options::getInstance()->getProperty('catTransport');