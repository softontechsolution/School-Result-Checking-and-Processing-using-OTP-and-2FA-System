<?php
session_start();
include('config/dbcon.php');
include('authentication.php');
include('config/check.php');
include('includes/header.php');
?>

    <?php include('message.php'); ?>
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4 float-end">
        <a href="make-withdrawal.php" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                class="fas fa-download fa-sm text-white-50"></i> Make Withdrawal</a>
    </div>
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <a href="invest-card-view.php" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                class="fas fa-download fa-sm text-white-50"></i> Make Deposit</a>
    </div>
    <!-- Content Row -->
    <div class="row">

                                            <!-- Earnings (Monthly) Card Example -->
                                            <div class="col-xl-3 col-md-6 mb-4">
                                                <div class="card border-left-primary shadow h-100 py-2">
                                                    <div class="card-body">
                                                        <div class="row no-gutters align-items-center">
                                                            <div class="col mr-2">
                                                                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                                    Users
                                <?php
                                        $dash_bal = "SELECT * FROM coursetbl";
                                        $dash_bal_run = mysqli_query($con, $dash_bal);
                                        if(mysqli_num_rows($dash_bal_run) > 0)
                                        {
                                            $dash_row = mysqli_num_rows($dash_bal_run);

                                            ?>

                                            </div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?=$dash_row?></div>
                                           

                                                        </div>
                                                        <div class="col-auto">
                                                            <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                            <?php
                                        }

                                ?>

                                        <!-- Earnings (Monthly) Card Example -->
                                        <div class="col-xl-3 col-md-6 mb-4">
                                            <div class="card border-left-success shadow h-100 py-2">
                                                <div class="card-body">
                                                    <div class="row no-gutters align-items-center">
                                                        <div class="col mr-2">
                                                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                                                Investments
                                                            
                                    <?php
                                        $dash_bal = "SELECT * FROM studenttbl";
                                        $dash_bal_run = mysqli_query($con, $dash_bal);
                                        if(mysqli_num_rows($dash_bal_run) > 0)
                                        {
                                            $dash_row = mysqli_num_rows($dash_bal_run);

                                            ?>
                                                            </div>
                                                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?=$dash_row?></div>
                                                        </div>
                                                        <div class="col-auto">
                                                            <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    <?php
                                        }

                                ?>

        <div class="card">
                <div class="card-header">
                    <h4>Bitcoin Market</h4>
                </div>
                <div class="card-body">
                    <div class="row">
                         <div class="col-sm-12 mt-2">
                            <div class="card border-info text-center" style="width: 60rem;">
                                <div class="card-body">
                                <script type="text/javascript">
                                    baseUrl = "https://widgets.cryptocompare.com/";
                                    var scripts = document.getElementsByTagName("script");
                                    var embedder = scripts[ scripts.length - 1 ];
                                    var cccTheme = {"General":{"background":"#333","borderColor":"#545454","borderRadius":"4px 4px 0 0"},"Header":{"background":"#000","color":"#FFF"},"Followers":{"background":"#f7931a","color":"#FFF","borderColor":"#e0bd93","counterBorderColor":"#fdab48","counterColor":"#f5d7b2"},"Data":{"priceColor":"#FFF","infoLabelColor":"#CCC","infoValueColor":"#CCC"},"Chart":{"fillColor":"rgba(86,202,158,0.5)","borderColor":"#56ca9e"},"Conversion":{"background":"#000","color":"#999"}};
                                    (function (){
                                    var appName = encodeURIComponent(window.location.hostname);
                                    if(appName==""){appName="local";}
                                    var s = document.createElement("script");
                                    s.type = "text/javascript";
                                    s.async = true;
                                    var theUrl = baseUrl+'serve/v1/coin/chart?fsym=BTC&tsym=USD';
                                    s.src = theUrl + ( theUrl.indexOf("?") >= 0 ? "&" : "?") + "app=" + appName;
                                    embedder.parentNode.appendChild(s);
                                    })();
                                </script>
                                </div>
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