<?php
session_start();
require_once './DB.php';

$cid=$_POST['cid'];


$con=new connectdb();
$con->connichdb();
$con->delcinema($cid);
?>