<?php

    require '../model/connect.php';
    require '../model/catalog.php';
    require '../model/product.php';

    $danhmuc=new Catalog();
    $dsdm=$danhmuc -> getList();
    $dsdm2=$danhmuc -> getList();
    $dsdm3=$danhmuc -> getList2();

    include '../view/header.php';

    if(isset($_GET['act'])){
        $act=$_GET['act'];
        switch ($act) {
            case 'home':
                $VIEW_NAME = ('../view/home.php');
                break;
            case 'about':
                $VIEW_NAME = ('../view/about.php');
                break;
            case 'contact':
                $VIEW_NAME = ('../view/contact.php');
                break;
            case 'gallery':
                $VIEW_NAME = ('../view/gallery.php');
                break;
            case 'product':
                $pro=new Product();

                if(isset($_GET['idcatalog'])){
                    $idcatalog=$_GET['idcatalog'];
                    $dssp=$pro->getProductCatalog($idcatalog);
                    $getCata = $danhmuc -> getCatalogById($idcatalog);
                }
                
                if(isset($_GET['id_parent'])){
                    $id_parent = $_GET['id_parent'];
                    $dssp = $pro -> getProductParent($id_parent);
                    $getProduct = $pro -> getProductId($id_parent);
                    $getCata = $danhmuc -> getCatalogById($getProduct['id']);
                }
                $VIEW_NAME = ('../view/product.php');
                break;
            case 'Dproduct':
                $VIEW_NAME = ('../view/Detailproduct.php');
                break;
            case 'GioHang':
                $VIEW_NAME = ('../view/GioHang.php');
                break;
            case 'NOT404':
                $VIEW_NAME = ('../view/NOT404.php');
                break;
        }
    }else{
        $VIEW_NAME = ('../view/home.php');
    }
    include $VIEW_NAME;
    include '../view/footer.php';
?>