<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>

<head>
    <?php 
        session_start();
        error_reporting(E_ALL^E_NOTICE);
        require_once './DB.php';
        $con = new connectdb();
            if($con ->connichdb()){
                $sql_user = "SELECT * FROM `ticket`";
                $objquery = mysqli_query($con->connichdb(), $sql_user);
            }
    ?>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="img/core-img/favicon.ico">
    <link href="style.css" rel="stylesheet">
    <link href="css/responsive/responsive.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/seat-css/seat-css.css" title="style1">

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta content="text/html; charset=iso-8859-2" http-equiv="Content-Type">
    <link href="https://stackpath.bootstrapcdn.com/bootswatch/4.3.1/minty/bootstrap.min.css" rel="stylesheet" integrity="sha384-9NlqO4dP5KfioUGS568UFwM3lbWf3Uj3Qb7FBHuIuhLoDp3ZgAqPE1/MYLEBPZYM" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

   
    <title>เลือกที่นั่ง | KAREE Cinema</title>
    <style>
        .mySlides {
            display: none;
        } 
        .btn-submit {
            background-color: #008CBA;
            border: none;
            color: white;
            padding: 15px 32px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin: 4px 2px;
            cursor: pointer;
        }
    </style>
    
</head>

<body>
    <?php
    include './navigation/navbar.php';
    ?>
    <!-- section นี้ เป็น ลิสหนัง -->
    <section class="dorne-about-area section-padding-0-100">
        <div style="background-image: url(img/bg-img/hero1.png);">



            <div class="container h-100">
                <div class="row h-100 align-items-center justify-content-center">
                    <div class="col-12 col-md-10">
                        <div class="hero-content">
                        </div>
                        <!-- Hero Search Form -->
                        <div class="hero-search-form">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <br>
                    <div class="about-content text-center">
                        <div class="container">
                            <h2>เลือกที่นั่ง</h2>
                            <br>
                            <div class="card" style="width:1080px;">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-sm" align="rigth">
                                            <img src="https://lh3.googleusercontent.com/AWae8iwbYz1O9K6pUBQFJ2gAIrAY8ypeVY8cD1L_hN1ZM3-76efm6Z8Pdpp2n4zDtj8qXQWZNRLCe8AHu_9w=w260" class="rounded" alt="Cinque Terre">
                                        </div>
                                        <div class="col-sm" align="left">
                                            <br><br><br><br><br>
                                            <h3 style="color: black">แวนการ์ด หน่วยพิทักษ์ฟัดข้ามโลก</h3>
                                            <!--ชิ่อหนัง -->
                                            <h6 style="color: blue">25 มกราคม 2020 | 16 : 20</h6>
                                            <!--วัน - เวลา -->
                                            <h6 style="color: blue"><span class="glyphicon glyphicon-map-marker"></span> เอส เอฟ เวิลด์ ซีเนม่า เซ็นทรัลเวิลด์</h6>
                                            <h4 style="color: black">โรงภาพยนต์</h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <br><br>
                            <hr>
                            
                            <div class="card" style="width:1080px">
                                <?php 
                                while($row = mysqli_fetch_array($objquery)){
                                    $str = explode(",", $row["seat"]);
                                    echo $str;
                                    for($i=0;$i<count($str);$i++){
                                        echo $str[$i];
                                    }
                                }
                                
                                //$str = explode(",", $row["seat"]);
//                                echo count($row["seat"]);
//                                echo $str[0];
//                                echo $str[1]; 
                                
                                ?>
                                <div class="card-body">
                                    <h4 class="card-title">ที่นั่ง</h4>
                                    <form action="checkseat.php" method="post">
                                        <center><table>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <label class="container1">
                                                        <?php 
                                                        if($str[$i] == "A1"){
                                                            echo '<input type="checkbox" name="checkbox[]" value="A1" checked="checked" disabled>';
                                                            echo '<span class="checkmark2"></span>';
                                                        }else{
                                                            echo '<input type="checkbox" name="checkbox[]" value="A1">';
                                                            echo '<span class="checkmark1"></span>';
                                                        }      
                                                        ?>
                                                    </label>
                                                </td>
                                                <td>
                                                    <label class="container1">
                                                        <?php 
                                                        for($i=0;$i<=count($row["seat"]);$i++){
                                                        if($str[$i] == "A2"){
                                                            echo '<input type="checkbox" name="checkbox[]" value="A2" checked="checked" disabled>';
                                                            echo '<span class="checkmark2"></span>';
                                                            break;
                                                        }else{
                                                            echo '<input type="checkbox" name="checkbox[]" value="A2">';
                                                            echo '<span class="checkmark1"></span>';
                                                        }   
                                                        }    
                                                        ?>
                                                        
                                                    </label>
                                                </td>
                                                <td>
                                                    <label class="container1">
                                                        <?php 
                                                        for($i=0;$i<=count($row["seat"]);$i++){
                                                        if($str[$i] == "A3"){
                                                            echo '<input type="checkbox" name="checkbox[]" value="A3" checked="checked" disabled>';
                                                            echo '<span class="checkmark2"></span>';
                                                            break;
                                                        }else{
                                                            echo '<input type="checkbox" name="checkbox[]" value="A3">';
                                                            echo '<span class="checkmark1"></span>';
                                                        }   
                                                        }      
                                                        ?>
                                                    </label>
                                                </td>
                                                <td>
                                                    <label class="container1">
                                                        <?php 
                                                        for($i=0;$i<=count($row["seat"]);$i++){
                                                        if($str[$i] == "A4"){
                                                            echo '<input type="checkbox" name="checkbox[]" value="A4" checked="checked" disabled>';
                                                            echo '<span class="checkmark2"></span>';
                                                            break;
                                                        }else{
                                                            echo '<input type="checkbox" name="checkbox[]" value="A4">';
                                                            echo '<span class="checkmark1"></span>';
                                                        }   
                                                        }      
                                                        ?>
                                                    </label>
                                                </td>
                                                <td>
                                                    <label class="container1">
                                                        <?php 
                                                        for($i=0;$i<=count($row["seat"]);$i++){
                                                        if($str[$i] == "A5"){
                                                            echo '<input type="checkbox" name="checkbox[]" value="A5" checked="checked" disabled>';
                                                            echo '<span class="checkmark2"></span>';
                                                            break;
                                                        }else{
                                                            echo '<input type="checkbox" name="checkbox[]" value="A5">';
                                                            echo '<span class="checkmark1"></span>';
                                                        }   
                                                        }      
                                                        ?>
                                                    </label>
                                                </td>
                                                <td>
                                                    <label class="container1">
                                                        <?php 
                                                        for($i=0;$i<=count($row["seat"]);$i++){
                                                        if($str[$i] == "A6"){
                                                            echo '<input type="checkbox" name="checkbox[]" value="A6" checked="checked" disabled>';
                                                            echo '<span class="checkmark2"></span>';
                                                            break;
                                                        }else{
                                                            echo '<input type="checkbox" name="checkbox[]" value="A6">';
                                                            echo '<span class="checkmark1"></span>';
                                                        }   
                                                        }      
                                                        ?>
                                                    </label>
                                                </td>
                                                <td>
                                                    <label class="container1">
                                                        <?php 
                                                        for($i=0;$i<=count($row["seat"]);$i++){
                                                        if($str[$i] == "A7"){
                                                            echo '<input type="checkbox" name="checkbox[]" value="A7" checked="checked" disabled>';
                                                            echo '<span class="checkmark2"></span>';
                                                            break;
                                                        }else{
                                                            echo '<input type="checkbox" name="checkbox[]" value="A7">';
                                                            echo '<span class="checkmark1"></span>';
                                                        }   
                                                        }      
                                                        ?>
                                                    </label>
                                                </td>
                                                <td>
                                                    <label class="container1">
                                                        <?php 
                                                        for($i=0;$i<=count($row["seat"]);$i++){
                                                        if($str[$i] == "A8"){
                                                            echo '<input type="checkbox" name="checkbox[]" value="A8" checked="checked" disabled>';
                                                            echo '<span class="checkmark2"></span>';
                                                            break;
                                                        }else{
                                                            echo '<input type="checkbox" name="checkbox[]" value="A8">';
                                                            echo '<span class="checkmark1"></span>';
                                                        }   
                                                        }      
                                                        ?>
                                                    </label>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <label class="container1">
                                                       <?php 
                                                        for($i=0;$i<=count($row["seat"]);$i++){
                                                        if($str[$i] == "B1"){
                                                            echo '<input type="checkbox" name="checkbox[]" value="B1" checked="checked" disabled>';
                                                            echo '<span class="checkmark2"></span>';
                                                            break;
                                                        }else{
                                                            echo '<input type="checkbox" name="checkbox[]" value="B1">';
                                                            echo '<span class="checkmark1"></span>';
                                                        }   
                                                        }      
                                                        ?>
                                                    </label>
                                                </td>
                                                <td>
                                                    <label class="container1">
                                                        <?php 
                                                        for($i=0;$i<=count($row["seat"]);$i++){
                                                        if($str[$i] == "B2"){
                                                            echo '<input type="checkbox" name="checkbox[]" value="B2" checked="checked" disabled>';
                                                            echo '<span class="checkmark2"></span>';
                                                            break;
                                                        }else{
                                                            echo '<input type="checkbox" name="checkbox[]" value="B2">';
                                                            echo '<span class="checkmark1"></span>';
                                                        }   
                                                        }      
                                                        ?>
                                                    </label>
                                                </td>
                                                <td>
                                                    <label class="container1">
                                                        <?php 
                                                        for($i=0;$i<=count($row["seat"]);$i++){
                                                        if($str[$i] == "B3"){
                                                            echo '<input type="checkbox" name="checkbox[]" value="B3" checked="checked" disabled>';
                                                            echo '<span class="checkmark2"></span>';
                                                            break;
                                                        }else{
                                                            echo '<input type="checkbox" name="checkbox[]" value="B3">';
                                                            echo '<span class="checkmark1"></span>';
                                                        }   
                                                        }      
                                                        ?>
                                                    </label>
                                                </td>
                                                <td>
                                                    <label class="container1">
                                                        <?php 
                                                        for($i=0;$i<=count($row["seat"]);$i++){
                                                        if($str[$i] == "B4"){
                                                            echo '<input type="checkbox" name="checkbox[]" value="B4" checked="checked" disabled>';
                                                            echo '<span class="checkmark2"></span>';
                                                            break;
                                                        }else{
                                                            echo '<input type="checkbox" name="checkbox[]" value="B4">';
                                                            echo '<span class="checkmark1"></span>';
                                                        }   
                                                        }      
                                                        ?>
                                                    </label>
                                                </td>
                                                <td>
                                                    <label class="container1">
                                                        <?php 
                                                        for($i=0;$i<=count($row["seat"]);$i++){
                                                        if($str[$i] == "B5"){
                                                            echo '<input type="checkbox" name="checkbox[]" value="B5" checked="checked" disabled>';
                                                            echo '<span class="checkmark2"></span>';
                                                            break;
                                                        }else{
                                                            echo '<input type="checkbox" name="checkbox[]" value="B5">';
                                                            echo '<span class="checkmark1"></span>';
                                                        }   
                                                        }      
                                                        ?>
                                                    </label>
                                                </td>
                                                <td>
                                                    <label class="container1">
                                                        <?php 
                                                        for($i=0;$i<=count($row["seat"]);$i++){
                                                        if($str[$i] == "B6"){
                                                            echo '<input type="checkbox" name="checkbox[]" value="B6" checked="checked" disabled>';
                                                            echo '<span class="checkmark2"></span>';
                                                            break;
                                                        }else{
                                                            echo '<input type="checkbox" name="checkbox[]" value="B6">';
                                                            echo '<span class="checkmark1"></span>';
                                                        }   
                                                        }      
                                                        ?>
                                                    </label>
                                                </td>
                                                <td>
                                                    <label class="container1">
                                                        <?php 
                                                        for($i=0;$i<=count($row["seat"]);$i++){
                                                        if($str[$i] == "B7"){
                                                            echo '<input type="checkbox" name="checkbox[]" value="B7" checked="checked" disabled>';
                                                            echo '<span class="checkmark2"></span>';
                                                            break;
                                                        }else{
                                                            echo '<input type="checkbox" name="checkbox[]" value="B7">';
                                                            echo '<span class="checkmark1"></span>';
                                                        }   
                                                        }      
                                                        ?>
                                                    </label>
                                                </td>
                                                <td>
                                                    <label class="container1">
                                                       <?php 
                                                        for($i=0;$i<=count($row["seat"]);$i++){
                                                        if($str[$i] == "B8"){
                                                            echo '<input type="checkbox" name="checkbox[]" value="B8" checked="checked" disabled>';
                                                            echo '<span class="checkmark2"></span>';
                                                            break;
                                                        }else{
                                                            echo '<input type="checkbox" name="checkbox[]" value="B8">';
                                                            echo '<span class="checkmark1"></span>';
                                                        }   
                                                        }      
                                                        ?>
                                                    </label>
                                                </td>
                                            </tr>    
                                            <?php
                              
//                                            echo '<tr>';
//                                            while($row = mysqli_fetch_array($objquery)){                                  
//                                                if($row["sid"]%10 == 0){
//                                                    echo '<td class="row-id">'.$row["sid"].'</td>';
//                                                    echo '<td>';
//                                                        echo '<label class="container1">';
//                                                        echo '<input type="checkbox" name="checkbox[]" value="'.$row['sname'].'">';
//                                                        echo '<span class="checkmark1"></span>';       
//                                                        echo '</label>';
//                                                    echo '</td>';
//                                                    echo '<tr>';
//                                                }else{       
//                                                    echo '<td class="row-id">'.$row["sname"].'</td>';
//                                                    echo '<td>';
//                                                        echo '<label class="container1">';
//                                                        echo '<input type="checkbox" name="checkbox[]" value="'.$row['sname'].'">';
//                                                        echo '<span class="checkmark1"></span>';       
//                                                        echo '</label>';
//                                                echo '</td>';
//                                                }
//                                            }
//                                            echo '</tr>';
                                            ?>
                                        </tbody>
                                    </table>
                                        <input class="btn btn-primary btn-lg" type="submit" value="ดำเนินการต่อ"></center>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <div class="dorne-clients-area section-padding-100">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="clients-logo d-md-flex align-items-center justify-content-around">
                        <img src="img/clients-img/1.png" alt="">
                        <img src="img/clients-img/2.png" alt="">
                        <img src="img/clients-img/3.png" alt="">
                        <img src="img/clients-img/4.png" alt="">
                        <img src="img/clients-img/5.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <footer class="dorne-footer-area">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 d-md-flex align-items-center justify-content-between">
                    <div class="footer-text">
                        <p>
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                            Copyright &copy;<script>
                                document.write(new Date().getFullYear());
                            </script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        </p>
                    </div>
                    <div class="footer-social-btns">
                        <a href="#"><i class="fa fa-linkedin" aria-haspopup="true"></i></a>
                        <a href="#"><i class="fa fa-behance" aria-hidden="true"></i></a>
                        <a href="#"><i class="fa fa-dribbble" aria-hidden="true"></i></a>
                        <a href="#"><i class="fa fa-twitter" aria-haspopup="true"></i></a>
                        <a href="#"><i class="fa fa-facebook" aria-haspopup="true"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <script src="js/jquery/jquery-2.2.4.min.js"></script>
    <!-- Popper js -->
    <script src="js/bootstrap/popper.min.js"></script>
    <!-- Bootstrap-4 js -->
    <script src="js/bootstrap/bootstrap.min.js"></script>
    <!-- All Plugins js -->
    <script src="js/others/plugins.js"></script>
    <!-- Active JS -->
    <script src="js/active.js"></script>
</body>

</html>