<?php  
       $con = mysqli_connect("localhost" , "root" , "" , "robotArmControl");
       if(mysqli_connect_errno()){
           mysqli_connect_error();
           exit();
       }
?> 