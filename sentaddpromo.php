<?php
session_start();
require_once './DB.php';
$A=$_POST['link'];
$B=$_POST['promoname'];
$C=$_POST['prodetail'];
$D=$_POST['prodate'];
$E=$_POST['ccc'];
$F=$_POST['cc0'];

$con=new connectdb();
$con->connichdb();
$con->addpro($A, $B, $C, $D, $E, $F);
?>