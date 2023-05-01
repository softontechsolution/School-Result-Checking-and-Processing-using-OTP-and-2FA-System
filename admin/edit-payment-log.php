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
                    <h4>Edit Payment</h4>
                    <a href="view-payment-log.php" class="btn btn-danger float-end">BACK</a>
                </div>
                <div class="card-body">


                <?php
                    if(isset($_GET['id']))
                    {
                        $payment_id = $_GET['id'];
                        $payments_query = "SELECT * FROM payment_logs WHERE id='$payment_id' LIMIT 1";
                        $payments_query_run = mysqli_query($con, $payments_query);

                        if(mysqli_num_rows($payments_query_run) > 0)
                        {
                            $payments_row = mysqli_fetch_array($payments_query_run);
                            ?>

                            <form action="update-code.php" method="POST" enctype="multipart/form-data">

                                <input type="hidden" name="payment_id" value="<?= $payments_row['id']?>">

                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <label for="">Plan ID</label>
                                        <input type="text" name="plan_id" value="<?= $payments_row['plan_id']?>" required class="form-control">
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="">User ID</label>
                                        <input type="text" name="user_id" value="<?= $payments_row['user_id']?>" required class="form-control">
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="">Transaction ID</label>
                                        <input type="text" name="transac_id" value="<?= $payments_row['transac_id']?>" class="form-control">
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="">Payment Type</label>
                                        <input type="text" name="pay_type" value="<?= $payments_row['payment_type']?>" required class="form-control">
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="">Amount</label>
                                        <input type="text" name="amount" value="<?= $payments_row['amount']?>" class="form-control">
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="">Charges</label>
                                        <input type="text" name="charges" value="<?= $payments_row['charges']?>" class="form-control">
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="">Net Amount</label>
                                        <input type="text" name="net_amount" value="<?= $payments_row['net_amount']?>" class="form-control">
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="">BTC Amount</label>
                                        <input type="text" name="btc_amount" value="<?= $payments_row['btc_amount']?>" class="form-control">
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="">BTC Address</label>
                                        <input type="text" name="btc_account" value="<?= $payments_row['btc_account']?>" class="form-control">
                                    </div>
                                    <div class="col-md-12 mb-3">
                                        <label for="">Status</label>
                                        <input type="checkbox" name="status" <?= $payments_row['status'] == '1' ? 'checked': '' ?> width="100px" height="100px"/>
                                    </div>
                                    <div class="col-md-12 mb-3">
                                        <label for="">Upload Conifrmation Image</label>
                                        <input type="hidden" name="old_image" value="<?= $plan_row['image']?>">
                                        <input type="file" name="image" class="form-control">
                                    </div>
                                    <div class="col-md-12 mb-3">
                                        <button type="submit" name="pay-update" class="btn btn-primary">Update Payment</button>
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