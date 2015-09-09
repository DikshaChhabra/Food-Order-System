<?php 
include 'modal/conn.php';
if(isset($_GET['id'])){
	$id=$_GET['id'];
	$qty=$_GET['qty'];
	$order=new conn;
	$query=$order->Query("select `name`,`price` from `items` where id=$id ",$con);
	$result= $query->fetchObject();
	$dishname=$result->name;
	$dishprice=$result->price;
	$totalprice=$qty*$dishprice;
	if(isset($_COOKIE['set_order']))
	{
		$cookieArr = (array) json_decode($_COOKIE['set_order']);							
		array_push($cookieArr,"$dishname($qty) => $totalprice");
		$cookie_data = json_encode($cookieArr);
		setcookie('set_order', '', time()-3600 , '/');
		setcookie('set_order', $cookie_data, time()+3600 , '/');
		$_COOKIE['set_order']=$cookie_data;
	}
	else{
		$cookie_data = json_encode("$dishname($qty) => $totalprice");
		setcookie('set_order', $cookie_data, time()+3600 , '/');
		$_COOKIE['set_order']=$cookie_data;

	}
	$arr= (array) json_decode($_COOKIE['set_order']);
	foreach ($arr as $key ) {
		echo "$key";
		echo "<img src='view/assets/images/cross.png' class='cross' data-user='$key'>";
		echo '<br>';
	}
}
 ?>
 <script type="text/javascript" src="view/assets/js/jquery.js"></script>
 <script>
  $('.cross').on('click' ,function(){
    	var item=$(this).attr('data-user');
    	$.get("delete.php",{item: item}, function(data){
    		$(".fullorder").html(data);
    		location.reload();
    	});
    });
 </script>