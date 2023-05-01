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
                    <h4>Withdrawal Methods</h4>
                    <a href="add-withdrawal-method.php" class="btn btn-primary float-end">Add Method</a>
                </div>
                <div class="card-body">

                <div class="table-responsive">
                    <table class="table table-borderless table-striped table-light">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Minimum</th>
                                <th>Maximum</th>
                                <th>Fix</th>
                                <th>Gas Fee</th>
                                <th>Duration</th>
                                <th>Status</th>
                                <th>Edit</th>
                                <th>Delete</th>
                            </tr>
                        </thead>
                        <tbody>

                            <?php
                                $w_methods = "SELECT * FROM withdraw_methods ";
                                $w_methods_run = mysqli_query($con, $w_methods);

                                if(mysqli_num_rows($w_methods_run) > 0)
                                {
                                    foreach($w_methods_run as $wmthods_item)
                                    {
                                        ?>
                                            <tr>
                                                <td><?=$wmthods_item['id']?></td>
                                                <td><?=$wmthods_item['name']?></td>
                                                <td>$<?=$wmthods_item['withdraw_min']?></td>
                                                <td>$<?=$wmthods_item['withdraw_max']?></td>
                                                <td><?=$wmthods_item['fix']?></td>
                                                <td>$<?=$wmthods_item['percent']?></td>
                                                <td><?=$wmthods_item['duration']?> days</td>
                                                <td>
                                                    <?=$wmthods_item['status'] == '1' ? 'Available':'Not Available'?>
                                                </td>
                                                <td>
                                                    <a href="edit-withdrawal.php?id=<?=$wmthods_item['id']?>" class="btn btn-primary">Edit</a>
                                                </td>
                                                <td>
                                                    <form action="update-code.php" method="POST">
                                                        <button type="submit" name="withdraw_delete_btn" value="<?=$wmthods_item['id']?>" class="btn btn-danger">Delete</button>
                                                    </form>
                                                </td>
                                            </tr>
                                        <?php
                                    }
                                }
                                else
                                {
                                    ?>
                                        <tr>
                                            <td colspan="10">No Record Found</td>
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

</div>

<?php
include('includes/footer.php');
include('includes/scripts.php');
?>