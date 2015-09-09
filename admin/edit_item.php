<?php
include '../modal/conn.php';
if(isset($_GET['id'])){
	$id=$_GET['id'];
	$items=new conn;
    $query=$items->Query("select * from `items` where `id`=$id",$con);
    $result=$query->fetchObject();

    echo "<input type='text' value='$result->name'  name='name' class='form-control'>";
    echo "<input type='text' value='$result->price' name='price' class='form-control'>";
    echo "<input type='hidden' value='$result->id' name='id' class='form-control'>";
}

?>