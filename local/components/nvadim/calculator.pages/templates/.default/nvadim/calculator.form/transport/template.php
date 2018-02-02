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
$data = $arResult['SAVED_DATA'][$currentStep];
?>

<div class="move_calc">

    <? foreach ($arResult['ERROR_MESSAGES'] as $er) {?>
        <span class="page_steps__error">* <?= $er?></span>
    <? }?>

    <form action="<?=$APPLICATION->GetCurPageParam() ?>" name="calc_form" method="POST" class="move_calc__form">
        <input type="hidden" name="CURRENT_PAGE" value="<?= $currentStep?>">

        <div class="move_step move_step-active move_step3">
            <div class="move_step3__list">

                <? foreach ($arResult['SAVED_DATA']['transport_list'] as $step => $transport) {?>
                    <div class="move_step3__item move_config">
                        <div class="move_config__head">
                            <div class="move_config__left">
                                <p class="move_config__spoiler_title">Транспорт <span class="move_config__spoiler_gray">— Наши рекомендации:</span></p>
                            </div>
                            <div class="move_config__right">
                                <a class="btn btn-white" href="<?= $arParams['SEF_FOLDER'] . 'transport-edit/'?>">Откорректировать вручную</a>
                            </div>
                        </div>
                        <div class="move_config__content">
                            <div class="default_content">
                                <div class="default_content__left">
                                    <div class="default_content__pic"><img src="<?= FRONEND_BUILD_PATH?>img/1-cat-1.svg" alt="" class="default_content__img"></div>
                                    <div class="default_content__desc">
                                        <p class="default_content__text">Грузоподъёмность, т: <span><?= $transport['LiftingCapacity_2']?></span></p>
                                        <p class="default_content__text">Полезный объем, м³: <span><?= $transport['UsefilSize_2']?></span></p>
                                        <div class="default_content__pass pass">
                                            <img src="#<?/*= FRONEND_BUILD_PATH*/?><!--img/propusk.svg-->" alt="" class="pass__img">
                                            <!--<span class="pass__text">Пропуск в центр</span>-->
                                        </div>
                                    </div>
                                </div>
                                <div class="default_content__right">
                                    <div class="one_default">
                                        <p class="one_default__title">Автомобиль:</p>
                                        <div class="one_default__text_box one_default__text_box-flex">
                                            <p class="one_default__text"><?= "{$transport['Cathegory']} (до {$transport['LiftingCapacity_2']} тонн, до {$transport['UsefilSize_2']} м³)"?></p>
                                        </div>
                                    </div>
                                    <div class="one_default">
                                        <p class="one_default__title">Основное время:</p>
                                        <div class="one_default__text_box one_default__text_box-flex">
                                            <p class="one_default__text"><?=$transport['TypeOfLease']?> – <?= $transport['PRICE']?> ₽</p>
                                            <span class="one_default__tooltip tooltip" title="srgdsf">?</span>
                                        </div>
                                    </div>
                                    <!--<div class="one_default">
                                        <p class="one_default__title">Дополнительное время:</p>
                                        <div class="one_default__text_box one_default__text_box-flex">
                                            <p class="one_default__text">2 часа – 2000 ₽</p>
                                            <span class="one_default__tooltip tooltip" title="srgdsf">?</span>
                                        </div>
                                    </div>-->
                                    <hr class="separator">
                                    <div class="one_default">
                                        <p class="one_default__title one_default__title-big">Выбор маршрута: <span class="one_default__tooltip tooltip" title="srgdsf">?</span></p>

                                        <? foreach ($arResult['select_route'] as $k => $route) {?>
                                            <div class="check_inline__one">
                                                <input <?= (isset($data['POINT_CHECK']['_'.$k]))?'checked':''?> name="<?= $currentStep?>[POINT_CHECK][_<?= $k?>]" value="<?= $k?>" type="checkbox" class="check_inline__input" id="rigging_one__config<?= $k?>" onchange="checkDisabledLabel(this)" data-check-disabled="id1_<?= $k?>">
                                                <label for="rigging_one__config3" class="check_inline__label check_address">
                                                    <svg width="24px" height="24px" viewBox="0 0 40 40" xmlns="http://www.w3.org/2000/svg" class="check_inline__icon checkbox check_address__icon">
                                                        <rect class="checkbox__rect" width="100%" height="100%"></rect>
                                                        <polyline class="checkbox__checked" points="11,20.053 16.964,26.018 30.385,12.598"></polyline>
                                                    </svg>
                                                    <span class="check_address__name"><?= $route?></span>
                                                    <span class="check_address__select">
                                                        <select class="form__select" name="<?= $currentStep?>[POINT_TYPE][_<?= $k?>]" id="id1_<?= $k?>" <?= (isset($data['POINT_CHECK']['_'.$k]))?'':'disabled'?>>
                                                            <? foreach ($arResult['select_list_value'] as $key => $val) {?>
                                                                <option value="<?= $key?>" <?= ($key==$data['POINT_TYPE']['_'.$k])?'selected':''?>><?= $val?></option>
                                                            <? }?>
                                                        </select>
                                                    </span>
                                                </label>
                                            </div>
                                        <? }?>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <? } ?>

                <div class="move_config__no_hidden move_config__no_hidden-green">
                    <div class="total_green">
                        <span class="total_green__text">Итого, стоимость аренды транспорта:</span>
                        <span class="total_green__price">9 000 ₽</span>
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
