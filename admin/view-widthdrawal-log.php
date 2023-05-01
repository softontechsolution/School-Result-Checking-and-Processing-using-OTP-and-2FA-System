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
                    <h4>View Your Withdrawal Requests</h4>
                </div>
                <div class="card-body">

                <div class="table-responsive">
                    <table class="table table-borderless table-striped table-light">
                        <thead>
                            <tr>
                                <th>id</th>
                                <th>User id</th>
                                <th>Method id</th>
                                <th>Transaction id</th>
                                <th>Amount</th>
                                <th>Charges</th>
                                <th>Net Amount</th>
                                <th>Payment Details</th>
                                <th>Message</th>
                                <th>Status</th>
                                <th>Edit</th>
                                <th>Delete</th>
                            </tr>
                        </thead>
                        <tbody>

                            <?php
                                    $payments = "SELECT * FROM withdraw_logs";
                                    $payments_run = mysqli_query($con, $payments);

                                    if(mysqli_num_rows($payments_run) > 0)
                                    {
                                        foreach($payments_run as $payments_item)
                                        {
                                            $meth_id = $payments_item['method_id'];
                                            $check_meth_query = "SELECT * FROM withdraw_methods WHERE id='$meth_id' LIMIT 1 ";
                                            $meth_res = mysqli_query($con, $check_meth_query);
                                            $res_data = mysqli_fetch_array($meth_res);
                                            $method_name = $res_data['name'];


                                            ?>
                                                <tr>
                                                    <td><?=$payments_item['id']?></td>
                                                    <td><?=$payments_item['user_id']?></td>
                                                    <td><?=$method_name?></td>
                                                    <td><?=$payments_item['transaction_id']?></td>
                                                    <td><?=$payments_item['amount']?></td>
                                                    <td>$ <?=$payments_item['charges']?></td>
                                                    <td>$ <?=$payments_item['net_amount']?></td>
                                                    <td><?=$payments_item['send_details']?> BTC</td>
                                                    <td><?=$payments_item['message']?></td>
                                                    <td>
                                                        <?=$payments_item['status'] == '1' ? 'Paid':'Pending'?>
                                                    </td>
                                                    <td>
                                                        <a href="edit-withdraw-log.php?id=<?=$payments_item['id']?>" class="btn btn-primary">Edit</a>
                                                    </td>
                                                    <td>
                                                        <form action="update-code.php" method="POST">
                                                            <button type="submit" name="withlog_delete_btn" value="<?=$payments_item['id']?>" class="btn btn-danger">Delete</button>
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