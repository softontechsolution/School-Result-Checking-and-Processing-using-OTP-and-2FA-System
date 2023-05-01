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
                    <h4>Edit Withdrawal</h4>
                    <a href="view-payment-log.php" class="btn btn-danger float-end">BACK</a>
                </div>
                <div class="card-body">


                <?php
                    if(isset($_GET['id']))
                    {
                        $payment_id = $_GET['id'];
                        $payments_query = "SELECT * FROM withdraw_logs WHERE id='$payment_id' LIMIT 1";
                        $payments_query_run = mysqli_query($con, $payments_query);

                        if(mysqli_num_rows($payments_query_run) > 0)
                        {
                            $payments_row = mysqli_fetch_array($payments_query_run);
                            ?>

                            <form action="update-code.php" method="POST">

                                <input type="hidden" name="with_id" value="<?= $payments_row['id']?>">

                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <label for="">User ID</label>
                                        <input type="text" name="user_id" value="<?= $payments_row['user_id']?>" required class="form-control">
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="">Method ID</label>
                                        <input type="text" name="meth_id" value="<?= $payments_row['method_id']?>" required class="form-control">
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="">Transaction ID</label>
                                        <input type="text" name="transac_id" value="<?= $payments_row['transaction_id']?>" class="form-control">
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
                                    <div class="form-floating col-md-6 mb-3">
                                        <textarea class="form-control" name="details" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px"><?= $payments_row['send_details']?></textarea>
                                        <label for="floatingTextarea2">Enter bank name,account,routing number / BEP2, BEP20 Wallet Address..</label>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="">Message</label>
                                        <input type="text" name="message" value="<?= $payments_row['message']?>" class="form-control">
                                    </div>
                                    <div class="col-md-12 mb-3">
                                        <label for="">Status</label>
                                        <input type="checkbox" name="status" <?= $payments_row['status'] == '1' ? 'checked': '' ?> width="100px" height="100px"/>
                                    </div>
                                    <div class="col-md-12 mb-3">
                                        <button type="submit" name="withd-update" class="btn btn-primary">Update Payment</button>
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