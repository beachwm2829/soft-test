<?php
session_start();
require_once './DB.php';

//$delm=$_POST['deleteM'];
//$delc=$_POST['deleteC'];
$del=$_POST['delete'];


$con=new connectdb();
$con->connichdb();
$con->deleteshowtime($del);
?>