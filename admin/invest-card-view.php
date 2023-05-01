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
                    <h4>Investment Plans</h4>
                </div>
                <div class="card-body">

                    <div class="row">

                                <?php
                                    $plans = "SELECT * FROM plans WHERE status!='2' ";
                                    $plans_run = mysqli_query($con, $plans);

                                    if(mysqli_num_rows($plans_run) > 0)
                                    {
                                        foreach($plans_run as $plans_item)
                                        {
                                            ?>
                                                    <div class="col-sm-6 mt-2">
                                                        <div class="card text-center" style="width: 25rem;">
                                                            <img src="../uploads/plans/<?=$plans_item['image']?>" class="card-img-top" alt="<?=$plans_item['image']?>">
                                                            <div class="card-body">
                                                                <h5 class="card-title"><?=$plans_item['name']?></h5>
                                                                <h5 cclass="card-header">ROI <?=$plans_item['percent']?>%</h5>
                                                                <ul class="list-group list-group-flush">
                                                                    <li class="list-group-item">Minimum Deposit: <?=$plans_item['minimum']?></li>
                                                                    <li class="list-group-item">Maximum Deposit: <?=$plans_item['maximum']?></li>
                                                                    <li class="list-group-item">Duration: <?=$plans_item['time']?> days</li>
                                                                    <li class="list-group-item"><?=$plans_item['status'] == '1' ? 'Active':'Not Active'?></li>
                                                                </ul>
                                                                <p class="card-header">Capital Return - End of Term</p>
                                                                <div class="mt-3">
                                                                        <a type="submit" href="invest-pay.php?id=<?=$plans_item['id']?>" class="btn btn-primary">Invest Now</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                            <?php
                                        }
                                    }
                                    else
                                    {
                                        ?>
                                            <div class="card" style="width: 18rem;">
                                                <img src="..." class="card-img-top" alt="...">
                                                <div class="card-body">
                                                    <p class="card-text">No Record Found</p>
                                                </div>
                                            </div>
                                        <?php
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