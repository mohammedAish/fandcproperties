<?php 
session_start();
if (!isset($_SESSION["id"])){
	header("Location: auth/login.php");
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
$awards = "SELECT * FROM `award`";
$rs_result = $conn->query($awards);

if(isset($_GET['id']))
{
    $id = $_GET['id'];
    $del = "DELETE FROM award WHERE id=$id";
    mysqli_query($conn, $del);
    header("Location:awards.php");
}
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>Awards</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="A premium admin dashboard template by Mannatthemes" name="description" />
        <meta content="Mannatthemes" name="author" />

        <!-- App favicon -->
        <link rel="shortcut icon" href="assets/images/favicon.ico">

        <!-- App css -->
        <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/icons.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/metisMenu.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/style.css" rel="stylesheet" type="text/css" />

    </head>

    <body>

         <!-- Top Bar Start -->
         <div class="topbar">

<!-- LOGO -->
<div class="topbar-left">
    <a href="analytics/analytics-index.html" class="logo">
        <span>
            <img src="assets/images/logo-sm.png" alt="logo-small" class="logo-sm">
        </span>
        <span>
            <img src="assets/images/logo-light.png" alt="logo-large" class="logo-lg">
        </span>                                     
    </a>
</div>
<!--end logo-->
<!-- Navbar -->
<nav class="navbar-custom">    
    <ul class="list-unstyled topbar-nav float-right mb-0"> 
        <li class="hidden-sm">
            <a class="nav-link dropdown-toggle waves-effect waves-light" data-toggle="dropdown" href="javascript: void(0);" role="button"
                aria-haspopup="false" aria-expanded="false">
                English <img src="assets/images/flags/us_flag.jpg" class="ml-2" height="16" alt=""/> <i class="mdi mdi-chevron-down"></i> 
            </a>
            <div class="dropdown-menu dropdown-menu-right">
                <a class="dropdown-item" href="javascript: void(0);"><span> German </span><img src="assets/images/flags/germany_flag.jpg" alt="" class="ml-2 float-right" height="14"/></a>
                <a class="dropdown-item" href="javascript: void(0);"><span> Italian </span><img src="assets/images/flags/italy_flag.jpg" alt="" class="ml-2 float-right" height="14"/></a>
                <a class="dropdown-item" href="javascript: void(0);"><span> French </span><img src="assets/images/flags/french_flag.jpg" alt="" class="ml-2 float-right" height="14"/></a>
                <a class="dropdown-item" href="javascript: void(0);"><span> Spanish </span><img src="assets/images/flags/spain_flag.jpg" alt="" class="ml-2 float-right" height="14"/></a>
                <a class="dropdown-item" href="javascript: void(0);"><span> Russian </span><img src="assets/images/flags/russia_flag.jpg" alt="" class="ml-2 float-right" height="14"/></a>
            </div>
        </li>

        <li class="dropdown notification-list">
            <a class="nav-link dropdown-toggle arrow-none waves-light waves-effect" data-toggle="dropdown" href="#" role="button"
                aria-haspopup="false" aria-expanded="false">
                <i class="dripicons-bell noti-icon"></i>0
                <span class="badge badge-danger badge-pill noti-icon-badge">2</span>
            </a>
            <div class="dropdown-menu dropdown-menu-right dropdown-lg">
                <!-- item-->
                <h6 class="dropdown-item-text">
                    Notifications (18)
                </h6>
                <div class="slimscroll notification-list">
                    <!-- item-->
                    <a href="javascript:void(0);" class="dropdown-item notify-item active">
                        <div class="notify-icon bg-success"><i class="mdi mdi-cart-outline"></i></div>
                        <p class="notify-details">Your order is placed<small class="text-muted">Dummy text of the printing and typesetting industry.</small></p>
                    </a>
                    <!-- item-->
                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                        <div class="notify-icon bg-warning"><i class="mdi mdi-message"></i></div>
                        <p class="notify-details">New Message received<small class="text-muted">You have 87 unread messages</small></p>
                    </a>
                    <!-- item-->
                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                        <div class="notify-icon bg-info"><i class="mdi mdi-glass-cocktail"></i></div>
                        <p class="notify-details">Your item is shipped<small class="text-muted">It is a long established fact that a reader will</small></p>
                    </a>
                    <!-- item-->
                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                        <div class="notify-icon bg-primary"><i class="mdi mdi-cart-outline"></i></div>
                        <p class="notify-details">Your order is placed<small class="text-muted">Dummy text of the printing and typesetting industry.</small></p>
                    </a>
                    <!-- item-->
                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                        <div class="notify-icon bg-danger"><i class="mdi mdi-message"></i></div>
                        <p class="notify-details">New Message received<small class="text-muted">You have 87 unread messages</small></p>
                    </a>
                </div>
                <!-- All-->
                <a href="javascript:void(0);" class="dropdown-item text-center text-primary">
                    View all <i class="fi-arrow-right"></i>
                </a>
            </div>
        </li>

        <li class="dropdown">
            <a class="nav-link dropdown-toggle waves-effect waves-light nav-user" data-toggle="dropdown" href="#" role="button"
                aria-haspopup="false" aria-expanded="false">
                <img src="img/agents/<?php echo $_SESSION['pic']; ?> " alt="profile-user" class="rounded-circle" /> 
                <span class="ml-1 nav-user-name hidden-sm"><?php echo $_SESSION['full_name'] ; ?> <i class="mdi mdi-chevron-down"></i> </span>
            </a>
            <div class="dropdown-menu dropdown-menu-right">
                <a class="dropdown-item" href="profile.php"><i class="dripicons-user text-muted mr-2"></i> Profile</a>
                <a class="dropdown-item" href="#"><i class="dripicons-wallet text-muted mr-2"></i> My Wallet</a>
                <a class="dropdown-item" href="#"><i class="dripicons-gear text-muted mr-2"></i> Settings</a>
                <a class="dropdown-item" href="#"><i class="dripicons-lock text-muted mr-2"></i> Lock screen</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="auth/user_logout.php"><i class="dripicons-exit text-muted mr-2"></i> Logout</a>
            </div>
        </li>
    </ul><!--end topbar-nav-->

    <ul class="list-unstyled topbar-nav mb-0">                        
        <li>
            <button class="button-menu-mobile nav-link waves-effect waves-light">
                <i class="dripicons-menu nav-icon"></i>
            </button>
        </li>
        <li class="hide-phone app-search">
            <form role="search" class="">
                <input type="text" placeholder="Search..." class="form-control">
                <a href=""><i class="fas fa-search"></i></a>
            </form>
        </li>
    </ul>
</nav>
<!-- end navbar-->
</div>
<!-- Top Bar End -->

<div class="page-wrapper">
 <!-- Left Sidenav -->
 <div class="left-sidenav">
    <div class="main-icon-menu">
        <nav class="nav">
            <a href="#MetricaAnalytic" class="nav-link leftmenu-sm-item bg-pink shadow-pink" data-toggle="tooltip-custom" data-placement="right" title="" data-original-title="Analytics">
                <svg class="nav-svg" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">
                    <g>
                        <path d="M184,448h48c4.4,0,8-3.6,8-8V72c0-4.4-3.6-8-8-8h-48c-4.4,0-8,3.6-8,8v368C176,444.4,179.6,448,184,448z"/>
                        <path class="svg-primary" d="M88,448H136c4.4,0,8-3.6,8-8V296c0-4.4-3.6-8-8-8H88c-4.4,0-8,3.6-8,8V440C80,444.4,83.6,448,88,448z"/>
                        <path class="svg-primary" d="M280.1,448h47.8c4.5,0,8.1-3.6,8.1-8.1V232.1c0-4.5-3.6-8.1-8.1-8.1h-47.8c-4.5,0-8.1,3.6-8.1,8.1v207.8
                            C272,444.4,275.6,448,280.1,448z"/>
                        <path d="M368,136.1v303.8c0,4.5,3.6,8.1,8.1,8.1h47.8c4.5,0,8.1-3.6,8.1-8.1V136.1c0-4.5-3.6-8.1-8.1-8.1h-47.8
                            C371.6,128,368,131.6,368,136.1z"/>
                    </g>
                </svg>
            </a><!--end MetricaAnalytic-->

            

            <a href="#MetricaProject" class="nav-link leftmenu-sm-item bg-success shadow-success" data-toggle="tooltip-custom" data-placement="right" title="" data-original-title="Projects">
                <svg class="nav-svg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                    <path class="svg-primary" d="M256 32C132.288 32 32 132.288 32 256s100.288 224 224 224 224-100.288 224-224S379.712 32 256 32zm135.765 359.765C355.5 428.028 307.285 448 256 448s-99.5-19.972-135.765-56.235C83.972 355.5 64 307.285 64 256s19.972-99.5 56.235-135.765C156.5 83.972 204.715 64 256 64s99.5 19.972 135.765 56.235C428.028 156.5 448 204.715 448 256s-19.972 99.5-56.235 135.765z"/>
                    <path d="M200.043 106.067c-40.631 15.171-73.434 46.382-90.717 85.933H256l-55.957-85.933zM412.797 288A160.723 160.723 0 0 0 416 256c0-36.624-12.314-70.367-33.016-97.334L311 288h101.797zM359.973 134.395C332.007 110.461 295.694 96 256 96c-7.966 0-15.794.591-23.448 1.715L310.852 224l49.121-89.605zM99.204 224A160.65 160.65 0 0 0 96 256c0 36.639 12.324 70.394 33.041 97.366L201 224H99.204zM311.959 405.932c40.631-15.171 73.433-46.382 90.715-85.932H256l55.959 85.932zM152.046 377.621C180.009 401.545 216.314 416 256 416c7.969 0 15.799-.592 23.456-1.716L201.164 288l-49.118 89.621z"/>
                </svg>
            </a><!--end MetricaPages-->

            

           
        </nav><!--end nav-->
    </div><!--end main-icon-menu-->

    <div class="main-menu-inner">
        <div class="menu-body slimscroll">
            <div id="MetricaAnalytic" class="main-icon-menu-pane">
                <div class="title-box">
                    <h6 class="menu-title">Main</h6>       
                </div>
                <ul class="nav">
                    <li class="nav-item"><a class="nav-link" href="dashboard.php"><i class="dripicons-meter"></i>Dashboard</a></li>
                    <li class="nav-item"><a class="nav-link" href="leads.php"><i class="dripicons-user-group"></i>Leads</a></li>
                    <li class="nav-item"><a class="nav-link" href="all-leads.php"><i class="dripicons-document"></i>All Leads</a></li> 
                </ul>
            </div><!-- end Analytic -->
            
            <div id="MetricaProject" class="main-icon-menu-pane">
                <div class="title-box">
                    <h6 class="menu-title">Pages</h6>        
                </div>
                <ul class="nav">
                    <li class="nav-item"><a class="nav-link" href="agents.php"><i class="dripicons-view-thumb"></i>All Agents</a></li>
                    <li class="nav-item"><a class="nav-link" href="property_finder_api.php"><i class="dripicons-view-thumb"></i>Property Finder API</a></li>
                    <li class="nav-item"><a class="nav-link" href="documents.php"><i class="dripicons-view-thumb"></i>Company Document</a></li>
                    <li class="nav-item"><a class="nav-link" href="awards.php"><i class="dripicons-view-thumb"></i>Awards</a></li>
                    
                </ul>
            </div><!-- end  Project-->
            
            
            

            
        </div><!--end menu-body-->
    </div><!-- end main-menu-inner-->
</div>
<!-- end left-sidenav-->

            <!-- Page Content-->
            <div class="page-content">

                <div class="container-fluid">
                    <!-- Page-Title -->
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="page-title-box">
                                <div class="float-right">
                                <a href="upload_award.php"> <button class="btn btn-gradient-primary" type="submit">Assign Award</button></a>
                                </div>
                                <h4 class="page-title">Awards</h4>
                            </div><!--end page-title-box-->
                        </div><!--end col-->
                    </div>
                    <!-- end page title end breadcrumb -->
                    <?php
                    
                    $i = 0;
                    if ($rs_result->num_rows > 0) {
                    while($row = $rs_result->fetch_assoc()) {
                        if($i == 0){
                    echo'<div class="row">
                        <div class="col-lg-4">
                            <div class="card profile-card">
                                <div class="card-body p-0">
                                    <div class="media p-3  align-items-center">                                                
                                        <img src="assets/images/users/user-4.jpg" alt="user" class="rounded-circle thumb-xl">                                        
                                        <div class="media-body ml-3 align-self-center">
                                            <h5 class="pro-title">'.$row['name'].' <span class="badge badge-warning font-10"></span></h5>
                                            <p class="mb-1 text-muted">';
                                            $ag_id = $row['agent_name'];
                                            $sql2 = "SELECT * FROM agents WHERE agent_id='$ag_id'";
                                            $rs_result2 = $conn->query($sql2);
                                            if ($rs_result2->num_rows > 0) {
                                                while($row2 = $rs_result2->fetch_assoc()) {
                                                    echo $row2['full_name'];
                                                }
                                            } 
                                            echo '</p> 
                                            <p class="mb-0 text-muted"><i class="mdi mdi-checkbox-blank-circle text-success mr-1"></i>Active</p>                                              
                                        </div>
                                        <div class="action-btn">
                                            <button class="mr-1 btn btn-sm btn-info"><i class="fas fa-pen"></i></button>
                                            <a href="awards.php?id='.$row['id'].'"><button class="btn btn-sm btn-danger"><i class="far fa-trash-alt"></i></button></a>  
                                        </div>                                                                              
                                    </div>                                    
                                </div><!--end card-body-->                 
                            </div><!--end card--> 
                        </div>';
                        }
                        else{
                            echo'<div class="col-lg-4">
                            <div class="card profile-card">
                                <div class="card-body p-0">
                                    <div class="media p-3  align-items-center">                                                
                                        <img src="assets/images/users/user-4.jpg" alt="user" class="rounded-circle thumb-xl">                                        
                                        <div class="media-body ml-3 align-self-center">
                                            <h5 class="pro-title">'.$row['name'].' <span class="badge badge-warning font-10"></span></h5>
                                            <p class="mb-1 text-muted">';
                                            $ag_id = $row['agent_name'];
                                            $sql2 = "SELECT * FROM agents WHERE agent_id='$ag_id'";
                                            $rs_result2 = $conn->query($sql2);
                                            if ($rs_result2->num_rows > 0) {
                                                while($row2 = $rs_result2->fetch_assoc()) {
                                                    echo $row2['full_name'];
                                                }
                                            } 
                                            echo '</p>
                                            <p class="mb-0 text-muted"><i class="mdi mdi-checkbox-blank-circle text-success mr-1"></i>Active</p>                                              
                                        </div>
                                        <div class="action-btn">
                                            <button class="mr-1 btn btn-sm btn-info"><i class="fas fa-pen"></i></button>
                                            <a href="awards.php?id='.$row['id'].'"><button class="btn btn-sm btn-danger"><i class="far fa-trash-alt"></i></button></a>  
                                        </div>                                                                              
                                    </div>                                    
                                </div><!--end card-body-->                 
                            </div><!--end card--> 
                        </div>';
                        if($i == 2){
                    echo'</div>';
                    $i=0;
                    continue;
                        }
                        }
                        $i++;


                    }
                                    } else {
                                        echo "0 results";
                                    }
                                            
                                    ?>


                </div><!-- container -->

                <footer class="footer text-center text-sm-left">
                    &copy; 2019 Metrica <span class="text-muted d-none d-sm-inline-block float-right">Crafted with <i class="mdi mdi-heart text-danger"></i> by Mannatthemes</span>
                </footer><!--end footer-->
            </div>
            <!-- end page content -->
        </div>
        <!-- end page-wrapper -->

        <!-- jQuery  -->
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/bootstrap.bundle.min.js"></script>
        <script src="assets/js/metisMenu.min.js"></script>
        <script src="assets/js/waves.min.js"></script>
        <script src="assets/js/jquery.slimscroll.min.js"></script>

        <!-- App js -->
        <script src="assets/js/app.js"></script>
       
    </body>
</html>