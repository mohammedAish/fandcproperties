<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "propertyfinder";
$conn = new mysqli($servername, $username, $password, $database);

$x = 1;
$num_per_page = 10;

if(isset($_GET["page"])){

    $page=$_GET["page"];
}
else{
    $page = 1;
}
$start_from= ($page-1)*10;
$sql = "SELECT * FROM api_data WHERE `offering_type` = 'RR' OR `offering_type` = 'CR' limit $start_from,$num_per_page";
$rs_result = $conn->query($sql);

if(isset($_POST['submit_lead'])){

	$name = $_POST['name'];
	$email = $_POST['email'];
	$phone = $_POST['phone'];
	$message = "";

	$insert = "INSERT INTO `general_lead` (`id`, `lead_name`, `lead_phone`, `lead_email`, `lead_message`, `created`) VALUES (NULL, '$name', '$phone', '$email', '$message', NOW());";
	if ($conn->query($insert) === TRUE) {

    } else {

    }
}
?>


<!DOCTYPE html>
<html style="font-size: 16px;">

<head>
    <!-- Marquiz script start -->
    <script>
    (function(w, d, s, o) {
        var j = d.createElement(s);
        j.async = true;
        j.src = '//script.marquiz.io/v2.js';
        j.onload = function() {
            if (document.readyState !== 'loading') Marquiz.init(o);
            else document.addEventListener("DOMContentLoaded", function() {
                Marquiz.init(o);
            });
        };
        d.head.insertBefore(j, d.head.firstElementChild);
    })(window, document, 'script', {
        host: '//quiz.marquiz.io',
        region: 'eu',
        id: '62cd88d4cd9ede004dcabfee',
        autoOpen: false,
        autoOpenFreq: 'once',
        openOnExit: false,
        disableOnMobile: false
    });
    </script>
    <!-- Marquiz script end -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <title>Rent</title>
    <link rel="stylesheet" href="nicepage.css" media="screen">
    <link rel="stylesheet" href="Rent.css" media="screen">
    <link rel="shortcut icon" href="images/tild3438-6537-4632-b965-363064353161__favicon.ico" type="image/x-icon" />
    <script class="u-script" type="text/javascript" src="jquery.js" defer=""></script>
    <script class="u-script" type="text/javascript" src="nicepage.js" defer=""></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <meta name="generator" content="Nicepage 4.12.5, nicepage.com">
    <link id="u-theme-google-font" rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i">
    <link id="u-page-google-font" rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Playfair+Display:400,400i,500,500i,600,600i,700,700i,800,800i,900,900i">

    <script type="application/ld+json">
    {
        "@context": "http://schema.org",
        "@type": "Organization",
        "name": "",
        "logo": "images/small.png",
        "sameAs": []
    }
    </script>
    <meta name="theme-color" content="#478ac9">
    <meta property="og:title" content="Buy">
    <meta property="og:type" content="website">
    <link rel="stylesheet" href="style.css">
    <script src="http://maps.google.com/maps/api/js?key=AIzaSyAk1cygku8dx0DrpE8IpRs0331s3DzC-08"></script> 
    <script src="https://developers.google.com/maps/documentation/javascript/examples/markerclusterer/markerclusterer.js"></script>
</head>

<body class="u-body u-xl-mode">
    <header class="header u-header u-sticky" id="sec-8041">
        <div class="header__container">
            <div class="header__body">
                <div class="header__logo-block">
                    <a href="https://fandcproperties.ae" class="header__logo">
                        <img src="images/small.png" class="FandCproperties">
                    </a>
                </div>
                 <nav class="header__menu menu">
                    <div class="menu__nav" data-da="body,991.98,first">
                        <ul class="menu__list" data-spollers="991.98,max">
                            <li class="menu__item menu__item_tablet"><a href="/" class="menu__link">Home</a></li>
                            <li class="menu__item"><a href="Buy.php" class="menu__link">Buy</a></li>
                            <li class="menu__item"><a href="Rent.php" class="menu__link">Rent</a></li>
                            <li class="menu__item"><a href="off-plan/index.php" class="menu__link">Off-Plan</a></li>
                            <li class="menu__item"><a href="#" onclick="Marquiz.showModal('62bafdc70d6747003f10d84b')" class="menu__link">Sale \ Rent</a></li>
                            <li class="menu__item"><a href="Blogs.php" class="menu__link">News</a></li>
                            <li class="menu__item">
                                <div class="menu__blog">
                                    <button data-spoller type="button" class="menu__flag">
                                        <span class="menu__flag-text">Services</span>
                                    </button>
                                    <div class="menu__sub-blog menu__sub-blog_big">
                                        <ul class="menu__sub-list">
                                            <li class="menu__sub-item">
                                                <a href="PropertyManager.html" class="menu__sub-flag">
                                                    <span class="menu__sub-flag-text">Property Management</span>
                                                </a>
                                            </li>
                                            <li class="menu__sub-item">
                                                <a href="https://fandc.homeloans.ae" class="menu__sub-flag">
                                                    <span class="menu__sub-flag-text">Mortgage</span>
                                                </a>
                                            </li>
                                            <li class="menu__sub-item">
                                                <a href="Services.html" class="menu__sub-flag">
                                                    <span class="menu__sub-flag-text">All Services</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            <li class="menu__item">
                                <div class="menu__blog">
                                    <button data-spoller type="button" class="menu__flag">
                                        <span class="menu__flag-text">About US</span>
                                    </button>
                                    <div class="menu__sub-blog menu__sub-blog_big">
                                        <ul class="menu__sub-list">
                                            <li class="menu__sub-item">
                                                <a href="About.html" class="menu__sub-flag">
                                                    <span class="menu__sub-flag-text">About us</span>
                                                </a>
                                            </li>
                                            <li class="menu__sub-item">
                                                <a href="Contact.html" class="menu__sub-flag">
                                                    <span class="menu__sub-flag-text">Contact us</span>
                                                </a>
                                            </li>
                                            <li class="menu__sub-item">
                                                <a href="Careers.html" class="menu__sub-flag">
                                                    <span class="menu__sub-flag-text">Careers</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                            <li class="menu__item">
                                <div class="menu__blog">
                                    <button data-spoller type="button" class="menu__flag menu__flag_image">
                                        <!-- <span class="menu__flag-text">About US</span> -->
                                        <img src="./images/england.svg" alt="" class="menu__flag-image">
                                    </button>
                                    <div class="menu__sub-blog menu__sub-blog_min">
                                        <ul class="menu__sub-list">
                                            <li class="menu__sub-item">
                                                <a href="https://kvartirivdubai.ru/" class="menu__sub-flag">
                                                    <img src="./images/ru.svg" alt="" class="menu__flag-image">
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                        </ul>
                        <ul class="menu__list_social">
                            <li class="menu__item">
                                <a href="https://www.youtube.com/channel/UCDxXOlXvlvuAUbF9PkbhGLw"
                                    class="menu__link"><img src="./images/02.png" alt=""></a>
                            </li>
                            <li class="menu__item">
                                <a href="https://www.facebook.com/fcpropertiesdubai" class="menu__link"><img
                                        src="./images/03.png" alt=""></a>
                            </li>
                            <li class="menu__item">
                                <a href="https://www.instagram.com/fandcproperties/" class="menu__link"><img
                                        src="./images/05.png" alt=""></a>
                            </li>
                            <li class="menu__item">
                                <a href="https://ae.linkedin.com/company/f-c-properties-llc" class="menu__link"><img
                                        src="./images/06.png" alt=""></a>
                            </li>
                        </ul>
                    </div>
                </nav>
                <button class="menu__icon icon-menu">
                    <span></span>
                </button>
            </div>
        </div>
    </header>
    <div class="wrapper">
        <div class="">
            <div class="main-block" style="background: #fff url('./images/interier.jpg') top / cover no-repeat;">
                <div class="container">
                    <div class="main-block__body">
                        <h1 class="main-block__title">
                            <button data-popup-youtube="Q52LJes0LxY" class="main-block__youtube">
                                Find your home
                                <svg width="18" height="18" viewBox="0 0 18 18" fill="#163F8E" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M9 18C13.9706 18 18 13.9706 18 9C18 4.02944 13.9706 0 9 0C4.02944 0 0 4.02944 0 9C0 13.9706 4.02944 18 9 18ZM7.71484 7.07178L12.2148 9.32178L7.71484 11.5718V7.07178Z" fill="#163F8E"/>
                                </svg>
                            </button>
                        </h1>
                        <div class="main-block__search">
                            <div data-tabs class="main-search-form__tabs">
                                <nav data-tabs-titles class="main-search-form__navigation">
                                    <button type="button" onclick="location.href='Buy.php'" class="main-search-form__title ">Buy</button>
                                    <button type="button" onclick="location.href='Rent.php'" class="main-search-form__title _tab-active">Rent</button>
                                    <button type="button"  onclick="location.href='off-plan/'" class="main-search-form__title">Off-Plan</button>
                                </nav>
                                <div data-tabs-body class="main-search-form__content">
                                    <div class="main-search-form__body search-form" hidden>
                                        <form action="Search.php" method="POST" class="search-form__form">
                                            <div class="search-form__column search-form__column_input">
                                                <svg viewBox="4 4 15 15" class="search-form__icon">
                                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                                        d="M14.7399 13.6792L18.7806 17.7197C19.0735 18.0126 19.0735 18.4875 18.7806 18.7804C18.4877 19.0733 18.0128 19.0733 17.7199 18.7804L13.6792 14.7399C12.6632 15.5297 11.3865 16 10 16C6.68629 16 4 13.3137 4 10C4 6.68629 6.68629 4 10 4C13.3137 4 16 6.68629 16 10C16 11.3865 15.5297 12.6632 14.7399 13.6792ZM10 14.5C12.4853 14.5 14.5 12.4853 14.5 10C14.5 7.51472 12.4853 5.5 10 5.5C7.51472 5.5 5.5 7.51472 5.5 10C5.5 12.4853 7.51472 14.5 10 14.5Z">
                                                    </path>
                                                </svg>
                                                <input name="city" id="city" type="text" class="search-form__input"
                                                    placeholder="City, community or building" autocomplete="off">
                                            </div>
                                            <div class="search-form__column search-form__column_select">
                                                <select name="type" id="type" class="search-form__select">
                                                    <option value="%" selected>Property</option>
                                                    <option value="AP">Apartment</option>
                                                    <option value="VH">Villa</option>
                                                    <option value="PH">Penthouse</option>
                                                    <option value="PH">Compound</option>
                                                    <option value="FF">Full Floor</option>
                                                    <option value="TH">Townhouse</option>
                                                    <option value="OF">Off-Plan</option>
                                                    <option value="CO">Commercial Office</option>
                                                </select>
                                            </div>
                                            
                                            <div
                                                class="search-form__column search-form__column_select search-form__column_select_xs">
                                                <div class="search-form__select-label">
                                                    <span>Beds</span>
                                                </div>
                                                <div class="search-form__dropdown dropdown-form dropdown-form_big">
                                                    <div class="dropdown-form__wrapper">
                                                        <div class="dropdown-form__body">
                                                            <div class="dropdown-form__block">
                                                                <h3 class="dropdown-form__subtitle">Bedrooms</h3>
                                                                <ul class="dropdown-form__choices">
                                                                    <li class="dropdown-form__choice">
                                                                        <input type="checkbox" autocomplete="off" value="0"
                                                                            name="bedroom[]" class="dropdown-form__filter"
                                                                            id="1bedroom">
                                                                        <label for="1bedroom" class="dropdown-form__text">
                                                                            Studio
                                                                        </label>
                                                                    </li>
                                                                    <li class="dropdown-form__choice"><input type="checkbox"
                                                                            class="dropdown-form__filter" autocomplete="off"
                                                                            value="1" name="bedroom[]" id="2bedroom"><label
                                                                            for="2bedroom"
                                                                            class="dropdown-form__text">1</label></li>
                                                                    <li class="dropdown-form__choice"><input type="checkbox"
                                                                            class="dropdown-form__filter" autocomplete="off"
                                                                            value="2" name="bedroom[]" id="3bedroom"><label
                                                                            for="3bedroom"
                                                                            class="dropdown-form__text">2</label></li>
                                                                    <li class="dropdown-form__choice"><input type="checkbox"
                                                                            class="dropdown-form__filter" autocomplete="off"
                                                                            value="3" name="bedroom[]" id="4bedroom"><label
                                                                            for="4bedroom"
                                                                            class="dropdown-form__text">3</label></li>
                                                                    <li class="dropdown-form__choice"><input type="checkbox"
                                                                            class="dropdown-form__filter" autocomplete="off"
                                                                            value="4" name="bedroom[]" id="5bedroom"><label
                                                                            for="5bedroom"
                                                                            class="dropdown-form__text">4</label></li>
                                                                    <li class="dropdown-form__choice"><input type="checkbox"
                                                                            class="dropdown-form__filter" autocomplete="off"
                                                                            value="5" name="bedroom[]" id="6bedroom"><label
                                                                            for="6bedroom"
                                                                            class="dropdown-form__text">5</label></li>
                                                                    <li class="dropdown-form__choice"><input type="checkbox"
                                                                            class="dropdown-form__filter" autocomplete="off"
                                                                            value="6" name="bedroom[]" id="7bedroom"><label
                                                                            for="7bedroom"
                                                                            class="dropdown-form__text">6</label></li>
                                                                    <li class="dropdown-form__choice"><input type="checkbox"
                                                                            class="dropdown-form__filter" autocomplete="off"
                                                                            value="7" name="bedroom[]" id="8bedroom"><label
                                                                            for="8bedroom"
                                                                            class="dropdown-form__text">7</label></li>
                                                                    <li class="dropdown-form__choice"><input type="checkbox"
                                                                            class="dropdown-form__filter" autocomplete="off"
                                                                            value="8" name="bedroom[]" id="9bedroom"><label
                                                                            for="9bedroom"
                                                                            class="dropdown-form__text">+7</label></li>
                                                                </ul>
                                                            </div>
                                                            <div class="dropdown-form__block">
                                                                <h3 class="dropdown-form__subtitle">Bathrooms</h3>
                                                                <ul class="dropdown-form__choices">
                                                                    <li class="dropdown-form__choice"><input type="checkbox"
                                                                            class="dropdown-form__filter" autocomplete="off"
                                                                            value="1" name="bathroom[]"
                                                                            id="1bathroom"><label for="1bathroom"
                                                                            class="dropdown-form__text">1</label></li>
                                                                    <li class="dropdown-form__choice"><input type="checkbox"
                                                                            class="dropdown-form__filter" autocomplete="off"
                                                                            value="2" name="bathroom[]"
                                                                            id="2bathroom"><label for="2bathroom"
                                                                            class="dropdown-form__text">2</label></li>
                                                                    <li class="dropdown-form__choice"><input type="checkbox"
                                                                            class="dropdown-form__filter" autocomplete="off"
                                                                            value="3" name="bathroom[]"
                                                                            id="3bathroom"><label for="3bathroom"
                                                                            class="dropdown-form__text">3</label></li>
                                                                    <li class="dropdown-form__choice"><input type="checkbox"
                                                                            class="dropdown-form__filter" autocomplete="off"
                                                                            value="4" name="bathroom[]"
                                                                            id="4bathroom"><label for="4bathroom"
                                                                            class="dropdown-form__text">4</label></li>
                                                                    <li class="dropdown-form__choice"><input type="checkbox"
                                                                            class="dropdown-form__filter" autocomplete="off"
                                                                            value="5" name="bathroom[]"
                                                                            id="5bathroom"><label for="5bathroom"
                                                                            class="dropdown-form__text">5</label></li>
                                                                    <li class="dropdown-form__choice"><input type="checkbox"
                                                                            class="dropdown-form__filter" autocomplete="off"
                                                                            value="6" name="bathroom[]"
                                                                            id="6bathroom"><label for="6bathroom"
                                                                            class="dropdown-form__text">6</label></li>
                                                                    <li class="dropdown-form__choice"><input type="checkbox"
                                                                            class="dropdown-form__filter" autocomplete="off"
                                                                            value="7" name="bathroom[]"
                                                                            id="7bathroom"><label for="7bathroom"
                                                                            class="dropdown-form__text">7</label></li>
                                                                    <li class="dropdown-form__choice"><input type="checkbox"
                                                                            class="dropdown-form__filter" autocomplete="off"
                                                                            value="8" name="bathroom[]"
                                                                            id="8bathroom"><label for="8bathroom"
                                                                            class="dropdown-form__text">+7</label></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="search-form__column search-form__row search-form__row_1">
                                                
                                            </div>
                                                <div data-da=".search-form__row_1,767.98" class="search-form__column search-form__column_select search-form__column_select_sm">
                                                    <select name="mo-beds" class="search-form__select">
                                                        <option value="" selected>Bedrooms</option>
                                                        <option value="0">Studio</option>
                                                        <option value="1">1 Bedroom</option>
                                                        <option value="2">2 Bedrooms</option>
                                                        <option value="3">3 Bedrooms</option>
                                                        <option value="4">4 Bedrooms</option>
                                                        <option value="5">5 Bedrooms</option>
                                                        <option value="6">6 Bedrooms</option>
                                                        <option value="7">7 Bedrooms</option>
                                                        <option value="8">+7 Bedrooms</option>
                                                    </select>
                                                </div>
                                                <div data-da=".search-form__row_1,767.98" class="search-form__column search-form__column_select search-form__column_select_sm">
                                                    <select name="mo-price" class="search-form__select">
                                                        <option value="100000000000" selected>Max. Price (AED)</option>
                                                        <option value="30000">30,000</option>
                                                        <option value="50000">50,000</option>
                                                        <option value="100000">100,000</option>
                                                        <option value="250000">250,000</option>
                                                        <option value="500000">500,000</option>
                                                        <option value="1000000">1,000,000</option>
                                                        <option value="2000000">2,000,000</option>
                                                        <option value="3000000">3,000,000</option>
                                                        <option value="5000000">5,000,000</option>
                                                        <option value="10000000">10,000,000</option>
                                                        <option value="10000000">More Than 10,000,000</option>
                                                    </select>
                                                </div>
                                            <div
                                                class="search-form__column search-form__column_select search-form__column_select_xs">
                                                <div class="search-form__select-label">
                                                    <span>Price</span>
                                                </div>
                                                <div
                                                    class="search-form__dropdown dropdown-form dropdown-form_select dropdown-form_select-right">
                                                    <div class="dropdown-form__wrapper">
                                                        <div class="dropdown-form__body">
                                                            <div class="dropdown-form__block dropdown-form__block_select">
                                                                <select name="min" class="search-form__select">
                                                                    <option value="0" selected>Min. Price (AED)</option>
                                                                    <option value="30000">30,000</option>
                                                                    <option value="50000">50,000</option>
                                                                    <option value="100000">100,000</option>
                                                                    <option value="250000">250,000</option>
                                                                    <option value="500000">500,000</option>
                                                                    <option value="1000000">1,000,000</option>
                                                                    <option value="2000000">2,000,000</option>
                                                                    <option value="3000000">3,000,000</option>
                                                                    <option value="5000000">5,000,000</option>
                                                                </select>
                                                            </div>
                                                            <div class="dropdown-form__divider"><svg
                                                                    class="range-selector__divider-svg" viewBox="0 0 16 2">
                                                                    <path fill="currentColor" fill-rule="evenodd"
                                                                        clip-rule="evenodd"
                                                                        d="M15.5 0.5C15.7761 0.5 16 0.723858 16 1C16 1.24546 15.7761 1.49194 15.5 1.49194L0.5 1.5C0.223858 1.5 0 1.27614 0 1C0 0.75454 0.206389 0.5 0.5 0.508056L15.5 0.5Z">
                                                                    </path>
                                                                </svg></div>
                                                            <div class="dropdown-form__block dropdown-form__block_select">
                                                                <select name="max" class="search-form__select">
                                                                    <option value="" selected>Max. Price (AED)</option>
                                                                    <option value="30000">30,000</option>
                                                                    <option value="50000">50,000</option>
                                                                    <option value="100000">100,000</option>
                                                                    <option value="250000">250,000</option>
                                                                    <option value="500000">500,000</option>
                                                                    <option value="1000000">1,000,000</option>
                                                                    <option value="2000000">2,000,000</option>
                                                                    <option value="3000000">3,000,000</option>
                                                                    <option value="5000000">5,000,000</option>
                                                                    <option value="10000000">10,000,000</option>
                                                                    <option value="10000000">More Than 10,000,000</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="search-form__column search-form__column_button">
                                                <button type="submit" id="submit" name="submit"
                                                    class="search-form__button" >
                                                    <svg width="15" height="15" viewBox="0 0 15 15">
                                                        <path fill="white" fill-rule="evenodd" clip-rule="evenodd"
                                                            d="M10.7399 9.67922L14.7806 13.7197C15.0735 14.0126 15.0735 14.4875 14.7806 14.7804C14.4877 15.0733 14.0128 15.0733 13.7199 14.7804L9.67925 10.7399C8.66323 11.5297 7.38654 12 6 12C2.68629 12 0 9.31371 0 6C0 2.68629 2.68629 0 6 0C9.31371 0 12 2.68629 12 6C12 7.38653 11.5297 8.66321 10.7399 9.67922ZM6 10.5C8.48528 10.5 10.5 8.48528 10.5 6C10.5 3.51472 8.48528 1.5 6 1.5C3.51472 1.5 1.5 3.51472 1.5 6C1.5 8.48528 3.51472 10.5 6 10.5Z">
                                                        </path>
                                                    </svg>
                                                    <span class="search-form__button-text">
                                                        Search
                                                    </span>
                                                </button>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="main-search-form__body" hidden>
                                        <form action="Search.php" method="POST" class="search-form__form">
                                            <div class="search-form__column search-form__column_input">
                                                <svg viewBox="4 4 15 15" class="search-form__icon">
                                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                                        d="M14.7399 13.6792L18.7806 17.7197C19.0735 18.0126 19.0735 18.4875 18.7806 18.7804C18.4877 19.0733 18.0128 19.0733 17.7199 18.7804L13.6792 14.7399C12.6632 15.5297 11.3865 16 10 16C6.68629 16 4 13.3137 4 10C4 6.68629 6.68629 4 10 4C13.3137 4 16 6.68629 16 10C16 11.3865 15.5297 12.6632 14.7399 13.6792ZM10 14.5C12.4853 14.5 14.5 12.4853 14.5 10C14.5 7.51472 12.4853 5.5 10 5.5C7.51472 5.5 5.5 7.51472 5.5 10C5.5 12.4853 7.51472 14.5 10 14.5Z">
                                                    </path>
                                                </svg>
                                                <input name="city" id="city" type="text" class="search-form__input"
                                                    placeholder="City, community or building" autocomplete="off">
                                            </div>
                                            <div class="search-form__column search-form__column_select">
                                                <select name="type" id="type" class="search-form__select">
                                                    <option value="%" selected>Property type</option>
                                                    <option value="AP">Apartment</option>
                                                    <option value="VH">Villa</option>
                                                    <option value="PH">Penthouse</option>
                                                    <option value="PH">Compound</option>
                                                    <option value="FF">Full Floor</option>
                                                    <option value="TH">Townhouse</option>
                                                    <option value="OF">Off-Plan</option>
                                                    <option value="CO">Commercial Office</option>
                                                </select>
                                            </div>
                                            <div class="search-form__column search-form__column_select">
                                                <select name="area" id="area" class="search-form__select">
                                                    <option value="%" selected>Area</option>
                                                    <?php 
                                             
                                             $sql1 = "SELECT DISTINCT community FROM `api_data`";
                                             $rs_result1 = $conn->query($sql1);
                                             if ($rs_result1->num_rows > 0) {
         
                                                 while($row1 = $rs_result1->fetch_assoc()) {

                                                     echo '<option value="'.$row1['community'].'">'.$row1['community'].'</option>';

                                                 }
                                                

                                             } else {
                                               
                                     }

                                     ?>
                                                </select>
                                            </div>
                                            <div
                                                class="search-form__column search-form__column_select search-form__column_select_xs">
                                                <div class="search-form__select-label">
                                                    <span>Beds & Baths</span>
                                                </div>
                                                <div class="search-form__dropdown dropdown-form dropdown-form_big">
                                                    <div class="dropdown-form__wrapper">
                                                        <div class="dropdown-form__body">
                                                            <div class="dropdown-form__block">
                                                                <h3 class="dropdown-form__subtitle">Bedrooms</h3>
                                                                <ul class="dropdown-form__choices">
                                                                    <li class="dropdown-form__choice">
                                                                        <input type="checkbox" autocomplete="off" value="0"
                                                                            name="bedroom[]" class="dropdown-form__filter"
                                                                            id="1bedroom">
                                                                        <label for="1bedroom" class="dropdown-form__text">
                                                                            Studio
                                                                        </label>
                                                                    </li>
                                                                    <li class="dropdown-form__choice"><input type="checkbox"
                                                                            class="dropdown-form__filter" autocomplete="off"
                                                                            value="1" name="bedroom[]" id="2bedroom"><label
                                                                            for="2bedroom"
                                                                            class="dropdown-form__text">1</label></li>
                                                                    <li class="dropdown-form__choice"><input type="checkbox"
                                                                            class="dropdown-form__filter" autocomplete="off"
                                                                            value="2" name="bedroom[]" id="3bedroom"><label
                                                                            for="3bedroom"
                                                                            class="dropdown-form__text">2</label></li>
                                                                    <li class="dropdown-form__choice"><input type="checkbox"
                                                                            class="dropdown-form__filter" autocomplete="off"
                                                                            value="3" name="bedroom[]" id="4bedroom"><label
                                                                            for="4bedroom"
                                                                            class="dropdown-form__text">3</label></li>
                                                                    <li class="dropdown-form__choice"><input type="checkbox"
                                                                            class="dropdown-form__filter" autocomplete="off"
                                                                            value="4" name="bedroom[]" id="5bedroom"><label
                                                                            for="5bedroom"
                                                                            class="dropdown-form__text">4</label></li>
                                                                    <li class="dropdown-form__choice"><input type="checkbox"
                                                                            class="dropdown-form__filter" autocomplete="off"
                                                                            value="5" name="bedroom[]" id="6bedroom"><label
                                                                            for="6bedroom"
                                                                            class="dropdown-form__text">5</label></li>
                                                                    <li class="dropdown-form__choice"><input type="checkbox"
                                                                            class="dropdown-form__filter" autocomplete="off"
                                                                            value="6" name="bedroom[]" id="7bedroom"><label
                                                                            for="7bedroom"
                                                                            class="dropdown-form__text">6</label></li>
                                                                    <li class="dropdown-form__choice"><input type="checkbox"
                                                                            class="dropdown-form__filter" autocomplete="off"
                                                                            value="7" name="bedroom[]" id="8bedroom"><label
                                                                            for="8bedroom"
                                                                            class="dropdown-form__text">7</label></li>
                                                                    <li class="dropdown-form__choice"><input type="checkbox"
                                                                            class="dropdown-form__filter" autocomplete="off"
                                                                            value="8" name="bedroom[]" id="9bedroom"><label
                                                                            for="9bedroom"
                                                                            class="dropdown-form__text">+7</label></li>
                                                                </ul>
                                                            </div>
                                                            <div class="dropdown-form__block">
                                                                <h3 class="dropdown-form__subtitle">Bathrooms</h3>
                                                                <ul class="dropdown-form__choices">
                                                                    <li class="dropdown-form__choice"><input type="checkbox"
                                                                            class="dropdown-form__filter" autocomplete="off"
                                                                            value="1" name="bathroom[]"
                                                                            id="1bathroom"><label for="1bathroom"
                                                                            class="dropdown-form__text">1</label></li>
                                                                    <li class="dropdown-form__choice"><input type="checkbox"
                                                                            class="dropdown-form__filter" autocomplete="off"
                                                                            value="2" name="bathroom[]"
                                                                            id="2bathroom"><label for="2bathroom"
                                                                            class="dropdown-form__text">2</label></li>
                                                                    <li class="dropdown-form__choice"><input type="checkbox"
                                                                            class="dropdown-form__filter" autocomplete="off"
                                                                            value="3" name="bathroom[]"
                                                                            id="3bathroom"><label for="3bathroom"
                                                                            class="dropdown-form__text">3</label></li>
                                                                    <li class="dropdown-form__choice"><input type="checkbox"
                                                                            class="dropdown-form__filter" autocomplete="off"
                                                                            value="4" name="bathroom[]"
                                                                            id="4bathroom"><label for="4bathroom"
                                                                            class="dropdown-form__text">4</label></li>
                                                                    <li class="dropdown-form__choice"><input type="checkbox"
                                                                            class="dropdown-form__filter" autocomplete="off"
                                                                            value="5" name="bathroom[]"
                                                                            id="5bathroom"><label for="5bathroom"
                                                                            class="dropdown-form__text">5</label></li>
                                                                    <li class="dropdown-form__choice"><input type="checkbox"
                                                                            class="dropdown-form__filter" autocomplete="off"
                                                                            value="6" name="bathroom[]"
                                                                            id="6bathroom"><label for="6bathroom"
                                                                            class="dropdown-form__text">6</label></li>
                                                                    <li class="dropdown-form__choice"><input type="checkbox"
                                                                            class="dropdown-form__filter" autocomplete="off"
                                                                            value="7" name="bathroom[]"
                                                                            id="7bathroom"><label for="7bathroom"
                                                                            class="dropdown-form__text">7</label></li>
                                                                    <li class="dropdown-form__choice"><input type="checkbox"
                                                                            class="dropdown-form__filter" autocomplete="off"
                                                                            value="8" name="bathroom[]"
                                                                            id="8bathroom"><label for="8bathroom"
                                                                            class="dropdown-form__text">+7</label></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="search-form__column search-form__row search-form__row_2">
                                                
                                            </div>
                                                <div data-da=".search-form__row_2,767.98" class="search-form__column search-form__column_select search-form__column_select_sm">
                                                    <select name="mo-beds" class="search-form__select">
                                                        <option value="" selected>Bedrooms</option>
                                                        <option value="0">Studio</option>
                                                        <option value="1">1 Bedroom</option>
                                                        <option value="2">2 Bedrooms</option>
                                                        <option value="3">3 Bedrooms</option>
                                                        <option value="4">4 Bedrooms</option>
                                                        <option value="5">5 Bedrooms</option>
                                                        <option value="6">6 Bedrooms</option>
                                                        <option value="7">7 Bedrooms</option>
                                                        <option value="8">+7 Bedrooms</option>
                                                    </select>
                                                </div>
                                                <div data-da=".search-form__row_2,767.98" class="search-form__column search-form__column_select search-form__column_select_sm">
                                                    <select name="mo-price" class="search-form__select">
                                                        <option value="100000000000" selected>Max. Price (AED)</option>
                                                        <option value="30000">30,000</option>
                                                        <option value="50000">50,000</option>
                                                        <option value="100000">100,000</option>
                                                        <option value="250000">250,000</option>
                                                        <option value="500000">500,000</option>
                                                        <option value="1000000">1,000,000</option>
                                                        <option value="2000000">2,000,000</option>
                                                        <option value="3000000">3,000,000</option>
                                                        <option value="5000000">5,000,000</option>
                                                        <option value="10000000">10,000,000</option>
                                                        <option value="10000000">More Than 10,000,000</option>
                                                    </select>
                                                </div>
                                            <div
                                                class="search-form__column search-form__column_select search-form__column_select_xs">
                                                <div class="search-form__select-label">
                                                    <span>Price</span>
                                                </div>
                                                <div
                                                    class="search-form__dropdown dropdown-form dropdown-form_select dropdown-form_select-right">
                                                    <div class="dropdown-form__wrapper">
                                                        <div class="dropdown-form__body">
                                                            <div class="dropdown-form__block dropdown-form__block_select">
                                                                <select name="min" class="search-form__select">
                                                                    <option value="0" selected>Min. Price (AED)</option>
                                                                    <option value="30000">30,000</option>
                                                                    <option value="50000">50,000</option>
                                                                    <option value="100000">100,000</option>
                                                                    <option value="250000">250,000</option>
                                                                    <option value="500000">500,000</option>
                                                                    <option value="1000000">1,000,000</option>
                                                                    <option value="2000000">2,000,000</option>
                                                                    <option value="3000000">3,000,000</option>
                                                                    <option value="5000000">5,000,000</option>
                                                                </select>
                                                            </div>
                                                            <div class="dropdown-form__divider"><svg
                                                                    class="range-selector__divider-svg" viewBox="0 0 16 2">
                                                                    <path fill="currentColor" fill-rule="evenodd"
                                                                        clip-rule="evenodd"
                                                                        d="M15.5 0.5C15.7761 0.5 16 0.723858 16 1C16 1.24546 15.7761 1.49194 15.5 1.49194L0.5 1.5C0.223858 1.5 0 1.27614 0 1C0 0.75454 0.206389 0.5 0.5 0.508056L15.5 0.5Z">
                                                                    </path>
                                                                </svg></div>
                                                            <div class="dropdown-form__block dropdown-form__block_select">
                                                                <select name="max" class="search-form__select">
                                                                    <option value="" selected>Max. Price (AED)</option>
                                                                    <option value="30000">30,000</option>
                                                                    <option value="50000">50,000</option>
                                                                    <option value="100000">100,000</option>
                                                                    <option value="250000">250,000</option>
                                                                    <option value="500000">500,000</option>
                                                                    <option value="1000000">1,000,000</option>
                                                                    <option value="2000000">2,000,000</option>
                                                                    <option value="3000000">3,000,000</option>
                                                                    <option value="5000000">5,000,000</option>
                                                                    <option value="10000000">10,000,000</option>
                                                                    <option value="10000000">More Than 10,000,000</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="search-form__column search-form__column_button">
                                                <button type="submit1" id="submit1" name="submit1"
                                                    class="search-form__button">
                                                    <svg width="15" height="15" viewBox="0 0 15 15">
                                                        <path fill="white" fill-rule="evenodd" clip-rule="evenodd"
                                                            d="M10.7399 9.67922L14.7806 13.7197C15.0735 14.0126 15.0735 14.4875 14.7806 14.7804C14.4877 15.0733 14.0128 15.0733 13.7199 14.7804L9.67925 10.7399C8.66323 11.5297 7.38654 12 6 12C2.68629 12 0 9.31371 0 6C0 2.68629 2.68629 0 6 0C9.31371 0 12 2.68629 12 6C12 7.38653 11.5297 8.66321 10.7399 9.67922ZM6 10.5C8.48528 10.5 10.5 8.48528 10.5 6C10.5 3.51472 8.48528 1.5 6 1.5C3.51472 1.5 1.5 3.51472 1.5 6C1.5 8.48528 3.51472 10.5 6 10.5Z">
                                                        </path>
                                                    </svg>
                                                    <span class="search-form__button-text">
                                                        Search
                                                    </span>
                                                </button>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="main-search-form__body" hidden>
                                        <form action="Search.php" method="POST" class="search-form__form">
                                            <div class="search-form__column search-form__column_input">
                                                <svg viewBox="4 4 15 15" class="search-form__icon">
                                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                                        d="M14.7399 13.6792L18.7806 17.7197C19.0735 18.0126 19.0735 18.4875 18.7806 18.7804C18.4877 19.0733 18.0128 19.0733 17.7199 18.7804L13.6792 14.7399C12.6632 15.5297 11.3865 16 10 16C6.68629 16 4 13.3137 4 10C4 6.68629 6.68629 4 10 4C13.3137 4 16 6.68629 16 10C16 11.3865 15.5297 12.6632 14.7399 13.6792ZM10 14.5C12.4853 14.5 14.5 12.4853 14.5 10C14.5 7.51472 12.4853 5.5 10 5.5C7.51472 5.5 5.5 7.51472 5.5 10C5.5 12.4853 7.51472 14.5 10 14.5Z">
                                                    </path>
                                                </svg>
                                                <input name="city" id="city" type="text" class="search-form__input"
                                                    placeholder="City, community or building" autocomplete="off">
                                            </div>
                                            <div class="search-form__column search-form__column_select">
                                                <select name="type" id="type" class="search-form__select">
                                                    <option value="%" selected>Property type</option>
                                                    <option value="AP">Apartment</option>
                                                    <option value="VH">Villa</option>
                                                    <option value="PH">Penthouse</option>
                                                    <option value="PH">Compound</option>
                                                    <option value="FF">Full Floor</option>
                                                    <option value="TH">Townhouse</option>
                                                    <option value="OF">Off-Plan</option>
                                                    <option value="CO">Commercial Office</option>
                                                </select>
                                            </div>
                                            <div
                                                class="search-form__column search-form__column_select search-form__column_select_xs">
                                                <div class="search-form__select-label">
                                                    <span>Beds & Baths</span>
                                                </div>
                                                <div class="search-form__dropdown dropdown-form dropdown-form_big">
                                                    <div class="dropdown-form__wrapper">
                                                        <div class="dropdown-form__body">
                                                            <div class="dropdown-form__block">
                                                                <h3 class="dropdown-form__subtitle">Bedrooms</h3>
                                                                <ul class="dropdown-form__choices">
                                                                    <li class="dropdown-form__choice">
                                                                        <input type="checkbox" autocomplete="off" value="0"
                                                                            name="bedroom[]" class="dropdown-form__filter"
                                                                            id="1bedroom">
                                                                        <label for="1bedroom" class="dropdown-form__text">
                                                                            Studio
                                                                        </label>
                                                                    </li>
                                                                    <li class="dropdown-form__choice"><input type="checkbox"
                                                                            class="dropdown-form__filter" autocomplete="off"
                                                                            value="1" name="bedroom[]" id="2bedroom"><label
                                                                            for="2bedroom"
                                                                            class="dropdown-form__text">1</label></li>
                                                                    <li class="dropdown-form__choice"><input type="checkbox"
                                                                            class="dropdown-form__filter" autocomplete="off"
                                                                            value="2" name="bedroom[]" id="3bedroom"><label
                                                                            for="3bedroom"
                                                                            class="dropdown-form__text">2</label></li>
                                                                    <li class="dropdown-form__choice"><input type="checkbox"
                                                                            class="dropdown-form__filter" autocomplete="off"
                                                                            value="3" name="bedroom[]" id="4bedroom"><label
                                                                            for="4bedroom"
                                                                            class="dropdown-form__text">3</label></li>
                                                                    <li class="dropdown-form__choice"><input type="checkbox"
                                                                            class="dropdown-form__filter" autocomplete="off"
                                                                            value="4" name="bedroom[]" id="5bedroom"><label
                                                                            for="5bedroom"
                                                                            class="dropdown-form__text">4</label></li>
                                                                    <li class="dropdown-form__choice"><input type="checkbox"
                                                                            class="dropdown-form__filter" autocomplete="off"
                                                                            value="5" name="bedroom[]" id="6bedroom"><label
                                                                            for="6bedroom"
                                                                            class="dropdown-form__text">5</label></li>
                                                                    <li class="dropdown-form__choice"><input type="checkbox"
                                                                            class="dropdown-form__filter" autocomplete="off"
                                                                            value="6" name="bedroom[]" id="7bedroom"><label
                                                                            for="7bedroom"
                                                                            class="dropdown-form__text">6</label></li>
                                                                    <li class="dropdown-form__choice"><input type="checkbox"
                                                                            class="dropdown-form__filter" autocomplete="off"
                                                                            value="7" name="bedroom[]" id="8bedroom"><label
                                                                            for="8bedroom"
                                                                            class="dropdown-form__text">7</label></li>
                                                                    <li class="dropdown-form__choice"><input type="checkbox"
                                                                            class="dropdown-form__filter" autocomplete="off"
                                                                            value="8" name="bedroom[]" id="9bedroom"><label
                                                                            for="9bedroom"
                                                                            class="dropdown-form__text">+7</label></li>
                                                                </ul>
                                                            </div>
                                                            <div class="dropdown-form__block">
                                                                <h3 class="dropdown-form__subtitle">Bathrooms</h3>
                                                                <ul class="dropdown-form__choices">
                                                                    <li class="dropdown-form__choice"><input type="checkbox"
                                                                            class="dropdown-form__filter" autocomplete="off"
                                                                            value="1" name="bathroom[]"
                                                                            id="1bathroom"><label for="1bathroom"
                                                                            class="dropdown-form__text">1</label></li>
                                                                    <li class="dropdown-form__choice"><input type="checkbox"
                                                                            class="dropdown-form__filter" autocomplete="off"
                                                                            value="2" name="bathroom[]"
                                                                            id="2bathroom"><label for="2bathroom"
                                                                            class="dropdown-form__text">2</label></li>
                                                                    <li class="dropdown-form__choice"><input type="checkbox"
                                                                            class="dropdown-form__filter" autocomplete="off"
                                                                            value="3" name="bathroom[]"
                                                                            id="3bathroom"><label for="3bathroom"
                                                                            class="dropdown-form__text">3</label></li>
                                                                    <li class="dropdown-form__choice"><input type="checkbox"
                                                                            class="dropdown-form__filter" autocomplete="off"
                                                                            value="4" name="bathroom[]"
                                                                            id="4bathroom"><label for="4bathroom"
                                                                            class="dropdown-form__text">4</label></li>
                                                                    <li class="dropdown-form__choice"><input type="checkbox"
                                                                            class="dropdown-form__filter" autocomplete="off"
                                                                            value="5" name="bathroom[]"
                                                                            id="5bathroom"><label for="5bathroom"
                                                                            class="dropdown-form__text">5</label></li>
                                                                    <li class="dropdown-form__choice"><input type="checkbox"
                                                                            class="dropdown-form__filter" autocomplete="off"
                                                                            value="6" name="bathroom[]"
                                                                            id="6bathroom"><label for="6bathroom"
                                                                            class="dropdown-form__text">6</label></li>
                                                                    <li class="dropdown-form__choice"><input type="checkbox"
                                                                            class="dropdown-form__filter" autocomplete="off"
                                                                            value="7" name="bathroom[]"
                                                                            id="7bathroom"><label for="7bathroom"
                                                                            class="dropdown-form__text">7</label></li>
                                                                    <li class="dropdown-form__choice"><input type="checkbox"
                                                                            class="dropdown-form__filter" autocomplete="off"
                                                                            value="8" name="bathroom[]"
                                                                            id="8bathroom"><label for="8bathroom"
                                                                            class="dropdown-form__text">+7</label></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="search-form__column search-form__row search-form__row_3">
                                                
                                            </div>
                                                <div data-da=".search-form__row_3,767.98" class="search-form__column search-form__column_select search-form__column_select_sm">
                                                    <select name="mo-beds" class="search-form__select">
                                                        <option value="" selected>Bedrooms</option>
                                                        <option value="0">Studio</option>
                                                        <option value="1">1 Bedroom</option>
                                                        <option value="2">2 Bedrooms</option>
                                                        <option value="3">3 Bedrooms</option>
                                                        <option value="4">4 Bedrooms</option>
                                                        <option value="5">5 Bedrooms</option>
                                                        <option value="6">6 Bedrooms</option>
                                                        <option value="7">7 Bedrooms</option>
                                                        <option value="8">+7 Bedrooms</option>
                                                    </select>
                                                </div>
                                                <div data-da=".search-form__row_3,767.98" class="search-form__column search-form__column_select search-form__column_select_sm">
                                                    <select name="mo-price" class="search-form__select">
                                                        <option value="100000000000" selected>Max. Price (AED)</option>
                                                        <option value="30000">30,000</option>
                                                        <option value="50000">50,000</option>
                                                        <option value="100000">100,000</option>
                                                        <option value="250000">250,000</option>
                                                        <option value="500000">500,000</option>
                                                        <option value="1000000">1,000,000</option>
                                                        <option value="2000000">2,000,000</option>
                                                        <option value="3000000">3,000,000</option>
                                                        <option value="5000000">5,000,000</option>
                                                        <option value="10000000">10,000,000</option>
                                                        <option value="10000000">More Than 10,000,000</option>
                                                    </select>
                                                </div>
                                            <div
                                                class="search-form__column search-form__column_select search-form__column_select_xs">
                                                <div class="search-form__select-label">
                                                    <span>Price</span>
                                                </div>
                                                <div
                                                    class="search-form__dropdown dropdown-form dropdown-form_select dropdown-form_select-right">
                                                    <div class="dropdown-form__wrapper">
                                                        <div class="dropdown-form__body">
                                                            <div class="dropdown-form__block dropdown-form__block_select">
                                                                <select name="min" class="search-form__select">
                                                                    <option value="0" selected>Min. Price (AED)</option>
                                                                    <option value="30000">30,000</option>
                                                                    <option value="50000">50,000</option>
                                                                    <option value="100000">100,000</option>
                                                                    <option value="250000">250,000</option>
                                                                    <option value="500000">500,000</option>
                                                                    <option value="1000000">1,000,000</option>
                                                                    <option value="2000000">2,000,000</option>
                                                                    <option value="3000000">3,000,000</option>
                                                                    <option value="5000000">5,000,000</option>
                                                                </select>
                                                            </div>
                                                            <div class="dropdown-form__divider"><svg
                                                                    class="range-selector__divider-svg" viewBox="0 0 16 2">
                                                                    <path fill="currentColor" fill-rule="evenodd"
                                                                        clip-rule="evenodd"
                                                                        d="M15.5 0.5C15.7761 0.5 16 0.723858 16 1C16 1.24546 15.7761 1.49194 15.5 1.49194L0.5 1.5C0.223858 1.5 0 1.27614 0 1C0 0.75454 0.206389 0.5 0.5 0.508056L15.5 0.5Z">
                                                                    </path>
                                                                </svg></div>
                                                            <div class="dropdown-form__block dropdown-form__block_select">
                                                                <select name="max" class="search-form__select">
                                                                    <option value="" selected>Max. Price (AED)</option>
                                                                    <option value="30000">30,000</option>
                                                                    <option value="50000">50,000</option>
                                                                    <option value="100000">100,000</option>
                                                                    <option value="250000">250,000</option>
                                                                    <option value="500000">500,000</option>
                                                                    <option value="1000000">1,000,000</option>
                                                                    <option value="2000000">2,000,000</option>
                                                                    <option value="3000000">3,000,000</option>
                                                                    <option value="5000000">5,000,000</option>
                                                                    <option value="10000000">10,000,000</option>
                                                                    <option value="10000000">More Than 10,000,000</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="search-form__column search-form__column_button">
                                                <button type="submit1" id="submit1" name="submit1"
                                                    class="search-form__button">
                                                    <svg width="15" height="15" viewBox="0 0 15 15">
                                                        <path fill="white" fill-rule="evenodd" clip-rule="evenodd"
                                                            d="M10.7399 9.67922L14.7806 13.7197C15.0735 14.0126 15.0735 14.4875 14.7806 14.7804C14.4877 15.0733 14.0128 15.0733 13.7199 14.7804L9.67925 10.7399C8.66323 11.5297 7.38654 12 6 12C2.68629 12 0 9.31371 0 6C0 2.68629 2.68629 0 6 0C9.31371 0 12 2.68629 12 6C12 7.38653 11.5297 8.66321 10.7399 9.67922ZM6 10.5C8.48528 10.5 10.5 8.48528 10.5 6C10.5 3.51472 8.48528 1.5 6 1.5C3.51472 1.5 1.5 3.51472 1.5 6C1.5 8.48528 3.51472 10.5 6 10.5Z">
                                                        </path>
                                                    </svg>
                                                    <span class="search-form__button-text">
                                                        Search
                                                    </span>
                                                </button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php echo     '<section class="products">
            <div class="products__container">
               <h2 class="products__main-title">Our Rent Products</h1>
                <div class="products__body"> ';

                function cleanURL($textURL) {
                    $URL = strtolower(preg_replace( array('/[^a-z0-9\- ]/i', '/[ \-]+/'), array('', '|'), $textURL));
                              return $URL;
                       }
                $i = 0;
                if ($rs_result->num_rows > 0) {
            
                while($row = $rs_result->fetch_assoc()) {
                    


                    echo '<div class="products__item item-product">
                        <div class="item-product__body">
                            <a href="projectNo-'.$row['property_id'].'-Project-'.cleanURL($row['title_en']).'" class="item-product__image">
                                <img class="item-product__main-image" src="'.$row['photo1'].'" alt="">
                                <div class="item-product__image-content image-content-product">
                                    <div class="image-content-product__body">
                                        <div class="image-content-product__user">
                                            <img class="image-content-product__image" src="'.$row['agent_photo'].'" alt="">
                                        </div>
                                        <div class="image-content-product__body-text">
                                            <h5 class="image-content-product__title">'.$row['agent_name'].'</h5>
                                        </div>
                                    </div>
                                </div>
                            </a>
                            <div class="item-product__content">
                                <div class="item-product__header">
                                    <div class="item-product__main-info">
                                        <div class="item-product__actions-wrapper">
                                            <h4 class="item-product__title"> AED '; echo number_format(floatval($row["price"])) . '</h4>
                                            <div class="item-product__actions">
                                                <button type="button" class="item-product__button">
                                                    <img src="images/786251.png" alt="">
                                                </button>
                                                <button type="button" class="item-product__button">
                                                    <img src="images/27.png" alt="">
                                                </button>
                                            </div>
                                        </div>
                                        <a href="projectNo-'.$row['property_id'].'-Project-'.cleanURL($row['title_en']).'" class="item-product__place">
                                        '. $row["title_en"] .'
                                        </a>
                                        <div class="item-product__apartments">
                                            <h6 class="item-product__apartments-info">
                                                <img src="images/21.png" alt="">
                                                '.$row['bedroom'].' beds
                                            </h6>
                                            <h6 class="item-product__apartments-info">
                                                <img src="images/23.png" alt="">
                                                '.$row['bathroom'].' bath 
                                            </h6>
                                            <h6 class="item-product__apartments-info">
                                                <img src="images/24.png" alt="">
                                                '.$row['property_size'].' SqFt 
                                            </h6>
                                            <h6 class="item-product__apartments-info">
                                                <img src="images/25.png" alt="">
                                                '.$row['parking'].'
                                            </h6>
                                        </div>
                                    </div>
                                    <div class="item-product__address">
                                        <a href="#" class="item-product__address-info">
                                            <img src="images/684908.png" alt="">
                                            '.$row['community'].'
                                        </a>
                                        <h6 class="item-product__address-place">'.$row['sub_community'].'</h6>
                                    </div>
                                </div>
                                <div class="item-product__footer">
                                    <div class="item-product__footer-body">
                                        <ul class="item-product__list">
                                            <li class="item-product__item">
                                                <a href="tel:00971588070001" class="item-product__link">
                                                    <img src="images/17.png" alt="">
                                                </a>
                                            </li>
                                            <li class="item-product__item">
                                                <a href="https://wa.me/+971588070001" class="item-product__link">
                                                    <img src="images/18.png" alt="">
                                                </a>
                                            </li>
                                            <li class="item-product__item">
                                                <a href="mailto:info@fcproperties.ae" class="item-product__link">
                                                    <img src="images/19.png" alt="">
                                                </a>
                                            </li>
                                        </ul>
                                        <a href="#popup:marquiz_62cd88d4cd9ede004dcabfee" class="item-product__footer-link">
                                            <img src="images/20.png" alt="">
                                            Follow
                                        </a>
                                    </div>
                                </div>
                            </div>
                        
                        </div>
                    </div>';
                }

            } else {
          echo "0 results";
        }
                    
               echo '</div>
            </div>
        </section>';
        ?>
        <?php

                    $sql ="SELECT * from api_data WHERE `offering_type` = 'RS' OR `offering_type` = 'CS' ";
                    $rs_result = $conn->query($sql);
                    $total_records =$rs_result->num_rows;
                    $total_pages=ceil($total_records/$num_per_page);


                        echo '<div class="container xsmall">
                    <div class="pagination custom-pagination">
                        <ul>
                            <li class="papa" style="background-color:#163F8E"><a href="Rent.php?page='.($page - 1) .'"></a></li>
                            <li class="papa active"><a href="#">'; echo $page.'</a></li>
                            <li class="papa" ><a href="Rent.php?page='.($page + 1) .'">'; echo $page + 1 .'</a></li>
                            <li class="papa"><a href="Rent.php?page='.($page + 2) .'">'; echo $page + 2 .'</a></li>
                            <li class="papa"><a href="Rent.php?page='.($page + 3) .'">'; echo $page + 3 .'</a></li>
                            <li class="papa"><a href="Rent.php?page='.($page + 4) .'">'; echo $page + 4 .'</a></li>
                            <li class="papa"><a href="Rent.php?page='.($page + 5) .'">'; echo $page + 5 .'</a></li>
                            <li class="papa" ><a href="Rent.php?page='.($page + 6) .'">'; echo $page + 6 .'</a></li>
                            <li class="papa" ><a href="Rent.php?page='.($page + 7) .'">'; echo $page + 7 .'</a></li>
                            <li class="papa"><a href="Rent.php?page='.($page + 8) .'">'; echo $page + 8 .'</a></li>
                            <li class="papa"><a href="Rent.php?page='.($page + 9) .'">'; echo $page + 9 .'</a></li>
                            <li class="papa" style="background-color:#163F8E"><a href="Rent.php?page='.($page + 1) .'"></a></li>
                        </ul>
                    </div>
                </div>';





            ?>
        <section class="page__map-more map-more">
                <div class="map-more__container">
                    
                    <div class="map-more__body">
                    <div id="map" style='width:100%;height:400px'></div>
                    </div>
                </div>
            </section>
        <div style="margin-top: 40px"></div>
        <section class="page__social-links social-links" data-da=".menu__nav,991.98">
            <a href="tel:971588070001" class="social-links__link social-links__link_phone">
                <img src="https://static3.tildacdn.com/tild6636-6437-4261-b163-373962623765/phone.png" alt="">
                <span class="social-links__text">
                    Phone
                </span>
            </a>
            <a href="https://wa.me/971588070001" class="social-links__link social-links__link_whatsapp">
                <img src="https://static3.tildacdn.com/tild3432-6463-4763-b730-333161663965/WhatsApp-Logo-1-01-c.png"
                    alt="">
                <span class="social-links__text">
                    Whatsapp
                </span>
            </a>
        </section>
        <footer class="footer">
            <div class="footer__top top-footer">
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
                            <a href="mailto:info@fcproperties.ae"
                                class="top-footer-title top-footer__link">info@fcproperties.ae</a>
                        </div>
                        <div class="top-footer__column top-footer__column_big">
                            <ul class="top-footer__social footer-social">
                                <li class="footer-social__item">
                                    <a href="https://www.youtube.com/channel/UCDxXOlXvlvuAUbF9PkbhGLw"
                                        class="footer-social__link">
                                        <img src="./images/youtube (1) (Traced).svg" alt="">
                                    </a>
                                </li>
                                <li class="footer-social__item">
                                    <a href="https://ae.linkedin.com/company/f-c-properties-llc"
                                        class="footer-social__link">
                                        <img src="./images/linkedin (Traced).svg" alt="">
                                    </a>
                                </li>
                                <li class="ooter-social__item">
                                    <a href="https://www.instagram.com/fandcproperties" class="footer-social__link">
                                        <img src="./images/instagram (Traced).svg" alt="">
                                    </a>
                                </li>
                                <li class="ooter-social__item">
                                    <a href="https://www.facebook.com/fcpropertiesdubai" class="footer-social__link">
                                        <img src="./images/facebook (Traced).svg" alt="">
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer__bottom bottom-footer">
                <div class="bottom-footer__container">
                    <ul class="bottom-footer__list">
                        <li class="bottom-footer__item">
                            <a href="index.php" class="bottom-footer__link">
                                Home
                            </a>
                        </li>
                        <li class="bottom-footer__item">
                            <a href="#" class="bottom-footer__link">
                                Off-Plan
                            </a>
                        </li>
                        <li class="bottom-footer__item">
                            <a href="Buy.php" class="bottom-footer__link">
                                Buy
                            </a>
                        </li>
                        <li class="bottom-footer__item">
                            <a href="Rent.php" class="bottom-footer__link">
                                Rent
                            </a>
                        </li>
                        <li class="bottom-footer__item">
                            <a href="#" onclick="Marquiz.showModal('62bafdc70d6747003f10d84b')" class="bottom-footer__link">
                                Sale
                            </a>
                        </li>
                        <li class="bottom-footer__item">
                            <a href="Blogs.php" class="bottom-footer__link">
                                News
                            </a>
                        </li>
                        <li class="bottom-footer__item">
                            <a href="PropertyManager.html" class="bottom-footer__link">
                                Property Management
                            </a>
                        </li>
                        <li class="bottom-footer__item">
                            <a href="https://fandc.homeloans.ae" class="bottom-footer__link">
                                Mortgage
                            </a>
                        </li>
                        <li class="bottom-footer__item">
                            <a href="Services.html" class="bottom-footer__link">
                                All Services
                            </a>
                        </li>
                        <li class="bottom-footer__item">
                            <a href="About.html" class="bottom-footer__link">
                                About Us
                            </a>
                        </li>
                        <li class="bottom-footer__item">
                            <a href="Contact.html" class="bottom-footer__link">
                                Contact Us
                            </a>
                        </li>
                        <li class="bottom-footer__item">
                            <a href="Careers.html" class="bottom-footer__link">
                                Careers
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </footer>
    </div>
    <div id="popup" aria-hidden="true" class="popup popup_form">
      <div class="popup__wrapper">
        <div class="popup__content">
          <img src="./images/popup.png" class="popup__image_form" alt="">
          <div class="popup__body">
            <h3 class="popup__title">For free consultation leave your details</h3>
            <form class="popup__form form-popup" action="#" method="POST">
              <div class="form-popup__column">
                <input autocomplete="off" type="text" name="name" data-error="????????????" placeholder="Your name" class="form-popup__input">
              </div>
              <div class="form-popup__column">
                <input autocomplete="off" type="text" name="phone" data-error="????????????" placeholder="Phone with a country code" class="form-popup__input">
              </div>
              <div class="form-popup__column">
                <input autocomplete="off" type="text" name="email" data-error="????????????" placeholder="E-mail" class="form-popup__input">
              </div>
              <div class="form-popup__column">
                <button type="submit" name="submit_lead" class="form-popup__button">SEND</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div> 
    <div id="video" aria-hidden="true" class="popup popup-video">
        <div class="popup__wrapper">
            <div class="popup__content popup-video__custom">
                <button data-close type="button" class="popup__close popup-video__close"></button>
                <div class="popup__text popup-video__body">
                    
                </div>
                <!-- <iframe width="560" height="315" src="https://www.youtube.com/embed/Q52LJes0LxY" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe> -->
            </div>
        </div>
    </div>
    <script type='text/javascript'>

function initMap() {
    

    var latlng = new google.maps.LatLng(25.119313, 55.2383399);
    var myOptions = {
        zoom: 5,
        center: latlng,
        mapTypeId: google.maps.MapTypeId.ROADMAP
        
    };

    var map = new google.maps.Map(document.getElementById("map"),myOptions);
    var infowindow = new google.maps.InfoWindow(), marker, lat, lng;

    var markerCluster = new MarkerClusterer(map, [], {
imagePath: 'https://developers.google.com/maps/documentation/javascript/examples/markerclusterer/m',


});
    

    <?php
    $query =  $conn->query('SELECT * FROM api_data WHERE offering_type="RR" OR offering_type="CR"');
    if ($query->num_rows > 0) {
           
       while($row3 = $query->fetch_assoc()) {
        $lat = $row3['lng'];
        $lng = $row3['lat'];
          echo "lat=$lat\n";

          echo "lng=$lng\n";
            
            

  echo "var marker = new google.maps.Marker({
                position: new google.maps.LatLng(lat,lng),
                map: map,
                title:\""; echo $row3["title_en"].' <br><br><img src=\"'.$row3['photo1'].'\" width=\'255\' height=\'150\'><br> <strong> AED '.$row3["price"] .' </strong><br> <a href=\'projectNo-'.$row3["property_id"].'-Project-'.$row3["title_en"].'\' target=\'_blank\'> Show Now </a>"';
echo"}); 
            markerCluster.addMarker(marker);
            
            google.maps.event.addListener( marker, 'click', function(e){
                infowindow.setContent(this.title);
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
    <script src="js/jquery/jquery-2.2.4.min.js"></script>
    <!-- Popper js -->
    <script src="js/popper.min.js"></script>
    <!-- Bootstrap js -->
    <script src="js/bootstrap.min.js"></script>
    <!-- Plugins js -->
    <script src="js/plugins.js"></script>
    <script src="js/classy-nav.min.js"></script>
    <script src="js/jquery-ui.min.js"></script>
    <!-- Active js -->
    <script src="js/active.js"></script>
    <!-- Custom scripts -->
    <script src="js/script.js"></script>
</body>

</html>