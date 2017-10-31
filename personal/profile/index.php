<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
/* @var CMain $APPLICATION */
$APPLICATION->SetTitle("Редактирование профиля");
?>

<?$APPLICATION->IncludeComponent(
    "bitrix:main.profile",
    "user_profile",
    Array(
        "CHECK_RIGHTS" => "N",
        "SEND_INFO" => "N",
        "SET_TITLE" => "Y",
        "USER_PROPERTY" => array(),
        "USER_PROPERTY_NAME" => "",
        "AJAX_MODE" => "N",  // Включить режим AJAX
        "AJAX_OPTION_ADDITIONAL" => "",  // Дополнительный идентификатор
        "AJAX_OPTION_HISTORY" => "N",  // Включить эмуляцию навигации браузера
        "AJAX_OPTION_JUMP" => "N",  // Включить прокрутку к началу компонента
        "AJAX_OPTION_STYLE" => "N",  // Включить подгрузку стилей
    )
);?>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>