<?php
session_start();
require_once './DB.php';

$mid=$_POST['mid'];
$ccode=$_POST['ccode'];
$cname=$_POST['cname'];
echo $cid;
$con=new connectdb();
$con->connichdb();
$con->editcinema($mid,$ccode,$cname);
?>