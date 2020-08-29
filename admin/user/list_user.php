<div id="content-wrapper">

        <!-- DataTables Example -->
        <div class="card mb-3">
            <div class="card-header">
                <i class="fas fa-table"></i>
                Danh sách người dùng
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>Email</th>
                                <th>Pass</th>
                                <th>Name</th>
                                <th>Authority</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>Email</th>
                                <th>Pass</th>
                                <th>Name</th>
                                <th>Authority</th>
                                <th></th>
                            </tr>
                        </tfoot>
                        <tbody>
                            <?php  
                                foreach($list_user as $user){
                                    extract($user);
                                    echo '<tr>
                                        <td>'.$user['email'].'</td>
                                        <td>'.$user['pass'].'</td>
                                        <td>'.$user['name'].'</td>
                                        <td>'.$user['authority'].'</td>
                                        <td>
                                            <a href="index.php?act=btn_edit_user&id='.$user['id'].'"
                                                class="btn btn-dark">Sửa</a>
                                            <a href="index.php?act=btn_delete_user&id='.$user['id'].'"
                                                class="btn btn-dark">Xóa</a>
                                        </td>       
                                            </tr>';
                                }

                            ?>

                        </tbody>
                    </table>
                </div>
                <h4 class="text-danger"><?=$message?></h4>
            </div>
            <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
        </div>

    </div>
    <!-- /.container-fluid -->