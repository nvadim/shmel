<?
@require_once 'include/autoload.php';
@require_once $_SERVER['DOCUMENT_ROOT'] . '/local/vendor/autoload.php';

define("RE_SITE_KEY","6Lcm3yMUAAAAAFyK24foQGgwg4OJLDPJmiNryMzp");
define("RE_SEC_KEY","6Lcm3yMUAAAAAMx4h6ARTiOfQ-z3MVV13QG0jcdz");

if (file_exists($_SERVER["DOCUMENT_ROOT"]."/local/php_interface/include/functions-dump.php"))
    require_once($_SERVER["DOCUMENT_ROOT"]."/local/php_interface/include/functions-dump.php");

if (file_exists($_SERVER["DOCUMENT_ROOT"]."/local/php_interface/include/constants.php"))
    require_once($_SERVER["DOCUMENT_ROOT"]."/local/php_interface/include/constants.php");

// if (file_exists($_SERVER["DOCUMENT_ROOT"]."/local/php_interface/include/agent-check-stocks.php"))
// 	require_once($_SERVER["DOCUMENT_ROOT"]."/local/php_interface/include/agent-check-stocks.php");

 if (file_exists($_SERVER["DOCUMENT_ROOT"]."/local/php_interface/include/event_handlers.php"))
 	require_once($_SERVER["DOCUMENT_ROOT"]."/local/php_interface/include/event_handlers.php");

function ShowTitleOrHeader()
{
    global $APPLICATION;
    $res = "";
    if ($APPLICATION->GetPageProperty("not_show_h1") != 'Y') {
        if ($APPLICATION->GetPageProperty("ADDITIONAL_TITLE"))
            $res = '<h1 class="title title-left title-not_before">'.$APPLICATION->GetPageProperty("ADDITIONAL_TITLE").'</h1>';
        else
            $res = '<h1 class="title title-left title-not_before">'.$APPLICATION->GetTitle(false).'</h1>';
    }
    return $res;
}

function ShowTitleOrHeaderFooter()
{
    global $APPLICATION;
    $res = "";
    if ($APPLICATION->GetPageProperty("not_show_h1") != 'Y') {
        if ($APPLICATION->GetPageProperty("ADDITIONAL_TITLE"))
            $res = $APPLICATION->GetPageProperty("ADDITIONAL_TITLE");
        else
            $res = $APPLICATION->GetTitle(false);
    }
    return $res;
}

function declOfNum($number, $titles) {
    $cases = array (2, 0, 1, 1, 1, 2);
    return $titles[ ($number % 100 > 4 && $number % 100 < 20) ? 2 : $cases[min($number % 10, 5)] ];
}

function SaleFormatCurrencyDev($price)
{
    return number_format($price, 0, '',' ');
}

// категории транспорта
// стат. значения картинок, параметров
ShmelTools\Options::getInstance()->setProperty('catTransport', [
    '000000001' => ['id' => '000000001', 'img' => '/local/assets/src/img/1cat.svg', 'pass' => 1, 'name' => '1-я категория', 'weight' => 1.5, 'volume' => 9],
    '000000002' => ['id' => '000000002', 'img' => '/local/assets/src/img/2cat.svg', 'pass' => 1, 'name' => '2-я категория', 'weight' => 1.5, 'volume' => 16],
    '000000003' => ['id' => '000000003', 'img' => '/local/assets/src/img/3cat.svg', 'pass' => 1, 'name' => '3-я категория', 'weight' => 3, 'volume' => 18],
    '000000005' => ['id' => '000000005', 'img' => '/local/assets/src/img/5cat.svg', 'pass' => 0, 'name' => '5-я категория', 'weight' => 5, 'volume' => 36],
    '000000006' => ['id' => '000000006', 'img' => '/local/assets/src/img/6cat.svg', 'pass' => 0, 'name' => '6-я категория', 'weight' => 10, 'volume' => 43],
    '000000007' => ['id' => '000000007', 'img' => '/local/assets/src/img/7cat.svg', 'pass' => 0, 'name' => '7-я категория', 'weight' => 20, 'volume' => 90],
]);

// выпадающий список выгрузки/загрузки
ShmelTools\Options::getInstance()->setProperty('selectList', [
    'load' => 'Загрузка',
    'upload' => 'Выгрузка',
    'both_load' => 'Загрузка/Выгрузка',
]);


