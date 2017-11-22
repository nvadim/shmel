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

$data = $arResult['SAVED_DATA'];
?>

<div class="move_calc">
    <form action="<?=$APPLICATION->GetCurPageParam() ?>" name="calc_form" method="POST" class="move_calc__form">
        <input type="hidden" name="STEP" value="depart">

        <div class="move_step move_step-active move_step1">
            <div class="move_step1__service service">
                <p class="move_step_title">Услуга:</p>
                <div class="checked">
                    <div class="checked__list">
                        <div class="checked__item service__item">
                            <input type="radio"
                                <?= ($arResult['move_type']=='apartment')?'checked':''?>
                                   class="checked__radio service__radio"
                                   name="MOVE_TYPE"
                                   value="apartment"
                                   id="service1">
                            <label for="service1"
                                   class="checked__label service__label">
                                <svg xmlns="http://www.w3.org/2000/svg"
                                     width="262"
                                     height="111"
                                     viewBox="0 0 262 111"
                                     class="move_pic">
                                    <g fill="#FFF"
                                       fill-rule="evenodd"
                                       stroke-linecap="round"
                                       stroke-linejoin="round"
                                       stroke-width="2">
                                        <path class="move_pic__green" d="M86.11 109.982h32.175V60.681H86.11z"/>
                                        <path class="move_pic__green" d="M173.295 38.884H111.54c-7.452 0-13.493 6.042-13.493 13.493v8.304M173.295 70.022h-55.01M173.295 93.894h-55.01M173.295 101.679h-55.01M228.305 109.982h32.176V60.681h-32.176z"/>
                                        <path class="move_pic__green" d="M173.295 38.884h61.757c7.452 0 13.493 6.042 13.493 13.493v8.304M173.295 70.022h55.01M173.295 93.894h55.01M173.295 101.679h55.01"/>
                                        <path class="move_pic__gray" d="M1 101.68h62.275v-41H1zM63.276 81.18H1M40.442 91.69H23.834M40.442 70.671H23.834M8.785 109.982v-8.303M55.491 109.982v-8.303"/>
                                        <path class="move_pic__orange" d="M44.419 60.68a16.013 16.013 0 0 0 3.807-10.378c0-8.885-7.203-16.088-16.088-16.088-8.885 0-16.088 7.203-16.088 16.088 0 3.957 1.435 7.576 3.806 10.379h24.563zM63.276 34.214H1L8.785 7.227H55.49zM32.138 7.227V1"/>
                                        <path class="move_pic__green" d="M173.295 38.884v62.795"/>
                                    </g>
                                </svg>
                                <span class="service__item_text">Квартирный переезд</span>
                            </label>
                        </div>
                        <div class="checked__item service__item">
                            <input type="radio"
                                <?= ($arResult['move_type']=='office')?'checked':''?>
                                   class="checked__radio service__radio"
                                   name="MOVE_TYPE"
                                   value="office"
                                   id="service2">
                            <label for="service2"
                                   class="checked__label service__label">
                                <svg xmlns="http://www.w3.org/2000/svg"
                                     width="199"
                                     height="128"
                                     viewBox="0 0 199 128"
                                     class="move_pic">
                                    <g fill="#FFF"
                                       fill-rule="evenodd"
                                       stroke-linecap="round"
                                       stroke-linejoin="round"
                                       stroke-width="2">
                                        <path class="move_pic__gray" d="M27.951 101.567a3.962 3.962 0 1 1-7.924 0 3.962 3.962 0 0 1 7.924 0z"/>
                                        <path class="move_pic__orange" d="M35.026 73.267v21.508a6.792 6.792 0 0 1-6.792 6.792H23.99"/>
                                        <path class="move_pic__gray" d="M1.066 56.286h109.522v-6.792H1.066zM6.726 126.507h4.811v-70.22h-4.81zM100.117 126.507h4.811v-70.22h-4.81zM11.396 73.267h88.58M45.356 64.777h20.66M85.401 126.507H64.176l-2.83-28.902H88.23zM61.964 105.53h25.648"/>
                                        <path class="move_pic__orange" d="M11.537 41.57h63.251V1.668h-63.25zM11.537 34.212h63.251"/>
                                        <path class="move_pic__green" d="M136.342 76.663a6.792 6.792 0 0 1-6.793-6.792v-8.349h5.236"/>
                                        <path class="move_pic__orange" d="M99.976 37.608h.99a3.962 3.962 0 1 1 0 7.924h-.99"/>
                                        <path class="move_pic__green" d="M190.678 76.663a6.792 6.792 0 0 0 6.792-6.792v-8.349h-5.235"/>
                                        <path class="move_pic__orange" d="M51.724 49.495H34.602L36.3 41.57h13.726zM88.231 49.495h11.745V34.213H88.23zM93.254 28.623a3.701 3.701 0 0 0 0-5.236 3.701 3.701 0 0 1 0-5.235"/>
                                        <path class="move_pic__green" d="M169.075 87.464a5.566 5.566 0 1 1-11.13 0"/>
                                        <path class="move_pic__orange" d="M97.335 26.288a3.701 3.701 0 0 0 0-5.235 3.702 3.702 0 0 1 0-5.236"/>
                                        <path class="move_pic__green" d="M185.301 82.04H141.72a5.377 5.377 0 1 1 0-10.754H185.3a5.377 5.377 0 1 1 0 10.754zM148.7 87.718h29.62V82.04H148.7zM147.945 120.104a7.075 7.075 0 0 1 7.075-7.075H172a7.075 7.075 0 0 1 7.075 7.075M183.745 71.286h-40.47V31.24c0-9.378 7.603-16.98 16.98-16.98h6.51c9.377 0 16.98 7.602 16.98 16.98v40.045zM163.51 93.03v27.074"/>
                                        <path class="move_pic__green" d="M166.34 122.934a2.83 2.83 0 1 1-5.66 0 2.83 2.83 0 0 1 5.66 0zM150.775 122.934a2.83 2.83 0 1 1-5.66 0 2.83 2.83 0 0 1 5.66 0zM181.905 122.934a2.83 2.83 0 1 1-5.66 0 2.83 2.83 0 0 1 5.66 0zM151.624 33.08h23.772M151.624 46.452h23.772M151.624 59.824h23.772"/>
                                        <path class="move_pic__orange" d="M68.704 37.608h2.264"/>
                                    </g>
                                </svg>
                                <span class="service__item_text">Офисный переезд</span>
                            </label>
                        </div>
                        <div class="checked__item service__item">
                            <input type="radio"
                                <?= ($arResult['move_type']=='village')?'checked':''?>
                                   class="checked__radio service__radio"
                                   name="MOVE_TYPE"
                                   value="village"
                                   id="service3">
                            <label for="service3"
                                   class="checked__label service__label">
                                <svg xmlns="http://www.w3.org/2000/svg"
                                     width="244"
                                     height="131"
                                     viewBox="0 0 244 131"
                                     class="move_pic">
                                    <g fill="#FFF"
                                       fill-rule="evenodd"
                                       stroke-linecap="round"
                                       stroke-linejoin="round"
                                       stroke-width="2">
                                        <path class="move_pic__green"
                                              d="M26.649 112.33c-.381-2.614-3.523-4.349-5.958-3.757-3.97.965-4.259 4.924-4.403 6.973.174-.97-6.51-5.888-9.298.424-.496 1.124-.059 4.646 1.39 6.183"/>
                                        <path class="move_pic__green"
                                              d="M31.606 116.566c0-3.845-1.891-4.405-3.618-4.407-1.338-.001-2.682.428-3.737 1.906-.93 1.303-1.129 4.624-1.129 4.624s-2.192-4.982-6.861-3.146c-2.567 1.009-4.382 3.812-3.837 6.525-2.009-.889-4.585-.207-5.895 1.563-1.31 1.77-1.217 3.77.21 5.443"/>
                                        <path class="move_pic__gray"
                                              d="M31.606 129.074h119.579V68.679H31.606zM180.868 36.304v42.738"/>
                                        <path class="move_pic__gray"
                                              d="M91.396 22.58l69.475 46.1H21.92z"/>
                                        <path class="move_pic__gray"
                                              d="M97.784 26.819l38.665-25.656 52.96 35.142h-77.326z"/>
                                        <path class="move_pic__orange"
                                              d="M97.784 45.63c0 3.543-2.86 6.413-6.388 6.413-3.529 0-6.389-2.87-6.389-6.414 0-3.543 2.86-6.414 6.39-6.414 3.527 0 6.387 2.87 6.387 6.414zM55.095 61.532h72.601M113.028 27.582h47.842M41.571 129.074h16.371V99.055h-16.37zM57.942 115.494h-5.694M73.957 114.065h39.071V82.259h-39.07zM84.201 82.26v31.806M102.784 82.26v31.806M125.917 97.447h15.125V82.26h-15.125zM145.357 53.082h28.394v-9.63h-28.394zM36.945 92.41h25.624"/>
                                        <path class="move_pic__gray"
                                              d="M151.185 87.977h64.06v-8.934h-64.06zM205.28 123.714V87.977M151.185 123.714h91.107"/>
                                        <path class="move_pic__green"
                                              d="M205.28 108.961c0-3.116 3.862-4.967 6.181-5.163 2.318-.196 4.704.943 6.012 2.873 1.818-1.026 4.23-.878 5.908.366s2.528 3.515 2.085 5.562c3.179-1.196 6.956-.63 9.648 1.45 2.691 2.08 3.235 5.912.595 9.664M223.237 106.372c3.048-2.365 7.59-2.562 10.83-.472 1.107.713 2.106 1.75 2.331 3.049.28 1.615-.68 3.159-1.597 4.516M215.206 103.525c.003-1.285.898-2.418 1.96-3.139 2.24-1.52 5.397-1.527 7.645-.017 1.097.738 2.031 2.017 1.724 3.306"/>
                                        <path class="move_pic__orange"
                                              d="M160.87 123.714h34.724V99.243H160.87zM165.065 111.698H191.4M165.065 117.638H191.4M165.065 105.76H191.4"/>
                                        <path class="move_pic__gray"
                                              d="M180.868 64.39h27.437M186.563 64.39v13.76M192.257 64.39v13.76M197.951 64.39v13.76M203.645 64.39v13.76M31.606 129.074H1"/>
                                    </g>
                                </svg>
                                <span class="service__item_text">Дачный переезд</span>
                            </label>
                        </div>
                    </div>
                </div>
            </div>
            <script src="http://api-maps.yandex.ru/2.1/?lang=ru_RU" type="text/javascript"></script>
            <script>
                function suggestView (e) {
                    var suggestView1 = new ymaps.SuggestView(e);
                }
                // TODO: этот скрипт вынести в ту часть где будет использоваться элемент datapicker
                $(function () {
                    $('.set_date').datepicker({
                        dateFormat: 'dd M yyyy',
                        timepicker: false,
                        minDate: new Date(),
                        startDate: new Date()
                    });


                    $('.set_time').inputmask("hh:mm", {
                        showMaskOnHover: false,
                        showMaskOnFocus: false,
                        placeholder: "чч:мм",
                        jitMasking: true
                    });

                    ymaps.ready(function () {
                        $(document).on('focus', '.route_item__map', function (e) {
                            suggestView(e.target);
                        });
                    });

                    $(document).on('click', '.button_map__btn', function (e) {
                        e.preventDefault();

                        var addressArray = [],
                            pointType = 'viaPoint',
                            error = true;

                        $('.route_item').each(function (index) {
                            var element = this;

                            if(index === 0 || index === index.length){
                                pointType = 'islands'
                            }
                            if($('.form__element', element).val() === '' || $('.form__element', element).val() === undefined){
                                $('.form__element', element).addClass('form__element-error');

                                error = true;
                            }
                            else {
                                addressArray.push(
                                    {
                                        "point": $('.form__element', element).val().toString(),
                                        "type": pointType
                                    }
                                );

                                error = false;
                            }
                        });

                        if(!error){
                            $.arcticmodal({
                                overlay: {
                                    css: {
                                        backgroundColor: 'rgba(0,0,0,.8)',
                                        opacity: 1
                                    }
                                },
                                type: 'ajax',
                                url: $(this).data('route-url'),
                                afterOpen: function(data, el) {
                                    loadingMap(addressArray);
                                },
                                afterClose: function(data, el) {

                                }
                            });
                        }
                        else {
                            alert('Введите корректные адреса.');
                        }
                    });
                });
            </script>
            <div class="move_step2__date">
                <span class="move_step2__date_text">Время подачи:</span>
                <input type="text"
                       name="DATE"
                       value="<?= ($data['DATE'])? $data['DATE']: ''?>"
                       class="move_step2__date_input set_date input_date"
                       placeholder="дд мес гггг"/>
                <input type="text"
                       name="TIME"
                       value="<?= ($data['TIME'])? $data['TIME']: ''?>"
                       class="move_step2__date_input move_step2__date_input-time set_time input_time"
                       placeholder="чч:мм"/>
            </div>
            <div class="move_step2__mapping ">
                <div class="mapping">
                    <div class="route__list">
                        <div class="mapping__one mapping__one-first route_item route_item-first">
                            <label for="rout_first" class="mapping__text">Старт:</label>
                            <span class="mapping__point_box">
                                                            <span class="mapping__point mapping__point-start">1</span>
                                                        </span>
                            <div class="form__element_box mapping__input">
                                <input type="text" id="rout_first"
                                       class="form__element form__element-input route_item__map"
                                       name="FROM[]"
                                       value="<?= ($data['FROM'][0]) ? $data['FROM'][0] : '' ?>"
                                       required=""
                                       placeholder="Москва, Огородный проезд 3 к.2">
                            </div>
                        </div>

                        <div class="route__new">
                            <? foreach ($data['FROM'] as $index => $item) {
                                if($index==0)
                                    continue;
                                ?>
                                <div class="mapping__one route_item"><span
                                            class="mapping__text">&nbsp;</span><span
                                            class="mapping__point_box"><span
                                                class="mapping__point"><?= $index+1?></span></span>
                                    <div class="form__element_box mapping__input">
                                        <ymaps style="z-index: 40000; display: none; position: absolute; width: 696px; top: 46px; left: 0px;">
                                            <ymaps>
                                                <ymaps class="ymaps-2-1-56-search__suggest ymaps-2-1-56-popup ymaps-2-1-56-popup_theme_ffffff ymaps-2-1-56-i-custom-scroll"
                                                       data-suggest="true">
                                                    <ymaps id="id_151133175479374022465"></ymaps>
                                                </ymaps>
                                            </ymaps>
                                        </ymaps>
                                        <input name="FROM[]" type="text"
                                               class="form__element form__element-input route_item__map"
                                               value="<?= $item?>" autocomplete="off">
                                        <button class="mapping__delete rout__del"
                                                type="button">Удалить
                                        </button>
                                    </div>
                                </div>
                            <? }?>
                        </div>

                        <div class="mapping__one mapping__one-last route_item route_item-last">
                            <label for="rout_last" class="mapping__text">Куда:</label>
                            <span class="mapping__point_box">
                                                            <span class="mapping__point mapping__point-finish"><?= $index+2?></span>
                                                        </span>
                            <div class="form__element_box mapping__input">
                                <input type="text" id="rout_last"
                                       class="form__element form__element-input route_item__map"
                                       name="TO"
                                       value="<?= ($data['TO']) ? $data['TO']: '' ?>"
                                       required=""
                                       placeholder="Москва, Бумажный проезд 14 с1">
                            </div>
                        </div>
                    </div>

                    <div class="mapping__one">
                        <span class="mapping__text">&nbsp;</span>
                        <span class="mapping__point_box">
                            <span class="mapping__point mapping__point-none mapping__point-green"></span>
                        </span>
                        <button class="mapping__add btn btn-white rout__add" type="button">+ Добавить промежуточный адрес</button>
                    </div>
                </div>
                <div class="button_map">
                    <button class="button_map__btn" type="button" data-modal="#auth" data-url="<?= FRONEND_BUILD_PATH?>/map.html">
                        <span class="button_map__ico"><img src="<?= FRONEND_BUILD_PATH?>img/gps.svg" class="button_map__img"></span>
                        <span class="button_map__text">Посмотреть маршрут на карте</span>
                    </button>
                </div>
            </div>
            <div class="additionally__one contacts_all">
                <p class="move_step_title">Контактные данные:</p>
                <div class="additionally__content">
                    <div class="form">
                        <div class="form__row step__form_pt">
                            <div class="form__one form__one-w50">
                                <label for="id14"
                                       class="form__label form__label-left">Имя</label>
                                <div class="form__element_box">
                                    <input type="text"
                                           name="CONTACT[NAME]"
                                           value="<?= ($data['CONTACT']['NAME'])? $data['CONTACT']['NAME']: ''?>"
                                           class="form__element form__element-input"
                                           required="">
                                </div>
                            </div>
                            <div class="form__one form__one-w50">
                                <label for="id24"
                                       class="form__label form__label-left">Телефон</label>
                                <div class="form__element_box">
                                    <input type="tel"
                                           name="CONTACT[PHONE]"
                                           value="<?= ($data['CONTACT']['PHONE'])? $data['CONTACT']['PHONE']: ''?>"
                                           class="form__element form__element-input"
                                           required="">
                                </div>
                            </div>
                        </div>
                        <div class="form__row step__form_pt">
                            <div class="form__one form__one-w100">
                                <label for="id14"
                                       class="form__label form__label-left">Комментарий</label>
                                <div class="form__element_box">
                        <textarea
                            class="form__element form__element-input"
                            name="CONTACT[COMMENT]"
                            cols="30"
                            rows="5"><?= ($data['CONTACT']['COMMENT'])? $data['CONTACT']['COMMENT']: ''?></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="check_inline">
                    <div class="check_inline__one">
                        <input type="checkbox"
                               class="check_inline__input"
                               name="USE_CONTACT_FOR_ALL"
                               value="Y"
                               id="radio_0" <?= ($data['USE_CONTACT_FOR_ALL'] || !isset($data['USE_CONTACT_FOR_ALL']))? 'checked': ''?>>
                        <label for="radio_0"
                               class="check_inline__label check_inline__label-wide">
                            <svg width="24px"
                                 height="24px"
                                 viewBox="0 0 40 40"
                                 xmlns="http://www.w3.org/2000/svg"
                                 class="check_inline__icon checkbox">
                                <rect class="checkbox__rect"
                                      width="100%"
                                      height="100%"></rect>
                                <polyline
                                    class="checkbox__checked"
                                    points="11,20.053 16.964,26.018 30.385,12.598"></polyline>
                            </svg>
                            <span class="check_inline__text">Использовать эти данные на всех адресах</span>
                        </label>
                    </div>
                </div>
            </div>
            <div class="move_step__buttons move_step1__buttons">
                <button class="move_step__btn btn btn-white"
                        type="button">Вызвать замерщика
                </button>
                <input class="move_step__btn btn" type="submit" value="Далее" name="submit_next">
            </div>
        </div>

    </form>
</div>
