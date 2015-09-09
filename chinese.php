<?php 
include 'modal/conn.php';
include 'modal/function.php';
$italian=new conn;
$result=$italian->Query("select * from `items` where `type`='chinese'" ,$con);


path('chinese.view.php',['result'=>$result]);

?>


                       