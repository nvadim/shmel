<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
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

<div class="navigator">
    <button class="navigator__printing" type="button">Печать</button>
    <p class="navigator__title sidebar__title">Навигатор</p>
    <div class="navigator__list"><!--navigator__item navigator__item-active-->
        <? foreach ($arResult['pages'] as $key => $page) {?>
            <div class="navigator__item<?= ($page['IS_CURRENT'])? ' navigator__item-active':''?>">
                <span class="navigator__icon"><i class="navigator__i"></i></span>
                <a href="<?= $page['URL']?>" class="navigator__link"><?= $page['TEXT']?></a>
            </div>
        <? }?>
    </div>
    <p class="navigator__total_default">Рекомендованая цена: <span class="navigator__total_price"><!--39 985 ₽--></span></p>
    <p class="navigator__total">Итого: <span class="navigator__total_price"><!--39 985 ₽--></span></p>
    <div class="navigator__buttons">
        <button class="navigator__btn btn" type="button">Оформить заказ</button>
    </div>
</div>

