<?php
include('connection.php');

if(isset($_POST['save'])){

    $act1 = $_POST['Actuator1'];
    $act2 = $_POST['Actuator2'];
    $act3 = $_POST['Actuator3'];
    $act4 = $_POST['Actuator4'];
    $act5 = $_POST['Actuator5'];
    $act6 = $_POST['Actuator6'];

    if(isset($_POST['play'])){
        $play = 'true';
    }else{
        $play = 'false';
    }
    //$act1 , $act2 , $act3 ,$act4 ,$act5 ,$act6 ,'$isOn'
    //(act1 , act2 , act3 ,act4 ,act5 ,act6 ,isOn)
    $insert = "INSERT INTO control values ($act1 , $act2 , $act3 ,$act4 ,$act5 ,$act6 ,'$play') ";
    $result = mysqli_query($con , $insert);
    
}

 if(isset($result) and $result) { 

    header("Location: control.html");   
    exit();

     } else if (isset($result) and !$result){ ?>
    
    <p>Sorry Item was not added</p>
    <?php } ?>