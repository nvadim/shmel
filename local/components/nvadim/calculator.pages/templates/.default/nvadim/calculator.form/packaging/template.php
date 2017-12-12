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

<div class="move_calc">
    <form action="<?=$APPLICATION->GetCurPageParam() ?>" name="calc_form" method="POST" class="move_calc__form">
        <input type="hidden" name="CURRENT_PAGE" value="<?= $arParams['STEP']?>">

        <div class="move_step move_step-active move_step3">
            <div class="move_step3__list">
                <div class="move_step3__item move_config">
                    <div class="move_config__head">
                        <div class="move_config__left">
                            <p class="move_config__spoiler_title">Упаковка <span class="move_config__spoiler_gray">— Наши рекомендации:</span></p>
                        </div>
                        <div class="move_config__right">
                            <button class="btn btn-white" type="button">Откорректировать вручную</button>
                        </div>
                    </div>
                    <div class="move_config__content">
                        <div class="default_content">
                            <div class="default_content__left">
                                <div class="default_content__pic"><img src="img/kits2.svg" alt="" class="default_content__img"></div>
                                <div class="default_content__desc">
                                    <p class="default_content__text">Набор упаковочных материалов для переезда однокомнатной квартиры</p>
                                </div>
                            </div>
                            <div class="default_content__right">
                                <div class="one_default">
                                    <p class="one_default__title">
                                        Набор для 1-комнатной квартиры:
                                        <span class="one_default__tooltip tooltip" title="srgdsf">?</span>
                                    </p>
                                    <div class="one_default__flex">
                                        <div class="one_default__text_box">
                                            <p class="one_default__text">Кол-во: 1</p>
                                            <p class="one_default__text">Стоимость набора: 5 750 ₽</p>
                                        </div>
                                        <div class="one_default__flex_button">
                                            <button class="btn btn-white" type="button">Удалить упаковку из заказа</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="one_default">
                                    <table class="one_default__table">
                                        <tr class="tr one_default__tr">
                                            <td class="one_default__td">Короб универсальный:</td>
                                            <td class="one_default__td">25 шт</td>
                                        </tr>
                                        <tr class="tr one_default__tr">
                                            <td class="one_default__td">Короб универсальный малый:</td>
                                            <td class="one_default__td">15 шт</td>
                                        </tr>
                                        <tr class="tr one_default__tr">
                                            <td class="one_default__td">Короб для одежды:</td>
                                            <td class="one_default__td">26 шт</td>
                                        </tr>
                                        <tr class="tr one_default__tr">
                                            <td class="one_default__td">Плёнка воздушно-пузырчатая, 115 мкр:</td>
                                            <td class="one_default__td">20 метров</td>
                                        </tr>
                                        <tr class="tr one_default__tr">
                                            <td class="one_default__td">Короб универсальный:</td>
                                            <td class="one_default__td">25 уп</td>
                                        </tr>
                                        <tr class="tr one_default__tr">
                                            <td class="one_default__td">Короб универсальный малый:</td>
                                            <td class="one_default__td">15 уп</td>
                                        </tr>
                                        <tr class="tr one_default__tr">
                                            <td class="one_default__td">Короб для одежды:</td>
                                            <td class="one_default__td">26 уп</td>
                                        </tr>
                                        <tr class="tr one_default__tr">
                                            <td class="one_default__td">Плёнка воздушно-пузырчатая, 115 мкр:</td>
                                            <td class="one_default__td">20 шт</td>
                                        </tr>
                                    </table>
                                </div>
                                <hr class="separator">
                                <div class="one_default">
                                    <label for="check_address" class="one_default__title one_default__title-big">Куда привезти упаковку: <span class="one_default__tooltip tooltip" title="srgdsf">?</span></label>
                                    <div class="check_inline__one">
                                        <select name="check_address" id="check_address" class="check_address_rigging__select form__select">
                                            <option value="">Москва, ул. Яблочкова д.18 к.3</option>
                                            <option value="">Москва, Бумажный проезд 14 с1</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="move_config__no_hidden move_config__no_hidden-green">
                    <div class="total_green">
                        <span class="total_green__text">Итого, стоимость упаковки:</span>
                        <span class="total_green__price">5 750 ₽</span>
                    </div>
                </div>
            </div>
            <div class="move_step__buttons move_step1__buttons">
                <button class="move_step__btn btn btn-white" type="button" onClick='location.href="./move_step3_2.html"'>Предыдущий шаг</button>
                <button class="move_step__btn btn" type="button" onClick='location.href="./move_step3_4.html"'>Далее</button>
            </div>
        </div>
    </form>
</div>
