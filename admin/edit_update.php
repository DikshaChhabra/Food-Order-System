<?php
include '../modal/conn.php';
if(isset($_GET['submit'])){
	$name=$_GET['name'];
	$price=$_GET['price'];
	$id=$_GET['id'];
	$items=new conn;
    $items->Query("UPDATE `items` SET `name`='$name',`price`='$price' where `id`=$id",$con);
    header('location:edit_delete.php');
}
?>