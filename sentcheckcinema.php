<?php
session_start();
require_once './DB.php';

$cid=$_POST['cid'];
echo $cid;
$con=new connectdb();
$con->connichdb();
$con->checkcunema($cid);
?>