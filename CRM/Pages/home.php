<?php 
session_start();
if (!isset($_SESSION["id"])){
	header("Location: ../Auth/login.php");
  }

$servername = "localhost";
$username = "root";
$password = "";
$database = "propertyfinder";
$conn = new mysqli($servername, $username, $password, $database);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$ag_id = $_SESSION['agent_id'];
$sql = "SELECT * FROM add_listing WHERE agent_id='$ag_id'"; 
$rs_result = $conn->query($sql);
$draft = "SELECT * FROM add_listing WHERE listing_status='Draft' AND agent_id='$ag_id'";
$draft_result = $conn->query($draft);
$archive = "SELECT * FROM add_listing WHERE listing_status='Archive' AND agent_id='$ag_id'";
$archive_result = $conn->query($archive);
$pending = "SELECT * FROM add_listing WHERE listing_status='Pending' AND agent_id='$ag_id'";

$all = "SELECT * FROM add_listing";

$all_result = $conn->query($all);

$pending_result = $conn->query($pending);


if(isset($_GET['arc'])){
	$id = $_GET['arc'];
	$status = "Archive";
	$updates = "UPDATE add_listing SET listing_status = '$status' where id='$id'";
	if (mysqli_query($conn, $updates)) {
        echo "Archive";
      } else {
        echo "Error updating record: " . mysqli_error($conn);
      }
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
										<a href="dashboard.php" class="catalog-header__link">
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
										<a href="calender.php" class="catalog-header__link">
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
							
							<button data-popup="#form-agent" type="button" class="main-leads-tabs__title main-leads-tabs__title_green">Create Listing</button>
							<nav data-tabs-titles class="main-leads-tabs__navigation">
								<button type="button" class="main-leads-tabs__title _tab-active">My Listings</button>
								<button type="button" class="main-leads-tabs__title">Pending Listings</button>
								<button type="button" class="main-leads-tabs__title">Draft Listings</button>
								<button type="button" class="main-leads-tabs__title">Archive Listings</button>
								<button type="button" class="main-leads-tabs__title">My Availibilities</button>
								<button type="button" class="main-leads-tabs__title">Company Listings</button>
								<button type="button" class="main-leads-tabs__title">Company Availibilities</button>
								
								
							</nav>
						</div>
						<div data-tabs-body class="main-leads-tabs__content">

						<!-- my listing -->
							<div class="main-leads-tabs__body">
								<div class="main-leads-tabs__table main-leads-table">
									<table class="main-leads-table__table">
										<thead class="main-leads-table__head">
											<tr class="main-leads-table__tr">
											<th class="main-leads-table__th main-leads-table__th_60">
													
														<button type="button" class="main-leads-table__button _icon-filtered">ID</button>
														<div class="main-leads-table__input-wrapper">
															<input autocomplete="off" type="text" id="id_search_param" name="id_search_param"   placeholder="" class="main-leads-table__input input">
														</div>
													
												</th>
												<th class="main-leads-table__th main-leads-table__th_140">
													<form action="#" class="main-leads-table__form">
														<button type="button" class="main-leads-table__button _icon-filtered">Reference</button>
														<div class="main-leads-table__input-wrapper">
															<input autocomplete="off" type="text" id="ref" data-error="Ошибка" placeholder="" class="main-leads-table__input input">
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
															<input autocomplete="off" type="text" id="stat" data-error="Ошибка" placeholder="" class="main-leads-table__input input">
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
														<button type="button" class="main-leads-table__button _icon-filtered">Type</button>
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
										<tbody class="main-leads-table__body" id="tbl_body">
										<?php
                                    if ($rs_result->num_rows > 0) {
            
                                   while($row = $rs_result->fetch_assoc()) {

											echo '<tr class="main-leads-table__tr">
												<td class="main-leads-table__td main-leads-table__td_60">
													<p class="main-leads-table__reference main-leads-table-text ">
													'. $row['id'] .'
													</p>
												</td>
												<td class="main-leads-table__td main-leads-table__td_140">
													<p class="main-leads-table__reference main-leads-table-text ">
													'. $row['property_reference'] .'
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
													<p class="main-leads-table__type-status _icon-galochka">';
													if($row['listing_status'] == 'Approved'){
														echo ' <span class="main-leads-table-text main-leads-table-text__green"><b>'.$row['listing_status'].'</b></span> ';
													}elseif($row['listing_status'] == 'Draft'){
														echo ' <span class="main-leads-table-text main-leads-table-text__gray" style="color:gray"><b>'.$row['listing_status'].'</b></span> ';
													}elseif($row['listing_status'] == 'Pending'){
														echo ' <span class="main-leads-table-text main-leads-table-text__yellow" style="color:#ff6803"><b>'.$row['listing_status'].'</b></span> ';
													}elseif($row['listing_status'] == 'Rejected'){
														echo ' <span class="main-leads-table-text main-leads-table-text__red" style="color:red"><b>'.$row['listing_status'].'</b></span> ';
													}elseif($row['listing_status'] == 'Archive'){
														echo ' <span class="main-leads-table-text main-leads-table-text__red" style="color:blake"><b>'.$row['listing_status'].'</b></span> ';
													}
													echo '</p>
												</td>
												<td class="main-leads-table__td main-leads-table__td_80">
													<p class="main-leads-table__text main-leads-table-text main-leads-table-text__center">'.$row['offering_type'].'</p>
												</td>
												<td class="main-leads-table__td main-leads-table__td_80">
													<p class="main-leads-table__text main-leads-table-text main-leads-table-text__center">'.$row['category'].'</p>
												</td>
												<td class="main-leads-table__td main-leads-table__td_60">
													<p class="main-leads-table__text main-leads-table-text main-leads-table-text__center">'.$row['property_type'].'</p>
												</td>
												<td class="main-leads-table__td main-leads-table__td_190 ">
													<p class="main-leads-table__text main-leads-table-text">'.$row['location'].'</p>
												</td>
												<td class="main-leads-table__td main-leads-table__td_140 ">
													<p class="main-leads-table__text main-leads-table-text">'.$row['sub_location'].'</p>
												</td>
												<td class="main-leads-table__td main-leads-table__td_85 ">
													<p class="main-leads-table__text main-leads-table-text">'.number_format(floatval($row["price"])).'</p> <!-- /(\d)(?=(\d\d\d)+([^\d]|$))/g --- I hope this helps you -->
												</td>
												<td class="main-leads-table__td main-leads-table__td_85 ">
													<p class="main-leads-table__text main-leads-table__text">'.$row['beds'].'</p>
												</td>
												<td class="main-leads-table__td main-leads-table__td_85 ">
													<p class="main-leads-table__text main-leads-table-text">'.$row['baths'].'</p>
												</td>
												<td class="main-leads-table__td main-leads-table__td_175">
													<div class="main-leads-table__actions actions-main-leads-table">
													<form method="POST" action="#">
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
																<a type="submit"  href="../Query/Listing/update-listing.php?arc='.$row['id'].'" class="actions-main-leads-table__button actions-main-leads-table__button_archive _icon-archive"></a>
															</li>
															<li class="actions-main-leads-table__item">
																<a href="../Query/Listing/delete-listing.php?del='.$row['id'].'" class="actions-main-leads-table__button actions-main-leads-table__button_delete _icon-delete"></a>
															</li>
														</ul>
														</form>
													</div>
												</td>
											</tr>';
										}

                                    } else {
                              echo "0 results";
                            }
                            ?>
											
											
										</tbody>
									</table>
								</div>
							</div>

							<!-- pending -->
							<div class="main-leads-tabs__body">
							<div class="main-leads-tabs__table main-leads-table">
									<table class="main-leads-table__table">
										<thead class="main-leads-table__head">
											<tr class="main-leads-table__tr">
											<th class="main-leads-table__th main-leads-table__th_60">
													<form action="#" class="main-leads-table__form">
														<button type="button" class="main-leads-table__button _icon-filtered">ID</button>
														<div class="main-leads-table__input-wrapper">
															<input autocomplete="off" type="text" id="id_search_param"  data-error="Ошибка" placeholder="" class="main-leads-table__input input">
														</div>
													</form>
												</th>
												<th class="main-leads-table__th main-leads-table__th_140">
													<form action="#" class="main-leads-table__form">
														<button type="button" class="main-leads-table__button _icon-filtered">Reference</button>
														<div class="main-leads-table__input-wrapper">
															<input autocomplete="off" type="text" id="ref"  data-error="Ошибка" placeholder="" class="main-leads-table__input input">
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
															<input autocomplete="off" type="text" id="stat" data-error="Ошибка" placeholder="" class="main-leads-table__input input">
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
														<button type="button" class="main-leads-table__button _icon-filtered">Type</button>
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
										<tbody class="main-leads-table__body" id="tbl_body">
										<?php
                                    if ($pending_result->num_rows > 0) {
            
                                   while($row = $pending_result->fetch_assoc()) {

											echo '<tr class="main-leads-table__tr">
												<td class="main-leads-table__td main-leads-table__td_60">
													<p class="main-leads-table__reference main-leads-table-text ">
													'. $row['id'] .'
													</p>
												</td>
												<td class="main-leads-table__td main-leads-table__td_140">
													<p class="main-leads-table__reference main-leads-table-text ">
													'. $row['property_reference'] .'
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
													<p class="main-leads-table__type-status _icon-galochka">';
													if($row['listing_status'] == 'Approved'){
														echo ' <span class="main-leads-table-text main-leads-table-text__green"><b>'.$row['listing_status'].'</b></span> ';
													}elseif($row['listing_status'] == 'Draft'){
														echo ' <span class="main-leads-table-text main-leads-table-text__gray" style="color:gray"><b>'.$row['listing_status'].'</b></span> ';
													}elseif($row['listing_status'] == 'Pending'){
														echo ' <span class="main-leads-table-text main-leads-table-text__yellow" style="color:#ff6803"><b>'.$row['listing_status'].'</b></span> ';
													}elseif($row['listing_status'] == 'Rejected'){
														echo ' <span class="main-leads-table-text main-leads-table-text__red" style="color:red"><b>'.$row['listing_status'].'</b></span> ';
													}elseif($row['listing_status'] == 'Archive'){
														echo ' <span class="main-leads-table-text main-leads-table-text__red" style="color:blake"><b>'.$row['listing_status'].'</b></span> ';
													}
													echo '</p>
												</td>
												<td class="main-leads-table__td main-leads-table__td_80">
													<p class="main-leads-table__text main-leads-table-text main-leads-table-text__center">'.$row['offering_type'].'</p>
												</td>
												<td class="main-leads-table__td main-leads-table__td_80">
													<p class="main-leads-table__text main-leads-table-text main-leads-table-text__center">'.$row['category'].'</p>
												</td>
												<td class="main-leads-table__td main-leads-table__td_60">
													<p class="main-leads-table__text main-leads-table-text main-leads-table-text__center">'.$row['property_type'].'</p>
												</td>
												<td class="main-leads-table__td main-leads-table__td_190 ">
													<p class="main-leads-table__text main-leads-table-text">'.$row['location'].'</p>
												</td>
												<td class="main-leads-table__td main-leads-table__td_140 ">
													<p class="main-leads-table__text main-leads-table-text">'.$row['sub_location'].'</p>
												</td>
												<td class="main-leads-table__td main-leads-table__td_85 ">
													<p class="main-leads-table__text main-leads-table-text">'.number_format(floatval($row["price"])).'</p> <!-- /(\d)(?=(\d\d\d)+([^\d]|$))/g --- I hope this helps you -->
												</td>
												<td class="main-leads-table__td main-leads-table__td_85 ">
													<p class="main-leads-table__text main-leads-table__text">'.$row['beds'].'</p>
												</td>
												<td class="main-leads-table__td main-leads-table__td_85 ">
													<p class="main-leads-table__text main-leads-table-text">'.$row['baths'].'</p>
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
											</tr>';
										}

                                    } else {
                              echo "0 results";
                            }
                            ?>
											
											
										</tbody>
									</table>
								</div>
							</div>
							
							<!-- draft -->
							<div class="main-leads-tabs__body">
							<div class="main-leads-tabs__table main-leads-table">
									<table class="main-leads-table__table">
										<thead class="main-leads-table__head">
											<tr class="main-leads-table__tr">
											<th class="main-leads-table__th main-leads-table__th_60">
													<form action="#" class="main-leads-table__form">
														<button type="button" class="main-leads-table__button _icon-filtered">ID</button>
														<div class="main-leads-table__input-wrapper">
															<input autocomplete="off" type="text" id="id_search_param"  data-error="Ошибка" placeholder="" class="main-leads-table__input input">
														</div>
													</form>
												</th>
												<th class="main-leads-table__th main-leads-table__th_140">
													<form action="#" class="main-leads-table__form">
														<button type="button" class="main-leads-table__button _icon-filtered">Reference</button>
														<div class="main-leads-table__input-wrapper">
															<input autocomplete="off" type="text" id="ref"  data-error="Ошибка" placeholder="" class="main-leads-table__input input">
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
															<input autocomplete="off" type="text" id="stat" data-error="Ошибка" placeholder="" class="main-leads-table__input input">
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
														<button type="button" class="main-leads-table__button _icon-filtered">Type</button>
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
										<tbody class="main-leads-table__body" id="tbl_body">
										<?php
                                    if ($draft_result->num_rows > 0) {
            
                                   while($row = $draft_result->fetch_assoc()) {

											echo '<tr class="main-leads-table__tr">
												<td class="main-leads-table__td main-leads-table__td_60">
													<p class="main-leads-table__reference main-leads-table-text ">
													'. $row['id'] .'
													</p>
												</td>
												<td class="main-leads-table__td main-leads-table__td_140">
													<p class="main-leads-table__reference main-leads-table-text ">
													'. $row['property_reference'] .'
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
													<p class="main-leads-table__type-status _icon-galochka">';
													if($row['listing_status'] == 'Approved'){
														echo ' <span class="main-leads-table-text main-leads-table-text__green"><b>'.$row['listing_status'].'</b></span> ';
													}elseif($row['listing_status'] == 'Draft'){
														echo ' <span class="main-leads-table-text main-leads-table-text__gray" style="color:gray"><b>'.$row['listing_status'].'</b></span> ';
													}elseif($row['listing_status'] == 'Pending'){
														echo ' <span class="main-leads-table-text main-leads-table-text__yellow" style="color:#ff6803"><b>'.$row['listing_status'].'</b></span> ';
													}elseif($row['listing_status'] == 'Rejected'){
														echo ' <span class="main-leads-table-text main-leads-table-text__red" style="color:red"><b>'.$row['listing_status'].'</b></span> ';
													}elseif($row['listing_status'] == 'Archive'){
														echo ' <span class="main-leads-table-text main-leads-table-text__red" style="color:blake"><b>'.$row['listing_status'].'</b></span> ';
													}
													echo '</p>
												</td>
												<td class="main-leads-table__td main-leads-table__td_80">
													<p class="main-leads-table__text main-leads-table-text main-leads-table-text__center">'.$row['offering_type'].'</p>
												</td>
												<td class="main-leads-table__td main-leads-table__td_80">
													<p class="main-leads-table__text main-leads-table-text main-leads-table-text__center">'.$row['category'].'</p>
												</td>
												<td class="main-leads-table__td main-leads-table__td_60">
													<p class="main-leads-table__text main-leads-table-text main-leads-table-text__center">'.$row['property_type'].'</p>
												</td>
												<td class="main-leads-table__td main-leads-table__td_190 ">
													<p class="main-leads-table__text main-leads-table-text">'.$row['location'].'</p>
												</td>
												<td class="main-leads-table__td main-leads-table__td_140 ">
													<p class="main-leads-table__text main-leads-table-text">'.$row['sub_location'].'</p>
												</td>
												<td class="main-leads-table__td main-leads-table__td_85 ">
													<p class="main-leads-table__text main-leads-table-text">'.number_format(floatval($row["price"])).'</p> <!-- /(\d)(?=(\d\d\d)+([^\d]|$))/g --- I hope this helps you -->
												</td>
												<td class="main-leads-table__td main-leads-table__td_85 ">
													<p class="main-leads-table__text main-leads-table__text">'.$row['beds'].'</p>
												</td>
												<td class="main-leads-table__td main-leads-table__td_85 ">
													<p class="main-leads-table__text main-leads-table-text">'.$row['baths'].'</p>
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
											</tr>';
										}

                                    } else {
                              echo "0 results";
                            }
                            ?>
											
											
										</tbody>
									</table>
								</div>
							</div>

							<!-- archive -->
							<div class="main-leads-tabs__body">
							<div class="main-leads-tabs__table main-leads-table">
									<table class="main-leads-table__table">
										<thead class="main-leads-table__head">
											<tr class="main-leads-table__tr">
											<th class="main-leads-table__th main-leads-table__th_60">
													<form action="#" class="main-leads-table__form">
														<button type="button" class="main-leads-table__button _icon-filtered">ID</button>
														<div class="main-leads-table__input-wrapper">
															<input autocomplete="off" type="text" id="id_search_param"  data-error="Ошибка" placeholder="" class="main-leads-table__input input">
														</div>
													</form>
												</th>
												<th class="main-leads-table__th main-leads-table__th_140">
													<form action="#" class="main-leads-table__form">
														<button type="button" class="main-leads-table__button _icon-filtered">Reference</button>
														<div class="main-leads-table__input-wrapper">
															<input autocomplete="off" type="text" id="ref"  data-error="Ошибка" placeholder="" class="main-leads-table__input input">
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
															<input autocomplete="off" type="text" id="stat" data-error="Ошибка" placeholder="" class="main-leads-table__input input">
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
														<button type="button" class="main-leads-table__button _icon-filtered">Type</button>
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
										<tbody class="main-leads-table__body" id="tbl_body">
										<?php
                                    if ($archive_result->num_rows > 0) {
            
                                   while($row = $archive_result->fetch_assoc()) {

											echo '<tr class="main-leads-table__tr">
												<td class="main-leads-table__td main-leads-table__td_60">
													<p class="main-leads-table__reference main-leads-table-text ">
													'. $row['id'] .'
													</p>
												</td>
												<td class="main-leads-table__td main-leads-table__td_140">
													<p class="main-leads-table__reference main-leads-table-text ">
													'. $row['property_reference'] .'
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
													<p class="main-leads-table__type-status _icon-galochka">';
													if($row['listing_status'] == 'Approved'){
														echo ' <span class="main-leads-table-text main-leads-table-text__green"><b>'.$row['listing_status'].'</b></span> ';
													}elseif($row['listing_status'] == 'Draft'){
														echo ' <span class="main-leads-table-text main-leads-table-text__gray" style="color:gray"><b>'.$row['listing_status'].'</b></span> ';
													}elseif($row['listing_status'] == 'Pending'){
														echo ' <span class="main-leads-table-text main-leads-table-text__yellow" style="color:#ff6803"><b>'.$row['listing_status'].'</b></span> ';
													}elseif($row['listing_status'] == 'Rejected'){
														echo ' <span class="main-leads-table-text main-leads-table-text__red" style="color:red"><b>'.$row['listing_status'].'</b></span> ';
													}elseif($row['listing_status'] == 'Archive'){
														echo ' <span class="main-leads-table-text main-leads-table-text__red" style="color:blake"><b>'.$row['listing_status'].'</b></span> ';
													}
													echo '</p>
												</td>
												<td class="main-leads-table__td main-leads-table__td_80">
													<p class="main-leads-table__text main-leads-table-text main-leads-table-text__center">'.$row['offering_type'].'</p>
												</td>
												<td class="main-leads-table__td main-leads-table__td_80">
													<p class="main-leads-table__text main-leads-table-text main-leads-table-text__center">'.$row['category'].'</p>
												</td>
												<td class="main-leads-table__td main-leads-table__td_60">
													<p class="main-leads-table__text main-leads-table-text main-leads-table-text__center">'.$row['property_type'].'</p>
												</td>
												<td class="main-leads-table__td main-leads-table__td_190 ">
													<p class="main-leads-table__text main-leads-table-text">'.$row['location'].'</p>
												</td>
												<td class="main-leads-table__td main-leads-table__td_140 ">
													<p class="main-leads-table__text main-leads-table-text">'.$row['sub_location'].'</p>
												</td>
												<td class="main-leads-table__td main-leads-table__td_85 ">
													<p class="main-leads-table__text main-leads-table-text">'.number_format(floatval($row["price"])).'</p> <!-- /(\d)(?=(\d\d\d)+([^\d]|$))/g --- I hope this helps you -->
												</td>
												<td class="main-leads-table__td main-leads-table__td_85 ">
													<p class="main-leads-table__text main-leads-table__text">'.$row['beds'].'</p>
												</td>
												<td class="main-leads-table__td main-leads-table__td_85 ">
													<p class="main-leads-table__text main-leads-table-text">'.$row['baths'].'</p>
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
											</tr>';
										}

                                    } else {
                              echo "0 results";
                            }
                            ?>
											
											
										</tbody>
									</table>
								</div>
							</div>
							<!-- my availabilities -->
							<div class="main-leads-tabs__body">
								Содержимое второго таба
							</div>
							<!-- company listing -->
							<div class="main-leads-tabs__body">
							<div class="main-leads-tabs__table main-leads-table">
									<table class="main-leads-table__table">
										<thead class="main-leads-table__head">
											<tr class="main-leads-table__tr">
											<th class="main-leads-table__th main-leads-table__th_60">
													<form action="#" class="main-leads-table__form">
														<button type="button" class="main-leads-table__button _icon-filtered">ID</button>
														<div class="main-leads-table__input-wrapper">
															<input autocomplete="off" type="text" id="id_search_param"  data-error="Ошибка" placeholder="" class="main-leads-table__input input">
														</div>
													</form>
												</th>
												<th class="main-leads-table__th main-leads-table__th_140">
													<form action="#" class="main-leads-table__form">
														<button type="button" class="main-leads-table__button _icon-filtered">Reference</button>
														<div class="main-leads-table__input-wrapper">
															<input autocomplete="off" type="text" id="ref"  data-error="Ошибка" placeholder="" class="main-leads-table__input input">
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
															<input autocomplete="off" type="text" id="stat" data-error="Ошибка" placeholder="" class="main-leads-table__input input">
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
														<button type="button" class="main-leads-table__button _icon-filtered">Type</button>
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
										<tbody class="main-leads-table__body" id="tbl_body">
										<?php
                                    if ($all_result->num_rows > 0) {
            
                                   while($row = $all_result->fetch_assoc()) {

											echo '<tr class="main-leads-table__tr">
												<td class="main-leads-table__td main-leads-table__td_60">
													<p class="main-leads-table__reference main-leads-table-text ">
													'. $row['id'] .'
													</p>
												</td>
												<td class="main-leads-table__td main-leads-table__td_140">
													<p class="main-leads-table__reference main-leads-table-text ">
													'. $row['property_reference'] .'
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
													<p class="main-leads-table__type-status _icon-galochka">';
													if($row['listing_status'] == 'Approved'){
														echo ' <span class="main-leads-table-text main-leads-table-text__green"><b>'.$row['listing_status'].'</b></span> ';
													}elseif($row['listing_status'] == 'Draft'){
														echo ' <span class="main-leads-table-text main-leads-table-text__gray" style="color:gray"><b>'.$row['listing_status'].'</b></span> ';
													}elseif($row['listing_status'] == 'Pending'){
														echo ' <span class="main-leads-table-text main-leads-table-text__yellow" style="color:#ff6803"><b>'.$row['listing_status'].'</b></span> ';
													}elseif($row['listing_status'] == 'Rejected'){
														echo ' <span class="main-leads-table-text main-leads-table-text__red" style="color:red"><b>'.$row['listing_status'].'</b></span> ';
													}elseif($row['listing_status'] == 'Archive'){
														echo ' <span class="main-leads-table-text main-leads-table-text__red" style="color:blake"><b>'.$row['listing_status'].'</b></span> ';
													}
													echo '</p>
												</td>
												<td class="main-leads-table__td main-leads-table__td_80">
													<p class="main-leads-table__text main-leads-table-text main-leads-table-text__center">'.$row['offering_type'].'</p>
												</td>
												<td class="main-leads-table__td main-leads-table__td_80">
													<p class="main-leads-table__text main-leads-table-text main-leads-table-text__center">'.$row['category'].'</p>
												</td>
												<td class="main-leads-table__td main-leads-table__td_60">
													<p class="main-leads-table__text main-leads-table-text main-leads-table-text__center">'.$row['property_type'].'</p>
												</td>
												<td class="main-leads-table__td main-leads-table__td_190 ">
													<p class="main-leads-table__text main-leads-table-text">'.$row['location'].'</p>
												</td>
												<td class="main-leads-table__td main-leads-table__td_140 ">
													<p class="main-leads-table__text main-leads-table-text">'.$row['sub_location'].'</p>
												</td>
												<td class="main-leads-table__td main-leads-table__td_85 ">
													<p class="main-leads-table__text main-leads-table-text">'.number_format(floatval($row["price"])).'</p> <!-- /(\d)(?=(\d\d\d)+([^\d]|$))/g --- I hope this helps you -->
												</td>
												<td class="main-leads-table__td main-leads-table__td_85 ">
													<p class="main-leads-table__text main-leads-table__text">'.$row['beds'].'</p>
												</td>
												<td class="main-leads-table__td main-leads-table__td_85 ">
													<p class="main-leads-table__text main-leads-table-text">'.$row['baths'].'</p>
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
											</tr>';
										}

                                    } else {
                              echo "0 results";
                            }
                            ?>
											
											
										</tbody>
									</table>
								</div>
							</div>
							<!-- company availabilities -->
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
	

	<div id="form-agent" aria-hidden="true" class="popup">
		<div class="popup__content form-agent-popup__content">
			<div class="form-agent-popup__body">
				<div class="form-agent-popup__header">
					<h2 class="form-agent-popup__header-title">Agent</h2>
					<div class="form-agent-popup__logo">
						<picture><source srcset="img/logo.webp" type="image/webp"><img src="img/logo.png" class="form-agent-popup__logo-image" alt=""></picture>
						<button data-close type="button" class="form-agent-popup__close"></button>
					</div>
				</div>
				<div class="form-agent-popup__content form-agent-popup-content">
					<form action="../Query/Listing/add-listing.php" enctype="multipart/form-data" method="POST" class="form-agent-popup-content__spollers" data-spollers="1200,max">
						<div data-da=".form-agent-popup-content__inner-spollers,1500,first" class="form-agent-popup-content__item form-agent-popup-content-item">
							<div class="form-agent-popup-content-item__body">
								<button type="button" data-spoller class="form-agent-popup-content-item__title">Property Address & Details</button>
								<div class="form-agent-popup-content-item__content">
									<div class="form-agent-popup-content-item__row">
										<div class="form-agent-popup-content-item__column ">
											<label for="property-for" class="form-agent-popup-content-item__label">Property For *</label>
											<select name="offering_type" id="offering_type" class="form-agent-popup-content-item__select">
												<option value="Rental" selected>Rental</option>
												<option value="Sale">Sale</option>
												
											</select>
										</div>
										<div class="form-agent-popup-content-item__column ">
											<label for="property-type" class="form-agent-popup-content-item__label">Property Type *</label>
											<select required name="property_type" id="property-type" class="form-agent-popup-content-item__select">
												<option value="Residential" selected>Residential</option>
												<option value="Commercial">Commercial</option>
												
											</select>
										</div>
									</div>
									<div class="form-agent-popup-content-item__row">
										<div class="form-agent-popup-content-item__column ">
											<label for="category" class="form-agent-popup-content-item__label">Category *</label>
											<select required name="category" id="category" class="form-agent-popup-content-item__select">
												<option value="Apartment" selected>Apartment</option>
												<option value="Villa">Villa</option>
												<option value="Townhouse">Townhouse</option>
												<option value="Penthouse">Penthouse</option>
												<option value="Office">Office</option>
												<option value="Full Floor">Full Floor</option>
												<option value="Full Building">Full Building</option>
											</select>
										</div>
									</div>
									<div class="form-agent-popup-content-item__row">
										<div class="form-agent-popup-content-item__column ">
											<label for="beds" class="form-agent-popup-content-item__label">Beds *</label>
											<select required name="beds" id="beds" class="form-agent-popup-content-item__select">
												<option value="0" selected>Studio</option>
												<option value="1" >1 bed</option>
												<option value="2">2 bed</option>
												<option value="3">3 bed</option>
												<option value="4">4 bed</option>
												<option value="5">5 bed</option>
												<option value="6">6 bed</option>
												<option value="7">7 bed</option>
												<option value="8">+7 bed</option>
											</select>
										</div>
										<div class="form-agent-popup-content-item__column ">
											<label for="baths" class="form-agent-popup-content-item__label">Baths *</label>
											<select required name="baths" id="baths" class="form-agent-popup-content-item__select">
												<option value="1" selected>1 bath</option>
												<option value="2">2 bath</option>
												<option value="3">3 bath</option>
												<option value="4">4 bath</option>
												<option value="5">5 bath</option>
												<option value="5">5 bath</option>
												<option value="6">6 bath</option>
												<option value="7">7 bath</option>
												<option value="8">7+ bath</option>
											</select>
										</div>
									</div>
									<div class="form-agent-popup-content-item__row">
										<div class="form-agent-popup-content-item__column ">
											<label for="city" class="form-agent-popup-content-item__label">City *</label>
											<select required name="city" id="city" class="form-agent-popup-content-item__select">
												<option value="Dubai" selected>Dubai</option>
												<option value="Sharjah">Sharjah</option>
												
											</select>
										</div>
									</div>
									<div class="form-agent-popup-content-item__row">
										<div class="form-agent-popup-content-item__column ">
											<label for="location" class="form-agent-popup-content-item__label">Location *</label>
											<select required name="location" id="location" class="form-agent-popup-content-item__select">
												<option value="International City" selected>International City</option>
												<option value="Downtown">Downtown</option>
												
											</select>
										</div>
									</div>
									<div class="form-agent-popup-content-item__row">
										<div class="form-agent-popup-content-item__column ">
											<label for="sub-location" class="form-agent-popup-content-item__label">Sub location *</label>
											<select required name="sub_location" id="sub-location" class="form-agent-popup-content-item__select">
												<option value="International City" selected>International City</option>
												<option value="Rigga" >Rigga</option>
												
											</select>
										</div>
									</div>
									<div class="form-agent-popup-content-item__row">
										<div class="form-agent-popup-content-item__column ">
											<label for="tower" class="form-agent-popup-content-item__label">Tower *</label>
											<select required name="tower" id="tower" class="form-agent-popup-content-item__select">
												<option value="Clover Bay" selected>Clover Bay</option>
												
											</select>
										</div>
									</div>
									<div class="form-agent-popup-content-item__row">
										<div class="form-agent-popup-content-item__column">
											<div class="form-agent-popup-content-item__icon-column">
												<input id="permition" autocomplete="off" data-type="text" type="text" name="permit_no" data-error="Ошибка" required="" placeholder="Permit No." class="form-agent-popup-content-item__input form-agent-popup-content-item__input_file">
												<label for="permition" required class="form-agent-popup-content-item__label form-agent-popup-content-item__label_file"></label>
											</div>
										</div>
									</div>
									<div class="form-agent-popup-content-item__row">
										<div class="form-agent-popup-content-item__column form-agent-popup-content-item__column_margin">
											<!-- <label for="beds" class="form-agent-popup-content-item__label">Transaction No. *</label> -->
											<input type="text" required name="transaction_no" id="transaction" placeholder="Transaction Number" class="form-agent-popup-content-item__input">
												
												
											
										</div>
										<div class="form-agent-popup-content-item__column form-agent-popup-content-item__column_margin">
											<label for="permition-expiry" class="form-agent-popup-content-item__label">Permit Expiry Date *</label>
											<input type="text" required name="permit_expire" id="permition-expiry" placeholder="Expiry Date" class="form-agent-popup-content-item__input">
												
											
										</div>
									</div>
									<div class="form-agent-popup-content-item__row">
										<div class="form-agent-popup-content-item__column form-agent-popup-content-item__column_margin">
											<input autocomplete="off" data-type="text" type="text" name="area_sqft" data-error="Ошибка" required placeholder="Built-up Area(sq.ft) *" class="form-agent-popup-content-item__input">
											<!-- <label for="beds" class="form-agent-popup-content-item__label">Transaction No. *</label> -->
										</div>
									</div>
									<div class="form-agent-popup-content-item__row">
										<div class="form-agent-popup-content-item__column">
											<input autocomplete="off" data-type="text" type="text" name="plot_area" data-error="Ошибка" placeholder="Plot Area" class="form-agent-popup-content-item__input">
										</div>
										<div class="form-agent-popup-content-item__column">
											<input autocomplete="off" data-type="text" type="text" name="buildup_area" data-error="Ошибка" placeholder="Built-up Area(sq.ft) *" class="form-agent-popup-content-item__input">
										</div>
									</div>
									<div class="form-agent-popup-content-item__row">
										<div class="form-agent-popup-content-item__column form-agent-popup-content-item__column_margin">
											<label for="furnished" class="form-agent-popup-content-item__label">Furnished</label>
											<select required name="furnished" id="furnished" class="form-agent-popup-content-item__select">
												<option value="Unfurnished" selected>Unfurnished</option>
												<option value="Furnished">Furnished</option>
												
											</select>
										</div>
										<div class="form-agent-popup-content-item__column form-agent-popup-content-item__column_margin">
											<input autocomplete="off" type="number" name="parking" data-error="Ошибка" placeholder="parking" class="form-agent-popup-content-item__input">
										</div>
									</div>
									<div class="form-agent-popup-content-item__row">
										<div class="form-agent-popup-content-item__column form-agent-popup-content-item__column_margin">
											<input autocomplete="off" data-type="text" type="text" name="developer" data-error="Ошибка" placeholder="Property Developer" class="form-agent-popup-content-item__input">
										</div>
										<div class="form-agent-popup-content-item__column form-agent-popup-content-item__column_margin">
											<label for="freehold" class="form-agent-popup-content-item__label">Property Ownership</label>
											<select required name="property_ownership" id="freehold" class="form-agent-popup-content-item__select">
												<option value="Freehold" selected>Freehold</option>
												<option value="Non Freehold">Non Freehold</option>
												<option value="Leasehold">Leasehold</option>
												
											</select>
										</div>
									</div>
									<div class="form-agent-popup-content-item__row">
										<div class="form-agent-popup-content-item__column form-agent-popup-content-item__column_margin">
											<label for="occupancy" class="form-agent-popup-content-item__label">Occupancy</label>
											<select required name="occupancy" id="occupancy" class="form-agent-popup-content-item__select">
												<option value="Owner Occupied" selected>Owner Occupied</option>
												<option value="Investment">Investment</option>
												<option value="Vacant">Vacant</option>
												<option value="Tenanted">Tenanted</option>
											</select>
										</div>
										<div class="form-agent-popup-content-item__column form-agent-popup-content-item__column_margin">
											<label for="property-ownership" class="form-agent-popup-content-item__label">Project Status</label>
											<select required name="property_status" id="property-ownership" class="form-agent-popup-content-item__select">
												<option value="Complated" selected>Complated</option>
												<option value="off plan">Off Plan</option>
											</select>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="form-agent-popup-content__inner-wrapper">
							<div class="form-agent-popup-content__inner-spollers">
								<div class="form-agent-popup-content__item form-agent-popup-content-item">
									<div class="form-agent-popup-content-item__wrapper">
										<div class="form-agent-popup-content-item__body">
											<button type="button" data-spoller class="form-agent-popup-content-item__title">Property Pricing</button>
											<div class="form-agent-popup-content-item__content">
												<div class="form-agent-popup-content-item__row">
													<div class="form-agent-popup-content-item__column form-agent-popup-content-item__column_margin">
														<label for="rental-price" class="form-agent-popup-content-item__label">Rental Price *</label>
														<div class="form-agent-popup-content-item__with-text">
															<input required autocomplete="off" data-type="text" type="text" id="rental-price" name="price" data-error="Ошибка" required placeholder="Price" class="form-agent-popup-content-item__input">
															<span class="form-agent-popup-content-item__currency">AED</span>
														</div>
													</div>
													<div class="form-agent-popup-content-item__column form-agent-popup-content-item__column_margin">
														<label for="price-sq-ft" class="form-agent-popup-content-item__label">Price / Sq Ft</label>
														<div class="form-agent-popup-content-item__with-text">
															<input autocomplete="off" data-type="text" type="text" name="price_sqft" id="price-sq-ft" data-error="Ошибка" required placeholder="Price / Sq Ft" class="form-agent-popup-content-item__input">
															<span>AED</span>
														</div>
													</div>
												</div>
												<div class="form-agent-popup-content-item__row">
													<div class="form-agent-popup-content-item__column form-agent-popup-content-item__column_margin">
														<label for="occupancy" class="form-agent-popup-content-item__label">Frequecy</label>
														<select required name="frequecy" id="frequecy" class="form-agent-popup-content-item__select">
															<option value="Yearly" selected>Yearly</option>
															<option value="Monthly">Monthly</option>
															<option value="Weekly">Weekly</option>
															<option value="Daily">Daily</option>
														</select>
													</div>
													<div class="form-agent-popup-content-item__column form-agent-popup-content-item__column_margin">
														<label for="property-ownership" class="form-agent-popup-content-item__label">Cheques</label>
														<select required name="cheques" id="cheques" class="form-agent-popup-content-item__select">
															<option value="1" selected>1 Cheques</option>
															<option value="2">2 Cheques</option>
															<option value="3">3 Cheques</option>
															<option value="4">4 Cheques</option>
															<option value="5">5 Cheques</option>
															<option value="6">6 Cheques</option>
															<option value="7">7 Cheques</option>
															<option value="8">8 Cheques</option>
															<option value="9">9 Cheques</option>
															<option value="10">10 Cheques</option>
															<option value="11">11 Cheques</option>
															<option value="12">12 Cheques</option>
														</select>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="form-agent-popup-content-item__wrapper">
										<div class="form-agent-popup-content-item__body">
											<button type="button" data-spoller class="form-agent-popup-content-item__title">Links</button>
											<div class="form-agent-popup-content-item__content">
												<div class="form-agent-popup-content-item__row">
													<div class="form-agent-popup-content-item__column">
														<label for="link" class="form-agent-popup-content-item__label">Youtube Link</label>
														<input required autocomplete="off" data-type="text" type="text" id="link" name="youtube_link" data-error="Ошибка" required placeholder="Youtube Link" class="form-agent-popup-content-item__input">
													</div>
													<div class="form-agent-popup-content-item__column">
														<label for="tour-link" class="form-agent-popup-content-item__label">360 virtual Tour Link</label>
														<input autocomplete="off" data-type="text" type="text" name="tour_link" id="tour-link" data-error="Ошибка" required placeholder="360 virtual Tour Link" class="form-agent-popup-content-item__input">
													</div>
												</div>
												<div class="form-agent-popup-content-item__row">
													<div class="form-agent-popup-content-item__column">
														<label for="audio-tour" class="form-agent-popup-content-item__label">Audio Tour Link</label>
														<input required autocomplete="off" data-type="text" type="text" id="audio_tour" name="audio_tour" data-error="Ошибка" required placeholder="Audio Tour Link" class="form-agent-popup-content-item__input">
													</div>
													<div class="form-agent-popup-content-item__column">
														<label for="qr-code" class="form-agent-popup-content-item__label">QR Code Link</label>
														<input autocomplete="off" data-type="text" type="text" name="qr_code" id="qr-code" data-error="Ошибка" required placeholder="QR Code Link" class="form-agent-popup-content-item__input">
													</div>
												</div>
												<div class="form-agent-popup-content-item__row">
													<div class="form-agent-popup-content-item__column">
														<label for="title" class="form-agent-popup-content-item__label">Title *</label>
														<input required data-type="text" autocomplete="off" type="text" id="property_title" name="property_title" data-error="Ошибка" required placeholder="Title" class="form-agent-popup-content-item__input">
													</div>
												</div>
												<div class="form-agent-popup-content-item__row">
													<div class="form-agent-popup-content-item__column">
														<label for="description" class="form-agent-popup-content-item__label">Description *</label>
														<!-- <input required autocomplete="off" type="text" id="description" name="form[description]" data-error="Ошибка" required placeholder="Description" class="form-agent-popup-content-item__input"> -->
														<textarea data-type="text" autocomplete="off" name="property_description" id="property_description" placeholder="Description *" data-error="Ошибка" class="form-agent-popup-content-item__textarea"></textarea>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="form-agent-popup-content__item form-agent-popup-content-item">
									<div class="form-agent-popup-content-item__wrapper">
										<div class="form-agent-popup-content-item__body">
											<div class="form-agent-popup-content-item__content">
												<div class="form-agent-popup-content-item__row">
													<div class="form-agent-popup-content-item__column">
														<label for="features" class="form-agent-popup-content-item__label form-agent-popup-content-item__text">Property features</label>
														<select required name="features" id="features" class="form-agent-popup-content-item__select">
															<option value="1" selected>Property Features</option>
															
														</select>
													</div>
												</div>
												<div class="form-agent-popup-content-item__row">
													<div class="form-agent-popup-content-item__column">
														<label for="amenities" class="form-agent-popup-content-item__label form-agent-popup-content-item__text">Facilities & amenities</label>
														<select required name="amenities" id="amenities" class="form-agent-popup-content-item__select">
															<option value="1" selected>Facilities & amenities</option>
															
														</select>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="form-agent-popup-content-item__wrapper">
										<div class="form-agent-popup-content-item__body">
											<p class="form-agent-popup-content-item__text">Neighbourhoods</p>
											<div class="form-agent-popup-content-item__content">
												<div class="form-agent-popup-content-item__row">
													<div class="form-agent-popup-content-item__input-wrapper form-agent-popup-content-item__column">
														<div class="form-agent-popup-content-item__form-actions form-actions">
															<div class="form-actions__actions-title">
																<p class="form-actions__title">Bus Station</p>
																<input autocomplete="off" type="text" name="bus-station" data-error="Ошибка" placeholder="" class="form-actions__input">
															</div>
															<button type="button" class="form-actions__button">
																<span class="form-actions__plus">+</span>
																<span class="form-actions__minus">-</span>
															</button>
														</div>
														<div class="form-agent-popup-content-item__form-actions form-actions">
															<div class="form-actions__actions-title">
																<p class="form-actions__title">Fitness Club</p>
																<input autocomplete="off" type="text" name="fitness-club" data-error="Ошибка" placeholder="" class="form-actions__input">
															</div>
															<button type="button" class="form-actions__button">
																<span class="form-actions__plus">+</span>
																<span class="form-actions__minus">-</span>
															</button>
														</div>
														<div class="form-agent-popup-content-item__form-actions form-actions">
															<div class="form-actions__actions-title">
																<p class="form-actions__title">GYM</p>
																<input autocomplete="off" type="text" name="gym" data-error="Ошибка" placeholder="" class="form-actions__input">
															</div>
															<button type="button" class="form-actions__button">
																<span class="form-actions__plus">+</span>
																<span class="form-actions__minus">-</span>
															</button>
														</div>
														<div class="form-agent-popup-content-item__form-actions form-actions">
															<div class="form-actions__actions-title">
																<p class="form-actions__title">Hospital</p>
																<input autocomplete="off" type="text" name="hospital" data-error="Ошибка" placeholder="" class="form-actions__input">
															</div>
															<button type="button" class="form-actions__button">
																<span class="form-actions__plus">+</span>
																<span class="form-actions__minus">-</span>
															</button>
														</div>
														<div class="form-agent-popup-content-item__form-actions form-actions">
															<div class="form-actions__actions-title">
																<p class="form-actions__title">Bus Station</p>
																<input autocomplete="off" type="text" name="metro-station" data-error="Ошибка" placeholder="" class="form-actions__input">
															</div>
															<button type="button" class="form-actions__button">
																<span class="form-actions__plus">+</span>
																<span class="form-actions__minus">-</span>
															</button>
														</div>
														<div class="form-agent-popup-content-item__form-actions form-actions">
															<div class="form-actions__actions-title">
																<p class="form-actions__title">School</p>
																<input autocomplete="off" type="text" name="school" data-error="Ошибка" placeholder="" class="form-actions__input">
															</div>
															<button type="button" class="form-actions__button">
																<span class="form-actions__plus">+</span>
																<span class="form-actions__minus">-</span>
															</button>
														</div>
														<div class="form-agent-popup-content-item__form-actions form-actions">
															<div class="form-actions__actions-title">
																<p class="form-actions__title">Test Neighbourhoods</p>
																<input autocomplete="off" type="text" name="test" data-error="Ошибка" placeholder="" class="form-actions__input">
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
									<div class="form-agent-popup-content-item__wrapper">
										<div class="form-agent-popup-content-item__body">
											<div class="form-agent-popup-content-item__content">
												<div class="form-agent-popup-content-item__row">
													<div class="form-agent-popup-content-item__column">
														<label for="day" class="form-agent-popup-content-item__label">Remind</label>
														<input required="" autocomplete="off" data-type="text" type="text" id="day" name="day" data-error="Ошибка" placeholder="1 Day" class="form-agent-popup-content-item__input" data-placeholder="Audio Tour Link">
													</div>
													<div class="form-agent-popup-content-item__column">
														<label for="available" class="form-agent-popup-content-item__label">Next available</label>
														<input autocomplete="off" data-type="text" type="text" name="date" id="available" data-error="Ошибка" required="" placeholder="13-05-2020" class="form-agent-popup-content-item__input" data-placeholder="QR Code Link">
													</div>
												</div>
												<div class="form-agent-popup-content-item__row">
													<div class="form-agent-popup-content-item__column">
														<input required="" autocomplete="off" data-type="text" type="text" name="dewa_number" data-error="Ошибка" placeholder="DEWA Number" class="form-agent-popup-content-item__input" data-placeholder="Audio Tour Link">
													</div>
													<div class="form-agent-popup-content-item__column">
														<input autocomplete="off" data-type="text" type="text" name="maintenance" data-error="Ошибка" required="" placeholder="Maintenance Fee" class="form-agent-popup-content-item__input" data-placeholder="QR Code Link">
													</div>
												</div>
												<div class="form-agent-popup-content-item__row">
													<div class="form-agent-popup-content-item__column">
														<p class="form-agent-popup-content-item__text form-agent-popup-content-item__text_black">Featured?</p>
														<div class="form-agent-popup-content-item__checkbox-wrapper">
															<label for="c_5" class="form-agent-popup-content-item-checkbox__variant">No</label>
															<div for="c_5" class="form-agent-popup-content-item-checkbox__checkbox form-agent-popup-content-item-checkbox__checkbox_min">
																<input id="c_5" data-error="Ошибка" class="form-agent-popup-content-item-checkbox__input" type="checkbox" value="1" name="yes-no">
																<label for="c_5" class="form-agent-popup-content-item-checkbox__switch-button"></label>
															</div>
															<label for="c_5" class="form-agent-popup-content-item-checkbox__variant">Yes</label>
														</div>
													</div>
													<div class="form-agent-popup-content-item__column">
														<p class="form-agent-popup-content-item__text form-agent-popup-content-item__text_black">Premium?</p>
														<div class="form-agent-popup-content-item__checkbox-wrapper">
															<label for="c_6" class="form-agent-popup-content-item-checkbox__variant">No</label>
															<div for="c_6" class="form-agent-popup-content-item-checkbox__checkbox form-agent-popup-content-item-checkbox__checkbox_min">
																<input id="c_6" data-error="Ошибка" class="form-agent-popup-content-item-checkbox__input" type="checkbox" value="1" name="form[yes-no]">
																<label for="c_6" class="form-agent-popup-content-item-checkbox__switch-button"></label>
															</div>
															<label for="c_6" class="form-agent-popup-content-item-checkbox__variant">Yes</label>
														</div>
													</div>
													<div class="form-agent-popup-content-item__column">
														<p class="form-agent-popup-content-item__text form-agent-popup-content-item__text_black">Exclusive?</p>
														<div class="form-agent-popup-content-item__checkbox-wrapper">
															<label for="c_7" class="form-agent-popup-content-item-checkbox__variant">No</label>
															<div for="c_7" class="form-agent-popup-content-item-checkbox__checkbox form-agent-popup-content-item-checkbox__checkbox_min">
																<input id="c_7" data-error="Ошибка" class="form-agent-popup-content-item-checkbox__input" type="checkbox" value="1" name="form[yes-no]">
																<label for="c_7" class="form-agent-popup-content-item-checkbox__switch-button"></label>
															</div>
															<label for="c_7" class="form-agent-popup-content-item-checkbox__variant">Yes</label>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="form-agent-popup-content__item form-agent-popup-content-item">
									<div class="form-agent-popup-content-item__wrapper">
										<div class="form-agent-popup-content-item__body">
											<button type="button" data-spoller class="form-agent-popup-content-item__title form-agent-popup-content-item__title_margin">Listing Details</button>
											<div class="form-agent-popup-content-item__content">
												<div class="form-agent-popup-content-item__row">
													<div class="form-agent-popup-content-item__column form-agent-popup-content-item-question">
														<div class="form-agent-popup-content-item-question__wrapper">
															<button type="button" class="form-agent-popup-content-item-question__button form-agent-popup-content-item-question__button_fw">
																<span>Assign to *</span>
																<div class="form-agent-popup-content-item-question__symbol">?</div>
															</button>
															<div class="form-agent-popup-content-item-question__body form-agent-popup-content-item-question__body_bottom">
																<div class="form-agent-popup-content-item-question__content">
																	<p class="form-agent-popup-content-item-question__text">Some question from some info. Some info about block</p>
																	<div class="form-agent-popup-content-item-question__footer">
																		<p class="form-agent-popup-content-item-question__text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, consequatur.</p>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
												<div class="form-agent-popup-content-item__row">
													<div class="form-agent-popup-content-item__column form-agent-popup-content-item-profile">
														<div class="form-agent-popup-content-item-profile__body">
															<picture><source srcset="img/agents/<?php echo $_SESSION['pic']; ?>" type="image/webp"><img src="img/agents/<?php echo $_SESSION['pic']; ?>" alt="" class="form-agent-popup-content-item-profile__image"></picture>
															<div class="form-agent-popup-content-item-profile__content">
																<p class="form-agent-popup-content-item-profile__name"><?php echo $_SESSION['full_name']; ?></p>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="form-agent-popup-content-item__wrapper">
										<div class="form-agent-popup-content-item__body">
											<button type="button" data-spoller class="form-agent-popup-content-item__title form-agent-popup-content-item__title_margin">Owner/landlord Details</button>
											<div class="form-agent-popup-content-item__content">
												<div class="form-agent-popup-content-item__row">
													<div class="form-agent-popup-content-item__column">
														<label for="name-own" class="form-agent-popup-content-item__label">Name *</label>
														<input required autocomplete="off" data-type="text" type="text" id="name-own" name="name_own" data-error="Ошибка" placeholder="Name" class="form-agent-popup-content-item__input" data-placeholder="Audio Tour Link">
													</div>
												</div>
												<div class="form-agent-popup-content-item__row">
													<div class="form-agent-popup-content-item__column">
														<label for="last-name-own" class="form-agent-popup-content-item__label">Last Name *</label>
														<input required autocomplete="off" data-type="text" type="text" id="last-name-own" name="last_name_own" data-error="Ошибка" placeholder="Last Name" class="form-agent-popup-content-item__input" data-placeholder="Audio Tour Link">
													</div>
												</div>
												<div class="form-agent-popup-content-item__row">
													<div data-input="phone" class="form-agent-popup-content-item__column form-agent-popup-add-inputs">
														<div class="form-agent-popup-add-inputs__wrapper">
															<div class="form-agent-popup-add-inputs__item">
																<span class="form-agent-popup-add-inputs__label">Phone * </span>
																<p class="form-agent-popup-add-inputs__text">+971 54 411 2658</p>
																<input type="text" name="phone1_own" value="" class="form-agent-popup-add-inputs__info">
															</div>
														</div>
														<div class="form-agent-popup-add-inputs__action">
															<button data-input-action="phone" type="button" class="form-agent-popup-add-inputs__action-button">
																<span class="form-agent-popup-add-inputs__plus">+</span>
																<span class="form-agent-popup-add-inputs__minus">-</span>
																<div class="form-agent-popup-add-inputs__body-action">
																	<p class="form-agent-popup-add-inputs__info-text">Add Phone</p>
																	<input autocomplete="off" type="tel" name="phone2_own" data-error="Ошибка" placeholder="" class="form-agent-popup-add-inputs__input-action">
																</div>
															</button>
														</div>
													</div>
												</div>
												<div class="form-agent-popup-content-item__row">
													<div data-input="phone" class="form-agent-popup-content-item__column form-agent-popup-add-inputs">
														<div class="form-agent-popup-add-inputs__wrapper">
															<div class="form-agent-popup-add-inputs__item">
																<span class="form-agent-popup-add-inputs__label">Email * </span>
																<p class="form-agent-popup-add-inputs__text">negmatullaevamir1@gmail.com</p>
																<input type="text" name="email1_own" value="" class="form-agent-popup-add-inputs__info">
															</div>
														</div>
														<div class="form-agent-popup-add-inputs__action">
															<button data-input-action="phone" type="button" class="form-agent-popup-add-inputs__action-button">
																<span class="form-agent-popup-add-inputs__plus">+</span>
																<span class="form-agent-popup-add-inputs__minus">-</span>
																<div class="form-agent-popup-add-inputs__body-action">
																	<p class="form-agent-popup-add-inputs__info-text">Add Email</p>
																	<input autocomplete="off" type="tel" name="email2_own" data-error="Ошибка" placeholder="" class="form-agent-popup-add-inputs__input-action">
																</div>
															</button>
														</div>
													</div>
												</div>
												<div class="form-agent-popup-content-item__row">
													<div class="form-agent-popup-content-item__column">
														<label for="type" class="form-agent-popup-content-item__label">Address</label>
														<input required="" autocomplete="off" data-type="text" type="text" id="type" name="address" data-error="Ошибка" placeholder="Last Name" class="form-agent-popup-content-item__input">
													</div>
												</div>
												<div class="form-agent-popup-content-item__row">
													<div class="form-agent-popup-content-item__column form-agent-popup-content-item-actions">
														<div class="form-agent-popup-content-item-actions__text">
															<span class="form-agent-popup-content-item-actions__light">Property documents</span>
															<!-- <span class="form-agent-popup-content-item-actions__bold">Add From Gallery</span> -->
														</div>
														<input type="file" name="documents" id="prop-documents" class="form-agent-popup-content-item-actions__link_file">
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="form-agent-popup-content-item__actions">
										<div class="form-agent-popup-content-item__actions-wrapper">
											<div class="calendar">
												<input class="calendar__input" type="button" value="calendar" id="calendar" />
												<label for="calendar" class="calendar__label">
													<div class="calendar__text">

													</div>
													<div class="calendar__img">
														<img src="img/icons/calendar.svg" alt="">
													</div>
												</label>
											</div>
											<button type="submit" name="draft" class="form-agent-popup-content-item__actions-button">
												Draft
											</button>
											<button type="submit" name="submit" class="form-agent-popup-content-item__actions-button _icon-galochka form-agent-popup-content-item__actions-button_save">
												Save
											</button>
										</div>
									</div>
								</div>
							</div>
							<div class="form-agent-popup-content__list form-agent-popup-content-list">
								<div class="form-agent-popup-content-list__body">
									<div class="form-agent-popup-content-list__item">
										<div class="form-agent-popup-content-list__content">
											<button type="button" class="form-agent-popup-content-list__title-button">Listings</button>
											<?php
											$sql = "SELECT * FROM add_listing WHERE agent_id='$ag_id'"; 
											$rs_result = $conn->query($sql);
											if ($rs_result->num_rows > 0) {
            
		
												while($row = $rs_result->fetch_assoc()) {
											
											echo '<div class="form-agent-popup-content-list__cards">
												<div class="form-agent-popup-content-list__card">
													<div class="form-agent-popup-content-list__image">
														<picture><source srcset="img/lists/01.webp" type="image/webp"><img src="img/lists/01.png" alt=""></picture>
													</div>
													<div class="form-agent-popup-content-list__info-content">
														<h4 class="form-agent-popup-content-list__subtitle">'. number_format(floatval($row['price'])).' AED</h4>
														<p class="form-agent-popup-content-list__text">'. $row['sub_location'].'</p>
														<div class="form-agent-popup-content-list__apartment">
															<p class="form-agent-popup-content-list__label">'. $row['category'].'</p>
															<div class="form-agent-popup-content-list__group-icon">
																<div class="form-agent-popup-content-list__icon _icon-bathtub">
																	'. $row['baths'].'
																</div>
																<div class="form-agent-popup-content-list__icon _icon-bed">
																'. $row['beds'].'
																</div>
															</div>
															<p class="form-agent-popup-content-list__area">
															'. $row['area_sqft'].' sqft
															</p>
														</div>
														<div class="form-agent-popup-content-list__agent-actions">
															<div class="form-agent-popup-content-list__type">
															'. $row['occupancy'].'
															</div>
															<a href="#" class="form-agent-popup-content-list__phone _icon-phone">
																Call
															</a>
															<div class="form-agent-popup-content-list__profile">
																<picture><source srcset="img/popup/01.webp" type="image/webp"><img src="img/popup/01.png" alt=""></picture>
																<div class="form-agent-popup-content-list__agent-name">
																	'.$_SESSION["full_name"].'
																</div>
															</div>
														</div>
													</div>
												</div>
												
											</div>';
										}
									} else {
										echo "0 results";
									}
									?>

										</div>
									</div>
									<div class="form-agent-popup-content-list__item">
										<div class="form-agent-popup-content-list__content">
											<button type="button" class="form-agent-popup-content-list__title-button form-agent-popup-content-list__title-button_white">Availability </button>
											<div class="form-agent-popup-content-list__cards">


											<?php
											$draft = "SELECT * FROM add_listing WHERE listing_status='Draft' AND agent_id='$ag_id'";

											$draft_result = $conn->query($draft);	
											
											if ($draft_result->num_rows > 0) {
            
		
												while($row = $draft_result->fetch_assoc()) {
											
											echo '<div class="form-agent-popup-content-list__cards">
												<div class="form-agent-popup-content-list__card">
													<div class="form-agent-popup-content-list__image">
														<picture><source srcset="img/lists/01.webp" type="image/webp"><img src="img/lists/01.png" alt=""></picture>
													</div>
													<div class="form-agent-popup-content-list__info-content">
														<h4 class="form-agent-popup-content-list__subtitle">'. number_format(floatval($row['price'])).' AED</h4>
														<p class="form-agent-popup-content-list__text">'. $row['sub_location'].'</p>
														<div class="form-agent-popup-content-list__apartment">
															<p class="form-agent-popup-content-list__label">'. $row['category'].'</p>
															<div class="form-agent-popup-content-list__group-icon">
																<div class="form-agent-popup-content-list__icon _icon-bathtub">
																	'. $row['baths'].'
																</div>
																<div class="form-agent-popup-content-list__icon _icon-bed">
																'. $row['beds'].'
																</div>
															</div>
															<p class="form-agent-popup-content-list__area">
															'. $row['area_sqft'].' sqft
															</p>
														</div>
														<div class="form-agent-popup-content-list__agent-actions">
															<div class="form-agent-popup-content-list__type">
															'. $row['occupancy'].'
															</div>
															<a href="#" class="form-agent-popup-content-list__phone _icon-phone">
																Call
															</a>
															<div class="form-agent-popup-content-list__profile">
																<picture><source srcset="img/popup/01.webp" type="image/webp"><img src="img/popup/01.png" alt=""></picture>
																<div class="form-agent-popup-content-list__agent-name">
																	'.$_SESSION["full_name"].'
																</div>
															</div>
														</div>
													</div>
												</div>
												
											</div>';
										}
									} else {
										echo "0 results";
									}
									?>


												
											</div>
										</div>
									</div>
									<div class="form-agent-popup-content-list__item">
										<div class="form-agent-popup-content-list__content">
											<button type="button" class="form-agent-popup-content-list__title-button form-agent-popup-content-list__title-button_white">Drafts</button>
											<div class="form-agent-popup-content-list__cards">


											<?php
											$draft = "SELECT * FROM add_listing WHERE listing_status='Draft' AND agent_id='$ag_id'";

											$draft_result = $conn->query($draft);	
											
											if ($draft_result->num_rows > 0) {
            
		
												while($row = $draft_result->fetch_assoc()) {
											
											echo '<div class="form-agent-popup-content-list__cards">
												<div class="form-agent-popup-content-list__card">
													<div class="form-agent-popup-content-list__image">
														<picture><source srcset="img/lists/01.webp" type="image/webp"><img src="img/lists/01.png" alt=""></picture>
													</div>
													<div class="form-agent-popup-content-list__info-content">
														<h4 class="form-agent-popup-content-list__subtitle">'. number_format(floatval($row['price'])).' AED</h4>
														<p class="form-agent-popup-content-list__text">'. $row['sub_location'].'</p>
														<div class="form-agent-popup-content-list__apartment">
															<p class="form-agent-popup-content-list__label">'. $row['category'].'</p>
															<div class="form-agent-popup-content-list__group-icon">
																<div class="form-agent-popup-content-list__icon _icon-bathtub">
																	'. $row['baths'].'
																</div>
																<div class="form-agent-popup-content-list__icon _icon-bed">
																'. $row['beds'].'
																</div>
															</div>
															<p class="form-agent-popup-content-list__area">
															'. $row['area_sqft'].' sqft
															</p>
														</div>
														<div class="form-agent-popup-content-list__agent-actions">
															<div class="form-agent-popup-content-list__type">
															'. $row['occupancy'].'
															</div>
															<a href="#" class="form-agent-popup-content-list__phone _icon-phone">
																Call
															</a>
															<div class="form-agent-popup-content-list__profile">
																<picture><source srcset="img/popup/01.webp" type="image/webp"><img src="img/popup/01.png" alt=""></picture>
																<div class="form-agent-popup-content-list__agent-name">
																	'.$_SESSION["full_name"].'
																</div>
															</div>
														</div>
													</div>
												</div>
												
											</div>';
										}
									} else {
										echo "0 results";
									}
									?>


												
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
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
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script type="text/javascript">
            $(document).ready(function(){
				$("#id_search_param").keyup(function(){
					var input = $(this).val();
					//alert(input);
					if(input != ""){
						$.ajax({
							url:"../Query/Listing/getData.php",
							method: "POST",
							data: {input:input},
							
							success:function(data){
								$("#tbl_body").html(data);
							}
						});
					}else{
						
					}
				})
			})

			$(document).ready(function(){
				$("#ref").keyup(function(){
					var ref = $(this).val();
					//alert(ref);
					if(ref != ""){
						$.ajax({
							url:"../Query/Listing/getData.php",
							method: "POST",
							data: {ref:ref},
							
							success:function(data){
								$("#tbl_body").html(data);
							}
						});
					}
				})
			})

			$(document).ready(function(){
				$("#stat").keyup(function(){
					var stat = $(this).val();
					//alert(stat);
					if(stat != ""){
						$.ajax({
							url:"../Query/Listing/getData.php",
							method: "POST",
							data: {stat:stat},
							
							success:function(data){
								$("#tbl_body").html(data);
							}
						});
					}
				})
			})
        </script>
	<script src="js/app.min.js?_v=20220720174136"></script>
</body>

</html>