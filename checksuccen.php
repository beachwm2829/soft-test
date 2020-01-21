<?php
require_once './DB.php';
error_reporting(E_ALL^E_NOTICE);
session_start();
$movie = $_POST['movie'];
$timeshow = $_POST['timeshow'];
$cinema = $_POST['cinema'];
$seat = $_SESSION['seatname'];
$price = $_POST['price'];


for ($i=0;$i<count($_SESSION['seatname']);$i++){
    echo $_SESSION['seatname'][$i];
    if($i != count($_SESSION['seatname'])-1){
        echo ',';
    }    
}
//if($con = new connectdb()){
//    $con->addticket($movie, $timeshow, $cinema, $seat, $price);
//}else{
//    header("location:home.php");
//}
?>