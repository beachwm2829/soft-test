<?php
session_start();
require_once './DB.php';

$tra=$_POST['traget'];

$con=new connectdb();
$con->connichdb();
$con->checktime($tra);
?>