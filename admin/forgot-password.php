<?php
session_cache_limiter('private, must-revalidate');
session_start();
include('config/dbcon.php');
include('config/func.php');
include('authentication.php');
include('config/check.php');
include('includes/header.php');
?>

<div class="container-fluid px-4">

    <!-- Content Row -->
    <div class="row mt-4">
        <div class="col-md-12">
            
            <?php include('message.php'); ?>

            <div class="card text-center">
                <div class="card-header text-center">
                    <h4>Reset Password</h4>
                </div>
                <div class="card-body">
                    <div class="card-header text-center mt-mb-6">
                    <i class="fa-solid fa-lock"></i>
                        Enter your new password below
                    </div>

                    <div class="row">

                         <div class="col-sm-6 mt-2">
                            <div class="card border-info text-center" style="width: 50rem;">
                                <div class="card-body">
                                <form action="update-code.php" method="POST">

                                        <div class="col-md-6 my-3 custom-file">
                                            <label for="">New Password</label>
                                            <input type="password" name="password" onChange="onChange()" placeholder="Enter new password.." required class="form-control">
                                        </div>
                                        <div class="col-md-6 my-3 custom-file">
                                            <label for="">Confirm Password</label>
                                            <input type="password" name="confirm" onChange="onChange()" placeholder="Repeat password.." required class="form-control">
                                        </div>
                            
                                        <div class=" d-grid mx-auto col-6 col-md-6 my-3">
                                            <button type="submit" name="change_pass"  class="btn btn-primary">Verify</button>
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

<?php
include('includes/footer.php');
include('includes/scripts.php');
?>