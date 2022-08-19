<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "propertyfinder";
$conn = new mysqli($servername, $username, $password, $database);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";

// POST Variables here

if(isset($_GET['arc'])){
	$id = $_GET['arc'];
	$status = "Archive";
	$updates = "UPDATE add_listing SET listing_status = '$status' where id='$id'";
	if (mysqli_query($conn, $updates)) {
        echo "Archive";
        header("Location: ../../Pages/home.php");
      } else {
        echo "Error updating record: " . mysqli_error($conn);
      }
}

mysqli_close($conn);

?>