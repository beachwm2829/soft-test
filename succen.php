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
            $sql_user = "SELECT * FROM timeshow INNER JOIN cinema "
                            . "ON cinema.cid = timeshow.cid JOIN movice "
                            . "ON movice.mmid = timeshow.mid "
                            . "WHERE timeshow.tid='".$_SESSION['tid']."'  "
                            . "AND cinema.cid='".$_SESSION['cid']."' "
                            . "AND movice.mmid='".$_SESSION['mid']."'";
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

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta content="text/html; charset=iso-8859-2" http-equiv="Content-Type">
    <link href="https://stackpath.bootstrapcdn.com/bootswatch/4.3.1/minty/bootstrap.min.css" rel="stylesheet" integrity="sha384-9NlqO4dP5KfioUGS568UFwM3lbWf3Uj3Qb7FBHuIuhLoDp3ZgAqPE1/MYLEBPZYM" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <title>เลือกที่นั่ง | Garle Cinema</title>
    <style>
        .mySlides {
            display: none;
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
                            <?php 
                                $row = mysqli_fetch_array($objquery);
                                $_SESSION["mvName"] = $row["mvName"];
                                $_SESSION["mvDate"] = $row["mvDate"];
                                $_SESSION["timeshow"] = $row["timeshow"];
                                $_SESSION["cname"] = $row["name"];

                            ?>
                            <div class="card" style="width:1080px;">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-sm" align="rigth">
                                            <img src="<?php echo $row["mvImage"] ?>" class="rounded" alt="Cinque Terre">
                                        </div>
                                        
                                        <div class="col-sm" align="left">
                                            <form action="checksuccen.php" method="post"><div class="col-sm" align="left">
                                            <br><br><br><br><br>
                                            <h3 style="color: black"><?php echo $row["mvName"] ?></h3>
                                            <!--ชิ่อหนัง -->
                                            <h6 style="color: blue"><?php echo $row["mvDate"]; ?> | <?php echo $row["timeshow"]; ?></h6>
                                            <!--วัน - เวลา -->
                                            <h4 style="color: black">โรงภาพยนต์</h4>
                                            <h6 style="color: blue"><span class="glyphicon glyphicon-map-marker"></span><?php echo $row["name"] ?></h6>
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <h3 style="color: black">ที่นั่งที่เลือก</h3>
                                                </div>
                                                <div class="col-sm-6">
                                                    <h4>ราคารวม</h4>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <?php 
                                                    echo '<h3 style="color: black" name="seat">';
                                                    for ($i=0;$i<count($_SESSION['seatname']);$i++){
                                                        echo $_SESSION['seatname'][$i];
                                                        if($i != count($_SESSION['seatname'])-1){
                                                            echo ',';
                                                        }    
                                                    }
                                                    
                                                    echo '</h3>'; ?>
                                                </div>
                                                <div class="col-sm-6">
                                                    <?php 
                                                    $price = 0;
                                                    echo '<h4 style="color: black" name="price">';
                                                    for ($i=0;$i<count($_SESSION['seatname']);$i++){
                                                        $price =  $price + 80;
                                                    }
                                                    echo $price;
                                                    echo '</h4>'; 
                                                    $_SESSION["price"] = $price;?>
                                                </div>
                                            </div>
                                            <input class="btn btn-primary btn-lg" type="submit" value="ชำระเงิน">
                                        </div></form>
                                        </div>
                                    </div>
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