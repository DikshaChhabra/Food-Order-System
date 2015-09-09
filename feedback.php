<?php
include 'modal/function.php';
include 'modal/conn.php';
if(isset($_POST['submit'])){
	$mail=$_POST['Email'];
	$feed=$_POST['Feedback'];
	$sug=$_POST['suggestion'];
    $adds=new conn;
	$query=$adds->Query("INSERT  INTO `feedback` (`s.no`,`email`,`feedback`,`suggestion`) values('','".$mail."','".$feed."','".$sug."')",$con);
	echo "<img src='view/assets/images/tsheff.png' id='sbmtimg' />";
}

path('feedback.view.php');
 ?>