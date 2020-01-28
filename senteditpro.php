<?php
session_start();
require_once './DB.php';

$tg=$_POST['traget'];

$con=new connectdb();
$con->connichdb();
$con->checeditpro($tg);
?>