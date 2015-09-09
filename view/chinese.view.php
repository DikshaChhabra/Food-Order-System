<nav class="navbar-fixed-top">
	<div class="top">
	    <ul id="navigation" class="main_menu" >
	        <li class="item"><a href="index.php" class="food">Home</a></li>
	        <li class="item diff_food">Food Items</li>
	            <div id="menu_roll">
	                <img src="view/assets/images/menu.png" class="img-responsive roll" alt="menu"  />
	                <ul class="sub_navigation" id="sub_nav">
	                    <li><a href="italian.php" class="food">Italian</a></li>
	                    <li><a href="southindian.php" class="food">SouthIndian</a></li>
	                    <li><a href="chinese.php" class="food">chinese</a></li>
	                </ul>
	            </div>
	        <li class="item"><a href="feedback.php" class="food">Feedback</a></li>
	    </ul>
	    <p class="food_head">Chinese Food</p>
	</div>
</nav>
<div class="pattern">
	<div class="container all_item_order">
		<div class="row">
			<div class="col-md-6">
			<?php foreach($result as $info):?>
			<div class="col-md-4">
				<div class="well contener">
					<div class="images">
						<img src="<?= $info['photo']?>" class="img-responsive img-circle">
					</div>
					<div class="names">
						<p class="dish"><?= $info['name'];?>
						<p class="dish"><b>Price:</b><i class="fa fa-inr"></i><?= $info['price'];?></p>
					</div>
				</div>
				<div style="display: flex" class="<?= $info['id']?>">
					<input class="form-control qty" placeholder="Qty">
					<input class="btn btn-default menu" id="<?= $info['id']?>" type="submit" value="Add to Order">
					
				</div>
			</div>
				
			<?php endforeach ?>
			</div>
			
			<div class="col-md-6">
					<div style="position: fixed">
						<img src="view/assets/images/notepad.png" class="order_items">
						<a class="btn btn-default place_order" href="info.php">Placed Order</a>
						<p class="order">Order</p>
						<div class="fullorder">
							<?php 
							$arr= (array) json_decode($_COOKIE['set_order']);
							foreach ($arr as $key) {
							echo "$key";
							echo "<img src='view/assets/images/cross.png' data-user='$key' class='cross'>";
							echo '<br>';
							}
							?>
						</div>
					</div>
			</div>	
		</div>
	</div>
</div>
