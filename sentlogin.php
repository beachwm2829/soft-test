<?php
session_start();
require_once './DB.php';
$User=$_POST['user'];
$Pass=$_POST['pass'];
$con=new connectdb();
$con->connichdb();
$con->checkdb($User,$Pass);
?>