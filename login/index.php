<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
/* @var CMain $APPLICATION */
$APPLICATION->SetTitle("Авторизация");
global $USER;

if($USER->IsAuthorized())
{
    LocalRedirect('/personal/');
}
elseif($_REQUEST["change_password"] == "yes")
{
    ?>
    <?$APPLICATION->IncludeComponent(
        "bitrix:system.auth.changepasswd",
        "",
        Array(
            "CACHE_TYPE" => "N",
            "SHOW_ERRORS" => "Y",
            "AJAX_MODE" => "Y",  // Включить режим AJAX
            "AJAX_OPTION_ADDITIONAL" => "",  // Дополнительный идентификатор
            "AJAX_OPTION_HISTORY" => "N",  // Включить эмуляцию навигации браузера
            "AJAX_OPTION_JUMP" => "N",  // Включить прокрутку к началу компонента
            "AJAX_OPTION_STYLE" => "N",  // Включить подгрузку стилей
        )
    );?>
    <?
}
elseif($_REQUEST["confirm_registration"] == "yes")
{
	?>
    <?$APPLICATION->IncludeComponent(
        "bitrix:system.auth.confirmation",
        "",
        Array(
            "SHOW_ERRORS" => "Y",
            "AJAX_MODE" => "Y",  // Включить режим AJAX
            "AJAX_OPTION_ADDITIONAL" => "",  // Дополнительный идентификатор
            "AJAX_OPTION_HISTORY" => "N",  // Включить эмуляцию навигации браузера
            "AJAX_OPTION_JUMP" => "N",  // Включить прокрутку к началу компонента
            "AJAX_OPTION_STYLE" => "N",  // Включить подгрузку стилей
        )
    );?>
    <?
}
else
{
    ?>
    <?$APPLICATION->IncludeComponent(
        "bitrix:system.auth.form",
        "",
        Array(
            "REGISTER_URL" => "/login/",
            "FORGOT_PASSWORD_URL" => "/login/auth.php",
            "PROFILE_URL" => "/personal/",
            "SHOW_ERRORS" => "N",
            "AJAX_MODE" => "N",  // Включить режим AJAX
            "AJAX_OPTION_ADDITIONAL" => "",  // Дополнительный идентификатор
            "AJAX_OPTION_HISTORY" => "N",  // Включить эмуляцию навигации браузера
            "AJAX_OPTION_JUMP" => "N",  // Включить прокрутку к началу компонента
            "AJAX_OPTION_STYLE" => "N",  // Включить подгрузку стилей
        ),
    false
    );?>
    <?
}
?>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>