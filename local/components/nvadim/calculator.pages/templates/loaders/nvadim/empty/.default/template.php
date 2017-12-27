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
<div class="move_page__head">
    <div class="move_page__wrap box">
        <div class="move_page__title move_title">
            <div class="move_title__text_box">
                <p class="move_title__title title title-left title-left_orange">Грузички</p>
                <p class="move_title__text">Чтобы приступить к рассчету, выберите интересующую вас услугу:</p>
            </div>
            <div class="move_title__pic">
                <img src="<?= FRONEND_BUILD_PATH?>img/deliveryboy3.svg" class="mqove_title__img move_title__img-transport">
            </div>
        </div>
    </div>
    <div class="move_page__nav_wrap">
        <div class="move_page__nav_box move_nav">
            <div class="move_nav__wrap box">
                <a href="<?= $arParams['SEF_FOLDER']?>route/?type=loading" class="move_nav__item">
                                <span class="move_nav__pic">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 149.13 103.6" width="148" height="103" class="move_pic">
                                        <g fill="#FFF" fill-rule="evenodd" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
                                            <polyline class="move_pic__gray" points="24.28 34.86 1 67.79 24.28 67.79"/>
                                            <polygon class="move_pic__gray" points="24.28 102.6 84.76 102.6 84.76 34.86 24.28 34.86 24.28 102.6"/>
                                            <polygon class="move_pic__orange" points="47.79 46.89 61.25 46.89 61.25 34.86 47.79 34.86 47.79 46.89"/>
                                            <path class="move_pic__orange" d="M31,90.12H52" transform="translate(-0.21 -0.52)"/>
                                            <path class="move_pic__orange" d="M31,96.12H43" transform="translate(-0.21 -0.52)"/>
                                            <path class="move_pic__green" d="M54.73,26.86v-16a5,5,0,0,0-5-5H1.21" transform="translate(-0.21 -0.52)"/>
                                            <polyline class="cls-4" points="60.5 20.36 54.52 26.34 48.55 20.36"/>
                                            <polyline class="move_pic__gray" points="124.97 67.79 124.97 102.6 84.76 102.6 84.76 34.86"/>
                                            <polyline class="move_pic__green" points="119.32 1 125.3 6.98 119.32 12.95"/>
                                            <polygon class="move_pic__gray" points="148.13 67.79 107.92 67.79 84.76 34.86 124.97 34.86 148.13 67.79"/>
                                            <path class="move_pic__green" d="M124.76,7.49H82.89a5,5,0,0,0-5,5v12.7" transform="translate(-0.21 -0.52)"/>
                                        </g>
                                    </svg>
                                </span>
                    <span class="move_nav__name">Погрузо-разгрузочные работы</span>
                </a>
                <a href="<?= $arParams['SEF_FOLDER']?>route/?type=assembly" class="move_nav__item">
                                <span class="move_nav__pic">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 270.01 126.85" width="270" height="126" class="move_pic">
                                        <g fill="#FFF" fill-rule="evenodd" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
                                            <path class="move_pic__gray" d="M102.63,126.48v-5.77" transform="translate(-0.33 -0.63)"/>
                                            <polyline class="move_pic__gray" points="95.56 119.11 95.56 1 147.58 1 147.58 119.11"/>
                                            <polygon class="move_pic__green" points="142.48 125.85 95.56 119.11 95.56 1 142.48 7.73 142.48 125.85"/>
                                            <polygon class="move_pic__gray" points="147.58 119.11 199.6 119.11 199.6 1 147.58 1 147.58 119.11"/>
                                            <path class="move_pic__green" d="M136.9,58.76V76.08" transform="translate(-0.33 -0.63)"/>
                                            <polygon class="move_pic__green" points="269.01 125.85 216.99 125.85 206.11 7.73 258.13 7.73 269.01 125.85"/>
                                            <path class="move_pic__green" d="M218.43,58.76,220,76.08" transform="translate(-0.33 -0.63)"/>
                                            <path class="move_pic__gray" d="M147.91,23.86h52" transform="translate(-0.33 -0.63)"/>
                                            <path class="move_pic__gray" d="M147.91,30.59h52" transform="translate(-0.33 -0.63)"/>
                                            <polygon class="move_pic__gray" points="147.58 95.55 173.59 95.55 173.59 89.64 147.58 89.64 147.58 95.55"/>
                                            <polygon class="move_pic__gray" points="147.58 101.47 173.59 101.47 173.59 95.55 147.58 95.55 147.58 101.47"/>
                                            <path class="move_pic__gray" d="M147.91,102.09h52" transform="translate(-0.33 -0.63)"/>
                                            <path class="move_pic__gray" d="M173.92,102.09V30.59" transform="translate(-0.33 -0.63)"/>
                                            <path class="move_pic__gray" d="M193.2,126.48v-6.73" transform="translate(-0.33 -0.63)"/>
                                            <path class="move_pic__orange" d="M82.74,126.48,95.89,74.15" transform="translate(-0.33 -0.63)"/>
                                            <path class="move_pic__orange" d="M79.06,126.48,92.22,74.15" transform="translate(-0.33 -0.63)"/>
                                            <path class="move_pic__orange" d="M75.39,126.48,88.55,74.15" transform="translate(-0.33 -0.63)"/>
                                            <polyline class="move_pic__gray" points="65.19 86.75 77.26 105.56 65.19 105.56"/>
                                            <polygon class="move_pic__gray" points="65.19 125.44 33.84 125.44 33.84 86.75 65.19 86.75 65.19 125.44"/>
                                            <polygon class="move_pic__orange" points="53.01 93.62 46.03 93.62 46.03 86.75 53.01 86.75 53.01 93.62"/>
                                            <polyline class="move_pic__gray" points="13.01 105.56 13.01 125.44 33.84 125.44 33.84 86.75"/>
                                            <polygon class="move_pic__gray" points="1 105.56 21.84 105.56 33.84 86.75 13.01 86.75 1 105.56"/>
                                            <path class="move_pic__gray" d="M147.91,119.74h-5.1" transform="translate(-0.33 -0.63)"/>
                                        </g>
                                    </svg>
                                </span>
                    <span class="move_nav__name">Сборка-разборка мебели</span>
                </a>
                <a href="<?= $arParams['SEF_FOLDER']?>route/?type=rigging" class="move_nav__item">
                                <span class="move_nav__pic">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 133.84 136.55" width="132" height="135" class="move_pic">
                                        <g fill="#FFF" fill-rule="evenodd" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
                                            <polyline class="move_pic__orange" points="119.21 60.72 22.47 5.17 25.84 1 129.84 60.72"/>
                                            <path class="move_pic__orange" d="M43.25,17.55,11.69,61.45" transform="translate(-0.5 -0.73)"/>
                                            <polygon class="move_pic__gray" points="4 99.48 129.84 99.48 129.84 93.34 4 93.34 4 99.48"/>
                                            <polyline class="move_pic__gray" points="86.69 60.72 129.84 60.72 129.84 81.06 4 81.06 4 60.72 47.14 60.72"/>
                                            <polygon class="move_pic__orange" points="11.19 81.06 122.65 81.06 122.65 73.67 11.19 73.67 11.19 81.06"/>
                                            <path class="move_pic__orange" d="M19.08,78.1V74.4" transform="translate(-0.5 -0.73)"/>
                                            <path class="move_pic__orange" d="M31.16,78.1V74.4" transform="translate(-0.5 -0.73)"/>
                                            <polygon class="move_pic__gray" points="1 93.34 132.84 93.34 132.84 81.06 1 81.06 1 93.34"/>
                                            <path class="move_pic__orange" d="M43.25,78.1V74.4" transform="translate(-0.5 -0.73)"/>
                                            <path class="move_pic__orange" d="M55.33,78.1V74.4" transform="translate(-0.5 -0.73)"/>
                                            <path class="move_pic__orange" d="M67.42,78.1V74.4" transform="translate(-0.5 -0.73)"/>
                                            <path class="move_pic__orange" d="M79.5,78.1V74.4" transform="translate(-0.5 -0.73)"/>
                                            <path class="move_pic__orange" d="M91.59,78.1V74.4" transform="translate(-0.5 -0.73)"/>
                                            <path class="move_pic__orange" d="M103.67,78.1V74.4" transform="translate(-0.5 -0.73)"/>
                                            <path class="move_pic__orange" d="M115.76,78.1V74.4" transform="translate(-0.5 -0.73)"/>
                                            <polygon class="move_pic__green" points="47.14 50.29 66.92 54.33 66.92 73.67 47.14 73.67 47.14 50.29"/>
                                            <polygon class="move_pic__green" points="86.69 50.29 66.92 54.33 66.92 73.67 86.69 73.67 86.69 50.29"/>
                                            <polygon class="move_pic__gray" points="18.58 135.56 12.99 135.56 11.19 99.48 20.38 99.48 18.58 135.56"/>
                                            <polygon class="move_pic__gray" points="69.72 114.03 64.12 114.03 62.92 99.48 70.91 99.48 69.72 114.03"/>
                                            <polygon class="move_pic__gray" points="120.85 135.56 115.26 135.56 113.46 99.48 122.65 99.48 120.85 135.56"/>
                                        </g>
                                    </svg>
                                </span>
                    <span class="move_nav__name">Такелажные работы</span>
                </a>
            </div>
        </div>
    </div>
    <div class="move_page__text move_text">
        <div class="move_text__wrap box">
            <p>Для любого переезда – офисного, квартирного, дачного и др. – необходимы опытные и добросовестные грузчики, которые выполнят все работы аккуратно и в срок. Сегодня на рынке существует множество предложений от данных специалистов. Чтобы не наткнуться на непрофессиональных грузчиков, а также мошенников или вымогателей, следует обращаться в специализированную компанию, такую, как «Шмель Переезд».</p>
        </div>
    </div>
</div>
