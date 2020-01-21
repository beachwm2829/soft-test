<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="script.js" title="style1">
        <script src="script.js">
        </script>
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
        <title>Register</title>
    </head>
    <body>
        <script src="js/block.js">
            
        </script>
    <form action='sentregister.php' method='POST' name="formjs">
        <?php
    include './navigation/navbar.php';
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
                            กรอกข้อมูลการสมัคร
                        </span>

                        <div class="wrap-input100 validate-input" data-validate="Enter username">
                            <input class="input100" type="text" placeholder="username" name='mUser'/>
                            <span class="focus-input100" data-placeholder="&#xf207;"></span>
                        </div>

                        <div class="wrap-input100 validate-input" data-validate="Enter password">
                            <input class="input100" type='password' placeholder='password' name='mPass'/>
                            <span class="focus-input100" data-placeholder="&#xf191;"></span>
                        </div>
                        <div class="wrap-input100 validate-input" data-validate="Enter password">
                            <input class="input100" type='text' placeholder='name' name='mName'/>
                            <span class="focus-input100" data-placeholder="&#xf206;"></span>
                        </div>
                        <div class="container-login100-form-btn">
                            <button class="login100-form-btn" action='' onclick="return azz()">
                                ยืนยันการสมัคร
                            </button>
                        </div>
    </form>
    
                        <div class="text-center p-t-90">
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
<!--    <body>
       <div class="login-page">
        <div class="form">
            <form name="formjs" class="register" action='sentregister.php' method='POST'>
                <input class="input100" type="text" placeholder="username" name='mUser'/><br>
                <input class="input100" type='password' placeholder='password' name='mPass'/><br>
                <input class="input100" type='text' placeholder='name' name='mName'/><br>
                <button action='' onclick="a()">Save</button>
        </div>
      </div>
    </body>
</html>-->
