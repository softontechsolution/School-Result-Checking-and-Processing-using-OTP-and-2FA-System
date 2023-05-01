<?php
session_cache_limiter('private, must-revalidate');
session_start();
include('config/dbcon.php');
include('config/func.php');
include('authentication.php');
include('config/check.php');
include('includes/header.php');
?>

<div class="container-fluid px-4">

    <!-- Content Row -->
    <div class="row mt-4">
        <div class="col-md-12">
            
            <?php include('message.php'); ?>

            <div class="card text-center">
                <div class="card-header text-center">
                    <h4>Confirm Payment</h4>
                </div>
                <div class="card-body">
                    <div class="card-header text-center mt-mb-6">
                        <i class="bi bi-wallet2"></i>
                        Confirm Details Below Before Making Deposit
                    </div>

                    <div class="row">

                    <?php
                            $transac_id = random_strings(11);
                        
                            
                            if(isset($_SESSION['auth']))
                            {
                                $email = $_SESSION['auth_user']['user_email'];

                                $user_query = "SELECT id FROM users WHERE email = '$email'";
                                $user_query_run = mysqli_query($con, $user_query);

                                if(mysqli_num_rows($user_query_run) > 0)
                                {
                                    foreach($user_query_run as $data){
                                        $user_id = $data['id'];
                                    }
                                }
                            }

                            $query = "SELECT * FROM temp_pay WHERE user_id = '$user_id' AND status = 1";
                            $query_run = mysqli_query($con, $query);

                            if(mysqli_num_rows($query_run) > 0)
                            { 
                               
                                while($row = $query_run->fetch_assoc())
                                {
                                    $id =  $row['id'];
                                    $pay_type = $row['payment_type'];
                                    $usd_amount = $row['usd_amount'];
                                    $plan_id = $row['plan_id'];
                                    $user_id = $row['user_id'];

                                    $method_query = "SELECT * FROM payment_methods WHERE currency = '$pay_type'";
                                    $method_query_run = mysqli_query($con, $method_query);

                                    if(mysqli_num_rows($method_query_run) > 0)
                                    {
                                        while($meth_row = $method_query_run->fetch_assoc())
                                        {
                                            $meth_id =  $meth_row['id'];
                                            $meth_name =  $meth_row['name'];
                                            $meth_image =  $meth_row['image'];
                                            $meth_rate =  $meth_row['rate'];
                                            $meth_percent =  $meth_row['percent'];
                                            $meth_addy =  $meth_row['account'];
                                            $meth_currency =  $meth_row['currency'];
                                        
                                        $charges = $meth_percent * $usd_amount / 100;
                                        $charges_res = $charges + 2;

                                        $net_amount = $charges_res + $usd_amount;
                                        $btc_amount = $meth_rate * $net_amount;
                                    
                                    $_SESSION['user_pay'] = $user_id;
                                    $_SESSION['plan_pay'] = $plan_id;
                                    $_SESSION['usd_amount'] = $usd_amount;
                                    $_SESSION['trx_id'] = $transac_id;
                                    $_SESSION['pay_type'] = $pay_type;
                                    $_SESSION['pay_charges'] = $charges_res;
                                    $_SESSION['pay_amount'] = $net_amount;
                                    $_SESSION['pay_btc'] = $btc_amount;
                                    $_SESSION['pay_addy'] = $meth_addy;
                                    $_SESSION['email'] = $email;
                                
                                            

                                    ?>
                                                <div class="col-sm-6 mt-2">
                                                    <div class="card border-info text-center" style="width: 30rem;">
                                                        <div class="card-body">
                                                            <h5 class="card-title">Amount = $<?=$usd_amount?> USD</h5>
                                                            <h5 class="card-title">Charges = $<?=$charges_res?> USD</h5>
                                                            <h5 class="card-title">Net Amount = $<?=$net_amount?> USD</h5>
                                                            <h5 class="card-title">$<?=$net_amount?> USD = <?=$btc_amount?> <?=$meth_currency?></h5>
                                                            <h6 cclass="card-header">Pay the above amount of bitcoin to the address below</h6>
                                                            <div class="text-center">
                                                                <img src="../uploads/payment_methods/<?=$meth_image?>" class="rounded" alt="<?=$meth_image?>" width="4rem" height="2rem">
                                                            </div>
                                                            <ul class="list-group list-group-flush">
                                                                <li class="list-group-item">Wallet Address : <?=$meth_addy?></li>
                                                                <li class="list-group-item">Rate : 1 USD = <?=$meth_rate?><?=$meth_currency?></li>
                                                                <li class="list-group-item">Transaction ID : <?=$transac_id?></li>
                                                            </ul>
                                                            <p class="card-header">Upload Payment Proof for Confirmation</p>
                                                            <form action="update-code.php" method="POST" enctype="multipart/form-data">
                                                                <div class="col-md-6 my-3 custom-file">
                                                                    <input type="file" name="confirm_image" required class="form-control">
                                                                </div>
                                                    
                                                                <div class=" d-grid mx-auto col-6 col-md-6 my-3">
                                                                    <button type="submit" name="confirm_payment" class="btn btn-primary">Confirm Payment</button>
                                                                </div> 
                                                            </form>
                                                
                                                        </div>
                                                    </div>
                                                </div>
                                            <?php
                                        }
                                    }
                                    else
                                    {
                                        $_SESSION['message'] = " Please Choose a Correct Payment Method";
                                        header("Location: invest-pay.php");
                                        exit(0);
                                    }
                                }
                            }
                                ?>



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