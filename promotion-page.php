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
        error_reporting(E_ALL ^ E_NOTICE);
        require_once './DB.php';
        $con = new connectdb();
        if ($con->connichdb()) {
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
                                 <h3 style="color: blue">สิทธิพิเศษเฉพาะสมาชิก SF+ (Package ที่กำหนด) และ SF Movie Club Card ทุกประเภท</h3>
                                <h5>ตั้งแต่วันที่ 1 มกราคม 2563 ถึง วันที่ 31 ธันวาคม 2563</h5>
                                <br>
                                <div class="card" style="width:1080px;">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-sm" align="rigth">
                                                <img src="https://lh3.googleusercontent.com/IEZXwitKAyCHZ28y1g2pGQANbyXKroCz9vUgsZnYqT9hDODqYQP3D7B1eVN9lpi3R7FesrULimtMuc3H-mc=w480"style="width: 70%" class="rounded" alt="Cinque Terre">
                                            </div>
                                            <div class="col-sm" align="left">
                                               
                                                <h3 style="color: blue">สิทธิพิเศษเฉพาะสมาชิก SF+ (Package ที่กำหนด) และ SF Movie Club Card ทุกประเภท</h3>
                                                <h5 style="color: black">พิเศษ!! อร่อยกับชุดป๊อบคอร์น รับส่วนลด 50 บาท เมื่อซื้อ 2 For U Combo, Sausage Combo หรือ Extra Sausage Combo</h5>
                                                <!--ชิ่อหนัง -->
                                                <h4 style="color: blue">ระยะเวลาโปรโมชั่น</h4>
                                                <h6 style="color: black">ตั้งแต่วันที่ 1 มกราคม 2563 ถึง วันที่ 31 ธันวาคม 2563</h6>
                                                <!--วัน - เวลา -->
                                                <h4 style="color: blue"><span class="glyphicon glyphicon-map-marker"></span> เงื่อนไขการรับสิทธิ์</h4>
                                                <h6 style="color: black">- จำกัดเพียง 1 สิทธิ์/ชุด/วัน เท่านั้น<br>
                                                    - สำหรับสมาชิก SF+ ที่สมัคร Package โปรตาม GEN, The VIP หรือ The First เท่านั้น  และสมาชิก SF Movie Club Card ทุกประเภท<br>
                                                    - ไม่สามารถใช้สิทธิ์ร่วมกับกิจกรรมส่งเสริมการขายด้านราคาอื่นๆได้<br>
                                                    - ขอสงวนสิทธิ์ในการเปลี่ยนแปลงเงื่อนไข โดยไม่ต้องแจ้งให้ทราบล่วงหน้า</h6>
                                                <h4 style="color: blue">สาขาที่ร่วมรายการ</h4>
                                                <h6 style="color: black">โรงภาพยนตร์ในเครือทุกสาขา  ยกเว้น สาขาบิ๊กซี ปราจีนบุรี   </h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <br><br>
                                <hr>


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