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
	<script src="/local/test/js/main.js"></script>

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
										<div class="nav_step__line_orange nav_step__line_orange-step3"></div>
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
										<div class="nav_step__item nav_step__item-active">
											<div class="nav_step__icon"></div>
											<p class="nav_step__text">Параметры</p>
										</div>
										<div class="nav_step__item">
											<div class="nav_step__icon"></div>
											<p class="nav_step__text">Подтверждение</p>
										</div>
									</div>
								</div>
								<div class="move_step move_step-active move_step3">
									<div class="move_step3__list">

										<div class="move_step3__item">
											<div class="step3_mapping">
												<p class="step3_mapping__title move_config__spoiler_title">Маршрут:</p>

												<div class="mapping mapping-step3">
													<div class="mapping__one">
                        <span class="mapping__point_box">
                            <span class="mapping__point mapping__point-start">1</span>
                        </span>
														<div class="mapping__address">
															<p class="mapping__address_title">Пункт отправления:</p>
															<p class="mapping__address_text">Москва, Огородный проезд 3 к.2</p>
														</div>
													</div>
													<div class="mapping__one">
                        <span class="mapping__point_box">
                            <span class="mapping__point">2</span>
                        </span>
														<div class="mapping__address">
															<p class="mapping__address_title">Промежуточный адрес:</p>
															<p class="mapping__address_text">Москва, ул. Яблочкова д.18 к.3</p>
														</div>
													</div>
													<div class="mapping__one">
                        <span class="mapping__point_box">
                            <span class="mapping__point mapping__point-finish">3</span>
                        </span>
														<div class="mapping__address">
															<p class="mapping__address_title">Пункт назначения:</p>
															<p class="mapping__address_text">Москва, Бумажный проезд 14 с1</p>
														</div>
													</div>
												</div>
												<div class="mapping__one">
													<span class="mapping__point_box"></span>
													<div class="mapping__address">
														<button class="move_step__btn btn btn-white" type="button" onClick='location.href="./step2.php"'>Редактировать адреса</button>
													</div>
												</div>
											</div>
										</div>

										<div class="move_step3__item move_config" id="qw1">
											<div class="move_config__head">
												<div class="move_config__left">
													<p class="move_config__spoiler_title">Пункт отправления:</p>
												</div>
												<div class="move_config__right">
													<button class="move_config__spoiler" type="button">Свернуть</button>
												</div>
											</div>
											<div class="move_config__no_hidden">
												<div class="mapping_step">
													<div class="mapping_step__icon">
														<span class="mapping_step__point mapping_step__point-step mapping_step__point-start">1</span>
													</div>
													<div class="mapping_step__text">Москва, Огородный проезд 3 к.2</div>
												</div>
											</div>
											<div class="move_config__content">
												<div class="move_config__wrap">
													<div class="min_input">
														<div class="min_input__one">
															<p class="rooms_info__title">
																<span class="rooms_info__text">Этаж</span>
																<span class="rooms_info__tooltip tooltip" title="Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur commodi, iure saepe soluta voluptatem voluptates?">?</span>
															</p>
															<div class="min_input__one_box"><input type="text" class="min_input__input"></div>
														</div>
														<div class="min_input__one">
															<p class="rooms_info__title">
																<span class="rooms_info__text">Площадь, м²</span>
																<span class="rooms_info__tooltip tooltip" title="Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur commodi, iure saepe soluta voluptatem voluptates?">?</span>
															</p>
															<div class="min_input__one_box"><input type="text" class="min_input__input"></div>
														</div>
														<div class="min_input__one">
															<p class="rooms_info__title">
																<span class="rooms_info__text">Кол-во комнат</span>
																<span class="rooms_info__tooltip tooltip" title="Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur commodi, iure saepe soluta voluptatem voluptates?">?</span>
															</p>
															<div class="min_input__one_box"><input type="text" class="min_input__input"></div>
														</div>
													</div>
												</div>
												<div class="move_config__wrap">
													<div class="rooms_info">
														<div class="rooms_info__item">
															<p class="rooms_info__title">
																<span class="rooms_info__text">Класс помещения</span>
																<span class="rooms_info__tooltip tooltip" title="Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur commodi, iure saepe soluta voluptatem voluptates?">?</span>
															</p>
															<div class="checked">
																<div class="checked__list checked__list-room">
																	<div class="checked__item checked__item-room">
																		<input type="radio" class="checked__radio congestion__radio" name="move_step1__r" value="move_step1__r1" id="move_step1__r1">
																		<label for="move_step1__r1" class="checked__label congestion__label congestion__label-room">
																			<svg width="22px" height="28px" viewBox="0 0 22 28" xmlns="http://www.w3.org/2000/svg" class="gray_pic">
																				<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd" stroke-linecap="round" stroke-linejoin="round">
																					<g transform="translate(-149.000000, -1263.000000)" stroke="#F47920" stroke-width="1.5">
																						<g transform="translate(149.659302, 1264.405457)">
																							<path class="gray_pic__path" d="M19.6601102,24.9431193 L18.7867351,4.36484725 C18.7313187,3.06628923 17.662528,2.04189643 16.3626737,2.04189643 L3.62111996,2.04189643 C2.32126564,2.04189643 1.25247493,3.06628923 1.19738263,4.36484725 L0.323683493,24.9431193"></path>
																							<path class="gray_pic__path" d="M6.15698633,24.9431193 L6.80513109,2.04189643"></path>
																							<path class="gray_pic__path" d="M13.8268073,24.9431193 L13.1786626,2.04189643"></path>
																							<path class="gray_pic__path" d="M0.971828253,0 L19.0119654,0"></path>
																						</g>
																					</g>
																				</g>
																			</svg>
																			<span class="congestion__item_text">Стандарт</span>
																		</label>
																	</div>
																	<div class="checked__item checked__item-room">
																		<input type="radio" class="checked__radio congestion__radio" name="move_step1__r" value="move_step1__r2" id="move_step1__r2">
																		<label for="move_step1__r2" class="checked__label congestion__label congestion__label-room">
																			<svg width="24px" height="39px" viewBox="0 0 24 39" xmlns="http://www.w3.org/2000/svg" class="gray_pic">
																				<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd" stroke-linecap="round">
																					<g transform="translate(-283.000000, -1257.000000)" stroke="#939598" stroke-width="1.5">
																						<g transform="translate(284.659302, 1257.905457)">
																							<path class="gray_pic__path" d="M18.5091752,26.7626316 L2.68611156,26.7626316 C1.20255283,26.7626316 0,25.5600788 0,24.0765201 L0,21.1463231 C0,19.6630574 1.20255283,18.4602116 2.68611156,18.4602116 L18.5091752,18.4602116 C19.9924409,18.4602116 21.1949937,19.6630574 21.1949937,21.1463231 L21.1949937,24.0765201 C21.1949937,25.5600788 19.9924409,26.7626316 18.5091752,26.7626316 Z"></path>
																							<polygon class="gray_pic__path" points="3.10102745 18.4602409 18.0939662 18.4602409 18.0939662 0 3.10102745 0"></polygon>
																							<path class="gray_pic__path" d="M4.56612593,26.7626316 L3.10102745,37.1158966"></path>
																							<path class="gray_pic__path" d="M16.6288678,26.7626316 L18.0939662,37.1158966"></path>
																						</g>
																					</g>
																				</g>
																			</svg>
																			<span class="congestion__item_text">Евро</span>
																		</label>
																	</div>
																	<div class="checked__item checked__item-room">
																		<input type="radio" class="checked__radio congestion__radio" name="move_step1__r" value="move_step1__r3" id="move_step1__r3">
																		<label for="move_step1__r3" class="checked__label congestion__label congestion__label-room">
																			<svg width="45px" height="35px" viewBox="0 0 45 35" xmlns="http://www.w3.org/2000/svg" class="gray_pic">
																				<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd" stroke-linecap="round">
																					<g transform="translate(-408.000000, -1259.000000)" stroke="#939598" stroke-width="1.5">
																						<g transform="translate(409.659302, 1259.905457)">
																							<path class="gray_pic__path" d="M42.5286092,11.6286025 C42.5286092,8.87619977 40.2971828,6.64477332 37.54478,6.64477332 C34.7923773,6.64477332 32.5609509,8.87619977 32.5609509,11.6286025 L32.5609509,20.2672397 L9.96759191,20.2672397 L9.96759191,11.6286025 C9.96759191,8.87619977 7.73616546,6.64477332 4.98376273,6.64477332 C2.23136,6.64477332 -6.64510553e-05,8.87619977 -6.64510553e-05,11.6286025 L-6.64510553e-05,30.3458714 L42.5286092,30.3458714 L42.5286092,11.6286025 Z"></path>
																							<path class="gray_pic__path" d="M6.75568013,6.64477332 L6.75568013,5.03898356 C6.75568013,2.25601334 9.01202573,0 11.7949959,0 L30.7335468,0 C33.5168493,0 35.7728626,2.25601334 35.7728626,5.03898356 L35.7728626,6.64477332"></path>
																							<path class="gray_pic__path" d="M3.98699689,30.3458714 L3.98699689,33.3361689"></path>
																							<path class="gray_pic__path" d="M38.5415459,30.3458714 L38.5415459,33.3361689"></path>
																							<path class="gray_pic__path" d="M4.87308849,10.6321689 L4.87308849,26.5804223"></path>
																							<path class="gray_pic__path" d="M37.54478,10.6321689 L37.54478,26.5804223"></path>
																						</g>
																					</g>
																				</g>
																			</svg>
																			<span class="congestion__item_text">VIP</span>
																		</label>
																	</div>
																</div>
															</div>
														</div>
														<div class="rooms_info__item">
															<p class="rooms_info__title">
																<span class="rooms_info__text">Загруженность помещения</span>
																<span class="rooms_info__tooltip tooltip" title="Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur commodi, iure saepe soluta voluptatem voluptates?">?</span>
															</p>
															<div class="checked">
																<div class="checked__list">
																	<div class="checked__item checked__item-room">
																		<input type="radio" class="checked__radio congestion__radio" name="move_step1__t" value="move_step1__t1" id="move_step1__t1">
																		<label for="move_step1__t1" class="checked__label congestion__label congestion__label-room">
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
																	<div class="checked__item checked__item-room">
																		<input type="radio" class="checked__radio congestion__radio" name="move_step1__t" value="move_step1__t2" id="move_step1__t2">
																		<label for="move_step1__t2" class="checked__label congestion__label congestion__label-room">
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
																	<div class="checked__item checked__item-room">
																		<input type="radio" class="checked__radio congestion__radio" name="move_step1__t" value="move_step1__t3" id="move_step1__t3">
																		<label for="move_step1__t3" class="checked__label congestion__label congestion__label-room">
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
													</div>
												</div>
												<div class="move_config__wrap">
													<div class="additionally__one">
														<p class="additionally__title additionally__title-small additionally__title-gray">Наличие лифта:</p>
														<div class="additionally__content">
															<div class="check_inline">
																<div class="check_inline__one">
																	<input type="checkbox" class="check_inline__input" name="check_inline1" value="check_inline1" id="check_inline1">
																	<label for="check_inline1" class="check_inline__label">
																		<svg width="24px" height="24px" viewBox="0 0 40 40" xmlns="http://www.w3.org/2000/svg" class="check_inline__icon checkbox">
																			<rect class="checkbox__rect" width="100%" height="100%"></rect>
																			<polyline class="checkbox__checked" points="11,20.053 16.964,26.018 30.385,12.598"></polyline>
																		</svg>
																		<span class="check_inline__text">Пассажирский</span>
																	</label>
																</div>
																<div class="check_inline__one">
																	<input type="checkbox" class="check_inline__input" name="check_inline2" value="check_inline2" id="check_inline2">
																	<label for="check_inline2" class="check_inline__label">
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
												<div class="move_config__wrap">
													<div class="additionally__one">
														<div class="additionally__content">
															<div class="rigging">
																<div class="check_inline">
																	<div class="rigging__title check_inline__one">
																		<input type="checkbox" class="rigger_checkbox_stage check_inline__input rigging__title_input" name="check_inline9" value="check_inline9" id="check_inline9" onchange="checkHiddenBox(this)" data-check-hidden="id0">
																		<label for="check_inline9" class="check_inline__label check_inline__label-big rigging__title_label">
																			<svg width="24px" height="24px" viewBox="0 0 40 40" xmlns="http://www.w3.org/2000/svg" class="check_inline__icon checkbox">
																				<rect class="checkbox__rect" width="100%" height="100%"></rect>
																				<polyline class="checkbox__checked" points="11,20.053 16.964,26.018 30.385,12.598"></polyline>
																			</svg>
																			<span class="check_inline__text">Такелажные работы:</span>
																		</label>
																	</div>
																</div>
																<div class="rigging__hidden" data-check-input="id0">
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
																				<input type="checkbox" class="checked__radio" name="rigging" value="rigging2" id="rigging2">
																				<label for="rigging2" class="checked__label rigger__label">
																					<span class="rigging__check_title">Аквариум</span>
																					<span class="rigging__check_price">от 1000 ₽</span>
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
																<div class="rigging_one__config">
																	<div class="rigging_one__check_inline check_inline">
																		<div class="check_inline__one">
																			<input type="radio" class="rigger_checkbox_stage check_inline__input rigging__title_input" name="rigging_one__config" value="rigging_one__config1" id="rigging_one__config1" onchange="checkHiddenBox(this)" data-check-hidden="id2">
																			<label for="rigging_one__config1" class="check_inline__label check_inline__label-big rigging__title_label">
																				<svg width="24px" height="24px" viewBox="0 0 40 40" xmlns="http://www.w3.org/2000/svg" class="check_inline__icon checkbox">
																					<rect class="checkbox__rect" width="100%" height="100%"></rect>
																					<polyline class="checkbox__checked" points="11,20.053 16.964,26.018 30.385,12.598"></polyline>
																				</svg>
																				<span class="check_inline__text">Доставить</span>
																			</label>
																		</div>
																	</div>
																	<div class="rigging_one__check_address check_address_rigging" data-check-input="id2">
																		<div class="check_address_rigging__wrap">
																			<div class="min_input__one">
																				<p class="rooms_info__title">
																					<span class="rooms_info__text">Адрес</span>
																					<span class="rooms_info__tooltip tooltip" title="Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur commodi, iure saepe soluta voluptatem voluptates?">?</span>
																				</p>
																				<div class="min_input__one_box">
																					<select name="check_address" id="check_address" class="check_address_rigging__select form__select">
																						<option value="">Москва, ул. Яблочкова д.18 к.3</option>
																						<option value="">Москва, Бумажный проезд 14 с1</option>
																					</select>
																				</div>
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
																	<div class="rigging_one__check_inline check_inline">
																		<div class="check_inline__one">
																			<input type="radio" class="rigger_checkbox_stage check_inline__input rigging__title_input" name="rigging_one__config" value="rigging_one__config2" id="rigging_one__config2" onchange="checkHiddenBox(this)" data-check-hidden="id3">
																			<label for="rigging_one__config2" class="check_inline__label check_inline__label-big rigging__title_label">
																				<svg width="24px" height="24px" viewBox="0 0 40 40" xmlns="http://www.w3.org/2000/svg" class="check_inline__icon checkbox">
																					<rect class="checkbox__rect" width="100%" height="100%"></rect>
																					<polyline class="checkbox__checked" points="11,20.053 16.964,26.018 30.385,12.598"></polyline>
																				</svg>
																				<span class="check_inline__text">Только вывоз/утилизация <span class="check_inline__tooltip tooltip" title="Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur commodi, iure saepe soluta voluptatem voluptates?">?</span></span>
																			</label>
																		</div>
																	</div>
																	<div class="rigging_one__removal check_address_removal" data-check-input="id3">
																		<div class="check_address_removal__check_removal check_inline">
																			<div class="check_inline__one">
																				<input type="radio" class="rigger_checkbox_stage check_inline__input rigging__title_input" name="check_inline9" value="check_inline919" id="check_inline919">
																				<label for="check_inline919" class="check_inline__label check_inline__label-big rigging__title_label">
																					<svg width="24px" height="24px" viewBox="0 0 40 40" xmlns="http://www.w3.org/2000/svg" class="check_inline__icon checkbox">
																						<circle class="checkbox__rect" cx="50%" cy="50%" r="47%"></circle>
																						<polyline class="checkbox__checked" points="11,20.053 16.964,26.018 30.385,12.598"></polyline>
																					</svg>
																					<span class="check_inline__text">На свалку (от 2000)</span>
																				</label>
																			</div>
																			<div class="check_inline__one">
																				<input type="radio" class="rigger_checkbox_stage check_inline__input rigging__title_input" name="check_inline9" value="check_inline918" id="check_inline918">
																				<label for="check_inline918" class="check_inline__label check_inline__label-big rigging__title_label">
																					<svg width="24px" height="24px" viewBox="0 0 40 40" xmlns="http://www.w3.org/2000/svg" class="check_inline__icon checkbox">
																						<circle class="checkbox__rect" cx="50%" cy="50%" r="47%"></circle>
																						<polyline class="checkbox__checked" points="11,20.053 16.964,26.018 30.385,12.598"></polyline>
																					</svg>
																					<span class="check_inline__text">Во двор (от 1000)</span>
																				</label>
																			</div>
																			<div class="check_inline__one">
																				<input type="radio" class="rigger_checkbox_stage check_inline__input rigging__title_input" name="check_inline9" value="check_inline917" id="check_inline917">
																				<label for="check_inline917" class="check_inline__label check_inline__label-big rigging__title_label">
																					<svg width="24px" height="24px" viewBox="0 0 40 40" xmlns="http://www.w3.org/2000/svg" class="check_inline__icon checkbox">
																						<circle class="checkbox__rect" cx="50%" cy="50%" r="47%"></circle>
																						<polyline class="checkbox__checked" points="11,20.053 16.964,26.018 30.385,12.598"></polyline>
																					</svg>
																					<span class="check_inline__text">Заказ контейнера (300)</span>
																				</label>
																			</div>
																		</div>
																	</div>
																	<div class="rigging_one__config_form form">
																		<div class="form__row step__form_pt">
																			<div class="form__one form__one-w100">
																				<label for="" class="form__label form__label-left">Комментарий</label>
																				<div class="form__element_box">
																					<textarea class="form__element form__element-input" name="" id="" cols="30" rows="4"></textarea>
																				</div>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
												<div class="move_config__wrap">
													<div class="additionally__one">
														<p class="additionally__title">Дополнительно:</p>
														<div class="additionally__content">
															<div class="check_inline check_inline-additionally">
																<div class="check_inline__one">
																	<input type="checkbox" class="check_inline__input" name="check_inline3" value="check_inline3" id="check_inline3">
																	<label for="check_inline3" class="check_inline__label check_inline__label-big">
																		<svg width="24px" height="24px" viewBox="0 0 40 40" xmlns="http://www.w3.org/2000/svg" class="check_inline__icon checkbox">
																			<rect class="checkbox__rect" width="100%" height="100%"></rect>
																			<polyline class="checkbox__checked" points="11,20.053 16.964,26.018 30.385,12.598"></polyline>
																		</svg>
																		<span class="check_inline__text">Расстановка мебели (100)</span>
																	</label>
																</div>
																<div class="check_inline__one">
																	<input type="checkbox" class="check_inline__input" name="check_inline4" value="check_inline4" id="check_inline4">
																	<label for="check_inline4" class="check_inline__label check_inline__label-big">
																		<svg width="24px" height="24px" viewBox="0 0 40 40" xmlns="http://www.w3.org/2000/svg" class="check_inline__icon checkbox">
																			<rect class="checkbox__rect" width="100%" height="100%"></rect>
																			<polyline class="checkbox__checked" points="11,20.053 16.964,26.018 30.385,12.598"></polyline>
																		</svg>
																		<span class="check_inline__text">Сборка/ разборка мебели (300)</span>
																	</label>
																</div>
																<div class="check_inline__one">
																	<input type="checkbox" class="check_inline__input" name="check_inline5" value="check_inline5" id="check_inline5" checked>
																	<label for="check_inline5" class="check_inline__label check_inline__label-big">
																		<svg width="24px" height="24px" viewBox="0 0 40 40" xmlns="http://www.w3.org/2000/svg" class="check_inline__icon checkbox">
																			<rect class="checkbox__rect" width="100%" height="100%"></rect>
																			<polyline class="checkbox__checked" points="11,20.053 16.964,26.018 30.385,12.598"></polyline>
																		</svg>
																		<span class="check_inline__text">Вывоз мусора (200)</span>
																	</label>
																</div>
																<div class="check_inline__one">
																	<input type="checkbox" class="check_inline__input" name="check_inline6" value="check_inline6" id="check_inline6">
																	<label for="check_inline6" class="check_inline__label check_inline__label-big">
																		<svg width="24px" height="24px" viewBox="0 0 40 40" xmlns="http://www.w3.org/2000/svg" class="check_inline__icon checkbox">
																			<rect class="checkbox__rect" width="100%" height="100%"></rect>
																			<polyline class="checkbox__checked" points="11,20.053 16.964,26.018 30.385,12.598"></polyline>
																		</svg>
																		<span class="check_inline__text">Клининговые услуги (300)</span>
																	</label>
																</div>
																<div class="check_inline__one">
																	<input type="checkbox" class="check_inline__input" name="check_inline7" value="check_inline7" id="check_inline7">
																	<label for="check_inline7" class="check_inline__label check_inline__label-big">
																		<svg width="24px" height="24px" viewBox="0 0 40 40" xmlns="http://www.w3.org/2000/svg" class="check_inline__icon checkbox">
																			<rect class="checkbox__rect" width="100%" height="100%"></rect>
																			<polyline class="checkbox__checked" points="11,20.053 16.964,26.018 30.385,12.598"></polyline>
																		</svg>
																		<span class="check_inline__text">Снять кондиционер (300)</span>
																	</label>
																</div>
																<div class="check_inline__one">
																	<input type="checkbox" class="check_inline__input" name="check_inline8" value="check_inline8" id="check_inline8">
																	<label for="check_inline8" class="check_inline__label check_inline__label-big">
																		<svg width="24px" height="24px" viewBox="0 0 40 40" xmlns="http://www.w3.org/2000/svg" class="check_inline__icon checkbox">
																			<rect class="checkbox__rect" width="100%" height="100%"></rect>
																			<polyline class="checkbox__checked" points="11,20.053 16.964,26.018 30.385,12.598"></polyline>
																		</svg>
																		<span class="check_inline__text">Установить кондиционер (300)</span>
																	</label>
																</div>
															</div>
														</div>
													</div>
												</div>
												<div class="move_config__wrap">
													<div class="additionally__one">
														<p class="additionally__title">Контакты по данному адресу:</p>
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

										<div class="move_step3__item move_config" id="qw2">
											<div class="move_config__head">
												<div class="move_config__left">
													<p class="move_config__spoiler_title">Промежуточный адрес:</p>
												</div>
												<div class="move_config__right">
													<button class="move_config__spoiler" type="button">Свернуть</button>
												</div>
											</div>
											<div class="move_config__no_hidden">
												<div class="mapping_step">
													<div class="mapping_step__icon">
														<span class="mapping_step__point mapping_step__point-step mapping_step__point-interval">2</span>
													</div>
													<div class="mapping_step__text">Москва, ул. Яблочкова д.18 к.3</div>
												</div>
											</div>
											<div class="move_config__content">
												<div class="move_config__wrap">
													<div class="checked">
														<div class="checked__list">
															<div class="checked__item">
																<input type="radio" class="checked__radio congestion__radio" name="add_furniture" value="add_furniture11" id="add_furniture11">
																<label for="add_furniture11" class="checked__label congestion__label congestion__label-room">
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
																<input type="radio" class="checked__radio congestion__radio" name="add_furniture" value="add_furniture12" id="add_furniture12">
																<label for="add_furniture12" class="checked__label congestion__label congestion__label-room">
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
														</div>
													</div>
												</div>
												<div class="move_config__wrap">
													<div class="min_input">
														<div class="min_input__one">
															<p class="rooms_info__title">
																<span class="rooms_info__text">Этаж</span>
																<span class="rooms_info__tooltip tooltip" title="Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur commodi, iure saepe soluta voluptatem voluptates?">?</span>
															</p>
															<div class="min_input__one_box"><input type="text" class="min_input__input"></div>
														</div>
														<div class="min_input__one">
															<p class="rooms_info__title"><span>Наличие лифта:</span></p>
															<div class="additionally__content">
																<div class="check_inline check_inline-pt">
																	<div class="check_inline__one">
																		<input type="checkbox" class="check_inline__input" name="check_inline31" value="check_inline311" id="check_inline311">
																		<label for="check_inline311" class="check_inline__label">
																			<svg width="24px" height="24px" viewBox="0 0 40 40" xmlns="http://www.w3.org/2000/svg" class="check_inline__icon checkbox">
																				<rect class="checkbox__rect" width="100%" height="100%"></rect>
																				<polyline class="checkbox__checked" points="11,20.053 16.964,26.018 30.385,12.598"></polyline>
																			</svg>
																			<span class="check_inline__text">Пассажирский</span>
																		</label>
																	</div>
																	<div class="check_inline__one">
																		<input type="checkbox" class="check_inline__input" name="check_inline32" value="check_inline322" id="check_inline322">
																		<label for="check_inline322" class="check_inline__label">
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
												<div class="move_config__wrap">
													<div class="additionally__one">
														<div class="additionally__content">
															<div class="rigging">
																<div class="check_inline">
																	<div class="rigging__title check_inline__one">
																		<input type="checkbox" class="rigger_checkbox_stage check_inline__input rigging__title_input" name="check_inline94" value="check_inline94" id="check_inline94" onchange="checkHiddenBox(this)" data-check-hidden="id5">
																		<label for="check_inline94" class="check_inline__label check_inline__label-big rigging__title_label">
																			<svg width="24px" height="24px" viewBox="0 0 40 40" xmlns="http://www.w3.org/2000/svg" class="check_inline__icon checkbox">
																				<rect class="checkbox__rect" width="100%" height="100%"></rect>
																				<polyline class="checkbox__checked" points="11,20.053 16.964,26.018 30.385,12.598"></polyline>
																			</svg>
																			<span class="check_inline__text">Такелажные работы:</span>
																		</label>
																	</div>
																</div>
																<div class="rigging__hidden" data-check-input="id5">
																	<div class="checked">
																		<div class="checked__list checked__list-rigger">
																			<div class="checked__item checked__item-rigging">
																				<input type="checkbox" class="checked__radio" name="rigging" value="rigging19" id="rigging19" onchange="checkHiddenBox(this)" data-check-hidden="id10">
																				<label for="rigging19" class="checked__label rigger__label">
																					<span class="rigging__check_title">Пианино</span>
																					<span class="rigging__check_price">5 750 ₽</span>
																				</label>
																			</div>
																			<div class="checked__item checked__item-rigging">
																				<input type="checkbox" class="checked__radio" name="rigging" value="rigging29" id="rigging29">
																				<label for="rigging29" class="checked__label rigger__label">
																					<span class="rigging__check_title">Аквариум</span>
																					<span class="rigging__check_price">от 1000 ₽</span>
																				</label>
																			</div>
																			<div class="checked__item checked__item-rigging">
																				<input type="checkbox" class="checked__radio" name="rigging" value="rigging39" id="rigging39">
																				<label for="rigging39" class="checked__label rigger__label">
																					<span class="rigging__check_title">Вывоз мусора</span>
																					<span class="rigging__check_price">от 300 ₽</span>
																				</label>
																			</div>
																			<div class="checked__item checked__item-rigging">
																				<input type="checkbox" class="checked__radio" name="rigging" value="rigging49" id="rigging49">
																				<label for="rigging49" class="checked__label rigger__label">
																					<span class="rigging__check_title">Сборка/разборка</span>
																					<span class="rigging__check_price">от 300 ₽</span>
																				</label>
																			</div>
																			<div class="checked__item checked__item-rigging">
																				<input type="checkbox" class="checked__radio" name="rigging" value="rigging59" id="rigging59">
																				<label for="rigging59" class="checked__label rigger__label">
																					<span class="rigging__check_title">Подъем/спуск</span>
																					<span class="rigging__check_price">от 300 ₽</span>
																				</label>
																			</div>
																			<div class="checked__item checked__item-rigging">
																				<input type="checkbox" class="checked__radio" name="rigging" value="rigging69" id="rigging69">
																				<label for="rigging69" class="checked__label rigger__label">
																					<span class="rigging__check_title">Ещё услуга</span>
																					<span class="rigging__check_price">от 300 ₽</span>
																				</label>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
												<div class="rigging_one" data-check-input="id10">
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
																<div class="rigging_one__config">
																	<div class="rigging_one__check_inline check_inline">
																		<div class="check_inline__one">
																			<input type="radio" class="rigger_checkbox_stage check_inline__input rigging__title_input" name="rigging_one__config2" value="rigging_one__config12" id="rigging_one__config12" onchange="checkHiddenBox(this)" data-check-hidden="id6">
																			<label for="rigging_one__config1" class="check_inline__label check_inline__label-big rigging__title_label">
																				<svg width="24px" height="24px" viewBox="0 0 40 40" xmlns="http://www.w3.org/2000/svg" class="check_inline__icon checkbox">
																					<rect class="checkbox__rect" width="100%" height="100%"></rect>
																					<polyline class="checkbox__checked" points="11,20.053 16.964,26.018 30.385,12.598"></polyline>
																				</svg>
																				<span class="check_inline__text">Доставить</span>
																			</label>
																		</div>
																	</div>
																	<div class="rigging_one__check_address check_address_rigging" data-check-input="id6">
																		<div class="check_address_rigging__wrap">
																			<div class="min_input__one">
																				<p class="rooms_info__title">
																					<span class="rooms_info__text">Адрес</span>
																					<span class="rooms_info__tooltip tooltip" title="Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur commodi, iure saepe soluta voluptatem voluptates?">?</span>
																				</p>
																				<div class="min_input__one_box">
																					<select name="check_address" id="check_address2" class="check_address_rigging__select form__select">
																						<option value="">Москва, ул. Яблочкова д.18 к.3</option>
																						<option value="">Москва, Бумажный проезд 14 с1</option>
																					</select>
																				</div>
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
																	<div class="rigging_one__check_inline check_inline">
																		<div class="check_inline__one">
																			<input type="radio" class="rigger_checkbox_stage check_inline__input rigging__title_input" name="rigging_one__config2" value="rigging_one__config22" id="rigging_one__config22" onchange="checkHiddenBox(this)" data-check-hidden="id7">
																			<label for="rigging_one__config22" class="check_inline__label check_inline__label-big rigging__title_label">
																				<svg width="24px" height="24px" viewBox="0 0 40 40" xmlns="http://www.w3.org/2000/svg" class="check_inline__icon checkbox">
																					<rect class="checkbox__rect" width="100%" height="100%"></rect>
																					<polyline class="checkbox__checked" points="11,20.053 16.964,26.018 30.385,12.598"></polyline>
																				</svg>
																				<span class="check_inline__text">Только вывоз/утилизация <span class="check_inline__tooltip tooltip" title="Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur commodi, iure saepe soluta voluptatem voluptates?">?</span></span>
																			</label>
																		</div>
																	</div>
																	<div class="rigging_one__removal check_address_removal" data-check-input="id7">
																		<div class="check_address_removal__check_removal check_inline">
																			<div class="check_inline__one">
																				<input type="radio" class="rigger_checkbox_stage check_inline__input rigging__title_input" name="check_inline8" value="check_inline912" id="check_inline912">
																				<label for="check_inline912" class="check_inline__label check_inline__label-big rigging__title_label">
																					<svg width="24px" height="24px" viewBox="0 0 40 40" xmlns="http://www.w3.org/2000/svg" class="check_inline__icon checkbox">
																						<circle class="checkbox__rect" cx="50%" cy="50%" r="47%"></circle>
																						<polyline class="checkbox__checked" points="11,20.053 16.964,26.018 30.385,12.598"></polyline>
																					</svg>
																					<span class="check_inline__text">На свалку (от 2000)</span>
																				</label>
																			</div>
																			<div class="check_inline__one">
																				<input type="radio" class="rigger_checkbox_stage check_inline__input rigging__title_input" name="check_inline8" value="check_inline913" id="check_inline913">
																				<label for="check_inline913" class="check_inline__label check_inline__label-big rigging__title_label">
																					<svg width="24px" height="24px" viewBox="0 0 40 40" xmlns="http://www.w3.org/2000/svg" class="check_inline__icon checkbox">
																						<circle class="checkbox__rect" cx="50%" cy="50%" r="47%"></circle>
																						<polyline class="checkbox__checked" points="11,20.053 16.964,26.018 30.385,12.598"></polyline>
																					</svg>
																					<span class="check_inline__text">Во двор (от 1000)</span>
																				</label>
																			</div>
																			<div class="check_inline__one">
																				<input type="radio" class="rigger_checkbox_stage check_inline__input rigging__title_input" name="check_inline8" value="check_inline914" id="check_inline914">
																				<label for="check_inline914" class="check_inline__label check_inline__label-big rigging__title_label">
																					<svg width="24px" height="24px" viewBox="0 0 40 40" xmlns="http://www.w3.org/2000/svg" class="check_inline__icon checkbox">
																						<circle class="checkbox__rect" cx="50%" cy="50%" r="47%"></circle>
																						<polyline class="checkbox__checked" points="11,20.053 16.964,26.018 30.385,12.598"></polyline>
																					</svg>
																					<span class="check_inline__text">Заказ контейнера (300)</span>
																				</label>
																			</div>
																		</div>
																	</div>
																	<div class="rigging_one__config_form form">
																		<div class="form__row step__form_pt">
																			<div class="form__one form__one-w100">
																				<label for="" class="form__label form__label-left">Комментарий</label>
																				<div class="form__element_box">
																					<textarea class="form__element form__element-input" name="" id="" cols="30" rows="4"></textarea>
																				</div>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
												<div class="move_config__wrap">
													<div class="additionally__one">
														<p class="additionally__title">Дополнительно:</p>
														<div class="additionally__content">
															<div class="check_inline check_inline-additionally">
																<div class="check_inline__one">
																	<input type="checkbox" class="check_inline__input" name="check_inline3" value="check_inline3" id="check_inline3">
																	<label for="check_inline3" class="check_inline__label check_inline__label-big">
																		<svg width="24px" height="24px" viewBox="0 0 40 40" xmlns="http://www.w3.org/2000/svg" class="check_inline__icon checkbox">
																			<rect class="checkbox__rect" width="100%" height="100%"></rect>
																			<polyline class="checkbox__checked" points="11,20.053 16.964,26.018 30.385,12.598"></polyline>
																		</svg>
																		<span class="check_inline__text">Расстановка мебели (100)</span>
																	</label>
																</div>
																<div class="check_inline__one">
																	<input type="checkbox" class="check_inline__input" name="check_inline4" value="check_inline4" id="check_inline4">
																	<label for="check_inline4" class="check_inline__label check_inline__label-big">
																		<svg width="24px" height="24px" viewBox="0 0 40 40" xmlns="http://www.w3.org/2000/svg" class="check_inline__icon checkbox">
																			<rect class="checkbox__rect" width="100%" height="100%"></rect>
																			<polyline class="checkbox__checked" points="11,20.053 16.964,26.018 30.385,12.598"></polyline>
																		</svg>
																		<span class="check_inline__text">Сборка/ разборка мебели (300)</span>
																	</label>
																</div>
																<div class="check_inline__one">
																	<input type="checkbox" class="check_inline__input" name="check_inline5" value="check_inline5" id="check_inline5" checked>
																	<label for="check_inline5" class="check_inline__label check_inline__label-big">
																		<svg width="24px" height="24px" viewBox="0 0 40 40" xmlns="http://www.w3.org/2000/svg" class="check_inline__icon checkbox">
																			<rect class="checkbox__rect" width="100%" height="100%"></rect>
																			<polyline class="checkbox__checked" points="11,20.053 16.964,26.018 30.385,12.598"></polyline>
																		</svg>
																		<span class="check_inline__text">Вывоз мусора (200)</span>
																	</label>
																</div>
																<div class="check_inline__one">
																	<input type="checkbox" class="check_inline__input" name="check_inline6" value="check_inline6" id="check_inline6">
																	<label for="check_inline6" class="check_inline__label check_inline__label-big">
																		<svg width="24px" height="24px" viewBox="0 0 40 40" xmlns="http://www.w3.org/2000/svg" class="check_inline__icon checkbox">
																			<rect class="checkbox__rect" width="100%" height="100%"></rect>
																			<polyline class="checkbox__checked" points="11,20.053 16.964,26.018 30.385,12.598"></polyline>
																		</svg>
																		<span class="check_inline__text">Клининговые услуги (300)</span>
																	</label>
																</div>
																<div class="check_inline__one">
																	<input type="checkbox" class="check_inline__input" name="check_inline7" value="check_inline7" id="check_inline7">
																	<label for="check_inline7" class="check_inline__label check_inline__label-big">
																		<svg width="24px" height="24px" viewBox="0 0 40 40" xmlns="http://www.w3.org/2000/svg" class="check_inline__icon checkbox">
																			<rect class="checkbox__rect" width="100%" height="100%"></rect>
																			<polyline class="checkbox__checked" points="11,20.053 16.964,26.018 30.385,12.598"></polyline>
																		</svg>
																		<span class="check_inline__text">Снять кондиционер (300)</span>
																	</label>
																</div>
																<div class="check_inline__one">
																	<input type="checkbox" class="check_inline__input" name="check_inline8" value="check_inline8" id="check_inline8">
																	<label for="check_inline8" class="check_inline__label check_inline__label-big">
																		<svg width="24px" height="24px" viewBox="0 0 40 40" xmlns="http://www.w3.org/2000/svg" class="check_inline__icon checkbox">
																			<rect class="checkbox__rect" width="100%" height="100%"></rect>
																			<polyline class="checkbox__checked" points="11,20.053 16.964,26.018 30.385,12.598"></polyline>
																		</svg>
																		<span class="check_inline__text">Установить кондиционер (300)</span>
																	</label>
																</div>
															</div>
														</div>
													</div>
												</div>
												<div class="move_config__wrap">
													<div class="additionally__one">
														<p class="additionally__title">Контакты по данному адресу:</p>
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

										<div class="move_step3__item move_config" id="qw3">
											<div class="move_config__head">
												<div class="move_config__left">
													<p class="move_config__spoiler_title">Пункт назначения:</p>
												</div>
												<div class="move_config__right">
													<button class="move_config__spoiler" type="button">Свернуть</button>
												</div>
											</div>
											<div class="move_config__no_hidden">
												<div class="mapping_step">
													<div class="mapping_step__icon">
														<span class="mapping_step__point mapping_step__point-finish mapping_step__point-step">3</span>
													</div>
													<div class="mapping_step__text">Москва, Бумажный проезд 14 с1</div>
												</div>
											</div>
											<div class="move_config__content">
												<div class="move_config__wrap">
													<div class="min_input">
														<div class="min_input__one">
															<p class="rooms_info__title">
																<span class="rooms_info__text">Этаж</span>
																<span class="rooms_info__tooltip tooltip" title="Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur commodi, iure saepe soluta voluptatem voluptates?">?</span>
															</p>
															<div class="min_input__one_box"><input type="text" class="min_input__input"></div>
														</div>
														<div class="min_input__one">
															<p class="rooms_info__title">
																<span class="rooms_info__text">Площадь, м²</span>
																<span class="rooms_info__tooltip tooltip" title="Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur commodi, iure saepe soluta voluptatem voluptates?">?</span>
															</p>
															<div class="min_input__one_box"><input type="text" class="min_input__input"></div>
														</div>
														<div class="min_input__one">
															<p class="rooms_info__title">
																<span class="rooms_info__text">Кол-во комнат</span>
																<span class="rooms_info__tooltip tooltip" title="Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur commodi, iure saepe soluta voluptatem voluptates?">?</span>
															</p>
															<div class="min_input__one_box"><input type="text" class="min_input__input"></div>
														</div>
													</div>
												</div>
												<div class="move_config__wrap">
													<div class="rooms_info">
														<div class="rooms_info__item">
															<p class="rooms_info__title">
																<span class="rooms_info__text">Класс помещения</span>
																<span class="rooms_info__tooltip tooltip" title="Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur commodi, iure saepe soluta voluptatem voluptates?">?</span>
															</p>
															<div class="checked">
																<div class="checked__list checked__list-room">
																	<div class="checked__item checked__item-room">
																		<input type="radio" class="checked__radio congestion__radio" name="move_step1__r" value="move_step1__r19" id="move_step1__r19">
																		<label for="move_step1__r19" class="checked__label congestion__label congestion__label-room">
																			<svg width="22px" height="28px" viewBox="0 0 22 28" xmlns="http://www.w3.org/2000/svg" class="gray_pic">
																				<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd" stroke-linecap="round" stroke-linejoin="round">
																					<g transform="translate(-149.000000, -1263.000000)" stroke="#F47920" stroke-width="1.5">
																						<g transform="translate(149.659302, 1264.405457)">
																							<path class="gray_pic__path" d="M19.6601102,24.9431193 L18.7867351,4.36484725 C18.7313187,3.06628923 17.662528,2.04189643 16.3626737,2.04189643 L3.62111996,2.04189643 C2.32126564,2.04189643 1.25247493,3.06628923 1.19738263,4.36484725 L0.323683493,24.9431193"></path>
																							<path class="gray_pic__path" d="M6.15698633,24.9431193 L6.80513109,2.04189643"></path>
																							<path class="gray_pic__path" d="M13.8268073,24.9431193 L13.1786626,2.04189643"></path>
																							<path class="gray_pic__path" d="M0.971828253,0 L19.0119654,0"></path>
																						</g>
																					</g>
																				</g>
																			</svg>
																			<span class="congestion__item_text">Стандарт</span>
																		</label>
																	</div>
																	<div class="checked__item checked__item-room">
																		<input type="radio" class="checked__radio congestion__radio" name="move_step1__r" value="move_step1__r29" id="move_step1__r29">
																		<label for="move_step1__r29" class="checked__label congestion__label congestion__label-room">
																			<svg width="24px" height="39px" viewBox="0 0 24 39" xmlns="http://www.w3.org/2000/svg" class="gray_pic">
																				<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd" stroke-linecap="round">
																					<g transform="translate(-283.000000, -1257.000000)" stroke="#939598" stroke-width="1.5">
																						<g transform="translate(284.659302, 1257.905457)">
																							<path class="gray_pic__path" d="M18.5091752,26.7626316 L2.68611156,26.7626316 C1.20255283,26.7626316 0,25.5600788 0,24.0765201 L0,21.1463231 C0,19.6630574 1.20255283,18.4602116 2.68611156,18.4602116 L18.5091752,18.4602116 C19.9924409,18.4602116 21.1949937,19.6630574 21.1949937,21.1463231 L21.1949937,24.0765201 C21.1949937,25.5600788 19.9924409,26.7626316 18.5091752,26.7626316 Z"></path>
																							<polygon class="gray_pic__path" points="3.10102745 18.4602409 18.0939662 18.4602409 18.0939662 0 3.10102745 0"></polygon>
																							<path class="gray_pic__path" d="M4.56612593,26.7626316 L3.10102745,37.1158966"></path>
																							<path class="gray_pic__path" d="M16.6288678,26.7626316 L18.0939662,37.1158966"></path>
																						</g>
																					</g>
																				</g>
																			</svg>
																			<span class="congestion__item_text">Евро</span>
																		</label>
																	</div>
																	<div class="checked__item checked__item-room">
																		<input type="radio" class="checked__radio congestion__radio" name="move_step1__r" value="move_step1__r39" id="move_step1__r39">
																		<label for="move_step1__r39" class="checked__label congestion__label congestion__label-room">
																			<svg width="45px" height="35px" viewBox="0 0 45 35" xmlns="http://www.w3.org/2000/svg" class="gray_pic">
																				<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd" stroke-linecap="round">
																					<g transform="translate(-408.000000, -1259.000000)" stroke="#939598" stroke-width="1.5">
																						<g transform="translate(409.659302, 1259.905457)">
																							<path class="gray_pic__path" d="M42.5286092,11.6286025 C42.5286092,8.87619977 40.2971828,6.64477332 37.54478,6.64477332 C34.7923773,6.64477332 32.5609509,8.87619977 32.5609509,11.6286025 L32.5609509,20.2672397 L9.96759191,20.2672397 L9.96759191,11.6286025 C9.96759191,8.87619977 7.73616546,6.64477332 4.98376273,6.64477332 C2.23136,6.64477332 -6.64510553e-05,8.87619977 -6.64510553e-05,11.6286025 L-6.64510553e-05,30.3458714 L42.5286092,30.3458714 L42.5286092,11.6286025 Z"></path>
																							<path class="gray_pic__path" d="M6.75568013,6.64477332 L6.75568013,5.03898356 C6.75568013,2.25601334 9.01202573,0 11.7949959,0 L30.7335468,0 C33.5168493,0 35.7728626,2.25601334 35.7728626,5.03898356 L35.7728626,6.64477332"></path>
																							<path class="gray_pic__path" d="M3.98699689,30.3458714 L3.98699689,33.3361689"></path>
																							<path class="gray_pic__path" d="M38.5415459,30.3458714 L38.5415459,33.3361689"></path>
																							<path class="gray_pic__path" d="M4.87308849,10.6321689 L4.87308849,26.5804223"></path>
																							<path class="gray_pic__path" d="M37.54478,10.6321689 L37.54478,26.5804223"></path>
																						</g>
																					</g>
																				</g>
																			</svg>
																			<span class="congestion__item_text">VIP</span>
																		</label>
																	</div>
																</div>
															</div>
														</div>
														<div class="rooms_info__item">
															<p class="rooms_info__title">
																<span class="rooms_info__text">Загруженность помещения</span>
																<span class="rooms_info__tooltip tooltip" title="Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur commodi, iure saepe soluta voluptatem voluptates?">?</span>
															</p>
															<div class="checked">
																<div class="checked__list">
																	<div class="checked__item checked__item-room">
																		<input type="radio" class="checked__radio congestion__radio" name="move_step1__t" value="move_step1__t18" id="move_step1__t18">
																		<label for="move_step1__t18" class="checked__label congestion__label congestion__label-room">
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
																	<div class="checked__item checked__item-room">
																		<input type="radio" class="checked__radio congestion__radio" name="move_step1__t" value="move_step1__t28" id="move_step1__t28">
																		<label for="move_step1__t28" class="checked__label congestion__label congestion__label-room">
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
																	<div class="checked__item checked__item-room">
																		<input type="radio" class="checked__radio congestion__radio" name="move_step1__t" value="move_step1__t38" id="move_step1__t38">
																		<label for="move_step1__t38" class="checked__label congestion__label congestion__label-room">
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
													</div>
												</div>
												<div class="move_config__wrap">
													<div class="additionally__one">
														<p class="additionally__title additionally__title-small additionally__title-gray">Наличие лифта:</p>
														<div class="additionally__content">
															<div class="check_inline">
																<div class="check_inline__one">
																	<input type="checkbox" class="check_inline__input" name="check_inline18" value="check_inline18" id="check_inline18">
																	<label for="check_inline18" class="check_inline__label">
																		<svg width="24px" height="24px" viewBox="0 0 40 40" xmlns="http://www.w3.org/2000/svg" class="check_inline__icon checkbox">
																			<rect class="checkbox__rect" width="100%" height="100%"></rect>
																			<polyline class="checkbox__checked" points="11,20.053 16.964,26.018 30.385,12.598"></polyline>
																		</svg>
																		<span class="check_inline__text">Пассажирский</span>
																	</label>
																</div>
																<div class="check_inline__one">
																	<input type="checkbox" class="check_inline__input" name="check_inline28" value="check_inline28" id="check_inline28">
																	<label for="check_inline28" class="check_inline__label">
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
												<div class="move_config__wrap">
													<div class="additionally__one">
														<div class="additionally__content">
															<div class="rigging">
																<div class="check_inline">
																	<div class="rigging__title check_inline__one">
																		<input type="checkbox" class="rigger_checkbox_stage check_inline__input rigging__title_input" name="check_inline9" value="check_inline98" id="check_inline98" onchange="checkHiddenBox(this)" data-check-hidden="id011">
																		<label for="check_inline98" class="check_inline__label check_inline__label-big rigging__title_label">
																			<svg width="24px" height="24px" viewBox="0 0 40 40" xmlns="http://www.w3.org/2000/svg" class="check_inline__icon checkbox">
																				<rect class="checkbox__rect" width="100%" height="100%"></rect>
																				<polyline class="checkbox__checked" points="11,20.053 16.964,26.018 30.385,12.598"></polyline>
																			</svg>
																			<span class="check_inline__text">Такелажные работы:</span>
																		</label>
																	</div>
																</div>
																<div class="rigging__hidden" data-check-input="id011">
																	<div class="checked">
																		<div class="checked__list checked__list-rigger">
																			<div class="checked__item checked__item-rigging">
																				<input type="checkbox" class="checked__radio" name="rigging" value="rigging18" id="rigging18" onchange="checkHiddenBox(this)" data-check-hidden="id19">
																				<label for="rigging18" class="checked__label rigger__label">
																					<span class="rigging__check_title">Пианино</span>
																					<span class="rigging__check_price">5 750 ₽</span>
																				</label>
																			</div>
																			<div class="checked__item checked__item-rigging">
																				<input type="checkbox" class="checked__radio" name="rigging" value="rigging28" id="rigging28">
																				<label for="rigging2" class="checked__label rigger__label">
																					<span class="rigging__check_title">Аквариум</span>
																					<span class="rigging__check_price">от 1000 ₽</span>
																				</label>
																			</div>
																			<div class="checked__item checked__item-rigging">
																				<input type="checkbox" class="checked__radio" name="rigging" value="rigging38" id="rigging38">
																				<label for="rigging38" class="checked__label rigger__label">
																					<span class="rigging__check_title">Вывоз мусора</span>
																					<span class="rigging__check_price">от 300 ₽</span>
																				</label>
																			</div>
																			<div class="checked__item checked__item-rigging">
																				<input type="checkbox" class="checked__radio" name="rigging" value="rigging48" id="rigging48">
																				<label for="rigging48" class="checked__label rigger__label">
																					<span class="rigging__check_title">Сборка/разборка</span>
																					<span class="rigging__check_price">от 300 ₽</span>
																				</label>
																			</div>
																			<div class="checked__item checked__item-rigging">
																				<input type="checkbox" class="checked__radio" name="rigging" value="rigging58" id="rigging58">
																				<label for="rigging58" class="checked__label rigger__label">
																					<span class="rigging__check_title">Подъем/спуск</span>
																					<span class="rigging__check_price">от 300 ₽</span>
																				</label>
																			</div>
																			<div class="checked__item checked__item-rigging">
																				<input type="checkbox" class="checked__radio" name="rigging" value="rigging68" id="rigging68">
																				<label for="rigging68" class="checked__label rigger__label">
																					<span class="rigging__check_title">Ещё услуга</span>
																					<span class="rigging__check_price">от 300 ₽</span>
																				</label>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
												<div class="rigging_one" data-check-input="id19">
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
																<div class="rigging_one__config">
																	<div class="rigging_one__check_inline check_inline">
																		<div class="check_inline__one">
																			<input type="radio" class="rigger_checkbox_stage check_inline__input rigging__title_input" name="rigging_one__config" value="rigging_one__config15" id="rigging_one__config15" onchange="checkHiddenBox(this)" data-check-hidden="id299">
																			<label for="rigging_one__config15" class="check_inline__label check_inline__label-big rigging__title_label">
																				<svg width="24px" height="24px" viewBox="0 0 40 40" xmlns="http://www.w3.org/2000/svg" class="check_inline__icon checkbox">
																					<rect class="checkbox__rect" width="100%" height="100%"></rect>
																					<polyline class="checkbox__checked" points="11,20.053 16.964,26.018 30.385,12.598"></polyline>
																				</svg>
																				<span class="check_inline__text">Доставить</span>
																			</label>
																		</div>
																	</div>
																	<div class="rigging_one__check_address check_address_rigging" data-check-input="id299">
																		<div class="check_address_rigging__wrap">
																			<div class="min_input__one">
																				<p class="rooms_info__title">
																					<span class="rooms_info__text">Адрес</span>
																					<span class="rooms_info__tooltip tooltip" title="Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur commodi, iure saepe soluta voluptatem voluptates?">?</span>
																				</p>
																				<div class="min_input__one_box">
																					<select name="check_address" id="check_address3" class="check_address_rigging__select form__select">
																						<option value="">Москва, ул. Яблочкова д.18 к.3</option>
																						<option value="">Москва, Бумажный проезд 14 с1</option>
																					</select>
																				</div>
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
																	<div class="rigging_one__check_inline check_inline">
																		<div class="check_inline__one">
																			<input type="radio" class="rigger_checkbox_stage check_inline__input rigging__title_input" name="rigging_one__config" value="rigging_one__config25" id="rigging_one__config25" onchange="checkHiddenBox(this)" data-check-hidden="id399">
																			<label for="rigging_one__config25" class="check_inline__label check_inline__label-big rigging__title_label">
																				<svg width="24px" height="24px" viewBox="0 0 40 40" xmlns="http://www.w3.org/2000/svg" class="check_inline__icon checkbox">
																					<rect class="checkbox__rect" width="100%" height="100%"></rect>
																					<polyline class="checkbox__checked" points="11,20.053 16.964,26.018 30.385,12.598"></polyline>
																				</svg>
																				<span class="check_inline__text">Только вывоз/утилизация <span class="check_inline__tooltip tooltip" title="Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur commodi, iure saepe soluta voluptatem voluptates?">?</span></span>
																			</label>
																		</div>
																	</div>
																	<div class="rigging_one__removal check_address_removal" data-check-input="id399">
																		<div class="check_address_removal__check_removal check_inline">
																			<div class="check_inline__one">
																				<input type="radio" class="rigger_checkbox_stage check_inline__input rigging__title_input" name="check_inline5" value="check_inline95" id="check_inline95">
																				<label for="check_inline95" class="check_inline__label check_inline__label-big rigging__title_label">
																					<svg width="24px" height="24px" viewBox="0 0 40 40" xmlns="http://www.w3.org/2000/svg" class="check_inline__icon checkbox">
																						<circle class="checkbox__rect" cx="50%" cy="50%" r="47%"></circle>
																						<polyline class="checkbox__checked" points="11,20.053 16.964,26.018 30.385,12.598"></polyline>
																					</svg>
																					<span class="check_inline__text">На свалку (от 2000)</span>
																				</label>
																			</div>
																			<div class="check_inline__one">
																				<input type="radio" class="rigger_checkbox_stage check_inline__input rigging__title_input" name="check_inline5" value="check_inline96" id="check_inline96">
																				<label for="check_inline96" class="check_inline__label check_inline__label-big rigging__title_label">
																					<svg width="24px" height="24px" viewBox="0 0 40 40" xmlns="http://www.w3.org/2000/svg" class="check_inline__icon checkbox">
																						<circle class="checkbox__rect" cx="50%" cy="50%" r="47%"></circle>
																						<polyline class="checkbox__checked" points="11,20.053 16.964,26.018 30.385,12.598"></polyline>
																					</svg>
																					<span class="check_inline__text">Во двор (от 1000)</span>
																				</label>
																			</div>
																			<div class="check_inline__one">
																				<input type="radio" class="rigger_checkbox_stage check_inline__input rigging__title_input" name="check_inline5" value="check_inline97" id="check_inline97">
																				<label for="check_inline97" class="check_inline__label check_inline__label-big rigging__title_label">
																					<svg width="24px" height="24px" viewBox="0 0 40 40" xmlns="http://www.w3.org/2000/svg" class="check_inline__icon checkbox">
																						<circle class="checkbox__rect" cx="50%" cy="50%" r="47%"></circle>
																						<polyline class="checkbox__checked" points="11,20.053 16.964,26.018 30.385,12.598"></polyline>
																					</svg>
																					<span class="check_inline__text">Заказ контейнера (300)</span>
																				</label>
																			</div>
																		</div>
																	</div>
																	<div class="rigging_one__config_form form">
																		<div class="form__row step__form_pt">
																			<div class="form__one form__one-w100">
																				<label for="" class="form__label form__label-left">Комментарий</label>
																				<div class="form__element_box">
																					<textarea class="form__element form__element-input" name="" id="" cols="30" rows="4"></textarea>
																				</div>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
												<div class="move_config__wrap">
													<div class="additionally__one">
														<p class="additionally__title">Дополнительно:</p>
														<div class="additionally__content">
															<div class="check_inline check_inline-additionally">
																<div class="check_inline__one">
																	<input type="checkbox" class="check_inline__input" name="check_inline39" value="check_inline39" id="check_inline39">
																	<label for="check_inline39" class="check_inline__label check_inline__label-big">
																		<svg width="24px" height="24px" viewBox="0 0 40 40" xmlns="http://www.w3.org/2000/svg" class="check_inline__icon checkbox">
																			<rect class="checkbox__rect" width="100%" height="100%"></rect>
																			<polyline class="checkbox__checked" points="11,20.053 16.964,26.018 30.385,12.598"></polyline>
																		</svg>
																		<span class="check_inline__text">Расстановка мебели (100)</span>
																	</label>
																</div>
																<div class="check_inline__one">
																	<input type="checkbox" class="check_inline__input" name="check_inline49" value="check_inline49" id="check_inline49">
																	<label for="check_inline49" class="check_inline__label check_inline__label-big">
																		<svg width="24px" height="24px" viewBox="0 0 40 40" xmlns="http://www.w3.org/2000/svg" class="check_inline__icon checkbox">
																			<rect class="checkbox__rect" width="100%" height="100%"></rect>
																			<polyline class="checkbox__checked" points="11,20.053 16.964,26.018 30.385,12.598"></polyline>
																		</svg>
																		<span class="check_inline__text">Сборка/ разборка мебели (300)</span>
																	</label>
																</div>
																<div class="check_inline__one">
																	<input type="checkbox" class="check_inline__input" name="check_inline59" value="check_inline59" id="check_inline59" checked>
																	<label for="check_inline59" class="check_inline__label check_inline__label-big">
																		<svg width="24px" height="24px" viewBox="0 0 40 40" xmlns="http://www.w3.org/2000/svg" class="check_inline__icon checkbox">
																			<rect class="checkbox__rect" width="100%" height="100%"></rect>
																			<polyline class="checkbox__checked" points="11,20.053 16.964,26.018 30.385,12.598"></polyline>
																		</svg>
																		<span class="check_inline__text">Вывоз мусора (200)</span>
																	</label>
																</div>
																<div class="check_inline__one">
																	<input type="checkbox" class="check_inline__input" name="check_inline69" value="check_inline69" id="check_inline69">
																	<label for="check_inline69" class="check_inline__label check_inline__label-big">
																		<svg width="24px" height="24px" viewBox="0 0 40 40" xmlns="http://www.w3.org/2000/svg" class="check_inline__icon checkbox">
																			<rect class="checkbox__rect" width="100%" height="100%"></rect>
																			<polyline class="checkbox__checked" points="11,20.053 16.964,26.018 30.385,12.598"></polyline>
																		</svg>
																		<span class="check_inline__text">Клининговые услуги (300)</span>
																	</label>
																</div>
																<div class="check_inline__one">
																	<input type="checkbox" class="check_inline__input" name="check_inline79" value="check_inline79" id="check_inline79">
																	<label for="check_inline79" class="check_inline__label check_inline__label-big">
																		<svg width="24px" height="24px" viewBox="0 0 40 40" xmlns="http://www.w3.org/2000/svg" class="check_inline__icon checkbox">
																			<rect class="checkbox__rect" width="100%" height="100%"></rect>
																			<polyline class="checkbox__checked" points="11,20.053 16.964,26.018 30.385,12.598"></polyline>
																		</svg>
																		<span class="check_inline__text">Снять кондиционер (300)</span>
																	</label>
																</div>
																<div class="check_inline__one">
																	<input type="checkbox" class="check_inline__input" name="check_inline89" value="check_inline89" id="check_inline89">
																	<label for="check_inline89" class="check_inline__label check_inline__label-big">
																		<svg width="24px" height="24px" viewBox="0 0 40 40" xmlns="http://www.w3.org/2000/svg" class="check_inline__icon checkbox">
																			<rect class="checkbox__rect" width="100%" height="100%"></rect>
																			<polyline class="checkbox__checked" points="11,20.053 16.964,26.018 30.385,12.598"></polyline>
																		</svg>
																		<span class="check_inline__text">Установить кондиционер (300)</span>
																	</label>
																</div>
															</div>
														</div>
													</div>
												</div>
												<div class="move_config__wrap">
													<div class="additionally__one">
														<p class="additionally__title">Контакты по данному адресу:</p>
														<div class="additionally__content">
															<div class="form">
																<div class="form__row step__form_pt">
																	<div class="form__one form__one-w50">
																		<label for="id149" class="form__label form__label-left">Имя</label>
																		<div class="form__element_box">
																			<input type="text" id="id149" value="" class="form__element form__element-input" required="">
																		</div>
																	</div>
																	<div class="form__one form__one-w50">
																		<label for="id249" class="form__label form__label-left">Телефон</label>
																		<div class="form__element_box">
																			<input type="tel" id="id249" value="" class="form__element form__element-input" required="">
																		</div>
																	</div>
																</div>
																<div class="form__row step__form_pt">
																	<div class="form__one form__one-w100">
																		<label for="id349" class="form__label form__label-left">Комментарий</label>
																		<div class="form__element_box">
																			<textarea class="form__element form__element-input" name="" id="id349" cols="30" rows="5"></textarea>
																		</div>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>

										<div class="move_step3__item move_config" id="qw4">
											<div class="move_config__head">
												<div class="move_config__left">
													<p class="move_config__spoiler_title">Транспорт <span class="move_config__spoiler_gray">— Наши рекомендации:</span></p>
												</div>
												<div class="move_config__right">
													<button class="move_config__spoiler" type="button">Свернуть</button>
												</div>
											</div>
											<div class="move_config__content">
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
														<div class="one_default">
															<p class="one_default__title">Автомобиль:</p>
															<div class="one_default__text_box one_default__text_box-flex">
																<p class="one_default__text">1-я категория (до 1,5 тонн, до 9м³)</p>
															</div>
														</div>
														<div class="one_default">
															<p class="one_default__title">Основное время:</p>
															<div class="one_default__text_box one_default__text_box-flex">
																<p class="one_default__text">8 часов – 7000 ₽</p>
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
												<span class="total_green__text">Итого, стоимость аренды транспорта:</span>
												<span class="total_green__price">9 000 ₽</span>
											</div>
										</div>

										<div class="move_step3__item move_config" id="qw5">
											<div class="move_config__head">
												<div class="move_config__left">
													<p class="move_config__spoiler_title">Грузчики <span class="move_config__spoiler_gray">— Наши рекомендации:</span></p>
												</div>
												<div class="move_config__right">
													<button class="move_config__spoiler" type="button">Свернуть</button>
												</div>
											</div>
											<div class="move_config__content">
												<div class="default_content">
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
												<span class="total_green__text">Итого, стоимость работы грузчиков:</span>
												<span class="total_green__price">8 000 ₽</span>
											</div>
										</div>

										<div class="move_step3__item move_config" id="qw6">
											<div class="move_config__head">
												<div class="move_config__left">
													<p class="move_config__spoiler_title">Упаковка <span class="move_config__spoiler_gray">— Наши рекомендации:</span></p>
												</div>
												<div class="move_config__right">
													<button class="move_config__spoiler" type="button">Свернуть</button>
												</div>
											</div>
											<div class="move_config__content">
												<div class="default_content">
													<div class="default_content__left">
														<div class="default_content__pic"><img src="/local/test/img/kits2.svg" alt="" class="default_content__img"></div>
														<div class="default_content__desc">
															<p class="default_content__text">Набор упаковочных материалов для переезда однокомнатной квартиры</p>
														</div>
													</div>
													<div class="default_content__right">
														<div class="one_default">
															<p class="one_default__title">
																Набор для 1-комнатной квартиры:
																<span class="one_default__tooltip tooltip" title="srgdsf">?</span>
															</p>
															<div class="one_default__text_box">
																<p class="one_default__text">Кол-во: 1</p>
																<p class="one_default__text">Стоимость набора: 5 750 ₽</p>
															</div>
														</div>
														<div class="one_default">
															<p class="one_default__title">Короб универсальный: 25 шт</p>
															<p class="one_default__title">Короб универсальный малый: 15 шт</p>
															<p class="one_default__title">Короб для одежды: 26 шт</p>
															<p class="one_default__title">Плёнка воздушно-пузырчатая, 115 мкр: 20 метров</p>
															<p class="one_default__title">Короб универсальный: 25 уп</p>
															<p class="one_default__title">Короб универсальный малый: 15 уп</p>
															<p class="one_default__title">Короб для одежды: 26 уп</p>
															<p class="one_default__title">Плёнка воздушно-пузырчатая, 115 мкр: 20 шт</p>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="move_config__no_hidden move_config__no_hidden-green">
											<div class="total_green">
												<span class="total_green__text">Итого, стоимость упаковки:</span>
												<span class="total_green__price">5 750 ₽</span>
											</div>
										</div>
									</div>
									<div class="move_step__buttons move_step1__buttons">
										<button class="move_step__btn btn btn-white" type="button" onClick='location.href="./step3s.php"'>Откорректировать вручную</button>
										<button class="move_step__btn btn" type="button" onClick='location.href="./step4.php"'>Далее</button>
									</div>
								</div>
							</form>
						</div>
					</div>
					<div class="page_steps__sidebar sidebar">
						<div class="navigator">
							<p class="navigator__title sidebar__title">Навигатор</p>
							<div class="navigator__list">
								<div class="navigator__item">
									<span class="navigator__icon"><i class="navigator__i"></i></span>
									<button class="navigator__link" data-scroll="#" type="button">Маршрут</button>
								</div>
								<div class="navigator__item">
									<span class="navigator__icon"><i class="navigator__i"></i></span>
									<button class="navigator__link" data-scroll="#" type="button">Пункт отправления <span class="navigator__price">4000 ₽</span></button>
								</div>
								<div class="navigator__item">
									<span class="navigator__icon"><i class="navigator__i"></i></span>
									<button class="navigator__link" data-scroll="#" type="button">Промежуточный адрес <span class="navigator__price">2000 ₽</span></button>
								</div>
								<div class="navigator__item">
									<span class="navigator__icon"><i class="navigator__i"></i></span>
									<button class="navigator__link" data-scroll="#" type="button">Пункт назначения <span class="navigator__price">1985 ₽</span></button>
								</div>
								<div class="navigator__item">
									<span class="navigator__icon"><i class="navigator__i"></i></span>
									<button class="navigator__link" data-scroll="#" type="button">Транспорт <span class="navigator__price">16000 ₽</span></button>
								</div>
								<div class="navigator__item">
									<span class="navigator__icon"><i class="navigator__i"></i></span>
									<button class="navigator__link" data-scroll="#" type="button">Грузчики <span class="navigator__price">16000 ₽</span></button>
								</div>
								<div class="navigator__item">
									<span class="navigator__icon"><i class="navigator__i"></i></span>
									<button class="navigator__link" data-scroll="#" type="button">Упаковка <span class="navigator__price">5750 ₽</span></button>
								</div>
							</div>
							<p class="navigator__total">Итого: <span class="navigator__total_price">39 985 ₽</span></p>
							<div class="navigator__buttons">
								<button class="navigator__btn btn btn-white" type="button" onClick='location.href="./step3s.php"'>Редактировать</button>
								<button class="navigator__btn btn" type="button" onClick='location.href="./step4.php"'>Оформить заказ</button>
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