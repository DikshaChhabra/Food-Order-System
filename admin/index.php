<?php
include '../modal/conn.php';
include '../modal/function.php';
	if(isset($_POST['submit'])){
		$name=$_POST['name'];
		$pass=$_POST['password'];
		define('nam', "admin");
		define('pas',"admins");
	if($name==nam && $pass==pas){
	header('location:dashboard.php');
	}
	else
		echo "username and password is incorrect";
	}
path('index.view.php');
?>