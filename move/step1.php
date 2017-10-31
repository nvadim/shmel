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
								<div class="nav_step">
									<div class="nav_step__line">
										<div class="nav_step__line_orange nav_step__line_orange-step1"></div>
									</div>
									<div class="nav_step__nav">
										<div class="nav_step__item nav_step__item-active">
											<div class="nav_step__icon"></div>
											<p class="nav_step__text">Выбор услуги</p>
										</div>
										<div class="nav_step__item">
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
								<div class="move_step move_step-active move_step1">
									<script>
                                        // TODO: этот скрипт вынести в ту часть где будет использоваться элемент area__range
                                        $( function() {
                                            // устанавливаем слайдер range, с форматом округления до целого числа
                                            var stepSlider = document.getElementById('area__range');
                                            noUiSlider.create(stepSlider, {
                                                start: [ 45 ],
                                                connect: [true, false],
                                                step: 1,
                                                range: {
                                                    'min': [  1 ],
                                                    'max': [ 700 ]
                                                },
                                                format: wNumb({
                                                    decimals: 0
                                                })
                                            });

                                            // делаем вывод значения range в поле area__title_amount и привязываем обратный апдейт
                                            var inputFormat = document.getElementById('area__title_amount');
                                            stepSlider.noUiSlider.on('update', function( values, handle ) {
                                                inputFormat.value = values[handle];
                                            });
                                            inputFormat.addEventListener('change', function(){
                                                stepSlider.noUiSlider.set(this.value);
                                            });
                                        } );
									</script>
									<div class="move_step1__service service">
										<p class="move_step_title">Услуга:</p>
										<div class="checked">
											<div class="checked__list">
												<div class="checked__item service__item">
													<input type="radio" class="checked__radio service__radio" name="move_step1__service" value="service1" id="service1">
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
														<span class="service__item_text">Квартирный переезд</span>
													</label>
												</div>
												<div class="checked__item service__item">
													<input type="radio" class="checked__radio service__radio" name="move_step1__service" value="service2" id="service2">
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
														<span class="service__item_text">Офисный переезд</span>
													</label>
												</div>
												<div class="checked__item service__item">
													<input type="radio" class="checked__radio service__radio" name="move_step1__service" value="service3" id="service3">
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
														<span class="service__item_text">Дачный переезд</span>
													</label>
												</div>
											</div>
										</div>
									</div>
									<div class="move_step1__rooms rooms">
										<p class="move_step_title">Количество комнат:</p>
										<div class="checked">
											<div class="checked__list">
												<div class="checked__item">
													<input type="radio" class="checked__radio" name="move_step1__rooms" value="rooms1" id="rooms1">
													<label for="rooms1" class="checked__label rooms__label"><span class="rooms__small_text">Студия</span></label>
												</div>
												<div class="checked__item">
													<input type="radio" class="checked__radio" name="move_step1__rooms" value="rooms2" id="rooms2">
													<label for="rooms2" class="checked__label rooms__label">1</label>
												</div>
												<div class="checked__item">
													<input type="radio" class="checked__radio" name="move_step1__rooms" value="rooms3" id="rooms3">
													<label for="rooms3" class="checked__label rooms__label">2</label>
												</div>
												<div class="checked__item">
													<input type="radio" class="checked__radio" name="move_step1__rooms" value="rooms4" id="rooms4">
													<label for="rooms4" class="checked__label rooms__label">3</label>
												</div>
												<div class="checked__item">
													<input type="radio" class="checked__radio" name="move_step1__rooms" value="rooms5" id="rooms5">
													<label for="rooms5" class="checked__label rooms__label rooms__label-input">
														<label for="ds1" class="input_check_text">Укажите кол-во комнат</label>
														<input type="text" value="" name="" class="input_check_radio" data-radio-check="#rooms5" id="ds1">
													</label>
												</div>
											</div>
										</div>
									</div>
									<div class="move_step1__congestion congestion">
										<p class="move_step_title">Загруженность помещения:</p>
										<div class="checked">
											<div class="checked__list">
												<div class="checked__item">
													<input type="radio" class="checked__radio congestion__radio" name="move_step1__congestion" value="congestion1" id="congestion1">
													<label for="congestion1" class="checked__label congestion__label">
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
												<div class="checked__item">
													<input type="radio" class="checked__radio congestion__radio" name="move_step1__congestion" value="congestion2" id="congestion2">
													<label for="congestion2" class="checked__label congestion__label">
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
												<div class="checked__item">
													<input type="radio" class="checked__radio congestion__radio" name="move_step1__congestion" value="congestion3" id="congestion3">
													<label for="congestion3" class="checked__label congestion__label">
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
									<div class="move_step1__area area">
										<p class="move_step_title area__title">
											<span class="area__title_text">Площадь:</span>
											<span>
                                                    <input type="text" class="area__title_amount" id="area__title_amount">
                                                    <span class="area__title_meters">м<sup>2</sup></span>
                                                </span>
										</p>
										<div class="area__range" id="area__range"></div>
									</div>
									<div class="move_step__buttons move_step1__buttons">
										<button class="move_step__btn btn btn-white">Вызвать замерщика</button>
										<button class="move_step__btn btn" type="button" onClick='location.href="./step2.php"'>Далее</button>
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