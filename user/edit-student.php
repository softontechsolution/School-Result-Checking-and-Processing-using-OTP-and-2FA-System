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
        <h4 class="h3 mb-0 text-gray-800">Student Details</h4>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item active">Dashboard</li>
            <li class="breadcrumb-item">Student</li>
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
                        <h4>Edit Student Details</h4>
                        <a href="make-withdrawal.php" class="btn btn-danger float-end">BACK</a>
                    </div>
                    <div class="card-body">

                        <?php
                        if(isset($_GET['id']))
                        {
                            $user_id = $_GET['id'];
                            $users = "SELECT * FROM studenttbl WHERE sn='$user_id' ";
                            $users_run = mysqli_query($con, $users);

                            if(mysqli_num_rows($users_run) > 0)
                            {
                                foreach($users_run as $user)
                                {
                                ?>

                                    <form action="update-code.php" method="POST" enctype="multipart/form-data">
                                        <input type="hidden" name="s_id" value="<?=$user['sn'];?>">

                                        <div class="row">
                                            <div class="col-md-6 mb-3">
                                                <label for="">Registration Number</label>
                                                <input type="text" name="regno" value="<?=$user['reg_no'];?>" required class="form-control">
                                            </div>
                                            <div class="col-md-6 mb-3">
                                                <label for="">Full Name</label>
                                                <input type="text" name="name" value="<?=$user['fullname'];?>" required class="form-control">
                                            </div>
                                            <div class="col-md-6 mb-3">
                                                <label for="">Email</label>
                                                <input type="Email" name="email" value="<?=$user['email'];?>" required class="form-control">
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
                                                <label for="">Department</label>
                                                <select id="dept" name="dept" class="form-control">
                                                    <option value="">Please Select Department</option>
                                                    <option value="ACCOUNTANCY"<?=$user['dept'] == 'ACCOUNTANCY'? 'selected':'' ?>>ACCOUNTANCY</option>
                                                    <option value="AGRICULTURAL AND BIO-ENVIRONMENTAL ENGINEERING TECHNOLOGY"<?=$user['dept'] == 'AGRICULTURAL AND BIO-ENVIRONMENTAL ENGINEERING TECHNOLOGY'? 'selected':'' ?>>AGRICULTURAL AND BIO-ENVIRONMENTAL ENGINEERING TECHNOLOGY</option>
                                                    <option value="AGRICULTURAL TECHNOLOGY"<?=$user['dept'] == 'AGRICULTURAL TECHNOLOGY'? 'selected':'' ?>>AGRICULTURAL TECHNOLOGY</option>
                                                    <option value="ARCHITECTURAL TECHNOLOGY"<?=$user['dept'] == 'ARCHITECTURAL TECHNOLOGY'? 'selected':'' ?>>ARCHITECTURAL TECHNOLOGY</option>
                                                    <option value="BANKING AND FINANCE"<?=$user['dept'] == 'BANKING AND FINANCE'? 'selected':'' ?>>BANKING AND FINANCE</option>
                                                    <option value="BIOCHEMISTRY/CHEMISTRY"<?=$user['dept'] == 'BIOCHEMISTRY/CHEMISTRY'? 'selected':'' ?>>BIOCHEMISTRY/CHEMISTRY</option>
                                                    <option value="BUILDING TECHNOLOGY"<?=$user['dept'] == 'BUILDING TECHNOLOGY'? 'selected':'' ?>>BUILDING TECHNOLOGY</option>
                                                    <option value="BUSINESS ADMINISTRATION AND MANAGEMENT"<?=$user['dept'] == 'BUSINESS ADMINISTRATION AND MANAGEMENT'? 'selected':'' ?>>BUSINESS ADMINISTRATION AND MANAGEMENT</option>
                                                    <option value="CHEMICAL ENGINEERING TECHNOLOGY"<?=$user['dept'] == 'CHEMICAL ENGINEERING TECHNOLOGY'? 'selected':'' ?>>CHEMICAL ENGINEERING TECHNOLOGY</option>
                                                    <option value="CIVIL ENGINEERING TECHNOLOGY"<?=$user['dept'] == 'CIVIL ENGINEERING TECHNOLOGY'? 'selected':'' ?>>CIVIL ENGINEERING TECHNOLOGY</option>
                                                    <option value="COMPUTER SCIENCE"<?=$user['dept'] == 'COMPUTER SCIENCE'? 'selected':'' ?>>COMPUTER SCIENCE</option>
                                                    <option value="CRIME MANAGEMENT AND CONTROL"<?=$user['dept'] == 'CRIME MANAGEMENT AND CONTROL'? 'selected':'' ?>>CRIME MANAGEMENT AND CONTROL</option>
                                                    <option value="ELECTRICAL AND ELECTRONIC ENGINEERING TECHNOLOGY" <?=$user['dept'] == 'ELECTRICAL AND ELECTRONIC ENGINEERING TECHNOLOGY'? 'selected':'' ?>>ELECTRICAL AND ELECTRONIC ENGINEERING TECHNOLOGY</option>
                                                    <option value="ENVIRONMENTAL SCIENCE AND MANAGEMENT TECHNOLOGY"<?=$user['dept'] == 'ENVIRONMENTAL SCIENCE AND MANAGEMENT TECHNOLOGY'? 'selected':'' ?>>ENVIRONMENTAL SCIENCE AND MANAGEMENT TECHNOLOGY</option>
                                                    <option value="ESTATE MANAGEMENT"<?=$user['dept'] == 'ESTATE MANAGEMENT'? 'selected':'' ?>>ESTATE MANAGEMENT</option>
                                                    <option value="LIBRARY AND INFORMATION SCIENCE"<?=$user['dept'] == 'LIBRARY AND INFORMATION SCIENCE'? 'selected':'' ?>>LIBRARY AND INFORMATION SCIENCE</option>
                                                    <option value="MARKETING"<?=$user['dept'] == 'MARKETING'? 'selected':'' ?>>MARKETING</option>
                                                    <option value="MASS COMMUNICATION"<?=$user['dept'] == 'MASS COMMUNICATION'? 'selected':'' ?>>MASS COMMUNICATION</option>
                                                    <option value="MATHEMATICS AND STATISTICS"<?=$user['dept'] == 'MATHEMATICS AND STATISTICS'? 'selected':'' ?>>MATHEMATICS AND STATISTICS</option>
                                                    <option value="MECHANICAL ENGINEERING TECHNOLOGY"<?=$user['dept'] == 'MECHANICAL ENGINEERING TECHNOLOGY'? 'selected':'' ?>>MECHANICAL ENGINEERING TECHNOLOGY</option>
                                                    <option value="Microbiology/Biology"<?=$user['dept'] == 'Microbiology/Biology'? 'selected':'' ?>>Microbiology/Biology</option>
                                                    <option value="OFFICE TECHNOLOGY AND MANAGEMENT"<?=$user['dept'] == 'OFFICE TECHNOLOGY AND MANAGEMENT'? 'selected':'' ?>>OFFICE TECHNOLOGY AND MANAGEMENT</option>
                                                    <option value="PHYSICS AND ELECTRONICS"<?=$user['dept'] == 'PHYSICS AND ELECTRONICS'? 'selected':'' ?>>PHYSICS AND ELECTRONICS</option>
                                                    <option value="PPUBLIC ADMINISTRATION"<?=$user['dept'] == 'PPUBLIC ADMINISTRATION'? 'selected':'' ?>>PUBLIC ADMINISTRATION</option>
                                                    <option value="QUANTITY SURVEYING"<?=$user['dept'] == 'QUANTITY SURVEYING'? 'selected':'' ?>>QUANTITY SURVEYING</option>
                                                    <option value="SCIENCE LABORATORY TECHNOLOGY"<?=$user['dept'] == 'SCIENCE LABORATORY TECHNOLOGY'? 'selected':'' ?>>SCIENCE LABORATORY TECHNOLOGY</option>
                                                    <option value="SURVEY AND GEO-INFORMERTICS"<?=$user['dept'] == 'SURVEY AND GEO-INFORMERTICS'? 'selected':'' ?>>SURVEY AND GEO-INFORMERTICS</option>
                                                    <option value="URBAN AND REGIONAL PLANNING"<?=$user['dept'] == 'URBAN AND REGIONAL PLANNING'? 'selected':'' ?>>URBAN AND REGIONAL PLANNING</option>
                                                    <option value="HOSPITALITY MANAGEMENT"<?=$user['dept'] == 'HOSPITALITY MANAGEMENT'? 'selected':'' ?>>HOSPITALITY MANAGEMENT</option>
                                                    <option value="APPLIED CHEMISTRY"<?=$user['dept'] == 'APPLIED CHEMISTRY'? 'selected':'' ?>>APPLIED CHEMISTRY</option>
                                                    <option value="ART AND INDUSTRIAL DESIGN"<?=$user['dept'] == 'ART AND INDUSTRIAL DESIGN'? 'selected':'' ?>>ART AND INDUSTRIAL DESIGN</option>
                                                </select>
                                            </div>
                                            <div class="col-md-6 mb-3">
                                                <label for="">School</label>
                                                <select id="school" name="school" class="form-control">
                                                    <option value="">Please Select School</option>
                                                    <option value="SCHOOL OF BUSINESS STUDIES"<?=$user['sch'] == 'SCHOOL OF BUSINESS STUDIES'? 'selected':'' ?>>SCHOOL OF BUSINESS STUDIES</option>
                                                    <option value="SCHOOL OF ENVIRONMENTAL STUDIES"<?=$user['sch'] == 'SCHOOL OF ENVIRONMENTAL STUDIES'? 'selected':'' ?>>SCHOOL OF ENVIRONMENTAL STUDIES</option>
                                                    <option value="SCHOOL OF APPLIED SCIENCES"<?=$user['sch'] == 'SCHOOL OF APPLIED SCIENCES'? 'selected':'' ?>>SCHOOL OF APPLIED SCIENCES</option>
                                                    <option value="SCHOOL OF ENGINEERING TECHNOLOGY"<?=$user['sch'] == 'SCHOOL OF ENGINEERING TECHNOLOGY'? 'selected':'' ?>>SCHOOL OF ENGINEERING TECHNOLOGY</option>
                                                    <option value="SCHOOL OF INFORMATION TECHNOLOGY"<?=$user['sch'] == 'SCHOOL OF INFORMATION TECHNOLOGY'? 'selected':'' ?>>SCHOOL OF INFORMATION TECHNOLOGY</option>
                                                    <option value="SCHOOL OF TECHNICAL AND VOCATIONAL EDUCATION"<?=$user['SCHOOL OF TECHNICAL AND VOCATIONAL EDUCATION'] == 'HND2'? 'selected':'' ?>>SCHOOL OF TECHNICAL AND VOCATIONAL EDUCATION</option>
                                                    <option value="SCHOOL OF POSTGRADUATE STUDIES"<?=$user['sch'] == 'SCHOOL OF POSTGRADUATE STUDIES'? 'selected':'' ?>>SCHOOL OF POSTGRADUATE STUDIES</option>
                                                    <option value="SCHOOL OF JOINT INTERIM MATRICULATION BAORD"<?=$user['sch'] == 'SCHOOL OF JOINT INTERIM MATRICULATION BAORD'? 'selected':'' ?>>SCHOOL OF JOINT INTERIM MATRICULATION BAORD</option>
                                                </select>
                                            </div>
                                            <div class="col-md-12 mb-3 mt-4">
                                                <button type="submit" name="update_student" class="btn btn-primary">Update Course</button>
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