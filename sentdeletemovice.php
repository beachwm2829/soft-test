<?php
session_start();
require_once './DB.php';

$del=$_POST['delete'];
echo $del;
$con=new connectdb();
$con->connichdb();
$con->delete($del);
?>