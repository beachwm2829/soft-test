<?php
session_start();
require_once './DB.php';
$User=$_POST['user'];
$Pass=$_POST['pass'];
$Name=$_POST['name'];
$con=new connectdb();
$con->connichdb();
$con->regist($User,$Pass,$Name);
?>