<?php
session_start();
require_once './DB.php';

$mid=$_POST['mid'];
$ccode=$_POST['ccode'];
$cname=$_POST['cname'];


$con=new connectdb();
$con->connichdb();
$con->addcinema($mid,$ccode,$cname);
?>