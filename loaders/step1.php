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
                                        <div class="nav_step__line_orange nav_step__line_orange-l_step1"></div>
                                    </div>
                                    <div class="nav_step__nav">
                                        <div class="nav_step__item nav_step__item-active">
                                            <div class="nav_step__icon"></div>
                                            <p class="nav_step__text">Выбор услуги</p>
                                        </div>
                                        <div class="nav_step__item">
                                            <div class="nav_step__icon"></div>
                                            <p class="nav_step__text">Подтверждение</p>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="move_step move_step-active loaders_step">
                                    
                                    <div class="move_step3__item move_config">
                                        <div class="move_config__head">
                                            <div class="move_config__left">
                                                <p class="move_config__spoiler_title move_config__spoiler_title-custom">Адрес и время проведения работ:
                                                    <button class="move_config__btn_default btn btn-white" type="button">Удалить данный адрес</button>
                                                </p>
                                            </div>
                                            <div class="move_config__right">
                                                <button class="move_config__spoiler move_config__spoiler-active" type="button">Свернуть</button>
                                            </div>
                                            <div class="move_config__head_mobile">
                                                <button class="move_config__btn_default btn btn-white" type="button">Удалить данный адрес</button>
                                            </div>
                                        </div>
                                        <div class="move_config__no_hidden">
                                            <div class="move_config__wrap_to">
                                                <script>
                                                    // TODO: этот скрипт вынести в ту часть где будет использоваться элемент datapicker
                                                    $(function () {
                                                        $('.date__steps').datepicker({
                                                            dateFormat: 'dd MM yyyy',
                                                            timepicker: true,
                                                            dateTimeSeparator: ', ',
                                                            timeFormat: 'hh:ii'
                                                        });

                                                    });
                                                </script>
                                                <div class="loaders__mapping l_mapping">
                                                    <div class="l_mapping__one">
                                                        <div class="l_mapping__left">
                                                            <span class="l_mapping__text">Адрес:</span>
                                                            <span class="l_mapping__point">1</span>
                                                        </div>
                                                        <div class="l_mapping__right">
                                                            <input type="text" class="l_mapping__input_address mapping__input " value="Москва, Огородный проезд 3 к.2">
                                                        </div>
                                                    </div>
                                                    <div class="l_mapping__one">
                                                        <div class="l_mapping__left">
                                                            <span class="l_mapping__text">Время:</span>
                                                        </div>
                                                        <div class="l_mapping__right">
                                                            <input type="text" class="l_mapping__input_date date__steps input_date">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="move_config__content">
                                            
                                            <div class="move_config__wrap">
                                                <div class="min_input">
                                                    <div class="min_input__one">
                                                        <p class="rooms_info__title">
                                                            <span class="rooms_info__text">Этаж</span>
                                                            <span class="rooms_info__tooltip tooltip tooltipstered">?</span>
                                                        </p>
                                                        <div class="min_input__one_box"><input type="text" class="min_input__input"></div>
                                                    </div>
                                                    <div class="min_input__one">
                                                        <p class="rooms_info__title"><span>Наличие лифта:</span></p>
                                                        <div class="additionally__content">
                                                            <div class="check_inline check_inline-pt">
                                                                <div class="check_inline__one">
                                                                    <input type="checkbox" class="check_inline__input" name="check_inline31" value="check_inline311" id="radio_28">
                                                                    <label for="radio_28" class="check_inline__label">
                                                                        <svg width="24px" height="24px" viewBox="0 0 40 40" xmlns="http://www.w3.org/2000/svg" class="check_inline__icon checkbox">
                                                                            <rect class="checkbox__rect" width="100%" height="100%"></rect>
                                                                            <polyline class="checkbox__checked" points="11,20.053 16.964,26.018 30.385,12.598"></polyline>
                                                                        </svg>
                                                                        <span class="check_inline__text">Пассажирский</span>
                                                                    </label>
                                                                </div>
                                                                <div class="check_inline__one">
                                                                    <input type="checkbox" class="check_inline__input" name="check_inline32" value="check_inline322" id="radio_29">
                                                                    <label for="radio_29" class="check_inline__label">
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
                                            </div>
                                            
                                            <div class=" move_config">
                                                <div class="move_config__head">
                                                    <div class="move_config__left">
                                                        <p class="move_config__spoiler_title">Услуга:</p>
                                                    </div>
                                                </div>
                                                <div class="move_config__wrap">
                                                    <div class="service">
                                                        <div class="checked">
                                                            <div class="checked__list">
                                                                <div class="checked__item service__item">
                                                                    <input type="checkbox" class="checked__radio service__radio" name="move_step1__service" value="service1" id="service1" onchange="checkHiddenBox(this)" data-check-hidden="id11">
                                                                    <label for="service1" class="checked__label service__label">
                                                                        <svg xmlns="http://www.w3.org/2000/svg" width="262" height="111" viewBox="0 0 262 111" class="move_pic">
                                                                            <g fill="#FFF" fill-rule="evenodd" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
                                                                                <path class="move_pic__green" d="M86.11 109.982h32.175V60.681H86.11z"/>
                                                                                <path class="move_pic__green" d="M173.295 38.884H111.54c-7.452 0-13.493 6.042-13.493 13.493v8.304M173.295 70.022h-55.01M173.295 93.894h-55.01M173.295 101.679h-55.01M228.305 109.982h32.176V60.681h-32.176z"/>
                                                                                <path class="move_pic__green" d="M173.295 38.884h61.757c7.452 0 13.493 6.042 13.493 13.493v8.304M173.295 70.022h55.01M173.295 93.894h55.01M173.295 101.679h55.01"/>
                                                                                <path class="move_pic__gray" d="M1 101.68h62.275v-41H1zM63.276 81.18H1M40.442 91.69H23.834M40.442 70.671H23.834M8.785 109.982v-8.303M55.491 109.982v-8.303"/>
                                                                                <path class="move_pic__orange" d="M44.419 60.68a16.013 16.013 0 0 0 3.807-10.378c0-8.885-7.203-16.088-16.088-16.088-8.885 0-16.088 7.203-16.088 16.088 0 3.957 1.435 7.576 3.806 10.379h24.563zM63.276 34.214H1L8.785 7.227H55.49zM32.138 7.227V1"/>
                                                                                <path class="move_pic__green" d="M173.295 38.884v62.795"/>
                                                                            </g>
                                                                        </svg>
                                                                        <span class="service__item_text">Погрузо-разгрузочные работы</span>
                                                                    </label>
                                                                </div>
                                                                <div class="checked__item service__item">
                                                                    <input type="checkbox" class="checked__radio service__radio" name="move_step1__service" value="service2" id="service2">
                                                                    <label for="service2" class="checked__label service__label">
                                                                        <svg xmlns="http://www.w3.org/2000/svg" width="199" height="128" viewBox="0 0 199 128" class="move_pic">
                                                                            <g fill="#FFF" fill-rule="evenodd" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
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
                                                                        <span class="service__item_text">Сборка-разборка мебели</span>
                                                                    </label>
                                                                </div>
                                                                <div class="checked__item service__item">
                                                                    <input type="checkbox" class="checked__radio service__radio" name="move_step1__service" value="service3" id="service3">
                                                                    <label for="service3" class="checked__label service__label">
                                                                        <svg xmlns="http://www.w3.org/2000/svg" width="244" height="131" viewBox="0 0 244 131" class="move_pic">
                                                                            <g fill="#FFF" fill-rule="evenodd" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
                                                                                <path class="move_pic__green" d="M26.649 112.33c-.381-2.614-3.523-4.349-5.958-3.757-3.97.965-4.259 4.924-4.403 6.973.174-.97-6.51-5.888-9.298.424-.496 1.124-.059 4.646 1.39 6.183"/>
                                                                                <path class="move_pic__green" d="M31.606 116.566c0-3.845-1.891-4.405-3.618-4.407-1.338-.001-2.682.428-3.737 1.906-.93 1.303-1.129 4.624-1.129 4.624s-2.192-4.982-6.861-3.146c-2.567 1.009-4.382 3.812-3.837 6.525-2.009-.889-4.585-.207-5.895 1.563-1.31 1.77-1.217 3.77.21 5.443"/>
                                                                                <path class="move_pic__gray" d="M31.606 129.074h119.579V68.679H31.606zM180.868 36.304v42.738"/>
                                                                                <path class="move_pic__gray" d="M91.396 22.58l69.475 46.1H21.92z"/>
                                                                                <path class="move_pic__gray" d="M97.784 26.819l38.665-25.656 52.96 35.142h-77.326z"/>
                                                                                <path class="move_pic__orange" d="M97.784 45.63c0 3.543-2.86 6.413-6.388 6.413-3.529 0-6.389-2.87-6.389-6.414 0-3.543 2.86-6.414 6.39-6.414 3.527 0 6.387 2.87 6.387 6.414zM55.095 61.532h72.601M113.028 27.582h47.842M41.571 129.074h16.371V99.055h-16.37zM57.942 115.494h-5.694M73.957 114.065h39.071V82.259h-39.07zM84.201 82.26v31.806M102.784 82.26v31.806M125.917 97.447h15.125V82.26h-15.125zM145.357 53.082h28.394v-9.63h-28.394zM36.945 92.41h25.624"/>
                                                                                <path class="move_pic__gray" d="M151.185 87.977h64.06v-8.934h-64.06zM205.28 123.714V87.977M151.185 123.714h91.107"/>
                                                                                <path class="move_pic__green" d="M205.28 108.961c0-3.116 3.862-4.967 6.181-5.163 2.318-.196 4.704.943 6.012 2.873 1.818-1.026 4.23-.878 5.908.366s2.528 3.515 2.085 5.562c3.179-1.196 6.956-.63 9.648 1.45 2.691 2.08 3.235 5.912.595 9.664M223.237 106.372c3.048-2.365 7.59-2.562 10.83-.472 1.107.713 2.106 1.75 2.331 3.049.28 1.615-.68 3.159-1.597 4.516M215.206 103.525c.003-1.285.898-2.418 1.96-3.139 2.24-1.52 5.397-1.527 7.645-.017 1.097.738 2.031 2.017 1.724 3.306"/>
                                                                                <path class="move_pic__orange" d="M160.87 123.714h34.724V99.243H160.87zM165.065 111.698H191.4M165.065 117.638H191.4M165.065 105.76H191.4"/>
                                                                                <path class="move_pic__gray" d="M180.868 64.39h27.437M186.563 64.39v13.76M192.257 64.39v13.76M197.951 64.39v13.76M203.645 64.39v13.76M31.606 129.074H1"/>
                                                                            </g>
                                                                        </svg>
                                                                        <span class="service__item_text">Такелажные работы</span>
                                                                    </label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                            <div class="rigging_one" data-check-input="id11">
                                                <div class="rigging_one__wrap rigging_one__wrap-to move_config">
                                                    <div class="move_config__head">
                                                        <div class="move_config__left">
                                                            <p class="move_config__spoiler_title">Погрузо-разгрузочные работы:</p>
                                                        </div>
                                                        <div class="move_config__right">
                                                            <button class="move_config__spoiler" type="button">Свернуть</button>
                                                        </div>
                                                    </div>
                                                    <div class="move_config__content">
                                                        
                                                        <div class="move_config__wrap_to">
                                                            <div class="form">
                                                                <div class="form__row step__form_pt">
                                                                    <div class="form__one form__one-w100">
                                                                        <label for="id14" class="form__label form__label-left">Описание</label>
                                                                        <div class="form__element_box">
                                                                            <textarea class="form__element form__element-input" name="" id="id14" cols="30" rows="4"></textarea>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            
                                                            <div class="additionally__one">
                                                                <p class="additionally__title">Дополнительно:</p>
                                                                <div class="additionally__content">
                                                                    <div class="checked">
                                                                        <div class="checked__list checked__list-rigger">
                                                                            <div class="checked__item checked__item-rigging">
                                                                                <input type="checkbox" class="checked__radio" name="rigging" value="rigging1" id="rigging1" onchange="checkHiddenBox(this)" data-check-hidden="id1">
                                                                                <label for="rigging1" class="checked__label rigger__label">
                                                                                    <span class="rigging__check_title">Пианино</span>
                                                                                    <span class="rigging__check_price">5 750 ₽</span>
                                                                                </label>
                                                                            </div>
                                                                            <div class="checked__item checked__item-rigging">
                                                                                <input type="checkbox" class="checked__radio" name="rigging" value="rigging2" id="rigging2" onchange="checkHiddenBox(this)" data-check-hidden="id2">
                                                                                <label for="rigging2" class="checked__label rigger__label">
                                                                                    <span class="rigging__check_title">Сейф</span>
                                                                                    <span class="rigging__check_price">5 750 ₽</span>
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
                                                        
                                                        <div class="rigging_one" data-check-input="id1">
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
                                                                                <img src="/local/test/img/royal.svg" alt="" class="rigging_one__img">
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
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="move_config__no_hidden move_config__no_hidden-green">
                                                                <div class="total_green">
                                                                    <span class="total_green__text">Итого, стоимость такелажных работ «Пианино»:</span>
                                                                    <span class="total_green__price">5 750 ₽</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        
                                                        
                                                        <div class="rigging_one" data-check-input="id2">
                                                            <div class="rigging_one__wrap move_config">
                                                                <div class="move_config__head">
                                                                    <div class="move_config__left">
                                                                        <p class="move_config__spoiler_title">Настройки – Сейф</p>
                                                                    </div>
                                                                    <div class="move_config__right">
                                                                        <button class="move_config__spoiler" type="button">Свернуть</button>
                                                                    </div>
                                                                </div>
                                                                <div class="move_config__content">
                                                                    <div class="rigging_one__content">
                                                                        <div class="rigging_one__info">
                                                                            <div class="rigging_one__pic">
                                                                                <img src="/local/test/img/safe.svg" alt="" class="rigging_one__img">
                                                                            </div>
                                                                            <div class="rigging_one__context">
                                                                                <p class="rigging_one__name">Сейф</p>
                                                                                <p class="rigging_one__desc">Любой сейф, аккуратно поднимем, вынесем и погрузим. Без единой надорваной спины!</p>
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
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="move_config__no_hidden move_config__no_hidden-green">
                                                                <div class="total_green">
                                                                    <span class="total_green__text">Итого, стоимость такелажных работ «Сейф»:</span>
                                                                    <span class="total_green__price">5 750 ₽</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    
                                                    </div>
                                                </div>
                                            </div>
                                            
                                            
                                            <div class="rigging_one__wrap move_config">
                                                <div class="move_config__head">
                                                    <div class="move_config__left">
                                                        <p class="move_config__spoiler_title">Грузчики <span class="move_config__spoiler_gray">— Наши рекомендации:</span></p>
                                                    </div>
                                                    <div class="move_config__right">
                                                        <button class="move_config__spoiler" type="button">Свернуть</button>
                                                    </div>
                                                </div>
                                                <div class="move_config__content">
                                                    <div class="rigging_one__content default_content">
                                                        <div class="default_content__left">
                                                            <div class="default_content__pic"><img src="/local/test/img/deliveryboy4.svg" alt="" class="default_content__img"></div>
                                                            <div class="default_content__desc">
                                                                <p class="default_content__text">Наши специалисты могут вытащить и затащить любой предмет из вашей квартиры, офиса или дома.</p>
                                                            </div>
                                                        </div>
                                                        <div class="default_content__right">
                                                            <div class="one_default">
                                                                <p class="one_default__title">Грузчик-специалист:</p>
                                                                <div class="one_default__text_box one_default__text_box-flex">
                                                                    <p class="one_default__text">2 грузчика</p>
                                                                </div>
                                                            </div>
                                                            <div class="one_default">
                                                                <p class="one_default__title">Основное время:</p>
                                                                <div class="one_default__text_box one_default__text_box-flex">
                                                                    <p class="one_default__text">6 часов – 6000 ₽</p>
                                                                    <span class="one_default__tooltip tooltip" title="srgdsf">?</span>
                                                                </div>
                                                            </div>
                                                            <div class="one_default">
                                                                <p class="one_default__title">Дополнительное время:</p>
                                                                <div class="one_default__text_box one_default__text_box-flex">
                                                                    <p class="one_default__text">2 часа – 2000 ₽</p>
                                                                    <span class="one_default__tooltip tooltip" title="srgdsf">?</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="move_config__no_hidden move_config__no_hidden-green">
                                                <div class="total_green">
                                                    <span class="total_green__text">Итого, стоимость такелажных работ «Сейф»:</span>
                                                    <span class="total_green__price">5 750 ₽</span>
                                                </div>
                                            </div>
                                            
                                            
                                            <div class="move_config">
                                                <div class="move_config__head move_config__head-pt">
                                                    <div class="move_config__left">
                                                        <p class="move_config__spoiler_title">Контакты по данному адресу:</p>
                                                    </div>
                                                </div>
                                                <div class="move_config__wrap">
                                                    <div class="additionally__content">
                                                        <div class="form">
                                                            <div class="form__row step__form_pt">
                                                                <div class="form__one form__one-w50">
                                                                    <label for="id15" class="form__label form__label-left">Имя</label>
                                                                    <div class="form__element_box">
                                                                        <input type="text" id="id15" value="" class="form__element form__element-input" required="">
                                                                    </div>
                                                                </div>
                                                                <div class="form__one form__one-w50">
                                                                    <label for="id24" class="form__label form__label-left">Телефон</label>
                                                                    <div class="form__element_box">
                                                                        <input type="tel" id="id24" value="" class="form__element form__element-input" required="">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="form__row step__form_pt">
                                                                <div class="form__one form__one-w100">
                                                                    <label for="id14" class="form__label form__label-left">Комментарий</label>
                                                                    <div class="form__element_box">
                                                                        <textarea class="form__element form__element-input" name="" id="id34" cols="30" rows="5"></textarea>
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
                                            <span class="total_green__text">Общая стоимость по данному адресу:</span>
                                            <span class="total_green__price">39 985 ₽</span>
                                        </div>
                                    </div>
                                    
                                    
                                    <div class="move_step__buttons move_step1__buttons">
                                        <button class="move_step__btn btn btn-white" type="button">Вызвать замерщика?</button>
                                        <button class="move_step__btn btn btn-white" type="button">+ Добавить адрес</button>
                                        <button class="move_step__btn btn" type="button" onClick='location.href="/loader/step2.php"'>Далее</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="page_steps__sidebar sidebar">
                        <div class="ready_made">
                            <p class="ready_made__title sidebar__title sidebar__title-gray">Готовые решения</p>
                            <div class="ready_made__list">
                                <div class="ready_made__item ready_item">
                                    <p class="ready_item__name">Переезд квартира-студия</p>
                                    <ul class="ready_item__list">
                                        <li class="ready_item__item">Машина на Х часов</li>
                                        <li class="ready_item__item">Необходимая упаковка</li>
                                    </ul>
                                    <p class="ready_item__price">от 2 999 ₽</p>
                                    <div class="ready_item__btn"><a href="" class="btn btn-white">Подробнее</a></div>
                                </div>
                                <div class="ready_made__item ready_item">
                                    <p class="ready_item__name">Однокомнатная квартира</p>
                                    <ul class="ready_item__list">
                                        <li class="ready_item__item">Машина на 6 часов</li>
                                        <li class="ready_item__item">Необходимая упаковка</li>
                                        <li class="ready_item__item">4 грузчика</li>
                                        <li class="ready_item__item">Средняя загруженность</li>
                                    </ul>
                                    <p class="ready_item__price">от 2 999 ₽</p>
                                    <div class="ready_item__btn"><a href="" class="btn btn-white">Подробнее</a></div>
                                </div>
                                <div class="ready_made__item ready_item">
                                    <p class="ready_item__name">Переезд квартира-студия</p>
                                    <ul class="ready_item__list">
                                        <li class="ready_item__item">Машина на Х часов</li>
                                        <li class="ready_item__item">Необходимая упаковка</li>
                                    </ul>
                                    <p class="ready_item__price">от 2 999 ₽</p>
                                    <div class="ready_item__btn"><a href="" class="btn btn-white">Подробнее</a></div>
                                </div>
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