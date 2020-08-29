<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<style>
.modal-login .modal-content {
    padding: 20px;
    border-radius: 5px;
    border: none;
    background: #a0ebd2;
}

.modal-login .modal-header {
    border-bottom: none;
    position: relative;
    justify-content: center;
}

.modal-login h4 {
    text-align: center;
    font-size: 26px;
    margin: 30px 0 -15px;
}

.modal-login .form-control:focus {
    border-color: #ff5f42;
}

.modal-login .form-control,
.modal-login .btn {
    min-height: 40px;
    border-radius: 3px;
}

.modal-login .close {
    position: absolute;
    top: -5px;
    right: -5px;
}

.modal-login .modal-footer {
    background: #ecf0f1;
    border-color: #dee4e7;
    text-align: center;
    justify-content: center;
    margin: 0 -20px -20px;
    border-radius: 5px;
    font-size: 13px;
}

.modal-login .modal-footer a {
    color: #999;
}

.modal-login .avatar {
    position: absolute;
    margin: 0 auto;
    left: 0;
    right: 0;
    top: -70px;
    width: 95px;
    height: 95px;
    border-radius: 50%;
    z-index: 9;
    background: #eec094;
    padding: 15px;
    box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.1);
}

.modal-login .avatar img {
    width: 100%;
}

.modal-login.modal-dialog {
    margin-top: 80px;
}

.modal-login .btn {
    color: #fff;
    border-radius: 4px;
    background: #ff5f42;
    text-decoration: none;
    transition: all 0.4s;
    line-height: normal;
    border: none;
}

.modal-login .btn:hover,
.modal-login .btn:focus {
    background: #45aba6;
    outline: none;
}

.trigger-btn {
    display: inline-block;
}
</style>

<body>

    <!-- Modal -->
    <div class="modal fade" id="myModal" role="dialog">
        <div class="modal-dialog modal-login">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <div class="avatar">
                        <img src="../content/images/Logo-test.png" alt="Avatar" width="100%" height="100%">
                    </div>
                    <h4 class="modal-title">Member Register <br>
                        <?php 
                            if(isset($message)){
                                echo '<span style="color:red;">'.$message.'</span>';
                            }
                        ?>
                    </h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                </div>
                <div class="modal-body">
                    <form action="../admin/index.php" method="post">
                        <div class="form-group">
                            <input type="email" class="form-control" name="email" placeholder="Email login..."
                                required="required">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="name" placeholder="Input name..."
                                required="required">
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" name="pass" placeholder="Password"
                                required="required">
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" name="pass2" placeholder="Password"
                                required="required">
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


    <script>
    $(document).ready(function() {
        // Show the Modal on load
        $("#myModal").modal("show");
    });
    </script>

</body>

</html>