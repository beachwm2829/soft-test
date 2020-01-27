<?php
session_start();
require_once './DB.php';

$delpro=$_POST['delete'];
echo $del;
$con=new connectdb();
$con->connichdb();
$con->deletepro($delpro);
?>