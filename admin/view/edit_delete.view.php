<div id="wrapper">
    <?php include 'topside.view.php'; ?>
    <!-- <form action="edit_delete.php" method="post">
        <div class="col-md-3" style="margin-top:20px">
            <select class="form-group form-control" name="type">
                <option>Select Food Type</option>
                <option value="italian">italian</option>
                <option value="southindian">southindian</option>
            </select>
        </div>
        <input class="btn" type="submit" name="submit" value="Submit" style="margin-top:20px">
    </form> -->
    <div id="page-wrapper">
        <div class="container-fluid">
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Food Item</th>
                            <th>Price</th>
                            <th></th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($result as $item):?>
                            <tr>
                            <td><?=$item['name']?></td>
                            <td><?=$item['price']?></th>
                            <td>
                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-default edit_btn" data-id="<?=$item['id']?>" data-toggle="modal" data-target="#myModal">EDIT</button>
                            </td>
                            <td><a href="edit_delete.php?id=<?=$item['id']?>" onclick="return confirm('Are you sure?')">DELETE</a></td>
                            </tr>
                        <?php endforeach ?>
                    </tbody>
                </table>
            </div>
            <!-- Modal -->
            <div class="modal fade" id="edit_item" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <!-- Header -->
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                            <h4 class="modal-title" id="myModalLabel">Modal title</h4>
                        </div>
                        <!-- Body -->
                        <form action="edit_update.php" method="GET">
                            <div class="modal-body">
                                <div id="content">
                                 
                                </div>
                            </div>
                          <!-- Footer -->
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                <input type="submit" class="btn btn-primary"  value="edit" name="submit" />
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>