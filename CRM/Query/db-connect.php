<?php  
// Database configuration  
$servername = "localhost";
$username = "root";
$password = "";
$database = "propertyfinder";   
// $dbHost     = "localhost";  
// $dbUsername = "propertyfinder";  
// $dbPassword = "&Xwlq?]qKqS=";  
// $dbName     = "propertyfinder"; 
  
// Create database connection  
$conn = new mysqli($servername, $username, $password, $database);
  
// Check connection  
if ($conn->connect_error) {  
    die("Connection failed: " . $conn->connect_error);  
}