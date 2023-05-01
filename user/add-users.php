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
                    <h4>Add Student</h4>
                    <a href="index.php" class="btn btn-danger float-end">BACK</a>
                </div>
                <div class="card-body">

                            <form action="update-code.php" method="POST" enctype="multipart/form-data">

                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <label for="">Registration Number</label>
                                        <input type="text" name="regno" required class="form-control">
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="">Full Name</label>
                                        <input type="text" name="name" required class="form-control">
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="">Password</label>
                                        <input type="password" name="password" required class="form-control">
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="">Email</label>
                                        <input type="email" name="email" class="form-control">
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="">Level</label>
                                        <select id="level" name="level" class="form-control">
                                            <option>Please Select Level</option>
                                            <option value="ND1">ND1</option>
                                            <option value="ND2">ND2</option>
                                            <option value="HND1">HND1</option>
                                            <option value="HND2">HND2</option>
                                        </select>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="">Department</label>
                                        <select id="dept" name="dept" class="form-control">
                                            <option value="">Please Select Department</option>
                                            <option value="ACCOUNTANCY">ACCOUNTANCY</option>
                                            <option value="AGRICULTURAL AND BIO-ENVIRONMENTAL ENGINEERING TECHNOLOGY">AGRICULTURAL AND BIO-ENVIRONMENTAL ENGINEERING TECHNOLOGY</option>
                                            <option value="AGRICULTURAL TECHNOLOGY">AGRICULTURAL TECHNOLOGY</option>
                                            <option value="ARCHITECTURAL TECHNOLOGY">ARCHITECTURAL TECHNOLOGY</option>
                                            <option value="BANKING AND FINANCE">BANKING AND FINANCE</option>
                                            <option value="BIOCHEMISTRY/CHEMISTRY">BIOCHEMISTRY/CHEMISTRY</option>
                                            <option value="BUILDING TECHNOLOGY">BUILDING TECHNOLOGY</option>
                                            <option value="BUSINESS ADMINISTRATION AND MANAGEMENT">BUSINESS ADMINISTRATION AND MANAGEMENT</option>
                                            <option value="CHEMICAL ENGINEERING TECHNOLOGY">CHEMICAL ENGINEERING TECHNOLOGY</option>
                                            <option value="CIVIL ENGINEERING TECHNOLOGY">CIVIL ENGINEERING TECHNOLOGY</option>
                                            <option value="COMPUTER SCIENCE">COMPUTER SCIENCE</option>
                                            <option value="CRIME MANAGEMENT AND CONTROL">CRIME MANAGEMENT AND CONTROL</option>
                                            <option value="ELECTRICAL AND ELECTRONIC ENGINEERING TECHNOLOGY">ELECTRICAL AND ELECTRONIC ENGINEERING TECHNOLOGY</option>
                                            <option value="ENVIRONMENTAL SCIENCE AND MANAGEMENT TECHNOLOGY">ENVIRONMENTAL SCIENCE AND MANAGEMENT TECHNOLOGY</option>
                                            <option value="ESTATE MANAGEMENT">ESTATE MANAGEMENT</option>
                                            <option value="LIBRARY AND INFORMATION SCIENCE">LIBRARY AND INFORMATION SCIENCE</option>
                                            <option value="MARKETING">MARKETING</option>
                                            <option value="MASS COMMUNICATION">MASS COMMUNICATION</option>
                                            <option value="MATHEMATICS AND STATISTICS">MATHEMATICS AND STATISTICS</option>
                                            <option value="MECHANICAL ENGINEERING TECHNOLOGY">MECHANICAL ENGINEERING TECHNOLOGY</option>
                                            <option value="Microbiology/Biology">Microbiology/Biology</option>
                                            <option value="OFFICE TECHNOLOGY AND MANAGEMENT">OFFICE TECHNOLOGY AND MANAGEMENT</option>
                                            <option value="PHYSICS AND ELECTRONICS">PHYSICS AND ELECTRONICS</option>
                                            <option value="PPUBLIC ADMINISTRATION">PUBLIC ADMINISTRATION</option>
                                            <option value="QUANTITY SURVEYING">QUANTITY SURVEYING</option>
                                            <option value="SCIENCE LABORATORY TECHNOLOGY">SCIENCE LABORATORY TECHNOLOGY</option>
                                            <option value="SURVEY AND GEO-INFORMERTICS">SURVEY AND GEO-INFORMERTICS</option>
                                            <option value="URBAN AND REGIONAL PLANNING">URBAN AND REGIONAL PLANNING</option>
                                            <option value="HOSPITALITY MANAGEMENT">HOSPITALITY MANAGEMENT</option>
                                            <option value="APPLIED CHEMISTRY">APPLIED CHEMISTRY</option>
                                            <option value="ART AND INDUSTRIAL DESIGN">ART AND INDUSTRIAL DESIGN</option>
                                        </select>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="">School</label>
                                        <select id="school" name="school" class="form-control">
                                            <option value="">Please Select School</option>
                                            <option value="SCHOOL OF BUSINESS STUDIES">SCHOOL OF BUSINESS STUDIES</option>
                                            <option value="SCHOOL OF ENVIRONMENTAL STUDIES">SCHOOL OF ENVIRONMENTAL STUDIES</option>
                                            <option value="SCHOOL OF APPLIED SCIENCES">SCHOOL OF APPLIED SCIENCES</option>
                                            <option value="SCHOOL OF ENGINEERING TECHNOLOGY">SCHOOL OF ENGINEERING TECHNOLOGY</option>
                                            <option value="SCHOOL OF INFORMATION TECHNOLOGY">SCHOOL OF INFORMATION TECHNOLOGY</option>
                                            <option value="SCHOOL OF TECHNICAL AND VOCATIONAL EDUCATION">SCHOOL OF TECHNICAL AND VOCATIONAL EDUCATION</option>
                                            <option value="SCHOOL OF POSTGRADUATE STUDIES">SCHOOL OF POSTGRADUATE STUDIES</option>
                                            <option value="SCHOOL OF JOINT INTERIM MATRICULATION BAORD">SCHOOL OF JOINT INTERIM MATRICULATION BAORD</option>
                                        </select>
                                    <div class="col-md-12 mb-3 mt-4">
                                        <button type="submit" name="add_user" class="btn btn-primary">Add Student</button>
                                    </div> 
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