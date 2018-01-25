<?php
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/modules/main/include/prolog_before.php");

if(empty($_REQUEST['type'])) {
    die();
}

$data = $APPLICATION->IncludeComponent(
    'nvadim:wrapApi',
    '',
    Array(
        'TYPE' => $_REQUEST['type'],
        'CACHE_TIME' => 86400,
        'CACHE_TYPE' => 'A'
    )
);

if($_REQUEST['debug']) {
    d($data);
    die();
}

header('Content-Type: application/json');
echo json_encode($data, JSON_UNESCAPED_UNICODE);
