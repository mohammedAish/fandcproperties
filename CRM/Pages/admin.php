<?php 
session_start();
if (!isset($_SESSION["id"])){
	header("Location: ../Auth/login.php");
  }
?>

<!DOCTYPE html>
<html lang="ru">

<head>
	<title>Home Page</title>
	<meta charset="UTF-8">
	<meta name="format-detection" content="telephone=no">
	<!-- <style>body{opacity: 0;}</style> -->
	<link rel="stylesheet" href="css/style.min.css?_v=20220720174136">
	<link rel="shortcut icon" href="favicon.ico">
	<!-- <meta name="robots" content="noindex, nofollow"> -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
	<div class="wrapper">
		<header class="header">
			<div class="header__wrapper">
				<div class="header__body">
					<div class="header__profile profile-header">
						<div class="profile-header__container">
							<div class="profile-header__body">
								<a href="../Auth/user_logout.php" class="profile-header__user">
									<picture><source srcset="img/agents/<?php echo $_SESSION['pic']; ?> " type="image/webp"><img class="profile-header__image" src="img/agents/<?php echo $_SESSION['pic']; ?> " alt=""></picture>
									<span class="profile-header__profession-type">
										<?php echo $_SESSION['full_name'] ; ?>
									</span>
								</a>
								<a href="#" class="profile-header__logo">
									<picture><source srcset="img/logo.webp" type="image/webp"><img src="img/logo.png" alt=""></picture>
								</a>
							</div>
						</div>
					</div>
					<div class="header__catalog catalog-header">
						<div class="catalog-header__container">
							<nav class="catalog-header__body">
								<ul class="catalog-header__list">
									<li class="catalog-header__item">
										<a href="" class="catalog-header__link">
											<picture><source srcset="img/profile/02.webp" type="image/webp"><img class="catalog-header__image" src="img/profile/02.jpg" alt=""></picture>
											<p class="catalog-header__text">
												Home
											</p>
										</a>
									</li>
									<li class="catalog-header__item">
										<a href="" class="catalog-header__link">
											<picture><source srcset="img/profile/03.webp" type="image/webp"><img class="catalog-header__image" src="img/profile/03.jpg" alt=""></picture>
											<p class="catalog-header__text">
												New listnigs
											</p>
										</a>
									</li>
									<li class="catalog-header__item">
										<a href="" class="catalog-header__link">
											<picture><source srcset="img/profile/04.webp" type="image/webp"><img class="catalog-header__image" src="img/profile/04.png" alt=""></picture>
											<p class="catalog-header__text">
												Photographer
											</p>
										</a>
									</li>
									<li class="catalog-header__item">
										<a href="" class="catalog-header__link">
											<picture><source srcset="img/profile/05.webp" type="image/webp"><img class="catalog-header__image" src="img/profile/05.png" alt=""></picture>
											<p class="catalog-header__text">
												Tasks
											</p>
										</a>
									</li>
									<li class="catalog-header__item">
										<a href="" class="catalog-header__link">
											<picture><source srcset="img/profile/06.webp" type="image/webp"><img class="catalog-header__image" src="img/profile/06.png" alt=""></picture>
											<p class="catalog-header__text">
												All Leads
											</p>
										</a>
									</li>
									<li class="catalog-header__item">
										<a href="" class="catalog-header__link">
											<picture><source srcset="img/profile/07.webp" type="image/webp"><img class="catalog-header__image" src="img/profile/07.png" alt=""></picture>
											<p class="catalog-header__text">
												Availabilities
											</p>
										</a>
									</li>
									<li class="catalog-header__item">
										<a href="" class="catalog-header__link">
											<picture><source srcset="img/profile/08.webp" type="image/webp"><img class="catalog-header__image" src="img/profile/08.png" alt=""></picture>
											<p class="catalog-header__text">
												Look like leads
											</p>
										</a>
									</li>
									<li class="catalog-header__item">
										<a href="" class="catalog-header__link">
											<picture><source srcset="img/profile/09.webp" type="image/webp"><img class="catalog-header__image" src="img/profile/09.png" alt=""></picture>
											<p class="catalog-header__text">
												Calendar
											</p>
										</a>
									</li>
									<li class="catalog-header__item">
										<a href="" class="catalog-header__link">
											<picture><source srcset="img/profile/10.webp" type="image/webp"><img class="catalog-header__image" src="img/profile/10.png" alt=""></picture>
											<p class="catalog-header__text">
												F&C Documents
											</p>
										</a>
									</li>
									<li class="catalog-header__item">
										<a href="" class="catalog-header__link">
											<picture><source srcset="img/profile/11.webp" type="image/webp"><img class="catalog-header__image" src="img/profile/11.png" alt=""></picture>
											<p class="catalog-header__text">
												website
											</p>
										</a>
									</li>
								</ul>
							</nav>
						</div>
					</div>
				</div>
			</div>
		</header>
		<main class="page">
			<section class="page__main-leads main-leads">
				<!-- <div class="main-leads__wrapper"> -->
				<div class="main-leads__body">
					<div data-tabs class="main-leads__tabs main-leads-tabs">
						<div class="main-leads-tabs__wrapper">
							<button data-popup="#form-admin" type="button" class="main-leads-tabs__title main-leads-tabs__title_green">Create Listing</button>
							<nav data-tabs-titles class="main-leads-tabs__navigation">
								<button type="button" class="main-leads-tabs__title _tab-active">My Listings</button>
								<button type="button" class="main-leads-tabs__title">My Availibilities</button>
								<button type="button" class="main-leads-tabs__title">Company Listings</button>
								<button type="button" class="main-leads-tabs__title">Company availibilities</button>
								<button type="button" class="main-leads-tabs__title">Draft Listings</button>
								<button type="button" class="main-leads-tabs__title">Archive Listings</button>
							</nav>
						</div>
						<div data-tabs-body class="main-leads-tabs__content">
							<div class="main-leads-tabs__body">
								<div class="main-leads-tabs__table main-leads-table">
									<table class="main-leads-table__table">
										<thead class="main-leads-table__head">
											<tr class="main-leads-table__tr">
												<th class="main-leads-table__th main-leads-table__th_140">
													<form action="#" class="main-leads-table__form">
														<button type="button" class="main-leads-table__button _icon-filtered">Reference</button>
														<div class="main-leads-table__input-wrapper">
															<input autocomplete="off" type="text" name="form[]" data-error="Ошибка" placeholder="" class="main-leads-table__input input">
														</div>
													</form>
												</th>
												<th class="main-leads-table__th main-leads-table__th_95">
													<form action="#" class="main-leads-table__form">
														<button type="button" class="main-leads-table__button _icon-filtered">Live Status</button>
														<div class="main-leads-table__input-wrapper">
															<input autocomplete="off" type="text" name="form[]" data-error="Ошибка" placeholder="" class="main-leads-table__input input">
														</div>
													</form>
												</th>
												<th class="main-leads-table__th main-leads-table__th_80">
													<form action="#" class="main-leads-table__form">
														<button type="button" class="main-leads-table__button _icon-filtered">Status</button>
														<div class="main-leads-table__input-wrapper">
															<input autocomplete="off" type="text" name="form[]" data-error="Ошибка" placeholder="" class="main-leads-table__input input">
														</div>
													</form>
												</th>
												<th class="main-leads-table__th main-leads-table__th_80">
													<form action="#" class="main-leads-table__form">
														<button type="button" class="main-leads-table__button _icon-filtered">For</button>
														<div class="main-leads-table__input-wrapper">
															<input autocomplete="off" type="text" name="form[]" data-error="Ошибка" placeholder="" class="main-leads-table__input input">
														</div>
													</form>
												</th>
												<th class="main-leads-table__th main-leads-table__th_80">
													<form action="#" class="main-leads-table__form">
														<button type="button" class="main-leads-table__button _icon-filtered">Category</button>
														<div class="main-leads-table__input-wrapper">
															<input autocomplete="off" type="text" name="form[]" data-error="Ошибка" placeholder="" class="main-leads-table__input input">
														</div>
													</form>
												</th>
												<th class="main-leads-table__th main-leads-table__th_60">
													<form action="#" class="main-leads-table__form">
														<button type="button" class="main-leads-table__button _icon-filtered">Unit</button>
														<div class="main-leads-table__input-wrapper">
															<input autocomplete="off" type="text" name="form[]" data-error="Ошибка" placeholder="" class="main-leads-table__input input">
														</div>
													</form>
												</th>
												<th class="main-leads-table__th main-leads-table__th_190">
													<form action="#" class="main-leads-table__form">
														<button type="button" class="main-leads-table__button _icon-filtered">Location</button>
														<div class="main-leads-table__input-wrapper">
															<input autocomplete="off" type="text" name="form[]" data-error="Ошибка" placeholder="" class="main-leads-table__input input">
														</div>
													</form>
												</th>
												<th class="main-leads-table__th main-leads-table__th_140">
													<form action="#" class="main-leads-table__form">
														<button type="button" class="main-leads-table__button _icon-filtered">Sub Location</button>
														<div class="main-leads-table__input-wrapper">
															<input autocomplete="off" type="text" name="form[]" data-error="Ошибка" placeholder="" class="main-leads-table__input input">
														</div>
													</form>
												</th>
												<th class="main-leads-table__th main-leads-table__th_85">
													<form action="#" class="main-leads-table__form">
														<button type="button" class="main-leads-table__button _icon-filtered">Price</button>
														<div class="main-leads-table__input-wrapper">
															<input autocomplete="off" type="text" name="form[]" data-error="Ошибка" placeholder="" class="main-leads-table__input input">
														</div>
													</form>
												</th>
												<th class="main-leads-table__th main-leads-table__th_85">
													<form action="#" class="main-leads-table__form">
														<button type="button" class="main-leads-table__button _icon-filtered">Beds</button>
														<div class="main-leads-table__input-wrapper">
															<input autocomplete="off" type="text" name="form[]" data-error="Ошибка" placeholder="" class="main-leads-table__input input">
														</div>
													</form>
												</th>
												<th class="main-leads-table__th main-leads-table__th_85">
													<form action="#" class="main-leads-table__form">
														<button type="button" class="main-leads-table__button _icon-filtered">Leads</button>
														<div class="main-leads-table__input-wrapper">
															<input autocomplete="off" type="text" name="form[]" data-error="Ошибка" placeholder="" class="main-leads-table__input input">
														</div>
													</form>
												</th>
												<th class="main-leads-table__th main-leads-table__th_175">
													<p class="main-leads-table__text main-leads-table-text main-leads-table-text__right">Actions</p>
													<div class="actions-main-leads-table main-leads-table__actions">
														<ul class="actions-main-leads-table__list">
															<li class="actions-main-leads-table__item">
																<button type="button" class="actions-main-leads-table__button actions-main-leads-table__button_search _icon-search"></button>
															</li>
															<li class="actions-main-leads-table__item">
																<button type="button" class="actions-main-leads-table__button actions-main-leads-table__button_restart _icon-restart"></button>
															</li>
														</ul>
													</div>

												</th>
											</tr>
										</thead>
										<tbody class="main-leads-table__body">
											<tr class="main-leads-table__tr">
												<td class="main-leads-table__td main-leads-table__td_140">
													<p class="main-leads-table__reference main-leads-table-text ">
														FC-S-F-01388
													</p>
												</td>
												<td class="main-leads-table__td main-leads-table__td_95">
													<div class="main-leads-table__status status-main-leads-table">
														<span class="status-main-leads-table__success _icon-galochka"></span>
														<div class="status-main-leads-table__properties-icons">
															<span class="status-main-leads-table__icon _icon-dubizl"></span>
															<span class="status-main-leads-table__icon _icon-property-finder"></span>
															<span class="status-main-leads-table__icon _icon-bayut"></span>
															<span class="status-main-leads-table__icon _icon-standart"></span>
														</div>
													</div>
												</td>
												<td class="main-leads-table__td main-leads-table__td_80">
													<p class="main-leads-table__type-status _icon-galochka">
														<span class="main-leads-table-text main-leads-table-text__green">Approved</span>
													</p>
												</td>
												<td class="main-leads-table__td main-leads-table__td_80">
													<p class="main-leads-table__text main-leads-table-text main-leads-table-text__center">Sale</p>
												</td>
												<td class="main-leads-table__td main-leads-table__td_80">
													<p class="main-leads-table__text main-leads-table-text main-leads-table-text__center">Villa</p>
												</td>
												<td class="main-leads-table__td main-leads-table__td_60">
													<p class="main-leads-table__text main-leads-table-text main-leads-table-text__center">404</p>
												</td>
												<td class="main-leads-table__td main-leads-table__td_190 ">
													<p class="main-leads-table__text main-leads-table-text">District One Villas, Mohammed Bin Rashid City, Dubai</p>
												</td>
												<td class="main-leads-table__td main-leads-table__td_140 ">
													<p class="main-leads-table__text main-leads-table-text">Dstrict One Villas</p>
												</td>
												<td class="main-leads-table__td main-leads-table__td_85 ">
													<p class="main-leads-table__text main-leads-table-text">15,999,888</p> <!-- /(\d)(?=(\d\d\d)+([^\d]|$))/g --- I hope this helps you -->
												</td>
												<td class="main-leads-table__td main-leads-table__td_85 ">
													<p class="main-leads-table__text main-leads-table__text">5</p>
												</td>
												<td class="main-leads-table__td main-leads-table__td_85 ">
													<p class="main-leads-table__text main-leads-table-text">0</p>
												</td>
												<td class="main-leads-table__td main-leads-table__td_175">
													<div class="main-leads-table__actions actions-main-leads-table">
														<ul class="actions-main-leads-table__list">
															<li class="actions-main-leads-table__item">
																<button type="button" class="actions-main-leads-table__button actions-main-leads-table__button_load _icon-load"></button>
															</li>
															<li class="actions-main-leads-table__item">
																<button type="button" class="actions-main-leads-table__button actions-main-leads-table__button_view _icon-view"></button>
															</li>
															<li class="actions-main-leads-table__item">
																<button type="button" class="actions-main-leads-table__button actions-main-leads-table__button_editing _icon-editing"></button>
															</li>
															<li class="actions-main-leads-table__item">
																<button type="button" class="actions-main-leads-table__button actions-main-leads-table__button_copyboard _icon-copyboard"></button>
															</li>
															<li class="actions-main-leads-table__item">
																<button type="button" class="actions-main-leads-table__button actions-main-leads-table__button_archive _icon-archive"></button>
															</li>
															<li class="actions-main-leads-table__item">
																<button type="button" class="actions-main-leads-table__button actions-main-leads-table__button_delete _icon-delete"></button>
															</li>
														</ul>
													</div>
												</td>
											</tr>
											<tr class="main-leads-table__tr">
												<td class="main-leads-table__td main-leads-table__td_140">
													<p class="main-leads-table__reference main-leads-table-text ">
														FC-S-F-01388
													</p>
												</td>
												<td class="main-leads-table__td main-leads-table__td_95">
													<div class="main-leads-table__status status-main-leads-table">
														<span class="status-main-leads-table__success _icon-galochka"></span>
														<div class="status-main-leads-table__properties-icons">
															<span class="status-main-leads-table__icon _icon-dubizl"></span>
															<span class="status-main-leads-table__icon _icon-property-finder"></span>
															<span class="status-main-leads-table__icon _icon-bayut"></span>
															<span class="status-main-leads-table__icon _icon-standart"></span>
														</div>
													</div>
												</td>
												<td class="main-leads-table__td main-leads-table__td_80">
													<p class="main-leads-table__type-status _icon-galochka">
														<span class="main-leads-table-text main-leads-table-text__green">Approved</span>
													</p>
												</td>
												<td class="main-leads-table__td main-leads-table__td_80">
													<p class="main-leads-table__text main-leads-table-text main-leads-table-text__center">Sale</p>
												</td>
												<td class="main-leads-table__td main-leads-table__td_80">
													<p class="main-leads-table__text main-leads-table-text main-leads-table-text__center">Villa</p>
												</td>
												<td class="main-leads-table__td main-leads-table__td_60">
													<p class="main-leads-table__text main-leads-table-text main-leads-table-text__center">404</p>
												</td>
												<td class="main-leads-table__td main-leads-table__td_190 ">
													<p class="main-leads-table__text main-leads-table-text">District One Villas, Mohammed Bin Rashid City, Dubai</p>
												</td>
												<td class="main-leads-table__td main-leads-table__td_140 ">
													<p class="main-leads-table__text main-leads-table-text">Dstrict One Villas</p>
												</td>
												<td class="main-leads-table__td main-leads-table__td_85 ">
													<p class="main-leads-table__text main-leads-table-text">15,999,888</p> <!-- /(\d)(?=(\d\d\d)+([^\d]|$))/g --- I hope this helps you -->
												</td>
												<td class="main-leads-table__td main-leads-table__td_85 ">
													<p class="main-leads-table__text main-leads-table__text">5</p>
												</td>
												<td class="main-leads-table__td main-leads-table__td_85 ">
													<p class="main-leads-table__text main-leads-table-text">0</p>
												</td>
												<td class="main-leads-table__td main-leads-table__td_175">
													<div class="main-leads-table__actions actions-main-leads-table">
														<ul class="actions-main-leads-table__list">
															<li class="actions-main-leads-table__item">
																<button type="button" class="actions-main-leads-table__button actions-main-leads-table__button_load _icon-load"></button>
															</li>
															<li class="actions-main-leads-table__item">
																<button type="button" class="actions-main-leads-table__button actions-main-leads-table__button_view _icon-view"></button>
															</li>
															<li class="actions-main-leads-table__item">
																<button type="button" class="actions-main-leads-table__button actions-main-leads-table__button_editing _icon-editing"></button>
															</li>
															<li class="actions-main-leads-table__item">
																<button type="button" class="actions-main-leads-table__button actions-main-leads-table__button_copyboard _icon-copyboard"></button>
															</li>
															<li class="actions-main-leads-table__item">
																<button type="button" class="actions-main-leads-table__button actions-main-leads-table__button_archive _icon-archive"></button>
															</li>
															<li class="actions-main-leads-table__item">
																<button type="button" class="actions-main-leads-table__button actions-main-leads-table__button_delete _icon-delete"></button>
															</li>
														</ul>
													</div>
												</td>
											</tr>
											
										</tbody>
									</table>
								</div>
							</div>
							<div class="main-leads-tabs__body">
								Содержимое второго таба
							</div>
							<div class="main-leads-tabs__body">
								Содержимое третьего таба
							</div>
							<div class="main-leads-tabs__body">
								Содержимое четвертого таба
							</div>
							<div class="main-leads-tabs__body">
								Содержимое третьего таба
							</div>
							<div class="main-leads-tabs__body">
								Содержимое четвертого таба
							</div>
						</div>
					</div>
				</div>
				<!-- </div> -->
			</section>
		</main>
		<footer class="footer">
			<div class="footer__container">
			</div>
		</footer>
	</div>
	<div id="form-admin" aria-hidden="true" class="popup form-admin-popup">
		<!-- <div class="popup__wrapper"> -->
		<div class="popup__content form-admin-popup__content">
			<div class="form-admin-popup__body">
				<div class="form-admin-popup__header">
					<h2 class="form-admin-popup__header-title">Admin</h2>
					<div class="form-admin-popup__logo">
						<picture><source srcset="img/logo.webp" type="image/webp"><img src="img/logo.png" class="form-admin-popup__logo-image" alt=""></picture>
						<button data-close type="button" class="form-admin-popup__close"></button>
					</div>
				</div>
				<div class="form-admin-popup__content form-admin-popup-content">
					<form action="#" enctype="multipart/form-data" data-spollers="991,max" class="form-admin-popup-content__spollers">
						<div class="form-admin-popup-content__item form-admin-popup-content-item">
							<div class="form-admin-popup-content-item__body">
								<button type="button" data-spoller class="form-admin-popup-content-item__title">Property Address & Details</button>
								<div class="form-admin-popup-content-item__content">
									<div class="form-admin-popup-content-item__row">
										<div class="form-admin-popup-content-item__column ">
											<label for="property-for" class="form-admin-popup-content-item__label">Property For *</label>
											<select name="form[property-for]" id="property-for" class="form-admin-popup-content-item__select">
												<option value="1" selected>Rental</option>
												<option value="2">Пункт №2</option>
												<option value="3">Пункт №3</option>
												<option value="4">Пункт №4</option>
											</select>
										</div>
										<div class="form-admin-popup-content-item__column ">
											<label for="property-type" class="form-admin-popup-content-item__label">Property Type *</label>
											<select required name="form[property-type]" id="property-type" class="form-admin-popup-content-item__select">
												<option value="1" selected>Residential</option>
												<option value="2">Пункт №2</option>
												<option value="3">Пункт №3</option>
												<option value="4">Пункт №4</option>
											</select>
										</div>
									</div>
									<div class="form-admin-popup-content-item__row">
										<div class="form-admin-popup-content-item__column ">
											<label for="category" class="form-admin-popup-content-item__label">Category *</label>
											<select required name="form[category]" id="category" class="form-admin-popup-content-item__select">
												<option value="1" selected>Apartment</option>
												<option value="2">Пункт №2</option>
												<option value="3">Пункт №3</option>
												<option value="4">Пункт №4</option>
											</select>
										</div>
									</div>
									<div class="form-admin-popup-content-item__row">
										<div class="form-admin-popup-content-item__column ">
											<label for="beds" class="form-admin-popup-content-item__label">Beds *</label>
											<select required name="form[beds]" id="beds" class="form-admin-popup-content-item__select">
												<option value="1" selected>1 bed</option>
												<option value="2">Пункт №2</option>
												<option value="3">Пункт №3</option>
												<option value="4">Пункт №4</option>
											</select>
										</div>
										<div class="form-admin-popup-content-item__column ">
											<label for="baths" class="form-admin-popup-content-item__label">Baths *</label>
											<select required name="form[baths]" id="baths" class="form-admin-popup-content-item__select">
												<option value="1" selected>2 bath</option>
												<option value="2">Пункт №2</option>
												<option value="3">Пункт №3</option>
												<option value="4">Пункт №4</option>
											</select>
										</div>
									</div>
									<div class="form-admin-popup-content-item__row">
										<div class="form-admin-popup-content-item__column ">
											<label for="city" class="form-admin-popup-content-item__label">City *</label>
											<select required name="form[city]" id="city" class="form-admin-popup-content-item__select">
												<option value="1" selected>Dubai</option>
												<option value="2">Пункт №2</option>
												<option value="3">Пункт №3</option>
												<option value="4">Пункт №4</option>
											</select>
										</div>
									</div>
									<div class="form-admin-popup-content-item__row">
										<div class="form-admin-popup-content-item__column ">
											<label for="location" class="form-admin-popup-content-item__label">Location *</label>
											<select required name="form[location]" id="location" class="form-admin-popup-content-item__select">
												<option value="1" selected>International City</option>
												<option value="2">Пункт №2</option>
												<option value="3">Пункт №3</option>
												<option value="4">Пункт №4</option>
											</select>
										</div>
									</div>
									<div class="form-admin-popup-content-item__row">
										<div class="form-admin-popup-content-item__column ">
											<label for="sub-location" class="form-admin-popup-content-item__label">Sub location *</label>
											<select required name="form[sub-location]" id="sub-location" class="form-admin-popup-content-item__select">
												<option value="1" selected>International City</option>
												<option value="2">Пункт №2</option>
												<option value="3">Пункт №3</option>
												<option value="4">Пункт №4</option>
											</select>
										</div>
									</div>
									<div class="form-admin-popup-content-item__row">
										<div class="form-admin-popup-content-item__column ">
											<label for="tower" class="form-admin-popup-content-item__label">Tower *</label>
											<select required name="form[tower]" id="tower" class="form-admin-popup-content-item__select">
												<option value="1" selected>International City</option>
												<option value="2">Пункт №2</option>
												<option value="3">Пункт №3</option>
												<option value="4">Пункт №4</option>
											</select>
										</div>
									</div>
									<div class="form-admin-popup-content-item__row">
										<div class="form-admin-popup-content-item__column">
											<div class="form-admin-popup-content-item__icon-column">
												<input id="permition" autocomplete="off" data-type="text" type="text" name="form[permition]" data-error="Ошибка" required="" placeholder="Permit No." class="form-admin-popup-content-item__input form-admin-popup-content-item__input_file">
												<label for="permition" class="form-admin-popup-content-item__label form-admin-popup-content-item__label_file"></label>
											</div>
										</div>
									</div>
									<div class="form-admin-popup-content-item__row">
										<div class="form-admin-popup-content-item__column form-admin-popup-content-item__column_margin">
											<!-- <label for="beds" class="form-admin-popup-content-item__label">Transaction No. *</label> -->
											<select name="form[transaction]" id="transaction" class="form-admin-popup-content-item__select">
												<option value="1" selected>Transaction No.</option>
												<option value="2">Пункт №2</option>
												<option value="3">Пункт №3</option>
												<option value="4">Пункт №4</option>
											</select>
										</div>
										<div class="form-admin-popup-content-item__column form-admin-popup-content-item__column_margin">
											<label for="permition-expiry" class="form-admin-popup-content-item__label">Permit Expiry Date *</label>
											<select required name="form[permition-expiry]" id="permition-expiry" class="form-admin-popup-content-item__select">
												<option value="1" selected>13-05-2020</option>
												<option value="2">Пункт №2</option>
												<option value="3">Пункт №3</option>
												<option value="4">Пункт №4</option>
											</select>
										</div>
									</div>
									<div class="form-admin-popup-content-item__row">
										<div class="form-admin-popup-content-item__column form-admin-popup-content-item__column_margin">
											<input autocomplete="off" data-type="text" type="text" name="form[area-sqft]" data-error="Ошибка" required placeholder="Built-up Area(sq.ft) *" class="form-admin-popup-content-item__input">
											<!-- <label for="beds" class="form-admin-popup-content-item__label">Transaction No. *</label> -->
										</div>
									</div>
									<div class="form-admin-popup-content-item__row">
										<div class="form-admin-popup-content-item__column">
											<input autocomplete="off" data-type="text" type="text" name="form[plot-area]" data-error="Ошибка" placeholder="Plot Area" class="form-admin-popup-content-item__input">
										</div>
										<div class="form-admin-popup-content-item__column">
											<input autocomplete="off" data-type="text" type="text" name="form[view]" data-error="Ошибка" placeholder="Built-up Area(sq.ft) *" class="form-admin-popup-content-item__input">
										</div>
									</div>
									<div class="form-admin-popup-content-item__row">
										<div class="form-admin-popup-content-item__column form-admin-popup-content-item__column_margin">
											<label for="furnished" class="form-admin-popup-content-item__label">Furnished</label>
											<select required name="form[furnished]" id="furnished" class="form-admin-popup-content-item__select">
												<option value="1" selected>Unfurnished</option>
												<option value="2">Пункт №2</option>
												<option value="3">Пункт №3</option>
												<option value="4">Пункт №4</option>
											</select>
										</div>
										<div class="form-admin-popup-content-item__column form-admin-popup-content-item__column_margin">
											<input autocomplete="off" type="text" name="form[parking]" data-error="Ошибка" placeholder="parking" class="form-admin-popup-content-item__input">
										</div>
									</div>
									<div class="form-admin-popup-content-item__row">
										<div class="form-admin-popup-content-item__column form-admin-popup-content-item__column_margin">
											<input autocomplete="off" data-type="text" type="text" name="form[property-developer]" data-error="Ошибка" placeholder="Property Developer" class="form-admin-popup-content-item__input">
										</div>
										<div class="form-admin-popup-content-item__column form-admin-popup-content-item__column_margin">
											<label for="freehold" class="form-admin-popup-content-item__label">Property Ownership</label>
											<select required name="form[freehold]" id="freehold" class="form-admin-popup-content-item__select">
												<option value="1" selected>Freehold</option>
												<option value="2">Пункт №2</option>
												<option value="3">Пункт №3</option>
												<option value="4">Пункт №4</option>
											</select>
										</div>
									</div>
									<div class="form-admin-popup-content-item__row">
										<div class="form-admin-popup-content-item__column form-admin-popup-content-item__column_margin">
											<label for="occupancy" class="form-admin-popup-content-item__label">Occupancy</label>
											<select required name="form[occupancy]" id="occupancy" class="form-admin-popup-content-item__select">
												<option value="1" selected>Select option</option>
												<option value="2">Пункт №2</option>
												<option value="3">Пункт №3</option>
												<option value="4">Пункт №4</option>
											</select>
										</div>
										<div class="form-admin-popup-content-item__column form-admin-popup-content-item__column_margin">
											<label for="property-ownership" class="form-admin-popup-content-item__label">Property Ownership</label>
											<select required name="form[property-ownership]" id="property-ownership" class="form-admin-popup-content-item__select">
												<option value="1" selected>Complated</option>
												<option value="2">Пункт №2</option>
												<option value="3">Пункт №3</option>
												<option value="4">Пункт №4</option>
											</select>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="form-admin-popup-content__item form-admin-popup-content-item">
							<div class="form-admin-popup-content-item__wrapper">
								<div class="form-admin-popup-content-item__body">
									<button type="button" data-spoller class="form-admin-popup-content-item__title">Property Pricing</button>
									<div class="form-admin-popup-content-item__content">
										<div class="form-admin-popup-content-item__row">
											<div class="form-admin-popup-content-item__column form-admin-popup-content-item__column_margin">
												<label for="rental-price" class="form-admin-popup-content-item__label">Rental Price *</label>
												<div class="form-admin-popup-content-item__with-text">
													<input required autocomplete="off" data-type="text" type="text" id="rental-price" name="form[rental-price]" data-error="Ошибка" required placeholder="Rental Price" class="form-admin-popup-content-item__input">
													<span class="form-admin-popup-content-item__currency">AED</span>
												</div>
											</div>
											<div class="form-admin-popup-content-item__column form-admin-popup-content-item__column_margin">
												<label for="price-sq-ft" class="form-admin-popup-content-item__label">Price / Sq Ft</label>
												<div class="form-admin-popup-content-item__with-text">
													<input autocomplete="off" data-type="text" type="text" name="form[price-sq-ft]" id="price-sq-ft" data-error="Ошибка" required placeholder="Price / Sq Ft" class="form-admin-popup-content-item__input">
													<span>AED</span>
												</div>
											</div>
										</div>
										<div class="form-admin-popup-content-item__row">
											<div class="form-admin-popup-content-item__column form-admin-popup-content-item__column_margin">
												<label for="occupancy" class="form-admin-popup-content-item__label">Frequecy</label>
												<select required name="form[occupancy]" id="occupancy" class="form-admin-popup-content-item__select">
													<option value="1" selected>Yearly</option>
													<option value="2">Пункт №2</option>
													<option value="3">Пункт №3</option>
													<option value="4">Пункт №4</option>
												</select>
											</div>
											<div class="form-admin-popup-content-item__column form-admin-popup-content-item__column_margin">
												<label for="property-ownership" class="form-admin-popup-content-item__label">Property Ownership</label>
												<select required name="form[property-ownership]" id="property-ownership" class="form-admin-popup-content-item__select">
													<option value="1" selected>Complated</option>
													<option value="2">Пункт №2</option>
													<option value="3">Пункт №3</option>
													<option value="4">Пункт №4</option>
												</select>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="form-admin-popup-content-item__wrapper form-admin-popup-content-item__wrapper_full-height">
								<div class="form-admin-popup-content-item__body">
									<button type="button" data-spoller class="form-admin-popup-content-item__title">Links</button>
									<div class="form-admin-popup-content-item__content">
										<div class="form-admin-popup-content-item__row">
											<div class="form-admin-popup-content-item__column">
												<label for="link" class="form-admin-popup-content-item__label">Youtube Link</label>
												<input required autocomplete="off" data-type="text" type="text" id="link" name="form[link]" data-error="Ошибка" required placeholder="Youtube Link" class="form-admin-popup-content-item__input">
											</div>
											<div class="form-admin-popup-content-item__column">
												<label for="tour-link" class="form-admin-popup-content-item__label">360 virtual Tour Link</label>
												<input autocomplete="off" data-type="text" type="text" name="form[tour-link]" id="tour-link" data-error="Ошибка" required placeholder="360 virtual Tour Link" class="form-admin-popup-content-item__input">
											</div>
										</div>
										<div class="form-admin-popup-content-item__row">
											<div class="form-admin-popup-content-item__column">
												<label for="audio-tour" class="form-admin-popup-content-item__label">Audio Tour Link</label>
												<input required autocomplete="off" data-type="text" type="text" id="audio-tour" name="form[audio-tour]" data-error="Ошибка" required placeholder="Audio Tour Link" class="form-admin-popup-content-item__input">
											</div>
											<div class="form-admin-popup-content-item__column">
												<label for="qr-code" class="form-admin-popup-content-item__label">QR Code Link</label>
												<input autocomplete="off" data-type="text" type="text" name="form[qr-code]" id="qr-code" data-error="Ошибка" required placeholder="QR Code Link" class="form-admin-popup-content-item__input">
											</div>
										</div>
										<div class="form-admin-popup-content-item__row">
											<div class="form-admin-popup-content-item__column">
												<label for="title" class="form-admin-popup-content-item__label">Title *</label>
												<input required data-type="text" autocomplete="off" type="text" id="title" name="form[title]" data-error="Ошибка" required placeholder="Title" class="form-admin-popup-content-item__input">
											</div>
										</div>
										<div class="form-admin-popup-content-item__row">
											<div class="form-admin-popup-content-item__column">
												<label for="description" class="form-admin-popup-content-item__label">Description *</label>
												<!-- <input required autocomplete="off" type="text" id="description" name="form[description]" data-error="Ошибка" required placeholder="Description" class="form-admin-popup-content-item__input"> -->
												<textarea data-type="text" autocomplete="off" name="form[description]" id="description" placeholder="Description *" data-error="Ошибка" class="form-admin-popup-content-item__textarea"></textarea>
											</div>
										</div>
										<div class="form-admin-popup-content-item__row form-admin-popup-content-item__row_center">
											<div class="form-admin-popup-content-item__column form-admin-popup-content-item-question">
												<div class="form-admin-popup-content-item-question__wrapper">
													<button type="button" class="form-admin-popup-content-item-question__button">
														<span>Watermark</span>
														<div class="form-admin-popup-content-item-question__symbol">?</div>
													</button>
													<div class="form-admin-popup-content-item-question__body">
														<div class="form-admin-popup-content-item-question__content">
															<p class="form-admin-popup-content-item-question__text">Some question from some info. Some info about block</p>
															<div class="form-admin-popup-content-item-question__footer">
																<p class="form-admin-popup-content-item-question__text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, consequatur.</p>
															</div>
														</div>
													</div>
												</div>
											</div>
											<div class="form-admin-popup-content-item__column form-admin-popup-content-item-checkbox">
												<div class="form-admin-popup-content-item-checkbox__body">
													<label for="c_1" class="form-admin-popup-content-item-checkbox__variant">No</label>
													<div for="c_1" class="form-admin-popup-content-item-checkbox__checkbox">
														<input id="c_1" data-error="Ошибка" class="form-admin-popup-content-item-checkbox__input" type="checkbox" value="1" name="form[yes-no]">
														<label for="c_1" class="form-admin-popup-content-item-checkbox__switch-button"></label>
													</div>
													<label for="c_1" class="form-admin-popup-content-item-checkbox__variant">Yes</label>
												</div>
											</div>
										</div>
										<div class="form-admin-popup-content-item__row">
											<div class="form-admin-popup-content-item__column form-admin-popup-content-item-actions">
												<div class="form-admin-popup-content-item-actions__text">
													<span class="form-admin-popup-content-item-actions__light">Photo (max of 30 images)</span>
													<span class="form-admin-popup-content-item-actions__bold">Add From Gallery</span>
												</div>
												<input type="file" id="photo" class="form-admin-popup-content-item-actions__link_file">
											</div>
										</div>
										<div class="form-admin-popup-content-item__row">
											<div class="form-admin-popup-content-item__column form-admin-popup-content-item-actions">
												<div class="form-admin-popup-content-item-actions__text">
													<span class="form-admin-popup-content-item-actions__light">Floor Plans</span>
													<span class="form-admin-popup-content-item-actions__bold">Add From Gallery</span>
												</div>
												<input type="file" id="floor-plans" class="form-admin-popup-content-item-actions__link_file">
											</div>
										</div>
										<div class="form-admin-popup-content-item__row">
											<div class="form-admin-popup-content-item__column form-admin-popup-content-item-actions">
												<div class="form-admin-popup-content-item-actions__text">
													<span class="form-admin-popup-content-item-actions__light">Photo (max of 30 images)</span>
													<span class="form-admin-popup-content-item-actions__bold">Add From Gallery</span>
												</div>
												<input type="file" id="video" class="form-admin-popup-content-item-actions__link_file">
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="form-admin-popup-content__item form-admin-popup-content-item">
							<div class="form-admin-popup-content-item__wrapper">
								<div class="form-admin-popup-content-item__body">
									<div class="form-admin-popup-content-item__content">
										<div class="form-admin-popup-content-item__row">
											<div class="form-admin-popup-content-item__column">
												<label for="features" class="form-admin-popup-content-item__label form-admin-popup-content-item__text">Property features</label>
												<select required name="form[features]" id="features" class="form-admin-popup-content-item__select">
													<option value="1" selected>Property Features</option>
													<option value="2">Пункт №2</option>
													<option value="3">Пункт №3</option>
													<option value="4">Пункт №4</option>
												</select>
											</div>
										</div>
										<div class="form-admin-popup-content-item__row">
											<div class="form-admin-popup-content-item__column">
												<label for="amenities" class="form-admin-popup-content-item__label form-admin-popup-content-item__text">Facilities & amenities</label>
												<select required name="form[amenities]" id="amenities" class="form-admin-popup-content-item__select">
													<option value="1" selected>Facilities & amenities</option>
													<option value="2">Пункт №2</option>
													<option value="3">Пункт №3</option>
													<option value="4">Пункт №4</option>
												</select>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="form-admin-popup-content-item__wrapper">
								<div class="form-admin-popup-content-item__body">
									<p class="form-admin-popup-content-item__text">Neighbourhoods</p>
									<div class="form-admin-popup-content-item__content">
										<div class="form-admin-popup-content-item__row">
											<div class="form-admin-popup-content-item__input-wrapper form-admin-popup-content-item__column">
												<div class="form-admin-popup-content-item__form-actions form-actions">
													<div class="form-actions__actions-title">
														<p class="form-actions__title">Bus Station</p>
														<input autocomplete="off" type="text" name="form[bus-station]" data-error="Ошибка" placeholder="" class="form-actions__input">
													</div>
													<button type="button" class="form-actions__button">
														<span class="form-actions__plus">+</span>
														<span class="form-actions__minus">-</span>
													</button>
												</div>
												<div class="form-admin-popup-content-item__form-actions form-actions">
													<div class="form-actions__actions-title">
														<p class="form-actions__title">Fitness Club</p>
														<input autocomplete="off" type="text" name="form[fitness-club]" data-error="Ошибка" placeholder="" class="form-actions__input">
													</div>
													<button type="button" class="form-actions__button">
														<span class="form-actions__plus">+</span>
														<span class="form-actions__minus">-</span>
													</button>
												</div>
												<div class="form-admin-popup-content-item__form-actions form-actions">
													<div class="form-actions__actions-title">
														<p class="form-actions__title">GYM</p>
														<input autocomplete="off" type="text" name="form[gym]" data-error="Ошибка" placeholder="" class="form-actions__input">
													</div>
													<button type="button" class="form-actions__button">
														<span class="form-actions__plus">+</span>
														<span class="form-actions__minus">-</span>
													</button>
												</div>
												<div class="form-admin-popup-content-item__form-actions form-actions">
													<div class="form-actions__actions-title">
														<p class="form-actions__title">Hospital</p>
														<input autocomplete="off" type="text" name="form[hospital]" data-error="Ошибка" placeholder="" class="form-actions__input">
													</div>
													<button type="button" class="form-actions__button">
														<span class="form-actions__plus">+</span>
														<span class="form-actions__minus">-</span>
													</button>
												</div>
												<div class="form-admin-popup-content-item__form-actions form-actions">
													<div class="form-actions__actions-title">
														<p class="form-actions__title">Bus Station</p>
														<input autocomplete="off" type="text" name="form[metro-station]" data-error="Ошибка" placeholder="" class="form-actions__input">
													</div>
													<button type="button" class="form-actions__button">
														<span class="form-actions__plus">+</span>
														<span class="form-actions__minus">-</span>
													</button>
												</div>
												<div class="form-admin-popup-content-item__form-actions form-actions">
													<div class="form-actions__actions-title">
														<p class="form-actions__title">School</p>
														<input autocomplete="off" type="text" name="form[school]" data-error="Ошибка" placeholder="" class="form-actions__input">
													</div>
													<button type="button" class="form-actions__button">
														<span class="form-actions__plus">+</span>
														<span class="form-actions__minus">-</span>
													</button>
												</div>
												<div class="form-admin-popup-content-item__form-actions form-actions">
													<div class="form-actions__actions-title">
														<p class="form-actions__title">Test Neighbourhoods</p>
														<input autocomplete="off" type="text" name="form[test]" data-error="Ошибка" placeholder="" class="form-actions__input">
													</div>
													<button type="button" class="form-actions__button">
														<span class="form-actions__plus">+</span>
														<span class="form-actions__minus">-</span>
													</button>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="form-admin-popup-content-item__wrapper">
								<div class="form-admin-popup-content-item__body">
									<div class="form-admin-popup-content-item__content">
										<div class="form-admin-popup-content-item__row">
											<div class="form-admin-popup-content-item__column">
												<label for="day" class="form-admin-popup-content-item__label">Remind</label>
												<input required="" autocomplete="off" data-type="text" type="text" id="day" name="form[day]" data-error="Ошибка" placeholder="1 Day" class="form-admin-popup-content-item__input" data-placeholder="Audio Tour Link">
											</div>
											<div class="form-admin-popup-content-item__column">
												<label for="available" class="form-admin-popup-content-item__label">Next available</label>
												<input autocomplete="off" data-type="text" type="text" name="form[date]" id="available" data-error="Ошибка" required="" placeholder="13-05-2020" class="form-admin-popup-content-item__input" data-placeholder="QR Code Link">
											</div>
										</div>
										<div class="form-admin-popup-content-item__row">
											<div class="form-admin-popup-content-item__column">
												<input required="" autocomplete="off" data-type="text" type="text" name="form[number]" data-error="Ошибка" placeholder="DEWA Number" class="form-admin-popup-content-item__input" data-placeholder="Audio Tour Link">
											</div>
											<div class="form-admin-popup-content-item__column">
												<input autocomplete="off" data-type="text" type="text" name="form[maintenance]" data-error="Ошибка" required="" placeholder="Maintenance Fee" class="form-admin-popup-content-item__input" data-placeholder="QR Code Link">
											</div>
										</div>
										<div class="form-admin-popup-content-item__row">
											<div class="form-admin-popup-content-item__column">
												<p class="form-admin-popup-content-item__text form-admin-popup-content-item__text_black">Featured?</p>
												<div class="form-admin-popup-content-item__checkbox-wrapper">
													<label for="c_2" class="form-admin-popup-content-item-checkbox__variant">No</label>
													<div for="c_2" class="form-admin-popup-content-item-checkbox__checkbox form-admin-popup-content-item-checkbox__checkbox_min">
														<input id="c_2" data-error="Ошибка" class="form-admin-popup-content-item-checkbox__input" type="checkbox" value="1" name="form[yes-no]">
														<label for="c_2" class="form-admin-popup-content-item-checkbox__switch-button"></label>
													</div>
													<label for="c_2" class="form-admin-popup-content-item-checkbox__variant">Yes</label>
												</div>
											</div>
											<div class="form-admin-popup-content-item__column">
												<p class="form-admin-popup-content-item__text form-admin-popup-content-item__text_black">Premium?</p>
												<div class="form-admin-popup-content-item__checkbox-wrapper">
													<label for="c_3" class="form-admin-popup-content-item-checkbox__variant">No</label>
													<div for="c_3" class="form-admin-popup-content-item-checkbox__checkbox form-admin-popup-content-item-checkbox__checkbox_min">
														<input id="c_3" data-error="Ошибка" class="form-admin-popup-content-item-checkbox__input" type="checkbox" value="1" name="form[yes-no]">
														<label for="c_3" class="form-admin-popup-content-item-checkbox__switch-button"></label>
													</div>
													<label for="c_3" class="form-admin-popup-content-item-checkbox__variant">Yes</label>
												</div>
											</div>
											<div class="form-admin-popup-content-item__column">
												<p class="form-admin-popup-content-item__text form-admin-popup-content-item__text_black">Exclusive?</p>
												<div class="form-admin-popup-content-item__checkbox-wrapper">
													<label for="c_4" class="form-admin-popup-content-item-checkbox__variant">No</label>
													<div for="c_4" class="form-admin-popup-content-item-checkbox__checkbox form-admin-popup-content-item-checkbox__checkbox_min">
														<input id="c_4" data-error="Ошибка" class="form-admin-popup-content-item-checkbox__input" type="checkbox" value="1" name="form[yes-no]">
														<label for="c_4" class="form-admin-popup-content-item-checkbox__switch-button"></label>
													</div>
													<label for="c_4" class="form-admin-popup-content-item-checkbox__variant">Yes</label>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="form-admin-popup-content__item form-admin-popup-content-item">
							<div class="form-admin-popup-content-item__wrapper">
								<div class="form-admin-popup-content-item__body">
									<button type="button" data-spoller class="form-admin-popup-content-item__title form-admin-popup-content-item__title_margin">Listing Details</button>
									<div class="form-admin-popup-content-item__content">
										<div class="form-admin-popup-content-item__row">
											<div class="form-admin-popup-content-item__column form-admin-popup-content-item-question">
												<div class="form-admin-popup-content-item-question__wrapper">
													<button type="button" class="form-admin-popup-content-item-question__button form-admin-popup-content-item-question__button_fw">
														<span>Assign to *</span>
														<div class="form-admin-popup-content-item-question__symbol">?</div>
													</button>
													<div class="form-admin-popup-content-item-question__body form-admin-popup-content-item-question__body_bottom">
														<div class="form-admin-popup-content-item-question__content">
															<p class="form-admin-popup-content-item-question__text">Some question from some info. Some info about block</p>
															<div class="form-admin-popup-content-item-question__footer">
																<p class="form-admin-popup-content-item-question__text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, consequatur.</p>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="form-admin-popup-content-item__row">
											<div class="form-admin-popup-content-item__column form-admin-popup-content-item-profile">
												<div class="form-admin-popup-content-item-profile__body">
													<picture><source srcset="img/agents/<?php echo $_SESSION['pic']; ?>" type="image/webp"><img src="img/agents/<?php echo $_SESSION['pic']; ?>" alt="" class="form-admin-popup-content-item-profile__image"></picture>
													<div class="form-admin-popup-content-item-profile__content">
														<p class="form-admin-popup-content-item-profile__name"><?php echo $_SESSION['full_name']; ?></p>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="form-admin-popup-content-item__wrapper">
								<div class="form-admin-popup-content-item__body">
									<button type="button" data-spoller class="form-admin-popup-content-item__title form-admin-popup-content-item__title_margin">Owner/landlord Details</button>
									<div class="form-admin-popup-content-item__content">
										<div class="form-admin-popup-content-item__row">
											<div class="form-admin-popup-content-item__column">
												<label for="name-own" class="form-admin-popup-content-item__label">Name *</label>
												<input required autocomplete="off" data-type="text" type="text" id="name-own" name="form[name-own]" data-error="Ошибка" placeholder="Name" class="form-admin-popup-content-item__input" data-placeholder="Audio Tour Link">
											</div>
										</div>
										<div class="form-admin-popup-content-item__row">
											<div class="form-admin-popup-content-item__column">
												<label for="last-name-own" class="form-admin-popup-content-item__label">Last Name *</label>
												<input required autocomplete="off" data-type="text" type="text" id="last-name-own" name="form[last-name-own]" data-error="Ошибка" placeholder="Last Name" class="form-admin-popup-content-item__input" data-placeholder="Audio Tour Link">
											</div>
										</div>
										<div class="form-admin-popup-content-item__row">
											<div data-input="phone" class="form-admin-popup-content-item__column form-admin-popup-add-inputs">
												<div class="form-admin-popup-add-inputs__wrapper">
													<div class="form-admin-popup-add-inputs__item">
														<span class="form-admin-popup-add-inputs__label">Phone * </span>
														<p class="form-admin-popup-add-inputs__text">+971 54 411 2658</p>
														<input type="text" name="form[phon-1]" value="971544112658" class="form-admin-popup-add-inputs__info">
													</div>
												</div>
												<div class="form-admin-popup-add-inputs__action">
													<button data-input-action="phone" type="button" class="form-admin-popup-add-inputs__action-button">
														<span class="form-admin-popup-add-inputs__plus">+</span>
														<span class="form-admin-popup-add-inputs__minus">-</span>
														<div class="form-admin-popup-add-inputs__body-action">
															<p class="form-admin-popup-add-inputs__info-text">Add Phone</p>
															<input autocomplete="off" type="tel" name="form[add-phone]" data-error="Ошибка" placeholder="" class="form-admin-popup-add-inputs__input-action">
														</div>
													</button>
												</div>
											</div>
										</div>
										<div class="form-admin-popup-content-item__row">
											<div data-input="phone" class="form-admin-popup-content-item__column form-admin-popup-add-inputs">
												<div class="form-admin-popup-add-inputs__wrapper">
													<div class="form-admin-popup-add-inputs__item">
														<span class="form-admin-popup-add-inputs__label">Email * </span>
														<p class="form-admin-popup-add-inputs__text">negmatullaevamir1@gmail.com</p>
														<input type="text" name="form[phon-1]" value="971544112658" class="form-admin-popup-add-inputs__info">
													</div>
												</div>
												<div class="form-admin-popup-add-inputs__action">
													<button data-input-action="phone" type="button" class="form-admin-popup-add-inputs__action-button">
														<span class="form-admin-popup-add-inputs__plus">+</span>
														<span class="form-admin-popup-add-inputs__minus">-</span>
														<div class="form-admin-popup-add-inputs__body-action">
															<p class="form-admin-popup-add-inputs__info-text">Add Email</p>
															<input autocomplete="off" type="tel" name="form[add-email]" data-error="Ошибка" placeholder="" class="form-admin-popup-add-inputs__input-action">
														</div>
													</button>
												</div>
											</div>
										</div>
										<div class="form-admin-popup-content-item__row">
											<div class="form-admin-popup-content-item__column">
												<label for="type" class="form-admin-popup-content-item__label">Type *</label>
												<input required="" autocomplete="off" data-type="text" type="text" id="type" name="form[type]" data-error="Ошибка" placeholder="Last Name" class="form-admin-popup-content-item__input">
											</div>
										</div>
										<div class="form-admin-popup-content-item__row">
											<div class="form-admin-popup-content-item__column form-admin-popup-content-item-actions">
												<div class="form-admin-popup-content-item-actions__text">
													<span class="form-admin-popup-content-item-actions__light">Property documents</span>
													<!-- <span class="form-admin-popup-content-item-actions__bold">Add From Gallery</span> -->
												</div>
												<input type="file" id="prop-documents" class="form-admin-popup-content-item-actions__link_file">
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="form-admin-popup-content-item__actions">
								<div class="form-admin-popup-content-item__actions-wrapper">
									<button type="submit" class="form-admin-popup-content-item__actions-button">
										Draft
									</button>
									<button type="submit" class="form-admin-popup-content-item__actions-button _icon-galochka form-admin-popup-content-item__actions-button_save">
										Save
									</button>
								</div>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
		<!-- </div> -->
	</div>

	

	<div id="add-number" aria-hidden="true" class="popup">
		<div class="popup__wrapper">
			<div class="popup__content">
				<button data-close type="button" class="popup__close">Закрыть</button>
				<div class="popup__text">
				</div>
			</div>
		</div>
	</div>
	<script src="js/app.min.js?_v=20220720174136"></script>
</body>

</html>