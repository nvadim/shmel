<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();

$arResult['type'] = (isset($_POST[$arParams['STEP']]['TYPE']))
    ? $_POST[$arParams['STEP']]['MOVE_TYPE']
    : (isset($_GET['type']) ? trim($_GET['type'])
        : $_SESSION[$arParams['SESSION_CODE']][$arParams['STEP']]['TYPE']);
