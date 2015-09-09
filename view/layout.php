<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title></title>
	<link rel="stylesheet" type="text/css" href="view/assets/css/design.css">
	<link rel="stylesheet" type="text/css" href="view/assets/css/full-slider.css">
    <link rel="stylesheet" type="text/css" href="view/assets/font-awesome-4.1.0/css/font-awesome.css">
	<link rel="stylesheet" type="text/css" href="view/assets/css/style.css">
</head>
<body>
	<?php include ($path); ?>
	<script type="text/javascript" src="view/assets/js/jquery.js"></script>
	<script type="text/javascript" src="view/assets/js/design.js"></script>
	<script>
    $('.carousel').carousel({
        interval: 5000 //changes the speed
    })
    $('.menu').click(function(){  
    	var id=$(this).attr('id');
    	var qty= $("." + id +" input.qty").val();
    	$.get( "order.php",{ id: id ,qty: qty}, function( data) {
		$(".fullorder").html(data);
		});
    });
    $('.cross').on('click' ,function(){
    	var item=$(this).attr('data-user');
    	$.get("delete.php",{item: item}, function(data){
    		$(".fullorder").html(data);
    		location.reload();
    	});
    });
    $('.diff_food, #menu_roll').on({
    mouseenter: function () {
        $('#menu_roll').show();
        },
    mouseleave: function () {
        $('#menu_roll').hide();
         }
    });
	</script>
</body>
</html>