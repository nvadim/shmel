<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();

$data = $arResult['SAVED_DATA'];

$transports = &$arResult['SAVED_DATA']['transport_list'];
$cars = ShmelAPI\ApiWrapper::getInstance()->getData('cars');

foreach ($cars as $car) {
    if($car->StructRate->Rate != 'Переезд Без НДС')
        continue;

    foreach ($transports as $st => &$trItem) {
        if($car->StructCathegory->ID != $trItem['ID'])
            continue;

        if (strpos($car->StructRateCondition->RateCondition, $trItem['TypeOfLease']) === false)
            continue;

        $arStr = explode(' ', $car->StructRateCondition->RateCondition);
        if(array_intersect($arResult['SAVED_DATA']['timeRegion'] , $arStr)) {
            $trItem['PRICE'] = $car->Price;
        }
    }

}

$arResult['select_route'] = $data['route']['FROM'];
$arResult['select_route']['to'] = $data['route']['TO'];

$arResult['select_list_value'] = [
    'load' => 'Загрузка',
    'upload' => 'Выгрузка',
    'both_load' => 'Загрузка/Выгрузка',
];