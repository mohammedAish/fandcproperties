<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$database = "propertyfinder";
// Create connection
$conn = new mysqli($servername, $username, $password, $database);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}


if (isset($_POST['submit'])) {

    $email = $_POST['email'];
    $password = $_POST['password'];

    //to prevent from mysqli injection
    $email = stripcslashes($email);
    $password = stripcslashes($password);
    $email = mysqli_real_escape_string($conn, $email);
    $password = mysqli_real_escape_string($conn, $password);

    $sql = "SELECT * FROM agents where email = '$email' and password = '$password'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
    $count = mysqli_num_rows($result);

    if($count == 1){
        echo "<h1><center> Login successful </center></h1>";
        $_SESSION["id"] = $row['id'];
        $_SESSION["agent_id"] = $row['agent_id'];
        $_SESSION["full_name"] = $row['full_name'];
        $_SESSION["position"] = $row['position'];
        $_SESSION["phone"] = $row['phone'];
        $_SESSION["email"] = $row['email'];
        $_SESSION["nationality"] = $row['nationality'];

        $agent_id = $row['agent_id'];

        $_SESSION["pic"] = $row['pic'];
        $id = $_SESSION["id"];
        $updates = "UPDATE agents SET status='Online' WHERE id ='$id'";
        mysqli_query($conn, $updates);
        $login_now = date("Y-m-d H:i:s");
        $record = "INSERT INTO logfile(`id`,`agent_id`,`activity`,`login_time` ,`logout_time` ,`is_active`) VALUES(NULL, '$agent_id', '1', '$login_now', '0000-00-00 00:00:00', 1)";
        mysqli_query($conn, $record);
        $last_id = $conn->insert_id;
        $_SESSION['log_no'] = $last_id;
        header("Location: ../Pages/home.html");

    }
    else{
        echo "<h1> Login failed. Invalid email or password.</h1>";
        echo $email;
        echo $password;
    }
}
if (isset($_SESSION["id"])){
  header("Location: ../Pages/home.php");
}

?>



<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Login</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="../assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="../assets/vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="../assets/css/style.css">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="../assets/images/small.jpg" />
  </head>
  <body>
    <div class="container-scroller">
      <div class="container-fluid page-body-wrapper full-page-wrapper">
        <div class="content-wrapper d-flex align-items-center auth" style="background-image: url(../assets/images/topright.png),url(../assets/images/shape-left.png);background-position: right top, left bottom;background-size: 1000px 250px;  background-repeat: no-repeat, no-repeat;">
          <div class="row flex-grow">
            <div class="col-lg-4 mx-auto">
              <div class="auth-form-light text-left p-5">

                <h4>Hello! let's get started</h4>
                <h6 class="font-weight-light">Sign in to continue.</h6>
                <form class="pt-3" action="" method="POST">
                  <div class="form-group">
                    <input type="email" name="email" class="form-control form-control-lg" id="exampleInputEmail1" placeholder="Email">
                  </div>
                  <div class="form-group">
                    <input type="password" name="password" class="form-control form-control-lg" id="exampleInputPassword1" placeholder="Password">
                  </div>
                  <div class="mt-3">
                    <button type="submit" class="btn btn-block btn-gradient-primary btn-lg font-weight-medium auth-form-btn" name="submit" value="Submit"  >SIGN IN</button>
                  </div>
                  <div class="my-2 d-flex justify-content-between align-items-center">
                    <div class="form-check">
                      <label class="form-check-label text-muted">
                        <input type="checkbox" class="form-check-input"> Keep me signed in </label>
                    </div>
                    <a href="#" class="auth-link text-black">Forgot password?</a>
                  </div>

                  <div class="text-center mt-4 font-weight-light"> Don't have an account? <a href="register.php" class="text-primary">Create</a>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
        <!-- content-wrapper ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="../../assets/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="../../assets/js/off-canvas.js"></script>
    <script src="../../assets/js/hoverable-collapse.js"></script>
    <script src="../../assets/js/misc.js"></script>
    <!-- endinject -->
  </body>
</html>