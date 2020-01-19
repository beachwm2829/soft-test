<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta content="text/html; charset=iso-8859-2" http-equiv="Content-Type">
        <link href="https://stackpath.bootstrapcdn.com/bootswatch/4.3.1/minty/bootstrap.min.css" rel="stylesheet" integrity="sha384-9NlqO4dP5KfioUGS568UFwM3lbWf3Uj3Qb7FBHuIuhLoDp3ZgAqPE1/MYLEBPZYM" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">    
        <title>หน้าแรก | KAREE Cinema</title>
        <style>
            .mySlides {display:none;}
        </style>
    </head>
    <body>
        <?php
            include './navigation/navbar.php';
        ?>
        <div>
            <image class="mySlides" src="img/11.jpg"  style="width: 100%; height: 90vh"> 
            <image class="mySlides" src="img/12.jpg"  style="width: 100%; height: 90vh"> 
            <image class="mySlides" src="img/13.jpg"  style="width: 100%; height: 90vh"> 
        </div>   
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
              if (myIndex > x.length) {myIndex = 1}    
              x[myIndex-1].style.display = "block";  
              setTimeout(carousel, 100); // Change image every 2 seconds
            }
        </script>
    </body>
</html>
