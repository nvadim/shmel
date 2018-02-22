<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/modules/main/include/prolog_before.php");

if(empty($_REQUEST['id'])) {
    die();
}
// список адресов
$savedData = $_SESSION['MOVE_FORM'];
for ($i = 0; $i < count($savedData['route']['FROM']); $i++) {
    $arResult['select_route']["reference"][] = $savedData['route']['FROM'][$i];
    $arResult['select_route']["reference_id"][] = "from_{$i}";
}
$arResult['select_route']["reference"][] = $savedData['route']['TO'];
$arResult['select_route']["reference_id"][] = 'to';

$selectList = ShmelTools\Options::getInstance()->getProperty('selectList');
foreach ($selectList as $k => $v) {
    $arResult['select_list_value']["reference"][] = $v;
    $arResult['select_list_value']["reference_id"][] = $k;
}

$carCategories = ShmelTools\Options::getInstance()->getProperty('catTransport');
$curTransport = $carCategories[$_REQUEST['id']];
?>
<div class="custom_content">
    <div class="custom_content__title_box custom_title_box">
        <div class="custom_title_box__left">
            <span class="custom_title_box__number">Автомобиль :</span>
            <span class="custom_title_box__title"><?= "{$curTransport['name']} (до {$curTransport['weight']} тонн, до {$curTransport['volume']}м³)"?></span>
        </div>
        <div class="custom_title_box__right">
            <div class="custom_title_box__deactivate">
                <div class="switcher">
                    <input type="checkbox" class="switcher__checkbox" id="switcher0" name="switcher0" checked onchange="disabledCustomBlock('.custom_content','custom_content-off');">
                    <label for="switcher0" class="switcher__container">
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
                    <input type="radio" class="times_day__radio" name="times_day45" value="times_day0" id="times_day0" checked>
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
                    <input type="radio" class="times_day__radio" name="times_day45" value="times_day1" id="times_day1">
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
                            <span class="custom_time_add__price">+ 430</span>
                            <span class="custom_time_add__currency">₽</span>
                        </div>
                    </div>
                </div>
            </div>
            <p class="custom_time_add__desc">* Стоимость каждого последующего часа 500₽</p>
            <div class="one_default">
                <p class="one_default__title">Выбор маршрута: <span class="one_default__tooltip tooltip" title="srgdsf">?</span></p>
                <?
//                $_selectField = 'class="form__select"';
                foreach ($arResult['select_route']['reference'] as $k => $route) {
                    $key = $arResult['select_route']['reference_id'][$k];
//                    $selectField = $_selectField . ' disabled';
                    $sid = "id1_{$key}";
                    ?>
                    <div class="check_inline__one">
                        <input name="POINT_CHECK[<?= $key ?>]"
                                value="<?= $key ?>"
                                type="checkbox"
                                class="check_inline__input"
                                id="rigging_one__config<?= $key ?>"
                                onchange="checkDisabledLabel(this)"
                                data-check-disabled="<?= $sid?>">
                        <label class="check_inline__label check_address">
                            <svg width="24px" height="24px" viewBox="0 0 40 40" xmlns="http://www.w3.org/2000/svg" class="check_inline__icon checkbox check_address__icon">
                                <rect class="checkbox__rect" width="100%" height="100%"></rect>
                                <polyline class="checkbox__checked" points="11,20.053 16.964,26.018 30.385,12.598"></polyline>
                            </svg>
                            <span class="check_address__name"><?= $route?></span>
                            <span class="check_address__select">
                                                        <?/*= SelectBoxFromArray(
                                                                "{$currentStep}[POINT_TYPE][_{$k}]",
                                                                $arResult['select_list_value'],
                                                                $data['POINT_TYPE'][$key],
                                                                '',
                                                                $selectField)*/?>

                                <select class="form__select"
                                        name="POINT_TYPE[<?= $key?>]"
                                        id="id1_<?= $key?>" disabled>
                                    <? foreach ($arResult['select_list_value']['reference'] as $index => $val) {
                                        $s = $arResult['select_list_value']['reference_id'][$index];
                                        ?>
                                        <option value="<?= $s?>"><?= $val?></option>
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

