<?
include_once($_SERVER['DOCUMENT_ROOT'].'/bitrix/modules/main/include/urlrewrite.php');

$sapi_type = php_sapi_name();
if ($sapi_type=="cgi") 
	header("Status: 404");
else 
	header("HTTP/1.1 404 Not Found");

@define("ERROR_404","Y");

require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");

$APPLICATION->SetTitle("404 - Страница не найдена");
$APPLICATION->SetPageProperty("not_show_nav_chain", "Y");
?>

<div align="center">Возможно, запрошенная Вами страница была перенесена или удалена с сайта.<br />
Вы можете воспользоваться картой сайта для перехода в интересующий Вас раздел.<br />
Приносим извинения за доставленные неудобства.</div>

<?
$APPLICATION->IncludeComponent(
	"bitrix:main.map",
	"",
	Array(
		"LEVEL" => "3", 
		"COL_NUM" => "1", 
		"SHOW_DESCRIPTION" => "N", 
		"SET_TITLE" => "Y", 
		"CACHE_TYPE" => "A", 
		"CACHE_TIME" => "3600" 
	)
);

require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>