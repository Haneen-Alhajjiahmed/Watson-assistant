<?php  
       include("connection.php");

       if(isset($_GET['top'])){
            $dir = $_GET['top'];
            $insert = "INSERT INTO directions values ('$dir','n','n','n','n'); ";
       } else if(isset($_GET['bottom'])){
          $dir = $_GET['bottom'];
          $insert = "INSERT INTO directions values ('n','$dir','n','n','n'); ";
     } else if(isset($_GET['left'])){
          $dir = $_GET['left'];
          $insert = "INSERT INTO directions  values ('n','n','$dir','n','n'); ";
     } else if(isset($_GET['right'])){
          $dir = $_GET['right'];
          $insert = "INSERT INTO directions  values ('n','n','n','$dir','n'); ";
     } else if (isset($_GET['stop'])){
          $dir = $_GET['stop'];
          $insert = "INSERT INTO directions values ('n','n','n','n','$dir'); ";
     }
     echo $dir;
       
    $result = mysqli_query($con , $insert);
?> 