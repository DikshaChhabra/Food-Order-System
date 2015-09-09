<div class="feedback_back">
	<div id="feedback">
		<img src="view/assets/images/chef_image_feedback.png" class="img-responsive" alt="feed"/>
		<form action="feedback.php" class="form-horizontal"  method="post" id="feedback_form">
			<div class="col-md-4 col-md-offset-3">
				<div class="form-group">
					<input class="form-control" type="email" placeholder="E-mail" name="Email" required/>
				</div>
			</div>
			<div class="col-md-4 col-md-offset-3">
				<div class="form-group">
					<textarea class="form-control" type="text" placeholder="Feedback" name="Feedback"required></textarea>
				</div>
			</div>
			<div class="col-md-4 col-md-offset-3">
				<div class="form-group">
					<input class="form-control" type="text" placeholder="suggestion" name="suggestion" required/>
				</div>
			</div>
			<div class="col-md-4 col-md-offset-3">
				<div class="form-group">
					<input class="btn" id="sbmt" type="submit" name="submit">
					<a href="index.php" class="food">Back to Home</a>
				</div>
			</div>
		</form>	
		<marquee scrollamount="3" behavior="alternate"  id="chef_img" > <img src="view/assets/images/chef_feedback.png" alt="shef" /> </marquee>
	</div>	
</div>
	
	