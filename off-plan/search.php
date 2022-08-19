<?php

// Include the database configuration file  
// Database configuration  
$servername = "localhost";
$username = "root";
$password = "";
$database = "propertyfinder";
// Create database connection  
$conn = new mysqli($servername, $username, $password, $database);  
  
// Check connection  
if ($conn->connect_error) {  
    die("Connection failed: " . $conn->connect_error);  
}
 // 
// If file upload form is submitted 
$num_per_page = 10;

if(isset($_GET["page"])){

    $page=$_GET["page"];
}
else{
    $page = 1;
}
$start_from= ($page-1)*10;



$text = $_POST['text'];
$types = $_POST['types'];
$developer = $_POST['developer'];
$min = $_POST['max'];

$sql = "SELECT * FROM `off_plan` WHERE `property_name` LIKE '%$text%' AND `property_price` <= $min AND `property_type` LIKE '%$types%' AND `construction_company` LIKE '%$developer%'";
$rs_result = $conn->query($sql);


?>


<!DOCTYPE html>
<html lang="ru">

<head>
	<title>Поиск</title>
	<meta name="description" content="Найдите недвижимость своей мечты! С нашими экспертами вы сможете познакомиться с крупным рынком недвижимости Дубая!" />
	<meta charset="UTF-8" />
	<meta name="format-detection" content="telephone=no" />
	<link rel="stylesheet" href="css/style.min.css?_v=20220803185036" type="text/css" />
	
	<link rel="shortcut icon" href="favicon.ico" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
</head>


<body>
	<div class="wrapper">
	<header class="project-header">
			<div class="project-header__wrapper">
				<div class="project-header__container">
					<div class="project-header__body">
						<a href="../" class="project-header__logo">
							<picture><source srcset="img/logo-fc.webp" type="image/webp"><img src="img/logo-fc.png" alt=""></picture>
						</a>
						<div class="project-header__menu-project menu-project">
							<nav class="menu-project__body">
								<ul class="menu-project__list" data-spollers="991.98,max">
									<li class="menu-project__item"><a href="../" class="menu-project__link">Home</a></li>
									<li class="menu-project__item">
										<a href="off-plan/" class="menu-project__link">Off-Plan</a>
									</li>
									<li class="menu-project__item"><a href="../Buy.php" class="menu-project__link">Buy</a></li>
									<li class="menu-project__item"><a href="../Rent.php" class="menu-project__link">Rent</a></li>
									<li class="menu-project__item"><a href="#" onclick="Marquiz.showModal('62bafdc70d6747003f10d84b')" class="menu-project__link">Sale \ Rent</a></li>
									<li class="menu-project__item"><a href="../Blogs.php" class="menu-project__link">News</a></li>
									<li class="menu-project__item">
										<span class="menu-project__link">Services</span>
										<button type="button" data-spoller class="menu-project__arrow _icon-angle-left"></button>
										<div class="menu-project__sub-wrapepr">
											<ul class="menu-project__sub-list">
												<li class="menu-project__sub-item">
													<a href="../PropertyManager.html" class="menu-project__sub-link">Property Managment</a>
												</li>
												<li class="menu-project__sub-item">
													<a href="https://fandc.homeloans.ae" class="menu-project__sub-link">Mortgage</a>
												</li>
												<li class="menu-project__sub-item">
													<a href="../Services.html" class="menu-project__sub-link">All Services</a>
												</li>
											</ul>
										</div>
									</li>
									<li class="menu-project__item">
										<span class="menu-project__link">About us</span>
										<button type="button" data-spoller class="menu-project__arrow _icon-angle-left"></button>
										<div class="menu-project__sub-wrapepr">
											<ul class="menu-project__sub-list">
												<li class="menu-project__sub-item">
													<a href="../About.html" class="menu-project__sub-link">About us</a>
												</li>
												<li class="menu-project__sub-item">
													<a href="../Contact.html" class="menu-project__sub-link">Contact us</a>
												</li>
												<li class="menu-project__sub-item">
													<a href="../Careers.html" class="menu-project__sub-link">Careers</a>
												</li>
											</ul>
										</div>
									</li>
								</ul>
								<ul class="menu-project__list menu-project__list_social">
									<li class="menu-project__item">
										<a href="" class="menu-project__link"><picture><source srcset="img/icons/facebook.webp" type="image/webp"><img src="img/icons/facebook.png" alt=""></picture></a>
									</li>
									<li class="menu-project__item">
										<a href="" class="menu-project__link"><picture><source srcset="img/icons/instagram.webp" type="image/webp"><img src="img/icons/instagram.png" alt=""></picture></a>
									</li>
									<li class="menu-project__item">
										<a href="" class="menu-project__link"><picture><source srcset="img/icons/linkedin.webp" type="image/webp"><img src="img/icons/linkedin.png" alt=""></picture></a>
									</li>
									<li class="menu-project__item">
										<a href="" class="menu-project__link"><picture><source srcset="img/icons/youtube.webp" type="image/webp"><img src="img/icons/youtube.png" alt=""></picture></a>
									</li>
								</ul>
							</nav>
						</div>
						<button type="button" class="menu-project__icon icon-menu icon-menu-project"><span></span></button>
					</div>
				</div>
			</div>
		</header>
		<main class="page">
			<section class="page__main-blog main-blog">
				<div class="main-blog__wrapper">
					<div class="main-blog__container">
						<div class="main-blog__body">
							<h1 class="main-blog__title">Find the best property for you in Dubai</h1>
						</div>
					</div>
					<picture><source data-srcset="img/blog/01.webp" srcset="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" type="image/webp"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII="  class="main-blog__image-ibg _lazy-loaded" data-src="img/blog/01.jpg" alt="" src="img/blog/01.jpg"></picture>
				</div>
			</section>
			<section class="page__products products">
				<div class="products__container">
					<h2 class="products__main-title">
						Featured Properties in Dubai
					</h2>
					<div class="products__body">

						<?php
						if ($rs_result->num_rows > 0) {
		
							while($row = $rs_result->fetch_assoc()) {

					echo  '<div class="products__item item-products">
							<div class="item-products__body">
								<a href="project.php?id='. $row['id'] .'" class="item-products__image">
									<picture><source srcset="../admin/projects/'. $row['title'] .'/'. $row['main_photo'] .'" type="image/webp"><img src="../admin/projects/'. $row['title'] .'/'. $row['main_photo'] .'" alt=""></picture>
								</a>
								<div class="item-products__wrapper">
									<div class="item-products__header">
										<div class="item-products__content">
											<div class="item-products__title-actions">
												<h3 class="item-products__title">'. $row['property_price'] .'</h3>
												<div class="item-products__icons">
													<a href="#" class="item-products__icon">
														<picture><source srcset="img/icons/favourites.webp" type="image/webp"><img src="img/icons/favourites.png" alt=""></picture>
													</a>
													<a href="#" class="item-products__icon">
														<picture><source srcset="img/icons/mailing.webp" type="image/webp"><img src="img/icons/mailing.png" alt=""></picture>
													</a>
												</div>
											</div>
											<a href="project.php?id='. $row['id'] .'" class="item-products__text item-products__info">
												'. $row['title'] .'
											</a>
											<div class="item-products__advanateges">
												<h6 class="item-products__apartment-item">
													<img src="img/icons/building.svg" class="item-products__apartments-icon" alt="Building icon">
													<span class="item-products__apartment-text"> '. $row['construction_company'] .'</span>
												</h6>

											</div>
										</div>
										<div class="item-products__addres">
											<div class="item-products__place">
												<div class="item-products__label">
													Area:
												</div>
												<p class="item-products__place-text">
													'. $row['region'] .'
												</p>
											</div>
											<br>
											<a href="'. $row['video_link'] .'" class="item-products__apartment-item">
												<img src="img/icons/youtube.svg" class="item-products__apartments-icon" alt="Youtube icon">
												<span class="item-products__apartment-text">Viedo</span>
											</a>
										</div>
									</div>
									<div class="item-products__footer">
										<div class="item-products__footer-body">
											<ul class="item-products__list">
												<li class="item-products__item">
													<a href="tel:971588070001" class="item-products__link">
														<picture><source srcset="img/icons/phone.webp" type="image/webp"><img src="img/icons/phone.png" alt=""></picture>
													</a>
												</li>
												<li class="item-products__item">
													<a href="https://wa.me/+971588070001" class="item-products__link">
														<picture><source srcset="img/icons/whatsapp.webp" type="image/webp"><img src="img/icons/whatsapp.png" alt=""></picture>
													</a>
												</li>
												<li class="item-products__item">
													<a href="mailto:info@fcproperties.ae" class="item-products__link">
														<picture><source srcset="img/icons/mail.webp" type="image/webp"><img src="img/icons/mail.png" alt=""></picture>
													</a>
												</li>
											</ul>
											<a href="#" class="item-products__connection">
												<picture><source srcset="img/icons/wifi.webp" type="image/webp"><img src="img/icons/wifi.png" alt=""></picture>
												<span class="item-products__conntection-text">FOLLOW</span>
											</a>
										</div>
									</div>
								</div>
							</div>
						</div>';
						}

											} else {
										
										}
													?>
						
						
						
						<div class="products__item item-products banner__body">
							<div class="banner__wrapper swiper-wrapper">
								<div href="#" class="banner__slide swiper-slide">
									<div class="banner__item">
										<div class="banner__image">
											<picture>
												<source media="(min-width: 479.98px)" srcset="img/main-page/03.jpg">
												<source media="(max-width: 479.98px)" srcset="img/main-page/02.jpg">
												<img src="img/main-page/03.jpg">
											</picture>
											<a href="#" class="banner__link">
												Скачать
											</a>
											<!-- <picture><source data-srcset="img/main-page/03.webp" srcset="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" type="image/webp"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII="  data-src="img/main-page/03.jpg" alt=""></picture> -->
										</div>
									</div>
								</div>
								<div href="#" class="banner__slide swiper-slide">
									<div class="banner__item">
										<div class="banner__image">
											<picture>
												<source media="(min-width: 479.98px)" srcset="img/main-page/03.jpg">
												<source media="(max-width: 479.98px)" srcset="img/main-page/02.jpg">
												<img src="img/main-page/03.jpg">
											</picture>
											<a href="#" class="banner__link">
												Скачать
											</a>
											<!-- <picture><source data-srcset="img/main-page/03.webp" srcset="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" type="image/webp"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII="  data-src="img/main-page/03.JPG" alt=""></picture> -->
										</div>
									</div>
								</div>
							</div>
							<div class="banner__pagination">

							</div>
						</div>
						
					</div>
					<a href="search.php?page=<?php echo $page+1;?>" class="products__link">
						Show More
					</a>
				</div>
			</section>

			<section class="page__quiz quiz quiz-more">
				<div class="quiz__container">
					<div class="quiz__body">
						<div class="quiz__image-ibg">
							<picture><source data-srcset="img/areas/10.webp" srcset="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" type="image/webp"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII="  data-src="img/areas/10.png" src="img/areas/10.png" /></picture>
						</div>
						<div class="quiz__content">
							<div class="quiz__icon-success">
								<picture><source srcset="img/success.webp" type="image/webp"><img src="img/success.png" alt="Success icon" /></picture>
							</div>
							<div class="quiz__title">
							Confused? Take the test and get the best deals
							</div>
							<div class="quiz__text">
								<p>As qualified real estate experts with many years of experience, we understand how confusing Dubai's off-plan real estate market can be for new buyers as well as professional investors. Especially when there are thousands of unfinished projects in Dubai.</p>
								<p>You won't need to browse countless listings on other UAE real estate websites. We have gathered all the available information about the property under construction in one place and created a short quiz so that you can find your ideal home in less than two minutes.</p>
								<p>Follow the simple on-screen steps to get a personalized selection of projects that meet all your requirements. Explore any project you are interested in in Dubai and contact us!</p>
							</div>
							<div class="quiz__actions">
								<a href="#" class="quiz__button button button_normal">Take Quiz</a>
								<div class="quiz__less-time">
									<span class="_icon-clock"></span>
									It takes less than 2 minutes
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<section class="page__social-links social-links">
				<a href="tel:971588070001" class="social-links__link social-links__link_phone">
					<picture><source srcset="https://static3.tildacdn.com/tild6636-6437-4261-b163-373962623765/phone.png" type="image/webp"><img src="https://static3.tildacdn.com/tild6636-6437-4261-b163-373962623765/phone.png" alt="" /></picture>
					<span class="social-links__text"> Call </span>
				</a>
				<a href="https://wa.me/971588070001" class="social-links__link social-links__link_whatsapp">
					<picture><source srcset="https://static3.tildacdn.com/tild3432-6463-4763-b730-333161663965/WhatsApp-Logo-1-01-c.png" type="image/webp"><img src="https://static3.tildacdn.com/tild3432-6463-4763-b730-333161663965/WhatsApp-Logo-1-01-c.png" alt="" /></picture>
					<span class="social-links__text"> Whatsapp </span>
				</a>
			</section>
		</main>
		<footer class="footer-second">
			<div class="footer-second__top top-footer">
				<div class="top-footer__container">
					<div class="top-footer__body">
						<div class="top-footer__column">
							<h5 class="top-footer__title top-footer-title">HEAD OFFICE</h5>
							<p class="top-footer__text">Dubai, Business Bay, Bay Square, Building 13 - Office 704</p>
						</div>
						<div class="top-footer__column">
							<h5 class="top-footer__title top-footer-title">CALL US</h5>
							<a href="tel:971588070001" class="top-footer-title top-footer__link">+971 58 807 0001</a>
							<h5 class="top-footer__title top-footer-title">EMAIL US</h5>
							<a href="mailto:info@fcproperties.ae" class="top-footer-title top-footer__link">info@fcproperties.ae</a>
						</div>
						<div class="top-footer__column top-footer__column_big">
							<ul class="top-footer__social footer-social">
								<li class="footer-social__item">
									<a href="" class="footer-social__link">
										<picture><source srcset="img/icons/youtube.webp" type="image/webp"><img src="img/icons/youtube.png" alt=""></picture>
									</a>
								</li>
								<li class="footer-social__item">
									<a href="" class="footer-social__link">
										<picture><source srcset="img/icons/facebook.webp" type="image/webp"><img src="img/icons/facebook.png" alt=""></picture>
									</a>
								</li>
								<li class="ooter-social__item">
									<a href="" class="footer-social__link">
										<picture><source srcset="img/icons/instagram.webp" type="image/webp"><img src="img/icons/instagram.png" alt=""></picture>
									</a>
								</li>
								<li class="ooter-social__item">
									<a href="" class="footer-social__link">
										<picture><source srcset="img/icons/linkedin.webp" type="image/webp"><img src="img/icons/linkedin.png" alt=""></picture>
									</a>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			<div class="footer-second__bottom bottom-footer">
				<div class="bottom-footer__container">
					<ul class="bottom-footer__list">
						<li class="bottom-footer__item">
							<a href="#" class="bottom-footer__link">
								Home
							</a>
						</li>
						<li class="bottom-footer__item">
							<a href="#" class="bottom-footer__link">
								Off-Plan
							</a>
						</li>
						<li class="bottom-footer__item">
							<a href="#" class="bottom-footer__link">
								Buy
							</a>
						</li>
						<li class="bottom-footer__item">
							<a href="#" class="bottom-footer__link">
								Rent
							</a>
						</li>
						<li class="bottom-footer__item">
							<a href="#" class="bottom-footer__link">
								Sale
							</a>
						</li>
						<li class="bottom-footer__item">
							<a href="#" class="bottom-footer__link">
								News
							</a>
						</li>
						<li class="bottom-footer__item">
							<a href="#" class="bottom-footer__link">
								Property Management
							</a>
						</li>
						<li class="bottom-footer__item">
							<a href="#" class="bottom-footer__link">
								Mortgage
							</a>
						</li>
						<li class="bottom-footer__item">
							<a href="#" class="bottom-footer__link">
								All Services
							</a>
						</li>
						<li class="bottom-footer__item">
							<a href="#" class="bottom-footer__link">
								About Us
							</a>
						</li>
						<li class="bottom-footer__item">
							<a href="#" class="bottom-footer__link">
								Contact Us
							</a>
						</li>
						<li class="bottom-footer__item">
							<a href="#" class="bottom-footer__link">
								Careers
							</a>
						</li>
					</ul>
				</div>
			</div>
		</footer>
		<div id="video" aria-hidden="true" class="popup popup-video">
			<div class="popup__wrapper">
				<div class="popup__content popup-video__content">
					<button data-close type="button" class="popup__close popup-video__close"></button>
					<div class="popup__text">

					</div>
					<!-- <iframe width="560" height="315" src="https://www.youtube.com/embed/Q52LJes0LxY" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe> -->
				</div>
			</div>
		</div>

		<div id="form-discover" aria-hidden="true" class="popup popup-discover">
			<div class="popup__wrapper popup-discover__wrapper">
				<div class="popup__content popup-discover__content">
					<button data-close type="button" class="popup__close popup-video__close popup-discover__close"></button>
					<div class="popup-discover__body">
						<div class="popup-discover__meta-content">
							<div class="popup-discover__header">
								<h2 class="popup-discover__title">
									Дополнительная информация
									<span class="popup-discover__subtitle">Узнайте больше информации о Madinat Jumeirah Living Al Jazi</span>
								</h2>
								<div class="popup-discover__success">
									<img src="img/icons/success-circle.svg" alt="">
								</div>
							</div>
							<div class="popup-discover__cards">
								<div class="popup-discover__card">
									<div class="popup-discover__image">
										<img src="img/icons/message.svg" alt="">
									</div>
									<p class="popup-discover__text">Полная <br> поддержка</p>
								</div>
								<div class="popup-discover__card">
									<div class="popup-discover__image">
										<img src="img/icons/home.svg" alt="">
									</div>
									<p class="popup-discover__text">Непосредственно от Разработчик</p>
								</div>
								<div class="popup-discover__card">
									<div class="popup-discover__image">
										<img src="img/icons/key-home.svg" alt="">
									</div>
									<p class="popup-discover__text">Приоритетное Бронирование</p>
								</div>
							</div>
						</div>
						<div class="popup-discover__form">
							<form action="#" method="get" enctype="multipart/form-data" class="popup-discover__form-wrapper">
								<div class="popup-discover__item_hidden">
									<input type="text" name="form[text-content]" id="text-content" class="popup-discover__input_hidden">
									<input type="text" name="form[addres]" id="addres" class="popup-discover__input_hidden">
									<input type="text" name="form[addres-2]" id="addres-2" class="popup-discover__input_hidden">
								</div>
								<div class="popup-discover__item">
									<input autocomplete="off" required type="text" name="form[full-name]" data-error="Ошибка" placeholder="Full name *" class="popup-discover__input">
								</div>
								<div class="popup-discover__item">
									<input autocomplete="off" required type="text" name="form[telephone-number]" data-error="Ошибка" placeholder="Telephone number *" class="popup-discover__input">
								</div>
								<div class="popup-discover__item">
									<input autocomplete="off" required type="text" name="form[e-mail]" data-error="Ошибка" placeholder="E-mail *" class="popup-discover__input">
								</div>
								<div class="popup-discover__item">
									<button type="submit" class="popup-discover__button">Отправить</button>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<script src="https://code.jquery.com/jquery-3.6.0.min.js?_v=20220803185036"></script>
	<!-- <script src="http://maps.google.com/maps/api/js?key=AIzaSyAVK6HrbiqjntBFfu7rNUO4IuixFG7mCd0&_v=20220803185036"></script> -->
	<script src="js/app.min.js?_v=20220803185036"></script>
</body>

</html>