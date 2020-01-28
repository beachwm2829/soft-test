<?php
session_start();
require_once './DB.php';

$mid=$_POST['MID'];
$cid=$_POST['CID'];
$time=$_POST['showtime'];


$con=new connectdb();
$con->connichdb();
$con->addshowtime($mid,$cid,$time);
?>