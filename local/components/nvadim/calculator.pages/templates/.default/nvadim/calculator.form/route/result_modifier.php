<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();

$arResult['move_type'] = (isset($_POST[$arParams['STEP']]['MOVE_TYPE']))
    ? $_POST[$arParams['STEP']]['MOVE_TYPE']
    : (isset($_GET['move_type']) ? trim($_GET['move_type'])
        : $_SESSION['MOVE_FORM'][$arParams['STEP']]['MOVE_TYPE']);
