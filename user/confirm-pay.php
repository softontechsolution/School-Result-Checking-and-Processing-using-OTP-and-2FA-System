<?php
session_cache_limiter('private, must-revalidate');
session_start();
include('config/dbcon.php');
include('config/func.php');
include('logincode.php');
include('authentication.php');
include('includes/header.php');

$_SESSION['level'] = $_GET['level']; 
$_SESSION['csem'] = $_GET['csem'];
$_SESSION['matnum'] = $_GET['matnum'];
?>

<div class="container-fluid px-4">

    <!-- Content Row -->
    <div class="row mt-4">
        <div class="col-md-12">
            
            <?php include('message.php'); ?>

            <div class="card text-center">
                <div class="card-header text-center">
                    <h4>Result GPA</h4>
                </div>
                <div class="card-body">
                    <div class="card-header text-center mt-mb-6">
                        <i class="bi bi-sheet"></i>
                        Student GPA Displayed Below
                    </div>

                    <div class="row">

                    <?php
                            
                            $level = $_SESSION['level'];
                            $csem = $_SESSION['csem'];
                            $matnum = $_SESSION['matnum'];
                            //echo $level;

                            $query = "SELECT SUM(c_unit) as total FROM coursetbl WHERE level = '$level' AND semester = '$csem'";
                            $query_run = mysqli_query($con, $query);
                            $row = mysqli_fetch_array($query_run);
                            $unit_sum = $row['total'];
                            //echo $unit_sum;

                            $scorequery = "SELECT SUM(total_point) as counts FROM score_sheet WHERE reg_no = '$matnum' AND level = '$level' AND semester = '$csem'";
                            $scorequery_run = mysqli_query($con, $scorequery);
                            $rows = mysqli_fetch_array($scorequery_run);
                            $point_sum = $rows['counts'];
                           // echo $point_sum;
                          
                            $gpa = $point_sum / $unit_sum;
                            $_SESSION['gpa'] = $gpa;
                            $_SESSION['level'] = $level; 
                            $_SESSION['csem'] = $csem;
                            $_SESSION['matnum'] = $matnum;
             

                                    ?>
                                                <div class="col-sm-6 mt-2 ">
                                                    <div class="card border-info text-center" style="width: 30rem;">
                                                        <div class="card-body">
                                                            <h5 class="card-title"><?=$matnum?></h5>
                                                            <h5 class="card-title"><?=$csem?></h5>
                                                            <h5 class="card-title"><?=$level?></h5>
                                                            <h6 cclass="card-header">Below is your GPA for the semester</h6>
                                                            <ul class="list-group list-group-flush">
                                                                <li class="list-group-item">GPA : <?=$gpa?></li>
                                                                <li class="list-group-item">Total Grade Point : <?=$point_sum?></li>
                                                                <li class="list-group-item">Total Course Units : <?=$unit_sum?></li>
                                                          </ul>
                                                          <div class="mt-2">                                        
                                                            <button onClick="window.print()" name="print" class="btn btn-primary">Print</button>
                                                          </div>
                                                          <form action="update-code.php" method="POST">
                                                            <div class="col-md-9 my-5 mx-auto text-center">
                                                                <button  type="submit" name="save_gpa" class="btn btn-primary">Save GPA</button>
                                                            </div> 

                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            <?php
                                     
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