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
                    <h4>Add Score</h4>
                    <a href="index.php" class="btn btn-danger float-end">BACK</a>
                </div>
                <div class="card-body">

                            <form action="update-code.php" method="POST" enctype="multipart/form-data">

                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <label for="">Enter Matriculation Number</label>
                                        <input type="text" name="matnum" required class="form-control">
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="">Enter Course Title</label>
                                        <input type="text" name="ctitle" required class="form-control">
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="">Enter Course Code</label>
                                        <input type="text" name="ccode" required class="form-control">
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="">Enter First Assesment Score</label>
                                        <input type="number" name="fscore" required class="form-control">
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="">Enter Second Assesment Score</label>
                                        <input type="number" name="sscore" required class="form-control">
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="">Enter Exam Score</label>
                                        <input type="number" name="escore" required class="form-control">
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="">Enter Total</label>
                                        <input type="number" name="tscore" required class="form-control">
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="">Enter Grade Point</label>
                                        <input type="text" name="gpoint" required class="form-control">
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="">Enter Total Point</label>
                                        <input type="text" name="tpoint" required class="form-control">
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="">Grade Letter</label>
                                        <select id="gletter" name="gletter" required class="form-control">
                                            <option>Please Select Grade</option>
                                            <option value="A">A</option>
                                            <option value="AB">AB</option>
                                            <option value="B">B</option>
                                            <option value="BC">BC</option>
                                            <option value="C">C</option>
                                            <option value="D">D</option>
                                            <option value="E">E</option>
                                            <option value="F">F</option>
                                        </select>
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
                                        <select id="ssem" name="ssem" class="form-control">
                                            <option>Please Select Semester</option>
                                            <option value="First Semester">First Semester</option>
                                            <option value="Second Semester">Second Semester</option>
                                        </select>
                                    </div>
                                    <div class="col-md-12 mb-3 mt-4">
                                        <button type="submit" name="add_score" class="btn btn-primary">Add Score</button>
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