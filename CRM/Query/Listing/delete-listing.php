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

// sql to delete a record
if(isset($_GET['del'])){
	$id = $_GET['del'];
	$status = "Archive";
	$delete = "DELETE FROM add_listing WHERE id='$id'";
	if (mysqli_query($conn, $delete)) {
        echo "Deleted";
        header("Location: ../../Pages/home.php");
      } else {
        echo "Error updating record: " . mysqli_error($conn);
      }
}

mysqli_close($conn);
?>