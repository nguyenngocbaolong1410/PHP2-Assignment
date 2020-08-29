<?php
    ob_start();
    session_start();

    require '../model/connect.php';
    require '../model/catalog.php';
    require '../model/product.php';
    require '../model/user.php';

    $danhmuc = new Catalog();
    $dsdm = $danhmuc -> getlist();
    $dsdm2 = $danhmuc -> getlist();

    $sanpham = new Product();

    $user = new User();
    
    $message = '';
    // LOGINNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNN
    if(isset($_POST['login'])){
        $email = $_POST['email'];
        $pass = $_POST['pass'];
        $checkUser = $user -> checkUser($email, $pass);
        if($checkUser['id'] > 0 && $checkUser['authority'] == 1){
            $_SESSION['name'] = $checkUser['name'];
        }
        elseif($checkUser['id'] > 0 && $checkUser['authority'] == 0) {
            $_SESSION['name'] = $checkUser['name'];
            header('location:../controller/index.php');
        }
        else {
            $message = 'Your email or password is WRONG';
            header('user/login.php');
        }
    }
    /////////////////////////////////////////////////
    // REGISTERRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRR
    if(isset($_POST['register'])){
        $email = $_POST['email'];
        $pass = $_POST['pass'];
        $pass2 = $_POST['pass2'];
        $name = $_POST['name'];
        if($pass == $pass2 && $pass !== 0){
            $user -> addUser($email, $pass, $name);
            $message = 'Register Success';
            include 'user/login.php';
        }
        else {
            $message = 'password or password confluent is wrong';
            include 'user/register.php';
        }
    }
    /////////////////////////////////////////////////
    // FIND PASSWORDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDD
    if(isset($_POST['find'])){
        $email = $_POST['email'];
        $name = $_POST['name'];
        $pass = $_POST['pass'];
        $getUser = $user -> getUserByNameAndEmail($email, $name);
        if($getUser['id'] > 1){
            $user -> updateUserByEmailAndPass($email, $pass);
            $message = 'Find the password success';
            include 'user/login.php';
        }
        else {
            $message = 'Password recovery failed';
            include 'user/find_password.php';
        }
    }
    // //////////////////////////////////////////////

    if(!isset($_SESSION['name'])){
        include 'user/login.php';
    }
    else {
        include 'header_admin.php';

        if(isset($_GET['act'])){
            switch ($_GET['act']) {
                // CATALOGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGG
                case 'them':
                    $list_catalog = $danhmuc -> getListParent($_GET['id']);
                    $getCatalogParent = $danhmuc -> getCatalogByParent($_GET['id']);
                    $name = 'DANH MỤC CHA';
                    $id_parent = $getCatalogParent['parent'];
                    include 'catalog/add_cata.php';
                    break;
                case 'qllsp':
                    //Thêm loại sản phẩm
                    if(isset($_POST['add_catalog'])){
                        $name = $_POST['name'];
                        $id_parent = $_POST['id_parent'];
                        $text = $_POST['text'];
                        $img = $_POST['img'];
                        $stt = $_POST['stt'];
                        if($name == '' || $text == '' || $img == '' || $stt == ''){
                            $message = 'Your new name catalog or new id_parent or ... is empty !!';
                        }
                        else {
                            $danhmuc -> addCatalog($name, $id_parent, $text, $img, $stt);
                            $message = 'Thêm loại sản phẩm thành công';
                        }                        
                    }
                    ///////////////////
                    //Xóa loại sản phẩm
                    else if(isset($_POST['delete_catalogg'])) {
                        $id = $_POST['id_catalog'];
                        $message = "Xóa loại sản phẩm thành công".$id;
                        $danhmuc -> deleteCatalog($id);
                    }
                    //////////////////
                    if($_GET['id']>0){
                        $danhmuc = new Catalog();
                        $list_catalog = $danhmuc -> getListParent($_GET['id']);
                        $getCatalog = $danhmuc -> getCatalogById($_GET['id']);
                        $name = $getCatalog['name'];
                        $id_parent = $_GET['id'];
                    }    
                    include 'catalog/add_cata.php';
                    break;
                case 'add_catalog':

                    $list_catalog = $danhmuc -> getListParent($_GET['id']);
                    $getCatalog = $danhmuc -> getCatalogById($_GET['id']);
                    $name = $getCatalog['name'];
                    $id_parent = $_GET['id'];
                    include 'catalog/add_cata.php';
                    break;
                // //////////////////////////////////////////////////////////////////////////////
                // PRODUCTTTTTTTTTTTTTTTTTTTTTTTTTTTTTTTTTTTTTTTTTTTTTTTTTTTTTTTTTTTTTTTTTTTTTTTT
                case 'qlsp':
                    // Thêm sản phẩm
                    if(isset($_POST['add_product'])){
                        $name = $_POST['name'];
                        $price = $_POST['price'];
                        $mo_ta = $_POST['mo_ta'];
                        $id_catalog = $_POST['id_catalog'];
                        $image = $_POST['image'];
                        $id_parent = $_POST['id_parent'];
                        $date = $_POST['date'];
                        if($name == "" || $price == "" || $mo_ta == "" || $image = "" || $id_parent == "" || $date == ""){
                            $message = 'Your new name product or new id_parent or ... is empty !!';
                        }
                        else{

                        }
                    }
                    ///////////////////
                    $list_product = $sanpham -> getProductCatalog($_GET['id']);
                    $getCatalog = $danhmuc -> getCatalogById($_GET['id']);
                    $name = $getCatalog['name'];
                    include 'product/add_product.php'; 
                    break;
                // //////////////////////////////////////////////////////////////////////////////
                // USERRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRR
                case 'qluser':
                    $list_user = $user -> getListUser();
                    include 'user/list_user.php';
                    break;
                /////////////////////////////////////////////////////////////////////////////////
                case 'logout':
                    unset($_SESSION['name']);
                    header('location: ../controller');
                    break;
                default:
                    include 'home_admin.php';
                    break;
            }
        }
        else {
            include 'home_admin.php';
        }

        include 'footer_admin.php';
    }
    
?>