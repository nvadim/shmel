<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);
?>
<div class="shares_main gray">
    <div class="shares_main__wrap box">
        <div class="shares_main__title_box">
            <p class="shares_main__title title title-left title-left_orange">Акции</p>
            <div class="shares_main__more shares_main__more-header"><a href="/shares/" class="btn btn-width btn-white">Все акции</a></div>
        </div>
        <div class="shares_main__content shares">
            <div class="shares__list">

<?/*if($arParams["DISPLAY_TOP_PAGER"]):*/?><!--
	<?/*=$arResult["NAV_STRING"]*/?><br />
--><?/*endif;*/?>
            <?foreach($arResult["ITEMS"] as $arItem):?>
                <a href="<?= $arItem['DETAIL_PAGE_URL']?>" class="shares__item">
                    <span class="shares__pic">
                        <img src="<?= $arItem['PREVIEW_PICTURE']['SRC']?>" class="shares__img">
                             <!--srcset="<?/*= FRONEND_BUILD_PATH*/?>img/shares@2x.jpg 2x, <?/*= FRONEND_BUILD_PATH*/?>img/shares@3x.jpg 3x"-->

                    </span>
                    <span class="shares__content">
                        <span class="shares__name">Упаковочный материал в подарок!</span>
                        <span class="shares__text">При заказе такелажных работ на время не менее одного часа</span>
                    </span>
                </a>
            <?endforeach;?>
            </div>
        </div>
        <div class="shares_main__more shares_main__more-footer"><a href="#" class="btn btn-white">Все акции</a></div>
    </div>
</div>
<?/*if($arParams["DISPLAY_BOTTOM_PAGER"]):*/?><!--
	<br /><?/*=$arResult["NAV_STRING"]*/?>
--><?/*endif;*/?>

