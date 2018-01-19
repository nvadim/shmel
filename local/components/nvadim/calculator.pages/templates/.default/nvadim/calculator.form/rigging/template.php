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
    <form action="<?=$APPLICATION->GetCurPageParam() ?>" name="calc_form" method="POST" class="move_calc__form">
        <input type="hidden" name="CURRENT_PAGE" value="<?= $currentStep?>">

        <div class="move_step move_step-active move_step3">
            <div class="move_step3__list">

                <div class="move_step3__item move_step3__item-transport move_config">
                    <div class="move_config__head">
                        <div class="move_config__left">
                            <p class="move_config__spoiler_title">Такелажные работы</p>
                        </div>
                    </div>
                    <div class="move_config__content">
                        <div class="move_config__wrap">
                            <div class="additionally__one">
                                <div class="additionally__content">
                                    <div class="rigging">
                                        <div class="checked">
                                            <div class="checked__list checked__list-rigger">
                                                <div class="checked__item checked__item-rigging">
                                                    <input checked type="checkbox" class="checked__radio" name="rigging" value="rigging1" id="rigging1" onchange="checkHiddenBox(this)" data-check-hidden="id1">
                                                    <label for="rigging1" class="checked__label rigger__label">
                                                        <span class="rigging__check_title">Пианино</span>
                                                        <span class="rigging__check_price">5 750 ₽</span>
                                                    </label>
                                                </div>
                                                <div class="checked__item checked__item-rigging">
                                                    <input type="checkbox" class="checked__radio" name="rigging" value="rigging2" id="rigging2">
                                                    <label for="rigging2" class="checked__label rigger__label">
                                                        <span class="rigging__check_title">Аквариум</span>
                                                        <span class="rigging__check_price">от 1000 ₽</span>
                                                    </label>
                                                </div>
                                                <div class="checked__item checked__item-rigging">
                                                    <input type="checkbox" class="checked__radio" name="rigging" value="rigging3" id="rigging3">
                                                    <label for="rigging3" class="checked__label rigger__label">
                                                        <span class="rigging__check_title">Вывоз мусора</span>
                                                        <span class="rigging__check_price">от 300 ₽</span>
                                                    </label>
                                                </div>
                                                <div class="checked__item checked__item-rigging">
                                                    <input type="checkbox" class="checked__radio" name="rigging" value="rigging4" id="rigging4">
                                                    <label for="rigging4" class="checked__label rigger__label">
                                                        <span class="rigging__check_title">Сборка/разборка</span>
                                                        <span class="rigging__check_price">от 300 ₽</span>
                                                    </label>
                                                </div>
                                                <div class="checked__item checked__item-rigging">
                                                    <input type="checkbox" class="checked__radio" name="rigging" value="rigging5" id="rigging5">
                                                    <label for="rigging5" class="checked__label rigger__label">
                                                        <span class="rigging__check_title">Подъем/спуск</span>
                                                        <span class="rigging__check_price">от 300 ₽</span>
                                                    </label>
                                                </div>
                                                <div class="checked__item checked__item-rigging">
                                                    <input type="checkbox" class="checked__radio" name="rigging" value="rigging6" id="rigging6">
                                                    <label for="rigging6" class="checked__label rigger__label">
                                                        <span class="rigging__check_title">Ещё услуга</span>
                                                        <span class="rigging__check_price">от 300 ₽</span>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="rigging_one stage_visible" data-check-input="id1">
                            <div class="rigging_one__wrap move_config">
                                <div class="move_config__head">
                                    <div class="move_config__left">
                                        <p class="move_config__spoiler_title">Настройки – Пианино</p>
                                    </div>
                                    <div class="move_config__right">
                                        <button class="move_config__spoiler" type="button">Свернуть</button>
                                    </div>
                                </div>
                                <div class="move_config__content">
                                    <div class="rigging_one__content">
                                        <div class="rigging_one__info">
                                            <div class="rigging_one__pic">
                                                <img src="<?= FRONEND_BUILD_PATH?>img/royal.svg" alt="" class="rigging_one__img">
                                            </div>
                                            <div class="rigging_one__context">
                                                <p class="rigging_one__name">Пианино</p>
                                                <p class="rigging_one__desc">Любое пианино или рояль, аккуратно поднимем, вынесем и погрузим. Без единой царапины!</p>
                                                <div class="rigging_one__inputs min_input">
                                                    <div class="min_input__one">
                                                        <p class="rooms_info__title">
                                                            <span class="rooms_info__text">Вес</span>
                                                            <span class="rooms_info__tooltip tooltip" title="Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur commodi, iure saepe soluta voluptatem voluptates?">?</span>
                                                        </p>
                                                        <div class="min_input__one_box"><input type="text" class="min_input__input min_input__input-kilogram"><span class="min_input__one_before">кг</span></div>
                                                    </div>
                                                    <div class="min_input__one">
                                                        <p class="rooms_info__title">
                                                            <span class="rooms_info__text">Расстояние</span>
                                                            <span class="rooms_info__tooltip tooltip" title="Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur commodi, iure saepe soluta voluptatem voluptates?">?</span>
                                                        </p>
                                                        <div class="min_input__one_box"><input type="text" class="min_input__input min_input__input-meters"><span class="min_input__one_before">Метров</span></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="rigging_one__config">
                                            <div class="rigging_one__check_address check_address_rigging check_address_rigging-visible">
                                                <div class="check_address_rigging__wrap">
                                                    <div class="min_input__one">
                                                        <p class="rooms_info__title">
                                                            <span class="rooms_info__text">Откуда забрать</span>
                                                            <span class="rooms_info__tooltip tooltip" title="Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur commodi, iure saepe soluta voluptatem voluptates?">?</span>
                                                        </p>
                                                        <div class="min_input__one_box">
                                                            <select name="<?= $currentStep?>[SELECT_ADDRESS]" id="check_address1" class="check_address_rigging__select form__select">
                                                                <? foreach ($arResult['select_route'] as $k => $route) {?>
                                                                    <option value="_<?= $k?>"><?= $route?></option>
                                                                <? }?>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="min_input__one">
                                                        <p class="rooms_info__title">
                                                            <span class="rooms_info__text">Расстояние</span>
                                                            <span class="rooms_info__tooltip tooltip" title="Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur commodi, iure saepe soluta voluptatem voluptates?">?</span>
                                                        </p>
                                                        <div class="min_input__one_box"><input type="text" class="min_input__input min_input__input-meters"><span class="min_input__one_before">Метров</span></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="rigging_one__check_inline check_inline">
                                                <div class="check_inline__one">
                                                    <input type="radio" class="rigger_checkbox_stage check_inline__input rigging__title_input" name="rigging_one__config" value="rigging_one__config3" id="rigging_one__config3" onchange="checkHiddenBox(this)" data-check-hidden="id1_1">
                                                    <label for="rigging_one__config3" class="check_inline__label check_inline__label-big rigging__title_label">
                                                        <svg width="24px" height="24px" viewBox="0 0 40 40" xmlns="http://www.w3.org/2000/svg" class="check_inline__icon checkbox">
                                                            <rect class="checkbox__rect" width="100%" height="100%"></rect>
                                                            <polyline class="checkbox__checked" points="11,20.053 16.964,26.018 30.385,12.598"></polyline>
                                                        </svg>
                                                        <span class="check_inline__text">Доставить</span>
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="rigging_one__check_address check_address_rigging" data-check-input="id1_1">
                                                <div class="check_address_rigging__wrap">
                                                    <div class="min_input__one">
                                                        <p class="rooms_info__title">
                                                            <span class="rooms_info__text">Адрес</span>
                                                            <span class="rooms_info__tooltip tooltip" title="Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur commodi, iure saepe soluta voluptatem voluptates?">?</span>
                                                        </p>
                                                        <div class="min_input__one_box">
                                                            <select name="check_address" id="check_address" class="check_address_rigging__select form__select">
                                                                <option value="">Москва, ул. Яблочкова д.18 к.3</option>
                                                                <option value="">Москва, Бумажный проезд 14 с1</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="min_input__one">
                                                        <p class="rooms_info__title">
                                                            <span class="rooms_info__text">Расстояние</span>
                                                            <span class="rooms_info__tooltip tooltip" title="Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur commodi, iure saepe soluta voluptatem voluptates?">?</span>
                                                        </p>
                                                        <div class="min_input__one_box"><input type="text" class="min_input__input min_input__input-meters"><span class="min_input__one_before">Метров</span></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="rigging_one__check_inline check_inline">
                                                <div class="check_inline__one">
                                                    <input type="radio" class="rigger_checkbox_stage check_inline__input rigging__title_input" name="rigging_one__config" value="rigging_one__config2" id="rigging_one__config2" onchange="checkHiddenBox(this)" data-check-hidden="id1_2">
                                                    <label for="rigging_one__config2" class="check_inline__label check_inline__label-big rigging__title_label">
                                                        <svg width="24px" height="24px" viewBox="0 0 40 40" xmlns="http://www.w3.org/2000/svg" class="check_inline__icon checkbox">
                                                            <rect class="checkbox__rect" width="100%" height="100%"></rect>
                                                            <polyline class="checkbox__checked" points="11,20.053 16.964,26.018 30.385,12.598"></polyline>
                                                        </svg>
                                                        <span class="check_inline__text">Только вывоз/утилизация <span class="check_inline__tooltip tooltip" title="Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur commodi, iure saepe soluta voluptatem voluptates?">?</span></span>
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="rigging_one__removal check_address_removal" data-check-input="id1_2">
                                                <div class="check_address_removal__check_removal check_inline">
                                                    <div class="check_inline__one">
                                                        <input type="radio" class="rigger_checkbox_stage check_inline__input rigging__title_input" name="check_inline9" value="check_inline919" id="check_inline919">
                                                        <label for="check_inline919" class="check_inline__label check_inline__label-big rigging__title_label">
                                                            <svg width="24px" height="24px" viewBox="0 0 40 40" xmlns="http://www.w3.org/2000/svg" class="check_inline__icon checkbox">
                                                                <circle class="checkbox__rect" cx="50%" cy="50%" r="47%"></circle>
                                                                <polyline class="checkbox__checked" points="11,20.053 16.964,26.018 30.385,12.598"></polyline>
                                                            </svg>
                                                            <span class="check_inline__text">На свалку (от 2000)</span>
                                                        </label>
                                                    </div>
                                                    <div class="check_inline__one">
                                                        <input type="radio" class="rigger_checkbox_stage check_inline__input rigging__title_input" name="check_inline9" value="check_inline918" id="check_inline918">
                                                        <label for="check_inline918" class="check_inline__label check_inline__label-big rigging__title_label">
                                                            <svg width="24px" height="24px" viewBox="0 0 40 40" xmlns="http://www.w3.org/2000/svg" class="check_inline__icon checkbox">
                                                                <circle class="checkbox__rect" cx="50%" cy="50%" r="47%"></circle>
                                                                <polyline class="checkbox__checked" points="11,20.053 16.964,26.018 30.385,12.598"></polyline>
                                                            </svg>
                                                            <span class="check_inline__text">Во двор (от 1000)</span>
                                                        </label>
                                                    </div>
                                                    <div class="check_inline__one">
                                                        <input type="radio" class="rigger_checkbox_stage check_inline__input rigging__title_input" name="check_inline9" value="check_inline917" id="check_inline917">
                                                        <label for="check_inline917" class="check_inline__label check_inline__label-big rigging__title_label">
                                                            <svg width="24px" height="24px" viewBox="0 0 40 40" xmlns="http://www.w3.org/2000/svg" class="check_inline__icon checkbox">
                                                                <circle class="checkbox__rect" cx="50%" cy="50%" r="47%"></circle>
                                                                <polyline class="checkbox__checked" points="11,20.053 16.964,26.018 30.385,12.598"></polyline>
                                                            </svg>
                                                            <span class="check_inline__text">Заказ контейнера (300)</span>
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="rigging_one__config_form form">
                                                <div class="form__row step__form_pt">
                                                    <div class="form__one form__one-w100">
                                                        <label for="" class="form__label form__label-left">Комментарий</label>
                                                        <div class="form__element_box">
                                                            <textarea class="form__element form__element-input" name="" id="" cols="30" rows="4"></textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
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
                <button class="move_step__btn btn btn-white" type="button">Предыдущий шаг</button>
                <input class="move_step__btn btn" type="submit" value="Далее" name="submit_next">
            </div>
        </div>
    </form>
</div>
