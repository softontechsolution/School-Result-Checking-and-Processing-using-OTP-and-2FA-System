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
                    <h4>Deposit Images</h4>
                </div>
                <div class="card-body">

                <div class="table-responsive">
                    <table class="table table-borderless table-striped table-light">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Transaction ID</th>
                                <th>Image</th>
                                <th>Delete</th>
                            </tr>
                        </thead>
                        <tbody>

                            <?php
                                $deposit_img = "SELECT * FROM deposit_image";
                                $deposit_img_run = mysqli_query($con, $deposit_img);

                                if(mysqli_num_rows($deposit_img_run) > 0)
                                {
                                    foreach($deposit_img_run as $deposit_item)
                                    {
                                        ?>
                                            <tr>
                                                <td><?=$deposit_item['id']?></td>
                                                <td><?=$deposit_item['transaction_id']?></td>
                                                <td><img src="../uploads/confirm_pay/<?=$deposit_item['image']?>" alt="<?=$deposit_item['image']?>" width="66px" height="60px"></td>
                                                <td>
                                                    <form action="update-code.php" method="POST">
                                                        <button type="submit" name="dimg_delete_btn" value="<?=$deposit_item['id']?>" class="btn btn-danger">Delete</button>
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