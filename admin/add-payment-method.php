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
                    <h4>Add Payment Method</h4>
                    <a href="view-payment-method.php" class="btn btn-danger float-end">BACK</a>
                </div>
                <div class="card-body">

                <form action="update-code.php" method="POST" enctype="multipart/form-data">

                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="">Name</label>
                            <input type="text" name="name" required class="form-control">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="">Rate</label>
                            <input type="text" name="rate" required class="form-control" />
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="">Percentage</label>
                            <input type="text" name="percent" required class="form-control" />
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="">Wallet Address</label>
                            <input type="text" name="address" required class="form-control">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="">Currency</label>
                            <input type="text" name="currency" class="form-control">
                        </div>
                        <div class="col-md-12 mb-3">
                            <label for="">Status</label>
                            <input type="checkbox" name="status" width="100px" height="100px"/>
                        </div>
                        <div class="col-md-12 mb-3">
                            <label for="">Image</label>
                            <input type="file" name="image" class="form-control">
                        </div>
                        <div class="col-md-12 mb-3">
                            <button type="submit" name="add_payment" class="btn btn-primary">Add Payment Method</button>
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