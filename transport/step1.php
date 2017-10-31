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
        <div class="page_steps">
            <div class="box">
                <div class="page_steps__wrap">
                    <div class="page_steps__content">
                        <p class="title title-left title-not_before">Рассчет перевозки</p>
                        <div class="move_calc">
                            <form action="" method="get" class="move_calc__form">
                                
                                <div class="move_step move_step-active loaders_step">
                                    
                                    <div class="move_step3__item move_config">
                                        <div class="move_config__head">
                                            <div class="move_config__left">
                                                <p class="move_config__spoiler_title move_config__spoiler_title-custom">Выбор маршрута:
                                                    <button class="move_config__btn_default btn btn-white" type="button">Удалить данный маршрут</button>
                                                </p>
                                            </div>
                                            <div class="move_config__right">
                                                <button class="move_config__spoiler move_config__spoiler-active" type="button">Свернуть</button>
                                            </div>
                                            <div class="move_config__head_mobile">
                                                <button class="move_config__btn_default btn btn-white" type="button">Удалить данный маршрут</button>
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
                                                <div class="move_step2__date">
                                                    <span class="move_step2__date_text">Время подачи:</span>
                                                    <input type="text" class="move_step2__date_input date__steps input_date"/>
                                                </div>
                                                <div class=" mapping">
                                                    <div class="mapping__one">
                                                        <span class="mapping__text">Старт:</span>
                                                        <span class="mapping__point_box">
                                                    <span class="mapping__point mapping__point-start">1</span>
                                                </span>
                                                        <input type="text" class="mapping__input" value="Москва, Огородный проезд 3 к.2">
                                                    </div>
                                                    <div class="mapping__one">
                                                        <span class="mapping__text">&nbsp;</span>
                                                        <span class="mapping__point_box">
                                                    <span class="mapping__point">2</span>
                                                </span>
                                                        <input type="text" class="mapping__input" value="Москва, ул. Яблочкова д.18 к.3">
                                                        <button class="mapping__delete" type="button">Удалить</button>
                                                    </div>
                                                    <div class="mapping__one">
                                                        <span class="mapping__text">&nbsp;</span>
                                                        <span class="mapping__point_box">
                                                    <span class="mapping__point mapping__point-none mapping__point-orange"></span>
                                                </span>
                                                        <button class="mapping__add btn btn-white" type="button">+ Добавить промежуточный адрес</button>
                                                    </div>
                                                    <div class="mapping__one mapping__one-finish">
                                                        <span class="mapping__text">Куда:</span>
                                                        <span class="mapping__point_box">
                                                    <span class="mapping__point mapping__point-finish">3</span>
                                                </span>
                                                        <input type="text" class="mapping__input" value="Москва, Бумажный проезд 14 с1">
                                                    </div>
                                                    <div class="mapping__one">
                                                        <span class="mapping__text">&nbsp;</span>
                                                        <span class="mapping__point_box">
                                                    <span class="mapping__point mapping__point-none mapping__point-green"></span>
                                                </span>
                                                        <button class="mapping__add btn btn-white" type="button">+ Добавить промежуточный адрес</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="move_config__content">
                                            
                                            <div class="rigging_one__wrap rigging_one__wrap-to move_step3__item-transport move_config" id="qw4">
                                                <div class="move_config__head">
                                                    <div class="move_config__left">
                                                        <p class="move_config__spoiler_title move_config__spoiler_title-custom">Транспорт:
                                                        </p>
                                                    </div>
                                                    <div class="move_config__right">
                                                        <button class="move_config__spoiler" type="button">Свернуть</button>
                                                    </div>
                                                </div>
                                                <div class="move_config__content">
                                                    <div class="choice_transport">
                                                        <div class="choice_transport__head">
                                                            <p class="choice_transport__title">Выберите транспорт:</p>
                                                        </div>
                                                        <div class="choice_transport__content">
                                                            <div class="choice_transport__list">
                                                                <div class="choice_transport__item choice_item">
                                                                    <div class="choice_item__pic"><img src="/local/test/img/1cat.svg" alt="" class="choice_item__img" width="90"></div>
                                                                    <div class="choice_item__info">
                                                                        <div class="choice_item__info_one">
                                                                            <img src="/local/test/img/vol.svg" alt="" class="choice_item__info_img">
                                                                            <span class="choice_item__info_text">9м³</span>
                                                                        </div>
                                                                        <div class="choice_item__info_one">
                                                                            <img src="/local/test/img/weight.svg" alt="" class="choice_item__info_img">
                                                                            <span class="choice_item__info_text">1.5т</span>
                                                                        </div>
                                                                    </div>
                                                                    <p class="choice_item__name">1-я категория</p>
                                                                    <div class="choice_item__prices">
                                                                        <div class="choice_item__day">
                                                                            <div class="choice_item__day_pic">
                                                                                <svg width="20px" height="20px" viewBox="0 0 27 27" xmlns="http://www.w3.org/2000/svg" class="day_pic">
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
                                                                            </div>
                                                                            <div class="choice_item__day_text">2000 ₽/час</div>
                                                                        </div>
                                                                        <div class="choice_item__night">
                                                                            <div class="choice_item__day_pic">
                                                                                <svg width="14" height="13" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 22.64 22.38" class="day_pic">
                                                                                    <path class="day_pic__path" d="M15.25,17.11A10.18,10.18,0,0,1,7,1,10.75,10.75,0,1,0,21.64,14.86,10.14,10.14,0,0,1,15.25,17.11Z"/>
                                                                                </svg>
                                                                            </div>
                                                                            <div class="choice_item__day_text">1000 ₽/час</div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="choice_item__pass">
                                                                        <div class="pass">
                                                                            <img src="/local/test/img/propusk.svg" alt="" class="pass__img">
                                                                            <span class="pass__text">Пропуск в центр</span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="choice_item__button">
                                                                        <button class="choice_item__btn btn btn-white">+ добавить</button>
                                                                    </div>
                                                                </div>
                                                                <div class="choice_transport__item choice_item">
                                                                    <div class="choice_item__pic"><img src="/local/test/img/2cat.svg" alt="" class="choice_item__img" width="100"></div>
                                                                    <div class="choice_item__info">
                                                                        <div class="choice_item__info_one">
                                                                            <img src="/local/test/img/vol.svg" alt="" class="choice_item__info_img">
                                                                            <span class="choice_item__info_text">9м³</span>
                                                                        </div>
                                                                        <div class="choice_item__info_one">
                                                                            <img src="/local/test/img/weight.svg" alt="" class="choice_item__info_img">
                                                                            <span class="choice_item__info_text">1.5т</span>
                                                                        </div>
                                                                    </div>
                                                                    <p class="choice_item__name">2-я категория</p>
                                                                    <div class="choice_item__prices">
                                                                        <div class="choice_item__day">
                                                                            <div class="choice_item__day_pic">
                                                                                <svg width="20px" height="20px" viewBox="0 0 27 27" xmlns="http://www.w3.org/2000/svg" class="day_pic">
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
                                                                            </div>
                                                                            <div class="choice_item__day_text">2000 ₽/час</div>
                                                                        </div>
                                                                        <div class="choice_item__night">
                                                                            <div class="choice_item__day_pic">
                                                                                <svg width="14" height="13" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 22.64 22.38" class="day_pic">
                                                                                    <path class="day_pic__path" d="M15.25,17.11A10.18,10.18,0,0,1,7,1,10.75,10.75,0,1,0,21.64,14.86,10.14,10.14,0,0,1,15.25,17.11Z"/>
                                                                                </svg>
                                                                            </div>
                                                                            <div class="choice_item__day_text">1000 ₽/час</div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="choice_item__pass">
                                                                        <div class="pass">
                                                                            <img src="/local/test/img/propusk.svg" alt="" class="pass__img">
                                                                            <span class="pass__text">Пропуск в центр</span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="choice_item__button">
                                                                        <button class="choice_item__btn btn btn-white">+ добавить</button>
                                                                    </div>
                                                                </div>
                                                                <div class="choice_transport__item choice_item">
                                                                    <div class="choice_item__pic"><img src="/local/test/img/3cat.svg" alt="" class="choice_item__img" width="111"></div>
                                                                    <div class="choice_item__info">
                                                                        <div class="choice_item__info_one">
                                                                            <img src="/local/test/img/vol.svg" alt="" class="choice_item__info_img">
                                                                            <span class="choice_item__info_text">9м³</span>
                                                                        </div>
                                                                        <div class="choice_item__info_one">
                                                                            <img src="/local/test/img/weight.svg" alt="" class="choice_item__info_img">
                                                                            <span class="choice_item__info_text">1.5т</span>
                                                                        </div>
                                                                    </div>
                                                                    <p class="choice_item__name">3-я категория</p>
                                                                    <div class="choice_item__prices">
                                                                        <div class="choice_item__day">
                                                                            <div class="choice_item__day_pic">
                                                                                <svg width="20px" height="20px" viewBox="0 0 27 27" xmlns="http://www.w3.org/2000/svg" class="day_pic">
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
                                                                            </div>
                                                                            <div class="choice_item__day_text">2000 ₽/час</div>
                                                                        </div>
                                                                        <div class="choice_item__night">
                                                                            <div class="choice_item__day_pic">
                                                                                <svg width="14" height="13" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 22.64 22.38" class="day_pic">
                                                                                    <path class="day_pic__path" d="M15.25,17.11A10.18,10.18,0,0,1,7,1,10.75,10.75,0,1,0,21.64,14.86,10.14,10.14,0,0,1,15.25,17.11Z"/>
                                                                                </svg>
                                                                            </div>
                                                                            <div class="choice_item__day_text">1000 ₽/час</div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="choice_item__pass">
                                                                        <div class="pass">
                                                                            <img src="/local/test/img/propusk.svg" alt="" class="pass__img">
                                                                            <span class="pass__text">Пропуск в центр</span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="choice_item__button">
                                                                        <button class="choice_item__btn btn btn-white">+ добавить</button>
                                                                    </div>
                                                                </div>
                                                                <div class="choice_transport__item choice_item">
                                                                    <div class="choice_item__pic"><img src="/local/test/img/5cat.svg" alt="" class="choice_item__img" width="111"></div>
                                                                    <div class="choice_item__info">
                                                                        <div class="choice_item__info_one">
                                                                            <img src="/local/test/img/vol.svg" alt="" class="choice_item__info_img">
                                                                            <span class="choice_item__info_text">9м³</span>
                                                                        </div>
                                                                        <div class="choice_item__info_one">
                                                                            <img src="/local/test/img/weight.svg" alt="" class="choice_item__info_img">
                                                                            <span class="choice_item__info_text">1.5т</span>
                                                                        </div>
                                                                    </div>
                                                                    <p class="choice_item__name">5-я категория</p>
                                                                    <div class="choice_item__prices">
                                                                        <div class="choice_item__day">
                                                                            <div class="choice_item__day_pic">
                                                                                <svg width="20px" height="20px" viewBox="0 0 27 27" xmlns="http://www.w3.org/2000/svg" class="day_pic">
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
                                                                            </div>
                                                                            <div class="choice_item__day_text">2000 ₽/час</div>
                                                                        </div>
                                                                        <div class="choice_item__night">
                                                                            <div class="choice_item__day_pic">
                                                                                <svg width="14" height="13" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 22.64 22.38" class="day_pic">
                                                                                    <path class="day_pic__path" d="M15.25,17.11A10.18,10.18,0,0,1,7,1,10.75,10.75,0,1,0,21.64,14.86,10.14,10.14,0,0,1,15.25,17.11Z"/>
                                                                                </svg>
                                                                            </div>
                                                                            <div class="choice_item__day_text">1000 ₽/час</div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="choice_item__pass">
                                                                        <div class="pass">
                                                                            <img src="/local/test/img/propusk.svg" alt="" class="pass__img">
                                                                            <span class="pass__text">Пропуск в центр</span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="choice_item__button">
                                                                        <button class="choice_item__btn btn btn-white">+ добавить</button>
                                                                    </div>
                                                                </div>
                                                                <div class="choice_transport__item choice_item">
                                                                    <div class="choice_item__pic"><img src="/local/test/img/6cat.svg" alt="" class="choice_item__img" width="130"></div>
                                                                    <div class="choice_item__info">
                                                                        <div class="choice_item__info_one">
                                                                            <img src="/local/test/img/vol.svg" alt="" class="choice_item__info_img">
                                                                            <span class="choice_item__info_text">9м³</span>
                                                                        </div>
                                                                        <div class="choice_item__info_one">
                                                                            <img src="/local/test/img/weight.svg" alt="" class="choice_item__info_img">
                                                                            <span class="choice_item__info_text">1.5т</span>
                                                                        </div>
                                                                    </div>
                                                                    <p class="choice_item__name">6-я категория</p>
                                                                    <div class="choice_item__prices">
                                                                        <div class="choice_item__day">
                                                                            <div class="choice_item__day_pic">
                                                                                <svg width="20px" height="20px" viewBox="0 0 27 27" xmlns="http://www.w3.org/2000/svg" class="day_pic">
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
                                                                            </div>
                                                                            <div class="choice_item__day_text">2000 ₽/час</div>
                                                                        </div>
                                                                        <div class="choice_item__night">
                                                                            <div class="choice_item__day_pic">
                                                                                <svg width="14" height="13" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 22.64 22.38" class="day_pic">
                                                                                    <path class="day_pic__path" d="M15.25,17.11A10.18,10.18,0,0,1,7,1,10.75,10.75,0,1,0,21.64,14.86,10.14,10.14,0,0,1,15.25,17.11Z"/>
                                                                                </svg>
                                                                            </div>
                                                                            <div class="choice_item__day_text">1000 ₽/час</div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="choice_item__pass">
                                                                        <div class="pass">
                                                                            <img src="/local/test/img/propusk.svg" alt="" class="pass__img">
                                                                            <span class="pass__text">Пропуск в центр</span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="choice_item__button">
                                                                        <button class="choice_item__btn btn btn-white">+ добавить</button>
                                                                    </div>
                                                                </div>
                                                                <div class="choice_transport__item choice_item">
                                                                    <div class="choice_item__pic"><img src="/local/test/img/7cat.svg" alt="" class="choice_item__img" width="140"></div>
                                                                    <div class="choice_item__info">
                                                                        <div class="choice_item__info_one">
                                                                            <img src="/local/test/img/vol.svg" alt="" class="choice_item__info_img">
                                                                            <span class="choice_item__info_text">9м³</span>
                                                                        </div>
                                                                        <div class="choice_item__info_one">
                                                                            <img src="/local/test/img/weight.svg" alt="" class="choice_item__info_img">
                                                                            <span class="choice_item__info_text">1.5т</span>
                                                                        </div>
                                                                    </div>
                                                                    <p class="choice_item__name">7-я категория</p>
                                                                    <div class="choice_item__prices">
                                                                        <div class="choice_item__day">
                                                                            <div class="choice_item__day_pic">
                                                                                <svg width="20px" height="20px" viewBox="0 0 27 27" xmlns="http://www.w3.org/2000/svg" class="day_pic">
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
                                                                            </div>
                                                                            <div class="choice_item__day_text">2000 ₽/час</div>
                                                                        </div>
                                                                        <div class="choice_item__night">
                                                                            <div class="choice_item__day_pic">
                                                                                <svg width="14" height="13" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 22.64 22.38" class="day_pic">
                                                                                    <path class="day_pic__path" d="M15.25,17.11A10.18,10.18,0,0,1,7,1,10.75,10.75,0,1,0,21.64,14.86,10.14,10.14,0,0,1,15.25,17.11Z"/>
                                                                                </svg>
                                                                            </div>
                                                                            <div class="choice_item__day_text">1000 ₽/час</div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="choice_item__pass">
                                                                        <div class="pass">
                                                                            <img src="/local/test/img/propusk.svg" alt="" class="pass__img">
                                                                            <span class="pass__text">Пропуск в центр</span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="choice_item__button">
                                                                        <button class="choice_item__btn btn btn-white">+ добавить</button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="custom_content">
                                                        <div class="custom_content__title_box custom_title_box">
                                                            <div class="custom_title_box__left">
                                                                <span class="custom_title_box__number">Автомобиль-1:</span>
                                                                <span class="custom_title_box__title">1-я категория (до 1,5 тонн, до 9м³)</span>
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
                                                                <div class="default_content__pic"><img src="/local/test/img/1-cat-1.svg" alt="" class="default_content__img"></div>
                                                                <div class="default_content__desc">
                                                                    <p class="default_content__text">Грузоподъёмность, т: <span>1,50</span></p>
                                                                    <p class="default_content__text">Полезный объем, м³: <span>9,00</span></p>
                                                                    <div class="default_content__pass pass">
                                                                        <img src="/local/test/img/propusk.svg" alt="" class="pass__img">
                                                                        <span class="pass__text">Пропуск в центр</span>
                                                                    </div>
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
                                                                                <span class="custom_time_add__price">+500</span>
                                                                                <span class="custom_time_add__currency">₽</span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <p class="custom_time_add__desc">* Стоимость каждого последующего часа 500₽</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="custom_content custom_content-off">
                                                        <div class="custom_content__title_box custom_title_box">
                                                            <div class="custom_title_box__left">
                                                                <span class="custom_title_box__number">Автомобиль-1:</span>
                                                                <span class="custom_title_box__title">1-я категория (до 1,5 тонн, до 9м³)</span>
                                                            </div>
                                                            <div class="custom_title_box__right">
                                                                <div class="custom_title_box__deactivate">
                                                                    <div class="switcher">
                                                                        <input type="checkbox" class="switcher__checkbox" id="switcher1" name="switcher1" onchange="disabledCustomBlock('.custom_content','custom_content-off');">
                                                                        <label for="switcher1" class="switcher__container">
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
                                                                <div class="default_content__pic"><img src="/local/test/img/1-cat-1.svg" alt="" class="default_content__img"></div>
                                                                <div class="default_content__desc">
                                                                    <p class="default_content__text">Грузоподъёмность, т: <span>1,50</span></p>
                                                                    <p class="default_content__text">Полезный объем, м³: <span>9,00</span></p>
                                                                    <div class="default_content__pass pass">
                                                                        <img src="/local/test/img/propusk.svg" alt="" class="pass__img">
                                                                        <span class="pass__text">Пропуск в центр</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="default_content__right">
                                                                <div class="default_content__times_day times_day">
                                                                    <div class="times_day__one">
                                                                        <input type="radio" class="times_day__radio" name="times_day1" value="times_day2" id="times_day2" checked>
                                                                        <label for="times_day2" class="times_day__label">
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
                                                                        <input type="radio" class="times_day__radio" name="times_day1" value="times_day3" id="times_day3">
                                                                        <label for="times_day3" class="times_day__label">
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
                                                                                <input type="radio" class="checked__radio" name="custom_time2" value="custom_time4" checked id="custom_time4" data-time-price="4000" onchange="checkCustomTime(this);">
                                                                                <label for="custom_time4" class="checked__label rooms__label">4</label>
                                                                            </div>
                                                                            <div class="checked__item">
                                                                                <input type="radio" class="checked__radio" name="custom_time2" value="custom_time5" id="custom_time5" data-time-price="6000" onchange="checkCustomTime(this);">
                                                                                <label for="custom_time5" class="checked__label rooms__label">6</label>
                                                                            </div>
                                                                            <div class="checked__item">
                                                                                <input type="radio" class="checked__radio" name="custom_time2" value="custom_time6" id="custom_time6" data-time-price="8000" onchange="checkCustomTime(this);">
                                                                                <label for="custom_time6" class="checked__label rooms__label">8</label>
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
                                                                                <span class="custom_time_add__price">+500</span>
                                                                                <span class="custom_time_add__currency">₽</span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <p class="custom_time_add__desc">* Стоимость каждого последующего часа 500₽</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="total_transport">
                                                        <p class="total_transport__text">Автомобиль 1: <b>4 500 ₽</b></p>
                                                        <p class="total_transport__text total_transport__text-disable">Автомобиль 2: <b>15 000 ₽</b></p>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                            <div class="move_config__no_hidden move_config__no_hidden-green">
                                                <div class="total_green">
                                                    <span class="total_green__text">Итого, стоимость аренды транспорта:</span>
                                                    <span class="total_green__price">19 500 ₽</span>
                                                </div>
                                            </div>
                                            
                                            <div class="rigging_one__wrap rigging_one__wrap-to move_step3__item-transport move_config">
                                                <div class="move_config__head">
                                                    <div class="move_config__left">
                                                        <p class="move_config__spoiler_title move_config__spoiler_title-custom">Грузчики:
                                                        </p>
                                                    </div>
                                                    <div class="move_config__right">
                                                        <button class="move_config__spoiler" type="button">Свернуть</button>
                                                    </div>
                                                </div>
                                                <div class="move_config__content">
                                                    <div class="custom_content">
                                                        <div class="custom_content__title_box custom_title_box">
                                                            <div class="custom_title_box__left">
                                                                <span class="custom_title_box__number">Грузчики 1:</span>
                                                                <span class="custom_title_box__title">Грузчик-специалист</span>
                                                            </div>
                                                            <div class="custom_title_box__right">
                                                                <button class="custom_title_box__delete" type="button" onclick="deleteNode('.custom_content');">Удалить</button>
                                                            </div>
                                                        </div>
                                                        <div class="default_content">
                                                            <div class="default_content__left">
                                                                <div class="default_content__pic"><img src="/local/test/img/deliveryboy4.svg" alt="" class="default_content__img"></div>
                                                                <div class="default_content__desc">
                                                                    <p class="default_content__text">Наши специалисты могут вытащить и затащить любой предмет из вашей квартиры, офиса или дома.</p>
                                                                </div>
                                                            </div>
                                                            <div class="default_content__right">
                                                                <div class="custom_content__cnt">
                                                                    <div class="custom_content__cnt_text">Кол-во человек:</div>
                                                                    <div class="custom_content__cnt_goods">
                                                                        <div class="numGoods">
                                                                            <span class="numGoods__btn numGoods__minus">-</span>
                                                                            <input type="text" value="1" name="ORDER_PROP_20" class="numGoods__input">
                                                                            <span class="numGoods__btn numGoods__plus">+</span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="default_content__times_day times_day">
                                                                    <div class="times_day__one">
                                                                        <input type="radio" class="times_day__radio" name="times_day2" value="times_day0" id="times_day0" checked>
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
                                                                        <input type="radio" class="times_day__radio" name="times_day2" value="times_day1" id="times_day1">
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
                                                                                <span class="custom_time_add__price">+500</span>
                                                                                <span class="custom_time_add__currency">₽</span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <p class="custom_time_add__desc">* Стоимость каждого последующего часа 500₽</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="custom_content">
                                                        <div class="custom_content__title_box custom_title_box">
                                                            <div class="custom_title_box__left">
                                                                <span class="custom_title_box__number">Грузчики 2:</span>
                                                                <span class="custom_title_box__title">Грузчик на склад</span>
                                                            </div>
                                                            <div class="custom_title_box__right">
                                                                <button class="custom_title_box__delete" type="button" onclick="deleteNode('.custom_content');">Удалить</button>
                                                            </div>
                                                        </div>
                                                        <div class="default_content">
                                                            <div class="default_content__left">
                                                                <div class="default_content__pic"><img src="/local/test/img/deliveryboy4.svg" alt="" class="default_content__img"></div>
                                                                <div class="default_content__desc">
                                                                    <p class="default_content__text">Наши специалисты могут вытащить и затащить любой предмет из вашей квартиры, офиса или дома.</p>
                                                                </div>
                                                            </div>
                                                            <div class="default_content__right">
                                                                <div class="custom_content__cnt">
                                                                    <div class="custom_content__cnt_text">Кол-во человек:</div>
                                                                    <div class="custom_content__cnt_goods">
                                                                        <div class="numGoods">
                                                                            <span class="numGoods__btn numGoods__minus">-</span>
                                                                            <input type="text" value="1" name="ORDER_PROP_20" class="numGoods__input">
                                                                            <span class="numGoods__btn numGoods__plus">+</span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="default_content__times_day times_day">
                                                                    <div class="times_day__one">
                                                                        <input type="radio" class="times_day__radio" name="times_day" value="times_day0" id="times_day0" checked>
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
                                                                        <input type="radio" class="times_day__radio" name="times_day" value="times_day1" id="times_day1">
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
                                                                                <span class="custom_time_add__price">+500</span>
                                                                                <span class="custom_time_add__currency">₽</span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <p class="custom_time_add__desc">* Стоимость каждого последующего часа 500₽</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="loaders_skill">
                                                        <div class="loaders_skill__one">
                                                            <div class="loaders_skill__pic">
                                                                <img src="/local/test/img/deliveryboy_o.svg" alt="" class="loaders_skill__img">
                                                            </div>
                                                            <div class="loaders_skill__name">Грузчик-специалист</div>
                                                            <div class="loaders_skill__price">1000 ₽/час</div>
                                                            <div class="loaders_skill__button">
                                                                <button class="choice_item__btn btn btn-white" type="button">+ добавить</button>
                                                            </div>
                                                        </div>
                                                        <div class="loaders_skill__one">
                                                            <div class="loaders_skill__pic">
                                                                <img src="/local/test/img/deliveryboy_s.svg" alt="" class="loaders_skill__img">
                                                            </div>
                                                            <div class="loaders_skill__name">Грузчик на склад</div>
                                                            <div class="loaders_skill__price">1000 ₽/час</div>
                                                            <div class="loaders_skill__button">
                                                                <button class="choice_item__btn btn btn-white" type="button">+ добавить</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        
                                        </div>
                                    </div>
                                    <div class="move_config__no_hidden move_config__no_hidden-green">
                                        <div class="total_green">
                                            <span class="total_green__text">Стоимость работы грузчиков:</span>
                                            <span class="total_green__price">9 500 ₽</span>
                                        </div>
                                    </div>
                                    
                                    
                                    <div class="move_step__buttons move_step1__buttons">
                                        <div class="total_buttons">
                                            <p class="total_buttons__text">Общая стоимость перевозки:</p>
                                            <p class="total_buttons__price">39 985 ₽</p>
                                        </div>
                                        <button class="move_step__btn btn btn-white" type="button">+ Добавить маршрут</button>
                                        <button class="move_step__btn btn" type="button" onClick='location.href="/transport/step2.php"'>Оформить заказ</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="page_steps__sidebar sidebar">
                        <div class="ready_made">
                            <p class="ready_made__title sidebar__title sidebar__title-gray">Ограничения для категорий транспорта по Москве:</p>
                            <div class="transport_tabs">
                                <ul class="transport_tabs__links">
                                    <li class="transport_tabs__link">1,2,3 кат.</li>
                                    <li class="transport_tabs__link">5,6 кат.</li>
                                    <li class="transport_tabs__link">7 кат.</li>
                                </ul>
                                <div class="transport_tabs__list">
                                    <div class="transport_tabs__item">
                                        <img src="/local/test/img/group-16.jpg" srcset="/local/test/img/group-16@2x.jpg 2x, /local/test/img/group-16@3x.jpg 3x" class="transport_tabs__img">
                                    </div>
                                    <div class="transport_tabs__item">
                                        <img src="/local/test/img/group-11.jpg" srcset="/local/test/img/group-11@2x.jpg 2x, /local/test/img/group-11@3x.jpg 3x" class="transport_tabs__img">
                                    </div>
                                    <div class="transport_tabs__item">
                                        <img src="/local/test/img/group-18.jpg" srcset="/local/test/img/group-18@2x.jpg 2x, /local/test/img/group-18@3x.jpg 3x" class="transport_tabs__img">
                                    </div>
                                </div>
                            </div>
                            <div class="transport_attention">
                                <p class="transport_attention__title">Внимание!</p>
                                <p class="transport_attention__text">При выборе транспорта обратите внимание на существующие ограничения для передвижения транспорта разных категорий по территории г. Москвы.</p>
                            </div>
                        </div>
                        <div class="tariff_link">
                            <a href="transport_tariff.html" class="tariff_link__a">
                                <span class="tariff_link__pic">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="300" height="84" viewBox="0 0 300.14 83.84" class="move_pic">
                                        <g fill="#FFF" fill-rule="evenodd" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
                                            <path class="move_pic__gray" d="M126.14,77.84V5.92h18.69c14.72,0,23.82,6.23,23.82,18.68,0,0,1.67,21-19,21h-35.4" transform="translate(-0.04 -0.4)"></path>
                                            <path class="move_pic__gray" d="M114.24,61.15h40.21" transform="translate(-0.04 -0.4)"></path>
                                            <path class="move_pic__orange" d="M278.7,42.32a20.44,20.44,0,1,1-20.44-20.44A20.44,20.44,0,0,1,278.7,42.32Z" transform="translate(-0.04 -0.4)"></path>
                                            <path class="move_pic__orange" d="M258.26,72.08V83.24" transform="translate(-0.04 -0.4)"></path>
                                            <path class="move_pic__orange" d="M258.26,1.4V12.55" transform="translate(-0.04 -0.4)"></path>
                                            <path class="move_pic__orange" d="M228.49,42.32H217.34" transform="translate(-0.04 -0.4)"></path>
                                            <path class="move_pic__orange" d="M299.18,42.32H288" transform="translate(-0.04 -0.4)"></path>
                                            <path class="move_pic__orange" d="M237.21,63.36l-7.89,7.89" transform="translate(-0.04 -0.4)"></path>
                                            <path class="move_pic__orange" d="M287.19,13.38l-7.89,7.89" transform="translate(-0.04 -0.4)"></path>
                                            <path class="move_pic__orange" d="M237.21,21.27l-7.89-7.89" transform="translate(-0.04 -0.4)"></path>
                                            <path class="move_pic__orange" d="M287.19,71.25l-7.89-7.89" transform="translate(-0.04 -0.4)"></path>
                                            <path class="move_pic__green" d="M45,64A31.39,31.39,0,0,1,19.44,14.3,33.14,33.14,0,1,0,64.66,57,31.25,31.25,0,0,1,45,64Z" transform="translate(-0.04 -0.4)"></path>
                                        </g>
                                    </svg>
                                </span>
                                <span class="tariff_link__name">Тарифы</span>
                            </a>
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