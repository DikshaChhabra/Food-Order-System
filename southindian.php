<?php 
include 'modal/conn.php';
include 'modal/function.php';
$southindian=new conn;
$result=$southindian->Query("select * from `items` where `type`='southindian'" ,$con);


path('southindian.view.php',['result'=>$result]);

?>