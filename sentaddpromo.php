<?php
session_start();
require_once './DB.php';

$B=$_POST['promoname'];
$C=$_POST['prodetail'];
$D=$_POST['prodate'];
$E=$_POST['ccc'];
$F=$_POST['cc0'];
//$lk=$_POST['link'];
$file=$_FILES['fileToUpload'];

$ext = pathinfo(basename($_FILES['fileToUpload']['name']),PATHINFO_EXTENSION);
    $new_image_name = 'img_'.uniqid().".".$ext;
    echo $new_image_name;
    $image_path = "images/";
    $upload_path = $image_path.$new_image_name;
    echo $upload_path;
    //uploading
    //$success = move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $upload_path);
    if(move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $upload_path)){
        echo $upload_path;
    }
    $lk = $upload_path;

$con=new connectdb();
$con->connichdb();
$con->addpro($lk, $B, $C, $D, $E, $F);
?>