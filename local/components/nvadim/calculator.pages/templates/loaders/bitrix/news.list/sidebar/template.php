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

<div class="ready_made">
    <p class="ready_made__title sidebar__title sidebar__title-gray">
        Готовые решения</p>
    <div class="ready_made__list">
        <?foreach($arResult["ITEMS"] as $arItem):?>

        <?endforeach;?>
        <div class="ready_made__item ready_item">
            <p class="ready_item__name">Переезд
                квартира-студия</p>
            <ul class="ready_item__list">
                <li class="ready_item__item">Машина на Х
                    часов
                </li>
                <li class="ready_item__item">Необходимая
                    упаковка
                </li>
            </ul>
            <p class="ready_item__price">от 2 999 ₽</p>
            <div class="ready_item__btn"><a href=""
                                            class="btn btn-white">Подробнее</a>
            </div>
        </div>
        <div class="ready_made__item ready_item">
            <p class="ready_item__name">Однокомнатная
                квартира</p>
            <ul class="ready_item__list">
                <li class="ready_item__item">Машина на 6
                    часов
                </li>
                <li class="ready_item__item">Необходимая
                    упаковка
                </li>
                <li class="ready_item__item">4
                    грузчика
                </li>
                <li class="ready_item__item">Средняя
                    загруженность
                </li>
            </ul>
            <p class="ready_item__price">от 2 999 ₽</p>
            <div class="ready_item__btn"><a href="" class="btn btn-white">Подробнее</a></div>
        </div>
        <div class="ready_made__item ready_item">
            <p class="ready_item__name">Переезд
                квартира-студия</p>
            <ul class="ready_item__list">
                <li class="ready_item__item">Машина на Х
                    часов
                </li>
                <li class="ready_item__item">Необходимая
                    упаковка
                </li>
            </ul>
            <p class="ready_item__price">от 2 999 ₽</p>
            <div class="ready_item__btn"><a href="" class="btn btn-white">Подробнее</a></div>
        </div>
    </div>
</div>
<?/*if($arParams["DISPLAY_TOP_PAGER"]):*/?><!--
	<?/*=$arResult["NAV_STRING"]*/?><br />
--><?/*endif;*/?>

<?/*if($arParams["DISPLAY_BOTTOM_PAGER"]):*/?><!--
	<br /><?/*=$arResult["NAV_STRING"]*/?>
--><?/*endif;*/?>

