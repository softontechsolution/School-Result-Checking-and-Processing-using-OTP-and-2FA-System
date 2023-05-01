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
                    <h4>Edit Plan</h4>
                    <a href="plans-view.php" class="btn btn-danger float-end">BACK</a>
                </div>
                <div class="card-body">

                    <?php
                    if(isset($_GET['id']))
                    {
                        $plan_id = $_GET['id'];
                        $plan_query = "SELECT * FROM plans WHERE id='$plan_id' LIMIT 1";
                        $plan_query_run = mysqli_query($con, $plan_query);

                        if(mysqli_num_rows($plan_query_run) > 0)
                        {
                            $plan_row = mysqli_fetch_array($plan_query_run);
                            ?>

                            <form action="update-code.php" method="POST" enctype="multipart/form-data">

                                <input type="hidden" name="plan_id" value="<?= $plan_row['id']?>">

                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <label for="">Name</label>
                                        <input type="text" name="name" value="<?= $plan_row['name']?>" required class="form-control">
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="">Minimum</label>
                                        <input type="text" name="minimum" value="<?= $plan_row['minimum']?>" required class="form-control">
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="">Maximum</label>
                                        <input type="text" name="maximum" value="<?= $plan_row['maximum']?>" class="form-control">
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="">Percentage</label>
                                        <input type="number" name="percent" value="<?= $plan_row['percent']?>" required class="form-control">
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="">Duration</label>
                                        <input type="text" name="time" value="<?= $plan_row['time']?>" class="form-control">
                                    </div>
                                    <div class="col-md-12 mb-3">
                                        <label for="">Status</label>
                                        <input type="checkbox" name="status" <?= $plan_row['status'] == '1' ? 'checked': '' ?> width="100px" height="100px"/>
                                    </div>
                                    <div class="col-md-12 mb-3">
                                        <label for="">Image</label>
                                        <input type="hidden" name="old_image" value="<?= $plan_row['image']?>">
                                        <input type="file" name="image" class="form-control">
                                    </div>
                                    <div class="col-md-12 mb-3">
                                        <button type="submit" name="plan-update" class="btn btn-primary">Update Plan</button>
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