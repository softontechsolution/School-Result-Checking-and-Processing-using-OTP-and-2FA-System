<?php
session_start();
include('config/dbcon.php');
include('authentication.php');
include('includes/header.php');
?>

    <?php include('message.php'); ?>
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between">
        <div class="d-sm-flex align-items-center justify-content-between float-end">
            <a href="make-withdrawal.php" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                    class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
        </div>
        <div class="d-sm-flex align-items-center justify-content-between mx-2 float-end">
            <a href="add-users.php" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                    class="fas fa-user text-white-50"></i> Add Student</a>
        </div>
        <div class="d-sm-flex align-items-center justify-content-between float-end">
            <a href="add-score.php" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                    class="fas fa-book text-white-50"></i> Record Score</a>
        </div>
        <div class="d-sm-flex align-items-center justify-content-between mx-2 float-end">
            <a href="add-courses.php" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                    class="fas fa-folder text-white-50"></i> Add Courses</a>
        </div>
        <div class="d-sm-flex align-items-center justify-content-between float-end">
            <a href="calculate-modal.php" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                    class="fa fa-calculator text-white-50"></i> Calculate Student GPA</a>
        </div>
        <div class="d-sm-flex align-items-center justify-content-between mx-2 float-end">
            <a href="view-grading.php" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                    class="fas fa-pen text-white-50"></i> View Grading System</a>
        </div>
        <div class="d-sm-flex align-items-center justify-content-between float-end">
            <a href="cgpa-modal.php" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                    class="fa fa-id-card text-white-50"></i> CGPA</a>
        </div>
    </div>
    <br>
    <!-- Content Row -->
    <div class="row mt-4">
        

                                            <!-- Earnings (Monthly) Card Example -->
                                            <div class="col-xl-6 col-md-6 mb-4">
                                                <div class="card border-left-primary shadow h-100 py-2">
                                                    <div class="card-body">
                                                        <div class="row no-gutters align-items-center">
                                                            <div class="col mr-2">
                                                                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                                    Courses
                                <?php

                                    $dash_bal = "SELECT * FROM coursetbl";
                                    $dash_bal_run = mysqli_query($con, $dash_bal);
                                    if(mysqli_num_rows($dash_bal_run) > 0)
                                    {
                                        $dash_row = mysqli_num_rows($dash_bal_run);

                                        ?>

                                            </div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?=$dash_row?></div>
                                           

                                                        </div>
                                                        <div class="col-auto">
                                                            <i class="fas fa-book fa-2x text-gray-300"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <?php
                                    }

                                ?>

                                        <!-- Earnings (Monthly) Card Example -->
                                        <div class="col-xl-6 col-md-6 mb-4">
                                            <div class="card border-left-success shadow h-100 py-2">
                                                <div class="card-body">
                                                    <div class="row no-gutters align-items-center">
                                                        <div class="col mr-2">
                                                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                                                Students
                                <?php
                                        $dash_bal = "SELECT * FROM studenttbl";
                                        $dash_bal_run = mysqli_query($con, $dash_bal);
                                        if(mysqli_num_rows($dash_bal_run) > 0)
                                        {
                                            $dash_row = mysqli_num_rows($dash_bal_run);

                                            ?>

                                                            </div>
                                                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?=$dash_row?></div>
                                                        </div>
                                                        <div class="col-auto">
                                                            <i class="fas fa-user fa-2x text-gray-300"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                    
                                            <?php
                                        }

                                    
                                ?>
        
    </div>
<?php
include('includes/footer.php');
include('includes/scripts.php');
?>