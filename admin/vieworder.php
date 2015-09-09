<?php 
include '../modal/conn.php';
if(isset($_GET['id'])){
	$id=$_GET['id'];
	$view=new conn;
	$query=$view->Query("select * from `cust_$id`",$con);
	}
?>
<div class="table-responsive">
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Dish Name</th>
                <th>Quantity</th>
                <th>Price</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($query as $view):?>
                <tr>
                <td><?= $view['dishname']?></td>
                <td><?= $view['quantity']?></td>
                <td><?= $view['price']?></td>
                </tr>
            <?php endforeach ?>
        </tbody>
    </table>
</div>