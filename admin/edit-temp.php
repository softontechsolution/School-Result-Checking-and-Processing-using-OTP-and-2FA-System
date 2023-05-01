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
                    <h4>Edit Temp Pay</h4>
                    <a href="view-tempay-log.php" class="btn btn-danger float-end">BACK</a>
                </div>
                <div class="card-body">

                    <?php
                    if(isset($_GET['id']))
                    {
                        $temp_id = $_GET['id'];
                        $temp_query = "SELECT * FROM temp_pay WHERE id='$temp_id' LIMIT 1";
                        $temp_query_run = mysqli_query($con, $temp_query);

                        if(mysqli_num_rows($temp_query_run) > 0)
                        {
                            $temp_row = mysqli_fetch_array($temp_query_run);
                            ?>

                            <form action="update-code.php" method="POST">

                                <input type="hidden" name="temp_id" value="<?= $temp_row['id']?>">

                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <label for="">Payment Type</label>
                                        <input type="text" name="pay_type" value="<?= $temp_row['payment_type']?>" required class="form-control">
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="">Amount</label>
                                        <input type="number" name="amount" value="<?= $temp_row['usd_amount']?>" required class="form-control">
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="">Plan ID</label>
                                        <input type="text" name="plan_id" value="<?= $temp_row['plan_id']?>" class="form-control">
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="">User ID</label>
                                        <input type="text" name="user_id" value="<?= $temp_row['user_id']?>" required class="form-control">
                                    </div>
                                    <div class="col-md-12 mb-3">
                                        <label for="">Status</label>
                                        <input type="checkbox" name="status" <?= $temp_row['status'] == '1' ? 'checked': '' ?> width="100px" height="100px"/>
                                    </div>
                                    <div class="col-md-12 mb-3">
                                        <button type="submit" name="temp-update" class="btn btn-primary">Update Plan</button>
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