<div id="content-wrapper">

    <div class="container-fluid">
        <div class="card mb-3">
            <div class="card-header">
                <i class="fas fa-table"></i>
                Thêm loại sản phẩm <h4><?=$name?></h4>
            </div>
            <div class="card-body">
                <form method="post">
                    <div class="container-fluid">
                        <?php
                        if(strlen($message)){
                            echo '<h5 class="alert alert-warning">'.$message.'</h5>';
                        }
                    ?>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Id</label>
                                    <input type="number" name="id" class="form-control" placeholder="auto number"
                                        readonly>
                                </div>
                                <div class="form-group">
                                    <label>Name</label>
                                    <input type="text" name="name" class="form-control"
                                        placeholder="Input catalog new...">
                                </div>
                                <div class="form-group">
                                    <label>Id_parent</label>
                                    <input type="number" name="id_parent" class="form-control" value="<?=$id_parent?>"
                                        placeholder="<?php echo $id_parent; ?>" readonly>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Text</label>
                                    <input type="text" name="text" class="form-control" placeholder="insert text">
                                </div>
                                <div class="form-group">
                                    <label>Images</label>
                                    <input type="file" name="img" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Số thứ tự</label>
                                    <input type="number" name="stt" class="form-control" placeholder="Input stt new...">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer small text-muted"><button type="submit" name="add_catalog"
                            class="btn btn-dark">Thêm
                            mới</button></div>
                </form>
            </div>
        </div>

        <!-- DataTables Example -->
        <div class="card mb-3">
            <div class="card-header">
                <i class="fas fa-table"></i>
                Danh sách loại sản phẩm <h4><?=$name?></h4>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Id Parent</th>
                                <th>Img</th>
                                <th>Text</th>
                                <th>Stt</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>Name</th>
                                <th>Id Parent</th>
                                <th>Img</th>
                                <th>Text</th>
                                <th>Stt</th>
                                <th></th>
                            </tr>
                        </tfoot>
                        <tbody>
                            <?php 
                                foreach($list_catalog as $catalog){
                                  //  extract($catalog);
                                  $id=$catalog['id'];
                                  $modal="modal".$id;
                                    echo '<tr>
                                        <td>'.$catalog['name'].'</td>
                                        <td>'.$catalog['parent'].'</td>
                                        <td>'.$catalog['img'].'</td>
                                        <td>'.$catalog['text'].'</td>
                                        <td>'.$catalog['stt'].'</td>';
                            ?>
                            <td>
                                <a href="index.php?act=btn_edit_catalog&id_catalog=<?=$catalog['id']?>"
                                    class="btn btn-dark">Sửa</a>
                                <button type="button" class="btn btn-dark" data-toggle="modal"
                                    data-target="#<?=$modal?>">Xóa</button>

                                <!-- Modal -->
                                <div class="modal fade" id="<?=$modal?>" role="dialog">
                                    <div class="modal-dialog">

                                        <!-- Modal content-->
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h4 class="modal-title">Xóa loại sản phẩm</h4>
                                            </div>
                                            <div class="modal-body">
                                                <p>Bạn có chắc xóa <span class="font-weight-bold"> <?=$catalog['name']?>
                                                    </span></p>
                                            </div>
                                            <div class="modal-footer">
                                                <form method="post">
                                                    <input type="number" name="id_catalog" value="<?=$catalog['id']?>"
                                                        readonly >
                                                    <button type="submit" name="delete_catalogg" class="btn btn-dark">Xóa</button>
                                                </form>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </td>
                            </tr>
                            <?php
                            }
                        ?>

                        </tbody>
                    </table>
                </div>
            </div>
            <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
        </div>

    </div>
    <!-- /.container-fluid -->