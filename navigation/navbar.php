<?php
    $dbhost = "localhost";
    $dbuser = "root";
    $dbpassword = "";
    $db = "db_tester";
    $conn = new mysqli($dbhost, $dbuser, $dbpassword, $db)or
        die("Connect failed: %s\n" . $conn->erro);
    mysqli_set_charset($conn, "utf8");
    $sql = "SELECT * FROM `member` WHERE mUser = '".$_SESSION['id']."'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($result);
?>
<header class="header_area" id="header">
    <div class="container-fluid h-100">
        <div class="row h-100">
            <div class="col-12 h-100">
                <nav class="h-100 navbar navbar-expand-lg">
                    <a class="navbar-brand" href="index.php"><img src="img/logo-cinema.png" style="width: 100px;"></a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#dorneNav" aria-controls="dorneNav" aria-expanded="false" aria-label="Toggle navigation"><span class="fa fa-bars"></span></button>
                    <!-- Nav -->
                    <div class="collapse navbar-collapse" id="dorneNav">
                        <ul class="navbar-nav mr-auto" id="dorneMenu">
                            <li class="nav-item active">
                                <a class="nav-link" href="index.php">หน้าแรก</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">ภาพยนตร์</a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="movie-on.php">กำลังฉาย</a>
                                    <a class="dropdown-item" href="movie-list.php">โปรแกรมล่วงหน้า</a>
                                </div>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link " href="movie_cenema.php">โรงภาพยนตร์ </a>

                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="promotion.php">โปรโมชั่น</a>
                            </li>
                        </ul> 
                        <div class="dorne-signin-btn ">
                            <li class="nav-item dropdown navbar-nav">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?php echo $row['mName']; ?></a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="profile.php">โปรไฟล์</a>
                                    <a class="dropdown-item" href="logout.php">ออกจากระบบ</a>
                                </div>
                            </li>
                            <!--<a href="logout.php">ออกจากระบบ</a>-->
                        </div>
                   

                    </div>
                </nav>
            </div>
        </div>
    </div>
</header>