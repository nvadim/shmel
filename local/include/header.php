<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
use \Bitrix\Main\Localization\Loc;
use \Bitrix\Main\Page\Asset;
/* @var CMain $APPLICATION */
Loc::loadLanguageFile($_SERVER["DOCUMENT_ROOT"] . "/local/templates/" . SITE_TEMPLATE_ID . "/header.php");
\CJSCore::Init(array("ajax"));
\CAjax::Init();
$curPage = $APPLICATION->GetCurPage(true);
$curPageDefault = $APPLICATION->GetCurPage();
?>
<!DOCTYPE html>
<html lang="<?=LANGUAGE_ID?>">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><? $APPLICATION->ShowTitle() ?></title>
    <?
    Asset::getInstance()->addCss(FRONEND_BUILD_PATH.'css/vendor.min.css');
    Asset::getInstance()->addCss(FRONEND_BUILD_PATH.'css/main.css');

    Asset::getInstance()->addCss('//cdnjs.cloudflare.com/ajax/libs/fancybox/3.0.47/jquery.fancybox.min.css', true);
    Asset::getInstance()->addJs('//cdnjs.cloudflare.com/ajax/libs/fancybox/3.0.47/jquery.fancybox.min.js', true);

    Asset::getInstance()->addJs(FRONEND_BUILD_PATH.'js/vendor.min.js');
    Asset::getInstance()->addJs(FRONEND_BUILD_PATH.'js/main.min.js');
    ?>
    <? $APPLICATION->ShowHead(); ?>
</head>
<body>
<? $APPLICATION->ShowPanel(); ?>
<!--<noscript class="no_script_message">
    У вас отключен JavaScript. Сайт может отображаться некорректно. Рекомендуем включить JavaScript.
</noscript>-->
<header class="header">
    <div class="header__wrap box">
        <div class="header__left">
            <div class="header__mobile"><span class="header__burger"></span><span class="header__burger"></span><span class="header__burger"></span></div>
            <a href="<?=SITE_DIR?>" class="header__logo logo">
                <img class="logo__img logo__img-desktop" src="<?=FRONEND_BUILD_PATH?>img/logo.svg" onerror="this.onerror=null; this.src='img/logo.png'" alt="" width="100">
                <img class="logo__img logo__img-mobile" src="<?=FRONEND_BUILD_PATH?>img/logo_mobile.svg" onerror="this.onerror=null; this.src='img/logo_mobile.png'" alt="" width="100">
            </a>
        </div>
        <div class="header__right h_navigation">
            <div class="h_navigation__head">
                <?$APPLICATION->IncludeComponent(
                    "bitrix:menu",
                    "top",
                    Array(
                        "ALLOW_MULTI_SELECT" => "N",
                        "CHILD_MENU_TYPE" => "left",
                        "DELAY" => "N",
                        "MAX_LEVEL" => "1",
                        "MENU_CACHE_GET_VARS" => array(""),
                        "MENU_CACHE_TIME" => "3600",
                        "MENU_CACHE_TYPE" => "N",
                        "MENU_CACHE_USE_GROUPS" => "N",
                        "ROOT_MENU_TYPE" => "top",
                        "USE_EXT" => "N"
                    )
                );?>
                <div class="h_navigation__search search">
                    <form action="" class="search__form">
                        <input type="text" class="search__input" placeholder="Поиск">
                        <button type="submit" class="search__button">Найти</button>
                    </form>
                </div>
                <div class="h_navigation__lk h_lk">
                    <?$APPLICATION->IncludeComponent(
                        "bitrix:system.auth.form",
                        "top_line",
                        Array(
                            "REGISTER_URL" => "/login/",
                            "FORGOT_PASSWORD_URL" => "/login/",
                            "PROFILE_URL" => "/personal/",
                            "SHOW_ERRORS" => "N",
                        ),
                        false
                    );?>
                </div>
            </div>
            <div class="h_navigation__body">
                <div class="h_navigation__phone h_phone">
                    <?$APPLICATION->IncludeFile("/local/include/top_contacts.php", [], ['MODE' => 'php']);?>
                </div>
                <div class="h_navigation__contacts h_contacts">
                    <a href="skype:shmel-pereezd2?call" class="h_contacts__item">
                        <i class="h_contacts__ico h_contacts__ico-skype">Skype</i>
                        <span class="h_contacts__text h_contacts__text-hidden"><?$APPLICATION->IncludeFile("/local/include/top_skype.php", [], ['MODE' => 'php']);?></span>
                    </a>
                    <a href="mailto:info@shmel-pereezd.ru" class="h_contacts__item">
                        <i class="h_contacts__ico h_contacts__ico-email">E-mail</i>
                        <span class="h_contacts__text h_contacts__text-hidden"><?$APPLICATION->IncludeFile("/local/include/top_email.php", [], ['MODE' => 'php']);?></span>
                    </a>
                </div>
                <div class="h_navigation__services_info services_info">
                    <a href="#" class="services_info__one">
                        <span class="services_info__name">Сохраненные услуги</span>
                        <span class="services_info__count services_info__count-green">3</span>
                    </a>
                    <a href="#" class="services_info__one">
                        <span class="services_info__name">
                            Товаров
                            <span class="services_info__price services_info__price-mobile">7 584 ₽</span>
                        </span>
                        <span class="services_info__count services_info__count-orange">55</span>
                        <span class="services_info__price">7 584 ₽</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</header>