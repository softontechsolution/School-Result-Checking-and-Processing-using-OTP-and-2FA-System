<?php
session_cache_limiter('private, must-revalidate');
session_start();
include('config/dbcon.php');
include('authentication.php');
include('config/check.php');
include('includes/header.php');
?>

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h4 class="h3 mb-0 text-gray-800">Student Score Sheet</h4>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item active">Dashboard</li>
            <li class="breadcrumb-item">Student Score</li>
        </ol>
        <a href="make-withdrawal.php" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
    </div>
        <!-- Content Row -->
        <div class="row">

            <div class="col-md-12">
                
                <?php include('message.php'); ?>

                <div class="card">
                    <div class="card-header">
                        <h4>Edit Score Details</h4>
                        <a href="score-modal.php" class="btn btn-danger float-end">BACK</a>
                    </div>
                    <div class="card-body">

                        <?php
                        if(isset($_GET['id']))
                        {
                            $user_id = $_GET['id'];
                            $users = "SELECT * FROM score_sheet WHERE sn='$user_id' ";
                            $users_run = mysqli_query($con, $users);

                            if(mysqli_num_rows($users_run) > 0)
                            {
                                foreach($users_run as $user)
                                {
                                ?>

                                    <form action="update-code.php" method="POST" enctype="multipart/form-data">
                                        <input type="hidden" name="c_id" value="<?=$user['sn'];?>">

                                        <div class="row">
                                            <div class="col-md-6 mb-3">
                                                <label for="">Enter Matriculation Number</label>
                                                <input type="text" name="matnum" value="<?=$user['reg_no'];?>" required class="form-control">
                                            </div>
                                            <div class="col-md-6 mb-3">
                                                <label for="">Enter Course Title</label>
                                                <input type="text" name="ctitle" value="<?=$user['c_title'];?>" required class="form-control">
                                            </div>
                                            <div class="col-md-6 mb-3">
                                                <label for="">Enter Course Code</label>
                                                <input type="text" name="ccode" value="<?=$user['c_code'];?>" required class="form-control">
                                            </div>
                                            <div class="col-md-6 mb-3">
                                                <label for="">Enter First Assesment Score</label>
                                                <input type="number" name="fscore" value="<?=$user['first_asses'];?>" required class="form-control">
                                            </div>
                                            <div class="col-md-6 mb-3">
                                                <label for="">Enter Second Assesment Score</label>
                                                <input type="number" name="sscore" value="<?=$user['second_asses'];?>" required class="form-control">
                                            </div>
                                            <div class="col-md-6 mb-3">
                                                <label for="">Enter Exam Score</label>
                                                <input type="number" name="escore" value="<?=$user['exam'];?>" required class="form-control">
                                            </div>
                                            <div class="col-md-6 mb-3">
                                                <label for="">Enter Total</label>
                                                <input type="number" name="tscore" value="<?=$user['total'];?>" required class="form-control">
                                            </div>
                                            <div class="col-md-6 mb-3">
                                                <label for="">Enter Grade Point</label>
                                                <input type="text" name="gpoint" value="<?=$user['grade_point'];?>"  required class="form-control">
                                            </div>
                                            <div class="col-md-6 mb-3">
                                                <label for="">Enter Total Point</label>
                                                <input type="text" name="tpoint" value="<?=$user['total_point'];?>"  required class="form-control">
                                            </div>
                                            <div class="col-md-6 mb-3">
                                                <label for="">Grade Letter</label>
                                                <select id="gletter" name="gletter" required class="form-control">
                                                    <option>Please Select Grade</option>
                                                    <option value="A" <?=$user['grade_letter'] == 'A'? 'selected':'' ?> >A</option>
                                                    <option value="AB" <?=$user['grade_letter'] == 'AB'? 'selected':'' ?> >AB</option>
                                                    <option value="B" <?=$user['grade_letter'] == 'B'? 'selected':'' ?> >B</option>
                                                    <option value="BC" <?=$user['grade_letter'] == 'BC'? 'selected':'' ?> >BC</option>
                                                    <option value="C" <?=$user['grade_letter'] == 'C'? 'selected':'' ?> >C</option>
                                                    <option value="D" <?=$user['grade_letter'] == 'D'? 'selected':'' ?> >D</option>
                                                    <option value="E" <?=$user['grade_letter'] == 'E'? 'selected':'' ?> >E</option>
                                                    <option value="F" <?=$user['grade_letter'] == 'F'? 'selected':'' ?> >F</option>
                                                </select>
                                            </div>
                                            <div class="col-md-6 mb-3">
                                                <label for="">Level</label>
                                                <select id="level" name="level" required class="form-control">
                                                    <option>Please Select Level</option>
                                                    <option value="ND1" <?=$user['level'] == 'ND1'? 'selected':'' ?> >ND1</option>
                                                    <option value="ND2" <?=$user['level'] == 'ND2'? 'selected':'' ?> >ND2</option>
                                                    <option value="HND1" <?=$user['level'] == 'HND1'? 'selected':'' ?> >HND1</option>
                                                    <option value="HND2" <?=$user['level'] == 'HND2'? 'selected':'' ?> >HND2</option>
                                                </select>
                                            </div>
                                            <div class="col-md-6 mb-3">
                                                <label for="">Semester</label>
                                                <select id="ssem" name="ssem" class="form-control">
                                                    <option>Please Select Semester</option>
                                                    <option value="First Semester" <?=$user['semester'] == 'First Semester'? 'selected':'' ?> >First Semester</option>
                                                    <option value="Second Semester"  <?=$user['semester'] == 'Second Semester'? 'selected':'' ?> >Second Semester</option>
                                                </select>
                                            </div>
                                            <div class="col-md-12 mb-3 mt-4">
                                                <button type="submit" name="update_score" class="btn btn-primary">Update Score</button>
                                            </div> 
                                        </div>

                                    </form>
                                <?php
                                }
                            }
                            else
                            {
                                ?>
                                <h4>No Record Found</h4>
                                <?php
                            }

                        }
                            

                        ?>

                    </div>
                </div>
            </div>
        </div>


<?php
include('includes/footer.php');
include('includes/scripts.php');
?>