<?php 
include '../modal/conn.php';
include '../modal/function.php';
$feedback=new conn;
$result=$feedback->Query("select * from `feedback`" ,$con);

if(isset($_GET['id'])){
	$id=$_GET['id'];
	$feedback->Query("delete from `feedback` where `s.no`=$id",$con);
	header('location:show_feedback.php');
}
path('show_feedback.view.php',['result'=>$result]);
 ?>