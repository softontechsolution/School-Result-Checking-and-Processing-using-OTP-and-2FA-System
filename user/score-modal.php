<?php
session_start();
include('config/dbcon.php');
include('authentication.php');
include('logincode.php');
include('includes/header.php');
?>

<div class="container-fluid px-4">

    <!-- Content Row -->
    <div class="row mt-4">
        <div class="col-md-12">
            
            <?php include('message.php'); ?>

            <div class="card">
                <div class="card-header">
                    <h4>View Score Sheet</h4>
                </div>
                <div class="card-body">

                        <div class="card-header text-center mt-mb-6">
                            <i class="bi bi-arrow"></i>
                            Choose Course Below
                        </div>

                            <form action="view-score.php" method="GET">

                                <div class="col-md-9 my-3 mx-auto text-center">
                                    <label for="">Enter Course Code</label>
                                    <input type="text" name="ccode" placeholder="Enter Course Code in Uppercase" required class="form-control">
                                </div>

                                <div class="col-md-9 my-5 mx-auto text-center">
                                    <button  type="submit" name="view_btn" class="btn btn-primary">View Details</button>
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