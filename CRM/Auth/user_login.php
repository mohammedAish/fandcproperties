<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$db = "crm";
// Create connection
$conn = new mysqli($servername, $username, $password, $database);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";

if (isset($_POST['submit'])) {

    $username = $_POST['username'];
    $password = $_POST['password'];

    //to prevent from mysqli injection
    $username = stripcslashes($username);
    $password = stripcslashes($password);
    $username = mysqli_real_escape_string($conn, $username);
    $password = mysqli_real_escape_string($conn, $password);

    $sql = "select *from users where username = '$username' and password = '$password'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
    $count = mysqli_num_rows($result);

    if($count == 1){
        echo "<h1><center> Login successful </center></h1>";
        $_SESSION["id"] = $row['id'];
        $_SESSION["name"] = $row['username'];

    }
    else{
        echo "<h1> Login failed. Invalid username or password.</h1>";
        echo $username;
        echo $password;
    }
}

if (isset($_SESSION["id"])){
    header("Location: ../Pages/home.php");
}
?>
