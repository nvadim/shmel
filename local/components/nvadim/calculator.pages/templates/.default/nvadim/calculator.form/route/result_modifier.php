<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();

$arResult['move_type'] = (isset($_POST['MOVE_TYPE']))
    ? $_POST['MOVE_TYPE']
    : (isset($_GET['move_type']) ? trim($_GET['move_type'])
        : $arResult['SAVED_DATA'][$arParams['STEP']]['MOVE_TYPE']);
