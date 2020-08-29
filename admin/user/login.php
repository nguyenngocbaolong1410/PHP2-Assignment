<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="../content/css/modal_login.css">
</head>

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
                    <h4 class="modal-title">Member Login <br>
                        <?php 
                            if(isset($message)){
                                echo '<span style="color:red;">'.$message.'</span>';
                            }
                        ?>
                    </h4>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                </div>
                <div class="modal-body">
                    <form method="post">
                        <div class="form-group">
                            <input type="text" class="form-control" name="email" placeholder="Email login..."
                                required="required">
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" name="pass" placeholder="Password"
                                required="required">
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary btn-lg btn-block login-btn"
                                name="login">Login</button>
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