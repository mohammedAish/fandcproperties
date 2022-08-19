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


?>


<!DOCTYPE html>
<html lang="ru">

<head>
	<meta name="keywords" content="<?php echo $rs2['meta_keys'];?>">
    <meta name="description" content="<?php echo $rs2["meta_description"]; ?>">
    <meta property="og:url" content="https://fandcproperties.ae" />
    <meta property="og:title" content="<?php echo $rs2['meta_title'];?>" />
    <meta property="og:description" content="<?php echo $rs2["meta_description"]; ?>" />
    <meta property="og:type" content="website" />
    <meta property="og:image" content="<?php echo $rs2["main_photo"]; ?>" />
	<meta name="format-detection" content="telephone=no" />
	<!-- <script
    defer
    type="text/javascript"
    src="https://maps.google.com/maps/api/js?language=ru&key=AIzaSyAk1cygku8dx0DrpE8IpRs0331s3DzC-08"
  ></script> -->
	<link rel="stylesheet" href="css/style.min.css?_v=20220716213407" type="text/css" />
	<link rel="shortcut icon" href="favicon.ico" />
	<!-- <meta name="robots" content="noindex, nofollow"> -->
	<!-- <style>body{opacity: 0;}</style> -->
	<!-- <meta name="yandex-verification" content="3a5e9a975daa740f" />
  <meta
    name="google-site-verification"
    content="liKfoYQoi0UOwsowWtgJeQ-WCMF29a9KlcXleIxNGzs"
  /> -->
	<!-- Marquiz script start -->
	<!-- <script>
    (function (w, d, s, o) {
      var j = d.createElement(s);
      j.async = true;
      j.src = "//script.marquiz.io/v2.js";
      j.onload = function () {
        if (document.readyState !== "loading") Marquiz.init(o);
        else
          document.addEventListener("DOMContentLoaded", function () {
            Marquiz.init(o);
          });
      };
      d.head.insertBefore(j, d.head.firstElementChild);
    })(window, document, "script", {
      host: "//quiz.marquiz.io",
      region: "eu",
      id: "62a9d7fb7cd214004ab0c35a",
      autoOpen: false,
      autoOpenFreq: "once",
      openOnExit: false,
      disableOnMobile: false,
    });
  </script> -->
	<!-- Marquiz script end -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js?_v=20220716213407"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js?_v=20220716213407"></script>

	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<!-- Yandex.Metrika counter -->
	<!-- Yandex.Metrika counter -->
	<!-- <script type="text/javascript">
    (function (m, e, t, r, i, k, a) {
      m[i] =
        m[i] ||
        function () {
          (m[i].a = m[i].a || []).push(arguments);
        };
      m[i].l = 1 * new Date();
      (k = e.createElement(t)),
        (a = e.getElementsByTagName(t)[0]),
        (k.async = 1),
        (k.src = r),
        a.parentNode.insertBefore(k, a);
    })(window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

    ym(89157800, "init", {
      clickmap: true,
      trackLinks: true,
      accurateTrackBounce: true,
    });
  </script>

  <noscript
    ><div>
      <img
        src="https://mc.yandex.ru/watch/89157800"
        style="position: absolute; left: -9999px"
        alt=""
      /></div
  ></noscript> -->
	<!-- /Yandex.Metrika counter -->
</head>


<body>
	<div class="wrapper">
		<header class="project-header">
			<div class="project-header__wrapper">
				<div class="project-header__container">
					<div class="project-header__body">
						<a href="" class="project-header__logo">
							<picture><source srcset="img/logo-fc.webp" type="image/webp"><img src="img/logo-fc.png" alt=""></picture>
						</a>
						<div class="project-header__menu-project menu-project">
							<nav class="menu-project__body">
								<ul class="menu-project__list" data-spollers="991.98,max">
									<li class="menu-project__item"><a href="" class="menu-project__link">Home</a></li>
									<li class="menu-project__item">
										<a href="" class="menu-project__link">Off-Plan</a>
									</li>
									<li class="menu-project__item"><a href="" class="menu-project__link">Buy</a></li>
									<li class="menu-project__item"><a href="" class="menu-project__link">Rent</a></li>
									<li class="menu-project__item"><a href="" class="menu-project__link">Sale \ Rent</a></li>
									<li class="menu-project__item"><a href="" class="menu-project__link">News</a></li>
									<li class="menu-project__item">
										<span class="menu-project__link">Services</span>
										<button type="button" data-spoller class="menu-project__arrow _icon-angle-left"></button>
										<div class="menu-project__sub-wrapepr">
											<ul class="menu-project__sub-list">
												<li class="menu-project__sub-item">
													<a href="#" class="menu-project__sub-link">Property Managment</a>
												</li>
												<li class="menu-project__sub-item">
													<a href="#" class="menu-project__sub-link">Mortgage</a>
												</li>
												<li class="menu-project__sub-item">
													<a href="#" class="menu-project__sub-link">All Services</a>
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
													<a href="#" class="menu-project__sub-link">About us</a>
												</li>
												<li class="menu-project__sub-item">
													<a href="#" class="menu-project__sub-link">Contact us</a>
												</li>
												<li class="menu-project__sub-item">
													<a href="#" class="menu-project__sub-link">Careers</a>
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
													<p class="MsoNormal">
													'. $row['description'] .'
													</p>
												</div>

												<div class="apartments__actions" data-da=".apartments__safe,1100.98,last">
													<a href="#" class="apartments__button button button_extra-large" id="myBtn" onclick="Marquiz.showModal("62a9d7fb7cd214004ab0c35a")">
														Узнать больше
													</a>
													<a href="#" class="apartments__button button button_extra-large-grey" id="myBtn1" onclick="Marquiz.showModal("62a9d7fb7cd214004ab0c35a")">
														Получить брошюру проекта
													</a>
												</div>
												<div class="apartments__statistics">
													<div class="apartments__info">
														<picture><source data-srcset="img/more/01.webp" srcset="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" type="image/webp"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII="  class="apartments__image _lazy-loaded" data-src="img/more/01.png" alt="" src="img/more/01.png" /></picture>
														<div class="apartments__main-info">
															<div class="apartments__info-number">
																<div class="apartments__info-number">
																	<p>AED '. $row['property_price'] .'</p>
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
																	<h4>'. $row['end_date'] .'</h4>
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
																	<h4>'. $row['payment_plan'] .'</h4>
																</div>
															</div>
															<br /><br />
															<div class="apartments__describe"></div>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div data-da=".apartments__body,1100,first" class="apartments__slider apartments-slider">
											<div class="apartments-slider__body">
												<div class="apartments-slider__wrapper swiper-wrapper">
													<div class="apartments-slider__slide swiper-slide">
														<div class="apartments-slider__image-ibg">
															<picture><source srcset="../admin/projects/'. $row['title'] .'/'. $row['main_photo'] .'"" type="image/webp"><img src="https://kvartirivdubai.ru/mediafiles/images/deyaar_tria_dubai_si_5.jpg" alt="" /></picture>
														</div>
													</div>
													<!-- <div class="apartments-slider__slide swiper-slide">
															<div class="apartments-slider__image-ibg"><picture><source data-srcset="img/more/04.webp" srcset="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" type="image/webp"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII="  data-src="img/more/04.png" alt=""></picture></div>
														</div>
														<div class="apartments-slider__slide swiper-slide">
															<div class="apartments-slider__image-ibg"><picture><source data-srcset="img/more/04.webp" srcset="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" type="image/webp"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII="  data-src="img/more/04.png" alt=""></picture></div>
														</div>
														<div class="apartments-slider__slide swiper-slide">
															<div class="apartments-slider__image-ibg"><picture><source data-srcset="img/more/04.webp" srcset="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" type="image/webp"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII="  data-src="img/more/04.png" alt=""></picture></div>
														</div> -->
												</div>
												<div class="apartments-slider__controls apartments-slider-controls">
													<div class="apartments-slider-controls-arrows apartments-slider-controls__arrows">
														<button type="button" class="apartments-slider-controls__arrow apartments-slider-controls_prev _icon-arrow-right"></button>
														<button type="button" class="apartments-slider-controls__arrow apartments-slider-controls_next _icon-arrow-right"></button>
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
										<div class="discover__content">
											<div class="discover__text">
												<p class="MsoNormal">
												'. $row['text1'] .'
												</p>
											</div>
											<button type="button" class="discover__button button button_extra-large" onclick="Marquiz.showModal("62a9d7fb7cd214004ab0c35a")">
												Узнать больше
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
													echo "0 results";
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
													echo "0 results";
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
													echo "0 results";
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
													echo "0 results";
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
									<div data-tabs="" class="gallery__tab tab-gallery _tab-init" data-tabs-index="0">
										<nav data-tabs-titles="" class="tab-gallery__titles">
											<button type="button" class="title title_large tab-gallery__title _tab-active" data-tabs-title="">
												Interior
											</button>
											/
											<button type="button" class="title title_large tab-gallery__title" data-tabs-title="">
												Exterior
											</button>
										</nav>
										<div class="tab-gallery__content" data-tabs-body="">
											<div class="tab-gallery__body gallery-interier" data-tabs-item="">
												<div class="gallery-interier__content swiper-initialized swiper-horizontal swiper-pointer-events swiper-backface-hidden">
													<div class="gallery-interier__controls">
														<div class="inline-gallery-slider__arrows slider-arrows">
															<button type="button" class="slider-arrow slider-arrow_prev _icon-angle-right"></button>
															<button type="button" class="slider-arrow slider-arrow_next _icon-angle-left"></button>
														</div>
													</div>
													<div class="gallery-interier__wrapper swiper-wrapper" style="
										transition-duration: 0ms;
										transform: translate3d(0px, 0px, 0px);
									">
														<div class="gallery-interier__slide swiper-slide swiper-slide-active" style="width: 1319px; margin-right: 10px">
															<div data-exterior="48" class="gallery-interier__image-ibg">
																<picture><source srcset="../admin/projects/'. $row['title'] .'/'. $row['interior_photo1'] .'" type="image/webp"><img src="../admin/projects/'. $row['title'] .'/'. $row['interior_photo1'] .'" alt="" /></picture>
															</div>
														</div>
														<div class="gallery-interier__slide swiper-slide swiper-slide-next swiper-slide-prev" style="width: 1319px; margin-right: 10px">
															<div data-exterior="48" class="gallery-interier__image-ibg">
																<picture><source srcset="../admin/projects/'. $row['title'] .'/'. $row['interior_photo2'] .'" type="image/webp"><img src="../admin/projects/'. $row['title'] .'/'. $row['interior_photo2'] .'" alt="" /></picture>
															</div>
														</div>
													</div>
												</div>
												<div class="gallery-interier__thumbs thumbs-interier swiper-initialized swiper-horizontal swiper-pointer-events swiper-watch-progress swiper-backface-hidden swiper-thumbs" thumbsslider="1">
													<div class="thumbs-interier__wrapper swiper-wrapper" style="
										transition-duration: 0ms;
										transform: translate3d(0px, 0px, 0px);
									">
														<div class="thumbs-interier__slide swiper-slide swiper-slide-active swiper-slide-visible" style="width: 322.25px; margin-right: 10px">
															<div data-exterior="48" class="thumbs-interier__image-ibg">
																<picture><source srcset="../admin/projects/'. $row['title'] .'/'. $row['interior_photo3'] .'" type="image/webp"><img src="../admin/projects/'. $row['title'] .'/'. $row['interior_photo3'] .'" alt="" /></picture>
															</div>
														</div>
														<div class="thumbs-interier__slide swiper-slide swiper-slide-next swiper-slide-prev swiper-slide-visible" style="width: 322.25px; margin-right: 10px">
															<div data-exterior="48" class="thumbs-interier__image-ibg">
																<picture><source srcset="../admin/projects/'. $row['title'] .'/'. $row['interior_photo4'] .'" type="image/webp"><img src="../admin/projects/'. $row['title'] .'/'. $row['interior_photo4'] .'" alt="" /></picture>
															</div>
														</div>
													</div>
												</div>
											</div>
											<div class="tab-gallery__body gallery-exterier" data-tabs-item="" hidden="">
												<div class="gallery-exterier__content swiper-initialized swiper-horizontal swiper-pointer-events">
													<div class="gallery-exterier__controls">
														<div class="inline-gallery-slider__arrows slider-arrows">
															<button type="button" class="slider-arrow slider-arrow_prev _icon-angle-right"></button>
															<button type="button" class="slider-arrow slider-arrow_next _icon-angle-left"></button>
														</div>
													</div>
													<div class="gallery-exterier__wrapper swiper-wrapper" style="transition-duration: 0ms">
														<div class="gallery-exterier__slide swiper-slide">
															<div data-exterior="48" class="gallery-interier__image-ibg">
																<picture><source srcset="../admin/projects/'. $row['title'] .'/'. $row['exterior_photo1'] .'" type="image/webp"><img src="../admin/projects/'. $row['title'] .'/'. $row['exterior_photo1'] .'" alt="" /></picture>
															</div>
														</div>
														<div class="gallery-exterier__slide swiper-slide">
															<div data-exterior="48" class="gallery-interier__image-ibg">
																<picture><source srcset="../admin/projects/'. $row['title'] .'/'. $row['exterior_photo2'] .'" type="image/webp"><img src="../admin/projects/'. $row['title'] .'/'. $row['exterior_photo2'] .'" alt="" /></picture>
															</div>
														</div>
													</div>
												</div>
												<div class="gallery-exterier__thumbs thumbs-exterier swiper-initialized swiper-horizontal swiper-pointer-events swiper-watch-progress swiper-thumbs" thumbsslider="1">
													<div class="thumbs-exterier__wrapper swiper-wrapper" style="transition-duration: 0ms">
														<div class="thumbs-exterier__slide swiper-slide">
															<div data-exterior="48" class="thumbs-interier__image-ibg">
																<picture><source srcset="../admin/projects/'. $row['title'] .'/'. $row['exterior_photo3'] .'" type="image/webp"><img src="../admin/projects/'. $row['title'] .'/'. $row['exterior_photo3'] .'" alt="" /></picture>
															</div>
														</div>
														<div class="thumbs-exterier__slide swiper-slide">
															<div data-exterior="48" class="thumbs-interier__image-ibg">
																<picture><source srcset="../admin/projects/'. $row['title'] .'/'. $row['exterior_photo4'] .'" type="image/webp"><img src="../admin/projects/'. $row['title'] .'/'. $row['exterior_photo4'] .'" alt="" /></picture>
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
											<picture><source data-srcset="../admin/projects/'. $row['title'] .'/'. $row['third_photo'] .'" srcset="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" type="image/webp"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII="  data-src="../admin/projects/'. $row['title'] .'/'. $row['third_photo'] .'" src="../admin/projects/'. $row['title'] .'/'. $row['third_photo'] .'" /></picture>
										</div>
										<div class="located-top__image-2-ibg">
											<picture><source data-srcset="../admin/projects/'. $row['title'] .'/'. $row['third_photo'] .'" srcset="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" type="image/webp"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII="  data-src="../admin/projects/'. $row['title'] .'/'. $row['third_photo'] .'" src="../admin/projects/'. $row['title'] .'/'. $row['third_photo'] .'" /></picture>
										</div>
										<div class="located-top__title">'. $row['sub_title'] .'</div>
										<div class="located-top__title">
											<span></span>
										</div>
									</div>
									<div class="located__bottom located-bottom">
										<div class="located-bottom__body">
											<div class="located-bottom__image-ibg">
												<picture><source data-srcset="../admin/projects/'. $row['title'] .'/'. $row['secound_main_photo'] .'" srcset="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" type="image/webp"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII="  data-src="../admin/projects/'. $row['title'] .'/'. $row['secound_main_photo'] .'" src="../admin/projects/'. $row['title'] .'/'. $row['secound_main_photo'] .'" /></picture>
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
															echo "0 results";
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
															echo "0 results";
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
															echo "0 results";
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
															echo "0 results";
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
										Планы этажей Sobha Hartland Crest Grande
									</div>
									<div class="bedroom__body">
										<div class="bedroom-tabs tabs">
											<div class="bedroom-tabs__content tabs__content swiper-initialized swiper-horizontal swiper-pointer-events swiper-backface-hidden">
												<!-- Its swiper parent -->
												<div class="bedroom-tabs-pagination swiper-pagination-clickable swiper-pagination-bullets swiper-pagination-horizontal">
													<span class="swiper-pagination-bullet bedroom-tabs-pagination__item">Plan 1</span>

													<span class="swiper-pagination-bullet bedroom-tabs-pagination__item">Plan 2</span>

													<span class="swiper-pagination-bullet bedroom-tabs-pagination__item swiper-pagination-bullet-active">Plan
														3</span>
												</div>
												<!-- Swiper pagination example: 1 bedroom -->
												<div class="bedroom-tabs__controls bedroom-tabs-controls">
													<div class="bedroom-tabs-controls__arrows slider-arrows">
														<button type="button" class="slider-arrow slider-arrow_prev _icon-angle-right"></button>
														<button type="button" class="slider-arrow slider-arrow_next _icon-angle-left"></button>
													</div>
												</div>
												<div class="bedroom-tabs__wrapper swiper-wrapper" style="
									transition-duration: 0ms;
									transform: translate3d(-2678px, 0px, 0px);
									">
													<!--                                    <div class="bedroom-tabs-content__body swiper-slide">-->
													<!--                                        <div class="bedroom-tabs-content__content">-->
													<!--                                            <div class="bedroom-tabs-content__title">Studio units 1</div>-->
													<!--                                            <div class="bedroom-tabs-content__area-info">-->
													<!--                                                <div class="bedroom-tabs-content__area">-->
													<!--                                                    <span class="_icon-suite-area"></span>-->
													<!--                                                    Suite Area: 224,31 sqft-->
													<!--                                                </div>-->
													<!--                                                <div class="bedroom-tabs-content__area">-->
													<!--                                                    <span class="_icon-total-area"></span>-->
													<!--                                                    Total Area: 256,50 sqft-->
													<!--                                                </div>-->
													<!--                                            </div>-->
													<!--                                            <a href="" class="bedroom-tabs-content__button button button_small-large">Get all flore plans</a>-->
													<!--                                            <br>-->
													<!--                                            <a href="" class="bedroom-tabs-content__button button button_small-large-transparent">Download Brochure</a>-->
													<!--                                        </div>-->
													<!--                                        <div class="bedroom-tabs-content__image">-->
													<!--                                            <div class="bedroom-tabs-content__image-ibg"><picture><source data-srcset="img/more/22.webp" srcset="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" type="image/webp"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII="  data-src="img/more/22.png" alt=""></picture></div>-->
													<!--                                        </div>-->
													<!--                                    </div>-->
													<!--                                    <div class="bedroom-tabs-content__body swiper-slide">-->
													<!--                                        <div class="bedroom-tabs-content__content">-->
													<!--                                            <div class="bedroom-tabs-content__title">Studio units 2</div>-->
													<!--                                            <div class="bedroom-tabs-content__area-info">-->
													<!--                                                <div class="bedroom-tabs-content__area">-->
													<!--                                                    <span class="_icon-suite-area"></span>-->
													<!--                                                    Suite Area: 224,31 sqft-->
													<!--                                                </div>-->
													<!--                                                <div class="bedroom-tabs-content__area">-->
													<!--                                                    <span class="_icon-total-area"></span>-->
													<!--                                                    Total Area: 256,50 sqft-->
													<!--                                                </div>-->
													<!--                                            </div>-->
													<!--                                            <a href="" class="bedroom-tabs-content__button button button_small-large">Get all flore plans</a>-->
													<!--                                            <br>-->
													<!--                                            <a href="" class="bedroom-tabs-content__button button button_small-large-transparent">Download Brochure</a>-->
													<!--                                        </div>-->
													<!--                                        <div class="bedroom-tabs-content__image">-->
													<!--                                            <div class="bedroom-tabs-content__image-ibg"><picture><source data-srcset="img/more/22.webp" srcset="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" type="image/webp"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII="  data-src="img/more/22.png" alt=""></picture></div>-->
													<!--                                        </div>-->
													<!--                                    </div>-->
													<!--                                    <div class="bedroom-tabs-content__body swiper-slide">-->
													<!--                                        <div class="bedroom-tabs-content__content">-->
													<!--                                            <div class="bedroom-tabs-content__title">Studio units 2</div>-->
													<!--                                            <div class="bedroom-tabs-content__area-info">-->
													<!--                                                <div class="bedroom-tabs-content__area">-->
													<!--                                                    <span class="_icon-suite-area"></span>-->
													<!--                                                    Suite Area: 224,31 sqft-->
													<!--                                                </div>-->
													<!--                                                <div class="bedroom-tabs-content__area">-->
													<!--                                                    <span class="_icon-total-area"></span>-->
													<!--                                                    Total Area: 256,50 sqft-->
													<!--                                                </div>-->
													<!--                                            </div>-->
													<!--                                            <a href="" class="bedroom-tabs-content__button button button_small-large">Get all flore plans</a>-->
													<!--                                            <br>-->
													<!--                                            <a href="" class="bedroom-tabs-content__button button button_small-large-transparent">Download Brochure</a>-->
													<!--                                        </div>-->
													<!--                                        <div class="bedroom-tabs-content__image">-->
													<!--                                            <div class="bedroom-tabs-content__image-ibg"><picture><source data-srcset="img/more/22.webp" srcset="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" type="image/webp"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII="  data-src="img/more/22.png" alt=""></picture></div>-->
													<!--                                        </div>-->
													<!--                                    </div>-->
													<!--                                    <div class="bedroom-tabs-content__body swiper-slide">-->
													<!--                                        <div class="bedroom-tabs-content__content">-->
													<!--                                            <div class="bedroom-tabs-content__title">Studio units 1</div>-->
													<!--                                            <div class="bedroom-tabs-content__area-info">-->
													<!--                                                <div class="bedroom-tabs-content__area">-->
													<!--                                                    <span class="_icon-suite-area"></span>-->
													<!--                                                    Suite Area: 224,31 sqft-->
													<!--                                                </div>-->
													<!--                                                <div class="bedroom-tabs-content__area">-->
													<!--                                                    <span class="_icon-total-area"></span>-->
													<!--                                                    Total Area: 256,50 sqft-->
													<!--                                                </div>-->
													<!--                                            </div>-->
													<!--                                            <a href="" class="bedroom-tabs-content__button button button_small-large">Get all flore plans</a>-->
													<!--                                            <br>-->
													<!--                                            <a href="" class="bedroom-tabs-content__button button button_small-large-transparent">Download Brochure</a>-->
													<!--                                        </div>-->
													<!--                                        <div class="bedroom-tabs-content__image">-->
													<!--                                            <div class="bedroom-tabs-content__image-ibg"><picture><source data-srcset="img/more/22.webp" srcset="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" type="image/webp"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII="  data-src="img/more/22.png" alt=""></picture></div>-->
													<!--                                        </div>-->
													<!--                                    </div>-->
													<!--                                    <div class="bedroom-tabs-content__body swiper-slide">-->
													<!--                                        <div class="bedroom-tabs-content__content">-->
													<!--                                            <div class="bedroom-tabs-content__title">Studio units 2</div>-->
													<!--                                            <div class="bedroom-tabs-content__area-info">-->
													<!--                                                <div class="bedroom-tabs-content__area">-->
													<!--                                                    <span class="_icon-suite-area"></span>-->
													<!--                                                    Suite Area: 224,31 sqft-->
													<!--                                                </div>-->
													<!--                                                <div class="bedroom-tabs-content__area">-->
													<!--                                                    <span class="_icon-total-area"></span>-->
													<!--                                                    Total Area: 256,50 sqft-->
													<!--                                                </div>-->
													<!--                                            </div>-->
													<!--                                            <a href="" class="bedroom-tabs-content__button button button_small-large">Get all flore plans</a>-->
													<!--                                            <br>-->
													<!--                                            <a href="" class="bedroom-tabs-content__button button button_small-large-transparent">Download Brochure</a>-->
													<!--                                        </div>-->
													<!--                                        <div class="bedroom-tabs-content__image">-->
													<!--                                            <div class="bedroom-tabs-content__image-ibg"><picture><source data-srcset="img/more/22.webp" srcset="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" type="image/webp"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII="  data-src="img/more/22.png" alt=""></picture></div>-->
													<!--                                        </div>-->
													<!--                                    </div>-->
													<!--                                    <div class="bedroom-tabs-content__body swiper-slide">-->
													<!--                                        <div class="bedroom-tabs-content__content">-->
													<!--                                            <div class="bedroom-tabs-content__title">Studio units 2</div>-->
													<!--                                            <div class="bedroom-tabs-content__area-info">-->
													<!--                                                <div class="bedroom-tabs-content__area">-->
													<!--                                                    <span class="_icon-suite-area"></span>-->
													<!--                                                    Suite Area: 224,31 sqft-->
													<!--                                                </div>-->
													<!--                                                <div class="bedroom-tabs-content__area">-->
													<!--                                                    <span class="_icon-total-area"></span>-->
													<!--                                                    Total Area: 256,50 sqft-->
													<!--                                                </div>-->
													<!--                                            </div>-->
													<!--                                            <a href="" class="bedroom-tabs-content__button button button_small-large">Get all flore plans</a>-->
													<!--                                            <br>-->
													<!--                                            <a href="" class="bedroom-tabs-content__button button button_small-large-transparent">Download Brochure</a>-->
													<!--                                        </div>-->
													<!--                                        <div class="bedroom-tabs-content__image">-->
													<!--                                            <div class="bedroom-tabs-content__image-ibg"><picture><source data-srcset="img/more/22.webp" srcset="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" type="image/webp"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII="  data-src="img/more/22.png" alt=""></picture></div>-->
													<!--                                        </div>-->
													<!--                                    </div>-->
													<div object-plan="48" class="bedroom-tabs-content__body swiper-slide swiper-slide-next" style="width: 1319px; margin-right: 20px">
														<div class="bedroom-tabs-content__content">
															<div class="bedroom-tabs-content__title">
																Апартаменты с 1 спальней
															</div>
															<div class="bedroom-tabs-content__area-info">
																<div class="bedroom-tabs-content__area">
																	<span class="_icon-suite-area"></span>
																	Suite Area: 0 sqft
																</div>
																<div class="bedroom-tabs-content__area">
																	<span class="_icon-total-area"></span>
																	Total Area: 72 sqft
																</div>
															</div>
															<a href="" class="bedroom-tabs-content__button button button_small-large" onclick="Marquiz.showModal("62a9d7fb7cd214004ab0c35a")">Получить всю
																планировку</a>
															<br />
															<a href="" class="bedroom-tabs-content__button button button_small-large-transparent" onclick="Marquiz.showModal("62a9d7fb7cd214004ab0c35a")">Скачать
																брошюру</a>
														</div>
														<div class="bedroom-tabs-content__image">
															<div class="bedroom-tabs-content__image-ibg">
																<img src="https://kvartirivdubai.ru/mediafiles/images/1BR.svg" alt="" />
															</div>
														</div>
													</div>
													<div object-plan="48" class="bedroom-tabs-content__body swiper-slide swiper-slide-prev" style="width: 1319px; margin-right: 20px">
														<div class="bedroom-tabs-content__content">
															<div class="bedroom-tabs-content__title">
																Апартаменты с 2 спальнями
															</div>
															<div class="bedroom-tabs-content__area-info">
																<div class="bedroom-tabs-content__area">
																	<span class="_icon-suite-area"></span>
																	Suite Area: 0 sqft
																</div>
																<div class="bedroom-tabs-content__area">
																	<span class="_icon-total-area"></span>
																	Total Area: 116 sqft
																</div>
															</div>
															<a href="" class="bedroom-tabs-content__button button button_small-large" onclick="Marquiz.showModal("62a9d7fb7cd214004ab0c35a")">Получить всю
																планировку</a>
															<br />
															<a href="" class="bedroom-tabs-content__button button button_small-large-transparent" onclick="Marquiz.showModal("62a9d7fb7cd214004ab0c35a")">Скачать
																брошюру</a>
														</div>
														<div class="bedroom-tabs-content__image">
															<div class="bedroom-tabs-content__image-ibg">
																<img src="https://kvartirivdubai.ru/mediafiles/images/2BR.svg" alt="" />
															</div>
														</div>
													</div>
													<div object-plan="48" class="bedroom-tabs-content__body swiper-slide swiper-slide-active" style="width: 1319px; margin-right: 20px">
														<div class="bedroom-tabs-content__content">
															<div class="bedroom-tabs-content__title">Студии</div>
															<div class="bedroom-tabs-content__area-info">
																<div class="bedroom-tabs-content__area">
																	<span class="_icon-suite-area"></span>
																	Suite Area: 0 sqft
																</div>
																<div class="bedroom-tabs-content__area">
																	<span class="_icon-total-area"></span>
																	Total Area: 41 sqft
																</div>
															</div>
															<a href="" class="bedroom-tabs-content__button button button_small-large" onclick="Marquiz.showModal("62a9d7fb7cd214004ab0c35a")">Получить всю
																планировку</a>
															<br />
															<a href="" class="bedroom-tabs-content__button button button_small-large-transparent" onclick="Marquiz.showModal("62a9d7fb7cd214004ab0c35a")">Скачать
																брошюру</a>
														</div>
														<div class="bedroom-tabs-content__image">
															<div class="bedroom-tabs-content__image-ibg">
																<img src="https://kvartirivdubai.ru/mediafiles/images/Studio.svg" alt="" />
															</div>
														</div>
													</div>
												</div>
												<!-- Its swiper slider parent -->
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
							</section>
							<section class="page__payment payment">
								<div class="payment__container">
									<div class="payment__title title title_large">
										70/30 3 года После сдачи
									</div>
								</div>
								<div class="payment__body">
									<div class="payment__content">
										<div class="payment__item item-payment">
											<div class="item-payment__body">
												<div class="item-payment__image-ibg"><picture><source srcset="https://kvartirivdubai.ru/mediafiles/images/Screenshot_-_2022-04-11T163418.487_9wEPaXL.webp" type="image/webp"><img src="https://kvartirivdubai.ru/mediafiles/images/Screenshot_-_2022-04-11T163418.487_9wEPaXL.png" alt=""></picture></div>
												<div class="item-payment__text">On Booking</div>
											</div>
										</div>
										<div class="payment__item item-payment">
											<div class="item-payment__body">
												<div class="item-payment__title">10%</div>
												<div class="item-payment__text">On Booking</div>
											</div>
										</div>
										
									</div>
								</div>
							</section>';

						}

					} else {
				echo "0 results";
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
								Запутались? Пройдите тест и получите лучшие предложения
							</div>
							<div class="quiz__text">
								<p>
									Будучи квалифицированными экспертами по недвижимости с
									многолетним опытом, мы понимаем, как запутанно Рынок
									незавершенной недвижимости Дубая может быть как для новых
									покупателей, так и для профессиональные инвесторы. Особенно,
									когда есть тысячи объектов вне плана. В Дубаи.
								</p>
								<p>
									Вам не нужно будет просматривать бесчисленные объявления о
									другой недвижимости в ОАЭ. сайты. Мы собрали всю доступную
									информацию о строящейся недвижимости в одном место и создал
									короткую викторину для вас, чтобы найти свой идеальный дом
									менее чем за два минут.
								</p>
								<p>
									Следуйте простым шагам на экране, чтобы получить личный
									выбор проектов, которые удовлетворить все ваши требования.
									Изучите любой интересующий вас проект в Дубае и свяжитесь с
									нами нас!
								</p>
							</div>
							<div class="quiz__actions">
								<a href="#" class="quiz__button button button_normal">Пройдите быстрый тест</a>
								<div class="quiz__less-time">
									<span class="_icon-clock"></span>
									Это занимает менее 2 минут
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
							<div class="appeal__body" action="#" method="GET" enctype="multipart/form-data">
								<div class="appeal__title">
									Наш эксперт поможет вам купить
									<br />
									<span class="appeal__subtitle">
										Лучшая резиденция в Дубае
									</span>
								</div>
								<form action="#" method="GET" enctype="multipart/form-data" class="appeal__form">
									<!-- <div class="appeal__col">
                                            <input autocomplete="off" type="text" name="form[]" data-error="Ошибка"
                                                placeholder="Полное имя *" class="appeal__input">
                                        </div>
                                        <div class="appeal__col">
                                            <input autocomplete="off" type="text" name="form[]" data-error="Ошибка"
                                                placeholder="Телефон *" class="appeal__input">
                                        </div>
                                        <div class="appeal__col">
                                            <input autocomplete="off" type="text" name="form[]" data-error="Ошибка"
                                                placeholder="Эл. почта *" class="appeal__input">
                                        </div> -->
									<button type="button" class="appeal__button button button_small" onclick="Marquiz.showModal('62a9d7fb7cd214004ab0c35a')">
										Пройдите быстрый тест
									</button>
								</form>
							</div>
						</div>
						<div class="expert-appeal__profile-expert profile-expert">
							<!-- <div class="profile-expert__image"> -->
							<div class="profile-expert__image-ibg">
								<picture><source data-srcset="img/main-page/1.webp" srcset="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" type="image/webp"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII="  data-src="img/main-page/01.JPG" src="img/main-page/1.png" /></picture>
							</div>
							<!-- </div> -->
							<div class="profile-expert__content">
								<div class="profile-expert__info-name">
									<div class="profile-expert__full-name">Юля Рошкович</div>
									<div class="profile-expert__profession">
										Региональный менеджер
									</div>
								</div>
								<div class="profile-expert__info-expert">
									<div class="profile-expert__icon _icon-phone-call"></div>
									<a href="tel:971588070001" class="profile-expert__text">+971 58 807 0001</a>
								</div>
								<div class="profile-expert__info-expert">
									<div class="profile-expert__icon _icon-location-mark"></div>
									<div class="profile-expert__text">
										Дубай, Business Bay, Bay Square, Building 13 - Дубай
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<section class="page__social-links social-links">
				<a href="tel:971588070001" class="social-links__link social-links__link_phone">
					<picture><source srcset="https://static3.tildacdn.com/tild6636-6437-4261-b163-373962623765/phone.webp" type="image/webp"><img src="https://static3.tildacdn.com/tild6636-6437-4261-b163-373962623765/phone.png" alt="" /></picture>
					<span class="social-links__text"> Телефон </span>
				</a>
				<a href="https://wa.me/971588070001" class="social-links__link social-links__link_whatsapp">
					<picture><source srcset="https://static3.tildacdn.com/tild3432-6463-4763-b730-333161663965/WhatsApp-Logo-1-01-c.webp" type="image/webp"><img src="https://static3.tildacdn.com/tild3432-6463-4763-b730-333161663965/WhatsApp-Logo-1-01-c.png" alt="" /></picture>
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
				</div>
			</div>
		</div>
	</div>
	<script src="https://code.jquery.com/jquery-3.6.0.min.js?_v=20220716213407"></script>
	<!-- <script src="http://maps.google.com/maps/api/js?key=AIzaSyAVK6HrbiqjntBFfu7rNUO4IuixFG7mCd0&_v=20220716213407"></script> -->
	<script src="js/app.min.js?_v=20220716213407"></script>
</body>

</html>