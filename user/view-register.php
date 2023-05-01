<?php
session_start();
include('config/dbcon.php');
include('authentication.php');
include('includes/header.php');

$_SESSION['dept'] = $_GET['depart'];                        
$_SESSION['level'] = $_GET['level']; 

?>

    <?php include('message.php'); ?>
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item active">Dashboard</li>
            <li class="breadcrumb-item">Students</li>
        </ol>
        <a href="make-withdrawal.php" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
        <a href="add-users.php" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                class="fas fa-user text-white-50"></i> Add Student</a>
    </div>
    <!-- Content Row -->
    <div class="row">

        <div class="col-md-12">
            <?php include('message.php'); ?>
            <div class="card">
                <div class="card-header">
                    <h4>Student Details</h4>
                </div>
                <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-borderless table-light">
                        <thead>
                            <tr>
                                <th>User Id</th>
                                <th>Matric No.</th>
                                <th>Full Name</th>
                                <th>Email</th>
                                <th>Level</th>
                                <th>Department</th>
                                <th>School</th>
                                <th>Edit</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                $level = $_SESSION['level'];
                                $dept = $_SESSION['dept'];
                                    $query = "SELECT * FROM `studenttbl` WHERE level = '$level' AND dept = '$dept'";
                                    $query_run = mysqli_query($con, $query);

                                    if(mysqli_num_rows($query_run) > 0)
                                    {
                                        foreach($query_run as $row)
                                        {
                                            ?>
                                            <tr>
                                                <td><?= $row['sn']; ?></td>
                                                <td><?= $row['reg_no']; ?></td>
                                                <td><?= $row['fullname']; ?></td>
                                                <td><?= $row['email']; ?></td>
                                                <td><?= $row['level']; ?></td>
                                                <td><?= $row['dept']; ?></td>
                                                <td><?= $row['sch']; ?></td>
                                                <td><a href="edit-student.php?id=<?=$row['sn'];?>" class="btn btn-primary">Edit</a></td>
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