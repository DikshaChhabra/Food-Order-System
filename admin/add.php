<?php 
include '../modal/conn.php';
include '../modal/function.php';
if(isset($_POST['submit'])){
	
	$dish_name=$_POST['dish_name'];
	$price=$_POST['price'];
	$type=$_POST['type'];
	$name=$_FILES['photo']['name'];
	$tmp_name=$_FILES['photo']['tmp_name'];
	$dest='uploads/'.$type.'/'.$name;
	move_uploaded_file($tmp_name, '../'.$dest);
	$add=new conn;
	$query=$add->Query("insert  into `items` values('','".$dish_name."','".$price."',
		   '".$type."','".$dest."')",$con);
	echo '<div class="bg-success added_item" >
            <a href="#" class="close" data-dismiss="alert">&times;</a>
            New Item is added.
            </div>';
}
path('add.view.php');


 ?>
 

