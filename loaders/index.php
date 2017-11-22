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
        <div class="move_page">
            <div class="move_page__head">
                <div class="move_page__wrap box">
                    <div class="move_page__title move_title">
                        <div class="move_title__text_box">
                            <p class="move_title__title title title-left title-left_orange">Грузчки</p>
                            <p class="move_title__text">Чтобы приступить к рассчету, выберите интересующую вас услугу:</p>
                        </div>
                        <div class="move_title__pic">
                            <img src="/local/test/img/deliveryboy3.svg" class="mqove_title__img move_title__img-transport">
                        </div>
                    </div>
                </div>
                <div class="move_page__nav_wrap">
                    <div class="move_page__nav_box move_nav">
                        <div class="move_nav__wrap box">
                            <a href="/loader/step1.php" class="move_nav__item">
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
                            <a href="/loader/step1.php" class="move_nav__item">
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
                            <a href="/loader/step1.php" class="move_nav__item">
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
            <div class="move_page__content">
                <div class="shares_main gray">
                    <div class="shares_main__wrap box">
                        <div class="shares_main__title_box">
                            <p class="shares_main__title title title-left title-left_orange">Акции</p>
                            <div class="shares_main__more shares_main__more-header"><a href="#" class="btn btn-width btn-white">Все акции</a></div>
                        </div>
                        <div class="shares_main__content shares">
                            <div class="shares__list">
                                <a href="#" class="shares__item">
                                        <span class="shares__pic">
                                            <img src="/local/test/img/shares.jpg" srcset="/local/test/img/shares@2x.jpg 2x, /local/test/img/shares@3x.jpg 3x" class="shares__img">
                                        </span>
                                    <span class="shares__content">
                                            <span class="shares__name">Упаковочный материал в подарок!</span>
                                            <span class="shares__text">При заказе такелажных работ на время не менее одного часа</span>
                                        </span>
                                </a>
                                <a href="#" class="shares__item">
                                        <span class="shares__pic">
                                            <img src="/local/test/img/shares.jpg" srcset="/local/test/img/shares@2x.jpg 2x, /local/test/img/shares@3x.jpg 3x" class="shares__img">
                                        </span>
                                    <span class="shares__content">
                                            <span class="shares__name">Упаковочный материал в подарок!</span>
                                            <span class="shares__text">При заказе такелажных работ на время не менее одного часа</span>
                                        </span>
                                </a>
                                <a href="#" class="shares__item">
                                        <span class="shares__pic">
                                            <img src="/local/test/img/shares.jpg" srcset="/local/test/img/shares@2x.jpg 2x, /local/test/img/shares@3x.jpg 3x" class="shares__img">
                                        </span>
                                    <span class="shares__content">
                                            <span class="shares__name">Упаковочный материал в подарок!</span>
                                            <span class="shares__text">При заказе такелажных работ на время не менее одного часа</span>
                                        </span>
                                </a>
                                <a href="#" class="shares__item">
                                        <span class="shares__pic">
                                            <img src="/local/test/img/shares.jpg" srcset="/local/test/img/shares@2x.jpg 2x, /local/test/img/shares@3x.jpg 3x" class="shares__img">
                                        </span>
                                    <span class="shares__content">
                                            <span class="shares__name">Упаковочный материал в подарок!</span>
                                            <span class="shares__text">При заказе такелажных работ на время не менее одного часа</span>
                                        </span>
                                </a>
                            </div>
                        </div>
                        <div class="shares_main__more shares_main__more-footer"><a href="#" class="btn btn-white">Все акции</a></div>
                    </div>
                </div>
                <div class="ready_solutions green">
                    <div class="ready_solutions__wrap box">
                        <div class="ready_solutions__title_box">
                            <p class="ready_solutions__title title title-left title-left title-white title-white_color">Готовые решения</p>
                            <div class="ready_solutions__more ready_solutions__more-header"><a href="#" class="btn btn-width btn-white btn-white_color">Все решения</a></div>
                        </div>
                        <div class="ready_solutions__content solutions">
                            <div class="solutions__list">
                                <div class="solutions__item">
                                    <div class="solutions__name"><a href="#" class="solutions__link">Переезд квартира-студия</a></div>
                                    <div class="solutions__content">
                                        <ul>
                                            <li>Машина на Х часов</li>
                                            <li>Необходимая упаковка</li>
                                        </ul>
                                    </div>
                                    <div class="solutions__price">от 2 999 ₽</div>
                                    <div class="solutions__more"><a href="#" class="solutions__more_btn btn btn-white">Подробнее</a></div>
                                </div>
                                <div class="solutions__item">
                                    <div class="solutions__name"><a href="#" class="solutions__link">Однокомнатная квартира</a></div>
                                    <div class="solutions__content">
                                        <ul>
                                            <li>Машина на 6 часов</li>
                                            <li>Необходимая упаковка</li>
                                            <li>4 грузчика</li>
                                            <li>Средняя загруженность</li>
                                        </ul>
                                    </div>
                                    <div class="solutions__price">от 2 999 ₽</div>
                                    <div class="solutions__more"><a href="#" class="solutions__more_btn btn btn-white">Подробнее</a></div>
                                </div>
                                <div class="solutions__item">
                                    <div class="solutions__name"><a href="#" class="solutions__link">Переезд квартира-студия</a></div>
                                    <div class="solutions__content">
                                        <ul>
                                            <li>Машина на Х часов</li>
                                            <li>Необходимая упаковка</li>
                                        </ul>
                                    </div>
                                    <div class="solutions__price">от 2 999 ₽</div>
                                    <div class="solutions__more"><a href="#" class="solutions__more_btn btn btn-white">Подробнее</a></div>
                                </div>
                                <div class="solutions__item">
                                    <div class="solutions__name"><a href="#" class="solutions__link">Однокомнатная квартира</a></div>
                                    <div class="solutions__content">
                                        <ul>
                                            <li>Машина на 6 часов</li>
                                            <li>Необходимая упаковка</li>
                                            <li>4 грузчика</li>
                                            <li>Средняя загруженность</li>
                                        </ul>
                                    </div>
                                    <div class="solutions__price">от 2 999 ₽</div>
                                    <div class="solutions__more"><a href="#" class="solutions__more_btn btn btn-white">Подробнее</a></div>
                                </div>
                            </div>
                        </div>
                        <div class="ready_solutions__more ready_solutions__more-footer"><a href="#" class="btn btn-white btn-white_color">Все решения</a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="guarantees">
        <div class="guarantees__wrap box">
            <p class="guarantees__title title title-green">Гарантии</p>
            <div class="guarantees__text_box guarantees_text">
                <div class="guarantees_text__pic">
                    <img src="/local/test/img/shield.png" srcset="/local/test/img/shield@2x.png 2x, /local/test/img/shield@3x.png 3x" class="guarantees_text__img">
                </div>
                <div class="guarantees_text__content">
                    <p class="guarantees_text__title">Надежно и безопасно</p>
                    <div class="guarantees_text__text">Переезд всегда представляется очень хлопотным делом. Многие люди считают, что организовать перевозку всех вещей самостоятельно будет более дешево, чем доверить эту задачу специальной службе.</div>
                </div>
            </div>
            <div class="guarantees__list">
                <div class="guarantees__item guarantees_item">
                    <div class="guarantees_item__pic">
                        <img src="/local/test/img/control.svg" class="guarantees_item__img guarantees_item-control">
                    </div>
                    <div class="guarantees_item__name">Строгий контроль<br>сотрудников</div>
                </div>
                <div class="guarantees__item guarantees_item">
                    <div class="guarantees_item__pic">
                        <img src="/local/test/img/cargo-ins.svg" class="guarantees_item__img guarantees_item-cargo_ins">
                    </div>
                    <div class="guarantees_item__name">Страхование<br>грузов</div>
                </div>
                <div class="guarantees__item guarantees_item">
                    <div class="guarantees_item__pic">
                        <img src="/local/test/img/gps.svg" class="guarantees_item__img guarantees_item-gps">
                    </div>
                    <div class="guarantees_item__name">Отслеживание маршрутов<br>передвижения</div>
                </div>
                <div class="guarantees__item guarantees_item">
                    <div class="guarantees_item__pic">
                        <img src="/local/test/img/service.svg" class="guarantees_item__img guarantees_item-service">
                    </div>
                    <div class="guarantees_item__name">Отличный сервис<br>и служба поддержки</div>
                </div>
            </div>
        </div>
    </div>
    <div class="reviews_index gray">
        <div class="reviews_index__wrap box">
            <p class="reviews_index__title title">Отзывы клиентов</p>
            <div class="reviews_index__slider_wrap">
                <div class="reviews_index__slider">
                    <div class="reviews_index__item reviews_item">
                        <div class="reviews_item__wrap">
                            <div class="reviews_item__info">
                                <div class="reviews_item__pic">
                                    <img src="/local/test/img/avatar.png" srcset="/local/test/img/avatar@2x.png 2x, /local/test/img/avatar@3x.png 3x" alt="" class="reviews_item__img">
                                </div>
                                <p class="reviews_item__name">Быстров Арсений</p>
                                <p class="reviews_item__job">28 лет, программист</p>
                            </div>
                            <div class="reviews_item__content">
                                <div class="reviews_item__head">
                                    <p class="reviews_item__title">Все супер!</p>
                                    <div class="reviews_item__stars rating">
                                        <div class="rating__list">
                                            <span class="rating__item">
                                                <svg class="rating__star" xmlns="http://www.w3.org/2000/svg">
                                                    <path class="rating__path" d="M6.768 6.227L1 7.065l4.174 4.069-.986 5.745 5.16-2.713 5.159 2.713-.985-5.745 4.174-4.069-5.769-.838L9.347 1z"/>
                                                </svg>
                                            </span>
                                            <span class="rating__item">
                                                <svg class="rating__star" xmlns="http://www.w3.org/2000/svg">
                                                    <path class="rating__path" d="M6.768 6.227L1 7.065l4.174 4.069-.986 5.745 5.16-2.713 5.159 2.713-.985-5.745 4.174-4.069-5.769-.838L9.347 1z"/>
                                                </svg>
                                            </span>
                                            <span class="rating__item">
                                                <svg class="rating__star" xmlns="http://www.w3.org/2000/svg">
                                                    <path class="rating__path rating__path-active" d="M6.768 6.227L1 7.065l4.174 4.069-.986 5.745 5.16-2.713 5.159 2.713-.985-5.745 4.174-4.069-5.769-.838L9.347 1z"/>
                                                </svg>
                                            </span>
                                            <span class="rating__item">
                                                <svg class="rating__star" xmlns="http://www.w3.org/2000/svg">
                                                    <path class="rating__path rating__path-active" d="M6.768 6.227L1 7.065l4.174 4.069-.986 5.745 5.16-2.713 5.159 2.713-.985-5.745 4.174-4.069-5.769-.838L9.347 1z"/>
                                                </svg>
                                            </span>
                                            <span class="rating__item">
                                                <svg class="rating__star" xmlns="http://www.w3.org/2000/svg">
                                                    <path class="rating__path rating__path-active" d="M6.768 6.227L1 7.065l4.174 4.069-.986 5.745 5.16-2.713 5.159 2.713-.985-5.745 4.174-4.069-5.769-.838L9.347 1z"/>
                                                </svg>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="reviews_item__body">
                                    Переезд обычно очень хлопотное дело, но нам повезло нас, перевозили ребята из Шмеля переезда! Все отлично, приехали четко по времени, все упаковали и аккуратно загрузили в машину. Спасибо ребята! Буду вас рекомендовать!!!!
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="reviews_index__item reviews_item">
                        <div class="reviews_item__wrap">
                            <div class="reviews_item__info">
                                <div class="reviews_item__pic">
                                    <img src="/local/test/img/avatar.png" srcset="/local/test/img/avatar@2x.png 2x, /local/test/img/avatar@3x.png 3x" alt="" class="reviews_item__img">
                                </div>
                                <p class="reviews_item__name">Быстров Арсений</p>
                                <p class="reviews_item__job">28 лет, программист</p>
                            </div>
                            <div class="reviews_item__content">
                                <div class="reviews_item__head">
                                    <p class="reviews_item__title">Все супер!</p>
                                    <div class="reviews_item__stars rating">
                                        <div class="rating__list">
                                            <span class="rating__item">
                                                <svg class="rating__star" xmlns="http://www.w3.org/2000/svg">
                                                    <path class="rating__path" d="M6.768 6.227L1 7.065l4.174 4.069-.986 5.745 5.16-2.713 5.159 2.713-.985-5.745 4.174-4.069-5.769-.838L9.347 1z"/>
                                                </svg>
                                            </span>
                                            <span class="rating__item">
                                                <svg class="rating__star" xmlns="http://www.w3.org/2000/svg">
                                                    <path class="rating__path" d="M6.768 6.227L1 7.065l4.174 4.069-.986 5.745 5.16-2.713 5.159 2.713-.985-5.745 4.174-4.069-5.769-.838L9.347 1z"/>
                                                </svg>
                                            </span>
                                            <span class="rating__item">
                                                <svg class="rating__star" xmlns="http://www.w3.org/2000/svg">
                                                    <path class="rating__path rating__path-active" d="M6.768 6.227L1 7.065l4.174 4.069-.986 5.745 5.16-2.713 5.159 2.713-.985-5.745 4.174-4.069-5.769-.838L9.347 1z"/>
                                                </svg>
                                            </span>
                                            <span class="rating__item">
                                                <svg class="rating__star" xmlns="http://www.w3.org/2000/svg">
                                                    <path class="rating__path rating__path-active" d="M6.768 6.227L1 7.065l4.174 4.069-.986 5.745 5.16-2.713 5.159 2.713-.985-5.745 4.174-4.069-5.769-.838L9.347 1z"/>
                                                </svg>
                                            </span>
                                            <span class="rating__item">
                                                <svg class="rating__star" xmlns="http://www.w3.org/2000/svg">
                                                    <path class="rating__path rating__path-active" d="M6.768 6.227L1 7.065l4.174 4.069-.986 5.745 5.16-2.713 5.159 2.713-.985-5.745 4.174-4.069-5.769-.838L9.347 1z"/>
                                                </svg>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="reviews_item__body">
                                    Переезд обычно очень хлопотное дело, но нам повезло нас, перевозили ребята из Шмеля переезда! Все отлично, приехали четко по времени, все упаковали и аккуратно загрузили в машину. Спасибо ребята! Буду вас рекомендовать!!!!
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="reviews_index__navigation">
                    <div class="reviews_index__more_box">
                        <a href="#" class="reviews_index__more_link btn btn-white">Все отзывы</a>
                    </div>
                    <button class="reviews_index__arrow reviews_index__arrow-next reviews_arrow">
                        <span class="reviews_arrow__text">Следующий отзыв</span>
                        <span class="reviews_arrow__ico"></span>
                    </button>
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