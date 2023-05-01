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
                    <h4>View Payment Logs</h4>
                </div>
                <div class="card-body">

                <div class="table-responsive">
                    <table class="table table-borderless table-striped table-light">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>PLAN ID</th>
                                <th>USER ID</th>
                                <th>TRANSACTION ID</th>
                                <th>PAYMENT TYPE</th>
                                <th>AMOUNT</th>
                                <th>CHARGES</th>
                                <th>NET AMOUNT</th>
                                <th>BTC AMOUNT</th>
                                <th>BTC ADDRESS</th>
                                <th>STATUS</th>
                                <th>Edit</th>
                                <th>Delete</th>
                            </tr>
                        </thead>
                        <tbody>

                            <?php
                                $payments = "SELECT * FROM payment_logs ";
                                $payments_run = mysqli_query($con, $payments);

                                if(mysqli_num_rows($payments_run) > 0)
                                {
                                    foreach($payments_run as $payments_item)
                                    {
                                        $_SESSION['trx_id'] = $payments_item['transac_id'];
                                        ?>
                                            <tr>
                                                <td><?=$payments_item['id']?></td>
                                                <td><?=$payments_item['plan_id']?></td>
                                                <td><?=$payments_item['user_id']?></td>
                                                <td><?=$payments_item['transac_id']?></td>
                                                <td><?=$payments_item['payment_type']?></td>
                                                <td>$ <?=$payments_item['amount']?></td>
                                                <td>$ <?=$payments_item['charges']?></td>
                                                <td>$ <?=$payments_item['net_amount']?></td>
                                                <td><?=$payments_item['btc_amount']?> BTC</td>
                                                <td><?=$payments_item['btc_account']?></td>
                                                <td>
                                                    <?=$payments_item['status'] == '1' ? 'Confirmed':'Not Confirmed'?>
                                                </td>
                                                <td>
                                                    <a href="edit-payment-log.php?id=<?=$payments_item['id']?>" class="btn btn-primary">Edit</a>
                                                </td>
                                                <td>
                                                    <form action="update-code.php" method="POST">
                                                        <button type="submit" name="paylog_delete_btn" value="<?=$payments_item['id']?>" class="btn btn-danger">Delete</button>
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