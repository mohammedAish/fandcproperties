<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "propertyfinder";
$conn = new mysqli($servername, $username, $password, $database);

$id = $_GET['projectNo'];

$sql1 = "SELECT `lat`,`lng` FROM api_data WHERE property_id = $id ";
$res = $conn->query($sql1);
if( $res ) while( $rs =$res->fetch_object() ) $places[]=array( 'latitude'=>$rs->lat, 'longitude'=>$rs->lng);

header('Content-Type: application/json');
echo json_encode( $places,JSON_FORCE_OBJECT );
exit();
?>