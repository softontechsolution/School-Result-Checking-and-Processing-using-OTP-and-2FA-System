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
                    <h4>Add Active Investment</h4>
                    <a href="active-invest.php" class="btn btn-danger float-end">BACK</a>
                </div>
                <div class="card-body">

                <form action="update-code.php" method="POST">

                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="">Transaction ID</label>
                            <input type="text" name="trx_id" required class="form-control">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="">User ID</label>
                            <input type="text" name="user_id" required class="form-control" />
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="">Plan ID</label>
                            <input type="text" name="plan_id" required class="form-control" />
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="">Amount</label>
                            <input type="text" name="amount" required class="form-control">
                        </div>
                        <div class="col-md-12 mb-3">
                            <label for="">Status</label>
                            <input type="checkbox" name="status" width="100px" height="100px"/>
                        </div>

                        <div class="col-md-12 mb-3">
                            <button type="submit" name="add_active" class="btn btn-primary">Add New Active Investment</button>
                        </div> 
                    </div>

                </form>

                </div>
            </div>
        </div>
    </div>

</div>

<?php
include('includes/footer.php');
include('includes/scripts.php');
?>