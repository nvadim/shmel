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
        <input type="hidden" name="CURRENT_PAGE" value="<?= $currentStep ?>">

        <div class="move_step move_step-active move_step4">

            <div class="move_step4__wrap">
                <div class="move_step4__personal">
                    <p class="personal_edit__title">Ваши контактные данные:</p>
                    <div class="personal_edit__password_box form">
                        <div class="check_inline contacts_all-pb">
                            <div class="check_inline__one rigging__title">
                                <input type="checkbox" class="check_inline__input" name="check_inline1" value="check_inline1" id="radio_0" checked onchange="uncheckHiddenBox(this, document.querySelector('[data-personal-hidden='+this.dataset.checkHidden+']'));" data-check-hidden="id100">
                                <label for="radio_0" class="check_inline__label check_inline__label-wide">
                                    <svg width="24px" height="24px" viewBox="0 0 40 40" xmlns="http://www.w3.org/2000/svg" class="check_inline__icon checkbox">
                                        <rect class="checkbox__rect" width="100%" height="100%"></rect>
                                        <polyline class="checkbox__checked" points="11,20.053 16.964,26.018 30.385,12.598"></polyline>
                                    </svg>
                                    <span class="check_inline__text">Использовать контактные данные по умолчанию</span>
                                </label>
                            </div>
                        </div>
                        <div class="personal_default_data" data-personal-hidden="id100">
                            <p class="personal_default_data__one">Иван Борисович</p>
                            <p class="personal_default_data__one">+7 (242) 222-22-22</p>
                        </div>
                        <div class="additionally__one rigging__hidden" data-check-input="id100">
                            <div class="additionally__content">
                                <div class="form">
                                    <div class="form__row step__form_pt">
                                        <div class="form__one form__one-w50">
                                            <label for="id14" class="form__label form__label-left">Имя</label>
                                            <div class="form__element_box">
                                                <input type="text" id="id14" value="" class="form__element form__element-input" required="">
                                            </div>
                                        </div>
                                        <div class="form__one form__one-w50">
                                            <label for="id24" class="form__label form__label-left">Телефон</label>
                                            <div class="form__element_box">
                                                <input type="tel" id="id24" value="" class="form__element form__element-input" required="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form__one form__one-left form__one-big">
                            <div class="check_inline">
                                <div class="check_inline__one">
                                    <input type="checkbox" class="check_inline__input" name="check_inline1" value="check_inline1" id="radio_6" onchange="checkHiddenBox(this)" data-check-hidden="id1">
                                    <label for="radio_6" class="check_inline__label check_inline__label-big">
                                        <svg width="24px" height="24px" viewBox="0 0 40 40" xmlns="http://www.w3.org/2000/svg" class="check_inline__icon checkbox">
                                            <rect class="checkbox__rect" width="100%" height="100%"></rect>
                                            <polyline class="checkbox__checked" points="11,20.053 16.964,26.018 30.385,12.598"></polyline>
                                        </svg>
                                        <span class="check_inline__text">Получить расчет в PDF</span>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="form__one form__one-left form__one-big form__one-hidden" data-check-input="id1">
                            <label for="id3" class="form__label form__label-left">E-mail</label>
                            <div class="form__element_box">
                                <div class="form__pass_box">
                                    <input type="text" id="id3" value="" class="form__element form__element-input">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="move_step4__sale">
                    <p class="personal_edit__title">Хотите получить скидку?</p>
                    <div class="min_input">
                        <div class="min_input__one">
                            <p class="rooms_info__title">
                                <span class="rooms_info__text">Введите номер промо телефона</span>
                                <span class="rooms_info__tooltip tooltip" title="Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur commodi, iure saepe soluta voluptatem voluptates?">?</span>
                            </p>
                            <div class="sale_input_step">
                                <div class="min_input__one_box">
                                    <input type="tel" class="min_input__input min_input__input-sale">
                                    <span class="min_input__one_before min_input__one_before-green">
                                                                    <svg width="22px" height="15px" viewBox="0 0 22 15" version="1.1" xmlns="http://www.w3.org/2000/svg">
                                                                        <g id="Symbols" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd" stroke-linecap="round" stroke-linejoin="round">
                                                                            <g id="Input/6" transform="translate(-14.000000, -17.000000)" stroke="#ADD037" stroke-width="2">
                                                                                <polyline id="arrow" transform="translate(24.985201, 24.500000) scale(1, -1) rotate(-90.000000) translate(-24.985201, -24.500000) " points="24.0574552 15.25 31.2574905 22.6723773 18.7129117 33.75"></polyline>
                                                                            </g>
                                                                        </g>
                                                                    </svg>
                                                                </span>
                                </div>
                                <p class="sale_input_step__text">Ваша скидка 10%</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="move_step4__payment">
                    <p class="personal_edit__title">Способ оплаты:</p>
                    <div class="checked payment_ch">
                        <div class="checked__list">
                            <div class="checked__item">
                                <input type="radio" class="checked__radio congestion__radio" name="move_step1__congestion" value="congestion1" id="radio_8">
                                <label for="radio_8" class="checked__label payment_ch__label congestion__label">
                                    <svg width="79px" height="49px" viewBox="0 0 79 49" version="1.1" xmlns="http://www.w3.org/2000/svg" class="gray_pic">
                                        <g  stroke="none" stroke-width="1" fill="none" fill-rule="evenodd" stroke-linecap="round" stroke-linejoin="round">
                                            <g  transform="translate(-99.000000, -1297.000000)" stroke="#939598" stroke-width="2">
                                                <g  transform="translate(100.159302, 1298.094543)">
                                                    <polygon class="gray_pic__path"  points="45.443 28.5496 76.624 28.5496 76.624 12.3316 45.443 12.3316"></polygon>
                                                    <path class="gray_pic__path" d="M45.443,33.573 L76.624,33.573" ></path>
                                                    <path class="gray_pic__path" d="M45.443,38.7703 L76.624,38.7703" ></path>
                                                    <path class="gray_pic__path" d="M59.1232,25.0847 L59.1232,15.6877 L61.5652,15.6877 C63.4892,15.6877 64.6772,16.5017 64.6772,18.1287 C64.6772,18.1287 64.8952,20.8667 62.1942,20.8667 L57.5692,20.8667" ></path>
                                                    <path class="gray_pic__path" d="M57.569,23.6458 L62.823,23.6458" ></path>
                                                    <path class="gray_pic__path" d="M43.3952,46.3816 C43.3952,42.8526 42.5812,37.9686 37.0152,35.5916 C31.4502,33.2146 28.7242,32.1466 27.1742,31.1106 C26.2552,30.4966 25.8842,28.6666 26.0222,26.3596 C28.8052,25.3406 30.6482,18.4466 30.6482,18.4466 C30.6482,18.4466 32.6622,16.1006 32.8072,13.9386 C32.9352,12.0376 30.9072,11.3596 30.9072,11.3596 C30.9072,9.8666 31.1482,6.4506 29.5202,4.0066 C27.8912,1.5636 24.2552,0.4996 21.9472,0.4996 C19.6402,0.4996 16.0042,1.5636 14.3752,4.0066 C12.7472,6.4506 12.9882,9.8666 12.9882,11.3596 C12.9882,11.3596 10.9602,12.0376 11.0882,13.9386 C11.2332,16.1006 13.2472,18.4466 13.2472,18.4466 C13.2472,18.4466 15.0902,25.3406 17.8732,26.3596 C18.0112,28.6666 17.6402,30.4966 16.7212,31.1106 C15.1712,32.1466 12.4452,33.2146 6.8802,35.5916 C1.3142,37.9686 0.5002,42.8526 0.5002,46.3816 L43.3952,46.3816 Z" ></path>
                                                </g>
                                            </g>
                                        </g>
                                    </svg>
                                    <span class="congestion__item_text">Наличными водителю</span>
                                </label>
                            </div>
                            <div class="checked__item">
                                <input type="radio" class="checked__radio congestion__radio" name="move_step1__congestion" value="congestion2" id="radio_9">
                                <label for="radio_9" class="checked__label payment_ch__label congestion__label">
                                    <svg width="79px" height="49px" viewBox="0 0 79 49" version="1.1" xmlns="http://www.w3.org/2000/svg" class="gray_pic">
                                        <g  stroke="none" stroke-width="1" fill="none" fill-rule="evenodd" stroke-linecap="round" stroke-linejoin="round">
                                            <g  transform="translate(-307.000000, -1297.000000)" stroke="#939598" stroke-width="2">
                                                <g  transform="translate(308.170349, 1298.094543)">
                                                    <path class="gray_pic__path" d="M73.6686,34.6589 L47.0256,34.6589 C45.7966,34.6589 44.8006,33.6629 44.8006,32.4329 L44.8006,14.9279 C44.8006,13.6989 45.7966,12.7019 47.0256,12.7019 L73.6686,12.7019 C74.8976,12.7019 75.8946,13.6989 75.8946,14.9279 L75.8946,32.4329 C75.8946,33.6629 74.8976,34.6589 73.6686,34.6589 Z" ></path>
                                                    <path class="gray_pic__path" d="M44.8004,19.7756 L75.8944,19.7756" ></path>
                                                    <path class="gray_pic__path" d="M48.5202,29.9435 L54.4152,29.9435" ></path>
                                                    <path class="gray_pic__path" d="M43.3952,46.3815 C43.3952,42.8525 42.5812,37.9685 37.0152,35.5915 C31.4502,33.2145 28.7242,32.1465 27.1742,31.1105 C26.2552,30.4965 25.8842,28.6675 26.0222,26.3595 C28.8052,25.3405 30.6482,18.4465 30.6482,18.4465 C30.6482,18.4465 32.6622,16.1005 32.8072,13.9385 C32.9352,12.0375 30.9072,11.3595 30.9072,11.3595 C30.9072,9.8665 31.1482,6.4505 29.5202,4.0065 C27.8912,1.5635 24.2552,0.5005 21.9472,0.5005 C19.6402,0.5005 16.0042,1.5635 14.3752,4.0065 C12.7472,6.4505 12.9882,9.8665 12.9882,11.3595 C12.9882,11.3595 10.9602,12.0375 11.0882,13.9385 C11.2332,16.1005 13.2472,18.4465 13.2472,18.4465 C13.2472,18.4465 15.0902,25.3405 17.8732,26.3595 C18.0112,28.6675 17.6402,30.4965 16.7212,31.1105 C15.1712,32.1465 12.4452,33.2145 6.8802,35.5915 C1.3142,37.9685 0.5002,42.8525 0.5002,46.3815 L43.3952,46.3815 Z" ></path>
                                                </g>
                                            </g>
                                        </g>
                                    </svg>
                                    <span class="congestion__item_text">Картой водителю</span>
                                </label>
                            </div>
                            <div class="checked__item">
                                <input type="radio" class="checked__radio congestion__radio" name="move_step1__congestion" value="congestion3" id="radio_10">
                                <label for="radio_10" class="checked__label payment_ch__label congestion__label">
                                    <svg width="51px" height="41px" viewBox="0 0 51 41" version="1.1" xmlns="http://www.w3.org/2000/svg" class="gray_pic">
                                        <g  stroke="none" stroke-width="1" fill="none" fill-rule="evenodd" stroke-linecap="round" stroke-linejoin="round">
                                            <g  transform="translate(-529.000000, -1305.000000)" stroke="#F47920" stroke-width="2">
                                                <g  transform="translate(530.159302, 1306.094543)">
                                                    <path class="gray_pic__path" d="M31.8166825,26.8411128 L3.25696694,26.8411128 C1.78804497,26.8411128 0.597608613,25.6494812 0.597608613,24.1805592 L0.597608613,3.25828168 C0.597608613,1.78935971 1.78804497,0.597728135 3.25696694,0.597728135 L35.1011395,0.597728135 C36.5700615,0.597728135 37.761693,1.78935971 37.761693,3.25828168 L37.761693,22.3817573" ></path>
                                                    <path class="gray_pic__path" d="M0.597489091,9.05185814 L37.7615735,9.05185814" ></path>
                                                    <path class="gray_pic__path" d="M5.04393621,21.2047074 L12.0897418,21.2047074" ></path>
                                                    <polygon class="gray_pic__path"  points="29.7169249 18.500887 34.6758812 38.2028477 39.3479853 30.3789557 48.6742653 27.6466892"></polygon>
                                                    <path class="gray_pic__path" d="M39.3475072,30.3789557 L45.6905251,38.2028477" ></path>
                                                    <path class="gray_pic__path" d="M29.7169249,11.5022925 L29.7169249,14.0684239" ></path>
                                                    <path class="gray_pic__path" d="M22.7189281,18.500887 L25.2850595,18.500887" ></path>
                                                    <path class="gray_pic__path" d="M24.7686061,13.5525681 L26.5841411,15.3681031" ></path>
                                                    <path class="gray_pic__path" d="M32.850904,15.3675055 L34.666439,13.5519705" ></path>
                                                    <path class="gray_pic__path" d="M24.7686061,23.4493253 L26.5841411,21.6337903" ></path>
                                                </g>
                                            </g>
                                        </g>
                                    </svg>
                                    <span class="congestion__item_text">Онлайн оплата</span>
                                </label>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="move_config__no_hidden move_config__no_hidden-green choice_payment_box">
                    <p class="personal_edit__title">Заказ:</p>
                    <div class="choice_payment">
                        <div class="choice_payment__item">
                            <p class="choice_payment__desc">Рекомендованный переезд:</p>
                            <p class="choice_payment__price">29 985 ₽</p>
                            <div class="choice_payment__button">
                                <button class="btn choice_payment__btn" name="type_order" type="submit" value="recomended">Выбрать рекомендованный переезд</button>
                            </div>
                        </div>
                        <div class="choice_payment__item">
                            <p class="choice_payment__desc">Ваша настроенная стоимость переезда:</p>
                            <p class="choice_payment__price">39 985 ₽</p>
                            <div class="choice_payment__button">
                                <button class="btn choice_payment__btn" name="type_order" type="submit" value="custom">Выбрать ваш настроенный переезд</button>
                            </div>
                        </div>
                    </div>
                    <p class="choice_payment_box__footnote">* Подтверждая заказ,  Вы соглашаетесь с Правилами обработки персональных данных.</p>
                </div>
            </div>
        </div>
    </form>
</div>
