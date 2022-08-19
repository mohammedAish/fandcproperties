<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "propertyfinder";
$conn = new mysqli($servername, $username, $password, $database);

$id = $_GET['projectNo'];


$sql = "SELECT * FROM api_data WHERE property_id = $id ";
$sql1 = "SELECT `lat`,`lng` FROM api_data WHERE property_id = $id ";
$sql2 = "SELECT * FROM api_data WHERE property_id = $id ";
$rs_result = $conn->query($sql);
$res = $conn->query($sql1);
$res2 = $conn->query($sql2);
if( $res ) $rs =$res->fetch_assoc() ;
if( $res2 ) $rs2 =$res2->fetch_assoc() ;


// Lead Form
if(isset($_POST['submit'])){

    $proID = $rs2['property_id'];
    $agentID = $rs2['agent_id'];
    $lead_name = $_POST['lead_name'];
    $lead_phone = $_POST['lead_phone'];
    $lead_email = $_POST['lead_email'];
    $lead_message = $_POST['lead_message'];

    $sqllead = "INSERT INTO `property_lead` (`id`, `property_id`, `agent_id`, `lead_name`, `lead_phone`, `lead_email`, `lead_message`) VALUES (NULL, '$proID', '$agentID', '$lead_name', '$lead_phone', '$lead_email', '$lead_message');";

    if ($conn->query($sqllead) === TRUE) {

    } else {

    }

}

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
        (function (w, d, s, o) {
            var j = d.createElement(s); j.async = true; j.src = '//script.marquiz.io/v2.js'; j.onload = function () {
                if (document.readyState !== 'loading') Marquiz.init(o);
                else document.addEventListener("DOMContentLoaded", function () {
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
        }
        );
    </script>
    <!-- Marquiz script end -->

    <link rel="shortcut icon" href="images/tild3438-6537-4632-b965-363064353161__favicon.ico" type="image/x-icon" />
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAk1cygku8dx0DrpE8IpRs0331s3DzC-08"></script>
    <script type='text/javascript'>


        (function(){

            var map,marker,latlng,bounds,infowin;
            /* initial locations for map */
            var _lat= <?php echo $rs['lng']; ?>;
            var _lng= <?php echo $rs['lat'] ;?>;

            var getacara=0; /* What should this be? is it a function, a variable ???*/

            function showMap(){
                /* set the default initial location */
                latlng={ lat: _lat, lng: _lng };

                bounds = new google.maps.LatLngBounds();
                infowin = new google.maps.InfoWindow();

                /* invoke the map */
                map = new google.maps.Map( document.getElementById('map'), {
                    center:latlng,
                    zoom: 13
                });

                /* show the initial marker */
                marker = new google.maps.Marker({
                    position:latlng,
                    map: map,
                    title: '<?php echo $rs2['title_en'].'<br><br><img src="'.$rs2['photo1'].'" width="255" height="150"><br> <strong> AED '.$rs2['price'] .' </strong><br> <a href="https://www.google.com/maps/search/?api=1&query='.$rs2['lng'].','.$rs['lat'].'" target="_blank"> Show on google maps </a>' ;?>'
                });
                bounds.extend( marker.position );


                /* I think you can use the jQuery like this within the showMap function? */


                /* simple function just to add a new marker */

                google.maps.event.addListener( marker, 'click', function(event){
                    infowin.setContent(this.title);
                    infowin.open(map,this);
                    infowin.setPosition(this.position);
                }.bind( marker ));

                bounds.extend( marker.position );

            }


            document.addEventListener( 'DOMContentLoaded', showMap, false );
        }());
    </script>
    <meta charset="utf-8" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="yandex-verification" content="c616aa7c667e6897" />
    <title><?php echo $rs2['sub_community'];?></title>
    <meta name="keywords" content="<?php echo $rs2['title_en'];?>">
    <meta name="description" content="<?php echo $rs2["description"]; ?>">
    <meta property="og:url" content="https://fandcproperties.ae" />
    <meta property="og:title" content="<?php echo $rs2['title_en'];?>" />
    <meta property="og:description" content="<?php echo $rs2["description"]; ?>" />
    <meta property="og:type" content="website" />
    <meta property="og:image" content="<?php echo $rs2["photo1"]; ?>" />
    <link rel="canonical" href="https://fandcproperties.ae">
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
    <script src="js/jquery-1.10.2.min.js" onerror="this.loaderr='y';"></script>
    <!-- <script src="js/tilda-scripts-3.0.min.js" onerror="this.loaderr='y';"></script> -->
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
        function gtag() { dataLayer.push(arguments); }
        gtag('js', new Date());

        gtag('config', 'AW-10888899722');
    </script>
    <script type="text/javascript">window.dataLayer = window.dataLayer || [];</script>
    <script type="text/javascript">(function () {
            if ((/bot|google|yandex|baidu|bing|msn|duckduckbot|teoma|slurp|crawler|spider|robot|crawling|facebook/i.test(navigator.userAgent)) === false && typeof (sessionStorage) != 'undefined' && sessionStorage.getItem('visited') !== 'y' && document.visibilityState) {
                var style = document.createElement('style');
                style.type = 'text/css';
                style.innerHTML = '@media screen and (min-width: 980px) {.t-records {opacity: 0;}.t-records_animated {-webkit-transition: opacity ease-in-out .2s;-moz-transition: opacity ease-in-out .2s;-o-transition: opacity ease-in-out .2s;transition: opacity ease-in-out .2s;}.t-records.t-records_visible {opacity: 1;}}';
                document.getElementsByTagName('head')[0].appendChild(style);
                function t_setvisRecs() {
                    var alr = document.querySelectorAll('.t-records');
                    Array.prototype.forEach.call(alr, function (el) {
                        el.classList.add("t-records_animated");
                    });
                    setTimeout(function () {
                        Array.prototype.forEach.call(alr, function (el) {
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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script class="u-script" type="text/javascript" src="jquery.js" defer=""></script>
    <script class="u-script" type="text/javascript" src="nicepage.js" defer=""></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css" />
    <link rel="stylesheet" href="Home.css" media="screen">
    <link rel="stylesheet" href="More.css" media="screen">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1/jquery.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/galleria/1.5.7/galleria.min.js"></script>
    <link rel="stylesheet" href="style.css">
    <meta name="generator" content="Nicepage 4.12.5, nicepage.com">
    <link id="u-theme-google-font" rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i">
    <link id="u-page-google-font" rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Playfair+Display:400,400i,500,500i,600,600i,700,700i,800,800i,900,900i|Montserrat:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i">
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
</head>

<body>
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
                                            <a href="PropertyManager.php" class="menu__sub-flag">
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
                                <button data-spoller type="button" class="menu__flag">
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

<?php

                        if ($rs_result->num_rows > 0) {

                            while($row = $rs_result->fetch_assoc()) {

                                echo '<main class="page">
        <section class="page__more-gallery more-gallery">
            <div class="more-gallery__container container">
                <div class="more-gallery__body">
                    <div class="more-gallery__item more-gallery__item_big">
                    <div type="button" onclick="openModal();currentSlide(1)" class="more-gallery__ibg">
                    <img src="'.$row['photo1'].'" alt="">
                     </div>
                    </div>
                    <div class="more-gallery__item more-gallery__item_min">
                        <div class="more-gallery__sub-body">
                            <div class="more-gallery__sub-item">
                            <div type="button" onclick="openModal();currentSlide(2)"
                            class="more-gallery__sub-ibg">
                            <img src="'.$row['photo2'].'" alt="">
                        </div>
                            </div>
                            <div class="more-gallery__sub-item more-gallery__sub-item_buttons">
                                <div href="#" class="more-gallery__sub-ibg">
                                    <img src="'.$row['photo3'].'" alt="">
                                    <div class="more-gallery__group-buttons">
                                        <div class="more-gallery__group-body">
                                        <div type="button" onclick="openModal();currentSlide(3)"
                                        class="more-gallery__button">
                                        +8 more photo
                                    </div>
                                            <div type="button" onclick="openModal();currentSlide(3)"
                                                class="more-gallery__button">
                                                Video Tour
                                                <img src="./images/play-icon.svg" alt="">
                                            </div>
                                         </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="page__information information">
            <div class="information__container">
                <div class="information__body">
                    <section class="information-content">
                        <div class="information-content__body">
                            <div class="information-content__header">
                                <p class="information-content__label">';if ($row['property_type'] == "AP")
                                echo 'APARTMENT';
                            elseif($row['property_type'] == "TH")
                                echo 'TOWNHOUSE';
                            elseif($row['property_type'] == "VH")
                                echo 'VILLA';
                            elseif($row['property_type'] == "OF")
                                echo 'OFFICE';
                                echo ' for ';  
                                if($row['offering_type'] == "RR" || $row['offering_type']== "CR"){
                                    echo "rent";
                                }else{
                                    echo "sell";
                                }
                                
                                echo' in '.$row["community"].' , '.$row["sub_community"].'</p>
                                <h1 class="information-content__title">'.$row["title_en"].'</h1>
                                <div class="information-content__group-icons group-icons">
                                    <div class="group-icons__item">
                                        <img src="./images/home-icon.svg" alt="" class="group-icons__icon">
                                        <div class="group-icons__type">Property type: </div>
                                        <p class="group-icons__value">';if ($row['property_type'] == "AP")
                                        echo 'APARTMENT';
                                    elseif($row['property_type'] == "TH")
                                        echo 'TOWNHOUSE';
                                    elseif($row['property_type'] == "VH")
                                        echo 'VILLA';
                                    elseif($row['property_type'] == "OF")
                                        echo 'OFFICE';
                                        echo'</p>
                                    </div>
                                    <div class="group-icons__item">
                                        <img src="./images/home-icon.svg" alt="" class="group-icons__icon">
                                        <div class="group-icons__type">Property size: </div>
                                        <p class="group-icons__value">'.$row["property_size"].' Sq.Ft</p>
                                    </div>
                                    <div class="group-icons__item">
                                        <img src="./images/home-icon.svg" alt="" class="group-icons__icon">
                                        <div class="group-icons__type">Bedrooms: </div>
                                        <p class="group-icons__value">'.$row["bedroom"].'</p>
                                    </div>
                                    <div class="group-icons__item">
                                        <img src="./images/home-icon.svg" alt="" class="group-icons__icon">
                                        <div class="group-icons__type">Bathrooms: </div>
                                        <p class="group-icons__value">'.$row["bathroom"].'</p>
                                    </div>
                                </div>
                            </div>
                            <div class="information-content__main">
                                <div class="information-content__text-content">
                                    <h2 class="information-content__title">Description</h2>
                                    <p class="information-content__text">';
                                    echo nl2br($row["description"]).'
                                    </p>
                                </div>
                                <div class="information-content__tags">
                                    <a href="#" class="information-content__tag">
                                        Buy Property in Dubai
                                    </a>
                                    <a href="#" class="information-content__tag">
                                        Buy Property in Dubai
                                    </a>
                                    <a href="#" class="information-content__tag">
                                        Property in Dubai
                                    </a>
                                    <a href="#" class="information-content__tag">
                                        Dubai Marina
                                    </a>
                                    <a href="#" class="information-content__tag">
                                        Emaar
                                    </a>
                                    <a href="#" class="information-content__tag">
                                        Damac
                                    </a>
                                    <a href="#" class="information-content__tag">
                                        Property in Dubai
                                    </a>
                                    <a href="#" class="information-content__tag">
                                        Buy Property in Dubai
                                    </a>
                                    <a href="#" class="information-content__tag">
                                        Damac
                                    </a>
                                    <a href="#" class="information-content__tag">
                                        Dubai Marina
                                    </a>
                                    <a href="#" class="information-content__tag">
                                        Emaar
                                    </a>
                                </div>
                            </div>
                        </div>
                    </section>
                    <aside class="information-aside">
                        <div class="information-aside__profile">
                            <div class="information-aside__title-actions">
                                <h3 class="information-aside__title">
                                    Price: 
                                    <div class="information-aside__value">
                                        <span data-currency="aed" class="">'.number_format(floatval($row["price"])).' aed</span>
                                        <span data-currency="aud" class="is-hidden">53,293 aud</span>
                                        <span data-currency="cad" class="is-hidden">49,682 cad</span>
                                        <span data-currency="chf" class="is-hidden">35,350 chf</span>
                                        <span data-currency="eur" class="is-hidden">32,795 eur</span>
                                        <span data-currency="gbp" class="is-hidden">29,314 gbp</span>
                                        <span data-currency="inr" class="is-hidden">2,776,557 inr</span>
                                        <span data-currency="pkr" class="is-hidden">6,061,815 pkr</span>
                                        <span data-currency="try" class="is-hidden">248,524 try</span>
                                        <span data-currency="usd" class="is-hidden">36,755 usd</span>
                                    </div>
                                </h3>
                                <div class="information-aside__button-body">
                                    <button type="button" class="information-aside__button"><img src="./images/tripple.svg" alt=""></button>
                                    <div class="information-aside__select">
                                        <div class="information-aside__select-body">
                                            <button type="button" data-option-currency="aed" class="information-aside__option _selected">
                                                AED
                                            </button>
                                            <button type="button" data-option-currency="aud" class="information-aside__option">
                                                aud
                                            </button>
                                            <button type="button" data-option-currency="cad" class="information-aside__option">
                                                cad
                                            </button>
                                            <button type="button" data-option-currency="chf" class="information-aside__option">
                                                chf
                                            </button>
                                            <button type="button" data-option-currency="eur" class="information-aside__option">
                                                eur
                                            </button>
                                            <button type="button" data-option-currency="gbp" class="information-aside__option">
                                                gbp
                                            </button>
                                            <button type="button" data-option-currency="inr" class="information-aside__option">
                                                inr
                                            </button>
                                            <button type="button" data-option-currency="pkr" class="information-aside__option">
                                                pkr
                                            </button>
                                            <button type="button" data-option-currency="try" class="information-aside__option">
                                                try
                                            </button>
                                            <button type="button" data-option-currency="usd" class="information-aside__option">
                                                usd
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <p class="information-aside__text">Estimated Mortgage <img src="./images/calculator.svg" alt=""> 14 452 AED / month</p>
                            <div class="information-aside__user">
                                <img src="'.$row["agent_photo"].'" alt="">
                                <div class="information-aside__user-name">
                                    <h4 class="information-aside__name">'.$row["agent_name"].'</h4>
                                    <p class="information-aside__professian">'.$row["agent_info"].'</p>
                                </div>
                            </div>
                            <div class="information-aside__button-actions">
                                <a href="tel:00'.$row['agent_phone'].'" class="information-aside__button-action information-aside__button_phone">
                                    <img src="./images/phone-call.svg" alt="">
                                    Call
                                </a>
                                <a href="mailto:'.$row['agent_email'].'" class="information-aside__button-action information-aside__button_email">
                                    <img src="./images/email.svg" alt="">
                                    Email
                                </a>
                                <a href="https://wa.me/+'.str_replace(' ', '', $row['agent_phone']).'" class="information-aside__button-action information-aside__button_whatsapp">
                                    <img src="./images/whatsapp.svg" alt="">
                                    Whatsapp
                                </a>
                            </div>
                        </div>
                        <div class="information-aside__banner banner">
                            <div class="banner__body">
                                <div class="banner__wrapper swiper-wrapper">';
                                $gal = "SELECT * FROM gallery";
                                $gal_res = $conn->query($gal);
                                if ($gal_res->num_rows > 0) {
        
                                    while($row2 = $gal_res->fetch_assoc()) {

                                echo' <div class="banner__slider swiper-slide">
                                        <div class="banner__image">
                                            <img src="admin/banners/'.$row2['name'].'/'.$row2['pic'].'" alt="">
                                            <a href="'.$row2['link'].'" class="banner__link" data-popup="#popup">Show More</a>
                                        </div>
                                    </div>';
                                }

                            } else {
                        }
                                echo'</div>
                                <div class="banner__pagination">

                                </div>
                            </div>
                        </div>
                    </aside>
                </div>
            </div>
        </section>';

?>
        <section class="page__map-more map-more">
            <div class="map-more__container">
                <h2 class="map-more__title">Location</h2>
                <div class="map-more__body">
                <div id="map" style='width:100%;height:400px'></div>
                </div>
            </div>
        </section>
    </main>
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
                            <a href="PropertyManager.php" class="bottom-footer__link">
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
    <div id="modal-gallery" class="modal-gallary-mine">
        <div class="modal-gallary-mine__wrapper">
            <span class="modal-gallary-mine__close" onclick="closeModal()">&times;</span>
            <div class="modal-contents">
                <div class="modal-contents__wrapper">
                    <div class="modal-contents__slide">
                        <img src="<?php echo $row['photo1']; ?>">
                    </div>
                    <div class="modal-contents__slide">
                        <img src="<?php echo $row['photo2']; ?>">
                    </div>
                    <div class="modal-contents__slide">
                        <img src="<?php echo $row['photo3']; ?>">
                    </div>
                    <div class="modal-contents__slide">
                        <img src="<?php echo $row['photo4']; ?>">
                    </div>
                    <div class="modal-contents__slide">
                        <img src="<?php echo $row['photo5']; ?>">
                    </div>
                    <div class="modal-contents__slide">
                        <img src="<?php echo $row['photo6']; ?>">
                    </div>
                    <div class="modal-contents__slide">
                        <img src="<?php echo $row['photo7']; ?>">
                    </div>
                    <div class="modal-contents__slide">
                        <img src="<?php echo $row['photo8']; ?>">
                    </div>
                    <div class="modal-contents__slide">
                        <img src="<?php echo $row['photo9']; ?>">
                    </div>
                    <div class="modal-contents__slide">
                        <img src="<?php echo $row['photo10']; ?>">
                    </div>
                </div>
                <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                <a class="next" onclick="plusSlides(1)">&#10095;</a>

                <!-- <div class="caption-container">
                    <p id="caption"></p>
                </div> -->
                <!-- <div class="modal-contents__thumb">
                    <div class="modal-contents__thumb-item">
                        <img class="demo cursor" src="./images/10.png" style="width:100%" onclick="currentSlide(1)" alt="Nature and sunrise">
                    </div>
                    <div class="modal-contents__thumb-item">
                        <img class="demo cursor" src="./images/10.png" style="width:100%" onclick="currentSlide(2)" alt="Snow">
                    </div>
                    <div class="modal-contents__thumb-item">
                        <img class="demo cursor" src="./images/10.png" style="width:100%" onclick="currentSlide(3)" alt="Mountains and fjords">
                    </div>
                    <div class="modal-contents__thumb-item">
                        <img class="demo cursor" src="./images/10.png" style="width:100%" onclick="currentSlide(4)" alt="Northern Lights">
                    </div>
                </div> -->
            </div>
        </div>
    </div>
    <div id="gallery" aria-hidden="true" class="popup popup-gallery">
        <div class="popup__wrapper">
            <div class="popup__content">
                <div class="popup-gallery">
                    <div class="popup-gallery__wrapper">
                        <div class="popup-gallery__slide">
                            <img src="">
                        </div>
                        <div class="popup-gallery__slide">
                            <img src="./images/10.png">
                        </div>
                        <div class="popup-gallery__slide">
                            <img src="./images/10.png">
                        </div>
                        <div class="popup-gallery__slide">
                            <img src="./images/10.png">
                        </div>
                    </div>
                    <div class="popup-gallery__thumbs">
                        <div class="popup-gallery__column">
                            <img class="popup-gallery__thumbs-image" src="./images/10.png" alt="">
                        </div>
                        <div class="popup-gallery__column">
                            <img class="popup-gallery__thumbs-image" src="./images/10.png" alt="">
                        </div>
                        <div class="popup-gallery__column">
                            <img class="popup-gallery__thumbs-image" src="./images/10.png" alt="">
                        </div>
                        <div class="popup-gallery__column">
                            <img class="popup-gallery__thumbs-image" src="./images/10.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
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
    <?php 
            }
      } else {
            echo "0 results";
        }
    
        ?>
    <script src="js/jquery/jquery-2.2.4.min.js"></script>
    <!-- Popper js -->
    <script src="js/popper.min.js"></script>
    <!-- Bootstrap js -->
    <script src="js/bootstrap.min.js"></script>
    <!-- Plugins js -->
    <script src="js/plugins.js"></script>
    <script src="js/classy-nav.min.js"></script>
    <script src="js/jquery-ui.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/galleria/1.6.1/galleria.min.js"></script> -->
    <script>
        function openModal() {
            const body = document.querySelector("body");
            body.style.overflow = "hidden";
            document.getElementById("modal-gallery").style.display = "block";
        }

        function closeModal() {
            const body = document.querySelector("body");
            body.style.overflow = "auto";
            document.getElementById("modal-gallery").style.display = "none";
        }

        var slideIndex = 1;
        showSlides(slideIndex);

        function plusSlides(n) {
            showSlides(slideIndex += n);
        }

        function currentSlide(n) {
            showSlides(slideIndex = n);
        }

        function showSlides(n) {
            var i;
            var slides = document.querySelectorAll(".modal-contents__slide");
            // var dots = document.querySelectorAll(".modal-content__thumb-item");
            // var captionText = document.getElementById("caption");
            if (n > slides.length) { slideIndex = 1 }
            if (n < 1) { slideIndex = slides.length }
            for (i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";
            }
            // for (i = 0; i < dots.length; i++) {
            //     dots[i].className = dots[i].className.replace(" active", "");
            // }
            console.log(slideIndex);
            slides[slideIndex - 1].style.display = "block";
            // dots[slideIndex-1].className += " active";
            // captionText.innerHTML = dots[slideIndex-1].alt;
        }

        if (document.querySelector('.banner__body')) {
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
        }
    </script>
    <!-- Custom scripts -->
    <script src="js/script.js"></script>
    <!-- Active js -->
    <script src="js/active.js"></script>
</body>

</html>