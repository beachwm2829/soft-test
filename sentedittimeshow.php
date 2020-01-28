<?php
session_start();
require_once './DB.php';

$mid=$_POST['MID'];
$cid=$_POST['CID'];
$time=$_POST['TIME'];

$con=new connectdb();
$con->connichdb();
$con->edittimeshow($mid,$cid,$time);
?>