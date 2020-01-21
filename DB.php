<?php
    class connectdb 
{
    public function connichdb(){
        $dbhost = "localhost";
        $dbuser = "root";
        $dbpassword="";
        $db="db_tester";
        $conn = new mysqli($dbhost,$dbuser,$dbpassword,$db)or
                die("Connect failed: %s\n".$conn->erro);
        mysqli_set_charset($conn,"utf8");
        return $conn;        
    }
    public function checkdb($user,$pass){
         $sql = "SELECT * FROM `member` WHERE mUser='".$user."' AND mPass='".$pass."'";
         $result = mysqli_query($this->connichdb(), $sql);
         if(mysqli_num_rows($result)==1)
             {
                echo 'Login OK!!!';
                $row= mysqli_fetch_array($result);
                //session_start();
                $p=$row['mPosition'];
                //echo $p;
                //$row= mysqli_fetch_array($result);
                //session_start();
                //$_SESSION['mUser']=$row['mName'];
                if($p == 'Member')
                {
                    header("location:chair.php");
                }
                else
                {
                    header("location:admin-movie-listplay.php");
                }
            }
         else{
//             echo"Login Eror<br>";
//             echo $sql;
             header("location:login.php");
         }
    }
    
    public function regist($User,$Pass,$Name){
         $sql = "INSERT INTO `member`(`mUser`, `mPass`, `mName`, `mPosition`) VALUES ('".$User."','".$Pass."','".$Name."','Member')";
         if(mysqli_query($this->connichdb(),$sql))
         {
             //echo 'Register OK';
            header("location:login.php");
         }
        else{ echo "Connet F<br>";
        echo $sql;
        }
     }
     
     public function addpoint($mid,$point)
     {
         $sql = "SELECT * FROM `member` WHERE mid='".$mid."'";
         $result = mysqli_query($this->connichdb(), $sql);
         if(mysqli_num_rows($result)==1)
             {
                $row= mysqli_fetch_array($result);
                $num=$row['mPoint'];
                echo $num;
                $Sum = $num+$point;
                $sql = "UPDATE `member` SET `mPoint` = ".$Sum." WHERE `mid` = ".$mid." ";
                $result = mysqli_query($this->connichdb(), $sql);
                header("location:addpoint.php");
            }
         else{
             echo $sql;
         }
     }
     
     public function deletepoint($mid,$point)
     {
         $sql = "SELECT * FROM `member` WHERE mid='".$mid."'";
         $result = mysqli_query($this->connichdb(), $sql);
         if(mysqli_num_rows($result)==1)
             {
                $row= mysqli_fetch_array($result);
                $num=$row['mPoint'];
                $Sum = $num-$point;
                $sql = "UPDATE `member` SET `mPoint` = ".$Sum." WHERE `mid` = ".$mid." ";
                $result = mysqli_query($this->connichdb(), $sql);
                header("location:addpoint.php");
            }
         else{
             echo $sql;
         }
     }
     
     public function editpoint($mid,$point)
     {
         $sql = "SELECT * FROM `member` WHERE mid='".$mid."'";
         $result = mysqli_query($this->connichdb(), $sql);
         if(mysqli_num_rows($result)==1)
             {
                $sql = "UPDATE `member` SET `mPoint` = ".$point." WHERE `mid` = ".$mid." ";
                $result = mysqli_query($this->connichdb(), $sql);
                header("location:addpoint.php");
            }
         else{
             echo $sql;
         }
     }
     
     public function addmovice($mvn,$di,$dt,$tm,$gm)
     {
         $sql = "INSERT INTO `movice`(`mvName`, `mvDate`, `mvDetail`, `mvTime`, `mvg`) VALUES ('".$mvn."','".$di."','".$dt."','".$tm."','".$gm."')";
         $result = mysqli_query($this->connichdb(), $sql);
         header("location:admin-movie-listplay.php");
     }
     
     public function delete($del)
     {
         $sql = "DELETE FROM `movice` WHERE `mvName` = '".$del."'";
         $result = mysqli_query($this->connichdb(), $sql);
         header("location:admin-movie-listplay.php");
     }
     
}