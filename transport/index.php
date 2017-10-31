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
                <span class="navigation__link navigation__link-active">Транспортные услуги</span>
                <a href="/loader/" class="navigation__link">Грузчики</a>
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
                            <p class="move_title__title title title-left title-left_orange">Транспортные услуги</p>
                            <p class="move_title__text">Чтобы приступить к рассчету, выберите интересующую вас услугу:</p>
                        </div>
                        <div class="move_title__pic">
                            <img src="/local/test/img/transport3.svg" class="move_title__img move_title__img-transport">
                        </div>
                    </div>
                </div>
                <div class="move_page__nav_wrap">
                    <div class="move_page__nav_box move_nav">
                        <div class="move_nav__wrap box">
                            <a href="/transport/step1.php" class="move_nav__item">
                                <span class="move_nav__pic">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="317px" height="123px" viewBox="0 0 317 123" class="move_pic">
                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd" stroke-linecap="round" stroke-linejoin="round">
                                            <g transform="translate(-525.000000, -2168.000000)" stroke-width="2">
                                                <g transform="translate(525.000000, 2168.535270)">
                                                    <path d="M76.3426514,54.5945435 L226.334088,54.5945435 C234.62201,54.5945435 241.340698,61.3051186 241.340698,69.5951688 L241.340698,73.1532544 C241.340698,81.437871 234.623521,88.1538797 226.338336,88.1538797 L140.33679,88.1538797 C132.051215,88.1538797 125.334428,94.8604111 125.334428,103.15601 L125.334428,106.096304 C125.334428,114.381751 132.045857,121.098434 140.340624,121.098434 L301.340698,121.098434" class="move_pic__green" fill="#FFFFFF"></path>
                                                    <g transform="translate(0.881895, 0.500930)">
                                                        <path d="M62.3949178,20.2403162 L62.3949178,10.7409552 C62.3949178,10.7409552 74.8646463,11.1644627 80.6793949,20.2403162" class="move_pic__gray" fill="#FFFFFF"></path>
                                                        <polyline class="move_pic__gray" fill="#FFFFFF" points="66.5465514 46.8571827 62.3948209 46.8571827 62.3948209 20.2401708 81.2767634 20.2401708 95.3814053 34.3448128 95.3814053 39.3498576"></polyline>
                                                        <polyline class="move_pic__gray" fill="#FFFFFF" points="66.8695123 20.2403162 66.8695123 28.7506854 81.671924 28.7506854 85.3061419 31.3348566 92.3715461 31.3348566"></polyline>
                                                        <path d="M90.908846,39.2496986 L95.253917,39.2496986 C96.1275829,39.2496986 96.835044,39.9576442 96.835044,40.8308257 L96.835044,43.5836246 C96.835044,44.456806 96.1275829,45.1647516 95.253917,45.1647516 L90.908846,45.1647516 C90.0356646,45.1647516 89.327719,44.456806 89.327719,43.5836246 L89.327719,40.8308257 C89.327719,39.9576442 90.0356646,39.2496986 90.908846,39.2496986 Z" class="move_pic__gray" fill="#FFFFFF"></path>
                                                        <path d="M82.3755086,47.2837914 C82.3755086,51.0536868 79.3193736,54.1093372 75.5494783,54.1093372 C71.7795829,54.1093372 68.7239325,51.0536868 68.7239325,47.2837914 C68.7239325,43.513896 71.7795829,40.4577611 75.5494783,40.4577611 C79.3193736,40.4577611 82.3755086,43.513896 82.3755086,47.2837914 Z" class="move_pic__gray" fill="#FFFFFF"></path>
                                                        <path d="M33.3322712,47.2837914 C33.3322712,51.0536868 30.2761362,54.1093372 26.5062409,54.1093372 C22.7363455,54.1093372 19.6802105,51.0536868 19.6802105,47.2837914 C19.6802105,43.513896 22.7363455,40.4577611 26.5062409,40.4577611 C30.2761362,40.4577611 33.3322712,43.513896 33.3322712,47.2837914 Z" class="move_pic__gray" fill="#FFFFFF"></path>
                                                        <path d="M89.3278644,43.5835277 L81.2841288,43.5835277" class="move_pic__gray" fill="#FFFFFF"></path>
                                                        <path d="M8.23756055,44.7414864 L8.23756055,40.4579549" class="move_pic__gray" fill="#FFFFFF"></path>
                                                        <polyline class="move_pic__gray" fill="#FFFFFF" points="17.2290516 46.8571827 12.0163329 46.8571827 12.0163329 40.4575672"></polyline>
                                                        <path d="M33.3322712,46.8571827 L62.3948694,46.8571827" class="move_pic__gray" fill="#FFFFFF"></path>
                                                        <path d="M95.3813569,34.3449097 L95.3813569,34.3449097 C92.7477603,34.3449097 90.613263,36.4798915 90.613263,39.1130035 L90.613263,39.2496501" class="move_pic__gray" fill="#FFFFFF"></path>
                                                        <polygon class="move_pic__orange" points="0.242281193 37.7575856 59.5547352 37.7575856 59.5547352 0.000484562384 0.242281193 0.000484562384"></polygon>
                                                    </g>
                                                    <path d="M301.340698,81.0984337 C309.070698,81.0984337 315.340698,87.3684337 315.340698,95.0984337 C315.340698,105.598434 301.340698,121.098434 301.340698,121.098434 C301.340698,121.098434 287.340698,105.598434 287.340698,95.0984337 C287.340698,87.3684337 293.610698,81.0984337 301.340698,81.0984337 Z M301.390228,100 C304.367169,100 306.780457,97.5867126 306.780457,94.6097717 C306.780457,91.6328309 304.367169,89.2195435 301.390228,89.2195435 C298.413287,89.2195435 296,91.6328309 296,94.6097717 C296,97.5867126 298.413287,100 301.390228,100 Z" class="move_pic__orange" fill-rule="nonzero"></path>
                                                    <circle class="move_pic__green" fill="#FFFFFF" cx="126" cy="104.5" r="4"></circle>
                                                    <circle class="move_pic__green" fill="#FFFFFF" cx="241.501953" cy="71.5019531" r="4"></circle>
                                                </g>
                                            </g>
                                        </g>
                                    </svg>
                                </span>
                                <span class="move_nav__name">Рассчитать маршрут</span>
                            </a>
                            <a href="/transport/tariff.php" class="move_nav__item">
                                <span class="move_nav__pic">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="300" height="84" viewBox="0 0 300.14 83.84" class="move_pic">
                                        <g fill="#FFF" fill-rule="evenodd" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
                                            <path class="move_pic__gray" d="M126.14,77.84V5.92h18.69c14.72,0,23.82,6.23,23.82,18.68,0,0,1.67,21-19,21h-35.4" transform="translate(-0.04 -0.4)"/>
                                            <path class="move_pic__gray" d="M114.24,61.15h40.21" transform="translate(-0.04 -0.4)"/>
                                            <path class="move_pic__orange" d="M278.7,42.32a20.44,20.44,0,1,1-20.44-20.44A20.44,20.44,0,0,1,278.7,42.32Z" transform="translate(-0.04 -0.4)"/>
                                            <path class="move_pic__orange" d="M258.26,72.08V83.24" transform="translate(-0.04 -0.4)"/>
                                            <path class="move_pic__orange" d="M258.26,1.4V12.55" transform="translate(-0.04 -0.4)"/>
                                            <path class="move_pic__orange" d="M228.49,42.32H217.34" transform="translate(-0.04 -0.4)"/>
                                            <path class="move_pic__orange" d="M299.18,42.32H288" transform="translate(-0.04 -0.4)"/>
                                            <path class="move_pic__orange" d="M237.21,63.36l-7.89,7.89" transform="translate(-0.04 -0.4)"/>
                                            <path class="move_pic__orange" d="M287.19,13.38l-7.89,7.89" transform="translate(-0.04 -0.4)"/>
                                            <path class="move_pic__orange" d="M237.21,21.27l-7.89-7.89" transform="translate(-0.04 -0.4)"/>
                                            <path class="move_pic__orange" d="M287.19,71.25l-7.89-7.89" transform="translate(-0.04 -0.4)"/>
                                            <path class="move_pic__green" d="M45,64A31.39,31.39,0,0,1,19.44,14.3,33.14,33.14,0,1,0,64.66,57,31.25,31.25,0,0,1,45,64Z" transform="translate(-0.04 -0.4)"/>
                                        </g>
                                    </svg>
                                </span>
                                <span class="move_nav__name">Тарифы</span>
                            </a>
                        </div>
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