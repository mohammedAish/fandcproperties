<?php 
    require_once('../db-connect.php');
    session_start();
    if($_SERVER['REQUEST_METHOD'] !='POST'){
        echo "<script> alert('Error: No data to save.'); location.replace('./') </script>";
        $conn->close();
        exit;
    }

    extract($_POST);
    $allday = isset($allday);
    $agent_id = $_SESSION["agent_id"];

    if(empty($id)){
        $sql = "INSERT INTO `schedule_list` (`title`,`agent_id`,`description`,`start_datetime`,`end_datetime`,`status`,`created`) VALUES ('$title','$agent_id','$description','$start_datetime','$end_datetime','$status',NOW())";
    }else{
        $sql = "UPDATE `schedule_list` set `title` = '{$title}', `description` = '{$description}', `start_datetime` = '{$start_datetime}', `end_datetime` = '{$end_datetime}', `status` = '{$status}' where `id` = '{$id}'";
    }

    $save = $conn->query($sql);

    if($save){
        echo "<script> alert('Schedule Successfully Saved.'); location.replace('../../Pages/calender_apoiment.php') </script>";
    }else{
        echo "<pre>";
        echo "An Error occured.<br>";
        echo "Error: ".$conn->error."<br>";
        echo "SQL: ".$sql."<br>";
        echo "</pre>";
    }
    
    $conn->close();
?>