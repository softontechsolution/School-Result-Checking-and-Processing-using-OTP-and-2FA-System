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
                    <h4>Active Investments</h4>
                    <a href="investment-add.php" class="btn btn-primary float-end">Add Active Investments</a>
                </div>
                <div class="card-body">

                <div class="table-responsive">
                    <table class="table table-borderless table-striped table-light">
                        <thead>
                            <tr>
                                <th>id</th>
                                <th>Transaction id</th>
                                <th>User id</th>
                                <th>Plan id</th>
                                <th>Amount</th>
                                <th>Status</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>

                            <?php
                                    $payments = "SELECT * FROM investments";
                                    $payments_run = mysqli_query($con, $payments);

                                    if(mysqli_num_rows($payments_run) > 0)
                                    {
                                        foreach($payments_run as $payments_item)
                                        {
                                            ?>
                                                <tr>
                                                    <td><?=$payments_item['id']?></td>
                                                    <td><?=$payments_item['transaction_id']?></td>
                                                    <td><?=$payments_item['user_id']?></td>
                                                    <td><?=$payments_item['plan_id']?></td>
                                                    <td>$<?=$payments_item['amount']?></td>
                                                    <td>
                                                        <?=$payments_item['status'] == '1' ? 'Active':'Not Active'?>
                                                    </td>
                                                    <td>
                                                        <form action="update-code.php" method="POST">
                                                            <button type="submit" name="stop_invest_btn" value="<?=$payments_item['id']?>" class="btn btn-danger">Stop</button>
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