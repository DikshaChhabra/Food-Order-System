<div class="info_back">
	<div class="container info_form">
		<form action="info.php" method="post" class="form-horizontal get_info">
			<div class="enter_info">Enter your info</div>
			<div class="col-md-8 col-md-offset-2">
				<div class="form-group">
					<input class="form-control" type="text" pattern="[a-zA-Z ]+" placeholder="Your Name" name="your_name" title="Name should contain only characters" required>
				</div>
			</div>
			<div class="col-md-8 col-md-offset-2">
				<div class="form-group">
					<input class="form-control" type="email" placeholder="Email" name="email" required>
				</div>
			</div>
			<div class="col-md-8 col-md-offset-2">
				<div class="form-group">
					<input class="form-control" type="text" placeholder="Address" name="addr" required>
				</div>
			</div>
			<div class="col-md-8 col-md-offset-2">
				<div class="form-group">
					<input class="form-control" type="tel" placeholder="Phone Number" pattern="[789][0-9]{9}" name="phone_no" title="Invalid number!!should contain 10 numbers"required>
				</div>
			</div>
			<div class="col-md-8 col-md-offset-2">
				<div class="form-group">
					<input class="btn" type="submit" name="submit" value="Send Order">
				</div>
			</div>
		</form>
		<div class="col-md-5 col-md-offset-7">
			<a href="index.php" class="food">Back to Home</a>
		</div>
	</div>
</div>