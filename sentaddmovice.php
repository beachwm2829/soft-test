<?php
session_start();
require_once './DB.php';

$mvn=$_POST['Moviename'];
$di=$_POST['Date_in'];
$dt=$_POST['detail'];
$tm=$_POST['time_movie'];
$gm=$_POST['group_movie'];

$con=new connectdb();
$con->connichdb();
$con->addmovice($mvn,$di,$dt,$tm,$gm);
?>