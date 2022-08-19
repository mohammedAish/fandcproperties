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

$id=$_GET['id'];

$sql = "SELECT * FROM off_plan WHERE id = '$id'";
$sql2 = "SELECT * FROM off_plan WHERE id = '$id' ";
$res2 = $conn->query($sql2);

$rs_result = $conn->query($sql);
if( $res2 ) $rs2 =$res2->fetch_assoc() ;

if(isset($_POST['submit'])){

	$name = $_POST['name'];
	$email = $_POST['email'];
	$phone = $_POST['phone'];
	$message = "";

	$insert = "INSERT INTO `general_lead` (`id`, `lead_name`, `lead_phone`, `lead_email`, `lead_message`, `created`) VALUES (NULL, '$name', '$phone', '$email', '$message', NOW());";
	if ($conn->query($insert) === TRUE) {

    } else {

    }
} ?>
<!DOCTYPE html>
<html lang="ru">

<head>
	<title>Project</title>
	<meta name="description" content="Найдите недвижимость своей мечты! С нашими экспертами вы сможете познакомиться с крупным рынком недвижимости Дубая!" />
	<meta charset="UTF-8" />
	<meta name="format-detection" content="telephone=no" />
	<link rel="stylesheet" href="css/style.min.css?_v=20220803185036" type="text/css" />

	<!-- <link rel="stylesheet" href="../style.css" type="text/css" /> -->
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
										<!-- <button type="button" data-spoller class="menu-project__arrow _icon-angle-left"></button> -->
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
										<!-- <button type="button" data-spoller class="menu-project__arrow _icon-angle-left"></button> -->
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
									<li class="menu-project__item">
										<span class="">
											<button data-spoller type="button" class="menu__flag menu__flag_image">
                                        <!-- <span class="menu__flag-text">About US</span> -->
                                        <img src="../images/england.svg" alt="" class="menu__flag-image">
                                    </button></span>
										<!-- <button type="button" data-spoller class="menu-project__arrow _icon-angle-left"></button> -->
										<div class="menu-project__sub-wrapepr" style="min-width: 10px !important;max-height: 5px !important;">
											<ul class="menu-project__sub-list">
												<li class="menu-project__sub-item">
												<a href="https://kvartirivdubai.ru/" class="menu__sub-flag">
                                                    <img src="../images/ru.svg" alt="" class="menu__flag-image">
                                                </a>
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
			<?php

				if ($rs_result->num_rows > 0) {

					while($row = $rs_result->fetch_assoc()) {
						echo '<section class="page__aprtments apartments">
								<div class="apartments__container">
									<div class="apartments__body">
										<div class="apartments__content">
											<div class="apartments__title title">'. $row['property_name'] .'</div>
											<div class="apartments__safe">
												<div class="apartments__text">
													<p>
														'. $row['description'] .'
													</p>
												</div>
												<div class="apartments__actions" data-da=".apartments__safe,1100.98,last">
													<button data-popup="#form-discover" data-popup-content="string-content,addres,addres-2" type="button" class="apartments__button button button_extra-large">
														Learn More
													</button>
													<button data-popup="#form-discover" data-popup-content="string-content-2,addres-2" class="apartments__button button button_extra-large-grey">
														Get Project Brouchure
													</button>
													<a href="" class="apartments__button apartments__button_download button button_extra-large">Скачать брошюру</a>
												</div>
												<div class="apartments__statistics statistics-apartments">
													<div class="statistics-apartments__body">
														<div class="statistics-apartments__item">
															<img src="img/icons/wallet.svg" class="statistics-apartments__image" alt="">
															<div class="statistics-apartments__content">
																<h4 class="statistics-apartments__title"> '. $row['property_price'] .'</h4>
																<p class="statistics-apartments__text">Starting Price</p>
															</div>
														</div>
														<div class="statistics-apartments__item">
															<img src="img/icons/percent.svg" class="statistics-apartments__image" alt="">
															<div class="statistics-apartments__content">
																<h4 class="statistics-apartments__title">'. $row['payment_plan'] .'</h4>
																<p class="statistics-apartments__text">Payment Plan</p>
															</div>
														</div>
														<div class="statistics-apartments__item">
															<img src="img/icons/home.svg" class="statistics-apartments__image" alt="">
															<div class="statistics-apartments__content">
																<h4 class="statistics-apartments__title">'. $row['end_date'] .'</h4>
																<p class="statistics-apartments__text">Handover</p>
															</div>
														</div>
													</div>
												</div>
												<!-- <div class="apartments__statistics">
													<div class="apartments__info">
														<picture><source data-srcset="img/more/01.webp" srcset="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" type="image/webp"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII="  class="apartments__image _lazy-loaded" data-src="img/more/01.png" alt="" src="img/more/01.png" /></picture>
														<div class="apartments__main-info">
															<div class="apartments__info-number">
																<div class="apartments__info-number">
																	<p>Цены от $ 224 000</p>
																</div>
															</div>
															<div class="apartments__describe"></div>
														</div>
													</div>
													<div class="apartments__info">
														<picture><source data-srcset="img/more/02.webp" srcset="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" type="image/webp"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII="  class="apartments__image _lazy-loaded" data-src="img/more/02.png" alt="" src="img/more/02.png" /></picture>
														<div class="apartments__main-info2">
															<div class="apartments__info-number2">
																<div class="apartments__info-number">
																	<h4>Q2 2025 Дата сдачи</h4>
																</div>
															</div>
															<br /><br />
															<div class="apartments__describe"></div>
														</div>
													</div>
													<div class="apartments__info">
														<picture><source data-srcset="img/more/03.webp" srcset="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" type="image/webp"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII="  class="apartments__image _lazy-loaded" data-src="img/more/03.png" alt="" src="img/more/03.png" /></picture>
														<div class="apartments__main-info3">
															<div class="apartments__info-number3">
																<div class="apartments__info-number">
																	<h4>70/30 3 года После сдачи</h4>
																</div>
															</div>
															<br /><br />
															<div class="apartments__describe"></div>
														</div>
													</div>
												</div> -->
											</div>
										</div>
										<div data-da=".apartments__body,1100,first" class="apartments__slider apartments-slider">
											<div class="apartments-slider__body">
												<div class="apartments-slider__wrapper">
													<div class="apartments-slider__slide">
														<div class="apartments-slider__image-ibg">
															<picture><source srcset="../admin/projects/'. $row['title'] .'/'. $row['main_photo'] .'" type="image/webp"><img src="../admin/projects/'. $row['title'] .'/'. $row['main_photo'] .'" alt="" /></picture>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</section>
							<section class="page__discover discover">
								<div class="discover__container">
									<div class="discover__body">
										<div class="discover__content-image discover-content-image">
											<div class="discover-content-image__title title title_large">
												'. $row['title'] .'
											</div>
											<div class="discover-content-image__image">
												<div class="discover-content-image__image-ibg">
													<picture><source srcset="../admin/projects/'. $row['title'] .'/'. $row['first_photo'] .'" type="image/webp"><img src="../admin/projects/'. $row['title'] .'/'. $row['first_photo'] .'" alt="" /></picture>
												</div>
												<picture><source srcset="../admin/projects/'. $row['title'] .'/'. $row['secound_photo'] .'" type="image/webp"><img src="../admin/projects/'. $row['title'] .'/'. $row['secound_photo'] .'" alt="" class="discover-content-image__image-small" /></picture>
											</div>
										</div>
										<div class="discover__content" data-showmore>
											<div class="discover__text" data-showmore-content="450">
												<div data-showmore class="block">
													<div data-showmore-content class="block__content"></div>
													<button hidden data-showmore-button type="button" class="block__more"><span>Показать еще</span><span>Скыть</span></button>
												</div>
												<p class="MsoNormal">
													'. $row['text1'] .'
												</p>
											</div>
											<button type="button" class="discover__button button button_extra-large" onclick="Marquiz.showModal("62a9d7fb7cd214004ab0c35a")">
												Learn More
											</button>
											<button hidden data-showmore-button type="button" class="discover__button button button_extra-large">
												<span>Show More</span>
												<span>Скыть</span>
											</button>
										</div>
									</div>
								</div>
							</section>
							<section class="page__advantages advantages">
								<div class="advantages__container">
									<div class="advantages__body">
										<div class="advantages__card advantages-card">
											<div class="advantages-card__content">
												<div class="advantages-card__image">';
													$tt1 = $row['estate1'];
												$sql10 = "SELECT * FROM estate_properties WHERE title='$tt1'";
												$rs_result1 = $conn->query($sql10);
															if ($rs_result1->num_rows > 0) {
						
																while($row1 = $rs_result1->fetch_assoc()) {
													echo'<picture><source srcset="../admin/estates/'.$row1['title'].'/'.$row1['pic'].'" type="image/webp"><img src="../admin/estates/'.$row1['title'].'/'.$row1['pic'].'" alt=""></picture>';
																}		
													} else {
													
												}
												echo'</div>
												<h4 class="advantages-card__title">'. $row['estate1'] .'</h4>';
												
												
											echo'</div>
										</div>
										<div class="advantages__card advantages-card">
											<div class="advantages-card__content">
												<div class="advantages-card__image">';
													$tt1 = $row['estate2'];
												$sql10 = "SELECT * FROM estate_properties WHERE title='$tt1'";
												$rs_result1 = $conn->query($sql10);
															if ($rs_result1->num_rows > 0) {
						
																while($row1 = $rs_result1->fetch_assoc()) {
													echo'<picture><source srcset="../admin/estates/'.$row1['title'].'/'.$row1['pic'].'" type="image/webp"><img src="../admin/estates/'.$row1['title'].'/'.$row1['pic'].'" alt=""></picture>';
																}		
													} else {
													
												}
												echo'</div>
												<h4 class="advantages-card__title">'. $row['estate2'] .'</h4>';
												
												
											echo'</div>
										</div>
										<div class="advantages__card advantages-card">
											<div class="advantages-card__content">
												<div class="advantages-card__image">';
													$tt1 = $row['estate3'];
												$sql10 = "SELECT * FROM estate_properties WHERE title='$tt1'";
												$rs_result1 = $conn->query($sql10);
															if ($rs_result1->num_rows > 0) {
						
																while($row1 = $rs_result1->fetch_assoc()) {
													echo'<picture><source srcset="../admin/estates/'.$row1['title'].'/'.$row1['pic'].'" type="image/webp"><img src="../admin/estates/'.$row1['title'].'/'.$row1['pic'].'" alt=""></picture>';
																}		
													} else {
													
												}
												echo'</div>
												<h4 class="advantages-card__title">'. $row['estate3'] .'</h4>';
												
												
											echo'</div>
										</div>
										<div class="advantages__card advantages-card">
											<div class="advantages-card__content">
												<div class="advantages-card__image">';
													$tt1 = $row['estate4'];
												$sql10 = "SELECT * FROM estate_properties WHERE title='$tt1'";
												$rs_result1 = $conn->query($sql10);
															if ($rs_result1->num_rows > 0) {
						
																while($row1 = $rs_result1->fetch_assoc()) {
													echo'<picture><source srcset="../admin/estates/'.$row1['title'].'/'.$row1['pic'].'" type="image/webp"><img src="../admin/estates/'.$row1['title'].'/'.$row1['pic'].'" alt=""></picture>';
																}		
													} else {
													
												}
												echo'</div>
												<h4 class="advantages-card__title">'. $row['estate4'] .'</h4>';
												
												
											echo'</div>
										</div>
									</div>
								</div>
							</section>
							<section class="page__gallery gallery">
								<div class="gallery__container">
									<!-- <div class="gallery__title title title_large">Beachfront Lives & Miami Vibes</div> -->
									<div data-tabs class="gallery__tab tab-gallery">
										<nav data-tabs-titles class="tab-gallery__titles">
											<button type="button" class="title title_large tab-gallery__title _tab-active">Interior</button>
											/
											<button type="button" class="title title_large tab-gallery__title ">Exterior</button>
										</nav>
										<div class="tab-gallery__content" data-tabs-body>
											<div class="tab-gallery__body gallery-interier">
												<div class="gallery-interier__content">
													<div class="gallery-interier__controls">
														<div class="inline-gallery-slider__arrows slider-arrows">
															<button type="button" class="slider-arrow slider-arrow_prev _icon-angle-right"></button>
															<button type="button" class="slider-arrow slider-arrow_next _icon-angle-left"></button>
														</div>
													</div>
													<div class="gallery-interier__wrapper swiper-wrapper">
														<div class="gallery-interier__slide swiper-slide">
															<div class="gallery-interier__image-ibg">
																<picture><source srcset="../admin/projects/'. $row['title'] .'/'. $row['interior_photo1'] .'" type="image/webp"><img src="../admin/projects/'. $row['title'] .'/'. $row['interior_photo1'] .'" alt="" /></picture>
															</div>
														</div>
														<div class="gallery-interier__slide swiper-slide">
															<div class="gallery-interier__image-ibg">
																<picture><source srcset="../admin/projects/'. $row['title'] .'/'. $row['interior_photo2'] .'" type="image/webp"><img src="../admin/projects/'. $row['title'] .'/'. $row['interior_photo2'] .'" alt="" /></picture>
															</div>
														</div>
														<div class="gallery-interier__slide swiper-slide">
															<div class="gallery-interier__image-ibg">
																<picture><source srcset="../admin/projects/'. $row['title'] .'/'. $row['interior_photo3'] .'" type="image/webp"><img src="../admin/projects/'. $row['title'] .'/'. $row['interior_photo3'] .'" alt="" /></picture>
															</div>
														</div>
													</div>
												</div>
											</div>
											<div class="tab-gallery__body gallery-exterier">
												<div class="gallery-exterier__content">
													<div class="gallery-exterier__controls">
														<div class="inline-gallery-slider__arrows slider-arrows">
															<button type="button" class="slider-arrow slider-arrow_prev _icon-angle-right"></button>
															<button type="button" class="slider-arrow slider-arrow_next _icon-angle-left"></button>
														</div>
													</div>
													<div class="gallery-exterier__wrapper swiper-wrapper">
														<div class="gallery-exterier__slide swiper-slide">
															<div class="gallery-exterier__image-ibg">
																<picture><source srcset="../admin/projects/'. $row['title'] .'/'. $row['exterior_photo1'] .'" type="image/webp"><img src="../admin/projects/'. $row['title'] .'/'. $row['exterior_photo1'] .'" alt="" /></picture>
															</div>
														</div>
														<div class="gallery-exterier__slide swiper-slide">
															<div class="gallery-exterier__image-ibg">
																<picture><source srcset="../admin/projects/'. $row['title'] .'/'. $row['exterior_photo2'] .'" type="image/webp"><img src="../admin/projects/'. $row['title'] .'/'. $row['exterior_photo2'] .'" alt="" /></picture>
															</div>
														</div>
														<div class="gallery-exterier__slide swiper-slide">
															<div class="gallery-exterier__image-ibg">
																<picture><source srcset="../admin/projects/'. $row['title'] .'/'. $row['exterior_photo3'] .'" type="image/webp"><img src="../admin/projects/'. $row['title'] .'/'. $row['exterior_photo3'] .'" alt="" /></picture>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</section>
							<section class="page__located located">
								<div class="located__container">
									<div class="located__top located-top">
										<div class="located-top__image-1-ibg">
											<picture><source data-srcset="../admin/projects/'. $row['title'] .'/'. $row['third_photo'] .'" srcset="../admin/projects/'. $row['title'] .'/'. $row['third_photo'] .'" type="image/webp"><img src="../admin/projects/'. $row['title'] .'/'. $row['third_photo'] .'"  data-src="../admin/projects/'. $row['title'] .'/'. $row['third_photo'] .'" src="../admin/projects/'. $row['title'] .'/'. $row['third_photo'] .'" /></picture>
										</div>
										<div class="located-top__image-2-ibg">
											<picture><source data-srcset="../admin/projects/'. $row['title'] .'/'. $row['fourth_photo'] .'" srcset="../admin/projects/'. $row['title'] .'/'. $row['fourth_photo'] .'" type="image/webp"><img src="../admin/projects/'. $row['title'] .'/'. $row['fourth_photo'] .'"  data-src="../admin/projects/'. $row['title'] .'/'. $row['fourth_photo'] .'" src="../admin/projects/'. $row['title'] .'/'. $row['fourth_photo'] .'" /></picture>
										</div>
										<div class="located-top__title">'. $row['sub_title'] .'</div>
									</div>
									<div class="located__bottom located-bottom">
										<div class="located-bottom__body">
											<div class="located-bottom__image-ibg">
												<picture><source data-srcset="../admin/projects/'. $row['title'] .'/'. $row['secound_main_photo'] .'" srcset="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" type="image/webp"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII="  data-src="../admin/projects/'. $row['title'] .'/'. $row['secound_main_photo'] .'" src="https://kvartirivdubai.ru/mediafiles/images/deyaar_tria_dubai_si_3_epIOaj1.jpg" /></picture>
											</div>
											<div class="located-bottom__text">
												<p class="MsoNormal">
													'. $row['sub_text'] .'
												</p>
											</div>
										</div>
									</div>
								</div>
							</section>
							<section class="page__arrival-time advantages advantages-time">
								<div class="advantages__container">
									<div class="advantages__body advantages-time__body">
										<div class="advantages__card advantages-card">
											<div class="advantages-card__content">
												<div class="advantages-card__image">';
													$dt1 = $row['distince_title1'];
												$sql10 = "SELECT * FROM property_distince WHERE title='$dt1'";
												$rs_result1 = $conn->query($sql10);
															if ($rs_result1->num_rows > 0) {
						
																while($row1 = $rs_result1->fetch_assoc()) {
																	echo '<picture><source data-srcset="../admin/distince/'.$row1['title'].'/'.$row1['pic'].'" srcset="../admin/distince/'.$row1['title'].'/'.$row1['pic'].'" type="image/webp"><img src="../admin/distince/'.$row1['title'].'/'.$row1['pic'].'"  data-src="../admin/distince/'.$row1['title'].'/'.$row1['pic'].'" alt=""></picture>';
																}		
															} else {
															
														}
													
												echo'</div>
												<div class="advantages-card__title">'.$row['distince_description1'].' Minutes</div>
												<div class="advantages-card__subtitle">to '.$row['distince_title1'].'</div>
											</div>
										</div>
										<div class="advantages__card advantages-card">
											<div class="advantages-card__content">
												<div class="advantages-card__image">';
													$dt1 = $row['distince_title2'];
												$sql10 = "SELECT * FROM property_distince WHERE title='$dt1'";
												$rs_result1 = $conn->query($sql10);
															if ($rs_result1->num_rows > 0) {
						
																while($row1 = $rs_result1->fetch_assoc()) {
																	echo '<picture><source data-srcset="../admin/distince/'.$row1['title'].'/'.$row1['pic'].'" srcset="../admin/distince/'.$row1['title'].'/'.$row1['pic'].'" type="image/webp"><img src="../admin/distince/'.$row1['title'].'/'.$row1['pic'].'"  data-src="../admin/distince/'.$row1['title'].'/'.$row1['pic'].'" alt=""></picture>';
																}		
															} else {
															
														}
													
												echo'</div>
												<div class="advantages-card__title">'.$row['distince_description2'].' Minutes</div>
												<div class="advantages-card__subtitle">to '.$row['distince_title2'].'</div>
											</div>
										</div>
										<div class="advantages__card advantages-card">
											<div class="advantages-card__content">
												<div class="advantages-card__image">';
													$dt1 = $row['distince_title3'];
												$sql10 = "SELECT * FROM property_distince WHERE title='$dt1'";
												$rs_result1 = $conn->query($sql10);
															if ($rs_result1->num_rows > 0) {
						
																while($row1 = $rs_result1->fetch_assoc()) {
																	echo '<picture><source data-srcset="../admin/distince/'.$row1['title'].'/'.$row1['pic'].'" srcset="../admin/distince/'.$row1['title'].'/'.$row1['pic'].'" type="image/webp"><img src="../admin/distince/'.$row1['title'].'/'.$row1['pic'].'"  data-src="../admin/distince/'.$row1['title'].'/'.$row1['pic'].'" alt=""></picture>';
																}		
															} else {
															
														}
													
												echo'</div>
												<div class="advantages-card__title">'.$row['distince_description3'].' Minutes</div>
												<div class="advantages-card__subtitle">to '.$row['distince_title3'].'</div>
											</div>
										</div>
										<div class="advantages__card advantages-card">
											<div class="advantages-card__content">
												<div class="advantages-card__image">';
													$dt1 = $row['distince_title4'];
												$sql10 = "SELECT * FROM property_distince WHERE title='$dt1'";
												$rs_result1 = $conn->query($sql10);
															if ($rs_result1->num_rows > 0) {
						
																while($row1 = $rs_result1->fetch_assoc()) {
																	echo '<picture><source data-srcset="../admin/distince/'.$row1['title'].'/'.$row1['pic'].'" srcset="../admin/distince/'.$row1['title'].'/'.$row1['pic'].'" type="image/webp"><img src="../admin/distince/'.$row1['title'].'/'.$row1['pic'].'"  data-src="../admin/distince/'.$row1['title'].'/'.$row1['pic'].'" alt=""></picture>';
																}		
															} else {
															
														}
													
												echo'</div>
												<div class="advantages-card__title">'.$row['distince_description4'].' Minutes</div>
												<div class="advantages-card__subtitle">to '.$row['distince_title4'].'</div>
												
											</div>
										</div>
									</div>
								</div>
							</section>
							<section class="page__bedroom bedroom">
								<div class="bedroom__container">
									<div class="bedroom__title title title_large">
									</div>
									<div class="bedroom__body">
										<div class="bedroom-tabs tabs">
											<div class="bedroom-tabs__content tabs__content">
												<div class="bedroom-tabs-pagination" data-pagination="1 комнатаб, 2 комната, some комната">
													<!-- <span class="swiper-pagination-bullet bedroom-tabs-pagination__item">Plan 1</span>
													<span class="swiper-pagination-bullet bedroom-tabs-pagination__item">Plan 2</span>
													<span class="swiper-pagination-bullet bedroom-tabs-pagination__item swiper-pagination-bullet-active">Plan 3</span> -->
												</div>
												<div class="bedroom-tabs__controls bedroom-tabs-controls">
													<div class="bedroom-tabs-controls__arrows slider-arrows">
														<button type="button" class="slider-arrow slider-arrow_prev _icon-angle-right"></button>
														<button type="button" class="slider-arrow slider-arrow_next _icon-angle-left"></button>
													</div>
												</div>
												<div class="bedroom-tabs__wrapper swiper-wrapper">
													<div class="bedroom-tabs-content__body swiper-slide">
														<div class="bedroom-tabs-content__content">
															<div class="bedroom-tabs-content__title">Studio units 1</div>
															<div class="bedroom-tabs-content__area-info">
																<div class="bedroom-tabs-content__area">
																	<span class="_icon-suite-area"></span>
																	Suite Area: 224,31 sqft
																</div>
																<div class="bedroom-tabs-content__area">
																	<span class="_icon-total-area"></span>
																	Total Area: 256,50 sqft
																</div>
															</div>
															<a href="" class="bedroom-tabs-content__button button button_small-large">Get all flore plans</a>
															<br>
															<a href="" class="bedroom-tabs-content__button button button_small-large-transparent">Download Brochure</a>
														</div>
														<div class="bedroom-tabs-content__image">
															<div class="bedroom-tabs-content__image-ibg"><picture><source data-srcset="img/more/22.webp" srcset="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" type="image/webp"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII="  data-src="img/more/22.png" alt=""></picture></div>
														</div>
													</div>
													<div class="bedroom-tabs-content__body swiper-slide">
														<div class="bedroom-tabs-content__content">
															<div class="bedroom-tabs-content__title">Studio units 2</div>
															<div class="bedroom-tabs-content__area-info">
																<div class="bedroom-tabs-content__area">
																	<span class="_icon-suite-area"></span>
																	Suite Area: 224,31 sqft
																</div>
																<div class="bedroom-tabs-content__area">
																	<span class="_icon-total-area"></span>
																	Total Area: 256,50 sqft
																</div>
															</div>
															<a href="" class="bedroom-tabs-content__button button button_small-large">Get all flore plans</a>
															<br>
															<a href="" class="bedroom-tabs-content__button button button_small-large-transparent">Download Brochure</a>
														</div>
														<div class="bedroom-tabs-content__image">
															<div class="bedroom-tabs-content__image-ibg"><picture><source data-srcset="img/more/22.webp" srcset="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" type="image/webp"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII="  data-src="img/more/22.png" alt=""></picture></div>
														</div>
													</div>
													<div class="bedroom-tabs-content__body swiper-slide">
														<div class="bedroom-tabs-content__content">
															<div class="bedroom-tabs-content__title">Studio units 2</div>
															<div class="bedroom-tabs-content__area-info">
																<div class="bedroom-tabs-content__area">
																	<span class="_icon-suite-area"></span>
																	Suite Area: 224,31 sqft
																</div>
																<div class="bedroom-tabs-content__area">
																	<span class="_icon-total-area"></span>
																	Total Area: 256,50 sqft
																</div>
															</div>
															<a href="" class="bedroom-tabs-content__button button button_small-large">Get all flore plans</a>
															<br>
															<a href="" class="bedroom-tabs-content__button button button_small-large-transparent">Download Brochure</a>
														</div>
														<div class="bedroom-tabs-content__image">
															<div class="bedroom-tabs-content__image-ibg"><picture><source data-srcset="img/more/22.webp" srcset="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" type="image/webp"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII="  data-src="img/more/22.png" alt=""></picture></div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</section>
							<section class="page__fc-video fc-video">
								<div class="fc-video__container">
									<div class="fc-video__body">
										<button type="button" data-popup="#video" data-popup-youtube="Q52LJes0LxY" class="fc-video__button _icon-play"></button>
										<div class="fc-video__image-ibg">
											<picture><source data-srcset="img/more/23.webp" srcset="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" type="image/webp"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII="  data-src="img/more/23.png" src="img/more/23.png" /></picture>
										</div>
									</div>
								</div>
							</section>';
							

						}

					} else {
				
				}
			?>
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
			<section class="page__expert-appeal expert-appeal">
				<div class="expert-appeal__container">
					<div class="expert-appeal__body">
						<div class="expert-appeal__appeal appeal">
							<div class="appeal__body" action="#" method="POST" enctype="multipart/form-data">
								<div class="appeal__title">
									Our Expert Will Help You Buy
									<br>
									<span class="appeal__subtitle">
										The Best Residence in Dubai
									</span>
								</div>
								<form action="#" method="POST" enctype="multipart/form-data" class="appeal__form">
									<div class="appeal__col">
										<input autocomplete="off" type="text" name="name" data-error="Ошибка" placeholder="Full name *" class="appeal__input">
									</div>
									<div class="appeal__col">
										<input autocomplete="off" type="text" name="phone" data-error="Ошибка" placeholder="Phone number *" class="appeal__input">
									</div>
									<div class="appeal__col">
										<input autocomplete="off" type="text" name="email" data-error="Ошибка" placeholder="E-mail *" class="appeal__input">
									</div>
									<button type="submit" name="submit" class="appeal__button button button_small">Take a Quick Test</button>
								</form>
							</div>
						</div>
						<div class="expert-appeal__profile-expert profile-expert">
							<div class="profile-expert__image"><picture><source data-srcset="img/yulya.jpg" srcset="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" type="image/webp"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII="  data-src="img/yulya.jpg" alt=""></picture></div>
							<div class="profile-expert__content">
								<div class="profile-expert__info-name">
									<div class="profile-expert__full-name">Julia Roshkovich</div>
									<div class="profile-expert__profession">
									Regional Manager
									</div>
								</div>
								<div class="profile-expert__info-expert">
									<div class="profile-expert__icon _icon-phone-call"></div>
									<a href="tel:971588070001" class="profile-expert__text">+971 58 807 0001</a>
								</div>
								<div class="profile-expert__info-expert">
									<div class="profile-expert__icon _icon-location-mark"></div>
									<div class="profile-expert__text">
									Dubai, Business Bay, Bay Square, Building 13 - Dubai
									</div>
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
	<script>

	</script>
</body>

</html>