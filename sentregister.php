<?php
session_start();
require_once './DB.php';
$User=$_POST['mUser'];
$Pass=$_POST['mPass'];
$Name=$_POST['mName'];
$con=new connectdb();
$con->connichdb();
$con->regist($User,$Pass,$Name);
?>