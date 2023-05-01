<?php
session_cache_limiter('private, must-revalidate');
session_start();
include('config/dbcon.php');
include('authentication.php');
include('logincode.php');
include('includes/header.php');

$_SESSION['level'] = $_GET['level']; 
$_SESSION['csem'] = $_GET['csem']; 
?>

<div class="container-fluid px-4">

    <!-- Content Row -->
    <div class="row mt-4">
        <div class="col-md-12">
            
            <?php include('message.php'); ?>

            <div class="card">
                <div class="card-header">
                    <h4>Course Units</h4>
                </div>
                <div class="card-body">

                    <div class="row">

                                <?php
                                    $level = $_SESSION['level'];
                                    $csem = $_SESSION['csem'];
                                    $query = "SELECT * FROM `coursetbl` WHERE level = '$level' AND semester = '$csem'";
                                    $query_run = mysqli_query($con, $query);

                                    if(mysqli_num_rows($query_run) > 0)
                                    {
                                        foreach($query_run as $row)
                                        {
                                            ?>
                                                    <div class="col-sm-6 mt-2">
                                                        <div class="card text-center" style="width: 25rem;">
                                                            <div class="card-body">
                                                                <h5 class="card-title"><?=$row['c_title']?></h5>
                                                                <h5 cclass="card-header"> <?=$row['c_code']?></h5>
                                                                <ul class="list-group list-group-flush">
                                                                    <li class="list-group-item">Course Unit: <?=$row['c_unit']?></li>
                                                                    <li class="list-group-item">Level: <?=$row['level']?></li>
                                                                    <li class="list-group-item">Semester: <?=$row['semester']?></li>
                                                                </ul>
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