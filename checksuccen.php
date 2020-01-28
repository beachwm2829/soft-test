<?php
require_once './DB.php';
error_reporting(E_ALL^E_NOTICE);
session_start();
$seat = $_SESSION['seatname'];

//echo $_SESSION['seatname'];
$con = new connectdb();
$s = implode($seat);    
$con->addticket($_SESSION["mvName"], $_SESSION["mvDate"], $_SESSION["timeshow"], $_SESSION["cname"], $_SESSION["price"], $s);
?>