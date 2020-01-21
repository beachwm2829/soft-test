<?php
session_start();
require_once './DB.php';
$A=$_POST['mid'];
$B=$_POST['point'];

$mid = (int)$A;
$point = (int)$B;

$con=new connectdb();
$con->connichdb();
$con->deletepoint($mid,$point);
?>