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

        <div class="move_step move_step-active move_step3s">
            <div class="move_step3__list">
                <div class="move_step3__item move_step3__item-transport move_config">
                    <div class="move_config__head">
                        <div class="move_config__left">
                            <p class="move_config__spoiler_title move_config__spoiler_title-custom">Грузчики:</p>
                        </div>
                        <div class="move_config__right">
                            <a href="<?= $arParams['SEF_FOLDER'] . 'loaders/'?>" class="btn btn-white" type="button">Вернуть рекомендуемые значения</a>
                        </div>
                    </div>
                    <div class="move_config__content">
                        <div class="custom_content">
                            <div class="custom_content__title_box custom_title_box">
                                <div class="custom_title_box__left">
                                    <span class="custom_title_box__number">Грузчики 1:</span>
                                    <span class="custom_title_box__title">Грузчик-специалист</span>
                                </div>
                                <div class="custom_title_box__right">
                                    <button class="custom_title_box__delete" type="button" onclick="deleteNode('.custom_content');">Удалить</button>
                                </div>
                            </div>
                            <div class="default_content">
                                <div class="default_content__left">
                                    <div class="default_content__pic"><img src="<?= FRONEND_BUILD_PATH?>img/deliveryboy4.svg" alt="" class="default_content__img"></div>
                                    <div class="default_content__desc">
                                        <p class="default_content__text">Наши специалисты могут вытащить и затащить любой предмет из вашей квартиры, офиса или дома.</p>
                                    </div>
                                </div>
                                <div class="default_content__right">
                                    <div class="custom_content__cnt">
                                        <div class="custom_content__cnt_text">Кол-во человек:</div>
                                        <div class="custom_content__cnt_goods">
                                            <div class="numGoods">
                                                <span class="numGoods__btn numGoods__minus">-</span>
                                                <input type="text" value="1" name="ORDER_PROP_20" class="numGoods__input">
                                                <span class="numGoods__btn numGoods__plus">+</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="default_content__times_day times_day">
                                        <div class="times_day__one">
                                            <input type="radio" class="times_day__radio" name="times_day2" value="times_day0" id="times_day0" checked>
                                            <label for="times_day0" class="times_day__label">
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
                                                                                <span class="times_day__text_one times_day__text_one-small">9:00–16:00</span>
                                                                            </span>
                                            </label>
                                        </div>
                                        <div class="times_day__one">
                                            <input type="radio" class="times_day__radio" name="times_day2" value="times_day1" id="times_day1">
                                            <label for="times_day1" class="times_day__label">
                                                                            <span class="times_day__pic">
                                                                                <svg width="20" height="20" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 22.64 22.38" class="day_pic">
                                                                                    <path class="day_pic__path" d="M15.25,17.11A10.18,10.18,0,0,1,7,1,10.75,10.75,0,1,0,21.64,14.86,10.14,10.14,0,0,1,15.25,17.11Z"/>
                                                                                </svg>
                                                                            </span>
                                                <span class="times_day__text">
                                                                                <span class="times_day__text_one">Ночное время</span>
                                                                                <span class="times_day__text_one times_day__text_one-small">16:00–9:00</span>
                                                                            </span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="custom_time">
                                        <p class="custom_time__title">Основное время аренды:*</p>
                                        <div class="checked">
                                            <div class="checked__list">
                                                <div class="checked__item">
                                                    <input type="radio" class="checked__radio" name="custom_time1" value="custom_time1" checked id="custom_time1" data-time-price="4000" onchange="checkCustomTime(this);">
                                                    <label for="custom_time1" class="checked__label rooms__label">4</label>
                                                </div>
                                                <div class="checked__item">
                                                    <input type="radio" class="checked__radio" name="custom_time1" value="custom_time2" id="custom_time2" data-time-price="6000" onchange="checkCustomTime(this);">
                                                    <label for="custom_time2" class="checked__label rooms__label">6</label>
                                                </div>
                                                <div class="checked__item">
                                                    <input type="radio" class="checked__radio" name="custom_time1" value="custom_time3" id="custom_time3" data-time-price="8000" onchange="checkCustomTime(this);">
                                                    <label for="custom_time3" class="checked__label rooms__label">8</label>
                                                </div>
                                            </div>
                                        </div>
                                        <p class="custom_time__title">
                                            Стоимость основного времени:
                                            <span class="custom_time__price_box"><span class="custom_time__price" data-time-price-content="">4000</span> ₽</span>
                                        </p>
                                    </div>
                                    <div class="custom_time_add">
                                        <div class="min_input">
                                            <div class="min_input__one">
                                                <p class="rooms_info__title custom_time_add__title">
                                                    <span class="rooms_info__text">Дополнительное время аренды:</span>
                                                </p>
                                                <div class="custom_time_add__input min_input__one_box"><input type="text" class="min_input__input min_input__input-kilogram" data-custom-time-price="500" value="1" onkeypress="return enterNumber(event);"><span class="min_input__one_before">ч</span></div>
                                                <div class="custom_time_add__plus">
                                                    <span class="custom_time_add__price">+500</span>
                                                    <span class="custom_time_add__currency">₽</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <p class="custom_time_add__desc">* Стоимость каждого последующего часа 500₽</p>
                                    <div class="one_default">
                                        <p class="one_default__title">Выбор маршрута: <span class="one_default__tooltip tooltip" title="srgdsf">?</span></p>
                                        <div class="check_inline__one">
                                            <input type="checkbox" class="check_inline__input" name="rigging_one__config" value="rigging_one__config3" id="rigging_one__config3" onchange="checkDisabledLabel(this)" data-check-disabled="id1_9">
                                            <label for="rigging_one__config3" class="check_inline__label check_address">
                                                <svg width="24px" height="24px" viewBox="0 0 40 40" xmlns="http://www.w3.org/2000/svg" class="check_inline__icon checkbox check_address__icon">
                                                    <rect class="checkbox__rect" width="100%" height="100%"></rect>
                                                    <polyline class="checkbox__checked" points="11,20.053 16.964,26.018 30.385,12.598"></polyline>
                                                </svg>
                                                <span class="check_address__name">Москва, ул. Яблочкова д.18 к.3</span>
                                                <span class="check_address__select">
                                                                            <select class="form__select" name="" id="id1_9" disabled>
                                                                                <option value="">Загрузка</option>
                                                                                <option value="">Выгрузка</option>
                                                                                <option value="">Загрузка/Выгрузка</option>
                                                                            </select>
                                                                        </span>
                                            </label>
                                        </div>
                                        <div class="check_inline__one">
                                            <input type="checkbox" class="check_inline__input" name="rigging_one__config" value="rigging_one__config4" id="rigging_one__config4" onchange="checkDisabledLabel(this)" data-check-disabled="id1_4">
                                            <label for="rigging_one__config4" class="check_inline__label check_address">
                                                <svg width="24px" height="24px" viewBox="0 0 40 40" xmlns="http://www.w3.org/2000/svg" class="check_inline__icon checkbox check_address__icon">
                                                    <rect class="checkbox__rect" width="100%" height="100%"></rect>
                                                    <polyline class="checkbox__checked" points="11,20.053 16.964,26.018 30.385,12.598"></polyline>
                                                </svg>
                                                <span class="check_address__name">Москва, ул. Яблочкова д.18 к.3</span>
                                                <span class="check_address__select">
                                                                            <select class="form__select" name="" id="id1_4" disabled>
                                                                                <option value="">Загрузка</option>
                                                                                <option value="">Выгрузка</option>
                                                                                <option value="">Загрузка/Выгрузка</option>
                                                                            </select>
                                                                        </span>
                                            </label>
                                        </div>
                                        <div class="check_inline__one">
                                            <input type="checkbox" class="check_inline__input" name="rigging_one__config" value="rigging_one__config5" id="rigging_one__config5" onchange="checkDisabledLabel(this)" data-check-disabled="id1_5">
                                            <label for="rigging_one__config5" class="check_inline__label check_address">
                                                <svg width="24px" height="24px" viewBox="0 0 40 40" xmlns="http://www.w3.org/2000/svg" class="check_inline__icon checkbox check_address__icon">
                                                    <rect class="checkbox__rect" width="100%" height="100%"></rect>
                                                    <polyline class="checkbox__checked" points="11,20.053 16.964,26.018 30.385,12.598"></polyline>
                                                </svg>
                                                <span class="check_address__name">Москва, ул. Яблочкова д.18 к.3</span>
                                                <span class="check_address__select">
                                                                            <select class="form__select" name="" id="id1_5" disabled>
                                                                                <option value="">Загрузка</option>
                                                                                <option value="">Выгрузка</option>
                                                                                <option value="">Загрузка/Выгрузка</option>
                                                                            </select>
                                                                        </span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="custom_content">
                            <div class="custom_content__title_box custom_title_box">
                                <div class="custom_title_box__left">
                                    <span class="custom_title_box__number">Грузчики 2:</span>
                                    <span class="custom_title_box__title">Грузчик на склад</span>
                                </div>
                                <div class="custom_title_box__right">
                                    <button class="custom_title_box__delete" type="button" onclick="deleteNode('.custom_content');">Удалить</button>
                                </div>
                            </div>
                            <div class="default_content">
                                <div class="default_content__left">
                                    <div class="default_content__pic"><img src="<?= FRONEND_BUILD_PATH?>img/deliveryboy4.svg" alt="" class="default_content__img"></div>
                                    <div class="default_content__desc">
                                        <p class="default_content__text">Наши специалисты могут вытащить и затащить любой предмет из вашей квартиры, офиса или дома.</p>
                                    </div>
                                </div>
                                <div class="default_content__right">
                                    <div class="custom_content__cnt">
                                        <div class="custom_content__cnt_text">Кол-во человек:</div>
                                        <div class="custom_content__cnt_goods">
                                            <div class="numGoods">
                                                <span class="numGoods__btn numGoods__minus">-</span>
                                                <input type="text" value="1" name="ORDER_PROP_20" class="numGoods__input">
                                                <span class="numGoods__btn numGoods__plus">+</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="default_content__times_day times_day">
                                        <div class="times_day__one">
                                            <input type="radio" class="times_day__radio" name="times_day" value="times_day0" id="times_day01" checked>
                                            <label for="times_day0" class="times_day__label">
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
                                                                                <span class="times_day__text_one times_day__text_one-small">9:00–16:00</span>
                                                                            </span>
                                            </label>
                                        </div>
                                        <div class="times_day__one">
                                            <input type="radio" class="times_day__radio" name="times_day" value="times_day1" id="times_day11">
                                            <label for="times_day1" class="times_day__label">
                                                                            <span class="times_day__pic">
                                                                                <svg width="20" height="20" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 22.64 22.38" class="day_pic">
                                                                                    <path class="day_pic__path" d="M15.25,17.11A10.18,10.18,0,0,1,7,1,10.75,10.75,0,1,0,21.64,14.86,10.14,10.14,0,0,1,15.25,17.11Z"/>
                                                                                </svg>
                                                                            </span>
                                                <span class="times_day__text">
                                                                                <span class="times_day__text_one">Ночное время</span>
                                                                                <span class="times_day__text_one times_day__text_one-small">16:00–9:00</span>
                                                                            </span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="custom_time">
                                        <p class="custom_time__title">Основное время аренды:*</p>
                                        <div class="checked">
                                            <div class="checked__list">
                                                <div class="checked__item">
                                                    <input type="radio" class="checked__radio" name="custom_time1" value="custom_time1" checked id="custom_time11" data-time-price="4000" onchange="checkCustomTime(this);">
                                                    <label for="custom_time1" class="checked__label rooms__label">4</label>
                                                </div>
                                                <div class="checked__item">
                                                    <input type="radio" class="checked__radio" name="custom_time1" value="custom_time2" id="custom_time21" data-time-price="6000" onchange="checkCustomTime(this);">
                                                    <label for="custom_time2" class="checked__label rooms__label">6</label>
                                                </div>
                                                <div class="checked__item">
                                                    <input type="radio" class="checked__radio" name="custom_time1" value="custom_time3" id="custom_time31" data-time-price="8000" onchange="checkCustomTime(this);">
                                                    <label for="custom_time3" class="checked__label rooms__label">8</label>
                                                </div>
                                            </div>
                                        </div>
                                        <p class="custom_time__title">
                                            Стоимость основного времени:
                                            <span class="custom_time__price_box"><span class="custom_time__price" data-time-price-content="">4000</span> ₽</span>
                                        </p>
                                    </div>
                                    <div class="custom_time_add">
                                        <div class="min_input">
                                            <div class="min_input__one">
                                                <p class="rooms_info__title custom_time_add__title">
                                                    <span class="rooms_info__text">Дополнительное время аренды:</span>
                                                </p>
                                                <div class="custom_time_add__input min_input__one_box"><input type="text" class="min_input__input min_input__input-kilogram" data-custom-time-price="500" value="1" onkeypress="return enterNumber(event);"><span class="min_input__one_before">ч</span></div>
                                                <div class="custom_time_add__plus">
                                                    <span class="custom_time_add__price">+500</span>
                                                    <span class="custom_time_add__currency">₽</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <p class="custom_time_add__desc">* Стоимость каждого последующего часа 500₽</p>
                                    <div class="one_default">
                                        <p class="one_default__title">Выбор маршрута: <span class="one_default__tooltip tooltip" title="srgdsf">?</span></p>
                                        <div class="check_inline__one">
                                            <input type="checkbox" class="check_inline__input" name="rigging_one__config" value="rigging_one__config3" id="rigging_one__config31" onchange="checkDisabledLabel(this)" data-check-disabled="id1_91">
                                            <label for="rigging_one__config3" class="check_inline__label check_address">
                                                <svg width="24px" height="24px" viewBox="0 0 40 40" xmlns="http://www.w3.org/2000/svg" class="check_inline__icon checkbox check_address__icon">
                                                    <rect class="checkbox__rect" width="100%" height="100%"></rect>
                                                    <polyline class="checkbox__checked" points="11,20.053 16.964,26.018 30.385,12.598"></polyline>
                                                </svg>
                                                <span class="check_address__name">Москва, ул. Яблочкова д.18 к.3</span>
                                                <span class="check_address__select">
                                                                            <select class="form__select" name="" id="id1_91" disabled>
                                                                                <option value="">Загрузка</option>
                                                                                <option value="">Выгрузка</option>
                                                                                <option value="">Загрузка/Выгрузка</option>
                                                                            </select>
                                                                        </span>
                                            </label>
                                        </div>
                                        <div class="check_inline__one">
                                            <input type="checkbox" class="check_inline__input" name="rigging_one__config" value="rigging_one__config4" id="rigging_one__config41" onchange="checkDisabledLabel(this)" data-check-disabled="id1_41">
                                            <label for="rigging_one__config4" class="check_inline__label check_address">
                                                <svg width="24px" height="24px" viewBox="0 0 40 40" xmlns="http://www.w3.org/2000/svg" class="check_inline__icon checkbox check_address__icon">
                                                    <rect class="checkbox__rect" width="100%" height="100%"></rect>
                                                    <polyline class="checkbox__checked" points="11,20.053 16.964,26.018 30.385,12.598"></polyline>
                                                </svg>
                                                <span class="check_address__name">Москва, ул. Яблочкова д.18 к.3</span>
                                                <span class="check_address__select">
                                                                            <select class="form__select" name="" id="id1_41" disabled>
                                                                                <option value="">Загрузка</option>
                                                                                <option value="">Выгрузка</option>
                                                                                <option value="">Загрузка/Выгрузка</option>
                                                                            </select>
                                                                        </span>
                                            </label>
                                        </div>
                                        <div class="check_inline__one">
                                            <input type="checkbox" class="check_inline__input" name="rigging_one__config" value="rigging_one__config5" id="rigging_one__config51" onchange="checkDisabledLabel(this)" data-check-disabled="id1_51">
                                            <label for="rigging_one__config5" class="check_inline__label check_address">
                                                <svg width="24px" height="24px" viewBox="0 0 40 40" xmlns="http://www.w3.org/2000/svg" class="check_inline__icon checkbox check_address__icon">
                                                    <rect class="checkbox__rect" width="100%" height="100%"></rect>
                                                    <polyline class="checkbox__checked" points="11,20.053 16.964,26.018 30.385,12.598"></polyline>
                                                </svg>
                                                <span class="check_address__name">Москва, ул. Яблочкова д.18 к.3</span>
                                                <span class="check_address__select">
                                                                            <select class="form__select" name="" id="id1_51" disabled>
                                                                                <option value="">Загрузка</option>
                                                                                <option value="">Выгрузка</option>
                                                                                <option value="">Загрузка/Выгрузка</option>
                                                                            </select>
                                                                        </span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="stevedores">
                            <div class="loaders_skill">
                                <div class="loaders_skill__one">
                                    <div class="loaders_skill__pic">
                                        <img src="<?= FRONEND_BUILD_PATH?>img/deliveryboy_o.svg" alt="" class="loaders_skill__img">
                                    </div>
                                    <div class="loaders_skill__name">Грузчик-специалист</div>
                                    <div class="loaders_skill__price">1000 ₽/час</div>
                                    <div class="loaders_skill__button">
                                        <button class="choice_item__btn btn btn-white" type="button">+ добавить</button>
                                    </div>
                                </div>
                                <div class="loaders_skill__one">
                                    <div class="loaders_skill__pic">
                                        <img src="<?= FRONEND_BUILD_PATH?>img/deliveryboy_s.svg" alt="" class="loaders_skill__img">
                                    </div>
                                    <div class="loaders_skill__name">Грузчик на склад</div>
                                    <div class="loaders_skill__price">1000 ₽/час</div>
                                    <div class="loaders_skill__button">
                                        <button class="choice_item__btn btn btn-white" type="button">+ добавить</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="total_transport">
                            <p class="total_transport__text">Грузчики 1: <b>4 500 ₽</b></p>
                            <p class="total_transport__text">Грузчики 2: <b>15 000 ₽</b></p>
                        </div>
                    </div>
                </div>
                <div class="move_config__no_hidden move_config__no_hidden-green">
                    <div class="total_green">
                        <span class="total_green__text">Итого, стоимость работы грузчиков:</span>
                        <span class="total_green__price">8 000 ₽</span>
                    </div>
                </div>
            </div>

            <div class="move_step__buttons move_step1__buttons">
                <button class="move_step__btn btn btn-white" type="button" <!--onClick='location.href="./move_step3_1.html"'-->>Предыдущий шаг</button>
                <input class="move_step__btn btn" type="submit" value="Далее" name="submit_next">
            </div>
        </div>
    </form>
</div>

