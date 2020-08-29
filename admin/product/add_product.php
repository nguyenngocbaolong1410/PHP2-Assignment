<div id="content-wrapper">

    <div class="container-fluid">
        <div class="card mb-3">
            <div class="card-header">
                <i class="fas fa-table"></i>
                Thêm sản phẩm <h4><?=$name?></h4>
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
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label>Name</label>
                                    <input type="text" name="name" class="form-control" placeholder="Input name new">
                                </div>
                                <div class="form-group">
                                    <label>Price</label>
                                    <input type="number" name="price" class="form-control"
                                        placeholder="insert price new">
                                </div>
                                <div class="form-group">
                                    <label>Mô tả</label>
                                    <input type="text" name="mo_ta" class="form-control" placeholder="Input mô tả new">
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label>Id catalog</label>
                                    <input type="number" name="id_catalog" class="form-control"
                                        placeholder="<?=$_GET['id']?>" value="<?=$_GET['id']?>" readonly>
                                </div>
                                <div class="form-group">
                                    <label>Images</label>
                                    <input type="file" name="image" class="form-control">
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label>Id parent</label>
                                    <input type="number" name="id_parent" class="form-control"
                                        placeholder="insert id_parent">
                                </div>
                                <div class="form-group">
                                    <label>Date</label>
                                    <input type="date" name="date" class="form-control">
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
            <div class="card-footer small text-muted"><button type="submit" name="add_product" class="btn btn-dark">Thêm
                    mới</button></div>
            </form>
        </div>

        <!-- DataTables Example -->
        <div class="card mb-3">
            <div class="card-header">
                <i class="fas fa-table"></i>
                Danh sách sản phẩm <h4><?=$name?></h4>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Id Catalog</th>
                                <th>Id Parent(Danh mục con)</th>
                                <th>Price</th>
                                <th>Images</th>
                                <th>Mô tả</th>
                                <th>Date</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>Name</th>
                                <th>Id Catalog</th>
                                <th>Id Parent(Danh mục con)</th>
                                <th>Gía</th>
                                <th>Hình ảnh</th>
                                <th>Mô tả</th>
                                <th>Ngày nhập</th>
                                <th></th>
                            </tr>
                        </tfoot>
                        <tbody>
                            <?php  
                                foreach($list_product as $product){
                                    extract($product);
                                    $getCatalogParent = $danhmuc -> getCatalogById($product['id_parent']);
                                    $name = $getCatalogParent['name'];
                                    echo '<tr>
                                        <td>'.$product['name'].'</td>
                                        <td>'.$product['id_catalog'].'</td>
                                        <td>'.$product['id_parent'].' ('.$name.')</td>
                                        <td>'.$product['price'].'</td>
                                        <td>'.$product['img'].'</td>
                                        <td>'.$product['mota'].'</td>
                                        <td>'.$product['date'].'</td>
                                        <td>
                                            <a href="index.php?act=btn_edit_catalog&id_catalog='.$product['id'].'"
                                                class="btn btn-dark">Sửa</a>
                                            <a href="index.php?act=btn_delete_catalog&id_catalog='.$product['id'].'"
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