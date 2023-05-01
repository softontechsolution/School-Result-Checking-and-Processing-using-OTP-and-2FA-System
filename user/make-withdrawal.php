<?php
session_start();
include('config/dbcon.php');
include('authentication.php');
include('logincode.php');
include('includes/header.php');
?>

<div class="container-fluid px-4">

    <!-- Content Row -->
    <div class="row mt-4">
        <div class="col-md-12">
            
            <?php include('message.php'); ?>

            <div class="card">
                <div class="card-header">
                    <h4>View Students Detail</h4>
                </div>
                <div class="card-body">

                        <div class="card-header text-center mt-mb-6">
                            <i class="bi bi-wallet2"></i>
                            Choose Level and Department
                        </div>

                            <form action="view-register.php" method="GET">


                                <div class="col-md-9 my-3 mx-auto text-center">
                                    <label for="">Department</label>
                                    <select id="depart" name="depart" class="form-control">
                                        <option>Please Select Department</option>
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
                                
                                <div class="col-md-9 my-3 mx-auto text-center">
                                    <label for="">Level</label>
                                    <select id="level" name="level" class="form-control">
                                        <option>Please Select Level</option>
                                        <option value="ND1">ND1</option>
                                        <option value="ND2">ND2</option>
                                        <option value="HND1">HND1</option>
                                        <option value="HND2">HND2</option>
                                    </select>
                                </div>

                                    <div class="col-md-9 my-5 mx-auto text-center">
                                        <button  type="submit" name="view_btn" class="btn btn-primary">View Details</button>
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