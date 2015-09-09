<?php 
include '../modal/conn.php';
if(isset($_GET['id'])){
	$id=$_GET['id'];
	$old=new conn;
	$query=$old->Query("update `customers` set `new_order`='true' where `id`=$id",$con);
 }
 ?>
