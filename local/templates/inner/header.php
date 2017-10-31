<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
require_once $_SERVER['DOCUMENT_ROOT'].'/local/include/header.php';
?>
<main class="main main-inner">
    <div class="main__navigation navigation">
        <div class="navigation__wrap box">
            <nav class="navigation__list">
                <a href="#" class="navigation__link">Переезд</a>
                <a href="#" class="navigation__link">Транспортные услуги</a>
                <a href="#" class="navigation__link">Грузчики</a>
                <a href="#" class="navigation__link">Упаковочный материал</a>
            </nav>
        </div>
    </div>
    <div class="main__breadcrumbs breadcrumbs">
        <?$APPLICATION->IncludeComponent("bitrix:breadcrumb", "bcrumb", array(
                "START_FROM" => "0",
                "PATH" => "",
                "SITE_ID" => "-"
            ),
            false,
            Array('HIDE_ICONS' => 'N')
        );?>
    </div>
    <div class="main__content">
        <div class="text_page">
            <div class="text_page__wrap box">
                <?=$APPLICATION->AddBufferContent('ShowTitleOrHeader')?>