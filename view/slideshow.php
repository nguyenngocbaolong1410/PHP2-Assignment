<div class="box-slide-img">
    <div id="demo" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ul class="carousel-indicators">
            <li data-target="#demo" data-slide-to="0" class="active"></li>
            <li data-target="#demo" data-slide-to="1"></li>
            <li data-target="#demo" data-slide-to="2"></li>
            <li data-target="#demo" data-slide-to="3"></li>
            <li data-target="#demo" data-slide-to="4"></li>
            <li data-target="#demo" data-slide-to="5"></li>
        </ul>
        <!-- The slideshow -->
        <div class="carousel-inner">
            <div class="carousel-item active">
                <a href="index.php?act=product&idcatalog=1"><img src="../content/images/decoration1.jpg"
                        alt="DEMO">
                    <div class="carousel-caption">
                        <div class="background-slide">
                            <h3>PHÒNG KHÁCH</h3>
                            <p>Nhấn vào để xem thêm chi tiết</p>
                        </div>
                    </div>
                </a>
            </div>
            <?php 
            
                foreach ($dsdm3 as $dm){
                    extract($dm);
                    $id_catalog = $dm['id'];
                    $img = $dm['img'];
                    $nameCata = $dm['name'];

            ?>
            <div class="carousel-item">
                <a href="index.php?act=product&idcatalog=<?=$id_catalog?>"><img src="../content/images/<?=$img?>"
                        alt="DEMO">
                    <div class="carousel-caption">
                        <div class="background-slide">
                            <h3><?=$nameCata?></h3>
                            <p>Nhấn vào để xem thêm chi tiết</p>
                        </div>
                    </div>
                </a>
            </div>
            <?php } ?>
           
        </div>
        <!-- Left and right controls -->
        <a class="carousel-control-prev" href="#demo" data-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </a>
        <a class="carousel-control-next" href="#demo" data-slide="next">
            <span class="carousel-control-next-icon"></span>
        </a>
    </div>
</div>