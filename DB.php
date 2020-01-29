<?php
if (!session_id()) session_start();
class connectdb {
    
    public function connichdb() {
        $dbhost = "localhost";
        $dbuser = "root";
        $dbpassword = "";
        $db = "db_tester";
        $conn = new mysqli($dbhost, $dbuser, $dbpassword, $db)or
                die("Connect failed: %s\n" . $conn->erro);
        mysqli_set_charset($conn, "utf8");
        return $conn;
    }

    public function checkdb($user, $pass) {
        
        $sql = "SELECT * FROM `member` WHERE mUser='" . $user . "' AND mPass='" . $pass . "'";
        $result = mysqli_query($this->connichdb(), $sql);
        if (mysqli_num_rows($result) == 1) {
            $row = mysqli_fetch_array($result);
            $_SESSION["id"] = $user;
            $_SESSION["pass"] = $pass;
            $_SESSION["mid"] = $row["mid"];
            $_SESSION["point"] = $row["mPoint"];
            //echo 'Login OK!!!';
            //$row = mysqli_fetch_array($result);
            //session_start();
            $p = $row['mPosition'];
//            echo $row['mPosition'];
//            echo $row['mUser'];
            //$row= mysqli_fetch_array($result);
            //session_start();
            //$_SESSION['mUser']=$row['mName'];
            if ($p == 'Member') {
                header("location:index.php");
            } else {
                header("location:admin-movie-listplay.php");
            }
        } else {
//             echo"Login Eror<br>";
//             echo $sql;
            header("location:login.php");
        }
    }

    public function regist($User, $Pass, $Name) {
        $sql = "INSERT INTO `member`(`mUser`, `mPass`, `mName`, `mPosition`) VALUES ('" . $User . "','" . $Pass . "','" . $Name . "','Member')";
        if (mysqli_query($this->connichdb(), $sql)) {
            //echo 'Register OK';
            header("location:login.php");
        } else {
            echo "Connet F<br>";
            echo $sql;
        }
    }

    public function addpoint($mid, $point) {
        $sql = "SELECT * FROM `member` WHERE mid='" . $mid . "'";
        $result = mysqli_query($this->connichdb(), $sql);
        if (mysqli_num_rows($result) == 1) {
            $row = mysqli_fetch_array($result);
            $num = $row['mPoint'];
            echo $num;
            $Sum = $num + $point;
            $sql = "UPDATE `member` SET `mPoint` = " . $Sum . " WHERE `mid` = " . $mid . " ";
            $result = mysqli_query($this->connichdb(), $sql);
            header("location:addpoint.php");
        } else {
            echo $sql;
        }
    }

    public function deletepoint($mid, $point) {
        $sql = "SELECT * FROM `member` WHERE mid='" . $mid . "'";
        $result = mysqli_query($this->connichdb(), $sql);
        if (mysqli_num_rows($result) == 1) {
            $row = mysqli_fetch_array($result);
            $num = $row['mPoint'];
            $Sum = $num - $point;
            $sql = "UPDATE `member` SET `mPoint` = " . $Sum . " WHERE `mid` = " . $mid . " ";
            $result = mysqli_query($this->connichdb(), $sql);
            header("location:addpoint.php");
        } else {
            echo $sql;
        }
    }

    public function editpoint($mid, $point) {
        $sql = "SELECT * FROM `member` WHERE mid='" . $mid . "'";
        $result = mysqli_query($this->connichdb(), $sql);
        if (mysqli_num_rows($result) == 1) {
            $sql = "UPDATE `member` SET `mPoint` = " . $point . " WHERE `mid` = " . $mid . " ";
            $result = mysqli_query($this->connichdb(), $sql);
            header("location:addpoint.php");
        } else {
            echo $sql;
        }
    }

    public function addmovice($mvn, $di, $dt, $tm, $gm, $lk) {
        $sql = "INSERT INTO `movice`(`mvName`, `mvDate`, `mvDetail`, `mvTime`, `mvg`,mvImage) VALUES ('" . $mvn . "','" . $di . "','" . $dt . "','" . $tm . "','" . $gm . "','" . $lk . "')";
        $result = mysqli_query($this->connichdb(), $sql);
        header("location:admin-movie-listplay.php");
    }

    public function delete($del) {
        $sql = "DELETE FROM `movice` WHERE `mvName` = '" . $del . "'";
        $result = mysqli_query($this->connichdb(), $sql);
        header("location:admin-movie-listplay.php");
    }

    public function checkmv($tg) {
        $sql = "SELECT * FROM `movice` WHERE mvName='" . $tg . "'";
        $result = mysqli_query($this->connichdb(), $sql);
        if (mysqli_num_rows($result) == 1) {
            $row = mysqli_fetch_array($result);
            
            $_SESSION['mvn'] = $row['mvName'];
//            $_SESSION['mvda'] = $row['mvDate'];
//            $_SESSION['mvde'] = $row['mvDetail'];
//            $_SESSION['mvt'] = $row['mvTime'];
//            $_SESSION['mvg'] = $row['mvg'];
//            $_SESSION['mvi'] = $row['mvImage'];
            
            header("location:admin-Edit-Movie-page.php");
            
        } else {
            //header("location:admin-movie-listplay.php");
            echo $sql;
        }
    }

    public function addpro($A, $B, $C, $D, $E, $F) 
    {
        $sql = "INSERT INTO `promo`(`pName`, `pDetail`, `pDate`, `pCondition`, `pLink`, `pCounty`) VALUES ('".$A."','".$B."','".$C."','".$D."','".$E."','".$F."')";
        $result = mysqli_query($this->connichdb(), $sql);
        header("location:admin-promosion.php");
    }
    
    public function deletepro($delpro) {
        $sql = "DELETE FROM `promo` WHERE `pName` = '".$delpro."'";
        $result = mysqli_query($this->connichdb(), $sql);
        header("location:admin-promosion.php");
    }
    
    public function editmovice($mvn,$di,$dt,$tm,$gm,$lk)
    {
        $sql = "UPDATE `movice` SET `mvName`='" . $mvn . "',`mvDate`='" . $di . "',`mvDetail`='" . $dt . "',`mvTime`='" . $tm . "',`mvg`='" . $gm . "',`mvImage`='" . $lk . "' WHERE mvName = '".$_SESSION['mvn']."'";
        $result = mysqli_query($this->connichdb(), $sql);
        echo $sql;
        header("location:admin-movie-listplay.php");
    }
    
    public function checeditpro($tg)
    {
        $sql = "SELECT * FROM `promo` WHERE pName='" . $tg . "'";
        $result = mysqli_query($this->connichdb(), $sql);
        if (mysqli_num_rows($result) == 1) {
            $row = mysqli_fetch_array($result);
            session_start();
            
            $_SESSION['pn'] = $row['pName'];
            
            header("location:admin-Edit-promotion-page.php");
            
        } else {
            echo $sql;
        }
    }
    public function editpromo($pname,$pdetail,$pdate,$A,$B,$lk)
    {
        $sql = "UPDATE `promo` SET `pName`='" . $pname . "',`pDetail`='" . $pdetail . "',`pDate`='" . $pdate . "',`pCondition`='" . @A . "',`pCounty`='" . $B . "',`pLink`='" . $lk . "' WHERE pName = '".$_SESSION['pn']."'";
        $result = mysqli_query($this->connichdb(), $sql);
        echo $sql;
        header("location:admin-promosion.php");
    }
    public function addticket($mname,$mid,$mdate,$mtime,$cname,$price,$s)
    {
//        echo $mid;
        if($price <= $_SESSION["point"])
        {
            $sum = $_SESSION["point"] - $price;
            $sss = "UPDATE `member` SET `mPoint`=".$sum." WHERE mid = ".$mid;
            $result = mysqli_query($this->connichdb(), $sss);
            $sql = "INSERT INTO `ticket`(`movie`, `memid`, `date`, `timeshow`, `cinema`, `seat`, `price`) "
                    . "VALUES ('" . $mname . "','" . $mid . "','" . $mdate . "','" . $mtime . "','" . $cname . "','" . $s . "','" . $price . "')";
            $result = mysqli_query($this->connichdb(), $sql);
            header("location:payment-ticket.php");
        }
        else
        {
            //echo 'No point';
            header("location:index.php");
        }
        
    }
    
    public function addshowtime($mid,$cid,$time)
    {
        $sql = "INSERT INTO `timeshow`(`mid`, `cid`, `timeshow`) VALUES ('".$mid."','".$cid."','".$time."') ";
        $result = mysqli_query($this->connichdb(), $sql);
        header("location:manageshowtime.php");
    }
    
    public function deleteshowtime($del)
    {
        $sql = "DELETE FROM `timeshow` WHERE tid = ".$del." ";
        $result = mysqli_query($this->connichdb(), $sql);
        header("location:manageshowtime.php");
    }
    
    public function checktime($tra)
    {
        $sql = "SELECT * FROM `timeshow` WHERE tid='" . $tra . "'";
        $result = mysqli_query($this->connichdb(), $sql);
        if (mysqli_num_rows($result) == 1) {
            $row = mysqli_fetch_array($result);
            
            $_SESSION['tid'] = $row['tid'];
            
            header("location:edittimeshow.php");
            
        } else {
            echo $sql;
        }
    }
    
    public function edittimeshow($mid,$cid,$time)
    {
        $sql = "UPDATE `timeshow` SET `mid`= '".$mid."',`cid`= '".$cid."',`timeshow`= '".$time."' WHERE `tid` = ".$_SESSION['tid'];
        $result = mysqli_query($this->connichdb(), $sql);
        header("location:manageshowtime.php");
    }
    
    public function addcinema($mid,$ccode,$cname)
    {
        $sql = "INSERT INTO `cinema`(`mid`, `ccid`, `name`) VALUES ('".$mid."','".$ccode."','".$cname."'])";
        $result = mysqli_query($this->connichdb(), $sql);
        header("location:admin-cinema_county.php");
    }
}
