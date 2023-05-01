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
                    <h4>View Course Details</h4>
                </div>
                <div class="card-body">

                        <div class="card-header text-center mt-mb-6">
                            <i class="bi bi-arrow"></i>
                            Choose Level Below
                        </div>

                            <form action="view-courses.php" method="GET">

                                <div class="col-md-9 my-3 mx-auto text-center">
                                    <label for="">Level</label>
                                    <select id="level" name="level" class="form-control">
                                        <option>Please Select Level</option>
                                        <option value="ND1">ND1</option>
                                        <option value="ND2">ND2</option>
                                        <option value="HND1">HND1</option>
                                        <option value="HND2">HND2</option>
                                    </select>
                                </div>
                                <div class="col-md-9 my-3 mx-auto text-center">
                                        <label for="">Semester</label>
                                        <select id="csem" name="csem" class="form-control">
                                            <option>Please Select Semester</option>
                                            <option value="First Semester">First Semester</option>
                                            <option value="Second Semester">Second Semester</option>
                                        </select>
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