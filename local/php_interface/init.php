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
            $res = '<h1 class="title title-left">'.$APPLICATION->GetPageProperty("ADDITIONAL_TITLE").'</h1>';
        else
            $res = '<h1 class="title title-left">'.$APPLICATION->GetTitle(false).'</h1>';
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