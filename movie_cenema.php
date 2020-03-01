<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>

    <head>
        <meta charset="UTF-8">
        <meta name="description" content="">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Dorne- Directory &amp; Listing Template</title>
        <link rel="icon" href="img/core-img/favicon.ico">
        <link href="style.css" rel="stylesheet">
        <link href="css/responsive/responsive.css" rel="stylesheet">

        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta content="text/html; charset=iso-8859-2" http-equiv="Content-Type">
        <link href="https://stackpath.bootstrapcdn.com/bootswatch/4.3.1/minty/bootstrap.min.css" rel="stylesheet" integrity="sha384-9NlqO4dP5KfioUGS568UFwM3lbWf3Uj3Qb7FBHuIuhLoDp3ZgAqPE1/MYLEBPZYM" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <title>หน้าแรก | KAREE Cinema</title>
        <style>
            .mySlides {
                display: none;
            }
        </style>
    </head>

    <body>
        <?php
        session_start();
        if(!isset($_SESSION["id"])){
            include './navigation/navbar-login.php';     
        }else{
            include './navigation/navbar.php';      
        }
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
                                <!-- Tabs -->
                                <!-- Tabs Content -->
                                <div class="tab-content" id="nav-tabContent">
                                    <div class="tab-pane fade show active" id="nav-places" role="tabpanel" aria-labelledby="nav-places-tab">
                                        <h6>คุณต้องการเลือกโรงหนังที่ใกล้กับคุณที่สุด?</h6>
                                        <form action="#" method="get">
                                            <select class="custom-select">
                                                <option selected>เลือกภูมิภาค</option>
                                                <option value="1">ภาคเหนือ</option>
                                                <option value="2">ภาคตะวันออกเฉียงเหนือ</option>
                                                <option value="3">ภาคกลาง</option>
                                                <option value="4">ภาคใต้</option>
                                            </select>
                                            <select class="custom-select">
                                                <option selected>เลือกจังหวัด</option>
                                                <option value="1">บุรีรัมย์</option>
                                                <option value="2">มหาสารคาม</option>
                                                <option value="3">ขอนแก่น</option>
                                            </select>
                                            <select class="custom-select">
                                                <option selected>วันนี้</option>
                                                <option value="1">วันนี้</option>
                                                <option value="2">เร็วๆนี้</option>

                                            </select>
                                            <button type="submit" class="btn dorne-btn"><i class="fa fa-search pr-2" aria-hidden="true"></i>รอบฉาย <button>
                                                    </form>
                                                    </div>
                                                    </div>
                                                    </div>
                                                    </div>
                                                    </div>
                                                    </div>
                                                    </div>
                                                    <div class="container">
                                                        <div class="row">
                                                            <div class="col-12">
                                                                <div class="about-content text-center">
                                                                    <div align="center"><h2>โรงภาพยนต์ </h2>  </div>

                                                                    <div class="card" style="width:1200px"align="center">
                                                                        <div class="card-body">
                                                                            <h4>แบรนด์</h4>
                                                                            <div class="card" style="width:200px">
                                                                                <div class="card-body">
                                                                                    <img src="img/unnamed.png">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <hr>
                                                                    <div class="card" style="width:1200px"align="center">
                                                                        <div class="card-body">
                                                                            <h4>ระบบฉาย</h4>
                                                                            <div class="card" style="width:200px">
                                                                                <div class="card-body">
                                                                                    <img src="img/unnamed-4k.png">

                                                                                </div>
                                                                            </div>
                                                                            <h5>4K</h5><h5>
                                                                                เกี่ยวกับระบบชมภาพยนตร์
                                                                                อีกขีดขั้นสุดยอดเทคโนโลยีแห่งความคมชัด Sony Digital Cinema 4K เครื่องฉายระบบดิจิตอลที่ดีที่สุดแห่งโลกภาพยนตร์ ให้ความละเอียดภาพ คมชัดสูงสุดถึง 8.8 เมกะพิเซล เหนือกว่าระบบ Full HD ถึง 4 เท่า สว่างใส สมจริง คมชัดทุกมิติ ซึ่ง เอส เอฟ เป็นโรงภาพยนตร์แห่งเดียวในเมืองไทยที่รองรับการฉายในระบบ 4K ด้วยเครื่องฉาย Sony Digital Cinema 4K มากที่สุดในประเทศ ทุกโรง ทุกสาขา เพื่อมอบความบันเทิงระดับโลกที่ดีที่สุดให้คนไทย

                                                                                อะไรคือ 4K?
                                                                                4K หมายถึง รายละเอียดภาพและอื่นๆ อีกมากมาย ภาพ 4K ที่ฉายบนหน้าจอภาพยนตร์มีถึง 4096 × 2160 พิกเซล (หรือจุดเล็กๆ) อย่างไม่น่าเชื่อ นั่นคือมากกว่า 8 ล้านพิกเซลหรือสี่เท่าของจำนวนพิกเซลในทีวี Full HD ของคุณที่บ้าน และด้วยรายละเอียดทั้งหมดนี้ ภาพของโรงภาพยนตร์ที่ฉายโดยใช้ Sony 4K จะดูน่าทึ่ง สวยและงดงาม - ด้วยคอนทราสและสีที่มากกว่า

                                                                            </h5>
                                                                        </div>
                                                                    </div>
                                                                    <hr>
                                                                    <div class="card" style="width:1200px"align="center">
                                                                        <div class="card-body">
                                                                            <h4>รูปแบบที่นั่ง</h4>
                                                                            <div class="row">
                                                                                <div class="col"><div class="card" style="width:200px">
                                                                                        <div class="card-body">
                                                                                            <img src="img/unnamed_c1.png">
                                                                                            <h4>Executive Seat</h4>
                                                                                        </div>
                                                                                    </div></div>
                                                                                <div class="col"><div class="card" style="width:200px">
                                                                                        <div class="card-body">
                                                                                            <img src="img/unnamed_c2.png">
                                                                                            <h4>Moon Bed</h4>
                                                                                        </div>
                                                                                    </div></div>
                                                                                <div class="col"><div class="card" style="width:200px">
                                                                                        <div class="card-body">
                                                                                            <img src="img/unnamed_c3.png">
                                                                                            <h4>Day Bed</h4>
                                                                                        </div>
                                                                                    </div></div>
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