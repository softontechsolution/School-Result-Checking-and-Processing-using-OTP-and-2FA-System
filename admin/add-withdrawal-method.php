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
                    <h4>Add Withdrawal Method</h4>
                    <a href="view-withdrawal-method.php" class="btn btn-danger float-end">BACK</a>
                </div>
                <div class="card-body">

                <form action="update-code.php" method="POST">

                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="">Name</label>
                            <input type="text" name="name" required class="form-control">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="">Minimum Withdrawal</label>
                            <input type="text" name="mini" required class="form-control" />
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="">Maximum Withdrawal</label>
                            <input type="text" name="maxi" required class="form-control" />
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="">Fix</label>
                            <input type="text" name="fix" required class="form-control">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="">Percent</label>
                            <input type="text" name="percent" required class="form-control">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="">Duration</label>
                            <input type="text" name="duration" required class="form-control">
                        </div>
                        <div class="col-md-12 mb-3">
                            <label for="">Status</label>
                            <input type="checkbox" name="status" width="100px" height="100px"/>
                        </div>
                        <div class="col-md-12 mb-3">
                            <button type="submit" name="add_withdraw" class="btn btn-primary">Add Withdrawal Method</button>
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