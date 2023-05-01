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
                    <h4>Make Payment</h4>
                    <a href="invest-card-view.php" class="btn btn-danger float-end">BACK</a>
                </div>
                <div class="card-body">

                        <div class="card-header text-center mt-mb-6">
                            <i class="bi bi-wallet2"></i>
                            Choose payment method
                        </div>

                        <?php
                            if(isset($_GET['id']))
                            {
                                $plan_id = $_GET['id'];
                            }
                        ?>

                            <form action="update-code.php" method="POST" enctype="multipart/form-data">
                                <input type="hidden" name="plan_id" value="<?=$plan_id;?>">


                                <select name="payment_type" required id="currency_one" class="form-select col-md-9 my-3 mx-auto text-center" aria-label=".form-select-lg example">
                                    <option value="" selected>Select a payment type below <i class="bi bi-arrow-down-circle"></i></option>
                                    <option value="BTC">Bitcoin <i class="bi bi-currency-bitcoin"></i></option>
                                    <option value="USDT">Tether <img src="https://img.icons8.com/material-rounded/24/000000/tether.png"/></option>
                                    <option value="ETH">Ethereum <i class="fa-brands fa-ethereum"></i></option>
                                </select>

                                    <div id="ifYesUsd" class="col-md-9 my-3 mx-auto text-center">
                                        <label for="">Enter Amount in USD <i class="bi bi-currency-dollar"></i></label>
                                        <input type="number" placeholder="USD" name="usd_amount" id="usd" required class="form-control">
                                        <div class="rate" id="rate_two"></div>
                                    </div>
                                    <div class="col-md-9 my-5 mx-auto text-center">
                                        <button  type="submit" name="make_pay" class="btn btn-primary">Make Payment</button>
                                    </div> 

                            </form>

                </div>
            </div>
        </div>
    </div>

</div>

<?php
include('includes/footer.php');
include('includes/scripts.php');
?>