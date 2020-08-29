<div class="main sp-main-product">
    <div class="Catalog-mini-left">
    <?php require '../view/Catalog-mini-left.php'; ?>
    </div>
    <div class="show-pro">
        <?php
            echo '<h1 style="text-align: center;">'.mb_strtoupper($getCata['name']).'</h1>';
            foreach ($dssp as $sp){
                extract($sp);
                $id=$sp['id'];
                $name=$sp['name'];
                $img=$sp['img'];
                $price=$sp['price'];
                $linkimg="../content/images/product/";
                $jpg=".jpg";
                $hinh=$linkimg.$img.$jpg;
                $linksp="index.php?act=Dproduct";
        ?>  
                <a href="<?php echo $linksp ?>">
                    <div class="product">
                        <div class="img-product">
                            <div class="icon-product"><img src="../content/images/Logo-test.png" alt=""></div>
                            <img src="<?php echo $hinh ?>" alt="">
                        </div>
                        <div class="box-info-pro">
                            <p><?php echo $name ?></p>
                        </div>
                        <div class="box-info-pro">
                            <h5><span class="money"><?php echo $price ?></span> Đồng</h5>
                            <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
                            <script type="text/javascript" src="../content/js/simple.money.format.js"></script>
                            <script type="text/javascript">
                                $('.money').simpleMoneyFormat();
                            </script>
                        </div>
                    </div>
                </a>
        <?php
            }
        ?>
    </div>
</div>