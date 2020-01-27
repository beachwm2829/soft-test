
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
        <link rel="icon" type="image/png" href="images/icons/favicon.ico" />
        <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
        <link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
        <link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
        <link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
        <link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
        <link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
        <link rel="stylesheet" type="text/css" href="css/util.css">
        <link rel="stylesheet" type="text/css" href="css/main.css">
    </head>

    <body>
        <script src="js/block.js">

        </script>
        <form action='sentlogin.php' method='POST' name="formjs">
            <?php
            include './navigation/navbar.php';

            ini_set('display_errors', 1);
            error_reporting(~0);
            $dbhost = "localhost";
            $dbuser = "root";
            $dbpassword = "";
            $db = "db_tester";
            $conn = new mysqli($dbhost, $dbuser, $dbpassword, $db)or
                    die("Connect failed: %s\n" . $conn->erro);

            if (mysqli_connect_errno()) {
                echo "Database Connect Failed : " . mysqli_connect_error();
                exit();
            }

            //*** Reject user not online
            $intRejectTime = 20; // Minute
            $sql = "UPDATE member SET LoginStatus = '0', LastUpdate = '0000-00-00 00:00:00'  WHERE 1 AND DATE_ADD(LastUpdate, INTERVAL $intRejectTime MINUTE) <= NOW() ";
            $query = mysqli_query($conn, $sql);
            ?>
            <div class="limiter">
                <div class="dorne-welcome-area bg-img bg-overlay" style="background-image: url(img/bg-img/hero1.png);">
                    <div class="row h-100 align-items-center justify-content-center">
                        <div class="wrap-login100">
                            <form class="login100-form validate-form">
                                <span class="login100-form-logoC">
                                    <img src="img/logo-cinema.png" style="width: 100px;">
        <!--                            <i class="zmdi zmdi-landscape"></i>-->
                                </span>

                                <span class="login100-form-title p-b-34 p-t-27">
                                    GARLE CINEMA
                                </span>

                                <div class="wrap-input100 validate-input" data-validate="Enter username">
                                    <input class="input100" type="text" name="user" placeholder="Username">
                                    <span class="focus-input100" data-placeholder="&#xf207;"></span>
                                </div>

                                <div class="wrap-input100 validate-input" data-validate="Enter password">
                                    <input class="input100" type="password" name="pass" placeholder="Password">
                                    <span class="focus-input100" data-placeholder="&#xf191;"></span>
                                </div>

                                <div class="contact100-form-checkbox">
                                    <input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me">
                                    <label class="label-checkbox100" for="ckb1">
                                        จำรหัสผ่าน
                                    </label>
                                </div>

                                <div class="container-login100-form-btn">
                                    <button class="login100-form-btn" action='' onclick="return login()">
                                        เข้าสู่ระบบ
                                    </button>
                                </div>
                            </form>

                            <div class="text-center p-t-90">
                                <a class="txt1" href="registerpage.php">
                                    สมัครสมาชิก
                                </a>
                                <a class="txt1">
                                    ||   
                                </a>
                                <a class="txt1" href="#">
                                    ลืมรหัสผ่าน?
                                </a>
                            </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- Hero Social Btn -->

                </section>


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