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
                    <h4>Edit Withdrawal Method</h4>
                    <a href="view-withdrawal-method.php" class="btn btn-danger float-end">BACK</a>
                </div>
                <div class="card-body">

                    <?php
                    if(isset($_GET['id']))
                    {
                        $meth_id = $_GET['id'];
                        $meth_query = "SELECT * FROM withdraw_methods WHERE id='$meth_id' LIMIT 1";
                        $meth_query_run = mysqli_query($con, $meth_query);

                        if(mysqli_num_rows($meth_query_run) > 0)
                        {
                            $meth_row = mysqli_fetch_array($meth_query_run);
                            ?>

                            <form action="update-code.php" method="POST" enctype="multipart/form-data">

                                <input type="hidden" name="meth_id" value="<?= $meth_row['id']?>">

                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <label for="">Name</label>
                                        <input type="text" name="name" value="<?= $meth_row['name']?>" required class="form-control">
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="">Minimum Withdrawal</label>
                                        <input type="text" name="mini" value="<?= $meth_row['withdraw_min']?>" required class="form-control">
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="">Maximum Withdrawal</label>
                                        <input type="text" name="maxi" value="<?= $meth_row['withdraw_max']?>" class="form-control">
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="">Fix</label>
                                        <input type="text" name="fix" value="<?= $meth_row['fix']?>" required class="form-control">
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="">Percent</label>
                                        <input type="text" name="percent" value="<?= $meth_row['percent']?>" class="form-control">
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="">Duration</label>
                                        <input type="text" name="duration" value="<?= $meth_row['duration']?>" class="form-control">
                                    </div>
                                    <div class="col-md-12 mb-3">
                                        <label for="">Status</label>
                                        <input type="checkbox" name="status" <?= $meth_row['status'] == '1' ? 'checked': '' ?> width="100px" height="100px"/>
                                    </div>
                                    <div class="col-md-12 mb-3">
                                        <button type="submit" name="withdraw-update" class="btn btn-primary">Update Payment Method</button>
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