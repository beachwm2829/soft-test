<?php
session_start();
require_once './DB.php';

$pname=$_POST['promoname'];
$pdetail=$_POST['prodetail'];
$pdate=$_POST['prodate'];
$A=$_POST['ccc'];
$B=$_POST['cc0'];
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
$con->editpromo($pname,$pdetail,$pdate,$A,$B,$lk);
?>