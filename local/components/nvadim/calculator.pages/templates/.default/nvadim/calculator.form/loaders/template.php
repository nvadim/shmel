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

$currentStep = $arParams['STEP'];
?>

<div class="move_calc">
    <form action="<?=$APPLICATION->GetCurPageParam() ?>" name="calc_form" method="POST" class="move_calc__form">
        <input type="hidden" name="CURRENT_PAGE" value="<?= $currentStep ?>">
        <input type="hidden" name="RESULT_PRICE" value="<?= $arResult['RESULT_PRICE'] ?>">

        <div class="move_step move_step-active move_step3">
            <div class="move_step3__list">

                <div class="move_step3__item move_config" id="qw5">
                    <div class="move_config__head">
                        <div class="move_config__left">
                            <p class="move_config__spoiler_title">Грузчики <span class="move_config__spoiler_gray">— Наши рекомендации:</span></p>
                        </div>
                        <div class="move_config__right">
                            <a href="<?= $arParams['SEF_FOLDER'] . 'loaders-edit/'?>" class="btn btn-white" type="button">Откорректировать вручную</a>
                        </div>
                    </div>

                    <? foreach ($arResult['ITEMS'] as $keyLoader => $loader) {?>
                    <div class="move_config__content">
                        <div class="default_content">
                            <div class="default_content__left">
                                <div class="default_content__pic"><img src="<?= FRONEND_BUILD_PATH?>img/deliveryboy4.svg" alt="" class="default_content__img"></div>
                                <div class="default_content__desc">
                                    <p class="default_content__text">Наши специалисты могут вытащить и затащить любой предмет из вашей квартиры, офиса или дома.</p>
                                </div>
                            </div>
                            <div class="default_content__right">
                                <div class="one_default">
                                    <p class="one_default__title"><?= $loader['NAME']?>:</p>
                                    <div class="one_default__text_box one_default__text_box-flex">
                                        <p class="one_default__text"><?= $loader['COUNTS']?> грузчика</p>
                                    </div>
                                </div>
                                <div class="one_default">
                                    <p class="one_default__title">Основное время:</p>
                                    <div class="one_default__text_box one_default__text_box-flex">
                                            <p class="one_default__text"><?= $loader['RESULT_HOURS']?> часов – <?= $loader['RESULT_PRICE']?> ₽</p>
                                        <span class="one_default__tooltip tooltip" title="srgdsf">?</span>
                                    </div>
                                </div>
                                <? if($loader['ADDITIONAL_TIME']) { ?>
                                    <div class="one_default">
                                        <p class="one_default__title">Дополнительное время:</p>
                                        <div class="one_default__text_box one_default__text_box-flex">
                                            <p class="one_default__text">2 часа – 2000 ₽</p>
                                            <span class="one_default__tooltip tooltip" title="srgdsf">?</span>
                                        </div>
                                    </div>
                                <? } ?>
                                <hr class="separator">
                                <div class="one_default">
                                    <p class="one_default__title one_default__title-big">Выбор маршрута: <span class="one_default__tooltip tooltip" title="srgdsf">?</span></p>

                                    <? for ($i = 0; $i < count($arResult['select_route']['reference']); $i++) {
                                        $keyRoute = $arResult['select_route']['reference_id'][$i];
                                        $route = $arResult['select_route']['reference'][$i];

                                        $sid = "id1_{$keyLoader}{$keyRoute}";
                                        $_selectFields = "id='{$sid}' class='form__select' disabled";
                                        $_selectName = "POINT_VALUE[{$keyLoader}][{$keyRoute}]";
                                    ?>
                                        <div class="check_inline__one">
                                            <input <?= (isset($arResult['POINT_CHECK']['_'.$k]))?'checked':''?>
                                                    name="POINT_CHECK[<?= $keyLoader?>][<?= $keyRoute?>]"
                                                    value="<?= $keyRoute?>"
                                                    type="checkbox"
                                                    class="check_inline__input"
                                                    id="rigging_one__config<?= $keyLoader.$keyRoute?>"
                                                    onchange="checkDisabledLabel(this)"
                                                    data-check-disabled="<?= $sid?>">
                                            <label for="rigging_one__config<?= $keyLoader.$keyRoute?>"
                                                   class="check_inline__label check_address">
                                                <svg width="24px" height="24px" viewBox="0 0 40 40" xmlns="http://www.w3.org/2000/svg" class="check_inline__icon checkbox check_address__icon">
                                                    <rect class="checkbox__rect" width="100%" height="100%"></rect>
                                                    <polyline class="checkbox__checked" points="11,20.053 16.964,26.018 30.385,12.598"></polyline>
                                                </svg>
                                                <span class="check_address__name"><?= $route?></span>
                                                <span class="check_address__select">
                                                    <?= SelectBoxFromArray(
                                                        $_selectName,
                                                        $arResult['select_list_value'],
                                                        '',
                                                        '',
                                                        $_selectFields);?>
                                                </span>
                                            </label>
                                        </div>
                                    <? }?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <? }?>
                </div>
                <div class="move_config__no_hidden move_config__no_hidden-green">
                    <div class="total_green">
                        <span class="total_green__text">Итого, стоимость работы грузчиков:</span>
                        <span class="total_green__price"><?= $arResult['RESULT_PRICE'] ?> ₽</span>
                    </div>
                </div>

            </div>
            <div class="move_step__buttons move_step1__buttons">
                <button class="move_step__btn btn btn-white" type="button">Предыдущий шаг</button>
                <input class="move_step__btn btn" type="submit" value="Далее" name="submit_next">
            </div>
        </div>
    </form>
</div>
