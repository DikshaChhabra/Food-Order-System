<?php 
include 'modal/conn.php'; //connection with database
if(isset($_GET['item'])){ //if item want to delete is set
	$item=$_GET['item'];
	$cookieArr = (array) json_decode($_COOKIE['set_order']);//cokkie is decoded first in an array
	foreach($cookieArr as $order){
		$cut = array_search($item, $cookieArr); //search selected item in the array
        if($cut !== false){
		    unset($cookieArr[$cut]); //delete the  item from array
		}
	}
	$cookieArr = array_values($cookieArr);//remaining items again in a array
	setcookie('set_order', '', time()-3600 , '/'); //delete already set cookie 
	$new_cookie=json_encode($cookieArr);//again encode the values in a array
	setcookie('set_order', $new_cookie, time()+3600 , '/');//again set cookie
	$_COOKIE['set_order']=$new_cookie;
	$arr= (array) json_decode($_COOKIE['set_order']);//to display array decode the cookies
	foreach ($arr as $key ) {
		echo "$key";
		echo "<img src='view/assets/images/cross.png' class='cross' data-user='$key'>";
		echo '<br>';
	}
}
 ?>