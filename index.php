<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "propertyfinder";
$conn = new mysqli($servername, $username, $password, $database);


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
        id: '62baba0d3424cd003f323afc',
        autoOpen: false,
        autoOpenFreq: 'once',
        openOnExit: false,
        disableOnMobile: false
    });
    </script>
    <!-- Marquiz script end -->
    <meta charset="utf-8" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="yandex-verification" content="c616aa7c667e6897" />
    <!--metatextblock-->
    <title>F&C properties Real estate agency</title>
    <meta name="description"
        content="Find the property of your dreams! With our experts, you can get acquainted with the large real estate market in Dubai!" />
    <meta name="keywords" content="Property in Dubai, buy property in Dubai" />
    <meta property="og:url" content="https://fandcproperties.ae" />
    <meta property="og:title" content="F&C properties Real estate agency" />
    <meta property="og:description"
        content="Find the property of your dreams! With our experts, you can get acquainted with the large real estate market in Dubai!" />
    <meta property="og:type" content="website" />
    <meta property="og:image" content="images/tild3530-3235-4361-a463-366331663939__1920-1080.jpg" />
    <link rel="canonical" href="https://fandcproperties.ae">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <!--/metatextblock-->
    <meta property="fb:app_id" content="257953674358265" />
    <meta name="format-detection" content="telephone=no" />
    <meta http-equiv="x-dns-prefetch-control" content="on">
    <link rel="dns-prefetch" href="https://ws.tildacdn.com">
    <link rel="shortcut icon" href="images/tild3438-6537-4632-b965-363064353161__favicon.ico" type="image/x-icon" />
    <link rel="apple-touch-icon" href="images/tild6534-3336-4866-a362-613433326265__avatarka.png">
    <link rel="apple-touch-icon" sizes="76x76" href="images/tild6534-3336-4866-a362-613433326265__avatarka.png">
    <link rel="apple-touch-icon" sizes="152x152" href="images/tild6534-3336-4866-a362-613433326265__avatarka.png">
    <link rel="apple-touch-startup-image" href="images/tild6534-3336-4866-a362-613433326265__avatarka.png">
    <meta name="msapplication-TileColor" content="#00398a">
    <meta name="msapplication-TileImage" content="images/tild3763-3965-4231-b564-626235623762__avatarka.png">
    <!-- Assets -->
    <link rel="stylesheet" href="css/tilda-grid-3.0.min.css" type="text/css" media="all" onerror="this.loaderr='y';" />
    <link rel="stylesheet" href="css/tilda-blocks-2.14.css?t=1654153892" type="text/css" media="all"
        onerror="this.loaderr='y';" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/tilda-animation-1.0.min.css" type="text/css" media="all"
        onerror="this.loaderr='y';" />
    <link rel="stylesheet" href="css/tilda-popup-1.1.min.css" type="text/css" media="print" onload="this.media='all';"
        onerror="this.loaderr='y';" />
    <noscript>
        <link rel="stylesheet" href="css/tilda-popup-1.1.min.css" type="text/css" media="all" />
    </noscript>
    <link rel="stylesheet" href="css/tilda-forms-1.0.min.css" type="text/css" media="all" onerror="this.loaderr='y';" />
    <link rel="stylesheet" href="css/tilda-slds-1.4.min.css" type="text/css" media="print" onload="this.media='all';"
        onerror="this.loaderr='y';" />
    <noscript>
        <link rel="stylesheet" href="css/tilda-slds-1.4.min.css" type="text/css" media="all" />
    </noscript>
    <link rel="stylesheet" href="css/tilda-zero-gallery-1.0.min.css" type="text/css" media="all"
        onerror="this.loaderr='y';" />
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <script src="js/jquery-1.10.2.min.js" onerror="this.loaderr='y';"></script>
    <script src="js/tilda-scripts-3.0.min.js" onerror="this.loaderr='y';"></script>
    <script src="js/tilda-blocks-2.8.js?t=1654153892" onerror="this.loaderr='y';"></script>
    <script src="js/lazyload-1.3.min.js" charset="utf-8" async onerror="this.loaderr='y';"></script>
    <script src="js/tilda-animation-1.0.min.js" charset="utf-8" async onerror="this.loaderr='y';"></script>
    <script src="js/tilda-zero-1.0.min.js" charset="utf-8" defer onerror="this.loaderr='y';"></script>
    <script src="js/tilda-t635-typed-1.0.min.js" charset="utf-8" async onerror="this.loaderr='y';"></script>
    <script src="js/tilda-t862-popupstepform-1.0.min.js" charset="utf-8" async onerror="this.loaderr='y';"></script>
    <script src="js/tilda-forms-1.0.min.js" charset="utf-8" async onerror="this.loaderr='y';"></script>
    <script src="js/tilda-slds-1.4.min.js" charset="utf-8" async onerror="this.loaderr='y';"></script>
    <script src="js/hammer.min.js" charset="utf-8" async onerror="this.loaderr='y';"></script>
    <script src="js/tilda-events-1.0.min.js" charset="utf-8" async onerror="this.loaderr='y';"></script>
    <script src="js/tilda-zero-gallery-1.0.min.js" charset="utf-8" async onerror="this.loaderr='y';"></script>
    <script src="js/tilda-zero-forms-1.0.min.js" charset="utf-8" async onerror="this.loaderr='y';"></script>
    <script src="js/tilda-animation-sbs-1.0.min.js" charset="utf-8" async onerror="this.loaderr='y';"></script>
    <!-- Global site tag (gtag.js) - Google Ads: 10888899722 -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=AW-10888899722"></script>
    <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
        dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'AW-10888899722');
    </script>
    <script type="text/javascript">
    window.dataLayer = window.dataLayer || [];
    </script>
    <script type="text/javascript">
    (function() {
        if ((/bot|google|yandex|baidu|bing|msn|duckduckbot|teoma|slurp|crawler|spider|robot|crawling|facebook/i
                .test(navigator.userAgent)) === false && typeof(sessionStorage) != 'undefined' && sessionStorage
            .getItem('visited') !== 'y' && document.visibilityState) {
            var style = document.createElement('style');
            style.type = 'text/css';
            style.innerHTML =
                '@media screen and (min-width: 980px) {.t-records {opacity: 0;}.t-records_animated {-webkit-transition: opacity ease-in-out .2s;-moz-transition: opacity ease-in-out .2s;-o-transition: opacity ease-in-out .2s;transition: opacity ease-in-out .2s;}.t-records.t-records_visible {opacity: 1;}}';
            document.getElementsByTagName('head')[0].appendChild(style);

            function t_setvisRecs() {
                var alr = document.querySelectorAll('.t-records');
                Array.prototype.forEach.call(alr, function(el) {
                    el.classList.add("t-records_animated");
                });
                setTimeout(function() {
                    Array.prototype.forEach.call(alr, function(el) {
                        el.classList.add("t-records_visible");
                    });
                    sessionStorage.setItem("visited", "y");
                }, 400);
            }
            document.addEventListener('DOMContentLoaded', t_setvisRecs);
        }
    })();
    </script>
    <link rel="stylesheet" href="nicepage.css" media="screen">
    <link rel="stylesheet" href="Home.css" media="screen">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script class="u-script" type="text/javascript" src="jquery.js" defer=""></script>
    <script class="u-script" type="text/javascript" src="nicepage.js" defer=""></script>
    <meta name="generator" content="Nicepage 4.12.5, nicepage.com">
    <link id="u-theme-google-font" rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i">
    <link id="u-page-google-font" rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Playfair+Display:400,400i,500,500i,600,600i,700,700i,800,800i,900,900i|Montserrat:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
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
    <link rel="stylesheet" href="style.css">
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
                            </li>
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
                                    <div class="menu__sub-blog menu__sub-blog_min" style="min-width: 10px !important;max-height: 5px !important;">
                                        <ul class="menu__sub-list">
                                            <li class="menu__sub-item" style="background-color:#fff;">
                                                <a href="https://kvartirivdubai.ru/" class="menu__sub-flag" style="padding: 5px 5px !important;">
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
        <div class="main-block main-block_image">
            <div class="container ">
                <div class="main-block__body">
                    <h1 class="main-block__title">
                        <button data-popup="#video" data-popup-youtube="Q52LJes0LxY" class="main-block__youtube">
                            Find your home
                            <svg width="18" height="18" viewBox="0 0 18 18" fill="#163F8E" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M9 18C13.9706 18 18 13.9706 18 9C18 4.02944 13.9706 0 9 0C4.02944 0 0 4.02944 0 9C0 13.9706 4.02944 18 9 18ZM7.71484 7.07178L12.2148 9.32178L7.71484 11.5718V7.07178Z" fill="#163F8E"/>
                            </svg>
                        </button>
                    </h1>
                    <div class="main-block__search">
                        <div data-tabs class="main-search-form__tabs">
                            <nav data-tabs-titles class="main-search-form__navigation">
                                <button type="button" onclick="location.href='Buy.php'" class="main-search-form__title _tab-active">Buy</button>
                                <button type="button" onclick="location.href='Rent.php'" class="main-search-form__title">Rent</button>
                                <button type="button"  onclick="location.href='off-plan/'" class="main-search-form__title">Off-Plan</button>
                            </nav>
                            <div class="forms row">
                                <div class="col-md-3 col-sm-5 my-2"> <div class="search-form__column search-form__column_select">
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
                                        </div></div>
                                <div class="col-md-9 col-sm-7 my-2">
                                     <div class="search-form__column search-form__column_input search_button" style="height: 2.rem;">
                                            <svg viewBox="4 4 15 15" class="search-form__icon">
                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                    d="M14.7399 13.6792L18.7806 17.7197C19.0735 18.0126 19.0735 18.4875 18.7806 18.7804C18.4877 19.0733 18.0128 19.0733 17.7199 18.7804L13.6792 14.7399C12.6632 15.5297 11.3865 16 10 16C6.68629 16 4 13.3137 4 10C4 6.68629 6.68629 4 10 4C13.3137 4 16 6.68629 16 10C16 11.3865 15.5297 12.6632 14.7399 13.6792ZM10 14.5C12.4853 14.5 14.5 12.4853 14.5 10C14.5 7.51472 12.4853 5.5 10 5.5C7.51472 5.5 5.5 7.51472 5.5 10C5.5 12.4853 7.51472 14.5 10 14.5Z">
                                                </path>
                                            </svg>
                                            <input name="city" id="city" type="text" class="search-form__input"
                                                placeholder="City, community or building" autocomplete="off">
                                                <div class="search-form__column search-form__column_button search_buttonn">
                                            <button type="submit" id="submit" name="submit"
                                                class="search-form__button " >
                                                <svg width="15" height="15" viewBox="0 0 15 15">
                                                    <path fill="white" fill-rule="evenodd" clip-rule="evenodd"
                                                        d="M10.7399 9.67922L14.7806 13.7197C15.0735 14.0126 15.0735 14.4875 14.7806 14.7804C14.4877 15.0733 14.0128 15.0733 13.7199 14.7804L9.67925 10.7399C8.66323 11.5297 7.38654 12 6 12C2.68629 12 0 9.31371 0 6C0 2.68629 2.68629 0 6 0C9.31371 0 12 2.68629 12 6C12 7.38653 11.5297 8.66321 10.7399 9.67922ZM6 10.5C8.48528 10.5 10.5 8.48528 10.5 6C10.5 3.51472 8.48528 1.5 6 1.5C3.51472 1.5 1.5 3.51472 1.5 6C1.5 8.48528 3.51472 10.5 6 10.5Z">
                                                    </path>
                                                </svg>
                                                <span class="px-2 search-form__button-text">
                                                Search
                                                </span>
                                                   
                                                
                                            </button>
                                        </div>
                                            </div>
                                      
                                    </div>
                                    <div class="col-md-3  col-sm-6 my-2">
                                    <div class="search-form__column search-form__column_select">
                                            <select name="area" id="area" class="search-form__select">
                                                <option value="%" selected>Developer</option>
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
                                    </div>
                                <div class="col-md-3 col-sm-6 my-2"><div class="search-form__column search-form__column_select">
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
                                        </div></div>
                                <div class="col-md-3 col-sm-6 my-2">  <div
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
                                            </div></div>
                                <div class="col-md-3 col-sm-6 my-2"><div
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
                                        </div></div>
                                
                                
                            </div>
                            <!-- <div data-tabs-body class="main-search-form__content">
                                <div class="main-search-form__body search-form" hidden>
                                    <form action="Search.php" method="POST" class="search-form__form">
                                        <div class="search-form__column search-form__column_input" style="height: 2.rem;">
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
                            </div> -->
                        </div>
                    </div>
                </div>
            </div>
            <!-- <div class="main-block__image">
                <picture>
                    <source media="(min-width: 500.98px)" srcset="./images/8.png">
                    <source media="(max-width: 500.98px)" srcset="./images/05-2.webp">
                    <img src="./images/8.png" alt="">
                </picture>
            </div> -->
        </div>
        <div id="rec446213466" class="r t-rec t-rec_pt_0" style="padding-top:0px; " data-animationappear="off"
            data-record-type="396">
            <!-- T396 -->
            <style>
            #rec446213466 .t396__artboard {
                height: 507px;
                background-color: #ffffff;
                overflow: visible;
            }

            #rec446213466 .t396__filter {
                height: 507px;
            }

            #rec446213466 .t396__carrier {
                height: 507px;
                background-position: center center;
                background-attachment: scroll;
                background-size: cover;
                background-repeat: no-repeat;
            }

            @media screen and (max-width: 1199px) {
                #rec446213466 .t396__artboard {
                    height: 417px;
                }

                #rec446213466 .t396__filter {
                    height: 417px;
                }

                #rec446213466 .t396__carrier {
                    height: 417px;
                    background-attachment: scroll;
                }
            }

            @media screen and (max-width: 959px) {
                #rec446213466 .t396__artboard {
                    height: 267px;
                }

                #rec446213466 .t396__filter {
                    height: 267px;
                }

                #rec446213466 .t396__carrier {
                    height: 267px;
                }
            }

            @media screen and (max-width: 639px) {
                #rec446213466 .t396__artboard {
                    height: 567px;
                }

                #rec446213466 .t396__filter {
                    height: 567px;
                }

                #rec446213466 .t396__carrier {
                    height: 567px;
                }
            }

            @media screen and (max-width: 479px) {
                #rec446213466 .t396__artboard {
                    height: 357px;
                }

                #rec446213466 .t396__filter {
                    height: 357px;
                }

                #rec446213466 .t396__carrier {
                    height: 357px;
                }
            }

            #rec446213466 .tn-elem[data-elem-id="1652426055708"] {
                color: #000000;
                z-index: 6;
                top: 42px;
                left: calc(50% - 600px + 419px);
                width: 362px;
            }

            #rec446213466 .tn-elem[data-elem-id="1652426055708"] .tn-atom {
                color: #000000;
                font-size: 50px;
                font-family: 'Mix', Arial, sans-serif;
                line-height: 1.55;
                font-weight: 600;
                background-position: center center;
                border-color: transparent;
                border-style: solid;
            }

            @media screen and (max-width: 1199px) {
                #rec446213466 .tn-elem[data-elem-id="1652426055708"] {
                    top: 30px;
                    left: calc(50% - 480px + 299px);
                }

                #rec446213466 .tn-elem[data-elem-id="1652426055708"] {
                    text-align: center;
                }

                #rec446213466 .tn-elem[data-elem-id="1652426055708"] .tn-atom {
                    font-size: 40px;
                }
            }

            @media screen and (max-width: 959px) {
                #rec446213466 .tn-elem[data-elem-id="1652426055708"] {
                    top: 15px;
                    left: calc(50% - 320px + 140px);
                }
            }

            @media screen and (max-width: 639px) {
                #rec446213466 .tn-elem[data-elem-id="1652426055708"] {
                    top: 10px;
                    left: calc(50% - 240px + 59px);
                }
            }

            @media screen and (max-width: 479px) {
                #rec446213466 .tn-elem[data-elem-id="1652426055708"] {
                    top: 2px;
                    left: calc(50% - 160px + -21px);
                }

                #rec446213466 .tn-elem[data-elem-id="1652426055708"] .tn-atom {
                    font-size: 30px;
                }
            }

            #rec446213466 .tn-elem[data-elem-id="1653034629878"] {
                z-index: 5;
                top: 70px;
                left: calc(50% - 600px + 829px);
                width: 458px;
            }

            #rec446213466 .tn-elem[data-elem-id="1653034629878"] .tn-atom {
                background-position: center center;
                border-color: transparent;
                border-style: solid;
            }

            @media screen and (max-width: 1199px) {
                #rec446213466 .tn-elem[data-elem-id="1653034629878"] {
                    top: 70px;
                    left: calc(50% - 480px + 659px);
                    width: 366px;
                }
            }

            @media screen and (max-width: 959px) {
                #rec446213466 .tn-elem[data-elem-id="1653034629878"] {
                    top: 45px;
                    left: calc(50% - 320px + 442px);
                    width: 239px;
                }
            }

            @media screen and (max-width: 639px) {
                #rec446213466 .tn-elem[data-elem-id="1653034629878"] {
                    top: 255px;
                    left: calc(50% - 240px + 185px);
                    width: 349px;
                }
            }

            @media screen and (max-width: 479px) {
                #rec446213466 .tn-elem[data-elem-id="1653034629878"] {
                    top: 162px;
                    left: calc(50% - 160px + 122px);
                    width: 228px;
                }
            }

            #rec446213466 .tn-elem[data-elem-id="1653034617883"] {
                z-index: 4;
                top: 70px;
                left: calc(50% - 600px + 525px);
                width: 458px;
            }

            #rec446213466 .tn-elem[data-elem-id="1653034617883"] .tn-atom {
                background-position: center center;
                border-color: transparent;
                border-style: solid;
            }

            @media screen and (max-width: 1199px) {
                #rec446213466 .tn-elem[data-elem-id="1653034617883"] {
                    top: 70px;
                    left: calc(50% - 480px + 418px);
                    width: 366px;
                }
            }

            @media screen and (max-width: 959px) {
                #rec446213466 .tn-elem[data-elem-id="1653034617883"] {
                    top: 45px;
                    left: calc(50% - 320px + 282px);
                    width: 240px;
                }
            }

            @media screen and (max-width: 639px) {
                #rec446213466 .tn-elem[data-elem-id="1653034617883"] {
                    top: 255px;
                    left: calc(50% - 240px + -47px);
                    width: 351px;
                }
            }

            @media screen and (max-width: 479px) {
                #rec446213466 .tn-elem[data-elem-id="1653034617883"] {
                    top: 162px;
                    left: calc(50% - 160px + -29px);
                    width: 229px;
                }
            }

            #rec446213466 .tn-elem[data-elem-id="1653034605129"] {
                z-index: 3;
                top: 70px;
                left: calc(50% - 600px + 223px);
                width: 458px;
            }

            #rec446213466 .tn-elem[data-elem-id="1653034605129"] .tn-atom {
                background-position: center center;
                border-color: transparent;
                border-style: solid;
            }

            @media screen and (max-width: 1199px) {
                #rec446213466 .tn-elem[data-elem-id="1653034605129"] {
                    top: 70px;
                    left: calc(50% - 480px + 176px);
                    width: 366px;
                }
            }

            @media screen and (max-width: 959px) {
                #rec446213466 .tn-elem[data-elem-id="1653034605129"] {
                    top: 45px;
                    left: calc(50% - 320px + 123px);
                    width: 239px;
                }
            }

            @media screen and (max-width: 639px) {
                #rec446213466 .tn-elem[data-elem-id="1653034605129"] {
                    top: 20px;
                    left: calc(50% - 240px + 185px);
                    width: 348px;
                }
            }

            @media screen and (max-width: 479px) {
                #rec446213466 .tn-elem[data-elem-id="1653034605129"] {
                    top: 10px;
                    left: calc(50% - 160px + 122px);
                    width: 227px;
                }
            }

            #rec446213466 .tn-elem[data-elem-id="1653034319790"] {
                z-index: 2;
                top: 70px;
                left: calc(50% - 600px + -77px);
                width: 458px;
            }

            #rec446213466 .tn-elem[data-elem-id="1653034319790"] .tn-atom {
                background-position: center center;
                border-color: transparent;
                border-style: solid;
            }

            @media screen and (max-width: 1199px) {
                #rec446213466 .tn-elem[data-elem-id="1653034319790"] {
                    top: 70px;
                    left: calc(50% - 480px + -62px);
                    width: 366px;
                }
            }

            @media screen and (max-width: 959px) {
                #rec446213466 .tn-elem[data-elem-id="1653034319790"] {
                    top: 45px;
                    left: calc(50% - 320px + -33px);
                    width: 239px;
                }
            }

            @media screen and (max-width: 639px) {
                #rec446213466 .tn-elem[data-elem-id="1653034319790"] {
                    top: 20px;
                    left: calc(50% - 240px + -46px);
                    width: 348px;
                }
            }

            @media screen and (max-width: 479px) {
                #rec446213466 .tn-elem[data-elem-id="1653034319790"] {
                    top: 10px;
                    left: calc(50% - 160px + -28px);
                    width: 227px;
                }
            }
            </style>
            <div class='t396'>
                <div class="t396__artboard" data-artboard-recid="446213466" data-artboard-height="507"
                    data-artboard-height-res-960="417" data-artboard-height-res-640="267"
                    data-artboard-height-res-480="567" data-artboard-height-res-320="357" data-artboard-height_vh=""
                    data-artboard-valign="center" data-artboard-upscale="grid" data-artboard-ovrflw="visible">
                    <div class="t396__carrier" data-artboard-recid="446213466"></div>
                    <div class="t396__filter" data-artboard-recid="446213466"></div>
                    <div class='t396__elem tn-elem tn-elem__4462134661652426055708' data-elem-id='1652426055708'
                        data-elem-type='text' data-field-top-value="42" data-field-top-res-960-value="30"
                        data-field-top-res-640-value="15" data-field-top-res-480-value="10"
                        data-field-top-res-320-value="2" data-field-left-value="419" data-field-left-res-960-value="299"
                        data-field-left-res-640-value="140" data-field-left-res-480-value="59"
                        data-field-left-res-320-value="-21" data-field-width-value="362" data-field-axisy-value="top"
                        data-field-axisx-value="left" data-field-container-value="grid" data-field-topunits-value="px"
                        data-field-leftunits-value="px" data-field-heightunits-value=""
                        data-field-widthunits-value="px">
                        <h2 class='tn-atom' field='tn_text_1652426055708'>Our Advantages</h2>
                    </div>
                    <div class='t396__elem tn-elem tn-elem__4462134661653034629878' data-elem-id='1653034629878'
                        data-elem-type='image' data-field-top-value="70" data-field-top-res-960-value="70"
                        data-field-top-res-640-value="45" data-field-top-res-480-value="255"
                        data-field-top-res-320-value="162" data-field-left-value="829"
                        data-field-left-res-960-value="659" data-field-left-res-640-value="442"
                        data-field-left-res-480-value="185" data-field-left-res-320-value="122"
                        data-field-width-value="458" data-field-width-res-960-value="366"
                        data-field-width-res-640-value="239" data-field-width-res-480-value="349"
                        data-field-width-res-320-value="228" data-field-axisy-value="top" data-field-axisx-value="left"
                        data-field-container-value="grid" data-field-topunits-value="px" data-field-leftunits-value="px"
                        data-field-heightunits-value="" data-field-widthunits-value="px"
                        data-field-filewidth-value="599" data-field-fileheight-value="589">
                        <div class='tn-atom'>
                            <img class='tn-atom__img t-img'
                                data-original='images/tild6331-3865-4034-b238-393532383930__4.png'
                                alt='5 billion the total amount of real estate sold by us'
                                imgfield='tn_img_1653034629878'>
                        </div>
                    </div>
                    <div class='t396__elem tn-elem tn-elem__4462134661653034617883' data-elem-id='1653034617883'
                        data-elem-type='image' data-field-top-value="70" data-field-top-res-960-value="70"
                        data-field-top-res-640-value="45" data-field-top-res-480-value="255"
                        data-field-top-res-320-value="162" data-field-left-value="525"
                        data-field-left-res-960-value="418" data-field-left-res-640-value="282"
                        data-field-left-res-480-value="-47" data-field-left-res-320-value="-29"
                        data-field-width-value="458" data-field-width-res-960-value="366"
                        data-field-width-res-640-value="240" data-field-width-res-480-value="351"
                        data-field-width-res-320-value="229" data-field-axisy-value="top" data-field-axisx-value="left"
                        data-field-container-value="grid" data-field-topunits-value="px" data-field-leftunits-value="px"
                        data-field-heightunits-value="" data-field-widthunits-value="px"
                        data-field-filewidth-value="614" data-field-fileheight-value="589">
                        <div class='tn-atom'>
                            <img class='tn-atom__img t-img'
                                data-original='images/tild6461-6630-4862-b130-303638633936__3.png'
                                alt='Emaar, Meraas, Dubai Properties, Real Estate' imgfield='tn_img_1653034617883'>
                        </div>
                    </div>
                    <div class='t396__elem tn-elem tn-elem__4462134661653034605129' data-elem-id='1653034605129'
                        data-elem-type='image' data-field-top-value="70" data-field-top-res-960-value="70"
                        data-field-top-res-640-value="45" data-field-top-res-480-value="20"
                        data-field-top-res-320-value="10" data-field-left-value="223"
                        data-field-left-res-960-value="176" data-field-left-res-640-value="123"
                        data-field-left-res-480-value="185" data-field-left-res-320-value="122"
                        data-field-width-value="458" data-field-width-res-960-value="366"
                        data-field-width-res-640-value="239" data-field-width-res-480-value="348"
                        data-field-width-res-320-value="227" data-field-axisy-value="top" data-field-axisx-value="left"
                        data-field-container-value="grid" data-field-topunits-value="px" data-field-leftunits-value="px"
                        data-field-heightunits-value="" data-field-widthunits-value="px"
                        data-field-filewidth-value="614" data-field-fileheight-value="589">
                        <div class='tn-atom'>
                            <img class='tn-atom__img t-img'
                                data-original='images/tild6532-6366-4038-a362-366361343938__2.png'
                                alt='We speak the most popular languages' imgfield='tn_img_1653034605129'>
                        </div>
                    </div>
                    <div class='t396__elem tn-elem tn-elem__4462134661653034319790' data-elem-id='1653034319790'
                        data-elem-type='image' data-field-top-value="70" data-field-top-res-960-value="70"
                        data-field-top-res-640-value="45" data-field-top-res-480-value="20"
                        data-field-top-res-320-value="10" data-field-left-value="-77"
                        data-field-left-res-960-value="-62" data-field-left-res-640-value="-33"
                        data-field-left-res-480-value="-46" data-field-left-res-320-value="-28"
                        data-field-width-value="458" data-field-width-res-960-value="366"
                        data-field-width-res-640-value="239" data-field-width-res-480-value="348"
                        data-field-width-res-320-value="227" data-field-axisy-value="top" data-field-axisx-value="left"
                        data-field-container-value="grid" data-field-topunits-value="px" data-field-leftunits-value="px"
                        data-field-heightunits-value="" data-field-widthunits-value="px"
                        data-field-filewidth-value="614" data-field-fileheight-value="589">
                        <div class='tn-atom'>
                            <img class='tn-atom__img t-img'
                                data-original='images/tild3634-3435-4138-b562-633430666564__1.png'
                                alt='Property management, Mortgage' imgfield='tn_img_1653034319790'>
                        </div>
                    </div>
                </div>
            </div>
            <script>
            t_onReady(function() {
                t_onFuncLoad('t396_init', function() {
                    t396_init('446213466');
                });
            });
            </script>
            <!-- /T396 -->
        </div>
        <section class="u-clearfix u-section-2" id="sec-ab84">
            <dev id="allrecords" data-tilda-export="yes" class="t-records" data-hook="blocks-collection-content-node"
                data-tilda-project-id="4671196" data-tilda-page-id="25667924"
                data-tilda-formskey="dab0e38ba2b6682beae68fdd8e05cb98" data-tilda-imgoptimoff="yes"
                data-tilda-lazy="yes" data-tilda-project-headcode="yes"></dev>
            <div id="rec446480144" class="r t-rec" style=" " data-animationappear="off" data-record-type="862">
                <!-- t862 -->
                <div class="t862">
                    <div class="t-popup" data-tooltip-hook="#popup:stepform">
                        <div class="t-popup__close">
                            <div class="t-popup__close-wrapper">
                                <svg role="presentation" class="t-popup__close-icon" width="23px" height="23px"
                                    viewBox="0 0 23 23" version="1.1" xmlns="http://www.w3.org/2000/svg"
                                    xmlns:xlink="http://www.w3.org/1999/xlink">
                                    <g stroke="none" stroke-width="1" fill="#fff" fill-rule="evenodd">
                                        <rect
                                            transform="translate(11.313708, 11.313708) rotate(-45.000000) translate(-11.313708, -11.313708) "
                                            x="10.3137085" y="-3.6862915" width="2" height="30"></rect>
                                        <rect
                                            transform="translate(11.313708, 11.313708) rotate(-315.000000) translate(-11.313708, -11.313708) "
                                            x="10.3137085" y="-3.6862915" width="2" height="30"></rect>
                                    </g>
                                </svg>
                            </div>
                        </div>
                        <div class="t-popup__container t-width t-width_10">
                            <div class="t862__wrapper">
                                <div class="t862__quiz t862__quiz-preview t862__quiz_fixedheight" style="">
                                    <div class="t862__quiz-wrapper t862__quiz-published">
                                        <div class="t862__quiz-description-wrapper" style="">
                                            <div class="t862__quiz-description-block">
                                                <div class="t-descr t-descr_xxs t862__quiz-description" style="">
                                                    <div class="t862__quiz-description-title">
                                                        <svg role="presentation" version="1.1" id="Слой_1"
                                                            xmlns="http://www.w3.org/2000/svg"
                                                            xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                                            viewBox="0 0 100 100"
                                                            style="enable-background:new 0 0 100 100;"
                                                            xml:space="preserve">
                                                            <rect x="27.5" y="4.1" class="st61" width="56.5"
                                                                height="73.5" />
                                                            <line class="st61" x1="41.5" y1="22.1" x2="70.6"
                                                                y2="22.1" />
                                                            <line class="st61" x1="41.5" y1="38.8" x2="70.6"
                                                                y2="38.8" />
                                                            <line class="st61" x1="41.5" y1="55.5" x2="70.6"
                                                                y2="55.5" />
                                                            <polyline class="st61"
                                                                points="66.4,77.6 66.4,95.6 9.8,95.6 9.8,22.1 27.5,22.1 " />
                                                        </svg>
                                                        <span class="t862__quiz-description-text" field="descr">Take the
                                                            quiz and find out the best destination for your
                                                            vacation.</span>
                                                    </div>
                                                    <div class="t862__quiz-description-counter"></div>
                                                </div>
                                            </div>
                                            <div class="t862__result-title-block">
                                                <div class="t-descr t-descr_xl t862__result-title" style=""
                                                    field="descr2">Fill out the form and we will contact you soon.</div>
                                            </div>
                                            <div class="t862__progressbar">
                                                <div class="t862__progress"></div>
                                            </div>
                                        </div>
                                        <div
                                            class="t862__quiz-form-wrapper t862__quiz-form-wrapper_newcapturecondition">
                                            <form id="form446480144" name='form446480144' role="form" action=''
                                                method='POST' data-formactiontype="2" data-inputbox=".t-input-group"
                                                class="t-form js-form-proccess t-form_inputs-total_6 t-form_bbonly "
                                                data-success-callback="t862_onSuccess">
                                                <input type="hidden" name="formservices[]"
                                                    value="09af3081ceb2cc84334000ca4200f643"
                                                    class="js-formaction-services">
                                                <input type="hidden" name="formservices[]"
                                                    value="cee09f21547ebb13dd7cd5f5b7885d4e"
                                                    class="js-formaction-services">
                                                <div class="js-successbox t-form__successbox t-text t-text_md"
                                                    style="display:none;"></div>
                                                <div class="t-form__inputsbox">
                                                    <div class="t-input-group t-input-group_rd"
                                                        data-input-lid="1534434218619">
                                                        <div class="t-input-title t-descr t-descr_md"
                                                            data-redactor-toolbar="no" field="li_title__1534434218619"
                                                            style="">How many rooms are you interested in?</div>
                                                        <div class="t-input-block">
                                                            <div class="t-radio__wrapper">
                                                                <label class="t-radio__control t-text t-text_xs"
                                                                    style="">
                                                                    <input type="radio"
                                                                        name="How many rooms are you interested in"
                                                                        value="Studio" class="t-radio js-tilda-rule"
                                                                        data-tilda-req="1">
                                                                    <div class="t-radio__indicator"
                                                                        style="border-color:#000000"></div>Studio
                                                                </label>
                                                                <label class="t-radio__control t-text t-text_xs"
                                                                    style="">
                                                                    <input type="radio"
                                                                        name="How many rooms are you interested in"
                                                                        value="1 bedroom" class="t-radio js-tilda-rule"
                                                                        data-tilda-req="1">
                                                                    <div class="t-radio__indicator"
                                                                        style="border-color:#000000"></div>1 bedroom
                                                                </label>
                                                                <label class="t-radio__control t-text t-text_xs"
                                                                    style="">
                                                                    <input type="radio"
                                                                        name="How many rooms are you interested in"
                                                                        value="2 bedroom" class="t-radio js-tilda-rule"
                                                                        data-tilda-req="1">
                                                                    <div class="t-radio__indicator"
                                                                        style="border-color:#000000"></div>2 bedroom
                                                                </label>
                                                                <label class="t-radio__control t-text t-text_xs"
                                                                    style="">
                                                                    <input type="radio"
                                                                        name="How many rooms are you interested in"
                                                                        value="3 bedroom" class="t-radio js-tilda-rule"
                                                                        data-tilda-req="1">
                                                                    <div class="t-radio__indicator"
                                                                        style="border-color:#000000"></div>3 bedroom
                                                                </label>
                                                                <label class="t-radio__control t-text t-text_xs"
                                                                    style="">
                                                                    <input type="radio"
                                                                        name="How many rooms are you interested in"
                                                                        value="4 bedroom" class="t-radio js-tilda-rule"
                                                                        data-tilda-req="1">
                                                                    <div class="t-radio__indicator"
                                                                        style="border-color:#000000"></div>4 bedroom
                                                                </label>
                                                                <label class="t-radio__control t-text t-text_xs"
                                                                    style="">
                                                                    <input type="radio"
                                                                        name="How many rooms are you interested in"
                                                                        value="Townhouse" class="t-radio js-tilda-rule"
                                                                        data-tilda-req="1">
                                                                    <div class="t-radio__indicator"
                                                                        style="border-color:#000000"></div>Townhouse
                                                                </label>
                                                                <label class="t-radio__control t-text t-text_xs"
                                                                    style="">
                                                                    <input type="radio"
                                                                        name="How many rooms are you interested in"
                                                                        value="Villa" class="t-radio js-tilda-rule"
                                                                        data-tilda-req="1">
                                                                    <div class="t-radio__indicator"
                                                                        style="border-color:#000000"></div>Villa
                                                                </label>
                                                                <style>
                                                                #rec446480144 .t-radio__indicator:after {
                                                                    background: #000000;
                                                                }
                                                                </style>
                                                            </div>
                                                            <div class="t-input-error"></div>
                                                        </div>
                                                    </div>
                                                    <div class="t-input-group t-input-group_ri"
                                                        data-input-lid="1534435425911">
                                                        <div class="t-input-title t-descr t-descr_md"
                                                            data-redactor-toolbar="no" field="li_title__1534435425911"
                                                            style="">In which area are you looking for a property?</div>
                                                        <div class="t-input-block">
                                                            <div class="t-img-select__container"
                                                                data-check-bgcolor="#000000">
                                                                <label class="t-img-select__control">
                                                                    <input type="radio"
                                                                        name="In which area are you looking for a property"
                                                                        value="Dubai Marina"
                                                                        class="t-img-select js-tilda-rule"
                                                                        data-tilda-req="1">
                                                                    <div class="t-bgimg t-img-select__indicator t-img-select__indicator_1-1"
                                                                        data-original="images/tild6137-3965-4531-b433-356661353161__dubai_marina.jpg"
                                                                        style="background-image:url('images/tild6137-3965-4531-b433-356661353161__-__resizeb__20x__dubai_marina.jpg');">
                                                                    </div>
                                                                    <div class="t-img-select__text t-text t-text_xs">
                                                                        Dubai Marina
                                                                    </div>
                                                                </label>
                                                                <label class="t-img-select__control">
                                                                    <input type="radio"
                                                                        name="In which area are you looking for a property"
                                                                        value="Downtown "
                                                                        class="t-img-select js-tilda-rule"
                                                                        data-tilda-req="1">
                                                                    <div class="t-bgimg t-img-select__indicator t-img-select__indicator_1-1"
                                                                        data-original="images/tild6636-6133-4462-a233-646632616533__downtown_dubai.jpg"
                                                                        style="background-image:url('images/tild6636-6133-4462-a233-646632616533__-__resizeb__20x__downtown_dubai.jpg');">
                                                                    </div>
                                                                    <div class="t-img-select__text t-text t-text_xs">
                                                                        Downtown
                                                                    </div>
                                                                </label>
                                                                <label class="t-img-select__control">
                                                                    <input type="radio"
                                                                        name="In which area are you looking for a property"
                                                                        value="Palm Jumeirah"
                                                                        class="t-img-select js-tilda-rule"
                                                                        data-tilda-req="1">
                                                                    <div class="t-bgimg t-img-select__indicator t-img-select__indicator_1-1"
                                                                        data-original="images/tild6166-3133-4634-b535-646463366431__palm_jumeirah.jpg"
                                                                        style="background-image:url('images/tild6166-3133-4634-b535-646463366431__-__resizeb__20x__palm_jumeirah.jpg');">
                                                                    </div>
                                                                    <div class="t-img-select__text t-text t-text_xs">
                                                                        Palm Jumeirah
                                                                    </div>
                                                                </label>
                                                                <label class="t-img-select__control">
                                                                    <input type="radio"
                                                                        name="In which area are you looking for a property"
                                                                        value="Jumeirah"
                                                                        class="t-img-select js-tilda-rule"
                                                                        data-tilda-req="1">
                                                                    <div class="t-bgimg t-img-select__indicator t-img-select__indicator_1-1"
                                                                        data-original="images/tild3739-3034-4032-b830-393531366331__jumeirah.jpeg"
                                                                        style="background-image:url('images/tild3739-3034-4032-b830-393531366331__-__resizeb__20x__jumeirah.jpeg');">
                                                                    </div>
                                                                    <div class="t-img-select__text t-text t-text_xs">
                                                                        Jumeirah
                                                                    </div>
                                                                </label>
                                                                <label class="t-img-select__control">
                                                                    <input type="radio"
                                                                        name="In which area are you looking for a property"
                                                                        value="Al-Barsha"
                                                                        class="t-img-select js-tilda-rule"
                                                                        data-tilda-req="1">
                                                                    <div class="t-bgimg t-img-select__indicator t-img-select__indicator_1-1"
                                                                        data-original="images/tild6562-3031-4336-a162-656534653737__al-barsha.jpg"
                                                                        style="background-image:url('images/tild6562-3031-4336-a162-656534653737__-__resizeb__20x__al-barsha.jpg');">
                                                                    </div>
                                                                    <div class="t-img-select__text t-text t-text_xs">
                                                                        Al-Barsha
                                                                    </div>
                                                                </label>
                                                            </div>
                                                            <link rel="stylesheet" href="css/tilda-img-select-1.0.css">
                                                            <script src="../js/tilda-img-select-1.0.min.js"></script>
                                                            <script type="text/javascript">
                                                            t_onReady(function() {
                                                                try {
                                                                    t_onFuncLoad(
                                                                        't_input_imgselect_invertColor',
                                                                        function() {
                                                                            t_input_imgselect_invertColor(
                                                                                '446480144');
                                                                        });
                                                                } catch (error) {
                                                                    console.error(error);
                                                                }
                                                            });
                                                            </script>
                                                            <style>
                                                            #rec446480144 .t-img-select__indicator:after {
                                                                background-color: #000000;
                                                            }
                                                            </style>
                                                            <div class="t-input-error"></div>
                                                        </div>
                                                    </div>
                                                    <div class="t-input-group t-input-group_rg"
                                                        data-input-lid="1534434222621">
                                                        <div class="t-input-title t-descr t-descr_md"
                                                            data-redactor-toolbar="no" field="li_title__1534434222621"
                                                            style="">The planned cost of the apartment</div>
                                                        <div class="t-input-block">
                                                            <div class="t-range__wrapper">
                                                                <input name="The planned cost of the apartment"
                                                                    class="t-range js-tilda-rule" type="range"
                                                                    min="500000" max="20000000" step="1"
                                                                    data-range-color="#000000">
                                                                <div class="t-range__value-txt t-descr t-descr_xxs"
                                                                    style="display: none;"></div>
                                                                <div class="t-range__interval-txt-wrapper">
                                                                    <div
                                                                        class="t-range__interval-txt t-range__interval-txt_min t-descr t-descr_xxs">
                                                                        500000</div>
                                                                    <div
                                                                        class="t-range__interval-txt t-range__interval-txt_max t-descr t-descr_xxs">
                                                                        20000000</div>
                                                                </div>
                                                            </div>
                                                            <link rel="stylesheet" href="css/tilda-range-1.0.min.css">
                                                            <script src="../js/tilda-range-1.0.min.js"></script>
                                                            <script type="text/javascript">
                                                            t_onReady(function() {
                                                                try {
                                                                    t_onFuncLoad('t_input_range_init',
                                                                        function() {
                                                                            t_input_range_init('446480144',
                                                                                '1534434222621');
                                                                        });
                                                                } catch (error) {
                                                                    console.error(error);
                                                                }
                                                            });
                                                            </script>
                                                            <style>
                                                            #rec446480144 .t-range::-webkit-slider-thumb {
                                                                background: #000000;
                                                            }

                                                            #rec446480144 .t-range::-moz-range-thumb {
                                                                background: #000000;
                                                            }

                                                            #rec446480144 .t-range::-ms-thumb {
                                                                background: #000000;
                                                            }
                                                            </style>
                                                            <div class="t-input-error"></div>
                                                        </div>
                                                    </div>
                                                    <div class="t-input-group t-input-group_nm"
                                                        data-input-lid="1534435412060">
                                                        <div class="t-input-title t-descr t-descr_md"
                                                            data-redactor-toolbar="no" field="li_title__1534435412060"
                                                            style="">Your name</div>
                                                        <div class="t-input-block">
                                                            <input type="text" autocomplete="name" name="Name"
                                                                class="t-input js-tilda-rule t-input_bbonly" value=""
                                                                placeholder="John Smith" data-tilda-req="1"
                                                                data-tilda-rule="name"
                                                                style="color:#000000; border:1px solid #b3b3b3; ">
                                                            <div class="t-input-error"></div>
                                                        </div>
                                                    </div>
                                                    <div class="t-input-group t-input-group_em"
                                                        data-input-lid="1534435383462">
                                                        <div class="t-input-title t-descr t-descr_md"
                                                            data-redactor-toolbar="no" field="li_title__1534435383462"
                                                            style="">Your email</div>
                                                        <div class="t-input-block">
                                                            <input type="text" autocomplete="email" name="Email"
                                                                class="t-input js-tilda-rule t-input_bbonly" value=""
                                                                placeholder="example@f&amp;c.ae" data-tilda-req="1"
                                                                data-tilda-rule="email"
                                                                style="color:#000000; border:1px solid #b3b3b3; ">
                                                            <div class="t-input-error"></div>
                                                        </div>
                                                    </div>
                                                    <div class="t-input-group t-input-group_ph"
                                                        data-input-lid="1534435399799">
                                                        <div class="t-input-title t-descr t-descr_md"
                                                            data-redactor-toolbar="no" field="li_title__1534435399799"
                                                            style="">Your phone</div>
                                                        <div class="t-input-block">
                                                            <input type="tel" autocomplete="tel" name="Phone"
                                                                data-phonemask-init="no" data-phonemask-id="446480144"
                                                                data-phonemask-lid="1534435399799"
                                                                data-phonemask-maskcountry="AE"
                                                                class="t-input js-phonemask-input js-tilda-rule t-input_bbonly"
                                                                value="" placeholder="+1(999)999-9999"
                                                                data-tilda-req="1"
                                                                style="color:#000000; border:1px solid #b3b3b3; ">
                                                            <script type="text/javascript">
                                                            if (!document.getElementById('t-phonemask-script')) {
                                                                (function(d, w, o) {
                                                                    var n = d.getElementsByTagName(o)[0],
                                                                        s = d.createElement(o),
                                                                        f = function() {
                                                                            n.parentNode.insertBefore(s, n);
                                                                        };
                                                                    s.type = "text/javascript";
                                                                    s.async = true;
                                                                    s.id = 't-phonemask-script';
                                                                    s.src = "js/tilda-phone-mask-1.1.min.js";
                                                                    if (w.opera == "[object Opera]") {
                                                                        d.addEventListener("DOMContentLoaded", f,
                                                                            false);
                                                                    } else {
                                                                        f();
                                                                    }
                                                                })(document, window, 'script');
                                                            } else {
                                                                t_onReady(function() {
                                                                    t_onFuncLoad('t_form_phonemask_load',
                                                                        function() {
                                                                            if (typeof jQuery !==
                                                                                'undefined') {
                                                                                t_form_phonemask_load($(
                                                                                    '#rec446480144 [data-phonemask-lid=1534435399799]'
                                                                                ));
                                                                            } else {
                                                                                var phoneMasks = document
                                                                                    .querySelectorAll(
                                                                                        '#rec446480144 [data-phonemask-lid=1534435399799]'
                                                                                    );
                                                                                t_form_phonemask_load(
                                                                                    phoneMasks);
                                                                            }
                                                                        });
                                                                });
                                                            }
                                                            </script>
                                                            <div class="t-input-error"></div>
                                                        </div>
                                                    </div>
                                                    <!--[if IE 8]>
                            <style>.t-checkbox__control .t-checkbox, .t-radio__control .t-radio {
                              left: 0px;
                              z-index: 1;
                              opacity: 1;
                            }
                            .t-checkbox__indicator, .t-radio__indicator {
                              display: none;
                            }
                            .t-img-select__control .t-img-select {
                              position: static;
                            }</style>
                            <![endif]-->
                                                    <div class="t-form__errorbox-middle">
                                                        <div class="js-errorbox-all t-form__errorbox-wrapper"
                                                            style="display:none;">
                                                            <div class="t-form__errorbox-text t-text t-text_md">
                                                                <p
                                                                    class="t-form__errorbox-item js-rule-error js-rule-error-all">
                                                                </p>
                                                                <p
                                                                    class="t-form__errorbox-item js-rule-error js-rule-error-req">
                                                                </p>
                                                                <p
                                                                    class="t-form__errorbox-item js-rule-error js-rule-error-email">
                                                                </p>
                                                                <p
                                                                    class="t-form__errorbox-item js-rule-error js-rule-error-name">
                                                                </p>
                                                                <p
                                                                    class="t-form__errorbox-item js-rule-error js-rule-error-phone">
                                                                </p>
                                                                <p
                                                                    class="t-form__errorbox-item js-rule-error js-rule-error-minlength">
                                                                </p>
                                                                <p
                                                                    class="t-form__errorbox-item js-rule-error js-rule-error-string">
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="t-form__submit">
                                                        <button type="submit" class="t-submit"
                                                            style="color:#ffffff;background-color:#1f5bff;border-radius:30px; -moz-border-radius:30px; -webkit-border-radius:30px;">Submit</button>
                                                    </div>
                                                </div>
                                                <div class="t-form__errorbox-bottom">
                                                    <div class="js-errorbox-all t-form__errorbox-wrapper"
                                                        style="display:none;">
                                                        <div class="t-form__errorbox-text t-text t-text_md">
                                                            <p
                                                                class="t-form__errorbox-item js-rule-error js-rule-error-all">
                                                            </p>
                                                            <p
                                                                class="t-form__errorbox-item js-rule-error js-rule-error-req">
                                                            </p>
                                                            <p
                                                                class="t-form__errorbox-item js-rule-error js-rule-error-email">
                                                            </p>
                                                            <p
                                                                class="t-form__errorbox-item js-rule-error js-rule-error-name">
                                                            </p>
                                                            <p
                                                                class="t-form__errorbox-item js-rule-error js-rule-error-phone">
                                                            </p>
                                                            <p
                                                                class="t-form__errorbox-item js-rule-error js-rule-error-minlength">
                                                            </p>
                                                            <p
                                                                class="t-form__errorbox-item js-rule-error js-rule-error-string">
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                            <style>
                                            #rec446480144 input::-webkit-input-placeholder {
                                                color: #000000;
                                                opacity: 0.5;
                                            }

                                            #rec446480144 input::-moz-placeholder {
                                                color: #000000;
                                                opacity: 0.5;
                                            }

                                            #rec446480144 input:-moz-placeholder {
                                                color: #000000;
                                                opacity: 0.5;
                                            }

                                            #rec446480144 input:-ms-input-placeholder {
                                                color: #000000;
                                                opacity: 0.5;
                                            }

                                            #rec446480144 textarea::-webkit-input-placeholder {
                                                color: #000000;
                                                opacity: 0.5;
                                            }

                                            #rec446480144 textarea::-moz-placeholder {
                                                color: #000000;
                                                opacity: 0.5;
                                            }

                                            #rec446480144 textarea:-moz-placeholder {
                                                color: #000000;
                                                opacity: 0.5;
                                            }

                                            #rec446480144 textarea:-ms-input-placeholder {
                                                color: #000000;
                                                opacity: 0.5;
                                            }
                                            </style>
                                        </div>
                                        <div class="t862__btn-wrapper">
                                            <button class="t-btn t-btn_sm t862__btn_prev" type="button"
                                                style="color:#ffffff;background-color:#1f5bff;border-radius:30px; -moz-border-radius:30px; -webkit-border-radius:30px;">
                                                <table style="width:100%; height:100%;">
                                                    <tbody>
                                                        <tr>
                                                            <td>Prev</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </button>
                                            <button class="t-btn t-btn_sm t862__btn_next" type="button"
                                                style="color:#ffffff;background-color:#1f5bff;border-radius:30px; -moz-border-radius:30px; -webkit-border-radius:30px;">
                                                <table style="width:100%; height:100%;">
                                                    <tbody>
                                                        <tr>
                                                            <td>Next</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </button>
                                            <button class="t-btn t-btn_sm t862__btn_result" type="button"
                                                style="color:#ffffff;background-color:#1f5bff;border-radius:30px; -moz-border-radius:30px; -webkit-border-radius:30px;">
                                                <table style="width:100%; height:100%;">
                                                    <tbody>
                                                        <tr>
                                                            <td>Result</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                        </div>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <style></style>
                <script>
                t_onReady(function() {
                    var rec = document.querySelector('#rec' + 446480144);
                    if (!rec) return;
                    var inputGroupStep = rec.querySelector('.t-input-group_st');
                    if (inputGroupStep) {
                        inputGroupStep.remove();
                    }
                    t_onFuncLoad('t862_init', function() {
                        t862_init('446480144');
                    });
                });
                </script>
            </div>
            <div id="rec417909886" class="r t-rec" style=" " data-animationappear="off" data-record-type="985">
                <!--tsearch-widget--->
                <div class="t985" data-search-showby="10" data-search-hook="#search">
                    <div class="t985__overlay t-search-widget__overlay">
                        <div class="t985__widgetheader t-search-widget__header">
                            <div class="t985__inputcontainer t-container">
                                <div class="t-search-widget__inputcontainer t-col t-col_8 t-prefix_2">
                                    <div class="t985__blockinput t-search-widget__blockinput" style=" ">
                                        <input type="text" class="t985__input t-search-widget__input t-input"
                                            placeholder="Search" style="">
                                        <svg role="presentation" class="t985__search-icon t-search-widget__search-icon"
                                            width="30" height="30" viewBox="0 0 30 30" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <circle r="7.93388"
                                                transform="matrix(0.715639 0.698471 -0.715639 0.698471 18.5859 11.7816)"
                                                stroke-width="1.0" stroke="#b6b6b6" />
                                            <line y1="-0.5" x2="9.17531" y2="-0.5"
                                                transform="matrix(-0.715635 0.698474 -0.715635 -0.698474 12.75 16.9609)"
                                                stroke-width="1.0" stroke="#b6b6b6" />
                                        </svg>
                                        <div class="t985__loading-icon t-search-widget__loading">
                                            <svg role="presentation" width="24" height="24" viewBox="0 0 24 24"
                                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M5.12544 3.27734C2.57644 5.34 0.75 8.49358 0.75 12.028C0.75 17.3825 4.49041 21.8634 9.50089 23.0004"
                                                    stroke="#b6b6b6" />
                                                <path d="M2 2.02734L5.75038 2.65241L5.12532 6.40279" stroke="#b6b6b6" />
                                                <path
                                                    d="M18.8785 20.5C21.4275 18.4373 23.2539 15.2838 23.2539 11.7493C23.2539 6.39481 19.5135 1.91392 14.503 0.776984"
                                                    stroke="#b6b6b6" />
                                                <path d="M22.0039 21.75L18.2534 21.1249L18.8785 17.3746"
                                                    stroke="#b6b6b6" />
                                            </svg>
                                        </div>
                                        <div class="t985__clear-icon t-search-widget__clear-icon">
                                            <svg role="presentation" width="12" height="12" viewBox="0 0 12 12"
                                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M1.00004 10.9659L10.9999 0.999962" stroke="#565656" />
                                                <path d="M10.9883 10.9986L1.00214 1.02924" stroke="#565656" />
                                            </svg>
                                        </div>
                                    </div>
                                </div>
                                <div class="t985__close-icon t-search-widget__close-icon">
                                    <svg role="presentation" width="28" height="28" viewBox="0 0 28 28" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path d="M0.754014 27.4806L27.0009 1.32294" stroke="black" />
                                        <path d="M26.9688 27.5665L0.757956 1.39984" stroke="black" />
                                    </svg>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <script>
                t_onReady(function() {
                    var tildaSearchWidgetJs = 'https://static.tilda' + 'cdn.com/js/tilda-searchwidget-';
                    if (!document.querySelector(
                            'script[src^="https://search.tildacdn.com/static/tilda-searchwidget-"]') && !
                        document.querySelector('script[src^="' + tildaSearchWidgetJs + '"]')) {
                        var script = document.createElement('script');
                        script.src = tildaSearchWidgetJs + '1.0.min.js';
                        script.type = 'text/javascript';
                        document.body.appendChild(script);
                    }
                    var tildaSearchWidgetCss = 'https://static.tilda' + 'cdn.com/css/tilda-searchwidget-';
                    if (!document.querySelector(
                            'link[href^="https://search.tildacdn.com/static/tilda-searchwidget-"]') && !document
                        .querySelector('link[href^="' + tildaSearchWidgetCss + '"]')) {
                        var link = document.createElement('link');
                        link.href = tildaSearchWidgetCss + '1.0.min.css';
                        link.rel = 'stylesheet';
                        link.media = 'screen';
                        document.body.appendChild(link);
                    }
                });
                </script>
                <style></style>
                <!--/tsearch-widget--->
            </div>
            <div id="rec421261323" class="r t-rec" style=" " data-animationappear="off" data-record-type="131">
                <!-- T123 -->
                <div class="t123">
                    <div class="t-container_100 ">
                        <div class="t-width t-width_100 ">
                            <script>
                            $('.tilt_img').each(function() {
                                $(this).attr('data-tilt', '');
                            })
                            </script>
                            <script src='https://cdnjs.cloudflare.com/ajax/libs/tilt.js/1.2.1/tilt.jquery.min.js'>
                            </script>
                        </div>
                    </div>
                </div>
            </div>
            <div id="rec415794483" class="r t-rec" style=" " data-animationappear="off" data-record-type="131">
                <!-- T123 -->
                <div class="t123">
                    <div class="t-container_100 ">
                        <div class="t-width t-width_100 ">
                            <script>
                            $('#rec414353116 .tn-elem[data-elem-id="1644927681483"] .tn-atom').addClass('autoflash')
                                .append(' <
                                    div class = "flash lighting"
                                    style = "height: 60px;width: 40px;top: 0px;left: -140px;" > < /div>');
                            </script>
                            <style>
                            .autoflash {
                                position: relative;
                                overflow: hidden;
                                -webkit-transform: translate3d(0, 0, 0);
                                transform: translate3d(0, 0, 0);
                            }

                            .flash {
                                content: "";
                                background-color: rgba(255, 255, 255, 0.5);
                                height: 100%;
                                width: 3em;
                                display: block;
                                position: absolute;
                                top: 0;
                                left: -4.5em;
                                -webkit-transform: skewX(-45deg) translateX(0);
                                transform: skewX(-45deg) translateX(0);
                                -webkit-transition: none;
                                transition: none;
                            }

                            .lighting {
                                webkit-animation: moving 3s ease-in-out infinite;
                                -moz-animation: moving 3s ease-in-out infinite;
                                -ms-animation: moving 3s ease-in-out infinite;
                                -o-animation: moving 3s ease-in-out infinite;
                                animation: moving 3s ease-in-out infinite;

                            }

                            @keyframes moving {
                                30% {
                                    webkit-transform: skewX(-45deg) translateX(33.5em);
                                    transform: skewX(-45deg) translateX(33.5em);

                                }

                                100% {
                                    webkit-transform: skewX(-45deg) translateX(33.5em);
                                    transform: skewX(-45deg) translateX(33.5em);

                                }
                            }
                            </style>
                        </div>
                    </div>
                </div>
            </div>
            <div id="rec415809746" class="r t-rec" style=" " data-record-type="215">
                <a name="down" style="font-size:0;"></a>
            </div>
            <div id="rec414386192" class="r t-rec t-rec_pt_0" style="padding-top:0px; margin-bottom:70px "
                data-animationappear="off" data-record-type="396">
                <!-- T396 -->
                <style>
                #rec414386192 .t396__artboard {
                    height: 1040px;
                    background-color: #ffffff;
                }

                #rec414386192 .t396__filter {
                    height: 1040px;
                }

                #rec414386192 .t396__carrier {
                    height: 1040px;
                    background-position: center center;
                    background-attachment: scroll;
                    background-size: cover;
                    background-repeat: no-repeat;
                }

                @media screen and (max-width: 1199px) {
                    #rec414386192 .t396__artboard {}

                    #rec414386192 .t396__filter {}

                    #rec414386192 .t396__carrier {
                        background-attachment: scroll;
                    }
                }

                @media screen and (max-width: 959px) {
                    #rec414386192 .t396__artboard {
                        height: 980px;
                    }

                    #rec414386192 .t396__filter {
                        height: 980px;
                    }

                    #rec414386192 .t396__carrier {
                        height: 980px;
                    }
                }

                @media screen and (max-width: 639px) {
                    #rec414386192 .t396__artboard {
                        height: 750px;
                    }

                    #rec414386192 .t396__filter {
                        height: 750px;
                    }

                    #rec414386192 .t396__carrier {
                        height: 750px;
                    }
                }

                @media screen and (max-width: 479px) {
                    #rec414386192 .t396__artboard {
                        height: 880px;
                    }

                    #rec414386192 .t396__filter {
                        height: 880px;
                    }

                    #rec414386192 .t396__carrier {
                        height: 880px;
                    }
                }

                #rec414386192 .tn-elem[data-elem-id="1645077891118"] {
                    color: #153e8e;
                    text-align: center;
                    z-index: 2;
                    top: 908px;
                    left: calc(50% - 600px + 37px);
                    width: 196px;
                    height: 56px;
                }

                #rec414386192 .tn-elem[data-elem-id="1645077891118"] .tn-atom {
                    color: #153e8e;
                    font-size: 15px;
                    font-family: 'Mix', Arial, sans-serif;
                    line-height: NaN;
                    font-weight: 500;
                    border-width: 1px;
                    border-radius: 10px;
                    background-position: center center;
                    border-color: #808080;
                    border-style: solid;
                    transition: background-color 0.2s ease-in-out, color 0.2s ease-in-out, border-color 0.2s ease-in-out;
                    box-shadow: 0px 15px 35px 0px rgba(0, 0, 0, 0.1);
                }

                #rec414386192 .tn-elem[data-elem-id="1645077891118"] .tn-atom:hover {
                    background-color: #153e8e;
                    background-image: none;
                    color: #ffffff;
                }

                @media screen and (max-width: 1199px) {
                    #rec414386192 .tn-elem[data-elem-id="1645077891118"] {
                        top: 900px;
                        left: calc(50% - 480px + 40px);
                    }
                }

                @media screen and (max-width: 959px) {
                    #rec414386192 .tn-elem[data-elem-id="1645077891118"] {
                        top: 860px;
                        left: calc(50% - 320px + 40px);
                    }
                }

                @media screen and (max-width: 639px) {
                    #rec414386192 .tn-elem[data-elem-id="1645077891118"] {
                        top: 665px;
                        left: calc(50% - 240px + 40px);
                    }
                }

                @media screen and (max-width: 479px) {
                    #rec414386192 .tn-elem[data-elem-id="1645077891118"] {
                        top: 813px;
                        left: calc(50% - 160px + 61px);
                    }

                    #rec414386192 .tn-elem[data-elem-id="1645077891118"] .tn-atom {
                        box-shadow: 0px 15px 20px 0px rgba(0, 0, 0, 0.1);
                    }
                }

                #rec414386192 .tn-elem[data-elem-id="1645077891134"] {
                    z-index: 4;
                    top: 454px;
                    left: -352px;
                    width: 149%;
                }

                #rec414386192 .tn-elem[data-elem-id="1645077891134"] .tn-atom {
                    opacity: 0.1;
                    background-position: center center;
                    border-color: transparent;
                    border-style: solid;
                }

                @media screen and (max-width: 1199px) {
                    #rec414386192 .tn-elem[data-elem-id="1645077891134"] {
                        top: 507px;
                        left: 0px;
                    }
                }

                @media screen and (max-width: 959px) {
                    #rec414386192 .tn-elem[data-elem-id="1645077891134"] {
                        top: 416px;
                        left: 0px;
                    }
                }

                @media screen and (max-width: 639px) {
                    #rec414386192 .tn-elem[data-elem-id="1645077891134"] {
                        top: 303px;
                        left: 0px;
                    }
                }

                @media screen and (max-width: 479px) {
                    #rec414386192 .tn-elem[data-elem-id="1645077891134"] {
                        top: 518px;
                        left: -310px;
                        width: 277%;
                    }
                }

                #rec414386192 .tn-elem[data-elem-id="1645077891148"] {
                    color: #163f8e;
                    text-align: LEFT;
                    z-index: 7;
                    top: 147px;
                    left: calc(50% - 600px + 37px);
                    width: 197px;
                }

                #rec414386192 .tn-elem[data-elem-id="1645077891148"] .tn-atom {
                    color: #163f8e;
                    font-size: 40px;
                    font-family: 'Mix', Arial, sans-serif;
                    line-height: NaN;
                    font-weight: 200;
                    background-position: center center;
                    border-color: transparent;
                    border-style: solid;
                }

                @media screen and (max-width: 1199px) {}

                @media screen and (max-width: 959px) {}

                @media screen and (max-width: 639px) {
                    #rec414386192 .tn-elem[data-elem-id="1645077891148"] {
                        top: 7px;
                        left: calc(50% - 240px + 37px);
                    }
                }

                @media screen and (max-width: 479px) {
                    #rec414386192 .tn-elem[data-elem-id="1645077891148"] {
                        top: 9px;
                        left: calc(50% - 160px + 11px);
                    }

                    #rec414386192 .tn-elem[data-elem-id="1645077891148"] .tn-atom {
                        font-size: 25px;
                    }
                }

                #rec414386192 .tn-elem[data-elem-id="1645077891158"] {
                    color: #000000;
                    text-align: LEFT;
                    z-index: 8;
                    top: 203px;
                    left: calc(50% - 600px + 49px);
                    width: 696px;
                }

                #rec414386192 .tn-elem[data-elem-id="1645077891158"] .tn-atom {
                    color: #000000;
                    font-size: 15px;
                    font-family: 'Mix', Arial, sans-serif;
                    line-height: NaN;
                    font-weight: 500;
                    background-position: center center;
                    border-color: transparent;
                    border-style: solid;
                }

                @media screen and (max-width: 1199px) {}

                @media screen and (max-width: 959px) {
                    #rec414386192 .tn-elem[data-elem-id="1645077891158"] {
                        top: 203px;
                        left: calc(50% - 320px + 49px);
                        width: 501px;
                    }
                }

                @media screen and (max-width: 639px) {
                    #rec414386192 .tn-elem[data-elem-id="1645077891158"] {
                        top: 63px;
                        left: calc(50% - 240px + 49px);
                        width: 419px;
                    }

                    #rec414386192 .tn-elem[data-elem-id="1645077891158"] .tn-atom {
                        font-size: 12px;
                    }
                }

                @media screen and (max-width: 479px) {
                    #rec414386192 .tn-elem[data-elem-id="1645077891158"] {
                        top: 45px;
                        left: calc(50% - 160px + 23px);
                        width: 271px;
                    }

                    #rec414386192 .tn-elem[data-elem-id="1645077891158"] .tn-atom {
                        font-size: 12px;
                    }
                }

                #rec414386192 .tn-elem[data-elem-id="1645077891163"] {
                    color: #000000;
                    text-align: LEFT;
                    z-index: 10;
                    top: 806px;
                    left: calc(50% - 600px + 37px);
                    width: 462px;
                }

                #rec414386192 .tn-elem[data-elem-id="1645077891163"] .tn-atom {
                    color: #000000;
                    font-size: 15px;
                    font-family: 'Mix', Arial, sans-serif;
                    line-height: NaN;
                    font-weight: 500;
                    opacity: 0.35;
                    background-position: center center;
                    border-color: transparent;
                    border-style: solid;
                }

                @media screen and (max-width: 1199px) {
                    #rec414386192 .tn-elem[data-elem-id="1645077891163"] {
                        top: 798px;
                        left: calc(50% - 480px + 40px);
                    }
                }

                @media screen and (max-width: 959px) {
                    #rec414386192 .tn-elem[data-elem-id="1645077891163"] {
                        top: 794px;
                        left: calc(50% - 320px + 40px);
                        width: 358px;
                    }

                    #rec414386192 .tn-elem[data-elem-id="1645077891163"] .tn-atom {
                        font-size: 12px;
                    }
                }

                @media screen and (max-width: 639px) {
                    #rec414386192 .tn-elem[data-elem-id="1645077891163"] {
                        top: 599px;
                        left: calc(50% - 240px + 40px);
                    }
                }

                @media screen and (max-width: 479px) {
                    #rec414386192 .tn-elem[data-elem-id="1645077891163"] {
                        top: 717px;
                        left: calc(50% - 160px + 10px);
                        width: 268px;
                    }

                    #rec414386192 .tn-elem[data-elem-id="1645077891163"] .tn-atom {
                        line-height: 1.5;
                        opacity: 1;
                    }
                }

                #rec414386192 .tn-elem[data-elem-id="1645077891168"] {
                    z-index: 9;
                    top: 211px;
                    left: calc(50% - 600px + 37px);
                    width: 5px;
                }

                #rec414386192 .tn-elem[data-elem-id="1645077891168"] .tn-atom {
                    background-position: center center;
                    border-color: transparent;
                    border-style: solid;
                }

                @media screen and (max-width: 1199px) {}

                @media screen and (max-width: 959px) {}

                @media screen and (max-width: 639px) {
                    #rec414386192 .tn-elem[data-elem-id="1645077891168"] {
                        top: 68px;
                        left: calc(50% - 240px + 37px);
                    }
                }

                @media screen and (max-width: 479px) {
                    #rec414386192 .tn-elem[data-elem-id="1645077891168"] {
                        top: 50px;
                        left: calc(50% - 160px + 11px);
                    }
                }

                #rec414386192 .tn-elem[data-elem-id="1645077891191"] {
                    z-index: 12;
                    top: 345px;
                    left: calc(50% - 600px + 39px);
                    width: 5px;
                }

                #rec414386192 .tn-elem[data-elem-id="1645077891191"] .tn-atom {
                    background-position: center center;
                    border-color: transparent;
                    border-style: solid;
                }

                @media screen and (max-width: 1199px) {}

                @media screen and (max-width: 959px) {}

                @media screen and (max-width: 639px) {
                    #rec414386192 .tn-elem[data-elem-id="1645077891191"] {
                        top: 185px;
                        left: calc(50% - 240px + 37px);
                    }
                }

                @media screen and (max-width: 479px) {
                    #rec414386192 .tn-elem[data-elem-id="1645077891191"] {
                        top: 195px;
                        left: calc(50% - 160px + 11px);
                    }
                }

                #rec414386192 .tn-elem[data-elem-id="1653035500067"] {
                    z-index: 6;
                    top: 300px;
                    left: calc(50% - 600px + 390px);
                    width: 457px;
                }

                #rec414386192 .tn-elem[data-elem-id="1653035500067"] .tn-atom {
                    background-position: center center;
                    border-color: transparent;
                    border-style: solid;
                }

                @media screen and (max-width: 1199px) {
                    #rec414386192 .tn-elem[data-elem-id="1653035500067"] {
                        top: 300px;
                        left: calc(50% - 480px + 290px);
                        width: 410px;
                    }
                }

                @media screen and (max-width: 959px) {
                    #rec414386192 .tn-elem[data-elem-id="1653035500067"] {
                        top: 421px;
                        left: calc(50% - 320px + 187px);
                        width: 346px;
                    }
                }

                @media screen and (max-width: 639px) {
                    #rec414386192 .tn-elem[data-elem-id="1653035500067"] {
                        top: 294px;
                        left: calc(50% - 240px + 97px);
                        width: 290px;
                    }
                }

                @media screen and (max-width: 479px) {
                    #rec414386192 .tn-elem[data-elem-id="1653035500067"] {
                        top: 319px;
                        left: calc(50% - 160px + 0px);
                        width: 242px;
                    }
                }

                #rec414386192 .tn-elem[data-elem-id="1653035758507"] {
                    z-index: 3;
                    top: 92px;
                    left: calc(50% - 600px + 657px);
                    width: 503px;
                }

                #rec414386192 .tn-elem[data-elem-id="1653035758507"] .tn-atom {
                    background-position: center center;
                    border-color: transparent;
                    border-style: solid;
                }

                @media screen and (max-width: 1199px) {
                    #rec414386192 .tn-elem[data-elem-id="1653035758507"] {
                        top: 115px;
                        left: calc(50% - 480px + 528px);
                        width: 422px;
                    }

                    #rec414386192 .tn-elem[data-elem-id="1653035758507"] .tn-atom {
                        opacity: 0.7;
                    }
                }

                @media screen and (max-width: 959px) {
                    #rec414386192 .tn-elem[data-elem-id="1653035758507"] {
                        top: 168px;
                        left: calc(50% - 320px + 362px);
                        width: 310px;
                    }
                }

                @media screen and (max-width: 639px) {
                    #rec414386192 .tn-elem[data-elem-id="1653035758507"] {
                        top: 165px;
                        left: calc(50% - 240px + 240px);
                        width: 240px;
                    }

                    #rec414386192 .tn-elem[data-elem-id="1653035758507"] .tn-atom {
                        opacity: 1;
                    }
                }

                @media screen and (max-width: 479px) {
                    #rec414386192 .tn-elem[data-elem-id="1653035758507"] {
                        top: 304px;
                        left: calc(50% - 160px + 126px);
                    }
                }

                #rec414386192 .tn-elem[data-elem-id="1653633945650"] {
                    z-index: 13;
                    top: 291px;
                    left: calc(50% - 600px + 39px);
                    width: 5px;
                }

                #rec414386192 .tn-elem[data-elem-id="1653633945650"] .tn-atom {
                    background-position: center center;
                    border-color: transparent;
                    border-style: solid;
                }

                @media screen and (max-width: 1199px) {}

                @media screen and (max-width: 959px) {}

                @media screen and (max-width: 639px) {
                    #rec414386192 .tn-elem[data-elem-id="1653633945650"] {
                        top: 185px;
                        left: calc(50% - 240px + 37px);
                    }
                }

                @media screen and (max-width: 479px) {
                    #rec414386192 .tn-elem[data-elem-id="1653633945650"] {
                        top: 268px;
                        left: calc(50% - 160px + 10px);
                    }
                }
                </style>
                <div class='t396'>
                    <div class="t396__artboard" data-artboard-recid="414386192" data-artboard-height="1040"
                        data-artboard-height-res-640="980" data-artboard-height-res-480="750"
                        data-artboard-height-res-320="880" data-artboard-height_vh="" data-artboard-valign="center"
                        data-artboard-upscale="grid" data-artboard-ovrflw="">
                        <div class="t396__carrier" data-artboard-recid="414386192"></div>
                        <div class="t396__filter" data-artboard-recid="414386192"></div>
                        <div class='t396__elem tn-elem tn-elem__4143861921645077891118' data-elem-id='1645077891118'
                            data-elem-type='button' data-field-top-value="908" data-field-top-res-960-value="900"
                            data-field-top-res-640-value="860" data-field-top-res-480-value="665"
                            data-field-top-res-320-value="813" data-field-left-value="37"
                            data-field-left-res-960-value="40" data-field-left-res-640-value="40"
                            data-field-left-res-480-value="40" data-field-left-res-320-value="61"
                            data-field-height-value="56" data-field-width-value="196" data-field-axisy-value="top"
                            data-field-axisx-value="left" data-field-container-value="grid"
                            data-field-topunits-value="px" data-field-leftunits-value="px"
                            data-field-heightunits-value="" data-field-widthunits-value="">
                            <a class='tn-atom' href="Buy.php">Know more</a>
                        </div>
                        <div class='t396__elem tn-elem tn-elem__4143861921645077891134' data-elem-id='1645077891134'
                            data-elem-type='image' data-field-top-value="454" data-field-top-res-960-value="507"
                            data-field-top-res-640-value="416" data-field-top-res-480-value="303"
                            data-field-top-res-320-value="518" data-field-left-value="-352"
                            data-field-left-res-960-value="0" data-field-left-res-640-value="0"
                            data-field-left-res-480-value="0" data-field-left-res-320-value="-310"
                            data-field-width-value="149" data-field-width-res-320-value="277"
                            data-field-axisy-value="top" data-field-axisx-value="left"
                            data-field-container-value="window" data-field-topunits-value="px"
                            data-field-leftunits-value="px" data-field-heightunits-value=""
                            data-field-widthunits-value="%" data-animate-mobile="y" data-animate-sbs-event="scroll"
                            data-animate-sbs-trg="0.5" data-animate-sbs-trgofst="350"
                            data-animate-sbs-opts="[{'mx':'0','my':'0','sx':'1','sy':'1','op':'1','ro':'0','bl':'0','di':'0'},{'di':800,'mx':360,'my':'0','sx':'1','sy':'1','op':'1','ro':'0','bl':'0','fi':'','dd':'0'}]"
                            data-field-filewidth-value="4622" data-field-fileheight-value="504">
                            <div class='tn-atom'>
                                <img class='tn-atom__img t-img'
                                    data-original='images/tild3564-6531-4231-a339-656166626662__62db28630c9497a12481.svg'
                                    alt='F&amp;C properties' imgfield='tn_img_1645077891134'>
                            </div>
                        </div>
                        <div class='t396__elem tn-elem tn-elem__4143861921645077891148' data-elem-id='1645077891148'
                            data-elem-type='text' data-field-top-value="147" data-field-top-res-480-value="7"
                            data-field-top-res-320-value="9" data-field-left-value="37"
                            data-field-left-res-480-value="37" data-field-left-res-320-value="11"
                            data-field-width-value="197" data-field-axisy-value="top" data-field-axisx-value="left"
                            data-field-container-value="grid" data-field-topunits-value="px"
                            data-field-leftunits-value="px" data-field-heightunits-value=""
                            data-field-widthunits-value="px">
                            <h2 class='tn-atom' field='tn_text_1645077891148'>Why us</h2>
                        </div>
                        <!-- <div class='t396__elem tn-elem tn-elem__4143861921645077891158' data-elem-id='1645077891158' data-elem-type='text' data-field-top-value="203" data-field-top-res-640-value="203" data-field-top-res-480-value="63" data-field-top-res-320-value="45" data-field-left-value="49" data-field-left-res-640-value="49" data-field-left-res-480-value="49" data-field-left-res-320-value="23" data-field-width-value="696" data-field-width-res-640-value="501" data-field-width-res-480-value="419" data-field-width-res-320-value="271" data-field-axisy-value="top" data-field-axisx-value="left" data-field-container-value="grid" data-field-topunits-value="px" data-field-leftunits-value="px" data-field-heightunits-value="" data-field-widthunits-value="px"
              >
                <h3 class='tn-atom' field='tn_text_1645077891158' >Our philosophy goes far beyond the Buy Property and Rent Property business model.
                  <br>F&amp;C Properties is a customer satisfaction-driven international team that continues to excel as the leading advocate of long-term relations with those who call Dubai “Home”. We believe that deep appreciation and mutual loyalty are what we offer to those who trust us.
                  <br>
                  <br>F&amp;C Properties is a one-stop-shop solution for Property Management, Buy Property, and Rent Property in Real Estate Dubai's growing market.
                  <br>
                  <br>Enjoy comprehensive, high-quality, multi-lingual services based on the professional expertise that has been carefully built, stiving to the excellence of Dubai’s energy and spirit.
                </h3>
              </div> -->
                        <div class='t396__elem tn-elem tn-elem__4143861921645077891158' data-elem-id='1645077891158'
                            data-elem-type='text' data-field-top-value="203" data-field-top-res-640-value="203"
                            data-field-top-res-480-value="63" data-field-top-res-320-value="45"
                            data-field-left-value="49" data-field-left-res-640-value="49"
                            data-field-left-res-480-value="49" data-field-left-res-320-value="23"
                            data-field-width-value="696" data-field-width-res-640-value="501"
                            data-field-width-res-480-value="419" data-field-width-res-320-value="271"
                            data-field-axisy-value="top" data-field-axisx-value="left" data-field-container-value="grid"
                            data-field-topunits-value="px" data-field-leftunits-value="px"
                            data-field-heightunits-value="" data-field-widthunits-value="px">
                            <div class="why">
                                <ul class="why__list">
                                    <li class="why__item">
                                        <p class="why__text">C Properties is a customer satisfaction-driven
                                            international team that continues to excel as the leading advocate of
                                            long-term relations with those who call Dubai “Home”. We believe that deep
                                            appreciation and mutual loyalty are what we offer to those who trust us.</p>
                                    </li>
                                    <li class="why__item">
                                        <p class="why__text">C Properties is a one-stop-shop solution for Property
                                            Management, Buy Property, and Rent Property in Real Estate Dubai's growing
                                            market.</p>
                                    </li>
                                    <li class="why__item">
                                        <p class="why__text">Enjoy comprehensive, high-quality, multi-lingual services
                                            based on the professional expertise that has been carefully built, stiving
                                            to the excellence of Dubai’s energy and spirit.</p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class='t396__elem tn-elem tn-elem__4143861921645077891163' data-elem-id='1645077891163'
                            data-elem-type='text' data-field-top-value="806" data-field-top-res-960-value="798"
                            data-field-top-res-640-value="794" data-field-top-res-480-value="599"
                            data-field-top-res-320-value="717" data-field-left-value="37"
                            data-field-left-res-960-value="40" data-field-left-res-640-value="40"
                            data-field-left-res-480-value="40" data-field-left-res-320-value="10"
                            data-field-width-value="462" data-field-width-res-640-value="358"
                            data-field-width-res-320-value="268" data-field-axisy-value="top"
                            data-field-axisx-value="left" data-field-container-value="grid"
                            data-field-topunits-value="px" data-field-leftunits-value="px"
                            data-field-heightunits-value="" data-field-widthunits-value="px">
                            <h3 class='tn-atom' field='tn_text_1645077891163'>DEALING WITH US, YOU WILL EXPERIENCE THE
                                BESPOKE SERVICE EXCELLENCE OF A BOUTIQUE AGENCY AND THE INDUSTRY EXPERTISE OF A GLOBAL
                                ENTERPRISE.</h3>
                        </div>
                        <!-- <div class='t396__elem tn-elem tn-elem__4143861921645077891168' data-elem-id='1645077891168' data-elem-type='image' data-field-top-value="211" data-field-top-res-480-value="68" data-field-top-res-320-value="50" data-field-left-value="37" data-field-left-res-480-value="37" data-field-left-res-320-value="11" data-field-width-value="5" data-field-axisy-value="top" data-field-axisx-value="left" data-field-container-value="grid" data-field-topunits-value="px" data-field-leftunits-value="px" data-field-heightunits-value="" data-field-widthunits-value="px" data-field-filewidth-value="20" data-field-fileheight-value="20"
              >
                <div class='tn-atom' >
                  <img class='tn-atom__img t-img' data-original='images/tild3638-6564-4239-b339-333533386330__f1d089ca7aa7204211dd.svg' imgfield='tn_img_1645077891168'>
                </div>
              </div>
              <div class='t396__elem tn-elem tn-elem__4143861921645077891191' data-elem-id='1645077891191' data-elem-type='image' data-field-top-value="345" data-field-top-res-480-value="185" data-field-top-res-320-value="195" data-field-left-value="39" data-field-left-res-480-value="37" data-field-left-res-320-value="11" data-field-width-value="5" data-field-axisy-value="top" data-field-axisx-value="left" data-field-container-value="grid" data-field-topunits-value="px" data-field-leftunits-value="px" data-field-heightunits-value="" data-field-widthunits-value="px" data-field-filewidth-value="20" data-field-fileheight-value="20"
              >
                <div class='tn-atom' >
                  <img class='tn-atom__img t-img' data-original='images/tild6533-6665-4136-b434-333035653135__f1d089ca7aa7204211dd.svg' imgfield='tn_img_1645077891191'>
                </div>
              </div> -->
                        <div class='t396__elem tn-elem tn-elem__4143861921653035500067' data-elem-id='1653035500067'
                            data-elem-type='image' data-field-top-value="300" data-field-top-res-960-value="300"
                            data-field-top-res-640-value="421" data-field-top-res-480-value="294"
                            data-field-top-res-320-value="319" data-field-left-value="390"
                            data-field-left-res-960-value="290" data-field-left-res-640-value="187"
                            data-field-left-res-480-value="97" data-field-left-res-320-value="0"
                            data-field-width-value="457" data-field-width-res-960-value="410"
                            data-field-width-res-640-value="346" data-field-width-res-480-value="290"
                            data-field-width-res-320-value="242" data-field-axisy-value="top"
                            data-field-axisx-value="left" data-field-container-value="grid"
                            data-field-topunits-value="px" data-field-leftunits-value="px"
                            data-field-heightunits-value="" data-field-widthunits-value="px" data-animate-mobile="y"
                            data-animate-sbs-event="scroll" data-animate-sbs-trg="0.5" data-animate-sbs-trgofst="0"
                            data-animate-sbs-opts="[{'di':'0','mx':'0','my':'0','sx':'1','sy':'1','op':'1','ro':'0','bl':'0','fi':'','dd':'0'},{'di':500,'mx':0,'my':53,'sx':'1','sy':'1','op':'1','ro':'0','bl':'0','fi':'','dd':'0'}]"
                            data-animate-sbs-opts-res-320="[{'di':'0','mx':'0','my':'0','sx':'1','sy':'1','op':'1','ro':'0','bl':'0','fi':'','dd':'0'},{'di':500,'mx':-1,'my':156,'sx':'1','sy':'1','op':'1','ro':'0','bl':'0','fi':'','dd':'0'}]"
                            data-field-filewidth-value="470" data-field-fileheight-value="550">
                            <div class='tn-atom'>
                                <img class='tn-atom__img t-img'
                                    data-original='images/tild3932-3730-4330-a631-326664366236__apartment.png'
                                    alt='Luxury apartment in Dubai' imgfield='tn_img_1653035500067'>
                            </div>
                        </div>
                        <div class='t396__elem tn-elem tn-elem__4143861921653035758507' data-elem-id='1653035758507'
                            data-elem-type='image' data-field-top-value="92" data-field-top-res-960-value="115"
                            data-field-top-res-640-value="300" data-field-top-res-480-value="285"
                            data-field-top-res-320-value="304" data-field-left-value="657"
                            data-field-left-res-960-value="528" data-field-left-res-640-value="362"
                            data-field-left-res-480-value="240" data-field-left-res-320-value="126"
                            data-field-width-value="503" data-field-width-res-960-value="422"
                            data-field-width-res-640-value="310" data-field-width-res-480-value="240"
                            data-field-axisy-value="top" data-field-axisx-value="left" data-field-container-value="grid"
                            data-field-topunits-value="px" data-field-leftunits-value="px"
                            data-field-heightunits-value="" data-field-widthunits-value="px"
                            data-field-filewidth-value="503" data-field-fileheight-value="807">
                            <div class='tn-atom'>
                                <img class='tn-atom__img t-img'
                                    data-original='images/tild3935-3731-4337-b031-356234633530__frame.png'
                                    alt='Dubai frame ' imgfield='tn_img_1653035758507'>
                            </div>
                        </div>
                        <!-- <div class='t396__elem tn-elem tn-elem__4143861921653633945650' data-elem-id='1653633945650' data-elem-type='image' data-field-top-value="291" data-field-top-res-480-value="185" data-field-top-res-320-value="268" data-field-left-value="39" data-field-left-res-480-value="37" data-field-left-res-320-value="10" data-field-width-value="5" data-field-axisy-value="top" data-field-axisx-value="left" data-field-container-value="grid" data-field-topunits-value="px" data-field-leftunits-value="px" data-field-heightunits-value="" data-field-widthunits-value="px" data-field-filewidth-value="20" data-field-fileheight-value="20"
              >
                <div class='tn-atom' >
                  <img class='tn-atom__img t-img' data-original='images/tild6533-6665-4136-b434-333035653135__f1d089ca7aa7204211dd.svg' imgfield='tn_img_1653633945650'>
                </div>
              </div> -->
                    </div>
                </div>
                <script>
                t_onReady(function() {
                    t_onFuncLoad('t396_init', function() {
                        t396_init('414386192');
                    });
                });
                </script>
                <!-- /T396 -->
            </div>
        </section>
        <section class="page__banner banner banner_main">
            <div class="banner__container">
                <div class="service__body">
                    <div class="service__item item-service">
                        <div class="item-service__body">
                            <a href="Rent.php" class="item-service__image">
                                <img src="./images/Six Senses Residence The Palm - Royal Penthouse - Living2.jpg"
                                    alt="">
                                <p class="item-service__label">Property For Rent</p>
                            </a>
                        </div>
                    </div>
                    <div class="service__item item-service">
                        <div class="item-service__body">
                            <a href="Buy.php" class="item-service__image">
                                <img src="./images/CREEK_PALACE_DCH_HIGHLIGHT-1620x832.jpg" alt="">
                                <p class="item-service__label">Property For Buy</p>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="u-clearfix u-gradient u-section-3 service" id="sec-a786">
            <div class="page__banner banner banner_main">
                <div class="banner__container"> 
                    <div class="banner__body">
                        <div class="banner__wrapper swiper-wrapper">
                            <?php
                                $gal = "SELECT * FROM `gallery`";
                                $gal_res = $conn->query($gal);
                                    if ($gal_res->num_rows > 0) {
                                        while($row3 = $gal_res->fetch_assoc()) {
                                            echo'<div class="banner__slide swiper-slide">
                                            <div class="banner__item">
                                                <div class="banner__image">
                                                    <picture>
                                                        <source media="(min-width: 479.98px)" srcset="admin/banners/'.$row3['name'].'/'.$row3['pic'].'">
                                                        <source media="(max-width: 479.98px)" srcset="admin/banners/'.$row3['name'].'/'.$row3['pic'].'">
                                                        <img src="admin/banners/'.$row3['name'].'/'.$row3['pic'].'">
                                                    </picture>
                                                    <a data-popup="#popup2" href="#" class="banner__link">
                                                        Download
                                                    </a>
                                                    <!-- <picture><source data-srcset="img/main-page/03.webp" srcset="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" type="image/webp"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII="  data-src="img/main-page/03.jpg" alt=""></picture> -->
                                                </div>
                                            </div>
                                        </div>';
                                    }
                                } else {  echo 'empty'; }
                            ?>
                        </div>
                        <div class="banner__pagination">

                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="consultation u-clearfix u-image u-section-4" id="sec-28b3" data-image-width="3520"
            data-image-height="744">
            <div class="consultation__container">
                <div class="consultation__body">
                    <div class="consultation__content">
                        <h2 class="consultation__title">
                            Let us help you With
                            <br>
                            <span>Mortgage</span>
                        </h2>
                        <a href="https://fandc.homeloans.ae" class="consultation__link">Free Consultation</a>
                    </div>
                    <div class="consultation__image">
                        <img src="./images/Free_Macbook_Air_202.png" alt="">
                    </div>
                </div>
            </div>
            <!-- <div class="u-align-left u-clearfix u-sheet u-valign-middle u-sheet-1">
          <img class="u-image u-image-default u-image-1" src="images/Free_Macbook_Air_202.png" alt="" data-image-width="1680" data-image-height="1331">
          <h1 class="u-custom-font u-font-montserrat u-text u-text-default u-text-1 buy-title">
            <span class="u-text-grey-10"> Let us help you With</span>
            <br><span class="u-text-white" style="font-weight: 700; margin-left:-66px">Mortgage</span>
          </h1>
          <a href="https://fandc.homeloans.ae" class="u-border-2 u-border-hover-white u-btn u-btn-round u-button-style u-hover-custom-color-7 u-radius-40 u-text-custom-color-6 u-text-hover-white u-white u-btn-1 buy-button">Free Consultation</a>
        </div> -->
        </section>
        <section class="u-align-center u-clearfix u-white u-section-5 blogs" id="carousel_8214">
            <h2 class="u-align-center">Blogs</h2><br><br>
            <div class="u-clearfix u-sheet u-sheet-1">
                <div class="u-layout-horizontal u-list u-list-1">
                    <div class="u-repeater u-repeater-1">
                        <div class="u-container-style u-custom-item u-list-item u-repeater-item u-shape-rectangle">
                            <div class="u-container-layout u-similar-container u-container-layout-1 blogs__item">
                                <div
                                    class="u-border-2 u-border-grey-5 u-opacity u-opacity-10 u-preserve-proportions u-radius-15 u-shape u-shape-round u-white u-shape-1">
                                </div>
                                <img class="u-expanded-width u-image u-image-round u-radius-4 u-image-1"
                                    src="images/CREEK_PALACE_DCH_HIGHLIGHT-1620x832.jpg" alt="" data-image-width="1600"
                                    data-image-height="822">
                                <div
                                    class="u-container-style u-custom-color-5 u-group u-radius-4 u-shape-round u-group-1">
                                    <div class="u-container-layout u-valign-middle u-container-layout-2">
                                        <h5 class="u-text u-text-1">NEW PROJECTS</h5>
                                    </div>
                                </div>
                                <h2 class="u-custom-font u-font-montserrat u-text u-text-default u-text-2">New Phase of
                                    Emaar Creek Palace </h2>
                                <p class="u-text u-text-3">The New Phase of the Creek Palace which includes branded 1,2
                                    and 3 bedrooms apartments, has been launched by Emaar. The complex, which consists
                                    of two high-rise modren towers with 44 floors, is the very first palace branded
                                    residential building</p>
                                <div class="blogs__date">
                                    <div class="blogs__date-icon">
                                        <img src="images/13.png" alt="Calendar icon">
                                    </div>
                                    <p class="blogs__date-text">
                                        11th March 2022
                                    </p>
                                </div>
                                <a href="Blogs.php"
                                    class="u-border-none u-btn u-btn-round u-button-style u-custom-color-5 u-hover-palette-1-light-1 u-radius-6 u-btn-1">VIDEO
                                    OVERVIEW</a>
                            </div>
                        </div>
                        <div class="u-container-style u-custom-item u-list-item u-repeater-item">
                            <div class="u-container-layout u-similar-container u-container-layout-3">
                                <div
                                    class="u-border-2 u-border-grey-5 u-opacity u-opacity-10 u-preserve-proportions u-radius-15 u-shape u-shape-round u-white u-shape-3">
                                </div>
                                <img class="u-expanded-width u-image u-image-round u-radius-4 u-image-2"
                                    src="images/199647787-0.jpeg" alt="" data-image-width="1200"
                                    data-image-height="675">
                                <div
                                    class="u-container-style u-custom-color-5 u-group u-radius-4 u-shape-round u-group-2">
                                    <div class="u-container-layout u-valign-middle u-container-layout-4">
                                        <h5 class="u-text u-text-default u-text-5">NEW PROJECTS</h5>
                                    </div>
                                </div>
                                <h2 class="u-custom-font u-font-montserrat u-text u-text-default u-text-6">Golden Visa
                                    in Dubai</h2>
                                <p class="u-text u-text-7">We have perpared informations about how to apply for the
                                    Golden Visa and listed popular real estate projects in dubai, where the purchase of
                                    real estate withen these communities will give you the right to apply for a 5-years
                                    residency UAE Visa&nbsp;</p>
                                <a href="Blogs.php"
                                    class="u-border-none u-btn u-btn-round u-button-style u-custom-color-5 u-hover-palette-1-light-1 u-radius-6 u-btn-2">VIDEO
                                    OVERVIEW</a>
                                <div class="blogs__date">
                                    <div class="blogs__date-icon">
                                        <img src="images/13.png" alt="Calendar icon">
                                    </div>
                                    <p class="blogs__date-text">
                                        11th March 2022
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="u-container-style u-custom-item u-list-item u-repeater-item">
                            <div class="u-container-layout u-similar-container u-container-layout-5">
                                <div
                                    class="u-border-2 u-border-grey-5 u-opacity u-opacity-10 u-preserve-proportions u-radius-15 u-shape u-shape-round u-white u-shape-5">
                                </div>
                                <img class="u-expanded-width u-image u-image-round u-radius-4 u-image-3"
                                    src="images/CREEK_PALACE_DCH_HIGHLIGHT-1620x832.jpg" alt="" data-image-width="1600"
                                    data-image-height="822">
                                <div
                                    class="u-container-style u-custom-color-5 u-group u-radius-4 u-shape-round u-group-3">
                                    <div class="u-container-layout u-valign-middle u-container-layout-6">
                                        <h5 class="u-text u-text-default u-text-9">Sample Headline</h5>
                                    </div>
                                </div>
                                <h2 class="u-custom-font u-font-montserrat u-text u-text-default u-text-10">Sample
                                    Headline</h2>
                                <p class="u-text u-text-11">Sample text. Click to select the Text Element.</p>
                                <a href="https://nicepage.com/k/children-website-templates"
                                    class="u-border-none u-btn u-btn-round u-button-style u-custom-color-5 u-hover-palette-1-light-1 u-radius-6 u-btn-3">Button</a>
                                <div class="blogs__date">
                                    <div class="blogs__date-icon">
                                        <img src="images/13.png" alt="Calendar icon">
                                    </div>
                                    <p class="blogs__date-text">
                                        11th March 2022
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <a class="u-gallery-nav u-gallery-nav-prev u-grey-70 u-icon-circle u-opacity u-opacity-70 u-spacing-10 u-text-white u-gallery-nav-1"
                        href="#" role="button">
                        <span aria-hidden="true">
                            <svg viewBox="0 0 451.847 451.847">
                                <path
                                    d="M97.141,225.92c0-8.095,3.091-16.192,9.259-22.366L300.689,9.27c12.359-12.359,32.397-12.359,44.751,0
                  c12.354,12.354,12.354,32.388,0,44.748L173.525,225.92l171.903,171.909c12.354,12.354,12.354,32.391,0,44.744
                  c-12.354,12.365-32.386,12.365-44.745,0l-194.29-194.281C100.226,242.115,97.141,234.018,97.141,225.92z">
                                </path>
                            </svg>
                        </span>
                        <span class="sr-only">
                            <svg viewBox="0 0 451.847 451.847">
                                <path d="M97.141,225.92c0-8.095,3.091-16.192,9.259-22.366L300.689,9.27c12.359-12.359,32.397-12.359,44.751,0
      c12.354,12.354,12.354,32.388,0,44.748L173.525,225.92l171.903,171.909c12.354,12.354,12.354,32.391,0,44.744
      c-12.354,12.365-32.386,12.365-44.745,0l-194.29-194.281C100.226,242.115,97.141,234.018,97.141,225.92z"></path>
                            </svg>
                        </span>
                    </a>
                    <a class="u-gallery-nav u-gallery-nav-next u-grey-70 u-icon-circle u-opacity u-opacity-70 u-spacing-10 u-text-white u-gallery-nav-2"
                        href="#" role="button">
                        <span aria-hidden="true">
                            <svg viewBox="0 0 451.846 451.847">
                                <path d="M345.441,248.292L151.154,442.573c-12.359,12.365-32.397,12.365-44.75,0c-12.354-12.354-12.354-32.391,0-44.744
      L278.318,225.92L106.409,54.017c-12.354-12.359-12.354-32.394,0-44.748c12.354-12.359,32.391-12.359,44.75,0l194.287,194.284
      c6.177,6.18,9.262,14.271,9.262,22.366C354.708,234.018,351.617,242.115,345.441,248.292z"></path>
                            </svg>
                        </span>
                        <span class="sr-only">
                            <svg viewBox="0 0 451.846 451.847">
                                <path d="M345.441,248.292L151.154,442.573c-12.359,12.365-32.397,12.365-44.75,0c-12.354-12.354-12.354-32.391,0-44.744
      L278.318,225.92L106.409,54.017c-12.354-12.359-12.354-32.394,0-44.748c12.354-12.359,32.391-12.359,44.75,0l194.287,194.284
      c6.177,6.18,9.262,14.271,9.262,22.366C354.708,234.018,351.617,242.115,345.441,248.292z"></path>
                            </svg>
                        </span>
                    </a>
                </div>
            </div>
        </section>
        <div id="rec440222927" class="r t-rec" style=" " data-animationappear="off" data-record-type="396">
            <!-- T396 -->
            <style>
            #rec440222927 .t396__artboard {
                height: 90px;
                background-color: #ffffff;
            }

            #rec440222927 .t396__filter {
                height: 90px;
            }

            #rec440222927 .t396__carrier {
                height: 90px;
                background-position: center center;
                background-attachment: scroll;
                background-size: cover;
                background-repeat: no-repeat;
            }

            @media screen and (max-width: 1199px) {
                #rec440222927 .t396__artboard {}

                #rec440222927 .t396__filter {}

                #rec440222927 .t396__carrier {
                    background-attachment: scroll;
                }
            }

            @media screen and (max-width: 959px) {}

            @media screen and (max-width: 639px) {}

            @media screen and (max-width: 479px) {
                #rec440222927 .t396__artboard {
                    height: 60px;
                }

                #rec440222927 .t396__filter {
                    height: 60px;
                }

                #rec440222927 .t396__carrier {
                    height: 60px;
                }
            }

            #rec440222927 .tn-elem[data-elem-id="1650957562027"] {
                z-index: 2;
                top: 56px;
                left: calc(50% - 600px + 325px);
                width: 380px;
                height: 2px;
            }

            #rec440222927 .tn-elem[data-elem-id="1650957562027"] .tn-atom {
                background-color: #163f8e;
                background-position: center center;
                border-color: transparent;
                border-style: solid;
            }

            @media screen and (max-width: 1199px) {}

            @media screen and (max-width: 959px) {}

            @media screen and (max-width: 639px) {}

            @media screen and (max-width: 479px) {
                #rec440222927 .tn-elem[data-elem-id="1650957562027"] {
                    top: 46px;
                    left: calc(50% - 160px + 75px);
                    width: 170px;
                }
            }

            #rec440222927 .tn-elem[data-elem-id="1650957503297"] {
                color: #000000;
                z-index: 1;
                top: 14px;
                left: calc(50% - 600px + 20px);
                width: 300px;
            }

            #rec440222927 .tn-elem[data-elem-id="1650957503297"] .tn-atom {
                color: #000000;
                font-size: 40px;
                font-family: 'Mix', Arial, sans-serif;
                line-height: 1.55;
                font-weight: 300;
                background-position: center center;
                border-color: transparent;
                border-style: solid;
            }

            @media screen and (max-width: 1199px) {}

            @media screen and (max-width: 959px) {}

            @media screen and (max-width: 639px) {}

            @media screen and (max-width: 479px) {
                #rec440222927 .tn-elem[data-elem-id="1650957503297"] {
                    top: 12px;
                    left: calc(50% - 160px + 19px);
                    width: 283px;
                }

                #rec440222927 .tn-elem[data-elem-id="1650957503297"] {
                    text-align: center;
                }

                #rec440222927 .tn-elem[data-elem-id="1650957503297"] .tn-atom {
                    font-size: 20px;
                }
            }
            </style>
            <div class='t396'>
                <div class="t396__artboard" data-artboard-recid="440222927" data-artboard-height="90"
                    data-artboard-height-res-320="60" data-artboard-height_vh="" data-artboard-valign="center"
                    data-artboard-upscale="grid" data-artboard-ovrflw="">
                    <div class="t396__carrier" data-artboard-recid="440222927"></div>
                    <div class="t396__filter" data-artboard-recid="440222927"></div>
                    <div class='t396__elem tn-elem tn-elem__4402229271650957562027' data-elem-id='1650957562027'
                        data-elem-type='shape' data-field-top-value="56" data-field-top-res-320-value="46"
                        data-field-left-value="325" data-field-left-res-320-value="75" data-field-height-value="2"
                        data-field-width-value="380" data-field-width-res-320-value="170" data-field-axisy-value="top"
                        data-field-axisx-value="left" data-field-container-value="grid" data-field-topunits-value="px"
                        data-field-leftunits-value="px" data-field-heightunits-value="px"
                        data-field-widthunits-value="px">
                        <div class='tn-atom'></div>
                    </div>
                    <div class='t396__elem tn-elem tn-elem__4402229271650957503297' data-elem-id='1650957503297'
                        data-elem-type='text' data-field-top-value="14" data-field-top-res-320-value="12"
                        data-field-left-value="20" data-field-left-res-320-value="19" data-field-width-value="300"
                        data-field-width-res-320-value="283" data-field-axisy-value="top" data-field-axisx-value="left"
                        data-field-container-value="grid" data-field-topunits-value="px" data-field-leftunits-value="px"
                        data-field-heightunits-value="" data-field-widthunits-value="px">
                        <div class='tn-atom' field='tn_text_1650957503297'>Google Reviews</div>
                    </div>
                </div>
            </div>
            <script>
            t_onReady(function() {
                t_onFuncLoad('t396_init', function() {
                    t396_init('440222927');
                });
            });
            </script>
            <!-- /T396 -->
        </div>
        <!-- <div id="rec440227403" class="r t-rec t-rec_pt_0 t-rec_pb_0" style="padding-top:0px;padding-bottom:0px; " data-animationappear="off" data-record-type="604" >
        <div class="t604">
          <div class="t-slds" style="visibility: hidden;">
            <div class="t-container t-slds__main">
              <div class="t-slds__container t-width t-width_7 t-margin_auto">
                <div class="t-slds__items-wrapper t-slds_animated-slow t-slds__witharrows" data-slider-transition="500" data-slider-with-cycle="true" data-slider-correct-height="false" data-auto-correct-mobile-width="false" data-slider-arrows-nearpic="yes" >
                  <div class="t-slds__item t-slds__item_active" data-slide-index="1">
                    <div class="t-width t-width_6 t-margin_auto" itemscope itemtype="http://schema.org/ImageObject">
                      <div class="t-slds__wrapper t-align_center" >
                        <meta itemprop="image" content="images/tild3461-3435-4264-a465-373461376438__1.jpg">
                        <meta itemprop="caption" content="F&amp;amp;C properties reviews">
                        <div class="t604__imgwrapper" bgimgfield="gi_img__0" >
                          <div class="t-slds__bgimg t-slds__bgimg-contain t-bgimg" data-original="images/tild3461-3435-4264-a465-373461376438__1.jpg" style="background-image: url('images/tild3461-3435-4264-a465-373461376438__-__resizeb__20x__1.jpg');"></div>
                          <div class="t604__separator" data-slider-image-width="560" data-slider-image-height="600"></div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="t-slds__item " data-slide-index="2">
                    <div class="t-width t-width_6 t-margin_auto" itemscope itemtype="http://schema.org/ImageObject">
                      <div class="t-slds__wrapper t-align_center" >
                        <meta itemprop="image" content="images/tild3462-6337-4133-b436-656435663038__2.jpg">
                        <meta itemprop="caption" content="F&amp;amp;C properties reviews">
                        <div class="t604__imgwrapper" bgimgfield="gi_img__1" >
                          <div class="t-slds__bgimg t-slds__bgimg-contain t-bgimg" data-original="images/tild3462-6337-4133-b436-656435663038__2.jpg" style="background-image: url('images/tild3462-6337-4133-b436-656435663038__-__resizeb__20x__2.jpg');"></div>
                          <div class="t604__separator" data-slider-image-width="560" data-slider-image-height="600"></div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="t-slds__item " data-slide-index="3">
                    <div class="t-width t-width_6 t-margin_auto" itemscope itemtype="http://schema.org/ImageObject">
                      <div class="t-slds__wrapper t-align_center" >
                        <meta itemprop="image" content="images/tild3466-3365-4463-b565-656337656539__3.jpg">
                        <meta itemprop="caption" content="F&amp;amp;C properties reviews">
                        <div class="t604__imgwrapper" bgimgfield="gi_img__2" >
                          <div class="t-slds__bgimg t-slds__bgimg-contain t-bgimg" data-original="images/tild3466-3365-4463-b565-656337656539__3.jpg" style="background-image: url('images/tild3466-3365-4463-b565-656337656539__-__resizeb__20x__3.jpg');"></div>
                          <div class="t604__separator" data-slider-image-width="560" data-slider-image-height="600"></div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="t-slds__item " data-slide-index="4">
                    <div class="t-width t-width_6 t-margin_auto" itemscope itemtype="http://schema.org/ImageObject">
                      <div class="t-slds__wrapper t-align_center" >
                        <meta itemprop="image" content="images/tild6362-3562-4664-b136-633432656638__4.jpg">
                        <meta itemprop="caption" content="F&amp;amp;C properties reviews">
                        <div class="t604__imgwrapper" bgimgfield="gi_img__3" >
                          <div class="t-slds__bgimg t-slds__bgimg-contain t-bgimg" data-original="images/tild6362-3562-4664-b136-633432656638__4.jpg" style="background-image: url('images/tild6362-3562-4664-b136-633432656638__-__resizeb__20x__4.jpg');"></div>
                          <div class="t604__separator" data-slider-image-width="560" data-slider-image-height="600"></div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="t-slds__item " data-slide-index="5">
                    <div class="t-width t-width_6 t-margin_auto" itemscope itemtype="http://schema.org/ImageObject">
                      <div class="t-slds__wrapper t-align_center" >
                        <meta itemprop="image" content="images/tild6636-6538-4336-a663-303137363362__5.jpg">
                        <meta itemprop="caption" content="F&amp;amp;C properties reviews">
                        <div class="t604__imgwrapper" bgimgfield="gi_img__4" >
                          <div class="t-slds__bgimg t-slds__bgimg-contain t-bgimg" data-original="images/tild6636-6538-4336-a663-303137363362__5.jpg" style="background-image: url('images/tild6636-6538-4336-a663-303137363362__-__resizeb__20x__5.jpg');"></div>
                          <div class="t604__separator" data-slider-image-width="560" data-slider-image-height="600"></div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="t-slds__item " data-slide-index="6">
                    <div class="t-width t-width_6 t-margin_auto" itemscope itemtype="http://schema.org/ImageObject">
                      <div class="t-slds__wrapper t-align_center" >
                        <meta itemprop="image" content="images/tild3830-3839-4563-b534-643965303165__6.png">
                        <meta itemprop="caption" content="F&amp;amp;C properties reviews">
                        <div class="t604__imgwrapper" bgimgfield="gi_img__5" >
                          <div class="t-slds__bgimg t-slds__bgimg-contain t-bgimg" data-original="images/tild3830-3839-4563-b534-643965303165__6.png" style="background-image: url('images/tild3830-3839-4563-b534-643965303165__-__resizeb__20x__6.png');"></div>
                          <div class="t604__separator" data-slider-image-width="560" data-slider-image-height="600"></div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="t-slds__item " data-slide-index="7">
                    <div class="t-width t-width_6 t-margin_auto" itemscope itemtype="http://schema.org/ImageObject">
                      <div class="t-slds__wrapper t-align_center" >
                        <meta itemprop="image" content="images/tild6361-6637-4532-a639-636561386134__7.png">
                        <meta itemprop="caption" content="F&amp;amp;C properties reviews">
                        <div class="t604__imgwrapper" bgimgfield="gi_img__6" >
                          <div class="t-slds__bgimg t-slds__bgimg-contain t-bgimg" data-original="images/tild6361-6637-4532-a639-636561386134__7.png" style="background-image: url('images/tild6361-6637-4532-a639-636561386134__-__resizeb__20x__7.png');"></div>
                          <div class="t604__separator" data-slider-image-width="560" data-slider-image-height="600"></div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="t-slds__item " data-slide-index="8">
                    <div class="t-width t-width_6 t-margin_auto" itemscope itemtype="http://schema.org/ImageObject">
                      <div class="t-slds__wrapper t-align_center" >
                        <meta itemprop="image" content="images/tild3962-3561-4033-a534-356466313833__8.png">
                        <meta itemprop="caption" content="F&amp;amp;C properties reviews">
                        <div class="t604__imgwrapper" bgimgfield="gi_img__7" >
                          <div class="t-slds__bgimg t-slds__bgimg-contain t-bgimg" data-original="images/tild3962-3561-4033-a534-356466313833__8.png" style="background-image: url('images/tild3962-3561-4033-a534-356466313833__-__resizeb__20x__8.png');"></div>
                          <div class="t604__separator" data-slider-image-width="560" data-slider-image-height="600"></div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="t-slds__item " data-slide-index="9">
                    <div class="t-width t-width_6 t-margin_auto" itemscope itemtype="http://schema.org/ImageObject">
                      <div class="t-slds__wrapper t-align_center" >
                        <meta itemprop="image" content="images/tild3163-6263-4661-b138-333537383632__9.png">
                        <meta itemprop="caption" content="F&amp;amp;C properties reviews">
                        <div class="t604__imgwrapper" bgimgfield="gi_img__8" >
                          <div class="t-slds__bgimg t-slds__bgimg-contain t-bgimg" data-original="images/tild3163-6263-4661-b138-333537383632__9.png" style="background-image: url('images/tild3163-6263-4661-b138-333537383632__-__resizeb__20x__9.png');"></div>
                          <div class="t604__separator" data-slider-image-width="560" data-slider-image-height="600"></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="t-slds__arrow_container t-slds__arrow-nearpic ">
                <div class="t-slds__arrow_wrapper t-slds__arrow_wrapper-left" data-slide-direction="left">
                  <div class="t-slds__arrow t-slds__arrow-left t-slds__arrow-withbg" style="width: 40px; height: 40px;background-color: rgba(240,240,240,1);">
                    <div class="t-slds__arrow_body t-slds__arrow_body-left" style="width: 9px;">
                      <svg style="display: block" viewBox="0 0 9.3 17"
                          xmlns="http://www.w3.org/2000/svg"
                          xmlns:xlink="http://www.w3.org/1999/xlink">
                        <desc>Left</desc>
                        <polyline
                                fill="none"
                                stroke="#000000"
                                stroke-linejoin="butt"
                                stroke-linecap="butt"
                                stroke-width="1"
                                points="0.5,0.5 8.5,8.5 0.5,16.5"
                        />
                      </svg>
                    </div>
                  </div>
                </div>
                <div class="t-slds__arrow_wrapper t-slds__arrow_wrapper-right" data-slide-direction="right">
                  <div class="t-slds__arrow t-slds__arrow-right t-slds__arrow-withbg" style="width: 40px; height: 40px;background-color: rgba(240,240,240,1);">
                    <div class="t-slds__arrow_body t-slds__arrow_body-right" style="width: 9px;">
                      <svg style="display: block" viewBox="0 0 9.3 17"
                          xmlns="http://www.w3.org/2000/svg"
                          xmlns:xlink="http://www.w3.org/1999/xlink">
                        <desc>Right</desc>
                        <polyline
                                fill="none"
                                stroke="#000000"
                                stroke-linejoin="butt"
                                stroke-linecap="butt"
                                stroke-width="1"
                                points="0.5,0.5 8.5,8.5 0.5,16.5"
                        />
                      </svg>
                    </div>
                  </div>
                </div>
              </div>
              <div class="t-slds__caption__container"></div>
            </div>
          </div>
        </div>
        <script> t_onReady(function() {
          t_onFuncLoad('t_sldsInit', function() {
            t_sldsInit('440227403');
          });
          t_onFuncLoad('t604_init', function () {
            t604_init('440227403');
          });
          setTimeout(function() {
            t_onFuncLoad('t604_arrowWidth', function() {
              t604_arrowWidth('440227403');
            });
          });
          window.onload = function () {
            t_onFuncLoad('t604_arrowWidth', function() {
              t604_arrowWidth('440227403');
            });
          };
        }); </script>
        <style> #rec440227403 .t-slds__bullet_active .t-slds__bullet_body {
          background-color: #222 !important;
        }
        #rec440227403 .t-slds__bullet:hover .t-slds__bullet_body {
          background-color: #222 !important;
        }</style>
      </div> -->
        <div class="reviews">
            <div class="reviews__container">
                <div class="reviews__body">
                    <div class="reviews__slider reviews-slider">
                        <div class="reviews-slider__controls reviews-slider-controls">
                            <div class="reviews-slider-controls__body">
                                <button type="button"
                                    class="reviews-slider-controls__button reviews-slider-controls__button_right">
                                    <svg style="display: block" viewBox="0 0 9.3 17" xmlns="http://www.w3.org/2000/svg"
                                        xmlns:xlink="http://www.w3.org/1999/xlink">
                                        <desc>Right</desc>
                                        <polyline fill="none" stroke="#000000" stroke-linejoin="butt"
                                            stroke-linecap="butt" stroke-width="1" points="0.5,0.5 8.5,8.5 0.5,16.5">
                                        </polyline>
                                    </svg>
                                </button>
                                <button type="button"
                                    class="reviews-slider-controls__button reviews-slider-controls__button_left">
                                    <svg style="display: block" viewBox="0 0 9.3 17" xmlns="http://www.w3.org/2000/svg"
                                        xmlns:xlink="http://www.w3.org/1999/xlink">
                                        <desc>Left</desc>
                                        <polyline fill="none" stroke="#000000" stroke-linejoin="butt"
                                            stroke-linecap="butt" stroke-width="1" points="0.5,0.5 8.5,8.5 0.5,16.5">
                                        </polyline>
                                    </svg>
                                </button>
                            </div>
                        </div>
                        <div class="reviews-slider__wrapper swiper-wrapper">
                            <div class="reviews-slider__slide swiper-slide">
                                <img class="reviews-slider__image" src="./images/Group 125.png" alt="">
                            </div>
                            <div class="reviews-slider__slide swiper-slide">
                                <img class="reviews-slider__image" src="./images/Group 132.png" alt="">
                            </div>
                            <div class="reviews-slider__slide swiper-slide">
                                <img class="reviews-slider__image" src="./images/Group 133.png" alt="">
                            </div>
                            <div class="reviews-slider__slide swiper-slide">
                                <img class="reviews-slider__image" src="./images/Group 134.png" alt="">
                            </div>
                            <div class="reviews-slider__slide swiper-slide">
                                <img class="reviews-slider__image" src="./images/Group 135.png" alt="">
                            </div>
                            <div class="reviews-slider__slide swiper-slide">
                                <img class="reviews-slider__image" src="./images/Group 144.png" alt="">
                            </div>
                            <div class="reviews-slider__slide swiper-slide">
                                <img class="reviews-slider__image" src="./images/Group 145.png" alt="">
                            </div>
                            <div class="reviews-slider__slide swiper-slide">
                                <img class="reviews-slider__image" src="./images/Group 146.png" alt="">
                            </div>
                            <div class="reviews-slider__slide swiper-slide">
                                <img class="reviews-slider__image" src="./images/Group 147.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- data-popup="#popup" -->
        <div class="developer">
            <div class="developer__container">
                <div class="developer__body">
                    <div class="developer__content">
                        <h5 class="developer__label">OUR</h5>
                        <h2 class="developer__title">PARTNERS</h2>
                    </div>
                    <div class="develpoer-slider developer__slider">
                        <div class="develpoer-slider__controls controls-develpoer-slider">
                            <div class="controls-develpoer-slider__actions">
                                <button type="button"
                                    class="controls-develpoer-slider__button controls-develpoer-slider__button_left"></button>
                                <button type="button"
                                    class="controls-develpoer-slider__button controls-develpoer-slider__button_right"></button>
                            </div>
                        </div>
                        <div class="develpoer-slider__wrapper swiper-wrapper">
                            <div class="develpoer-slider__slide swiper-slide">
                                <div class="developer__content-image"
                                    style="background: url('./images/Frame 15.png') center / cover no-repeat;"></div>
                            </div>
                            <div class="develpoer-slider__slide swiper-slide">
                                <div class="developer__content-image"
                                    style="background: url('./images/Frame 16.png') center / cover no-repeat;"></div>
                            </div>
                            <div class="develpoer-slider__slide swiper-slide">
                                <div class="developer__content-image"
                                    style="background: url('./images/Frame 17.png') center / cover no-repeat;"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- <div id="rec415214165" class="r t-rec" style=" " data-animationappear="off" data-record-type="396" >
        <style>#rec415214165 .t396__artboard{height: 182px;background-color: #f8f8f8;}#rec415214165 .t396__filter{height: 182px;}#rec415214165 .t396__carrier{height: 182px;background-position: center center;background-attachment: scroll;background-size:cover;background-repeat:no-repeat;}@media screen and (max-width: 1199px){#rec415214165 .t396__artboard{}#rec415214165 .t396__filter{}#rec415214165 .t396__carrier{background-attachment:scroll;}}@media screen and (max-width: 959px){#rec415214165 .t396__artboard{height: 252px;}#rec415214165 .t396__filter{height: 252px;}#rec415214165 .t396__carrier{height: 252px;}}@media screen and (max-width: 639px){#rec415214165 .t396__artboard{height: 212px;}#rec415214165 .t396__filter{height: 212px;}#rec415214165 .t396__carrier{height: 212px;}}@media screen and (max-width: 479px){#rec415214165 .t396__artboard{height: 142px;}#rec415214165 .t396__filter{height: 142px;}#rec415214165 .t396__carrier{height: 142px;}}#rec415214165 .tn-elem[data-elem-id="1645088928369"]{color:#000000;text-align:LEFT;z-index:1;top: 54px;left: calc(50% - 600px + 36px);width:36px;}#rec415214165 .tn-elem[data-elem-id="1645088928369"] .tn-atom{color:#000000;font-size:15px;font-family:'Mix',Arial,sans-serif;line-height:NaN;font-weight:400;background-position:center center;border-color:transparent;border-style:solid;}@media screen and (max-width: 1199px){#rec415214165 .tn-elem[data-elem-id="1645088928369"]{top: 57px;left: calc(50% - 480px + 11px);}}@media screen and (max-width: 959px){#rec415214165 .tn-elem[data-elem-id="1645088928369"]{top: 37px;left: calc(50% - 320px + 11px);}}@media screen and (max-width: 639px){}@media screen and (max-width: 479px){#rec415214165 .tn-elem[data-elem-id="1645088928369"]{top: 20px;left: calc(50% - 160px + 6px);}#rec415214165 .tn-elem[data-elem-id="1645088928369"] .tn-atom{font-size:10px;-webkit-transform:rotate(0deg); -moz-transform:rotate(0deg); transform:rotate(0deg);}}#rec415214165 .tn-elem[data-elem-id="1645088928377"]{color:#153e8e;text-align:LEFT;z-index:2;top: 71px;left: calc(50% - 600px + 37px);width:210px;}#rec415214165 .tn-elem[data-elem-id="1645088928377"] .tn-atom{color:#153e8e;font-size:40px;font-family:'Mix',Arial,sans-serif;line-height:NaN;font-weight:300;background-position:center center;border-color:transparent;border-style:solid;}@media screen and (max-width: 1199px){#rec415214165 .tn-elem[data-elem-id="1645088928377"]{top: 74px;left: calc(50% - 480px + 11px);}}@media screen and (max-width: 959px){#rec415214165 .tn-elem[data-elem-id="1645088928377"]{top: 54px;left: calc(50% - 320px + 11px);}}@media screen and (max-width: 639px){}@media screen and (max-width: 479px){#rec415214165 .tn-elem[data-elem-id="1645088928377"]{top: 38px;left: calc(50% - 160px + 7px);}#rec415214165 .tn-elem[data-elem-id="1645088928377"] .tn-atom{font-size:20px;}}#rec415214165 .tn-elem[data-elem-id="1652458875698"]{text-align:center;z-index:4;top: 41px;left: calc(50% - 600px + 376px);width:748px;height:100px;}#rec415214165 .tn-elem[data-elem-id="1652458875698"] .tn-atom{font-size:14px;font-family:'Arial',Arial,sans-serif;line-height:1.55;font-weight:400;background-position:center center;border-color:transparent;border-style:solid;}@media screen and (max-width: 1199px){#rec415214165 .tn-elem[data-elem-id="1652458875698"]{top: 46px;left: calc(50% - 480px + 273px);width:673px;height:90px;}}@media screen and (max-width: 959px){#rec415214165 .tn-elem[data-elem-id="1652458875698"]{top: 125px;left: calc(50% - 320px + 7px);width:626px;height:90px;}}@media screen and (max-width: 639px){#rec415214165 .tn-elem[data-elem-id="1652458875698"]{top: 114px;left: calc(50% - 240px + 9px);width:463px;height:84px;}}@media screen and (max-width: 479px){#rec415214165 .tn-elem[data-elem-id="1652458875698"]{top: 67px;left: calc(50% - 160px + 4px);width:313px;height:54px;}}</style>
        <div class='t396'>
          <div class="t396__artboard" data-artboard-recid="415214165" data-artboard-height="182" data-artboard-height-res-640="252" data-artboard-height-res-480="212" data-artboard-height-res-320="142" data-artboard-height_vh="" data-artboard-valign="center" data-artboard-upscale="grid" data-artboard-ovrflw=""
          >
            <div class="t396__carrier" data-artboard-recid="415214165"></div>
            <div class="t396__filter" data-artboard-recid="415214165"></div>
            <div class='t396__elem tn-elem tn-elem__4152141651645088928369' data-elem-id='1645088928369' data-elem-type='text' data-field-top-value="54" data-field-top-res-960-value="57" data-field-top-res-640-value="37" data-field-top-res-320-value="20" data-field-left-value="36" data-field-left-res-960-value="11" data-field-left-res-640-value="11" data-field-left-res-320-value="6" data-field-width-value="36" data-field-axisy-value="top" data-field-axisx-value="left" data-field-container-value="grid" data-field-topunits-value="px" data-field-leftunits-value="px" data-field-heightunits-value="" data-field-widthunits-value="px"
            >
              <h3 class='tn-atom' field='tn_text_1645088928369' >OUR</h3>
            </div>
            <div class='t396__elem tn-elem tn-elem__4152141651645088928377' data-elem-id='1645088928377' data-elem-type='text' data-field-top-value="71" data-field-top-res-960-value="74" data-field-top-res-640-value="54" data-field-top-res-320-value="38" data-field-left-value="37" data-field-left-res-960-value="11" data-field-left-res-640-value="11" data-field-left-res-320-value="7" data-field-width-value="210" data-field-axisy-value="top" data-field-axisx-value="left" data-field-container-value="grid" data-field-topunits-value="px" data-field-leftunits-value="px" data-field-heightunits-value="" data-field-widthunits-value="px"
            >
              <h3 class='tn-atom' field='tn_text_1645088928377' >PARTNERS</h3>
            </div>
            <div class='t396__elem tn-elem tn-elem__4152141651652458875698' data-elem-id='1652458875698' data-elem-type='gallery' data-field-top-value="41" data-field-top-res-960-value="46" data-field-top-res-640-value="125" data-field-top-res-480-value="114" data-field-top-res-320-value="67" data-field-left-value="376" data-field-left-res-960-value="273" data-field-left-res-640-value="7" data-field-left-res-480-value="9" data-field-left-res-320-value="4" data-field-height-value="100" data-field-height-res-960-value="90" data-field-height-res-640-value="90" data-field-height-res-480-value="84" data-field-height-res-320-value="54" data-field-width-value="748" data-field-width-res-960-value="673" data-field-width-res-640-value="626" data-field-width-res-480-value="463" data-field-width-res-320-value="313" data-field-axisy-value="top" data-field-axisx-value="left" data-field-container-value="grid" data-field-topunits-value="px" data-field-leftunits-value="px" data-field-heightunits-value="px" data-field-widthunits-value="px" data-field-filewidth-value="907" data-field-fileheight-value="167" data-field-imgs-value="[{&quot;lid&quot;:&quot;tild6237-6663-4966-b530-643661613561&quot;,&quot;li_img&quot;:&quot;images/tild6431-3030-4234-a132-633934383932__slide2.png&quot;,&quot;li_imgalt&quot;:&quot;Dubai Holding, Elington properties, Select group, Danube properties, &quot;,&quot;li_imgtitle&quot;:&quot;&quot;,&quot;li_imgurl&quot;:&quot;&quot;,&quot;li_imgtarget&quot;:false,&quot;li_imgnofollow&quot;:false,&quot;li_youtube&quot;:&quot;&quot;,&quot;li_vimeo&quot;:&quot;&quot;},{&quot;lid&quot;:&quot;tild6431-6263-4431-a637-333530356565&quot;,&quot;li_img&quot;:&quot;images/tild6338-3462-4131-a633-336633356662__slide1.png&quot;,&quot;li_imgalt&quot;:&quot;Emaar, Damac, Meyda, Meraas&quot;,&quot;li_imgtitle&quot;:&quot;&quot;,&quot;li_imgurl&quot;:&quot;&quot;,&quot;li_imgtarget&quot;:false,&quot;li_imgnofollow&quot;:false,&quot;li_youtube&quot;:&quot;&quot;,&quot;li_vimeo&quot;:&quot;&quot;},{&quot;lid&quot;:&quot;tild3866-3465-4235-a534-316366666665&quot;,&quot;li_img&quot;:&quot;images/tild6564-6430-4365-b332-353237353861__slide3.png&quot;,&quot;li_imgalt&quot;:&quot;Nshama, Shapoorji Pallonji, Dubai South, Sobha Realty&quot;,&quot;li_imgtitle&quot;:&quot;&quot;,&quot;li_imgurl&quot;:&quot;&quot;,&quot;li_imgtarget&quot;:false,&quot;li_imgnofollow&quot;:false,&quot;li_youtube&quot;:&quot;&quot;,&quot;li_vimeo&quot;:&quot;&quot;}]" data-field-slds_arrowcolor-value="#000" data-field-slds_arrowbgcolor-value="#e8e8e8" data-field-slds_dotsbgcolor-value="#999999" data-field-slds_dotsbgcoloractive-value="#222" data-field-slds_playiconcolor-value="#fff" data-field-slds_stretch-value="cover" data-field-slds_imgposition-value="center center" data-field-slds_loop-value="loop" data-field-slds_loop-value="loop" data-field-slds_arrowalign-value="center" data-field-slds_arrowbetweenmargin-value="10" data-field-slds_playiconsize-value="70" data-field-slds_dotssize-value="8" data-field-slds_dotscontrols-value="none" data-field-slds_arrowcontrols-value="near" data-field-slds_arrowsize-value="s" data-field-slds_arrowlinesize-value="1" data-field-slds_imgposition-value="center center" data-field-slds_captiontopmargin-value="20" data-field-slds_dotsvmargin-value="10" data-field-slds_captionwidth-value="80" data-field-slds_arrowhmargin-value="20" data-field-slds_dotshmargin-value="15" data-field-slds_arrowvmargin-value="10" data-field-borderstyle-value="solid"
            >
              <div class='tn-atom tn-atom__gallery'></div>
              <link rel="stylesheet" href="css/tilda-slds-1.4.min.css">
              <link rel="stylesheet" href="css/tilda-zero-gallery-1.0.min.css">
              <script>t_onReady(function () {
                var zeroGalleryOnLoad = function () {
                  var sldsOnLoad = function () {
                    t_onFuncLoad('t_zeroGallery__init', function () {
                      var recid = '415214165';
                      var elemid = '1652458875698';
                      t_zeroGallery__init(recid, elemid);
                    });
                  };
                  var sldsJS = 'js/tilda-slds-1.4.min.js';
                  if (document.querySelector("script[src^='" + sldsJS + "']")) {
                    sldsOnLoad();
                  } else {
                    var script = document.createElement('script');
                    script.src = sldsJS;
                    script.async = true;
                    script.onload = sldsOnLoad();
                    script.onerror = function () {
                      console.log('Error load SLDS.js in zeroblock');
                    };
                    document.head.appendChild(script);
                  }
                };
                var zeroGalleryJS = 'js/tilda-zero-gallery-1.0.min.js';
                if (document.querySelector("script[src^='" + zeroGalleryJS + "']")) {
                  zeroGalleryOnLoad();
                } else {
                  var script = document.createElement('script');
                  script.src = zeroGalleryJS;
                  script.async = true;
                  script.onload = zeroGalleryOnLoad();
                  script.onerror = function () {
                    console.log('Error load Zero Gallery js in zeroblock');
                  };
                  document.head.appendChild(script);
                }
              });</script>
            </div> 
            
            <div class="swiper mySwiper">
              <div class="swiper-wrapper">
                <div class="swiper-slide">
                  <img src="https://swiperjs.com/demos/images/nature-1.jpg" />
                </div>
                <div class="swiper-slide">
                  <img src="https://swiperjs.com/demos/images/nature-2.jpg" />
                </div>
                <div class="swiper-slide">
                  <img src="https://swiperjs.com/demos/images/nature-3.jpg" />
                </div>
                <div class="swiper-slide">
                  <img src="https://swiperjs.com/demos/images/nature-4.jpg" />
                </div>
              </div>
              <div class="swiper-button-next"></div>
              <div class="swiper-button-prev"></div>
              <div class="swiper-pagination"></div>
            </div>
          </div>
        </div> 
      </div>    -->
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
                    <div class="top-footer__column top-footer__column_with-items">
                        <div class="top-footer__column-item">
                            <h5 class="top-footer__title top-footer-title">CONTACT US</h5>
                            <a href="tel:971588070001" class="top-footer-title top-footer__link">+971 58 807
                                0001</a>
                        </div>
                        <div class="top-footer__column-item">
                            <h5 class="top-footer__title top-footer-title">EMAIL US</h5>
                            <a href="mailto:info@fcproperties.ae"
                                class="top-footer-title top-footer__link">info@fcproperties.ae</a>
                        </div>
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
                        <a href="#" onclick="Marquiz.showModal('62bafdc70d6747003f10d84b')"
                            class="bottom-footer__link">
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
                <input autocomplete="off" type="text" name="name" data-error="Ошибка" placeholder="Your name" class="form-popup__input">
              </div>
              <div class="form-popup__column">
                <input autocomplete="off" type="text" name="phone" data-error="Ошибка" placeholder="Phone with a country code" class="form-popup__input">
              </div>
              <div class="form-popup__column">
                <input autocomplete="off" type="text" name="email" data-error="Ошибка" placeholder="E-mail" class="form-popup__input">
              </div>
              <div class="form-popup__column">
                <button type="submit" name="submit_lead" class="form-popup__button">SEND</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div> 
    
    <div id="popup2" aria-hidden="true" class="popup popup_form">
      <div class="popup__wrapper">
        <div class="popup__content">
          <img src="./images/popup.png" class="popup__image_form" alt="">
          <div class="popup__body">
            <h3 class="popup__title">Download Brochure Now</h3>
            <form class="popup__form form-popup" action="#" method="POST">
              <div class="form-popup__column">
                <input autocomplete="off" type="text" name="name" data-error="Wrong" placeholder="Your name" class="form-popup__input">
              </div>
              <div class="form-popup__column">
                <input autocomplete="off" type="text" name="phone" data-error="Wrong" placeholder="Phone with a country code" class="form-popup__input">
              </div>
              <div class="form-popup__column">
                <input autocomplete="off" type="text" name="email" data-error="Wrong" placeholder="E-mail" class="form-popup__input">
              </div>
              <div class="form-popup__column">
                <button type="submit" onclick=" window.open('', '_blank');" name="submit_lead" class="form-popup__button">Download</button>
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
    <script>
        window.__lc = window.__lc || {};
        window.__lc.license = 14222295;;
        (function(n, t, c) {
            function i(n) {
                return e._h ? e._h.apply(null, n) : e._q.push(n)
            }
            var e = {
                _q: [],
                _h: null,
                _v: "2.0",
                on: function() {
                    i(["on", c.call(arguments)])
                },
                once: function() {
                    i(["once", c.call(arguments)])
                },
                off: function() {
                    i(["off", c.call(arguments)])
                },
                get: function() {
                    if (!e._h) throw new Error("[LiveChatWidget] You can't use getters before load.");
                    return i(["get", c.call(arguments)])
                },
                call: function() {
                    i(["call", c.call(arguments)])
                },
                init: function() {
                    var n = t.createElement("script");
                    n.async = !0, n.type = "text/javascript", n.src = "https://cdn.livechatinc.com/tracking.js",
                        t.head.appendChild(n)
                }
            };
            !n.__lc.asyncInit && e.init(), n.LiveChatWidget = n.LiveChatWidget || e
        }(window, document, [].slice))
    </script>
    <noscript><a href="https://www.livechat.com/chat-with/14222295/" rel="nofollow">Chat with us</a>, powered by <a
            href="https://www.livechat.com/?welcome" rel="noopener nofollow" target="_blank">LiveChat</a></noscript>

    <script src="js/jquery/jquery-2.2.4.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/plugins.js"></script>
    <script src="js/classy-nav.min.js"></script>
    <script src="js/jquery-ui.min.js"></script>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script>
        const swiper = new Swiper(".develpoer-slider", {
            spaceBetween: 30,
            effect: "fade",
            loop: true,
            navigation: {
                nextEl: ".develpoer-slider .controls-develpoer-slider__button_left",
                prevEl: ".develpoer-slider .controls-develpoer-slider__button_right",
            },
        });

        new Swiper(".reviews-slider", {
            slidesPerView: 1,
            spaceBetween: 30,
            // centeredSlides: true,
            loop: true,
            speed: 800,
            navigation: {
                nextEl: ".reviews-slider .reviews-slider-controls__button_left",
                prevEl: ".reviews-slider .reviews-slider-controls__button_right",
            },
        });

        new Swiper('.banner__body', {
            observer: true,
            observeParents: true,
            slidesPerView: 1,
            spaceBetween: 20,
            watchOverflow: false,
            loop: true,
            loopAdditionalSlides: 2,
            preloadImages: false,
            speed: 800,

            pagination: {
                el: ".banner__pagination",
                clickable: true,
            },
        });

        new Swiper('.banner__body', {
            observer: true,
            observeParents: true,
            slidesPerView: 1,
            spaceBetween: 20,
            watchOverflow: false,
            loop: true,
            loopAdditionalSlides: 2,
            preloadImages: false,
            speed: 800,

            pagination: {
                el: ".banner__pagination",
                clickable: true,
            },
        });
    </script>
    <script src="js/active.js"></script>
    <script src="js/script.js"></script>
</body>

</html>