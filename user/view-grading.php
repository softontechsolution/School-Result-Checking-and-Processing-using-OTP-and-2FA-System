<?php
session_start();
include('config/dbcon.php');
include('authentication.php');
include('includes/header.php');
                      

?>

    <?php include('message.php'); ?>
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item active">Dashboard</li>
            <li class="breadcrumb-item">Grading System</li>
        </ol>
        <a href="make-withdrawal.php" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
    </div>
    <!-- Content Row -->
    <div class="row">

        <div class="col-md-12">
            <?php include('message.php'); ?>
            <div class="card">
                <div class="card-header">
                    <h4>Polytechnics Grading System Table</h4>
                </div>
                <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-borderless table-light">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Mark(%)</th>
                                <th>Letter Grade</th>
                                <th>Grade Point</th>
                                <th>Final CGPA</th>
                                <th>Class of Degrees</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                    $query = "SELECT * FROM `calculationtbl`";
                                    $query_run = mysqli_query($con, $query);

                                    if(mysqli_num_rows($query_run) > 0)
                                    {
                                        foreach($query_run as $row)
                                        {
                                            ?>
                                            <tr>
                                                <td><?= $row['sn']; ?></td>
                                                <td><?= $row['mark']; ?></td>
                                                <td><?= $row['letter_grade']; ?></td>
                                                <td><?= $row['point_grade']; ?></td>
                                                <td><?= $row['final_cgpa']; ?></td>
                                                <td><?= $row['degree_class']; ?></td>
                                            </tr>
                                            <?php
                                        }
                                    }
                                    else
                                    {
                                    ?>
                                        <tr>
                                            <td colspan="7">No Record Found</td>
                                        </tr>
                                    <?php
                                    }
                                
                                
                            ?>
                           
                        </tbody>
                    </table>
                </div>
                </div>
            </div>
        </div>


    </div>


<?php
include('includes/footer.php');
include('includes/scripts.php');
?>