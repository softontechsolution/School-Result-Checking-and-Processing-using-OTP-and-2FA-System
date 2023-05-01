<?php
session_start();
include('config/dbcon.php');
include('authentication.php');
include('includes/header.php');
                      
$_SESSION['matnum'] = $_GET['matnum'];

?>

    <?php include('message.php'); ?>
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item active">Dashboard</li>
            <li class="breadcrumb-item">Student Cummumlative GPA</li>
        </ol>
        <a href="score-modal.php" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
        <a href="add-score.php" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                class="fas fa-book text-white-50"></i> Record Score</a>
    </div>
    <!-- Content Row -->
    <div class="row">

        <div class="col-md-12">
            <?php include('message.php'); ?>
            <div class="card">
                <div class="card-header">
                    <h4>Studet Cummumlative Grade Point Average</h4>
                </div>
                <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-borderless table-light">
                        <thead>
                            <tr>
                                <th>S/N</th>
                                <th>Matric No.</th>
                                <th>First Semester</th>
                                <th>Second Semester</th>
                                <th>Third Semester</th>
                                <th>Fourth Semester</th>
                                <th>CGPA</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                $matnum = $_SESSION['matnum'];
                                    $query = "SELECT * FROM `cumulativetbl` WHERE reg_no = '$matnum'";
                                    $query_run = mysqli_query($con, $query);

                                    if(mysqli_num_rows($query_run) > 0)
                                    {
                                        foreach($query_run as $row)
                                        {
                                            $cgpa = ($row['first_semester']+ $row['second_semester'] + $row['third_semester'] + $row['fourth_semester'])/4;
                                            ?>
                                            <tr>
                                                <td><?= $row['sn']; ?></td>
                                                <td><?= $row['reg_no']; ?></td>
                                                <td><?= $row['first_semester']; ?></td>
                                                <td><?= $row['second_semester']; ?></td>
                                                <td><?= $row['third_semester']; ?></td>
                                                <td><?= $row['fourth_semester']; ?></td>
                                                <td><?= $cgpa;?></td>
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