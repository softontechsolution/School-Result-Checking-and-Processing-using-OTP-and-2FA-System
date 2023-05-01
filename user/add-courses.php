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
                    <h4>Add Course</h4>
                    <a href="index.php" class="btn btn-danger float-end">BACK</a>
                </div>
                <div class="card-body">

                            <form action="update-code.php" method="POST" enctype="multipart/form-data">

                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <label for="">Enter Course Title</label>
                                        <input type="text" name="ctitle" required class="form-control">
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="">Enter Course Code</label>
                                        <input type="text" name="ccode" required class="form-control">
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="">Enter Course Unit</label>
                                        <input type="number" name="cunit" required class="form-control">
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="">Level</label>
                                        <select id="level" name="level" required class="form-control">
                                            <option>Please Select Level</option>
                                            <option value="ND1">ND1</option>
                                            <option value="ND2">ND2</option>
                                            <option value="HND1">HND1</option>
                                            <option value="HND2">HND2</option>
                                        </select>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="">Semester</label>
                                        <select id="csem" name="csem" class="form-control">
                                            <option value="">Please Select Semester</option>
                                            <option value="First Semester">First Semester</option>
                                            <option value="Second Semester">Second Semester</option>
                                        </select>
                                    </div>
                                    <div class="col-md-12 mb-3 mt-4">
                                        <button type="submit" name="add_course" class="btn btn-primary">Add Course</button>
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