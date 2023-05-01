<?php
session_start();
include('config/dbcon.php');
include('authentication.php');
include('includes/header.php');
                      
$_SESSION['matnum'] = $_GET['matnum'];
$_SESSION['ssem'] = $_GET['ssem'];

?>

    <?php include('message.php'); ?>
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item active">Dashboard</li>
            <li class="breadcrumb-item">Student Score</li>
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
                    <h4>Studet Semester Score</h4>
                </div>
                <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-borderless table-light">
                        <thead>
                            <tr>
                                <th>S/N</th>
                                <th>Matric No.</th>
                                <th>Course Title</th>
                                <th>Course Code</th>
                                <th>1st</th>
                                <th>2nd</th>
                                <th>Exam Score</th>
                                <th>Total</th>
                                <th>Grade</th>
                                <th>Grade Point</th>
                                <th>Level</th>
                                <th>Semester</th>
                                <th>Edit</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                $matnum = $_SESSION['matnum'];
                                $ssem = $_SESSION['ssem'];
                                    $query = "SELECT * FROM `score_sheet` WHERE reg_no = '$matnum' AND semester = '$ssem'";
                                    $query_run = mysqli_query($con, $query);

                                    if(mysqli_num_rows($query_run) > 0)
                                    {
                                        foreach($query_run as $row)
                                        {
                                            ?>
                                            <tr>
                                                <td><?= $row['sn']; ?></td>
                                                <td><?= $row['reg_no']; ?></td>
                                                <td><?= $row['c_title']; ?></td>
                                                <td><?= $row['c_code']; ?></td>
                                                <td><?= $row['first_asses']; ?></td>
                                                <td><?= $row['second_asses']; ?></td>
                                                <td><?= $row['exam']; ?></td>
                                                <td><?= $row['total']; ?></td>
                                                <td><?= $row['grade_letter']; ?></td>
                                                <td><?= $row['grade_point']; ?></td>
                                                <td><?= $row['level']; ?></td>
                                                <td><?= $row['semester']; ?></td>
                                                <td><a href="edit-register.php?id=<?=$row['sn'];?>" class="btn btn-primary">Edit</a></td>
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