<div id="wrapper">
    <?php include 'topside.view.php'; ?>
    
    <div id="page-wrapper">
    	<div class="container-fluid">
    		<div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">
                        Dashboard 
                    </h1>
                </div>
                <div class="col-lg-12">
                    <button type="button" class="btn btn-default new_order"  data-table="customers">New order</button>
                </div>
                <div class="col-lg-12">
                    <div class="allneworder">
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
                    </div>
                </div>
            </div>
        </div>
    </div>
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

