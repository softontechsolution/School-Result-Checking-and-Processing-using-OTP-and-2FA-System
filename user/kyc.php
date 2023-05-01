<?php
session_cache_limiter('private, must-revalidate');
session_start();
include('config/dbcon.php');
include('config/func.php');
include('logincode.php');
include('authentication.php');
include('includes/header.php');
?>

<div class="container-fluid px-4">

    <!-- Content Row -->
    <div class="row mt-4">
        <div class="col-md-12">
            
            <?php include('message.php'); ?>

            <div class="card text-center">
                <div class="card-header text-center">
                    <h4>KYC</h4>
                </div>
                <div class="card-body">
                    <div class="card-header text-center mt-mb-6">
                        <i class="bi bi-wallet2"></i>
                        Upload your means of verification to secure your account
                    </div>

                    <div class="row">

                         <div class="col-sm-6 mt-2">
                            <div class="card border-info text-center" style="width: 50rem;">
                                <div class="card-body">
                                <p class="card-header">Upload the front and back of your id card for verification</p>
                                <form action="update-code.php" method="POST" enctype="multipart/form-data">
                                        <div class="col-md-6 my-3 custom-file">
                                            <label for="">Front (Passport/National ID/Drivers License)</label>
                                            <input type="file" name="front_image" required class="form-control">
                                        </div>
                                        <div class="col-md-6 my-3 custom-file">
                                            <label for="">Back (Passport/National ID/Drivers License)</label>
                                            <input type="file" name="back_image" required class="form-control">
                                        </div>
                                        <div class="col-md-6 my-3">
                                            <label for="">Security Question</label>
                                            <input type="text" name="question" placeholder="Ask any question.." required class="form-control">
                                        </div>
                                        <div class="col-md-6 my-3">
                                            <label for="">Answer</label>
                                            <input type="text" name="answer" placeholder="Give an answer to the question.." required class="form-control">
                                        </div>
                            
                                        <div class=" d-grid mx-auto col-6 col-md-6 my-3">
                                            <button type="submit" name="kyc_verify"  class="btn btn-primary">Verify</button>
                                        </div> 
                                </form>
                                </div>
                            </div>
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