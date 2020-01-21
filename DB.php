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
         $sql = "SELECT * FROM `mem` WHERE mUser='".$user."' AND mPass='".$pass."'";
         $result = mysqli_query($this->connichdb(), $sql);
         if(mysqli_num_rows($result)==1)
             {
                echo 'Login OK!!!';
                //$row= mysqli_fetch_array($result);
                //session_start();
                //$_SESSION['mUser']=$row['mName'];
                
                //header("location:memberpage.php");//หน้าสมาชิก
            }
         else{
//             echo"Login Eror<br>";
//             echo $sql;
             header("location:login.php");
         }
    }
    
    public function regist($User,$Pass,$Name){
         $sql = "INSERT INTO `mem`(`mUser`, `mPass`, `mName`) VALUES ('".$User."','".$Pass."','".$Name."')";
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
         $sql = "SELECT * FROM `mem` WHERE mid='".$mid."'";
         $result = mysqli_query($this->connichdb(), $sql);
         if(mysqli_num_rows($result)==1)
             {
                $row= mysqli_fetch_array($result);
                //session_start();
                $num=$row['mPoint'];
                echo $num;
                $Sum = $num+$point;
                $sql = "UPDATE `mem` SET `mPoint` = ".$Sum." WHERE `mid` = ".$mid." ";
                $result = mysqli_query($this->connichdb(), $sql);
                //UPDATE `mem` SET`mPoint`=100 WHERE `mid` = 2
                echo $sql;
                echo 'ADD POINT OK';
            }
         else{
//             echo"Login Eror<br>";
             echo $sql;
             header("location:login.php");
         }
     }
     
}