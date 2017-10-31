<?
/* @var CMain $APPLICATION */
require_once($_SERVER['DOCUMENT_ROOT'] . "/bitrix/modules/main/include/prolog_before.php");
?>
<div class="modal" id="auth">
    <div class="modal__head">
        <div class="modal__title_box">
            <p class="modal__title">
                <?if($_REQUEST["forgot_password"] == "yes"):?>
                    Восстановление пароля
                <?elseif($_REQUEST["change_password"] == "yes"):?>
                    Восстановление пароля
                <?elseif($_REQUEST["confirm_registration"] == "yes"):?>
                    Подтверждение регистрации
                <?else:?>
                    Авторизация
                <?endif;?>
            </p>
        </div>
        <div class="modal__close_box">
            <button class="modal__close arcticmodal-close">Закрыть</button>
        </div>
    </div>
    <div class="modal__body">
        <?if($_REQUEST["forgot_password"] == "yes"):?>
            <?$APPLICATION->IncludeComponent(
                "bitrix:system.auth.forgotpasswd",
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
        <?elseif($_REQUEST["change_password"] == "yes"):?>
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
        <?elseif($_REQUEST["confirm_registration"] == "yes"):?>
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
        <?else:?>
        <?$APPLICATION->IncludeComponent(
            "bitrix:system.auth.form",
            "",
            Array(
                "REGISTER_URL" => "/login/",
                "FORGOT_PASSWORD_URL" => "/login/auth.php",
                "PROFILE_URL" => "/personal/",
                "SHOW_ERRORS" => "Y",
                "AJAX_MODE" => "Y",  // Включить режим AJAX
                "AJAX_OPTION_ADDITIONAL" => "",  // Дополнительный идентификатор
                "AJAX_OPTION_HISTORY" => "N",  // Включить эмуляцию навигации браузера
                "AJAX_OPTION_JUMP" => "N",  // Включить прокрутку к началу компонента
                "AJAX_OPTION_STYLE" => "N",  // Включить подгрузку стилей
            ),
            false
        );?>
        <?endif;?>
    </div>
</div>