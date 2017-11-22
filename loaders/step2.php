<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Заголовок</title>
	<link rel="stylesheet" href="/local/test/css/vendor.min.css">
	<link rel="stylesheet" href="/local/test/css/main.css">
	<script src="/local/test/js/vendor.min.js"></script>
	<script src="/local/test/js/main.min.js"></script>

	<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/fancybox/3.0.47/jquery.fancybox.min.css" />
	<script src="//cdnjs.cloudflare.com/ajax/libs/fancybox/3.0.47/jquery.fancybox.min.js"></script>
</head>
<body>
<header class="header">
    <div class="header__wrap box">
        <div class="header__left">
            <button type="button" class="header__mobile"><span class="header__burger"></span><span class="header__burger"></span><span class="header__burger"></span></button>
            <a href="/" class="header__logo logo">
                <img class="logo__img logo__img-desktop" src="/local/test/img/logo.svg" onerror="this.onerror=null; this.src='/local/test/img/logo.png'" alt="" width="100">
                <img class="logo__img logo__img-mobile" src="/local/test/img/logo_mobile.svg" onerror="this.onerror=null; this.src='/local/test/img/logo_mobile.png'" alt="" width="100">
            </a>
        </div>
        <div class="header__right h_navigation">
            <div class="h_navigation__head">
                <nav class="h_navigation__nav nav">
                    <a href="#" class="nav__link">Акции</a>
                    <a href="#" class="nav__link">О компании</a>
                    <a href="#" class="nav__link">Доставка и оплата</a>
                    <a href="#" class="nav__link">Вакансии</a>
                    <a href="#" class="nav__link">Контакты</a>
                </nav>
                <div class="h_navigation__search search">
                    <form action="" class="search__form">
                        <input type="text" class="search__input" placeholder="Поиск">
                        <button type="submit" class="search__button">Найти</button>
                    </form>
                </div>
                <div class="h_navigation__lk h_lk">
                    <div class="h_lk__auth auth_drop">
                        <button class="auth_drop__btn">
                                <span class="auth_drop__avatar">
                                    <img src="/local/test/img/avatar.png" alt="" class="auth_drop__img">
                                </span>
                            <span class="auth_drop__text_box">
                                    <span class="auth_drop__text">Мои данные</span>
                                    <span class="auth_drop__icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 72 32" class="auth_drop__svg icon_dropdown">
                                            <polyline class="icon_dropdown__line icon_dropdown__line-active" points="2,2 35,30 70,2"></polyline>
                                            <polyline class="icon_dropdown__line" points="2,30 35,2 70,30"></polyline>
                                        </svg>
                                    </span>
                                </span>
                        </button>
                        <div class="auth_drop__drop">
                            <div class="auth_drop__card personal_card">
                                <div class="personal_card__avatar"><img src="/local/test/img/avatar.png" srcset="/local/test/img/avatar@2x.png 2x, /local/test/img/avatar@3x.png 3x" alt="" class="personal_card__avatar_img"></div>
                                <div class="personal_card__name">Узбеков Джамшут Валерьянович</div>
                                <ul class="personal_card__menu personal_menu">
                                    <li class="personal_menu__item"><a href="#" class="personal_menu__link">Мои данные</a></li>
                                    <li class="personal_menu__item"><a href="#" class="personal_menu__link">Сохраненные услуги</a></li>
                                    <li class="personal_menu__item"><a href="#" class="personal_menu__link">История заказов</a></li>
                                    <li class="personal_menu__item"><a href="#" class="personal_menu__link">Оставить отзыв</a></li>
                                </ul>
                                <div class="personal_card__out_box">
                                    <button class="personal_card__out_btn btn btn-white btn-white_color btn-width">Выйти</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!--<button class="h_lk__button_auth btn" data-modal="#auth" data-url="/login/auth.php">Войти</button>-->
                </div>
            </div>
            <div class="h_navigation__body">
                <div class="h_navigation__phone h_phone">
                    <p class="h_phone__number">8 800 123 45 67</p>
                    <p class="h_phone__text">Многоканальный, звонок бесплатный</p>
                    <p class="h_phone__job">Работаем: 8:00 — 24:00, 7/365</p>
                </div>
                <div class="h_navigation__contacts h_contacts">
                    <a href="skype:shmel-pereezd2?call" class="h_contacts__item">
                        <i class="h_contacts__ico h_contacts__ico-skype">Skype</i>
                        <span class="h_contacts__text h_contacts__text-hidden">shmel-pereezd2</span>
                    </a>
                    <a href="mailto:info@shmel-pereezd.ru" class="h_contacts__item">
                        <i class="h_contacts__ico h_contacts__ico-email">E-mail</i>
                        <span class="h_contacts__text h_contacts__text-hidden">info@shmel-pereezd.ru</span>
                    </a>
                </div>
                <div class="h_navigation__services_info services_info">
                    <a href="#" class="services_info__one">
                        <span class="services_info__name">Сохраненные услуги</span>
                        <span class="services_info__count services_info__count-green">3</span>
                    </a>
                    <a href="#" class="services_info__one">
                            <span class="services_info__name">
                                Товаров
                                <span class="services_info__price services_info__price-mobile">7 584 ₽</span>
                            </span>
                        <span class="services_info__count services_info__count-orange">55</span>
                        <span class="services_info__price">7 584 ₽</span>
                    </a>
                </div>
            </div>
            <div class="h_navigation__mobile_lk h_mobile_lk">
                <div class="h_mobile_lk__auth auth_drop">
                    <button class="auth_drop__btn">
                                <span class="auth_drop__avatar">
                                    <img src="/local/test/img/avatar.png" alt="" class="auth_drop__img">
                                </span>
                        <span class="auth_drop__text_box">
                                    <span class="auth_drop__text">Мои данные</span>
                                    <span class="auth_drop__icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 72 32" class="auth_drop__svg icon_dropdown">
                                            <polyline class="icon_dropdown__line icon_dropdown__line-active" points="2,2 35,30 70,2"></polyline>
                                            <polyline class="icon_dropdown__line" points="2,30 35,2 70,30"></polyline>
                                        </svg>
                                    </span>
                                </span>
                    </button>
                    <div class="auth_drop__drop">
                        <div class="auth_drop__card personal_card">
                            <div class="personal_card__avatar"><img src="/local/test/img/avatar.png" srcset="/local/test/img/avatar@2x.png 2x, /local/test/img/avatar@3x.png 3x" alt="" class="personal_card__avatar_img"></div>
                            <div class="personal_card__name">Узбеков Джамшут Валерьянович</div>
                            <ul class="personal_card__menu personal_menu">
                                <li class="personal_menu__item"><a href="#" class="personal_menu__link">Мои данные</a></li>
                                <li class="personal_menu__item"><a href="#" class="personal_menu__link">Сохраненные услуги</a></li>
                                <li class="personal_menu__item"><a href="#" class="personal_menu__link">История заказов</a></li>
                                <li class="personal_menu__item"><a href="#" class="personal_menu__link">Оставить отзыв</a></li>
                            </ul>
                            <div class="personal_card__out_box">
                                <button class="personal_card__out_btn btn btn-white btn-white_color btn-width">Выйти</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<div class="menu menu-stage_closing">
    <div class="menu__container">
        <div class="menu__wrap box">
            <div class="menu__header">
                <div class="search search-menu">
                    <form action="" class="search__form">
                        <input type="text" class="search__input" placeholder="Поиск">
                        <button type="submit" class="search__button">Найти</button>
                    </form>
                </div>
            </div>
            <div class="menu__content">
                <div class="f_nav f_nav-menu">
                    <div class="f_nav__container">
                        <p class="f_nav__title">О компании</p>
                        <ul class="f_nav__nav_first">
                            <li class="f_nav__item"><a href="#" class="f_nav__link">О нас</a></li>
                            <li class="f_nav__item"><a href="#" class="f_nav__link">Доставка и оплата</a></li>
                            <li class="f_nav__item"><a href="#" class="f_nav__link">Наш автопарк</a></li>
                            <li class="f_nav__item"><a href="#" class="f_nav__link">Отзывы</a></li>
                            <li class="f_nav__item"><a href="#" class="f_nav__link">Реквизиты</a></li>
                            <li class="f_nav__item"><a href="#" class="f_nav__link">Новости</a></li>
                            <li class="f_nav__item"><a href="#" class="f_nav__link">Вакансии</a></li>
                            <li class="f_nav__item"><a href="#" class="f_nav__link">Контакты</a></li>
                        </ul>
                    </div>
                    <div class="f_nav__container f_nav__container-wide">
                        <p class="f_nav__title">Услуги</p>
                        <ul class="f_nav__nav_first">
                            <li class="f_nav__item">
                                <a href="#" class="f_nav__link">Переезды</a>
                                <ul class="f_nav__nav_second">
                                    <li class="f_nav__item_second"><a href="#" class="f_nav__link_second">Квартирный переезд</a></li>
                                    <li class="f_nav__item_second"><a href="#" class="f_nav__link_second">Офисный переезд</a></li>
                                    <li class="f_nav__item_second"><a href="#" class="f_nav__link_second">Перевозка мебели</a></li>
                                    <li class="f_nav__item_second"><a href="#" class="f_nav__link_second">Дачный переезд</a></li>
                                </ul>
                            </li>
                            <li class="f_nav__item"><a href="#" class="f_nav__link">Грузчки</a></li>
                            <li class="f_nav__item"><a href="#" class="f_nav__link">Упаковочный материал</a></li>
                            <li class="f_nav__item"><a href="#" class="f_nav__link">Корпоративным клиентам</a></li>
                            <li class="f_nav__item"><a href="#" class="f_nav__link f_nav__link-orange">Акции и скидки</a></li>
                        </ul>
                        <ul class="f_nav__nav_first">
                            <li class="f_nav__item">
                                <a href="#" class="f_nav__link">Транспортные услуги</a>
                                <ul class="f_nav__nav_second">
                                    <li class="f_nav__item_second"><a href="#" class="f_nav__link_second">Перевозка стройматериалов</a></li>
                                    <li class="f_nav__item_second"><a href="#" class="f_nav__link_second">Перевозка пианино</a></li>
                                    <li class="f_nav__item_second"><a href="#" class="f_nav__link_second">Перевозка водного скутера</a></li>
                                    <li class="f_nav__item_second"><a href="#" class="f_nav__link_second">Грузовое такси</a></li>
                                    <li class="f_nav__item_second"><a href="#" class="f_nav__link_second">Перевозка мебели</a></li>
                                    <li class="f_nav__item_second"><a href="#" class="f_nav__link_second">Тарифы</a></li>
                                </ul>
                            </li>
                            <li class="f_nav__item">
                                <a href="#" class="f_nav__link">Документы</a>
                                <ul class="f_nav__nav_second">
                                    <li class="f_nav__item_second"><a href="#" class="f_nav__link_second">Офисный переезд</a></li>
                                    <li class="f_nav__item_second"><a href="#" class="f_nav__link_second">Перевозка мебели</a></li>
                                    <li class="f_nav__item_second"><a href="#" class="f_nav__link_second">Оферта</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="menu__personal">
                    <div class="personal_card personal_card-menu">
                        <div class="personal_card__avatar"><img src="/local/test/img/avatar.png" srcset="/local/test/img/avatar@2x.png 2x, /local/test/img/avatar@3x.png 3x" alt="" class="personal_card__avatar_img"></div>
                        <div class="personal_card__name">Узбеков Джамшут Валерьянович</div>
                        <ul class="personal_card__menu personal_menu">
                            <li class="personal_menu__item"><a href="#" class="personal_menu__link">Мои данные</a></li>
                            <li class="personal_menu__item"><a href="#" class="personal_menu__link">Сохраненные услуги</a></li>
                            <li class="personal_menu__item"><a href="#" class="personal_menu__link">История заказов</a></li>
                            <li class="personal_menu__item"><a href="#" class="personal_menu__link">Оставить отзыв</a></li>
                        </ul>
                        <div class="personal_card__out_box">
                            <button class="personal_card__out_btn btn btn-white btn-width">Выйти</button>
                        </div>
                    </div>
                    <br>
                    <br>
                    <br>
                    <div class="personal_no_auth">
                        <p class="personal_no_auth__title">Личный кабинет</p>
                        <button class="personal_no_auth__btn btn btn-white_bg btn-width" data-modal="#auth" data-url="/auth.html">Войти</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<main class="main main-inner">
    <div class="main__navigation navigation">
        <div class="navigation__wrap box">
            <nav class="navigation__list">
                <a href="/move/" class="navigation__link">Переезд</a>
                <a href="/transport/" class="navigation__link">Транспортные услуги</a>
                <span class="navigation__link navigation__link-active">Грузчики</span>
                <a href="#" class="navigation__link">Упаковочный материал</a>
            </nav>
        </div>
    </div>
    <div class="main__breadcrumbs breadcrumbs">
        <div class="breadcrumbs__wrap box">
            <div class="breadcrumbs__list" itemscope itemtype="http://schema.org/BreadcrumbList">
                    <span class="breadcrumbs__element" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
                        <a class="breadcrumbs__link" itemprop="item" href="/"><span class="breadcrumbs__text" itemprop="name">Главная</span></a>
                        <meta itemprop="position" content="1"/>
                    </span>
                <span class="breadcrumbs__element" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
                        <a class="breadcrumbs__link" itemprop="item" href="#"><span class="breadcrumbs__text" itemprop="name">Раздел</span></a>
                        <meta itemprop="position" content="2"/>
                    </span>
                <span class="breadcrumbs__element" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
                        <a class="breadcrumbs__link" itemprop="item" href="#"><span class="breadcrumbs__text" itemprop="name">Подраздел</span></a>
                        <meta itemprop="position" content="3"/>
                    </span>
                <span class="breadcrumbs__element" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
                        <span class="breadcrumbs__text" itemprop="name">Элемент</span>
                        <meta itemprop="position" content="4"/>
                    </span>
            </div>
        </div>
    </div>
    <div class="main__content">
        <div class="page_steps">
            <div class="box">
                <div class="page_steps__wrap">
                    <div class="page_steps__content">
                        <p class="title title-left title-not_before">Грузчики</p>
                        <div class="move_calc">
                            <form action="" method="get" class="move_calc__form">
                                <div class="nav_step">
                                    <div class="nav_step__line">
                                        <div class="nav_step__line_orange nav_step__line_orange-l_step2"></div>
                                    </div>
                                    <div class="nav_step__nav">
                                        <div class="nav_step__item">
                                            <div class="nav_step__icon"></div>
                                            <p class="nav_step__text">Выбор услуги</p>
                                        </div>
                                        <div class="nav_step__item nav_step__item-active">
                                            <div class="nav_step__icon"></div>
                                            <p class="nav_step__text">Подтверждение</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="move_step move_step-active move_step4">
                                    
                                    <div class="move_step4__wrap">
                                        <div class="move_step4__personal">
                                            <p class="personal_edit__title">Ваши контактные данные:</p>
                                            <div class="personal_edit__password_box form">
                                                <div class="form__one form__one-left form__one-big">
                                                    <label for="id1" class="form__label form__label-left">Имя</label>
                                                    <div class="form__element_box">
                                                        <div class="form__pass_box">
                                                            <input type="text" id="id1" value="" class="form__element form__element-input">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form__one form__one-left form__one-big">
                                                    <label for="id2" class="form__label form__label-left">Телефон</label>
                                                    <div class="form__element_box">
                                                        <div class="form__pass_box">
                                                            <input type="tel" id="id2" value="" class="form__element form__element-input">
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
                                                            <input type="text" class="min_input__input min_input__input-sale">
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
                                                    <p class="choice_payment__desc">Рекомендованные грузчики:</p>
                                                    <p class="choice_payment__price">29 985 ₽</p>
                                                    <div class="choice_payment__button">
                                                        <button class="btn choice_payment__btn" type="button" onClick='location.href="./loaders_step3.html"'>Выбрать рекомендованных грузчиков</button>
                                                    </div>
                                                </div>
                                                <div class="choice_payment__item">
                                                    <p class="choice_payment__desc">Ваши настроенные грузчики:</p>
                                                    <p class="choice_payment__price">39 985 ₽</p>
                                                    <div class="choice_payment__button">
                                                        <button class="btn choice_payment__btn" type="button" onClick='location.href="./loaders_step3.html"'>Выбрать ваших настроенных грузчиков</button>
                                                    </div>
                                                </div>
                                            </div>
                                            <p class="choice_payment_box__footnote">* Подтверждая заказ,  Вы соглашаетесь с Правилами обработки персональных данных.</p>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="page_steps__sidebar sidebar">
                        <div class="navigator">
                            <button class="navigator__printing">Печать</button>
                            <p class="navigator__title sidebar__title">Перечень заказа</p>
                            <div class="navigator__list">
                                <div class="navigator__item">
                                    <span class="navigator__icon"><i class="navigator__i"></i></span>
                                    <button class="navigator__link" data-scroll="#" type="button">Адрес 1:</button>
                                </div>
                                <div class="navigator__item">
                                    <span class="navigator__icon"><i class="navigator__i"></i></span>
                                    <button class="navigator__link" data-scroll="#" type="button">Грузчики: <span class="navigator__price">4000 ₽</span></button>
                                </div>
                                <div class="navigator__item">
                                    <span class="navigator__icon"><i class="navigator__i"></i></span>
                                    <button class="navigator__link" data-scroll="#" type="button">Такелажные работы <span class="navigator__price">2000 ₽</span></button>
                                </div>
                            </div>
                            <p class="navigator__total">Итого: <span class="navigator__total_price">39 985 ₽</span></p>
                            <div class="navigator__buttons">
                                <button class="navigator__btn btn btn-white" onClick='location.href="/loader/step1_config.php"'>Редактировать</button>
                                <button class="navigator__btn btn" onClick='location.href="/loader/step3.php"'>Оформить заказ</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
<footer class="footer">
    <div class="footer__content">
        <div class="footer__wrap box">
            <div class="footer__white f_nav">
                <div class="f_nav__container">
                    <p class="f_nav__title">О компании</p>
                    <ul class="f_nav__nav_first">
                        <li class="f_nav__item"><a href="#" class="f_nav__link">О нас</a></li>
                        <li class="f_nav__item"><a href="#" class="f_nav__link">Доставка и оплата</a></li>
                        <li class="f_nav__item"><a href="#" class="f_nav__link">Наш автопарк</a></li>
                        <li class="f_nav__item"><a href="#" class="f_nav__link">Отзывы</a></li>
                        <li class="f_nav__item"><a href="#" class="f_nav__link">Реквизиты</a></li>
                        <li class="f_nav__item"><a href="#" class="f_nav__link">Новости</a></li>
                        <li class="f_nav__item"><a href="#" class="f_nav__link">Вакансии</a></li>
                        <li class="f_nav__item"><a href="#" class="f_nav__link">Контакты</a></li>
                    </ul>
                </div>
                <div class="f_nav__container f_nav__container-wide">
                    <p class="f_nav__title">Услуги</p>
                    <ul class="f_nav__nav_first">
                        <li class="f_nav__item">
                            <a href="#" class="f_nav__link">Переезды</a>
                            <ul class="f_nav__nav_second">
                                <li class="f_nav__item_second"><a href="#" class="f_nav__link_second">Квартирный переезд</a></li>
                                <li class="f_nav__item_second"><a href="#" class="f_nav__link_second">Офисный переезд</a></li>
                                <li class="f_nav__item_second"><a href="#" class="f_nav__link_second">Перевозка мебели</a></li>
                                <li class="f_nav__item_second"><a href="#" class="f_nav__link_second">Дачный переезд</a></li>
                            </ul>
                        </li>
                        <li class="f_nav__item"><a href="#" class="f_nav__link">Грузчки</a></li>
                        <li class="f_nav__item"><a href="#" class="f_nav__link">Упаковочный материал</a></li>
                        <li class="f_nav__item"><a href="#" class="f_nav__link">Корпоративным клиентам</a></li>
                        <li class="f_nav__item"><a href="#" class="f_nav__link f_nav__link-orange">Акции и скидки</a></li>
                    </ul>
                    <ul class="f_nav__nav_first">
                        <li class="f_nav__item">
                            <a href="#" class="f_nav__link">Транспортные услуги</a>
                            <ul class="f_nav__nav_second">
                                <li class="f_nav__item_second"><a href="#" class="f_nav__link_second">Перевозка стройматериалов</a></li>
                                <li class="f_nav__item_second"><a href="#" class="f_nav__link_second">Перевозка пианино</a></li>
                                <li class="f_nav__item_second"><a href="#" class="f_nav__link_second">Перевозка водного скутера</a></li>
                                <li class="f_nav__item_second"><a href="#" class="f_nav__link_second">Грузовое такси</a></li>
                                <li class="f_nav__item_second"><a href="#" class="f_nav__link_second">Перевозка мебели</a></li>
                                <li class="f_nav__item_second"><a href="#" class="f_nav__link_second">Тарифы</a></li>
                            </ul>
                        </li>
                        <li class="f_nav__item">
                            <a href="#" class="f_nav__link">Документы</a>
                            <ul class="f_nav__nav_second">
                                <li class="f_nav__item_second"><a href="#" class="f_nav__link_second">Офисный переезд</a></li>
                                <li class="f_nav__item_second"><a href="#" class="f_nav__link_second">Перевозка мебели</a></li>
                                <li class="f_nav__item_second"><a href="#" class="f_nav__link_second">Оферта</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="footer__gray">
                <div class="footer__phone f_phone">
                    <p class="f_phone__number">8 800 123 45 67</p>
                    <p class="f_phone__text">Многоканальный, звонок бесплатный</p>
                    <p class="f_phone__job">Работаем: 8:00 — 24:00, 7/365</p>
                    <p class="f_phone__job">7 дней в неделю и 365 дней в году</p>
                </div>
                <div class="footer__button">
                    <button class="footer__callback btn btn-white btn-width">Обратный звонок</button>
                </div>
                <div class="footer__contacts f_contacts">
                    <a href="skype:shmel-pereezd2?call" class="f_contacts__item">
                        <i class="f_contacts__ico f_contacts__ico-skype">Skype</i>
                        <span class="f_contacts__text">shmel-pereezd2</span>
                    </a>
                    <a href="mailto:info@shmel-pereezd.ru" class="f_contacts__item">
                        <i class="f_contacts__ico f_contacts__ico-email">E-mail</i>
                        <span class="f_contacts__text">info@shmel-pereezd.ru</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="footer__footer">
        <div class="footer__wrap footer__wrap-bottom box">
            <div class="footer__copy f_copy">
                <div class="f_copy__copy copy">
                    <p class="copy__text">© 2017 OOO «Шмель Переезд»</p>
                    <p class="copy__text">Организация переездов по Москве</p>
                </div>
                <a href="#" class="f_copy__map">Карта сайта</a>
            </div>
            <div class="footer__creators_box">
                <div class="footer__creators creators">
                    <a href="#" class="creators__link">
                        <span class="creators__text">Создание и продвижение</span>
                        <img src="/local/test/img/soobwa.svg" alt="" class="creators__logo">
                    </a>
                </div>
            </div>
        </div>
    </div>
</footer>
</body>
</html>