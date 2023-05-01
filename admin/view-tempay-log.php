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
                    <h4>View Temp Payment Log</h4>
                </div>
                <div class="card-body">

                <div class="table-responsive">
                    <table class="table table-borderless table-striped table-light">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Payment Type</th>
                                <th>Amount (USD)</th>
                                <th>Plan ID</th>
                                <th>User ID</th>
                                <th>Staus</th>
                                <th>Edit</th>
                                <th>Delete</th>
                            </tr>
                        </thead>
                        <tbody>

                            <?php
                                $temp = "SELECT * FROM temp_pay";
                                $temp_run = mysqli_query($con, $temp);

                                if(mysqli_num_rows($temp_run) > 0)
                                {
                                    foreach($temp_run as $temp_item)
                                    {
                                        ?>
                                            <tr>
                                                <td><?=$temp_item['id']?></td>
                                                <td><?=$temp_item['payment_type']?></td>
                                                <td>$ <?=$temp_item['usd_amount']?></td>
                                                <td><?=$temp_item['plan_id']?></td>
                                                <td><?=$temp_item['user_id']?></td>
                                                <td>
                                                    <?=$temp_item['status'] == '1' ? 'Active':'Not Active'?>
                                                </td>
                                                <td>
                                                    <a href="edit-temp.php?id=<?=$temp_item['id']?>" class="btn btn-primary">Edit</a>
                                                </td>
                                                <td>
                                                    <form action="update-code.php" method="POST">
                                                        <button type="submit" name="temp_delete_btn" value="<?=$temp_item['id']?>" class="btn btn-danger">Delete</button>
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