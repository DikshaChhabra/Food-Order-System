<?php 
include '../modal/conn.php';
include '../modal/function.php';

$grab=new conn;
$query=$grab->Query("select * from `customers` where new_order='false'",$con);

path('dashboard.view.php',['query'=>$query]);
  ?>