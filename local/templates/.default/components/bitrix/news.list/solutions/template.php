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
<div class="ready_solutions green">
    <div class="ready_solutions__wrap box">
        <div class="ready_solutions__title_box">
            <p class="ready_solutions__title title title-left title-left title-white title-white_color">Готовые решения</p>
            <div class="ready_solutions__more ready_solutions__more-header"><a href="/ready-solutions/" class="btn btn-width btn-white btn-white_color">Все решения</a></div>
        </div>
        <div class="ready_solutions__content solutions">
            <div class="solutions__list">
                <?foreach($arResult["ITEMS"] as $arItem):?>

                <?endforeach;?>
                <div class="solutions__item">
                    <div class="solutions__name"><a href="#" class="solutions__link">Переезд квартира-студия</a></div>
                    <div class="solutions__content">
                        <ul>
                            <li>Машина на Х часов</li>
                            <li>Необходимая упаковка</li>
                        </ul>
                    </div>
                    <div class="solutions__price">от 2 999 ₽</div>
                    <div class="solutions__more"><a href="#" class="solutions__more_btn btn btn-white">Подробнее</a></div>
                </div>
                <div class="solutions__item">
                    <div class="solutions__name"><a href="#" class="solutions__link">Однокомнатная квартира</a></div>
                    <div class="solutions__content">
                        <ul>
                            <li>Машина на 6 часов</li>
                            <li>Необходимая упаковка</li>
                            <li>4 грузчика</li>
                            <li>Средняя загруженность</li>
                        </ul>
                    </div>
                    <div class="solutions__price">от 2 999 ₽</div>
                    <div class="solutions__more"><a href="#" class="solutions__more_btn btn btn-white">Подробнее</a></div>
                </div>
                <div class="solutions__item">
                    <div class="solutions__name"><a href="#" class="solutions__link">Переезд квартира-студия</a></div>
                    <div class="solutions__content">
                        <ul>
                            <li>Машина на Х часов</li>
                            <li>Необходимая упаковка</li>
                        </ul>
                    </div>
                    <div class="solutions__price">от 2 999 ₽</div>
                    <div class="solutions__more"><a href="#" class="solutions__more_btn btn btn-white">Подробнее</a></div>
                </div>
                <div class="solutions__item">
                    <div class="solutions__name"><a href="#" class="solutions__link">Однокомнатная квартира</a></div>
                    <div class="solutions__content">
                        <ul>
                            <li>Машина на 6 часов</li>
                            <li>Необходимая упаковка</li>
                            <li>4 грузчика</li>
                            <li>Средняя загруженность</li>
                        </ul>
                    </div>
                    <div class="solutions__price">от 2 999 ₽</div>
                    <div class="solutions__more"><a href="#" class="solutions__more_btn btn btn-white">Подробнее</a></div>
                </div>
            </div>
        </div>
        <div class="ready_solutions__more ready_solutions__more-footer"><a href="#" class="btn btn-white btn-white_color">Все решения</a></div>
    </div>
</div>


<?/*if($arParams["DISPLAY_TOP_PAGER"]):*/?><!--
	<?/*=$arResult["NAV_STRING"]*/?><br />
--><?/*endif;*/?>

<?/*if($arParams["DISPLAY_BOTTOM_PAGER"]):*/?><!--
	<br /><?/*=$arResult["NAV_STRING"]*/?>
--><?/*endif;*/?>

