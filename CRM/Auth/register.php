<?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "propertyfinder";
// Create connection
$conn = mysqli_connect($servername, $username, $password,$database);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";

if(isset($_POST['submit']))
{
    $agent_id = $_POST['agent_id'];
    $full_name = $_POST['full_name'];
    $password = $_POST['password'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $position = $_POST['position'];
    $nationality = $_POST['nationality'];
    $sql = "INSERT INTO `agents` (`id`, `agent_id`, `full_name`, `phone`, `email`, `password`, `position`, `nationality`, `admin`, `creation`) VALUES
     (NULL, '$agent_id', '$full_name', '$phone', '$email', '$password', '$position', '$nationality', '0', NOW())";
    if (mysqli_query($conn, $sql)) {
        echo "New record has been added successfully !";
        header("Location: ../Auth/login.php");
    } else {
        echo "Error: " . $sql . ":-" . mysqli_error($conn);
    }
    mysqli_close($conn);
}
?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Registration</title>
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

                <h4>New here?</h4>
                <h6 class="font-weight-light">Signing up is easy. It only takes a few steps</h6>
                <form class="pt-3" action="" method="POST">
                  <div class="form-group">
                    <input type="text" name="full_name" class="form-control form-control-lg" id="exampleInputFullName" placeholder="Full Name" required>
                  </div>
                  <div class="form-group">
                    <input type="text" name="agent_id" class="form-control form-control-lg" id="exampleInputFullName" placeholder="Agent ID ex: FC-AA" required>
                  </div>
                  <div class="form-group">
                    <input type="tel" name="phone" class="form-control form-control-lg" id="exampleInputPhone" placeholder="Phone Number Ex:00971 56 237 4807" required>
                  </div>
                  <div class="form-group">
                    <input type="email" name="email" class="form-control form-control-lg" id="exampleInputEmail1" placeholder="Email" required>
                  </div>
                  <div class="form-group">
                    <input type="password" name="password" class="form-control form-control-lg" id="exampleInputPassword1" placeholder="Your Password" required>
                  </div>
                  <div class="form-group">
                    <input type="text" name="position" class="form-control form-control-lg" id="exampleInputFullName" placeholder="Your Position" required>
                  </div>
                  <div class="form-group">
                    <select name="nationality" class="form-control form-control-lg" id="exampleFormControlSelect2">
                      <option>Country</option>
                      <option value="United States of America">United States of America</option>
                      <option value="United Arab Emirate">United Arab Emirate</option>
                      <option value="India">India</option>
                      <option value="Russia">Russia</option>
                      <option value="Uzbekistan">Uzbekistan</option>
                      <option value="Argentina">Argentina</option>
                    </select>
                  </div>

                  <div class="mb-4">
                    <div class="form-check">
                      <label class="form-check-label text-muted">
                        <input  type="checkbox" class="form-check-input" > I agree to all Terms & Conditions </label>
                    </div>
                  </div>
                  <div class="mt-3">
                    <button type="submit" class="btn btn-block btn-gradient-primary btn-lg font-weight-medium auth-form-btn" name="submit" value="Submit" >SIGN UP</button>
                  </div>
                  <div class="text-center mt-4 font-weight-light"> Already have an account? <a href="login.html" class="text-primary">Login</a>
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