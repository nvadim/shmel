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
                            <a class="btn btn-white" href="#">Откорректировать вручную</a>
                        </div>
                    </div>
                    <div class="move_config__content">
                        <div class="default_content">
                            <div class="default_content__left">
                                <div class="default_content__pic"><img src="<?= FRONEND_BUILD_PATH?>img/kits2.svg" alt="" class="default_content__img"></div>
                                <div class="default_content__desc">
                                    <p class="default_content__text">Набор упаковочных материалов для переезда</p>
                                </div>
                            </div>
                            <div class="default_content__right">
                                <div class="one_default">
                                    <!--<p class="one_default__title">
                                        Набор для 1-комнатной квартиры:
                                        <span class="one_default__tooltip tooltip" title="srgdsf">?</span>
                                    </p>-->
                                    <div class="one_default__flex">
                                        <div class="one_default__text_box">
                                            <p class="one_default__text">Кол-во: 1</p>
                                            <p class="one_default__text">Стоимость набора: <?= SaleFormatCurrencyDev($arResult['RESULT_PRICE'])?> ₽</p>
                                        </div>
                                        <div class="one_default__flex_button">
                                            <button class="btn btn-white" type="button">Удалить упаковку из заказа</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="one_default">
                                    <table class="one_default__table">
                                        <? foreach ($arResult['ITEMS'] as $pack_item) {?>
                                            <tr class="tr one_default__tr">
                                                <td class="one_default__td"><?= $pack_item['NAME']?>:</td>
                                                <td class="one_default__td"><?= "{$pack_item['NUM']} {$pack_item['UNIT']}"?></td>
                                            </tr>
                                        <? }?>
                                    </table>
                                </div>
                                <hr class="separator">
                                <div class="one_default">
                                    <? $_selectField = 'class="check_address_rigging__select form__select"';?>
                                    <div class="check_inline__one d-check_inline__one">
                                        <?= SelectBoxFromArray(
                                            "check_address",
                                            $arResult['select_route'],
                                            $_REQUEST["check_address"],
                                            'Куда привезти упаковку?',
                                            $_selectField);?>
                                    </div>
                                    <label class="one_default__title one_default__title-big"><span class="one_default__tooltip tooltip" title="srgdsf">?</span></label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="move_config__no_hidden move_config__no_hidden-green">
                    <div class="total_green">
                        <span class="total_green__text">Итого, стоимость упаковки:</span>
                        <span class="total_green__price"><?= SaleFormatCurrencyDev($arResult['RESULT_PRICE'])?> ₽</span>
                    </div>
                </div>
            </div>
            <div class="move_step__buttons move_step1__buttons">
                <button class="move_step__btn btn btn-white" type="button">Предыдущий шаг</button>
                <button class="move_step__btn btn" type="button">Далее</button>
            </div>
        </div>
    </form>
</div>
