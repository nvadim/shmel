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
		<div class="move_page">
			<div class="move_page__head">
				<div class="move_page__wrap box">
					<div class="move_page__title move_title">
						<div class="move_title__text_box">
							<p class="move_title__title title title-left title-left_orange">Переезды</p>
							<p class="move_title__text">Чтобы приступить к рассчету, выберите интересующую вас услугу:</p>
						</div>
						<div class="move_title__pic">
							<img src="/local/test/img/deliver_page.svg" class="move_title__img move_title__img-move">
						</div>
					</div>
				</div>
				<div class="move_page__nav_wrap">
					<div class="move_page__nav_box move_nav">
						<div class="move_nav__wrap box">
							<a href="/move/step1.php" class="move_nav__item">
                                <span class="move_nav__pic">
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
                                </span>
								<span class="move_nav__name">Квартирный переезд</span>
							</a>
							<a href="/move/step1.php" class="move_nav__item">
                                <span class="move_nav__pic">
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
                                </span>
								<span class="move_nav__name">Офисный переезд</span>
							</a>
							<a href="/move/step1.php" class="move_nav__item">
                                <span class="move_nav__pic">
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
                                </span>
								<span class="move_nav__name">Дачный переезд</span>
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
                                            <img src="/local/test/img/shares.jpg" class="shыares__img">
                                        </span>
									<span class="shares__content">
                                            <span class="shares__name">Упаковочный материал в подарок!</span>
                                            <span class="shares__text">При заказе такелажных работ на время не менее одного часа</span>
                                        </span>
								</a>
								<a href="#" class="shares__item">
                                        <span class="shares__pic">
                                            <img src="/local/test/img/shares.jpg" class="shares__img">
                                        </span>
									<span class="shares__content">
                                            <span class="shares__name">Упаковочный материал в подарок!</span>
                                            <span class="shares__text">При заказе такелажных работ на время не менее одного часа</span>
                                        </span>
								</a>
								<a href="#" class="shares__item">
                                        <span class="shares__pic">
                                            <img src="/local/test/img/shares.jpg" class="shares__img">
                                        </span>
									<span class="shares__content">
                                            <span class="shares__name">Упаковочный материал в подарок!</span>
                                            <span class="shares__text">При заказе такелажных работ на время не менее одного часа</span>
                                        </span>
								</a>
								<a href="#" class="shares__item">
                                        <span class="shares__pic">
                                            <img src="/local/test/img/shares.jpg" class="shares__img">
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