<?php 
include '../modal/conn.php';
if (isset($_GET['tbl'])){
	$tbl=$_GET['tbl'];
	$grab=new conn;
	$query=$grab->Query("select * from $tbl where new_order='false'",$con);
}
?>
<div class="table-responsive">
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Address</th>
                <th>Phone No.</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($query as $row):?>
                <tr>
                <td><?= $row['name']?></td>
                <td><?= $row['email']?></td>
                <td><?= $row['address']?></td>
                <td><?= $row['phone_no']?></td>
                <td><button type="button" class="btn btn-default view_order" data-id="<?=$row['id']?>">View Order</button></td>
                <td><button type="button" class="btn btn-default change_status" data-id="<?=$row['id']?>">seen</button> </td>
                </tr>
            <?php endforeach ?>
        </tbody>
    </table>
</div>
<!-- Modal showing order -->
<div class="modal fade" id="view" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <!--header-->
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                <h4 class="modal-title" id="myModalLabel"></h4>
            </div>
            <!--body-->
            <div class="modal-body data-modal">
            </div>
            <!-- footer -->
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript" src="../view/assets/js/jquery.js"></script>
<script type="text/javascript" src="../view/assets/js/design.js"></script>
<script type="text/javascript">
    $('.change_status').click(function(){
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