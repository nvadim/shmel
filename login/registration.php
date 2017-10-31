<?
/* @var CMain $APPLICATION */
require_once($_SERVER['DOCUMENT_ROOT'] . "/bitrix/modules/main/include/prolog_before.php");
?>
<div class="modal" id="registration">
    <div class="modal__head">
        <div class="modal__title_box">
            <p class="modal__title">Регистрация</p>
        </div>
        <div class="modal__close_box">
            <button class="modal__close arcticmodal-close">Закрыть</button>
        </div>
    </div>
    <div class="modal__body">
        <div class="modal__form form">
            <?$APPLICATION->IncludeComponent(
                "soobwa:main.register",
                ".default",
                Array(
                    "USER_PROPERTY_NAME" => "",
                    "SHOW_FIELDS" => array('NAME', 'PERSONAL_PHONE'),
                    "REQUIRED_FIELDS" => array('NAME'),
                    "AUTH" => "N",
                    "USE_BACKURL" => "N",
                    "SUCCESS_PAGE" => "/local/include/success_reg.php",
                    "SET_TITLE" => "N",
                    "USER_PROPERTY" => array(),
                    "AJAX_MODE" => "Y",  // Включить режим AJAX
                    "AJAX_OPTION_ADDITIONAL" => "",  // Дополнительный идентификатор
                    "AJAX_OPTION_HISTORY" => "N",  // Включить эмуляцию навигации браузера
                    "AJAX_OPTION_JUMP" => "N",  // Включить прокрутку к началу компонента
                    "AJAX_OPTION_STYLE" => "N",  // Включить подгрузку стилей
                ),
                false
            );?>
        </div>
    </div>
</div>
