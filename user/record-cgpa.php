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
                    <h4>Record GPA</h4>
                </div>
                <div class="card-body">

                        <div class="card-header text-center mt-mb-6">
                            <i class="bi bi-arrow"></i>
                            Enter GPA Details Below
                        </div>

                            <form action="update-code.php" method="POST">

                                <div class="col-md-9 my-3 mx-auto text-center">
                                    <label for="">Enter Student Matriculation Number</label>
                                    <input type="text" name="matnum" placeholder="Matriculation Number Here" required class="form-control">
                                </div>
                                <div class="col-md-9 my-3 mx-auto text-center">
                                    <label for="">Enter Student Matriculation Number</label>
                                    <input type="text" name="sgpa" placeholder="Enter GPA Here" required class="form-control">
                                </div>
                                <div class="col-md-9 my-3 mx-auto text-center">
                                    <label for="">Semester</label>
                                    <select id="level" name="semester" class="form-control">
                                        <option>Please Select Semester</option>
                                        <option value="1">First Semester</option>
                                        <option value="2">Second Semester</option>
                                        <option value="3">Third Semester</option>
                                        <option value="4">Fourth Semester</option>
                                    </select>
                                </div>

                                <div class="col-md-9 my-5 mx-auto text-center">
                                    <button  type="submit" name="save_gpa" class="btn btn-primary">Save GPA</button>
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