<!DOCTYPE html>
<html>
    <head>
        <?php 
//        session_start();
        error_reporting(E_ALL^E_NOTICE);
        require_once './DB.php';
        $m = $_REQUEST["m"];
        $con = new connectdb();
            if($con ->connichdb()){
                $sql_user = "SELECT * FROM `movice` where mmid='".$m."'";
                $objquery = mysqli_query($con->connichdb(), $sql_user);
            }
        ?>
        <meta name="description" content="">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="icon" href="img/core-img/favicon.ico">
        <link href="style.css" rel="stylesheet">
        <link href="css/responsive/responsive.css" rel="stylesheet">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta content="text/html; charset=iso-8859-2" http-equiv="Content-Type">
        <link href="https://stackpath.bootstrapcdn.com/bootswatch/4.3.1/minty/bootstrap.min.css" rel="stylesheet" integrity="sha384-9NlqO4dP5KfioUGS568UFwM3lbWf3Uj3Qb7FBHuIuhLoDp3ZgAqPE1/MYLEBPZYM" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <title>หน้าแรก | KAREE Cinema</title>
        <title></title>
    </head>
    <body>
        <?php
            include './navigation/navbar.php';
            $row = mysqli_fetch_array($objquery);
            //echo $row["mvName"];
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
<!--                            <h2>เลือกที่นั่ง</h2>-->
                            <br>
                            <div class="card" style="width:1080px;">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-sm" align="rigth">
                                            <img src="<?php echo $row["mvImage"]; ?>" class="rounded" alt="Cinque Terre">
                                        </div>
                                        <div class="col-sm" align="left">
                                            <br><br><br><br><br>
                                            <h3 style="color: black"><?php echo $row["mvName"]; ?></h3>
                                            <!--ชิ่อหนัง -->
                                            <h6 style="color: blue"><?php echo $row["mvDate"]; ?></h6>
                                            <!--วัน - เวลา -->               
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <br><br>
                            <hr>
                            <h2>เลือกรอบ</h2>
                            <?php 
                                error_reporting(E_ALL^E_NOTICE);
                                require_once './DB.php';
                                $m = $_REQUEST["m"];
                                $con = new connectdb();
                                    if($con ->connichdb()){
                                        $sql_user = "SELECT cinema.cid, cinema.name, movice.mmid, movice.mvName, timeshow.timeshow "
                                                . "FROM timeshow "
                                                . "INNER JOIN cinema ON cinema.cid = timeshow.cid "
                                                . "JOIN movice ON movice.mmid = timeshow.mid";
                                        $objquery = mysqli_query($con->connichdb(), $sql_user);
                                        $i = 1;
                                        while($row = mysqli_fetch_array($objquery)){
           
                                            if($row["mmid"] == $m){
                                                echo $row["name"];
                                                echo '<br>'; 
                                                echo $row["timeshow"];
                                                echo '<br>'; 
                                            }
                                            
                                        }
                                    }
                            ?>
                
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
