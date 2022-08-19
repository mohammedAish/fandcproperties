
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
$sql = "SELECT * FROM off_plan limit $start_from,$num_per_page";
$rs_result = $conn->query($sql);
$count = mysqli_num_rows( $rs_result );

$sql2 = "SELECT * FROM blogs";
$rs_result2 = $conn->query($sql2);




 /* lat/lng data will be added to this array */
 $locations=array();
 $query =  $conn->query('SELECT * FROM off_plan');
 if ($query->num_rows > 0) {
		
	while($row = $query->fetch_assoc()) {

		 $nama_kabkot = $row['title'];
		 $longitude = $row['longitude'];                              
		 $latitude = $row['latitude'];

		 /* Each row is added as a new array */
		 $locations[]=array( 'name'=>$nama_kabkot, 'lat'=>$latitude, 'lng'=>$longitude );
		 
	 }
	 /* Convert data to json */
	 $markers = json_encode( $locations );
	} 
	else{
		$nama_kabkot = 'No Items';
		 $longitude = '1';                              
		 $latitude = '1';
	}


	

?>
<!DOCTYPE html>
<html lang="en">

<head>
	<title>F&C Properties Off Plan</title>
	<meta name="description" content="Find the property of your dreams! With our experts, you can get acquainted with the large real estate market in Dubai!" />
	<meta charset="UTF-8" />
	<meta name="format-detection" content="telephone=no" />
	<link rel="stylesheet" href="css/style.min.css?_v=20220803185036" type="text/css" />
	<link rel="shortcut icon" href="favicon.ico" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<script src="http://maps.google.com/maps/api/js?key=AIzaSyAk1cygku8dx0DrpE8IpRs0331s3DzC-08"></script> 
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
									<li class="menu-project__item">
										<a href="off-plan/" class="menu-project__link">area</a>
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
			<section class="inner-wrapper">
				<section class="page__main main-block">
					<div class="main-block__container" >
						<div class="main-block__body"  data-fullscreen>
							<div class="main-block__title">
								<button type="button" data-popup="#video" class="main-block__title title title_w">
									Find Your Home
									<div class="main-block__icon">
										<span class="_icon-play"></span>
									</div>
								</button>
							</div>
							<div class="main-block__tabs main-block-tabs">
								<nav class="main-block-tabs__navigation">
									<button type="button" onclick="location.href='../Buy.php'" class="main-block-tabs__title ">Buy</button>
									<button type="button" onclick="location.href='../Rent.php'" class="main-block-tabs__title">Rent</button>
									<button type="button" onclick="location.href='index.php'" class="main-block-tabs__title _tab-active ">Off-Plan</button>
								</nav>
								<div  class="main-block-tabs__content">
									<div class="main-block-tabs__body">
										<form action="search.php" method="POST" enctype="multipart/form-data" class="main-block__form-find form-find">
											<div class="form-find__wrapper">
												<div class="form-find__body">
													<div data-da=".form-find__row,1320,first" class="form-find__column">
														<select name="room" class="form-find__select form-find__select-developer select">
															<option value="" selected="">Rooms</option>
															<option value="1" >1 Room</option>
															<option value="2" >2 Room</option>
															<option value="3" >3 Room</option>
															<option value="4" >4 Room</option>
															<option value="5" >5 Room</option>
														</select>
													</div>
													<div class="form-find__column form-find__column_large">
														<div class="form-find__item form-find__item_input">
															<input autocomplete="off" type="text" data-error="Ошибка" placeholder="Search By Name" name="text" class="form-find__input input">
															<button data-da=".form-find__body,479.98,last" type="submit" class="form-find__button button button_large">
																<span class="_icon-magnify"></span>
																Search
															</button>
														</div>
													</div>
													<div class="form-find__column">
														<select name="types" class="form-find__select select">
														<?php 
                                             
											 $sql1 = "SELECT * FROM property_types";
											 $rs_result1 = $conn->query($sql1);
											 if ($rs_result1->num_rows > 0) {
		 
												 while($row1 = $rs_result1->fetch_assoc()) {

													 echo '<option value="'.$row1['type'].'">'.$row1['type'].'</option>';

												 }
												 echo '</select>';

											 } else {
									   
												 }


										  ?>
														</select>
													</div>
													<div class="form-find__row">
														<div data-da=".form-find__body,1320,first" class="form-find__column">
															<select name="developer" class="form-find__select form-find__select-developer select">
																<option value="%" selected="">Developers</option>
																<?php 
                                             
                                             $sql5 = "SELECT * FROM developers";
                                             $rs_result1 = $conn->query($sql5);
                                             if ($rs_result1->num_rows > 0) {
         
                                                 while($row1 = $rs_result1->fetch_assoc()) {

                                                     echo '<option value="'.$row1['developer'].'">'.$row1['developer'].'</option>';

                                                 }
                                                 echo '</select>';

                                             } else {
                                       
              					                       }

                                   				  ?>
															</select>
														</div>
														<div class="form-find__column">
															<select name="max" class="form-find__select select">
																<option value="100000000000" selected="">Max Price</option>
																<option value="500000">$ 500,000</option>
																<option value="1000000">$ 1,000,000</option>
																<option value="2000000">$ 2,000,000</option>
																<option value="3000000">$ 3,000,000</option>
																<option value="5000000">$ 5,000,000</option>
																<option value="10000000">$ 10,000,000</option>
																<option value="20000000">$ 20,000,000</option>
																<option value="50000000">$ 50,000,000</option>
															</select>
														</div>
													</div>
												</div>
											</div>
										</form>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- <div class="main-block__image-ibg"><picture><source data-srcset="img/main-page/05.webp" srcset="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" type="image/webp"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII="  data-src="img/main-page/05.jpg" alt=""></picture></div> -->
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
													<h3 class="item-products__title"><span class="px-2">from</span>$'. number_format(floatval($row['property_price'])) .'</h3>
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

								<?php
								$gal = "SELECT * FROM `gallery`";
								$gal_res = $conn->query($gal);
								if ($gal_res->num_rows > 0) {
									while($row2 = $gal_res->fetch_assoc()) {
										echo'<div href="#" class="banner__slide swiper-slide">
										<div class="banner__item">
											<div class="banner__image">
												<picture>
													<source media="(min-width: 479.98px)" srcset="../admin/banners/'.$row3['name'].'/'.$row3['pic2'].'">
													<source media="(max-width: 479.98px)" srcset="../admin/banners/'.$row3['name'].'/'.$row3['pic2'].'">
													<img src="../admin/banners/'.$row3['name'].'/'.$row3['pic2'].'">
												</picture>
												<a href="#" class="banner__link">
												Download
												</a>
												<!-- <picture><source data-srcset="img/main-page/03.webp" srcset="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" type="image/webp"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII="  data-src="img/main-page/03.jpg" alt=""></picture> -->
											</div>
										</div>
									</div>';
                                }
							} else {  }

									?>

								</div>
								<div class="banner__pagination">

								</div>
							</div>
							
						</div>
						<?php if ($count > 10){
						echo '<a href="index.php?page=<?php echo $page+1;?>" class="products__link">
							Show More
						</a>';
						}
						?>
					</div>
				</section>

				

				
				<section class="page__image-bottle image-bottle">
					<div class="image-bottle__container">
						<div class="image-bottle__image-ibg"><picture><source data-srcset="img/image-bottle/0.webp" srcset="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" type="image/webp"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII="  data-src="img/image-bottle/0.png" alt=""></picture></div>
					</div>
				</section>
				<section class="page__banner banner banner_pc">
					<div class="banner__container">
						<div class="banner__body">
							<div class="banner__wrapper swiper-wrapper">

							<?php
							$gal = "SELECT * FROM `gallery`";
							$gal_res = $conn->query($gal);
								if ($gal_res->num_rows > 0) {
									while($row3 = $gal_res->fetch_assoc()) {
										echo'<div href="#" class="banner__slide swiper-slide">
										<div class="banner__item">
											<div class="banner__image">
												<picture>
													<source media="(min-width: 479.98px)" srcset="../admin/banners/'.$row3['name'].'/'.$row3['pic'].'">
													<source media="(max-width: 479.98px)" srcset="../admin/banners/'.$row3['name'].'/'.$row3['pic'].'">
													<img src="../admin/banners/'.$row3['name'].'/'.$row3['pic'].'">
												</picture>
												<a href="#" class="banner__link">
												Download
												</a>
												<!-- <picture><source data-srcset="img/main-page/03.webp" srcset="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" type="image/webp"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII="  data-src="img/main-page/03.jpg" alt=""></picture> -->
											</div>
										</div>
									</div>';
                                }
							} else {   }

									?>
								


							</div>
							<div class="banner__pagination">

							</div>
						</div>
					</div>
				</section>
				<!-- <div class="page__send-detail send-detail">
						<div class="send-detail__container">
							<div class="send-detail__body">
								<div class="send-detail__message">
									<div class="send-detail__image">
										<picture><source srcset="img/main-page/4.webp" type="image/webp"><img src="img/main-page/4.png" alt=""></picture>
									</div>
									<div class="send-detail__title title">Отправьте свои данные для бесплатной консультации</div>
								</div>
								<div class="send-detail__consultation">
									<form action="#" method="get" enctype="multipart/form-data" class="send-detail__form send-detail-form">
										<div class="send-detail-form__block">
											<input autocomplete="off" type="text" name="form[]" data-error="Ошибка" required placeholder="Имя*" class="send-detail-form__input">
										</div>
										<div class="send-detail-form__block">
											<input autocomplete="off" type="text" name="form[]" data-error="Ошибка" required placeholder="Почта*" class="send-detail-form__input">
										</div>
									</form>
									<a href="" class="send-detail__button button button_red">
										Бесплатная консультация
									</a>
								</div>
							</div>
						</div>
					</div> -->
			</section>
			<section class="page__map map">
				<div class="map__container">
					<div class="map__title title title_w">Map of real estate projects in Dubai</div>
				</div>
				<div id="map" style="width: auto; height: 500px;">
					<div id="loader"></div>
				</div>
			</section>
	
			<section class="page__news news">
				<div class="news__container">
					<div class="news__title title">Real estate news, ideas and advice</div>
					<div class="news__body">
						<div class="news__controls news-controls">
							<div class="news-controls__arrows slider-arrows">
								<button type="button" class="slider-arrow slider-arrow_prev _icon-angle-right"></button>
								<button type="button" class="slider-arrow slider-arrow_next _icon-angle-left"></button>
							</div>
						</div>
						<div class="news__wrappr swiper-wrapper">
							
							<?php
								if ($rs_result2->num_rows > 0) {
									while($row2 = $rs_result2->fetch_assoc()) {
									echo '<div class="news__card swiper-slide card-news">
											<div class="card-news__body">
												<a href="" class="card-news__image-ibg"><picture><source data-srcset="../admin/blogs/'.$row2['title'].'/'.$row2['photo'].'" srcset="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" type="image/webp"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII="  data-src="img/news/01.png" alt=""></picture></a>
												<div class="card-news__date">
													<span class="card-news__icon _icon-calendar"></span>
													<span class="card-news__date-text">
													'.$row2['creation'].'
													</span>
												</div>
												<div class="card-news__content">
													<div class="card-news__type-projects">
													'.$row2['sub_title'].'
													</div>
													<div class="card-news__title">'.$row2['title'].'</div>
													<div class="card-news__text">'.$row2['description'].'</div>
													<a href="'.$row2['video'].'" class="card-news__button button button_small">
														Video Overview
													</a>
												</div>
											</div>
										</div>';
									}
								} else {
									
								}
							?>
						</div>
						<div class="products__item item-products banner__body">
							<div class="banner__wrapper swiper-wrapper">
								<div href="#" class="banner__slide swiper-slide">
									<div class="banner__item">
										<div class="banner__image">
											<picture>
												<source media="(min-width: 479.98px)" srcset="@img/main-page/03.jpg">
												<source media="(max-width: 479.98px)" srcset="@img/main-page/02.jpg">
												<img src="@img/main-page/03.jpg">
											</picture>
											<a href="#" class="banner__link">
												Скачать
											</a>
											<!-- <img data-src="@img/main-page/03.jpg" alt=""> -->
										</div>
									</div>
								</div>
								<div href="#" class="banner__slide swiper-slide">
									<div class="banner__item">
										<div class="banner__image">
											<picture>
												<source media="(min-width: 479.98px)" srcset="@img/main-page/03.jpg">
												<source media="(max-width: 479.98px)" srcset="@img/main-page/02.jpg">
												<img src="@img/main-page/03.jpg">
											</picture>
											<a href="#" class="banner__link">
												Скачать
											</a>
											<!-- <img data-src="@img/main-page/03.JPG" alt=""> -->
										</div>
									</div>
								</div>
							</div>
							<div class="banner__pagination">

							</div>
						</div>
						<div class="news__pagination pagination-control"></div>
					</div>
				</div>
			</section>
			<section class="page__quiz quiz">
				<div class="quiz__container">
					<div class="quiz__body">
						<div class="quiz__image-ibg"><picture><source data-srcset="img/areas/10.webp" srcset="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" type="image/webp"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII="  data-src="img/areas/10.png" alt=""></picture></div>
						<div class="quiz__content">
							<div class="quiz__icon-success">
								<picture><source srcset="img/success.webp" type="image/webp"><img src="img/success.png" alt="Success icon"></picture>
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
			<div class="page__social-links social-links">
				<a href="tel:+971588070001" class="social-links__link social-links__link_phone">
					<picture><source srcset="img/more/24.webp" type="image/webp"><img src="img/more/24.png" alt=""></picture>
					<span class="social-links__text">
						Call
					</span>
				</a>
				<a href="https://wa.me/971588070001" class="social-links__link social-links__link_whatsapp">
					<picture><source srcset="img/more/25.webp" type="image/webp"><img src="img/more/25.png" alt=""></picture>
					<span class="social-links__text">
						Whatsapp
					</span>
				</a>
			</div>
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
	</div>
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
	<script type='text/javascript'>

    function initMap() {

        var latlng = new google.maps.LatLng(25.119313, 55.2383399);
        var myOptions = {
            zoom: 12,
            center: latlng,
            mapTypeId: google.maps.MapTypeId.ROADMAP,
            mapTypeControl: false
        };

        var map = new google.maps.Map(document.getElementById("map"),myOptions);
        var infowindow = new google.maps.InfoWindow(), marker, lat, lng;
        

        <?php
		$query =  $conn->query('SELECT * FROM off_plan');
		if ($query->num_rows > 0) {
			   
		   while($row = $query->fetch_assoc()) {
			$lat = $row['longitude'];
			$lng = $row['latitude'];
      		echo "lat=$lat\n";

      		echo "lng=$lng\n";
				
				
	
	  echo "marker = new google.maps.Marker({
					position: new google.maps.LatLng(lat,lng),
					map: map
				}); 
				google.maps.event.addListener( marker, 'click', function(e){
					infowindow.setContent( this.name );
					infowindow.open( map, this );
				}.bind( marker ) );\n";
				
			}
			
			
		   } 
		   else{
		   }
		   ?>

            
        
    }
	initMap();
    </script>
	<script src="https://code.jquery.com/jquery-3.6.0.min.js?_v=20220803185036"></script>
	 
	<script src="js/app.min.js?_v=20220803185036"></script>
</body>

</html>