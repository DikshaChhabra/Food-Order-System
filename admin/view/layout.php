<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title></title>
	<link rel="stylesheet" href="../view/assets/css/design.css">
	<link rel="stylesheet" href="../view/assets/css/morris.css">
	<link rel="stylesheet" href="../view/assets/css/sb-admin.css">
	<link rel="stylesheet" href="../view/assets/font-awesome-4.1.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="../view/assets/css/style.css">
</head>
<body>
	<?php include ($path); ?>
	<script type="text/javascript" src="../view/assets/js/jquery.js"></script>
	<script type="text/javascript" src="../view/assets/js/design.js"></script>
	<script type="text/javascript">
    $('.new_order').click(function(){
    	var tbl = $('.new_order').attr('data-table');
    	$.get('neworder.php',{tbl : tbl},function(data){
    		$(".allneworder").html(data);
    	});
    });
    $('.edit_btn').click(function(){
     	var id=$(this).attr('data-id');
        $.get('edit_item.php',{id :id},function(data){
        	$('#content').html(data);
        	$('#edit_item').modal('toggle');
        });
    });
    $('.change_status').click(function(){
        alert("Are u Sure");
    	var id = $(this).attr('data-id');
    	$.get('oldorder.php',{id : id});
    	location.reload();
    });
    $('.view_order').click(function(){
    	var id=$(this).attr('data-id');
    	$.get('vieworder.php',{id:id},function(data){
    	$(".data-modal").html(data);
      $('#view').modal('toggle');
		});
    });
	</script>
</body>
</html>