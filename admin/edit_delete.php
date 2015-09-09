<?php
include '../modal/function.php';
include '../modal/conn.php';
$items=new conn;
$result=$items->Query("select * from `items`",$con);
if(isset($_POST['submit'])){
	$type=$_POST['type'];
	$one_type=$items->Query("select * from `items` where `type`=$type");
}
if(isset($_GET['id'])){
	$id=$_GET['id'];
	$items->Query("delete from `items` where `id`=$id",$con);
	header('location:edit_delete.php');
}
path('edit_delete.view.php',['result'=>$result]);
?>