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

$data = $arResult['SAVED_DATA'][$arParams['STEP']];
?>

<div class="move_calc">

    <? foreach ($arResult['ERROR_MESSAGES'] as $er) {?>
        <span class="page_steps__error">* <?= $er?></span>
    <? }?>

    <form action="<?=$APPLICATION->GetCurPageParam() ?>" name="calc_form" method="POST" class="move_calc__form">
        <input type="hidden" name="CURRENT_PAGE" value="<?= $arParams['STEP']?>">

        <div class="move_step move_step-active move_step3">
            <div class="move_step3__list">

                <div class="move_step3__item move_config">
                    <div class="move_config__head">
                        <div class="move_config__left">
                            <p class="move_config__spoiler_title"><?= $arResult['route_title']?>:</p>
                        </div>
                    </div>
                    <div class="move_config__no_hidden">
                        <div class="mapping_step">
                            <div class="mapping_step__icon">
                                <span class="mapping_step__point mapping_step__point-step mapping_step__point-start"><?= $arResult['num_bulavka'] ?></span>
                            </div>
                            <div class="mapping_step__text"><?= $arResult['address'] ?></div>
                        </div>
                    </div>
                    <div class="move_config__content">
                        <div class="move_config__wrap">
                            <div class="min_input">
                                <div class="min_input__one">
                                    <p class="rooms_info__title">
                                        <span class="rooms_info__text">Этаж</span>
                                        <span class="rooms_info__tooltip tooltip" title="Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur commodi, iure saepe soluta voluptatem voluptates?">?</span>
                                    </p>
                                    <div class="min_input__one_box"><input name="<?= $arParams['STEP']?>[FLOOR]" type="number" value="<?= $data["FLOOR"]?>" class="min_input__input" onkeypress="return enterNumber(event);"></div>
                                </div>
                                <div class="min_input__one">
                                    <p class="rooms_info__title">
                                        <span class="rooms_info__text">Площадь, м²</span>
                                        <span class="rooms_info__tooltip tooltip" title="Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur commodi, iure saepe soluta voluptatem voluptates?">?</span>
                                    </p>
                                    <div class="min_input__one_box"><input name="<?= $arParams['STEP']?>[AREA]" type="number" value="<?= $data["AREA"]?>" class="min_input__input" onkeypress="return enterNumber(event);"></div>
                                </div>
                                <div class="min_input__one">
                                    <p class="rooms_info__title">
                                        <span class="rooms_info__text">Кол-во комнат</span>
                                        <span class="rooms_info__tooltip tooltip" title="Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur commodi, iure saepe soluta voluptatem voluptates?">?</span>
                                    </p>
                                    <div class="min_input__one_box"><input required name="<?= $arParams['STEP']?>[NUM_OF_ROOMS]" type="number" value="<?= $data["NUM_OF_ROOMS"]?>" class="min_input__input" onkeypress="return enterNumber(event);"></div>
                                </div>
                            </div>
                        </div>
                        <div class="move_config__wrap">
                            <div class="rooms_info">
                                <div class="rooms_info__item">
                                    <p class="rooms_info__title">
                                        <span class="rooms_info__text">Класс помещения</span>
                                        <span class="rooms_info__tooltip tooltip" title="Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur commodi, iure saepe soluta voluptatem voluptates?">?</span>
                                    </p>
                                    <div class="checked">
                                        <div class="checked__list checked__list-room">
                                            <div class="checked__item checked__item-room">
                                                <input type="radio" class="checked__radio congestion__radio" name="<?= $arParams['STEP']?>[CLASS]" <?= ($data["CLASS"]=='Стандарт')?'checked':''?> value="Стандарт" id="move_step1__r1">
                                                <label for="move_step1__r1" class="checked__label congestion__label congestion__label-room">
                                                    <svg width="22px" height="28px" viewBox="0 0 22 28" xmlns="http://www.w3.org/2000/svg" class="gray_pic">
                                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd" stroke-linecap="round" stroke-linejoin="round">
                                                            <g transform="translate(-149.000000, -1263.000000)" stroke="#F47920" stroke-width="1.5">
                                                                <g transform="translate(149.659302, 1264.405457)">
                                                                    <path class="gray_pic__path" d="M19.6601102,24.9431193 L18.7867351,4.36484725 C18.7313187,3.06628923 17.662528,2.04189643 16.3626737,2.04189643 L3.62111996,2.04189643 C2.32126564,2.04189643 1.25247493,3.06628923 1.19738263,4.36484725 L0.323683493,24.9431193"></path>
                                                                    <path class="gray_pic__path" d="M6.15698633,24.9431193 L6.80513109,2.04189643"></path>
                                                                    <path class="gray_pic__path" d="M13.8268073,24.9431193 L13.1786626,2.04189643"></path>
                                                                    <path class="gray_pic__path" d="M0.971828253,0 L19.0119654,0"></path>
                                                                </g>
                                                            </g>
                                                        </g>
                                                    </svg>
                                                    <span class="congestion__item_text">Стандарт</span>
                                                </label>
                                            </div>
                                            <div class="checked__item checked__item-room">
                                                <input type="radio" class="checked__radio congestion__radio" name="<?= $arParams['STEP']?>[CLASS]" <?= ($data["CLASS"]=='Евро')?'checked':''?> value="Евро" id="move_step1__r2">
                                                <label for="move_step1__r2" class="checked__label congestion__label congestion__label-room">
                                                    <svg width="24px" height="39px" viewBox="0 0 24 39" xmlns="http://www.w3.org/2000/svg" class="gray_pic">
                                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd" stroke-linecap="round">
                                                            <g transform="translate(-283.000000, -1257.000000)" stroke="#939598" stroke-width="1.5">
                                                                <g transform="translate(284.659302, 1257.905457)">
                                                                    <path class="gray_pic__path" d="M18.5091752,26.7626316 L2.68611156,26.7626316 C1.20255283,26.7626316 0,25.5600788 0,24.0765201 L0,21.1463231 C0,19.6630574 1.20255283,18.4602116 2.68611156,18.4602116 L18.5091752,18.4602116 C19.9924409,18.4602116 21.1949937,19.6630574 21.1949937,21.1463231 L21.1949937,24.0765201 C21.1949937,25.5600788 19.9924409,26.7626316 18.5091752,26.7626316 Z"></path>
                                                                    <polygon class="gray_pic__path" points="3.10102745 18.4602409 18.0939662 18.4602409 18.0939662 0 3.10102745 0"></polygon>
                                                                    <path class="gray_pic__path" d="M4.56612593,26.7626316 L3.10102745,37.1158966"></path>
                                                                    <path class="gray_pic__path" d="M16.6288678,26.7626316 L18.0939662,37.1158966"></path>
                                                                </g>
                                                            </g>
                                                        </g>
                                                    </svg>
                                                    <span class="congestion__item_text">Евро</span>
                                                </label>
                                            </div>
                                            <div class="checked__item checked__item-room">
                                                <input type="radio" class="checked__radio congestion__radio" name="<?= $arParams['STEP']?>[CLASS]" <?= ($data["CLASS"]=='VIP')?'checked':''?> value="VIP" id="move_step1__r3">
                                                <label for="move_step1__r3" class="checked__label congestion__label congestion__label-room">
                                                    <svg width="45px" height="35px" viewBox="0 0 45 35" xmlns="http://www.w3.org/2000/svg" class="gray_pic">
                                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd" stroke-linecap="round">
                                                            <g transform="translate(-408.000000, -1259.000000)" stroke="#939598" stroke-width="1.5">
                                                                <g transform="translate(409.659302, 1259.905457)">
                                                                    <path class="gray_pic__path" d="M42.5286092,11.6286025 C42.5286092,8.87619977 40.2971828,6.64477332 37.54478,6.64477332 C34.7923773,6.64477332 32.5609509,8.87619977 32.5609509,11.6286025 L32.5609509,20.2672397 L9.96759191,20.2672397 L9.96759191,11.6286025 C9.96759191,8.87619977 7.73616546,6.64477332 4.98376273,6.64477332 C2.23136,6.64477332 -6.64510553e-05,8.87619977 -6.64510553e-05,11.6286025 L-6.64510553e-05,30.3458714 L42.5286092,30.3458714 L42.5286092,11.6286025 Z"></path>
                                                                    <path class="gray_pic__path" d="M6.75568013,6.64477332 L6.75568013,5.03898356 C6.75568013,2.25601334 9.01202573,0 11.7949959,0 L30.7335468,0 C33.5168493,0 35.7728626,2.25601334 35.7728626,5.03898356 L35.7728626,6.64477332"></path>
                                                                    <path class="gray_pic__path" d="M3.98699689,30.3458714 L3.98699689,33.3361689"></path>
                                                                    <path class="gray_pic__path" d="M38.5415459,30.3458714 L38.5415459,33.3361689"></path>
                                                                    <path class="gray_pic__path" d="M4.87308849,10.6321689 L4.87308849,26.5804223"></path>
                                                                    <path class="gray_pic__path" d="M37.54478,10.6321689 L37.54478,26.5804223"></path>
                                                                </g>
                                                            </g>
                                                        </g>
                                                    </svg>
                                                    <span class="congestion__item_text">VIP</span>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="rooms_info__item">
                                    <p class="rooms_info__title">
                                        <span class="rooms_info__text">Загруженность помещения</span>
                                        <span class="rooms_info__tooltip tooltip" title="Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur commodi, iure saepe soluta voluptatem voluptates?">?</span>
                                    </p>
                                    <div class="checked">
                                        <div class="checked__list">
                                            <div class="checked__item checked__item-room">
                                                <input type="radio" class="checked__radio congestion__radio" name="<?= $arParams['STEP']?>[FILLING]" <?= ($data["FILLING"]=='Мало')?'checked':''?> value="Мало" id="move_step1__t1">
                                                <label for="move_step1__t1" class="checked__label congestion__label congestion__label-room">
                                                    <svg width="44px" height="38px" viewBox="0 0 44 38" xmlns="http://www.w3.org/2000/svg" class="gray_pic">
                                                        <g id="Шмель-новый" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd" stroke-linecap="round">
                                                            <g id="Shmel-pereezd-step1-d" transform="translate(-83.340698, -1106.094543)" stroke-width="1.5" stroke="#939598">
                                                                <g id="загруженность" transform="translate(23.000000, 1039.000000)">
                                                                    <g id="Group-3" transform="translate(0.000000, 56.000000)">
                                                                        <g id="small" transform="translate(61.445559, 12.000000)">
                                                                            <polygon class="gray_pic__path" id="Stroke-1" points="0.615321437 27.4600576 14.4306967 27.4600576 14.4306967 23.9624434 0.615321437 23.9624434"></polygon>
                                                                            <polyline class="gray_pic__path" id="Stroke-3" points="12.9153584 27.4601112 11.6911265 36.029199 3.35494521 36.029199 2.13071332 27.4601112"></polyline>
                                                                            <path class="gray_pic__path" d="M7.20366949,23.9625237 L6.67787948,17.0840163" id="Stroke-5"></path>
                                                                            <path class="gray_pic__path" d="M4.05454837,12.4205843 L5.10369877,23.9625773" id="Stroke-6"></path>
                                                                            <path class="gray_pic__path" d="M1.66465924,16.7925619 L3.12179771,23.9626041" id="Stroke-7"></path>
                                                                            <path class="gray_pic__path" d="M9.52311832,17.6669253 L8.71792688,23.9626308" id="Stroke-8"></path>
                                                                            <path class="gray_pic__path" d="M11.5743252,11.7792881 L10.5832676,23.9624434" id="Stroke-9"></path>
                                                                            <path class="gray_pic__path" d="M13.1482917,17.8709728 L12.3323156,23.9624167" id="Stroke-10"></path>
                                                                            <path class="gray_pic__path" d="M38.922188,21.8405843 L38.922188,36.0291455 L42.1346924,36.0291455 L42.1346924,21.0821655 C42.1346924,19.1353878 40.5565496,17.557245 38.6097719,17.557245 L21.298121,17.557245 C19.3513433,17.557245 17.7732005,19.1353878 17.7732005,21.0821655 L17.7732005,36.0291455 L20.9857049,36.0291455 L20.9857049,21.8405843 C26.9173267,22.9028524 32.9905663,22.9028524 38.922188,21.8405843 Z" id="Stroke-11"></path>
                                                                            <path class="gray_pic__path" d="M40.1879147,17.9389441 L40.1879147,4.18005532 C40.1879147,2.20409738 38.5862136,0.602396217 36.6102556,0.602396217 L23.2976373,0.602396217 C21.3216794,0.602396217 19.7197105,2.20409738 19.7197105,4.18005532 L19.7197105,17.9389441" id="Stroke-13"></path>
                                                                            <path class="gray_pic__path" d="M19.7198176,11.3999449 L40.1880218,11.3999449" id="Stroke-15"></path>
                                                                            <path class="gray_pic__path" d="M20.9857049,27.4601112 L38.922188,27.4601112" id="Stroke-17"></path>
                                                                        </g>
                                                                    </g>
                                                                </g>
                                                            </g>
                                                        </g>
                                                    </svg>
                                                    <span class="congestion__item_text">Мало</span>
                                                </label>
                                            </div>
                                            <div class="checked__item checked__item-room">
                                                <input type="radio" class="checked__radio congestion__radio" name="<?= $arParams['STEP']?>[FILLING]" <?= ($data["FILLING"]=='Средне')?'checked':''?> value="Средне" id="move_step1__t2">
                                                <label for="move_step1__t2" class="checked__label congestion__label congestion__label-room">
                                                    <svg width="73px" height="37px" viewBox="0 0 73 37" xmlns="http://www.w3.org/2000/svg" class="gray_pic">
                                                        <g id="Шмель-новый" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd" stroke-linecap="round" stroke-linejoin="round">
                                                            <g id="Shmel-pereezd-step1-d" transform="translate(-286.340698, -1108.094543)" stroke="#939598" stroke-width="1.5">
                                                                <g id="загруженность" transform="translate(23.000000, 1039.000000)">
                                                                    <g id="Group-3" transform="translate(0.000000, 56.000000)">
                                                                        <g id="middle" transform="translate(264.406498, 14.094543)">
                                                                            <polygon class="gray_pic__path" id="Stroke-19" points="6.61277845 27.2354221 18.3416465 27.2354221 18.3416465 24.2660453 6.61277845 24.2660453"></polygon>
                                                                            <polyline class="gray_pic__path" id="Stroke-21" points="17.0550074 27.2354675 16.015896 34.510384 8.93848348 34.510384 7.89914477 27.2354675"></polyline>
                                                                            <path class="gray_pic__path" d="M12.205943,24.2661134 L11.7595619,18.4264526" id="Stroke-22"></path>
                                                                            <path class="gray_pic__path" d="M9.53254067,14.467329 L10.4232401,24.2661589" id="Stroke-23"></path>
                                                                            <path class="gray_pic__path" d="M7.50347786,18.1790159 L8.74077503,24.2661816" id="Stroke-24"></path>
                                                                            <path class="gray_pic__path" d="M14.1753176,18.921326 L13.4917325,24.2662044" id="Stroke-25"></path>
                                                                            <path class="gray_pic__path" d="M15.9166213,13.9228864 L15.0752411,24.2660453" id="Stroke-26"></path>
                                                                            <path class="gray_pic__path" d="M17.252875,19.0945567 L16.5599068,24.2660225" id="Stroke-27"></path>
                                                                            <path class="gray_pic__path" d="M39.1340799,22.464646 L39.1340799,34.5103385 L41.8614065,34.5103385 L41.8614065,21.8207697 C41.8614065,20.1680098 40.5216073,18.8282106 38.8688474,18.8282106 L24.1717389,18.8282106 C22.518979,18.8282106 21.1791798,20.1680098 21.1791798,21.8207697 L21.1791798,34.5103385 L23.9065064,34.5103385 L23.9065064,22.464646 C28.9422877,23.366482 34.0982986,23.366482 39.1340799,22.464646 Z" id="Stroke-28"></path>
                                                                            <path class="gray_pic__path" d="M40.2087603,19.1522624 L40.2087603,7.47134988 C40.2087603,5.79381674 38.8489607,4.43401715 37.1714275,4.43401715 L25.8691588,4.43401715 C24.1916257,4.43401715 22.8318261,5.79381674 22.8318261,7.47134988 L22.8318261,19.1522624" id="Stroke-29"></path>
                                                                            <path class="gray_pic__path" d="M22.8318261,13.6008346 L40.2087603,13.6008346" id="Stroke-30"></path>
                                                                            <path class="gray_pic__path" d="M23.9065064,27.2354675 L39.1340799,27.2354675" id="Stroke-31"></path>
                                                                            <path class="gray_pic__path" d="M21.1792935,30.337347 L16.6119305,30.337347" id="Stroke-32"></path>
                                                                            <path class="gray_pic__path" d="M39.1340799,30.337347 L23.9065064,30.337347" id="Stroke-33"></path>
                                                                            <path class="gray_pic__path" d="M40.6542236,19.4189268 L70.9007301,19.4189268 L70.9007301,28.1781907 C70.9007301,29.3707143 69.9341201,30.3373243 68.7415966,30.3373243 L41.8615202,30.3373243" id="Stroke-34"></path>
                                                                            <path class="gray_pic__path" d="M8.34244898,30.337347 L2.44278699,30.337347 C1.25026343,30.337347 0.283653431,29.370737 0.283653431,28.1782134 L0.283653431,19.4189495 L22.3863628,19.4189495" id="Stroke-35"></path>
                                                                            <path class="gray_pic__path" d="M13.183181,19.4189268 L13.183181,15.0824775 C13.183181,13.1251661 11.5965587,11.5383166 9.63924732,11.5383166 L3.82776889,11.5383166 C1.8704575,11.5383166 0.283835252,13.1251661 0.283835252,15.0824775 L0.283835252,19.4189268" id="Stroke-36"></path>
                                                                            <path class="gray_pic__path" d="M70.9007301,19.4189268 L70.9007301,15.0824775 C70.9007301,13.1251661 69.3141079,11.5383166 67.3567965,11.5383166 L61.5453181,11.5383166 C59.5880067,11.5383166 58.0013844,13.1251661 58.0013844,15.0824775 L58.0013844,19.4189268" id="Stroke-37"></path>
                                                                            <path class="gray_pic__path" d="M66.4982341,11.538362 L66.4982341,4.89050344 C66.4982341,2.36181713 64.4481936,0.311776636 61.9195073,0.311776636 L9.26505811,0.311776636 C6.73614452,0.311776636 4.68633131,2.36181713 4.68633131,4.89050344 L4.68633131,11.538362" id="Stroke-38"></path>
                                                                            <path class="gray_pic__path" d="M50.4728494,7.31198309 L52.9383526,7.31198309" id="Stroke-39"></path>
                                                                            <path class="gray_pic__path" d="M15.9734406,7.31198309 L18.4389439,7.31198309" id="Stroke-40"></path>
                                                                            <polyline class="gray_pic__path" id="Stroke-41" points="7.37186163 30.337347 7.37186163 32.0103346 2.79313482 32.0103346 2.79313482 30.337347"></polyline>
                                                                            <polyline class="gray_pic__path" id="Stroke-42" points="68.7875293 30.337347 68.7875293 32.0103346 64.2088025 32.0103346 64.2088025 30.337347"></polyline>
                                                                        </g>
                                                                    </g>
                                                                </g>
                                                            </g>
                                                        </g>
                                                    </svg>
                                                    <span class="congestion__item_text">Средне</span>
                                                </label>
                                            </div>
                                            <div class="checked__item checked__item-room">
                                                <input type="radio" class="checked__radio congestion__radio" name="<?= $arParams['STEP']?>[FILLING]" <?= ($data["FILLING"]=='Много')?'checked':''?> value="Много" id="move_step1__t3">
                                                <label for="move_step1__t3" class="checked__label congestion__label congestion__label-room">
                                                    <svg width="62px" height="47px" viewBox="0 0 62 47" xmlns="http://www.w3.org/2000/svg" class="gray_pic">
                                                        <g id="Шмель-новый" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd" stroke-linecap="round">
                                                            <g id="Shmel-pereezd-step1-d" transform="translate(-512.340698, -1102.094543)" stroke-width="1.5" stroke="#939598">
                                                                <g id="загруженность" transform="translate(23.000000, 1039.000000)">
                                                                    <g id="Group-3" transform="translate(0.000000, 56.000000)">
                                                                        <g id="many" transform="translate(490.476993, 8.000000)">
                                                                            <polygon class="gray_pic__path" id="Stroke-43" points="12.6948415 39.1852308 21.2737798 39.1852308 21.2737798 37.0133161 12.6948415 37.0133161"></polygon>
                                                                            <polyline class="gray_pic__path" id="Stroke-44" points="20.3327664 39.1852641 19.5725547 44.5064135 14.3960334 44.5064135 13.6358217 39.1852641"></polyline>
                                                                            <path class="gray_pic__path" d="M16.7859105,37.013366 L16.4594105,32.7420169" id="Stroke-45"></path>
                                                                            <path class="gray_pic__path" d="M14.8304828,29.8461639 L15.4819741,37.0133993" id="Stroke-46"></path>
                                                                            <path class="gray_pic__path" d="M13.3463494,32.5610324 L14.2513554,37.0134159" id="Stroke-47"></path>
                                                                            <path class="gray_pic__path" d="M18.2263857,33.1039861 L17.7263857,37.0134325" id="Stroke-48"></path>
                                                                            <path class="gray_pic__path" d="M19.5000412,29.447938 L18.8846238,37.0133161" id="Stroke-49"></path>
                                                                            <path class="gray_pic__path" d="M20.4774111,33.2306936 L19.9705479,37.0132995" id="Stroke-50"></path>
                                                                            <path class="gray_pic__path" d="M36.4821531,35.6957045 L36.4821531,44.5063802 L38.4770231,44.5063802 L38.4770231,35.224749 C38.4770231,34.0158578 37.4970432,33.0358779 36.288152,33.0358779 L25.5381302,33.0358779 C24.329239,33.0358779 23.3492592,34.0158578 23.3492592,35.224749 L23.3492592,44.5063802 L25.3441291,44.5063802 L25.3441291,35.6957045 C29.0274903,36.3553415 32.798792,36.3553415 36.4821531,35.6957045 Z" id="Stroke-51"></path>
                                                                            <path class="gray_pic__path" d="M37.2682317,33.2729017 L37.2682317,24.7290399 C37.2682317,23.5020286 36.2736227,22.5074197 35.0466115,22.5074197 L26.7798703,22.5074197 C25.552859,22.5074197 24.5580839,23.5020286 24.5580839,24.7290399 L24.5580839,33.2729017" id="Stroke-52"></path>
                                                                            <path class="gray_pic__path" d="M24.5581504,29.2123771 L37.2682981,29.2123771" id="Stroke-53"></path>
                                                                            <path class="gray_pic__path" d="M25.3441291,39.1852641 L36.4821531,39.1852641" id="Stroke-54"></path>
                                                                            <path class="gray_pic__path" d="M23.3493423,41.4540962 L20.0086,41.4540962" id="Stroke-55"></path>
                                                                            <path class="gray_pic__path" d="M36.4821531,41.4540962 L25.3441291,41.4540962" id="Stroke-56"></path>
                                                                            <path class="gray_pic__path" d="M37.5940438,33.4679501 L59.7174842,33.4679501 L59.7174842,39.8748075 C59.7174842,40.7470644 59.0104691,41.4540796 58.1382122,41.4540796 L38.4771062,41.4540796" id="Stroke-57"></path>
                                                                            <path class="gray_pic__path" d="M13.9600047,41.4540962 L9.64476846,41.4540962 C8.7726778,41.4540962 8.0654964,40.747081 8.0654964,39.8748241 L8.0654964,33.4679667 L24.2324214,33.4679667" id="Stroke-58"></path>
                                                                            <path class="gray_pic__path" d="M17.5006994,33.4679501 L17.5006994,30.2961069 C17.5006994,28.8644552 16.3401838,27.7037733 14.9085321,27.7037733 L10.6577967,27.7037733 C9.22614499,27.7037733 8.06562939,28.8644552 8.06562939,30.2961069 L8.06562939,33.4679501" id="Stroke-59"></path>
                                                                            <path class="gray_pic__path" d="M59.7174842,33.4679501 L59.7174842,30.2961069 C59.7174842,28.8644552 58.5569686,27.7037733 57.125317,27.7037733 L52.8745815,27.7037733 C51.4429298,27.7037733 50.2824142,28.8644552 50.2824142,30.2961069 L50.2824142,33.4679501" id="Stroke-60"></path>
                                                                            <path class="gray_pic__path" d="M56.4973319,27.7038066 L56.4973319,22.841311 C56.4973319,20.9917341 54.9978546,19.4922568 53.1482777,19.4922568 L14.6348193,19.4922568 C12.7850761,19.4922568 11.2857651,20.9917341 11.2857651,22.841311 L11.2857651,27.7038066" id="Stroke-61"></path>
                                                                            <path class="gray_pic__path" d="M44.7757752,24.612473 L46.5791376,24.612473" id="Stroke-62"></path>
                                                                            <path class="gray_pic__path" d="M19.541601,24.612473 L21.3449634,24.612473" id="Stroke-63"></path>
                                                                            <polyline class="gray_pic__path" id="Stroke-64" points="13.2500803 41.4540962 13.2500803 42.6777827 9.90102613 42.6777827 9.90102613 41.4540962"></polyline>
                                                                            <polyline class="gray_pic__path" id="Stroke-65" points="58.1718257 41.4540962 58.1718257 42.6777827 54.8227715 42.6777827 54.8227715 41.4540962"></polyline>
                                                                            <polyline class="gray_pic__path" id="Stroke-66" points="26.2965964 19.4923399 26.2965964 0.290885289 0.356803492 0.290885289 0.356803492 39.6513322 8.06863832 39.6513322"></polyline>
                                                                            <path class="gray_pic__path" d="M0.356803492,12.1090602 L26.2965964,12.1090602" id="Stroke-67"></path>
                                                                            <path class="gray_pic__path" d="M0.356803492,13.7114728 L26.2965964,13.7114728" id="Stroke-68"></path>
                                                                            <path class="gray_pic__path" d="M0.356803492,25.1290445 L11.2856986,25.1290445" id="Stroke-69"></path>
                                                                            <polyline class="gray_pic__path" id="Stroke-70" points="4.0624407 39.6512657 4.0624407 41.4541294 0.356803492 41.4541294 0.356803492 39.6512657"></polyline>
                                                                            <polygon class="gray_pic__path" id="Stroke-71" points="3.06094948 12.109027 5.06396517 12.109027 5.06396517 4.19687394 3.06094948 4.19687394"></polygon>
                                                                            <polygon class="gray_pic__path" id="Stroke-72" points="5.06413141 12.109027 7.0671471 12.109027 7.0671471 4.19687394 5.06413141 4.19687394"></polygon>
                                                                            <polygon class="gray_pic__path" id="Stroke-73" points="7.0671471 12.109027 9.07016279 12.109027 9.07016279 4.19687394 7.0671471 4.19687394"></polygon>
                                                                            <polygon class="gray_pic__path" id="Stroke-74" points="3.06094948 25.1290445 5.06396517 25.1290445 5.06396517 17.2168915 3.06094948 17.2168915"></polygon>
                                                                            <polygon class="gray_pic__path" id="Stroke-75" points="5.06413141 25.1290445 7.0671471 25.1290445 7.0671471 17.2168915 5.06413141 17.2168915"></polygon>
                                                                            <polygon class="gray_pic__path" id="Stroke-76" points="7.0671471 25.1290445 9.07016279 25.1290445 9.07016279 17.2168915 7.0671471 17.2168915"></polygon>
                                                                            <polyline class="gray_pic__path" id="Stroke-77" points="12.4334803 20.3189808 10.8655125 17.1488 9.07012954 18.0368496 11.2852664 22.5156651"></polyline>
                                                                            <polygon class="gray_pic__path" id="Stroke-78" points="9.07016279 12.109027 11.0731785 12.109027 11.0731785 4.19687394 9.07016279 4.19687394"></polygon>
                                                                            <polygon class="gray_pic__path" id="Stroke-79" points="11.0733447 12.109027 13.0763604 12.109027 13.0763604 4.19687394 11.0733447 4.19687394"></polygon>
                                                                            <polygon class="gray_pic__path" id="Stroke-80" points="45.6148341 12.9850575 36.4821531 12.9850575 38.4918184 6.25237133 43.6050026 6.25237133"></polygon>
                                                                            <path class="gray_pic__path" d="M41.0484604,6.25237133 L41.0484604,5.15336422 C41.0484604,2.46793676 43.2255285,0.290868666 45.9109559,0.290868666 C48.5963834,0.290868666 50.7734515,2.46793676 50.7734515,5.15336422 L50.7734515,19.4923233" id="Stroke-81"></path>
                                                                        </g>
                                                                    </g>
                                                                </g>
                                                            </g>
                                                        </g>
                                                    </svg>
                                                    <span class="congestion__item_text">Много</span>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="move_config__wrap">
                            <div class="additionally__one">
                                <div class="additionally__content">
                                    <div class="rigging">
                                        <div class="check_inline">
                                            <div class="rigging__title check_inline__one">
                                                <input type="checkbox" class="rigger_checkbox_stage check_inline__input rigging__title_input" name="<?= $arParams['STEP']?>[IS_RIGGING]" <?= ($data["IS_RIGGING"]=='Y')?'checked':''?> value="Y" id="check_inline9" onchange="checkHiddenBox(this)" data-check-hidden="id0">
                                                <label for="check_inline9" class="check_inline__label check_inline__label-big rigging__title_label">
                                                    <svg width="24px" height="24px" viewBox="0 0 40 40" xmlns="http://www.w3.org/2000/svg" class="check_inline__icon checkbox">
                                                        <rect class="checkbox__rect" width="100%" height="100%"></rect>
                                                        <polyline class="checkbox__checked" points="11,20.053 16.964,26.018 30.385,12.598"></polyline>
                                                    </svg>
                                                    <span class="check_inline__text">Такелажные работы:</span>
                                                </label>
                                            </div>
                                        </div>
                                        <div class="rigging__hidden<?= ($data["IS_RIGGING"]=='Y')?' stage_visible':''?>" data-check-input="id0">
                                            <div class="checked">
                                                <div class="checked__list checked__list-rigger">
                                                    <? foreach ($arResult['rigging_list'] as $rigging) {?>
                                                        <div class="checked__item checked__item-rigging">
                                                            <input type="checkbox" class="checked__radio" name="<?= $arParams['STEP']?>[RIGGINGS][]" <?= (in_array($rigging->StructTermsOfRigging->ID, $data["RIGGINGS"]))?'checked':''?>  value="<?= $rigging->StructTermsOfRigging->ID?>" id="<?= $rigging->StructTermsOfRigging->ID ?>">
                                                            <label for="<?= $rigging->StructTermsOfRigging->ID ?>" class="checked__label rigger__label">
                                                                <span class="rigging__check_title"><?= $rigging->StructTermsOfRigging->ID ?></span>
                                                                <span class="rigging__check_price"><?= number_format($rigging->StructTermsOfRigging->Price, 0, '', ' ')?><!-- ₽--></span>
                                                            </label>
                                                        </div>
                                                    <? } ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="move_config__wrap">
                            <div class="additionally__one">
                                <p class="additionally__title additionally__title-small additionally__title-gray">Наличие лифта:</p>
                                <div class="additionally__content">
                                    <div class="check_inline">
                                        <div class="check_inline__one">
                                            <input type="checkbox" class="check_inline__input" <?= (in_array('Пассажирский', $data['LIFT'])) ? 'checked':'' ?> name="<?= $arParams['STEP']?>[LIFT][]" value="Пассажирский">
                                            <label for="check_inline1" class="check_inline__label">
                                                <svg width="24px" height="24px" viewBox="0 0 40 40" xmlns="http://www.w3.org/2000/svg" class="check_inline__icon checkbox">
                                                    <rect class="checkbox__rect" width="100%" height="100%"></rect>
                                                    <polyline class="checkbox__checked" points="11,20.053 16.964,26.018 30.385,12.598"></polyline>
                                                </svg>
                                                <span class="check_inline__text">Пассажирский</span>
                                            </label>
                                        </div>
                                        <div class="check_inline__one">
                                            <input type="checkbox" class="check_inline__input" <?= (in_array('Грузовой', $data['LIFT'])) ? 'checked':'' ?> name="<?= $arParams['STEP']?>[LIFT][]" value="Грузовой">
                                            <label for="check_inline2" class="check_inline__label">
                                                <svg width="24px" height="24px" viewBox="0 0 40 40" xmlns="http://www.w3.org/2000/svg" class="check_inline__icon checkbox">
                                                    <rect class="checkbox__rect" width="100%" height="100%"></rect>
                                                    <polyline class="checkbox__checked" points="11,20.053 16.964,26.018 30.385,12.598"></polyline>
                                                </svg>
                                                <span class="check_inline__text">Грузовой</span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="move_config__wrap">
                            <div class="additionally__one">
                                <p class="additionally__title">Дополнительно:</p>
                                <div class="additionally__content">
                                    <div class="check_inline check_inline-additionally">
                                        <? foreach ($arResult['services_list'] as $service) {
                                            $name = ucfirst(mb_strtolower($service->Name));
                                            ?>
                                            <div class="check_inline__one">
                                                <input type="checkbox" class="check_inline__input" <?= (in_array($service->ID, $data['SERVICES'])) ? 'checked':'' ?> name="<?= $arParams['STEP']?>[SERVICES][]" value="<?= $service->ID ?>">
                                                <label for="check_inline3" class="check_inline__label check_inline__label-big">
                                                    <svg width="24px" height="24px" viewBox="0 0 40 40" xmlns="http://www.w3.org/2000/svg" class="check_inline__icon checkbox">
                                                        <rect class="checkbox__rect" width="100%" height="100%"></rect>
                                                        <polyline class="checkbox__checked" points="11,20.053 16.964,26.018 30.385,12.598"></polyline>
                                                    </svg>
                                                    <span class="check_inline__text"><?= "{$name} ({$service->Price})"?></span>
                                                </label>
                                            </div>
                                        <? }?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="move_config__wrap">
                            <div class="additionally__one">
                                <div class="form">
                                    <div class="form__row step__form_pt">
                                        <div class="form__one form__one-w100">
                                            <label for="id14" class="form__label form__label-left">Комментарий</label>
                                            <div class="form__element_box">
                                                <textarea class="form__element form__element-input" name="<?= $arParams['STEP']?>[COMMENT]" cols="30" rows="5"><?= $data['COMMENT']?></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <hr class="separator">
                            <div class="check_inline contacts_all-pb">
                                <div class="check_inline__one rigging__title">
                                    <input type="checkbox"
                                           class="check_inline__input"
                                           name="<?= $arParams['STEP'] ?>[USE_CONTACT_DEFAULT]"
                                           value="Y"
                                           id="radio_0" <?= ($data['USE_CONTACT_DEFAULT'])
                                        ? 'checked' : '' ?>
                                           onchange="uncheckHiddenBox(this, document.querySelector('[data-personal-hidden='+this.dataset.checkHidden+']'));"
                                           data-check-hidden="id100">
                                    <label for="radio_0"
                                           class="check_inline__label check_inline__label-wide">
                                        <svg width="24px" height="24px"
                                             viewBox="0 0 40 40"
                                             xmlns="http://www.w3.org/2000/svg"
                                             class="check_inline__icon checkbox">
                                            <rect class="checkbox__rect"
                                                  width="100%"
                                                  height="100%"></rect>
                                            <polyline class="checkbox__checked"
                                                      points="11,20.053 16.964,26.018 30.385,12.598"></polyline>
                                        </svg>
                                        <span class="check_inline__text">Использовать контактные данные по умолчанию</span>
                                    </label>
                                </div>
                            </div>
                            <div class="personal_default_data <?= (!$data['USE_CONTACT_DEFAULT'])?'rigging__hidden':''?>" data-personal-hidden="id100">
                                <p class="personal_default_data__one"><?= $arResult['SAVED_DATA']['CONTACT']['NAME']?>   </p>
                                <p class="personal_default_data__one"><?= $arResult['SAVED_DATA']['CONTACT']['PHONE']?></p>
                            </div>
                            <div class="additionally__one <?= ($data['USE_CONTACT_DEFAULT'])?'rigging__hidden':''?>" data-check-input="id100">
                                <p class="additionally__title">Контакты по данному адресу:</p>
                                <div class="additionally__content">
                                    <div class="form">
                                        <div class="form__row step__form_pt">
                                            <div class="form__one form__one-w50">
                                                <label for="id14" class="form__label form__label-left">Имя</label>
                                                <div class="form__element_box">
                                                    <input type="text" name="<?= $arParams['STEP']?>[CONTACT_NAME]" value="<?= $data['CONTACT_NAME']?>" class="form__element form__element-input">
                                                </div>
                                            </div>
                                            <div class="form__one form__one-w50">
                                                <label for="id24" class="form__label form__label-left">Телефон</label>
                                                <div class="form__element_box">
                                                    <input type="tel" name="<?= $arParams['STEP']?>[CONTACT_PHONE]" value="<?= $data['CONTACT_PHONE']?>" class="form__element form__element-input">
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
            <div class="move_step__buttons move_step1__buttons">
                <button class="move_step__btn btn btn-white" type="button">Вызвать замерщика</button>
                <a class="move_step__btn btn btn-white" href="<?= $arResult['prev_step'] ?>">Предыдущий шаг</a>
                <input class="move_step__btn btn" type="submit" value="Далее" name="submit_next">
            </div>
        </div>
    </form>
</div>
