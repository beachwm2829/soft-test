<html>

    <head>
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
        <title>หน้าแรก | Garle Cinema</title>
        <style>
            .mySlides {
                display: none;
            }
        </style>
    </head>

    <body>
        <?php
        session_start();
        if(isset($_SESSION["id"])){
            include './navigation/navbar.php';
            
        }else{
            include './navigation/navbar-login.php';      
        }
        $dbhost = "localhost";
        $dbuser = "root";
        $dbpassword = "";
        $db = "db_tester";
        $conn = new mysqli($dbhost, $dbuser, $dbpassword, $db)or
                die("Connect failed: %s\n" . $conn->erro);

        mysqli_set_charset($conn, "utf8");
        ?>
 
        <script>
            var myIndex = 0;
            carousel();

            function carousel() {
                var i;
                var x = document.getElementsByClassName("mySlides");
                for (i = 0; i < x.length; i++) {
                    x[i].style.display = "none";
                }
                myIndex++;
                if (myIndex > x.length) {
                    myIndex = 1
                }
                x[myIndex - 1].style.display = "block";
                setTimeout(carousel, 100); // Change image every 2 seconds
            }
        </script>
        <section class="dorne-welcome-area bg-img bg-overlay" style="background-image: url(img/bg-img/hero1.png);">
            <div class="container h-100">
                <div class="row h-100 align-items-center justify-content-center">
                    <div class="col-12 col-md-10">
                        <div class="hero-content">
                            <h2>ยินดีตอนรับ</h2>
                            <h4>เว็บบริการ การจองตั๋วหนังที่สะดวกสบายที่สุดกับใบแต๋วและพ่องเพื่อน</h4>
                        </div>
                        <!-- Hero Search Form -->
                        <div class="hero-search-form">
                            <!-- Tabs -->
                            <!-- Tabs Content -->
                            <div class="tab-content" id="nav-tabContent">
                                <div class="tab-pane fade show active" id="nav-places" role="tabpanel" aria-labelledby="nav-places-tab">
                                    <h6>คุณต้องการเลือกโรงหนังที่ใกล้กับคุณที่สุด?</h6>
                                    <form action="#" method="get">
                                        <?php
                                            $sql = "SELECT * FROM `cinema`";
                                            $result = mysqli_query($conn, $sql);  
                                        ?>
                                        <select class="custom-select">
                                            <option value="0">โรงภาพยนต์ทั้งหมด</option>
                                            <?php while ($row = mysqli_fetch_array($result)) { 
                                            echo "<option value=".$row['cid'].">".$row['name']."</option>";
                                            } ?>
<!--                                            <option value="2">ภาคตะวันออกเฉียงเหนือ</option>
                                            <option value="3">ภาคกลาง</option>
                                            <option value="4">ภาคใต้</option>-->
                                        </select>
                                        <?php
                                            $sql = "SELECT * FROM `movice`";
                                            $result = mysqli_query($conn, $sql);  
                                        ?>   
                                        <select class="custom-select">
                                            <option selected>ภาพยนต์ทั้งหมด</option>
                                            <?php while ($row = mysqli_fetch_array($result)) { 
                                            echo "<option value=".$row['mmid'].">".$row['mvName']."</option>";
                                            } ?>
                                        </select>
                                        <button type="submit" class="btn dorne-btn"><i class="fa fa-search pr-2" aria-hidden="true" href="#services"></i>รอบฉาย </button>
                                    </form>
                                                </div>
                                                </div>
                                                </div>
                                                </div>
                                                </div>
                                                </div>
                                                <!-- Hero Social Btn -->
                                                <div class="hero-social-btn">
                                                    <div class="social-title d-flex align-items-center">
                                                        <h6>Follow us on Social Media</h6>
                                                        <span></span>
                                                    </div>
                                                    <div class="social-btns">
                                                        <a href="#"><i class="fa fa-linkedin" aria-haspopup="true"></i></a>
                                                        <a href="#"><i class="fa fa-behance" aria-hidden="true"></i></a>
                                                        <a href="#"><i class="fa fa-dribbble" aria-hidden="true"></i></a>
                                                        <a href="#"><i class="fa fa-twitter" aria-haspopup="true"></i></a>
                                                        <a href="#"><i class="fa fa-facebook" aria-haspopup="true"></i></a>
                                                    </div>
                                                </div>
                                                </section>
                                                <!-- section นี้ เป็น ลิสหนัง -->
                                                <section class="dorne-about-area section-padding-0-100">
                                                    <div class="container">
                                                        <form action='chair.php' method='POST'>
                                                            <div class="row">
                                                                <div class="col-12">
                                                                    <div class="about-content text-center">
                                                                        <h2>รายการหนัง</h2>
                                                                        <div class="card" style="width:1100px" align="center">
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
                                                                                            <?php echo '<a href="showtime.php?m='.$row["mmid"].'">'; ?>
                                                                                                <div class="card" style="width:300px"  >
                                                                                                    <img class="card-img-top" style="width: 80%;"  src="<?php echo $row["mvImage"] ?>" alt="Card image">
                                                                                                    <div class="card-body">
                                                                                                        <h4 class="card-title" href="#"><?php echo $row["mvName"] ?></h4>
                                                                                                        <p class="card-text">วันที่เข้าฉาย: <?php echo $row["mvDate"] ?></p>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </a>
                                                                                        </div>

                                                                                        <?php
                                                                                    } else {
                                                                                        ?>
                                                                                        <div class="col">
                                                                                            <?php echo '<a href="showtime.php?m='.$row["mmid"].'">'; ?>
                                                                                                <div class="card" style="width:300px"  >
                                                                                                    <img class="card-img-top" style="width: 80%;"  src="<?php echo $row["mvImage"] ?>" alt="Card image">
                                                                                                    <div class="card-body">
                                                                                                        <h4 class="card-title" href="#"><?php echo $row["mvName"] ?></h4>
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
                                                        </form>
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