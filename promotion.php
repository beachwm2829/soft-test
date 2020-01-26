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
        include './navigation/navbar.php';
        $dbhost = "localhost";
        $dbuser = "root";
        $dbpassword = "";
        $db = "db_tester";
        $conn = new mysqli($dbhost, $dbuser, $dbpassword, $db)or
                die("Connect failed: %s\n" . $conn->erro);
        mysqli_set_charset($conn, "utf8");
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
                                                    <div  >
                                                        <div id="demo" class="carousel slide" data-ride="carousel" >

                                                            <!-- Indicators -->
                                                            <ul class="carousel-indicators">
                                                                <li data-target="#demo" data-slide-to="0" class="active" ></li>
                                                                <li data-target="#demo" data-slide-to="1"></li>
                                                                <li data-target="#demo" data-slide-to="2"></li>
                                                            </ul>

                                                            <!-- The slideshow -->
                                                            <div class="carousel-inner" align="center">
                                                                <div class="carousel-item active " style="background-image: url(#) ; ">
                                                                    <!---webkit-filter: blur(5px); filter: blur(px);-->

                                                                    <img src="https://lh3.googleusercontent.com/FjhGGDu-vQqGc4LmCopKCrkbnv-tWQOW_aG4BaJ-ks2WusdRJLrTyDGDjhyXgRewlUszZBpCA526pIl_6n3J=w888" alt="Los Angeles" width="70%" height="500" style="">

                                                                </div>
                                                                <div class="carousel-item">
                                                                    <img src="https://lh3.googleusercontent.com/0a9fGTgscJ1u_1mzD7leHjtJcwP0EKTJh1jkcgL2SQVsmvj_PgQMS7gggooxcaEjeHVK2PfCl2lFmsRED44k=w888" alt="Chicago" width="70%" height="500">
                                                                </div>
                                                                <div class="carousel-item">
                                                                    <img src="https://lh3.googleusercontent.com/DIrsXOqB-xRryzulDd-1vc1yXrfkgBtUxQXSO3s6cSxcY5AV88ZT3yJ8HPgBCKzyNJqT50tnIcu4byj43Piwyw=w888" alt="New York" width="70%" height="500">
                                                                </div>
                                                            </div>

                                                            <!-- Left and right controls -->
                                                            <a class="carousel-control-prev" href="#demo" data-slide="prev">
                                                                <span class="carousel-control-prev-icon"></span>
                                                            </a>
                                                            <a class="carousel-control-next" href="#demo" data-slide="next">
                                                                <span class="carousel-control-next-icon"></span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="container" >
                                                        <div class="row">
                                                            <div class="col-12">
                                                                <div class="about-content text-center" >
                                                                    <h2>โปรโมชั่นสุดพิเศษ </h2>
                                                                    <hr>
                                                                    <div class="" style="width:1100px" align="center">
                                                                        <?php
                                                                        $sql = "SELECT * FROM `movice`";
                                                                        $result = mysqli_query($conn, $sql);

                                                                        $num = 3;
                                                                        while ($row = mysqli_fetch_array($result)) {
//                                                                                echo $row["mvImage"];
                                                                            if ($num % 3 == 0) {
                                                                                ?>
                                                                                <div class="row">
                                                                                    <div class="col">
                                                                                        <a href="chair.php">
                                                                                            <div class="card" style="width:300px"  >
                                                                                                <img class="card-img-top" style="width: 80%;"  src="<?php echo $row["mvImage"] ?>" alt="Card image">
                                                                                                <div class="card-body">
                                                                                                    <h4 class="card-title" href="chair.php"><?php echo $row["mvName"] ?></h4>
                                                                                                    <p class="card-text">วันที่เข้าฉาย: <?php echo $row["mvDate"] ?></p>
                                                                                                </div>
                                                                                            </div>
                                                                                        </a>
                                                                                    </div>

                                                                                    <?php
                                                                                } else {
                                                                                    ?>
                                                                                    <div class="col">
                                                                                        <a href="chair.php">
                                                                                            <div class="card" style="width:300px"  >
                                                                                                <img class="card-img-top" style="width: 80%;"  src="<?php echo $row["mvImage"] ?>" alt="Card image">
                                                                                                <div class="card-body">
                                                                                                    <h4 class="card-title" href="chair.php"><?php echo $row["mvName"] ?></h4>
                                                                                                    <p class="card-text">วันที่เข้าฉาย: <?php echo $row["mvDate"] ?></p>
                                                                                                </div>
                                                                                            </div>
                                                                                        </a>
                                                                                    </div>
                                                                                    <?php
                                                                                }
                                                                                $num = $num + 1;
                                                                            }
                                                                            ?>
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