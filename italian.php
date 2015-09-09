<?php 
include 'modal/conn.php';
include 'modal/function.php';
$italian=new conn;
$result=$italian->Query("select * from `items` where `type`='italian'" ,$con);


path('italian.view.php',['result'=>$result]);

?>


                       