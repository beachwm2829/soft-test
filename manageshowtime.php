
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
        <title>จัดการรอบหนัง | KAREE Cinema</title>
        <style>
            .mySlides {
                display: none;
            }
        </style>
    </head>

    <body>
        <?php
        include './navigation/navbar_admin.php';
        ?>
        <!-- section นี้ เป็น ลิสหนัง -->
        <section class="dorne-about-area section-padding-0-100">
            <div style="background-image: url(img/bg-img/hero1.png);">



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


                                                <div class="container">
                                                    <div class="row">
                                                        <div class="col-12">
                                                            <div class="about-content text-center">
                                                                <h2>จัดการรอบหนัง <br>
                                                                    <div class="row">
                                                                        <div class="col" align="right"><button type="button" class="btn btn-primary" data-toggle="collapse" data-target="#addDatamovie">เพิ่มรอบหนัง +</button></div>
                                                                        <div class="col"align="center"><button type="button" class="btn btn-danger" data-toggle="collapse" data-target="#DeleteDatamovie">ลบรอบหนัง -</button></div>
                                                                        <div class="col"align="left"><button type="button" class="btn btn-warning" data-toggle="collapse" data-target="#EditDatamovie">แก้ไขรอบหนัง +</button></div>
                                                                    </div>


                                                                </h2>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                </section>

                                                <form action='sentaddshowtime.php' method='POST' enctype="multipart/form-data" >
                                                    <section class="page-section collapse" id="addDatamovie">
                                                        <div class="container">
                                                            <h2 class="text-center mt-0">เพิ่มรอบหนัง</h2>
                                                            <hr class="divider my-4">

                                                            

                                                            <div class="row">
                                                                <div class="col-sm-4"></div>
                                                                <div class="col-sm-7">
                                                                    <div class="form-group ">
                                                                        <label for="usr">ไอดีหนัง</label>
                                                                        <input type="text" align="center" style="width: 50%;" class="form-control" name="MID" id="usr">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-sm-4"></div>
                                                                <div class="col-sm-7">
                                                                    <div class="form-group ">
                                                                        <label for="usr">ไอดีโรงหนัง</label>
                                                                        <input type="text" align="center" style="width: 50%;" class="form-control" name="CID" id="usr">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-sm-4"></div>
                                                                <div class="col-sm-7">
                                                                    <div class="form-group ">
                                                                        <label for="usr">เวลาฉายหนัง</label>
                                                                        <input type="text" align="center" style="width: 50%;" class="form-control" name="showtime" id="usr">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-sm-5"></div>
                                                                <div class="col-sm-7">
                                                                    <div class="form-group ">
                                                                        <input class="btn btn-light btn-xl js-scroll-trigger" type="submit" value="Send">
                                                                    </div>
                                                                </div>
                                                            </div>

                                                        </div>
                                                    </section>
                                                </form>

        <form action='sentdeletetime.php' method='POST'>
            <section class="page-section collapse" id="DeleteDatamovie">
                
<!--                <div align="center">
                    <div class="card-body row no-gutters " style="width: 470px;">
                        end of col
                        <div class="col">
                            <input class="form-control form-control-lg form-control-borderless" type="search" placeholder="Enter Movicename for Delete" name="delet">
                            <input type="text" align="center" style="width: 80%;" class="form-control" placeholder="Enter MovieID for Delete" name="deleteM" id="usr">
                        </div>
                        
                        <div align="center">
                            <div class="card-body row no-gutters " style="width: 470px;">
                                end of col
                                <div class="col">
                                    <input class="form-control form-control-lg form-control-borderless" type="search" placeholder="Enter Movicename for Delete" name="delet">
                                    <input type="text" align="center" style="width: 80%;" class="form-control" placeholder="Enter CinemaID for Delete" name="deleteC" id="usr">
                                </div>-->
                                
                                <div align="center">
                            <div class="card-body row no-gutters " style="width: 470px;">
                                <!--end of col-->
                                <div class="col">
        <!--                            <input class="form-control form-control-lg form-control-borderless" type="search" placeholder="Enter Movicename for Delete" name="delet">-->
                                    <input type="text" align="center" style="width: 80%;" class="form-control" placeholder="Enter TimeShowID for Delete" name="delete" id="usr">
                                </div>
                                
                                <!--end of col-->
                                <div class="col-auto">
                                    <input class="btn btn-light btn-xl js-scroll-trigger" type="submit" value="Delete">
                                </div>
                                <!--end of col-->
                            </div>
                        </div>
                        
                        </section>
                        </form>
        
        <form action='checktime.php' method='POST'>
            <section class="page-section collapse" id="EditDatamovie">
                <div align="center">
                    <div class="card-body row no-gutters align-items-center"style="width: 400px;" >
                        <!--end of col-->
                        <div class="col">
<!--                            <input class="form-control form-control-lg form-control-borderless" type="search" placeholder="Search topics or keywords">-->
                            <input type="text" align="center" style="width: 100%;" class="form-control" placeholder="Enter TimeShowID for Edit" name="traget" id="usr">
                        </div>
                        <!--end of col-->
                        <div class="col-auto">
                            <button class="btn btn-lg btn-success" type="submit">Search</button>
                        </div>
                        <!--end of col-->
                    </div>
                </div>
            </section>
        </form>


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