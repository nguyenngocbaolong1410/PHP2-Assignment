<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>BoxRoom</title>
    <link rel="icon" href="../content/images/Logo-test.png" sizes="32x32">
    <link rel="stylesheet" href="../content/css/styleMain.css" type="text/css">
    <link rel="stylesheet" href="../content/css/product.css" type="text/css">
    <link rel="stylesheet" href="../content/css/about.css" type="text/css">
    <link rel="stylesheet" href="../content/css/contact.css" type="text/css">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../content/css/modal_login.css">
    
</head>
<body>
<div class="top-header"></div>
<div class="background-menu">
    <div class="box-menu">
        <div class="box-center-logo">
            <div class="box-middlen">
                <a href="index.php?act=home">
                    <div class="box-group-logo">
                        <div class="box-logo">
                            <img src="../content/images/Logo-test.png" alt="">
                        </div>
                        <h2>BOXROOM</h2>
                        <p>Nơi sáng tạo không gian của bạn</p>
                    </div>
                </a>
                <div class="box-group-menu">
                    <a href="index.php?act=home">
                        <div class="box-click-menu">
                            <p>Trang chủ</p>
                        </div>
                    </a>

                    <div class="dropdown Menu-dropdown">
                        <a data-toggle="dropdown" href="">
                            <p>Nội thất <Ys class="Ys">▽</Ys>
                            </p>
                        </a>
                        <ul class="dropdown-menu">
                            <?php
                                    foreach ($dsdm as $dm){
                                        extract($dm);
                                        $id=$dm['id'];
                                        $namecata=$dm['name'];
                                        $link="index.php?act=product&idcatalog=".$id;
                                        echo '<li><a href="'.$link.'"><p>'.$namecata.'</p></a></li>';
                                    }
                                ?>
                        </ul>
                    </div>

                    <a href="index.php?act=NOT404">
                        <div class="box-click-menu">
                            <p>Thư viện</p>
                        </div>
                    </a>
                    <a href="index.php?act=contact">
                        <div class="box-click-menu">
                            <p>Liên hệ</p>
                        </div>
                    </a>
                    <a href="index.php?act=about">
                        <div class="box-click-menu">
                            <p>Giới thiệu</p>
                        </div>
                    </a>
                    <!-- Trigger the modal with a button -->
                    <?php
                        session_start();         
                        if(isset($_SESSION['name'])){
                            echo '<span style="color: #ff5f42;">'.$_SESSION['name'].'<a href="../admin/index.php?act=logout" style="color:#ff5f42;">-></a></span>';
                        }
                        else{
                            echo '<div class="box-click-menu Spoot"><a href="#myModal" class="trigger-btn" data-toggle="modal" style="text-decoration:none;"><span style="color: #ffffff;"><p>Login</p></span></a></div>';
                        }
                    ?>
                    <div id="myModal" class="modal fade">
                        <div class="modal-dialog modal-login">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <div class="avatar">
                                        <img src="../content/images/Logo-test.png" alt="Avatar" width="100%"
                                            height="100%">
                                    </div>
                                    <h4 class="modal-title">Member Login</h4>
                                    <button type="button" class="close" data-dismiss="modal"
                                        aria-hidden="true">&times;</button>
                                </div>
                                <div class="modal-body">
                                    <form action="../admin/index.php" method="post">
                                        <div class="form-group">
                                            <input type="email" class="form-control" name="email"
                                                placeholder="Email login..." required="required">
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control" name="pass"
                                                placeholder="Password" required="required">
                                        </div>
                                        <div class="form-group">
                                            <button type="submit" class="btn btn-primary btn-lg btn-block login-btn"
                                                name="login">Login</button>
                                        </div>
                                        <div class="form-group">
                                            <a href="#myModal2" data-toggle="modal"
                                                class="btn btn-primary btn-lg btn-block login-btn">Register</a>
                                        </div>
                                    </form>
                                </div>
                                <div class="modal-footer">
                                    <a href="#myModal3" data-toggle="modal">Forgot Password?</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="myModal2" class="modal fade">
                        <div class="modal-dialog modal-login Sooopes">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <div class="avatar">
                                        <img src="../content/images/Logo-test.png" alt="Avatar" width="100%"
                                            height="100%">
                                    </div>
                                    <h4 class="modal-title">Member Register</h4>
                                    <button type="button" class="close" data-dismiss="modal"
                                        aria-hidden="true">&times;</button>
                                </div>
                                <div class="modal-body">
                                    <form action="../admin/index.php" method="post">
                                        <div class="form-group">
                                            <input type="email" class="form-control" name="email"
                                                placeholder="Email login..." required="required">
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="name"
                                                placeholder="Input name..." required="required">
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control" name="pass"
                                                placeholder="Password..." required="required">
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control" name="pass2"
                                                placeholder="Password confluent..." required="required">
                                        </div>
                                        <div class="form-group">
                                            <button type="submit" class="btn btn-primary btn-lg btn-block login-btn"
                                                name="register">Register</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="myModal3" class="modal fade">
                        <div class="modal-dialog modal-login">
                            <div class="modal-content" style="height: 420px; width:350px;">
                                <div class="modal-header">
                                    <div class="avatar">
                                        <img src="../content/images/Logo-test.png" alt="Avatar" width="100%"
                                            height="100%">
                                    </div>
                                    <h4 class="modal-title">Forgot password</h4>
                                    <button type="button" class="close" data-dismiss="modal"
                                        aria-hidden="true">&times;</button>
                                </div>
                                <div class="modal-body">
                                    <form action="../admin/index.php" method="post">
                                        <div class="form-group">
                                            <input type="email" class="form-control" name="email"
                                                placeholder="Enter your registered email..." required="required">
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="name"
                                                placeholder="Enter your registered email..." required="required">
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control" name="pass"
                                                placeholder="Enter your new pass..." required="required">
                                        </div>
                                        <div class="form-group">
                                            <button type="submit" class="btn btn-primary btn-lg btn-block login-btn"
                                                name="find">Find the password</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>