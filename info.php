<?php 
include 'modal/conn.php';
include 'modal/function.php';
if(isset($_POST['submit'])){
	
	$your_name=$_POST['your_name'];
	$email=$_POST['email'];
	$addr=$_POST['addr'];
	$phone_no=$_POST['phone_no'];
	$random=mt_rand();
	$send=new conn;
	$query=$send->Query("insert  into `customers` values('','".$your_name."','".$email."',
		   '".$addr."','".$random."','false','".$phone_no."')",$con);
	$query1=$send->Query("select `id` from `customers` where `random`='".$random."'",$con);
	$result= $query1->fetchObject();
	$id=$result->id;
	$query2=$send->Query("create table cust_$id(dish_id INT AUTO_INCREMENT PRIMARY 
    	     KEY, dishname VARCHAR(100) ,quantity VARCHAR(100), price VARCHAR(100))",$con);
	$items=(array) json_decode($_COOKIE['set_order']);
	foreach ($items as $key) {
		$dishname=substr($key, 0, strpos($key, '('));
		$quantity=substr(substr($key, strpos($key,'(')+strlen('('),strlen($key)),0, strpos(substr($key, strpos($key,'(')+strlen('('),strlen($key)), ')'));
		$part=explode("=>", $key);
		$price=$part['1'];
        $query3=$send->Query("insert into `cust_$id` values ('','".$dishname."','".$quantity."','".$price."')",$con);
	}
	echo '<div class="bg-success placed_order" >
            <a href="#" class="close" data-dismiss="alert">&times;</a>
            Order is saved.
            </div>';
	
}

path('info.view.php');

 ?>