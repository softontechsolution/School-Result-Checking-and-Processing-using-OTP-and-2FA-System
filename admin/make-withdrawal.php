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
                    <h4>Make Withdrawal</h4>
                </div>
                <div class="card-body">

                        <div class="card-header text-center mt-mb-6">
                            <i class="bi bi-wallet2"></i>
                            Choose withdrawal method
                        </div>

                            <form action="update-code.php" method="POST">


                                <select name="with_type" required id="currency_one" class="form-select col-md-9 my-3 mx-auto text-center" aria-label=".form-select-lg example">
                                    <option value="" selected>Select your preferred withdrawal method <i class="bi bi-arrow-down-circle"></i></option>
                                    <option value="BTC">Bitcoin <i class="bi bi-currency-bitcoin"></i></option>
                                    <option value="BTF">Bank Transfer <img src="https://img.icons8.com/material-rounded/24/000000/tether.png"/></option>
                                    <option value="PP">PayPal <i class="fa-brands fa-ethereum"></i></option>
                                </select>

                                    <div id="ifYesUsd" class="col-md-9 my-3 mx-auto text-center">
                                        <label for="">Enter Amount in USD <i class="bi bi-currency-dollar"></i></label>
                                        <input type="number" placeholder=" Enter Amount in USD" name="usd_amount" id="usd" required class="form-control">
                                        <div class="rate" id="rate_two"></div>
                                    </div>
                                    <div class="form-floating col-md-9 my-3 mx-auto">
                                        <textarea class="form-control" name="details" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px"></textarea>
                                        <label for="floatingTextarea2">Enter bank name,account,routing number / BEP2, BEP20 Wallet Address..</label>
                                    </div>

                                    <div id="ifYesUsd" class="col-md-9 my-3 mx-auto text-center">
                                        <label for="">Enter any message</label>
                                        <input type="text" placeholder=" type your message here..." name="message" id="usd" required class="form-control">
                                        <div class="rate" id="rate_two"></div>
                                    </div>

                                    <div class="col-md-9 my-5 mx-auto text-center">
                                        <button  type="submit" name="make_withd" class="btn btn-primary">Make Withdrawal</button>
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