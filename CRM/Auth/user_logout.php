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
        $id = $_SESSION["id"];
        $agent_id = $_SESSION["agent_id"];
        $updates = "UPDATE agents SET status='Offline' WHERE id ='$id'";
        mysqli_query($conn, $updates);
        $last_log = $_SESSION['log_no'];
        $display = "SELECT * FROM logfile WHERE id='$last_log'";
        $result = mysqli_query($conn, $display);
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
        $count = mysqli_num_rows($result);

        if($count == 1){

            $time_login = $row['login_time'];
            $logout_time = $login_now = date("Y-m-d H:i:s");

            $total = abs(strtotime($logout_time) - strtotime($time_login));
            echo $total;

            $record = "UPDATE logfile SET logout_time='$logout_time' , total='$total', is_active='0' WHERE id=$last_log";
            if(mysqli_query($conn, $record)){
            unset($_SESSION["id"]);
            unset($_SESSION["agent_id"]);
            unset($_SESSION["full_name"]);
            unset($_SESSION["pic"]);
            session_destroy();
            header("Location:../Auth/login.php"); 
              
        }
            
    }


?>