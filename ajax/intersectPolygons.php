<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/modules/main/include/prolog_before.php");

if ($_REQUEST['code']) {
    $sess_data = &$_SESSION[$_REQUEST['code']];

    $sess_data['IS_MKAD'] = $_REQUEST['mkad'];
    $sess_data['IS_TTK'] = $_REQUEST['ttk'];
    $sess_data['IS_SK'] = $_REQUEST['sk'];
}
