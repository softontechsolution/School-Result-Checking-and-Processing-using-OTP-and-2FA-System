<?php
session_cache_limiter('private, must-revalidate');
session_start();
include('config/dbcon.php');
include('authentication.php');
include('config/check.php');
include('includes/header.php');
?>

    <?php include('message.php'); ?>
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h4 class="h3 mb-0 text-gray-800">User Profile</h4>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item active">Dashboard</li>
            <li class="breadcrumb-item">User</li>
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
                    <h4>User Details</h4>
                    <a href="add-users.php" class="btn btn-primary float-end">Add User</a>
                </div>
                <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-borderless table-light">
                        <thead>
                            <tr>
                                <th>USER ID</th>
                                <th>FULL NAME</th>
                                <th>EMAIL</th>
                                <th>PHONE NUMBER</th>
                                <th>DATE OF BIRTH</th>
                                <th>COUNTRY</th>
                                <th>BALANCE</th>
                                <th>PROFIT</th>
                                <th>LEVEL</th>
                                <th>Edit</th>
                                <th>Credit</th>
                                <th>Debit</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $query = "SELECT * FROM users";
                            $query_run = mysqli_query($con, $query);

                            if(mysqli_num_rows($query_run) > 0)
                            {
                                foreach($query_run as $row)
                                {
                                    ?>
                                    <tr>
                                        <td><?= $row['id']; ?></td>
                                        <td><?= $row['username']; ?></td>
                                        <td><?= $row['email']; ?></td>
                                        <td><?= $row['phone']; ?></td>
                                        <td><?= $row['dateofbirth']; ?></td>
                                        <td><?= $row['country']; ?></td>
                                        <td>$<?= $row['balance']; ?></td>
                                        <td>$<?= $row['profit']; ?></td>
                                        <td><?= $row['level']; ?></td>
                                        <td><a href="edit-register.php?id=<?=$row['id'];?>" class="btn btn-primary">Edit</a></td>
                                        <td><a href="credit.php?id=<?=$row['id'];?>" class="btn btn-success">Credit Balance</a></td>
                                        <td><a href="creditprofit.php?id=<?=$row['id'];?>" class="btn btn-success">Credit Profit</a></td>
                                        <td><a href="debit.php?id=<?=$row['id'];?>" class="btn btn-warning">Debit Balance</a></td>
                                        <td><a href="debitprofit.php?id=<?=$row['id'];?>" class="btn btn-warning">Debit Profit</a></td>
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