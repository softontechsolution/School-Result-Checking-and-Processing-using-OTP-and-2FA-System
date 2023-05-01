<?php
session_cache_limiter('private, must-revalidate');
session_start();
include('config/dbcon.php');
include('authentication.php');
include('config/check.php');
include('includes/header.php');
?>
<div class="container-fluid px-4">
        <!-- Content Row -->
        <div class="row mt-4">

            <div class="col-md-12">
                
                <?php include('message.php'); ?>

                <div class="card">
                    <div class="card-header">
                        <h4>Credit User</h4>
                        <a href="view-register.php" class="btn btn-danger float-end">BACK</a>
                    </div>
                    <div class="card-body">
                        <?php
                            if(isset($_GET['id']))
                            {
                                $user_id = $_GET['id'];
                                //Crediting Users

                            }

                        ?>
                        <form action="update-code.php" method="POST">
                        <input type="hidden" name="cuser_id" value="<?=$user_id?>" class="form-control">
                            <div class="row">
                                <div class="col-md-12 mb-3">
                                <div class="col-md-12 mb-3">
                                    <label for="">Enter Amount for Profit</label>
                                    <input type="text" name="profit" class="form-control">
                                </div>
                                <div class="col-md-12 mb-3">
                                    <button type="submit" name="creditpro_btn" class="btn btn-primary">Credit</button>
                                </div>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>


<?php
include('includes/footer.php');
include('includes/scripts.php');
?>