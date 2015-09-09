<div id="wrapper">
    <?php include 'topside.view.php'; ?>
    <div id="page-wrapper">
		<b style="font-size:20px;font-type:sans serif;margin-left:650px;">Feedbacks</b>
		<div class="container-fluid">
			<div class="table-responsive">
				<table class="table table-striped">
					<thead>
						<tr>
							<th>EMail</th>
							<th>Feedback</th>
							<th>Sugesstion</th>
							<th>Deletion</th>
						</tr>
					</thead>
					<tbody>
						<?php foreach($result as $info):?>
						<tr>
							<td><?= $info['email']?></td>
							<td><?= $info['feedback']?></td>
							<td><?= $info['suggestion']?></td>
							<td><a href="show_feedback.php?id=<?=$info['s.no']?>">DELETE</a></td>
						</tr>
						<?php endforeach ?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>
