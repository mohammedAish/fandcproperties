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

if(isset($_POST['draft']))
{
    $status = 'Draft';
}
if(isset($_POST['submit'])){
$offering_type = $_POST['offering_type'];
$property_type = $_POST['property_type'];
$category = $_POST['category'];
$beds = $_POST['beds'];
$baths = $_POST['baths'];
$city = $_POST['city'];
$location = $_POST['location'];
$sub_location = $_POST['sub_location'];
$tower = $_POST['tower'];
$permit_no = $_POST['permit_no'];
$transaction_no = $_POST['transaction_no'];
$permit_expire = $_POST['permit_expire'];
$area_sqft = $_POST['area_sqft'];
$buildup_area = $_POST['buildup_area'];
$plot_area = $_POST['plot_area'];
$furnished = $_POST['furnished'];
$parking = $_POST['parking'];
$developer = $_POST['developer'];
$property_ownership = $_POST['property_ownership'];
$occupancy = $_POST['occupancy'];
$property_status = $_POST['property_status'];
$price = $_POST['price'];
$price_sqft = $_POST['price_sqft'];
$frequecy = $_POST['frequecy'];
$cheques = $_POST['cheques'];
$youtube_link = $_POST['youtube_link'];
$tour_link = $_POST['tour_link'];
$audio_tour = $_POST['audio_tour'];
$qr_code = $_POST['qr_code'];
$property_title = $_POST['property_title'];
$property_description = $_POST['property_description'];
$agent_id = $_SESSION['agent_id'];
$agent_name = $_SESSION['full_name'];
$status = 'Pending';






//Land lord virables 

$name_own = $_POST['name_own'];
$last_name_own = $_POST['last_name_own'];
$phone1_own = $_POST['phone1_own'];
$phone2_own = $_POST['phone2_own'];
$email1_own = $_POST['email1_own'];
$email2_own = $_POST['email2_own'];
$address = $_POST['address'];



    $targetDir = "../Documents/"; 

    // Get file info 
    $filename1 = $_FILES["documents"]["name"];
    $tempname1 = $_FILES["documents"]["tmp_name"]; 
    $folder1 = $targetDir . $filename1;
// POST Variables here




$sql = "INSERT INTO `add_listing` (`id`, `offering_type`, `property_type`, `category`, `beds`, `baths`,
                           `city`, `location`, `sub_location`, `tower`, `permit_no`, `transaction_no`,
                           `pemit_expire`, `area_sqft`, `buildup_area`, `plot_area`,  `furnished`,
                           `parking`, `developer`, `property_ownership`, `occupancy`, `property_status`,
                           `price`, `price_sqft`, `frequecy`, `cheques`,`youtube_link`,`tour_link`,
                           `audio_tour`,`qr_code`, `property_title`, `property_description`,
                           `agent_id`, `agent_name`, `listing_status`, `listing_live`, `creation`, `calender`)VALUES 
                            (NULL, '$offering_type', '$property_type', '$category', '$beds', '$baths', '$city', '$location', '$sub_location', '$tower', '$permit_no',
                             '$transaction_no', '$permit_expire','$area_sqft', '$buildup_area', '$plot_area', '$furnished', '$parking', '$developer', '$property_ownership',
                             '$occupancy', '$property_status', '$price','$price_sqft', '$frequecy', '$cheques','$youtube_link','$tour_link','$audio_tour','$qr_code',
                             '$property_title', '$property_description',
                              '$agent_id', '$agent_name','$status','Unpublished', NOW(), '2222')";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
    $last_id = mysqli_insert_id($conn);
    $id =explode("-",$agent_id);
    if($offering_type = " Rental"){
        $refrence = "FC-R-".$id[1]."-".$last_id;
    }else {
        $refrence = "FC-S-".$id[1]."-".$last_id;
    }
    // Add Refrence Id To Property
    $updates = "UPDATE add_listing SET property_reference='$refrence' WHERE id='$last_id'";
        if (mysqli_query($conn, $updates)) {
            echo "Record updated successfully";
          } else {
            echo "Error updating record: " . mysqli_error($conn);
          }

    // Add Land Owner information
        $phone = $phone1_own.','.$phone2_own;
        $email = $email1_own.','.$email2_own;
          $lords = "INSERT INTO `landlords` (`id`, `first_name`, `last_name`, `phone`, `email`, `address`, `documents`, `property_reference`) VALUES (NULL,
           '$name_own', '$last_name_own', '$phone', '$email', '$address', '$filename1', '$refrence')";
        if(mysqli_query($conn, $lords)){
            move_uploaded_file($tempname1, $folder1);
            echo "Lords";
        }else{
            echo "Error updating record: " . mysqli_error($conn);
        }

    
    header("Location:../../Pages/home.php");
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}



}


mysqli_close($conn);
?>