<?php
require_once './DB.php';
error_reporting(E_ALL^E_NOTICE);
session_start();
$movie = $_POST['movie'];
$timeshow = $_POST['timeshow'];
$cinema = $_POST['cinema'];
$seat = $_SESSION['seatname'];
$price = $_POST['price'];

//echo $_SESSION['seatname'];
$con = new connectdb();
$s = implode($seat);    
$con->addticket($s);
?>