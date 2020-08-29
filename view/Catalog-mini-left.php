<h2>DANH MỤC SẢN PHẨM</h2>
<div class="boop product-poop"></div>

<?php
    foreach ($dsdm2 as $dm){
        extract($dm);
        $id=$dm['id'];
        $namecata=$dm['name'];
?>

<button class="accordion mr-accordion"><p><?=$namecata?><i class="fa fa-cube mini-icon-pro" style="font-size:20px"></i></p></button>


<div class="panel" style="display: none">

<?php
    $dsdmparent = $danhmuc -> getListParent($id);
    foreach ($dsdmparent as $dmparent){
        extract($dmparent);
        $id_parent = $dmparent['id'];
        $namecataparent = $dmparent['name'];
        $link = "index.php?act=product&id_parent=".$id_parent;
        echo '<li><a href="'.$link.'"><p>'.$namecataparent.'</p></a></li>';
    }
?>

</div>

<?php
    }
?>

<script src="../content/js/dropdown.js"></script>
