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
//$sessData = $this->sessDa

$data = $arResult['SAVED_DATA'][$currentStep];
$dataTransport = $arResult['SAVED_DATA']['transport'];
?>

<div class="move_calc">

    <? foreach ($arResult['ERROR_MESSAGES'] as $er) {?>
        <span class="page_steps__error">* <?= $er?></span>
    <? }?>

    <form action="<?=$APPLICATION->GetCurPageParam() ?>" name="calc_form" method="POST" class="move_calc__form">
        <input type="hidden" name="CURRENT_PAGE" value="<?= $currentStep?>">

        <div class="move_step move_step-active move_step3">
            <div class="move_step3__list">

                <div class="move_step3__item move_step3__item-transport move_config" id="qw4">
                    <div class="move_config__head">
                        <div class="move_config__left">
                            <p class="move_config__spoiler_title move_config__spoiler_title-custom">Транспорт:</p>
                        </div>
                        <div class="move_config__right">
                            <a href="<?= $arParams['SEF_FOLDER'] . 'transport/'?>" class="btn btn-white" type="button">Вернуть рекомендуемые значения</a>
                        </div>
                    </div>
                    <div class="move_config__content j-cars-container">
<!--cars blocks-->
                        <?
                        foreach ($arResult['ITEMS'] as $key => $transport) {
                            $c++;
                            $tid = $transport['ID'];
                            $curTransport = $arResult['categories'][$tid];
                        ?>
                            <input type="hidden" name="transport_key[]" value="<?= $c?>">
                            <input type="hidden" name="transport_category[<?= $c?>]" value="<?= $tid?>">

                        <div class="custom_content">
                            <div class="custom_content__title_box custom_title_box">
                                <div class="custom_title_box__left">
                                    <span class="custom_title_box__number">Автомобиль-<?= $c?>:</span>
                                    <span class="custom_title_box__title"><?= "{$curTransport['name']} (до {$curTransport['weight']} тонн, до {$curTransport['volume']}м³)"?></span>
                                </div>
                                <div class="custom_title_box__right">
                                    <div class="custom_title_box__deactivate">
                                        <div class="switcher">
                                            <input type="checkbox"
                                                   class="switcher__checkbox"
                                                   id="switcher<?= $c?>"
                                                   name="switcher[<?= $c?>]"
                                                   checked
                                                   onchange="disabledCustomBlock('.custom_content','custom_content-off');">
                                            <label for="switcher<?= $c?>" class="switcher__container">
                                                <span class="switcher__text switcher__text-enabled">Отключить транспорт</span>
                                                <span class="switcher__text switcher__text-disabled">Включить транспорт</span>
                                                <span class="switcher__button">
                                                <span class="switcher__circle"></span>
                                            </span>
                                            </label>
                                        </div>
                                    </div>
                                    <button class="custom_title_box__delete" type="button" onclick="deleteNode('.custom_content');">Удалить</button>
                                </div>
                            </div>
                            <div class="default_content">
                                <div class="default_content__left">
                                    <div class="default_content__pic"><img src="<?= $curTransport['img']?>" alt="" class="default_content__img"></div>
                                    <div class="default_content__desc">
                                        <p class="default_content__text">Грузоподъёмность, т: <span><?= $curTransport['weight']?></span></p>
                                        <p class="default_content__text">Полезный объем, м³: <span><?= $curTransport['volume']?></span></p>
                                        <? if($curTransport['pass']) {?>
                                            <div class="default_content__pass pass">
                                                <img src="<?= FRONEND_BUILD_PATH?>img/propusk.svg" alt="" class="pass__img">
                                                <span class="pass__text">Пропуск в центр</span>
                                            </div>
                                        <? } ?>
                                    </div>
                                </div>
                                <div class="default_content__right">
                                    <div class="default_content__times_day times_day">
                                        <div class="times_day__one">
                                            <input type="radio"
                                                   class="times_day__radio"
                                                   name="time_region[<?= $c?>]"
                                                   value="day"
                                                   id="day<?= $tid . $c?>" checked>
                                            <label for="day<?= $tid  . $c?>" class="times_day__label">
                                                <span class="times_day__pic">
                                                    <svg width="27px" height="27px" viewBox="0 0 27 27" xmlns="http://www.w3.org/2000/svg" class="day_pic">
                                                        <path class="day_pic__path" d="M18.6058374,12.4074759 C18.6058374,15.8305316 15.83073,18.6060358 12.4072775,18.6060358 C8.98382502,18.6060358 6.2087176,15.8305316 6.2087176,12.4074759 C6.2087176,8.98402341 8.98382502,6.20891599 12.4072775,6.20891599 C15.83073,6.20891599 18.6058374,8.98402341 18.6058374,12.4074759 Z" id="Stroke-1"></path>
                                                        <path class="day_pic__path" d="M12.4074362,21.4323681 L12.4074362,24.814555" id="Stroke-3"></path>
                                                        <path class="day_pic__path" d="M12.4074362,0 L12.4074362,3.38258375" id="Stroke-5"></path>
                                                        <path class="day_pic__path" d="M3.38254407,12.4074759 L-3.96784017e-05,12.4074759" id="Stroke-7"></path>
                                                        <path class="day_pic__path" d="M24.8149121,12.4074759 L21.4323284,12.4074759" id="Stroke-10"></path>
                                                        <path class="day_pic__path" d="M6.02576049,18.7889533 L3.63394643,21.1807673" id="Stroke-13"></path>
                                                        <path class="day_pic__path" d="M21.180688,3.63402578 L18.7888739,6.02583984" id="Stroke-15"></path>
                                                        <path class="day_pic__path" d="M6.02576049,6.02580016 L3.63394643,3.6339861" id="Stroke-17"></path>
                                                        <path class="day_pic__path" d="M21.180688,21.180688 L18.7888739,18.7888739" id="Stroke-19"></path>
                                                    </svg>
                                                </span>
                                                <span class="times_day__text">
                                                    <span class="times_day__text_one">Дневное время</span>
                                                    <span class="times_day__text_one times_day__text_one-small"><?= "8:00–{$arResult['NIGHT_TIME']}:00"?></span>
                                                </span>
                                            </label>
                                        </div>
                                        <div class="times_day__one">
                                            <input type="radio"
                                                   class="times_day__radio"
                                                   name="time_region[<?= $c?>]"
                                                   value="night"
                                                   id="night<?= $tid . $c?>">
                                            <label for="night<?= $tid . $c?>" class="times_day__label">
                                                <span class="times_day__pic">
                                                    <svg width="20" height="20" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 22.64 22.38" class="day_pic">
                                                        <path class="day_pic__path" d="M15.25,17.11A10.18,10.18,0,0,1,7,1,10.75,10.75,0,1,0,21.64,14.86,10.14,10.14,0,0,1,15.25,17.11Z"/>
                                                    </svg>
                                                </span>
                                                <span class="times_day__text">
                                                    <span class="times_day__text_one">Ночное время</span>
                                                    <span class="times_day__text_one times_day__text_one-small"><?= "{$arResult['NIGHT_TIME']}:00–8:00"?></span>
                                                </span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="custom_time">
                                        <p class="custom_time__title">Основное время аренды:*</p>
                                        <div class="checked">
                                            <div class="checked__list">
                                                <? foreach ([4,6,8] as $h) { ?>
                                                    <div class="checked__item">
                                                        <input type="radio"
                                                               class="checked__radio"
                                                               name="quantity_time[<?= $c?>]"
                                                               value="<?= $h?>"
                                                               <?= ($transport['WORK_HOURS'] == $h)?'checked':''?>
                                                               id="<?= "quantity_time_{$tid}{$c}_{$h}"?>"
                                                               data-time-price="<?= $transport['PRICES'][$h]?>"
                                                               onchange="checkCustomTime(this);">
                                                        <label for="<?= "quantity_time_{$tid}{$c}_{$h}"?>"
                                                               class="checked__label rooms__label"><?= $h?></label>
                                                    </div>
                                                <? }?>
                                            </div>
                                        </div>
                                        <p class="custom_time__title">
                                            Стоимость основного времени:
                                            <span class="custom_time__price_box"><span class="custom_time__price" data-time-price-content=""><?= $transport['PRICES']['CAR_PRICE']?></span> ₽</span>
                                        </p>
                                    </div>
                                    <div class="custom_time_add">
                                        <div class="min_input">
                                            <div class="min_input__one">
                                                <p class="rooms_info__title custom_time_add__title">
                                                    <span class="rooms_info__text">Дополнительное время аренды:</span>
                                                </p>
                                                <div class="custom_time_add__input min_input__one_box"><input
                                                            type="text"
                                                            name="additional_time[<?= $c?>]"
                                                            class="min_input__input min_input__input-kilogram"
                                                            data-custom-time-price="500"
                                                            value="<?= ($transport['ADDITIONAL_TIME'])?$transport['ADDITIONAL_TIME']:'0'?>"
                                                            onkeypress="return enterNumber(event);"><span
                                                            class="min_input__one_before">ч</span></div>
                                                <div class="custom_time_add__plus">
                                                    x <span class="custom_time_add__price"><?= $transport['PRICES'][1]?></span>
                                                    <span class="custom_time_add__currency">₽</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <p class="custom_time_add__desc">* Стоимость каждого последующего часа <?= $transport['PRICES'][1]?>₽</p>
                                    <div class="one_default">
                                        <p class="one_default__title">Выбор маршрута: <span class="one_default__tooltip tooltip" title="srgdsf">?</span></p>

                                        <? foreach ($arResult['select_route']["reference"] as $k => $route) {
                                            $keyRoute = $arResult['select_route']["reference_id"][$k];

                                            $selectListId = "id1_{$keyRoute}_{$tid}{$c}";
                                            $_selectFields = "id='{$selectListId}' class='form__select' disabled";
                                            $_selectName = "POINT_VALUE[{$c}][{$keyRoute}]";
                                            ?>
                                            <div class="check_inline__one">
                                                <input <?= (isset($data['POINT_CHECK'][$c][$keyRoute]))?'checked':''?>
                                                        type="checkbox" class="check_inline__input"
                                                        name="POINT_CHECK[<?= $c?>][<?= $keyRoute?>]"
                                                        value="<?= $keyRoute?>"
                                                        id="rigging_one__config<?= $keyRoute?>"
                                                        onchange="checkDisabledLabel(this)"
                                                        data-check-disabled="<?= $selectListId?>">
                                                <label for="rigging_one__config<?= $keyRoute?>"
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

                        <div class="choice_transport">
                            <div class="choice_transport__head">
                                <p class="choice_transport__title">Выберите транспорт:</p>
                            </div>
                            <div class="choice_transport__content">
                                <div class="choice_transport__list j-transport_list">
<!--add categories cars-->
                                    <? foreach ($arResult['categories'] as $catId => $category) {?>
                                        <div class="choice_transport__item choice_item">
                                            <div class="choice_item__pic"><img src="<?= $category['img']?>" alt="" class="choice_item__img"></div>
                                            <div class="choice_item__info">
                                                <div class="choice_item__info_one">
                                                    <img src="<?= FRONEND_BUILD_PATH?>img/vol.svg" alt="" class="choice_item__info_img">
                                                    <span class="choice_item__info_text"><?= $category['volume']?>м³</span>
                                                </div>
                                                <div class="choice_item__info_one">
                                                    <img src="<?= FRONEND_BUILD_PATH?>img/weight.svg" alt="" class="choice_item__info_img">
                                                    <span class="choice_item__info_text"><?= $category['weight']?>т</span>
                                                </div>
                                            </div>
                                            <p class="choice_item__name"><?= $category['name']?></p>
                                            <div class="choice_item__prices">
                                                <div class="choice_item__day">
                                                    <div class="choice_item__day_pic">
                                                        <!--<svg width="20px" height="20px" viewBox="0 0 27 27" xmlns="http://www.w3.org/2000/svg" class="day_pic">
                                                            <path class="day_pic__path" d="M18.6058374,12.4074759 C18.6058374,15.8305316 15.83073,18.6060358 12.4072775,18.6060358 C8.98382502,18.6060358 6.2087176,15.8305316 6.2087176,12.4074759 C6.2087176,8.98402341 8.98382502,6.20891599 12.4072775,6.20891599 C15.83073,6.20891599 18.6058374,8.98402341 18.6058374,12.4074759 Z" id="Stroke-1"></path>
                                                            <path class="day_pic__path" d="M12.4074362,21.4323681 L12.4074362,24.814555" id="Stroke-3"></path>
                                                            <path class="day_pic__path" d="M12.4074362,0 L12.4074362,3.38258375" id="Stroke-5"></path>
                                                            <path class="day_pic__path" d="M3.38254407,12.4074759 L-3.96784017e-05,12.4074759" id="Stroke-7"></path>
                                                            <path class="day_pic__path" d="M24.8149121,12.4074759 L21.4323284,12.4074759" id="Stroke-10"></path>
                                                            <path class="day_pic__path" d="M6.02576049,18.7889533 L3.63394643,21.1807673" id="Stroke-13"></path>
                                                            <path class="day_pic__path" d="M21.180688,3.63402578 L18.7888739,6.02583984" id="Stroke-15"></path>
                                                            <path class="day_pic__path" d="M6.02576049,6.02580016 L3.63394643,3.6339861" id="Stroke-17"></path>
                                                            <path class="day_pic__path" d="M21.180688,21.180688 L18.7888739,18.7888739" id="Stroke-19"></path>
                                                        </svg>-->
                                                    </div>
                                                    <div class="choice_item__day_text"><?= $category['PRICE']?> ₽/час</div>
                                                </div>
                                                <!--<div class="choice_item__night">
                                                    <div class="choice_item__day_pic">
                                                        <svg width="14" height="13" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 22.64 22.38" class="day_pic">
                                                            <path class="day_pic__path" d="M15.25,17.11A10.18,10.18,0,0,1,7,1,10.75,10.75,0,1,0,21.64,14.86,10.14,10.14,0,0,1,15.25,17.11Z"/>
                                                        </svg>
                                                    </div>
                                                    <div class="choice_item__day_pic">
                                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 25 25" width="14" class="day_pic">
                                                            <path class="day_pic__path" d="M12.5,0C5.6,0,0,5.6,0,12.5S5.6,25,12.5,25S25,19.4,25,12.5S19.4,0,12.5,0z M12.5,24C6.1,24,1,18.9,1,12.5S6.1,1,12.5,1 S24,6.1,24,12.5S18.9,24,12.5,24z"></path>
                                                            <rect class="day_pic__path" x="12" y="6" width="1" height="9"></rect>
                                                            <rect class="day_pic__path" x="13" y="14" width="8" height="1"></rect>
                                                        </svg>
                                                    </div>
                                                    <div class="choice_item__day_text">1000 доп. час</div>
                                                </div>-->
                                            </div>

                                            <div class="choice_item__pass">
                                                <div class="pass <?= (!$category['pass']) ?'pass-hidden':''?>">
                                                    <img src="<?= FRONEND_BUILD_PATH?>img/propusk.svg" alt="" class="pass__img">
                                                    <span class="pass__text">Пропуск в центр</span>
                                                </div>
                                            </div>
                                            <div class="choice_item__button">
                                                <a href="#" class="choice_item__btn btn btn-white" data-cat-id="<?= $catId?>">+ добавить</a>
                                            </div>
                                        </div>
                                    <? }?>

                                </div>
                            </div>
                        </div>

                        <!--<div class="total_transport">
                            <p class="total_transport__text">Автомобиль 1: <b>4 500 ₽</b></p>
                            <p class="total_transport__text total_transport__text-disable">Автомобиль 2: <b>15 000 ₽</b></p>
                        </div>-->
                    </div>
                </div>


                <div class="move_config__no_hidden move_config__no_hidden-green">
                    <div class="total_green">
                        <span class="total_green__text">Итого, стоимость аренды транспорта:</span>
                        <span class="total_green__price"><?= SaleFormatCurrencyDev($dataTransport['PRICE']) ?> ₽</span>
                    </div>
                </div>
            </div>
            <div class="move_step__buttons move_step1__buttons">
                <a class="move_step__btn btn btn-white" href="<?= $arResult['prev_step'] ?>">Предыдущий шаг</a>
                <input class="move_step__btn btn" type="submit" value="Далее" name="submit_next">
            </div>
        </div>

    </form>
</div>
