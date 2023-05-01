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
                    <h4>Payment Methods</h4>
                    <a href="add-payment-method.php" class="btn btn-primary float-end">Add Plans</a>
                </div>
                <div class="card-body">

                <div class="table-responsive">
                    <table class="table table-borderless table-striped table-light">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Image</th>
                                <th>Rate</th>
                                <th>Percentage</th>
                                <th>Wallet Address</th>
                                <th>Currency</th>
                                <th>Status</th>
                                <th>Edit</th>
                                <th>Delete</th>
                            </tr>
                        </thead>
                        <tbody>

                            <?php
                                $plans = "SELECT * FROM payment_methods WHERE status!='2' ";
                                $plans_run = mysqli_query($con, $plans);

                                if(mysqli_num_rows($plans_run) > 0)
                                {
                                    foreach($plans_run as $plans_item)
                                    {
                                        ?>
                                            <tr>
                                                <td><?=$plans_item['id']?></td>
                                                <td><?=$plans_item['name']?></td>
                                                <td><img src="../uploads/payment_methods/<?=$plans_item['image']?>" alt="<?=$plans_item['image']?>" width="60px" height="60px"></td>
                                                <td><?=$plans_item['rate']?></td>
                                                <td><?=$plans_item['percent']?></td>
                                                <td><?=$plans_item['account']?></td>
                                                <td><?=$plans_item['currency']?></td>
                                                <td>
                                                    <?=$plans_item['status'] == '1' ? 'Available':'Not Available'?>
                                                </td>
                                                <td>
                                                    <a href="edit-payment.php?id=<?=$plans_item['id']?>" class="btn btn-primary">Edit</a>
                                                </td>
                                                <td>
                                                    <form action="update-code.php" method="POST">
                                                        <button type="submit" name="payment_delete_btn" value="<?=$plans_item['id']?>" class="btn btn-danger">Delete</button>
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