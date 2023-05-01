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
                    <h4>View Investment Plans</h4>
                    <a href="plans-add.php" class="btn btn-primary float-end">Add Plans</a>
                </div>
                <div class="card-body">

                <div class="table-responsive">
                    <table class="table table-borderless table-striped table-light">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>image</th>
                                <th>Min</th>
                                <th>Max</th>
                                <th>Percent</th>
                                <th>Duration</th>
                                <th>Status</th>
                                <th>Edit</th>
                                <th>Delete</th>
                            </tr>
                        </thead>
                        <tbody>

                            <?php
                                $plans = "SELECT * FROM plans WHERE status!='2' ";
                                $plans_run = mysqli_query($con, $plans);

                                if(mysqli_num_rows($plans_run) > 0)
                                {
                                    foreach($plans_run as $plans_item)
                                    {
                                        ?>
                                            <tr>
                                                <td><?=$plans_item['id']?></td>
                                                <td><?=$plans_item['name']?></td>
                                                <td><img src="../uploads/plans/<?=$plans_item['image']?>" alt="<?=$plans_item['image']?>" width="60px" height="60px"></td>
                                                <td><?=$plans_item['minimum']?></td>
                                                <td><?=$plans_item['maximum']?></td>
                                                <td><?=$plans_item['percent']?>%</td>
                                                <td><?=$plans_item['time']?>days</td>
                                                <td>
                                                    <?=$plans_item['status'] == '1' ? 'Active':'Not Active'?>
                                                </td>
                                                <td>
                                                    <a href="edit-plans.php?id=<?=$plans_item['id']?>" class="btn btn-primary">Edit</a>
                                                </td>
                                                <td>
                                                    <form action="update-code.php" method="POST">
                                                        <button type="submit" name="plan_delete_btn" value="<?=$plans_item['id']?>" class="btn btn-danger">Delete</button>
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