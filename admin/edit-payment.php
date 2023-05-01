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
                    <h4>Edit Payment Method</h4>
                    <a href="plans-view.php" class="btn btn-danger float-end">BACK</a>
                </div>
                <div class="card-body">

                    <?php
                    if(isset($_GET['id']))
                    {
                        $payment_id = $_GET['id'];
                        $payment_query = "SELECT * FROM payment_methods WHERE id='$payment_id' LIMIT 1";
                        $payment_query_run = mysqli_query($con, $payment_query);

                        if(mysqli_num_rows($payment_query_run) > 0)
                        {
                            $payment_row = mysqli_fetch_array($payment_query_run);
                            ?>

                            <form action="update-code.php" method="POST" enctype="multipart/form-data">

                                <input type="hidden" name="payment_id" value="<?= $payment_row['id']?>">

                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <label for="">Name</label>
                                        <input type="text" name="name" value="<?= $payment_row['name']?>" required class="form-control">
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="">Rate</label>
                                        <input type="text" name="rate" value="<?= $payment_row['rate']?>" required class="form-control">
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="">Percentage</label>
                                        <input type="text" name="percent" value="<?= $payment_row['percent']?>" class="form-control">
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="">Wallet Address</label>
                                        <input type="text" name="account" value="<?= $payment_row['account']?>" required class="form-control">
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="">Currency</label>
                                        <input type="text" name="currency" value="<?= $payment_row['currency']?>" class="form-control">
                                    </div>
                                    <div class="col-md-12 mb-3">
                                        <label for="">Status</label>
                                        <input type="checkbox" name="status" <?= $payment_row['status'] == '1' ? 'checked': '' ?> width="100px" height="100px"/>
                                    </div>
                                    <div class="col-md-12 mb-3">
                                        <label for="">Image</label>
                                        <input type="hidden" name="old_image" value="<?= $payment_row['image']?>">
                                        <input type="file" name="image" class="form-control">
                                    </div>
                                    <div class="col-md-12 mb-3">
                                        <button type="submit" name="payment-update" class="btn btn-primary">Update Payment Method</button>
                                    </div> 
                                </div>

                            </form>

                            <?php
                        }
                        else
                        {
                            ?>
                            <h4>No Record Found</h4>
                            <?php
                        }
                    }
                    ?>

                </div>
            </div>
        </div>
    </div>

</div>

<?php
include('includes/footer.php');
include('includes/scripts.php');
?>