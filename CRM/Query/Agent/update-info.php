<?php
session_start();
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

if(isset($_GET['id'])){
	$id = $_GET['id'];

  if($_FILES["pic"]["name"] != ""){
    $targetDir = "../../Pages/img/agents/"; 
    $filename1 = $_FILES["pic"]["name"];
    $tempname1 = $_FILES["pic"]["tmp_name"]; 
    $folder1 = $targetDir . $filename1;
  }else{
    $filename1 = $_SESSION['pic'];
  }

    $agent_id = $_POST['agent_id'];
    $full_name = $_POST['full_name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $password = $_POST['password'];
    $re_password = $_POST['re_password'];
    $position = $_POST['position'];
    $nationality = $_POST['nationality'];
    $tiktok = $_POST['tiktok'];
    $facebook = $_POST['facebook'];
    $insta = $_POST['insta'];
    $linkedin = $_POST['linkedin'];
   
  if($password == $re_password){
	$updates = "UPDATE agents SET agent_id = '$agent_id' , full_name = '$full_name' , phone = '$phone' , email = '$email' ,
    password = '$password' , position = '$position' , nationality = '$nationality' , pic = '$filename1' , tiktok = '$tiktok' , insta = '$insta'
    , facebook = '$facebook' , linkedin = '$linkedin'   where id='$id'";


	if (mysqli_query($conn, $updates)) {
        echo "Updated";
        move_uploaded_file($tempname1, $folder1);
        
        $_SESSION["agent_id"] = $_POST['agent_id'];
        $_SESSION["full_name"] = $_POST['full_name'];
        $_SESSION["position"] = $_POST['position'];
        $_SESSION["phone"] = $_POST['phone'];
        $_SESSION["email"] = $_POST['email'];
        $_SESSION["nationality"] = $_POST['nationality'];
        $_SESSION["pic"] = $filename1;
        header("Location: ../../Pages/profile.php");
        
      } else {
        echo "Error updating record: " . mysqli_error($conn);
      }
  }else{
    echo '<script> alert("Password not Match")</script>' ;
    header("Location: ../../Pages/profile.php");
  }
}

mysqli_close($conn);

?>