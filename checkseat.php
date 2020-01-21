<?php
require_once './DB.php';
error_reporting(E_ALL^E_NOTICE);
session_start();
$box = $_POST['checkbox'];

$con = new connectdb();
if(!empty("checkbox")){
//    for($i=0;$i< count($box);$i++){  
//        echo $box[$i]; 
//    }
    //header("location:succen.php");
    $_SESSION['seatname'] = $box;
    header("location:succen.php");
}else{
    header("location:home.php");
}

?>