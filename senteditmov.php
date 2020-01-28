<?php
session_start();
require_once './DB.php';

$mvn=$_POST['Moviename'];
$di=$_POST['Date_in'];
$dt=$_POST['detail'];
$tm=$_POST['time_movie'];
$gm=$_POST['group_movie'];
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
$con->editmovice($mvn,$di,$dt,$tm,$gm,$lk);
?>