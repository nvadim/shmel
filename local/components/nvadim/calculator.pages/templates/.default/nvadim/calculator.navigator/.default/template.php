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
    <div class="navigator__list">
        <div class="navigator__item">
            <span class="navigator__icon"><i class="navigator__i"></i></span>
            <a href="<?= $arResult['page_route']?>" class="navigator__link">Маршрут</a>
        </div>
        <div class="navigator__item">
            <span class="navigator__icon"><i class="navigator__i"></i></span>
            <a href="<?= $arResult['page_depart']?>" class="navigator__link">Пункт отправления <span class="navigator__price"></span></a>
        </div>
        <? foreach($arResult['pages_intrm'] as $i => $page) { ?>
        <div class="navigator__item">
            <span class="navigator__icon"><i class="navigator__i"></i></span>
            <a href="<?= $page?>" class="navigator__link">Промежуточный адрес <?= $i?><span class="navigator__price"></span></a>
        </div>
        <? }?>
        <div class="navigator__item">
            <span class="navigator__icon"><i class="navigator__i"></i></span>
            <a href="<?= $arResult['page_dest']?>" class="navigator__link">Пункт назначения <span class="navigator__price"></span></a>
        </div>
        <div class="navigator__item">
            <span class="navigator__icon"><i class="navigator__i"></i></span>
            <a href="<?= $arResult['page_transport']?>" class="navigator__link">Транспорт <span class="navigator__price"></span></a>
        </div>
        <div class="navigator__item">
            <span class="navigator__icon"><i class="navigator__i"></i></span>
            <a href="<?= $arResult['page_loaders']?>" class="navigator__link">Грузчики <span class="navigator__price"></span></a>
        </div>
        <div class="navigator__item">
            <span class="navigator__icon"><i class="navigator__i"></i></span>
            <a href="<?= $arResult['page_packaging']?>" class="navigator__link">Упаковка <span class="navigator__price"></span></a>
        </div>
        <div class="navigator__item">
            <span class="navigator__icon"><i class="navigator__i"></i></span>
            <a href="<?= $arResult['page_rigging']?>" class="navigator__link">Такелажные работы <span class="navigator__price"></span></a>
        </div>
    </div>
    <p class="navigator__total_default">Рекомендованая цена: <span class="navigator__total_price"><!--39 985 ₽--></span></p>
    <p class="navigator__total">Итого: <span class="navigator__total_price"><!--39 985 ₽--></span></p>
    <div class="navigator__buttons">
        <button class="navigator__btn btn" type="button">Оформить заказ</button>
    </div>
</div>

