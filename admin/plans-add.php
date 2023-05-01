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
                    <h4>Add Plan</h4>
                    <a href="plans-view.php" class="btn btn-danger float-end">BACK</a>
                </div>
                <div class="card-body">

                            <form action="update-code.php" method="POST" enctype="multipart/form-data">

                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <label for="">Name</label>
                                        <input type="text" name="name" required class="form-control">
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="">Minimum</label>
                                        <input type="text" name="minimum" required class="form-control">
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="">Maximum</label>
                                        <input type="text" name="maximum" class="form-control">
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="">Percentage</label>
                                        <input type="number" name="percent" required class="form-control">
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="">Duration</label>
                                        <input type="text" name="time" class="form-control">
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
                                        <button type="submit" name="add_plan" class="btn btn-primary">Add Plan</button>
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