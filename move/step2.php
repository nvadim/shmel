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
				<img class="logo__img logo__img-desktop" src="/local/test/img/logo.svg" onerror="this.onerror=null; this.src='img/logo.png'" alt="" width="100">
				<img class="logo__img logo__img-mobile" src="/local/test/img/logo_mobile.svg" onerror="this.onerror=null; this.src='img/logo_mobile.png'" alt="" width="100">
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
				<span class="navigation__link navigation__link-active">Переезд</span>
                <a href="/transport/" class="navigation__link">Транспортные услуги</a>
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
						<p class="title title-left title-not_before">Переезд</p>
						<div class="move_calc">
							<form action="" method="get" class="move_calc__form">
								<div class="nav_step" style="margin-bottom: 30px;">
									<div class="nav_step__line">
										<div class="nav_step__line_orange nav_step__line_orange-step2"></div>
									</div>
									<div class="nav_step__nav">
										<div class="nav_step__item nav_step__item-active">
											<div class="nav_step__icon"></div>
											<p class="nav_step__text">Выбор услуги</p>
										</div>
										<div class="nav_step__item nav_step__item-active">
											<div class="nav_step__icon"></div>
											<p class="nav_step__text">Выбор маршрута</p>
										</div>
										<div class="nav_step__item">
											<div class="nav_step__icon"></div>
											<p class="nav_step__text">Параметры</p>
										</div>
										<div class="nav_step__item">
											<div class="nav_step__icon"></div>
											<p class="nav_step__text">Подтверждение</p>
										</div>
									</div>
								</div>
								<div class="move_step move_step-active move_step2">
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
									<div class="move_step2__mapping mapping">
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
									<div class="move_step2__maps maps">
										<p class="move_step_title">Маршрут на карте:</p>
										<p class="maps__approximate_text">Ориентировочное время по маршруту: <span class="maps__approximate">2 часа 47 минут</span>
										</p>
										<p class="maps__approximate_desc">Реальное время следования по выбранному маршруту на дату заказа может
											отличаться от рассчетной.</p>
										<div class="maps__map">
											<img src="/local/test/img/map.png" alt="" class="maps__img">
										</div>
									</div>
									<div class="move_step__buttons move_step1__buttons">
										<button class="move_step__btn btn btn-white">Вызвать замерщика</button>
										<button class="move_step__btn btn" type="button" onClick='location.href="./step3.php"'>
											Далее
										</button>
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