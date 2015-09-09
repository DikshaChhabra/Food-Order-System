<div id="wrapper">
    <?php include 'topside.view.php'; ?>
    <div id="page-wrapper">
		<div class="container-fluid">
			<form action="add.php" method="post" enctype="multipart/form-data">
				<div class="row">
				<div class="col-md-4 col-md-offset-4">
					<div class="form-group">
						<input class="form-control" type="text" placeholder="Dish Name" name="dish_name" required>
					</div>
				</div>
				</div>
				<div class="row">
				<div class="col-md-4 col-md-offset-4">
					<div class="form-group">
						<input class="form-control" type="text" placeholder="Price" name="price" required>
					</div>
				</div>
				</div>
				<div class="row">
				<div class="col-md-4 col-md-offset-4">
					<select class="form-group form-control" name="type">
						<option>Select Food Type</option>
						<option value="italian">italian</option>
						<option value="southindian">southindian</option>
						<option value="chinese">chinese</option>
					</select>
				</div>
				</div>
				<div class="row">
				<div class="col-md-4 col-md-offset-4">
					<div class="form-group">
						<input type="file" name="photo" required>
					</div>
				</div>
				</div>
				<div class="row">
				<div class="col-md-4 col-md-offset-4">
					<div class="form-group">
						<input class="btn" type="submit" name="submit" value="Submit">
					</div>
				</div>
				</div>
			</form>
		</div>
	</div>
</div>
