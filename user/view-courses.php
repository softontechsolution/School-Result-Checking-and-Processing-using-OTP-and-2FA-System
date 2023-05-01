<?php
session_start();
include('config/dbcon.php');
include('authentication.php');
include('includes/header.php');
                      
$_SESSION['level'] = $_GET['level'];
$_SESSION['csem'] = $_GET['csem'];

?>

    <?php include('message.php'); ?>
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item active">Dashboard</li>
            <li class="breadcrumb-item">Courses</li>
        </ol>
        <a href="make-withdrawal.php" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
        <a href="add-users.php" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                class="fas fa-folder text-white-50"></i> Add Course</a>
    </div>
    <!-- Content Row -->
    <div class="row">

        <div class="col-md-12">
            <?php include('message.php'); ?>
            <div class="card">
                <div class="card-header">
                    <h4>Course Details</h4>
                </div>
                <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-borderless table-light">
                        <thead>
                            <tr>
                                <th>Course Id</th>
                                <th>Course Title</th>
                                <th>Course Code</th>
                                <th>Course Unit</th>
                                <th>Level</th>
                                <th>Semester</th>
                                <th>Edit</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                $level = $_SESSION['level'];
                                $csem = $_SESSION['csem'];
                                    $query = "SELECT * FROM `coursetbl` WHERE level = '$level' AND semester = '$csem'";
                                    $query_run = mysqli_query($con, $query);

                                    if(mysqli_num_rows($query_run) > 0)
                                    {
                                        foreach($query_run as $row)
                                        {
                                            ?>
                                            <tr>
                                                <td><?= $row['sn']; ?></td>
                                                <td><?= $row['c_title']; ?></td>
                                                <td><?= $row['c_code']; ?></td>
                                                <td><?= $row['c_unit']; ?></td>
                                                <td><?= $row['level']; ?></td>
                                                <td><?= $row['semester']; ?></td>
                                                <td><a href="edit-course.php?id=<?=$row['sn'];?>" class="btn btn-primary">Edit</a></td>
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