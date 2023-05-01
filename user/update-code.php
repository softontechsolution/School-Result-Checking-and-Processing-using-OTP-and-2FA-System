<?php
include('authentication.php');
include('config/func.php');

//For Updating Cumulative GPA Detail

if(isset($_POST['save_gpa']))
{

    $regno = $_SESSION['matnum'];
    $semes = $_SESSION['csem'];
    $sgpa = $_SESSION['gpa'];
    $level = $_SESSION['level']; 
                        

    if($level == 'ND1' && $semes == 'First Semester'){
        $query = "UPDATE cumulativetbl SET first_semester='$sgpa' WHERE reg_no='$regno' ";
        $query_run = mysqli_query($con, $query);
        
        if($query_run)
        {
        $_SESSION['message'] = " Result Saved Successfully";
        header("Location: calculate-modal.php");
        exit(0);
        }
    } elseif($level == 'HND1' && $semes == 'First Semester'){
        $query = "UPDATE cumulativetbl SET first_semester='$sgpa' WHERE reg_no='$regno' ";
        $query_run = mysqli_query($con, $query);
        
        if($query_run)
        {
        $_SESSION['message'] = " Result Saved Successfully";
        header("Location: calculate-modal.php");
        exit(0);
        }
    } elseif($level == 'ND1' && $semes == 'Second Semester'){
        $query = "UPDATE cumulativetbl SET second_semester='$sgpa' WHERE reg_no='$regno' ";
        $query_run = mysqli_query($con, $query);
        
        if($query_run)
        {
        $_SESSION['message'] = " Result Saved Successfully";
        header("Location: calculate-modal.php");
        exit(0);
        }
    } elseif($level == 'HND1' && $semes == 'Second Semester'){
        $query = "UPDATE cumulativetbl SET second_semester='$sgpa' WHERE reg_no='$regno' ";
        $query_run = mysqli_query($con, $query);
        
        if($query_run)
        {
        $_SESSION['message'] = " Result Saved Successfully";
        header("Location: calculate-modal.php");
        exit(0);
        }
    } elseif($level == 'ND2' && $semes == 'First Semester'){
        $query = "UPDATE cumulativetbl SET third_semester='$sgpa' WHERE reg_no='$regno' ";
        $query_run = mysqli_query($con, $query);
        if($query_run)
        {
        $_SESSION['message'] = " Result Saved Successfully";
        header("Location: calculate-modal.php");
        exit(0);
        }
    } elseif($level == 'HND2' && $semes == 'First Semester'){
        $query = "UPDATE cumulativetbl SET third_semester='$sgpa' WHERE reg_no='$regno' ";
        $query_run = mysqli_query($con, $query);
    
        if($query_run)
        {
        $_SESSION['message'] = " Result Saved Successfully";
        header("Location: calculate-modal.php");
        exit(0);
        }
    } elseif($level == 'ND2' && $semes == 'Second Semester'){
        $query = "UPDATE cumulativetbl SET fourth_semester='$sgpa' WHERE reg_no='$regno' ";
        $query_run = mysqli_query($con, $query);
        if($query_run)
        {
        $_SESSION['message'] = " Result Saved Successfully";
        header("Location: calculate-modal.php");
        exit(0);
        }
    }elseif($level == 'HND2' && $semes == 'Second Semester'){
        $query = "UPDATE cumulativetbl SET fourth_semester='$sgpa' WHERE reg_no='$regno' ";
        $query_run = mysqli_query($con, $query);
    
        if($query_run)
        {
        $_SESSION['message'] = " Result Saved Successfully";
        header("Location: calculate-modal.php");
        exit(0);
        }
    }  else {
        $_SESSION['message'] = "Action Wasn't Successfully";
        header("Location: calculate-modal.php");
        exit(0);
    }
    

}




//For Updating Student Detail

if(isset($_POST['update_student']))
{

    $c_id = $_POST['s_id'];
    $regno = $_POST['regno'];
    $sname = $_POST['name'];
    $semail = $_POST['email'];
    $level = $_POST['level'];
    $dept = $_POST['dept'];
    $sschool = $_POST['school'];

    $query = "UPDATE studenttbl SET reg_no='$regno', fullname='$sname', email='$semail', level='$level', dept='$dept', sch='$sschool'
                WHERE sn ='$c_id' ";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $_SESSION['message'] = " Student Details Updated Successfully";
        header("Location: make-withdrawal.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = " Student Details Update Wasn't Successfully";
        header("Location: edit-student.php");
        exit(0);
    }

}
//For Updating Course Detail

if(isset($_POST['update_course']))
{

    $c_id = $_POST['c_id'];
    $co_title = $_POST['ctitle'];
    $co_code = $_POST['ccode'];
    $co_unit = $_POST['cunit'];
    $level = $_POST['level'];
    $csem = $_POST['csem'];

    $query = "UPDATE coursetbl SET c_title='$co_title', c_code='$co_code', c_unit='$co_unit', level='$level', semester='$csem'
                WHERE sn ='$c_id' ";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $_SESSION['message'] = " Course Updated Successfully";
        header("Location: course-modal.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = " Course Update Wasn't Successfully";
        header("Location: edit-course.php");
        exit(0);
    }

}
//For Updating Score Detail

if(isset($_POST['update_score']))
{

    $c_id = $_POST['c_id'];
    $matnum = $_POST['matnum'];
    $co_title = $_POST['ctitle'];
    $co_code = $_POST['ccode'];
    $f_score = $_POST['fscore'];
    $s_score = $_POST['sscore'];
    $e_score = $_POST['escore'];
    $t_score = $_POST['tscore'];
    $grade = $_POST['gletter'];
    $grade_p = $_POST['gpoint'];
    $t_point = $_POST['tpoint'];
    $level = $_POST['level'];
    $ssem = $_POST['ssem'];

    $query = "UPDATE score_sheet SET reg_no='$matnum', c_title='$co_title', c_code='$co_code', first_asses='$f_score',
                second_asses='$s_score', exam='$e_score', total='$t_score', grade_letter='$grade', grade_point='$grade_p',
                total_point='$t_point', level='$level', semester='$ssem'
                WHERE sn ='$c_id' ";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $_SESSION['message'] = " Score Updated Successfully";
        header("Location: score-modal.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = " Score Update Wasn't Successfully";
        header("Location: edit-register.php");
        exit(0);
    }

}

//For Adding Student Score

if(isset($_POST['add_score']))
{
    $mat_num = $_POST['matnum'];
    $co_title = $_POST['ctitle'];
    $co_code = $_POST['ccode'];
    $f_score = $_POST['fscore'];
    $s_score = $_POST['sscore'];
    $e_score = $_POST['escore'];
    $t_score = $_POST['tscore'];
    $grade = $_POST['gletter'];
    $grade_p = $_POST['gpoint'];
    $t_point = $_POST['tpoint'];
    $level = $_POST['level'];
    $ssem = $_POST['ssem'];


    $query = "INSERT INTO score_sheet (reg_no,c_title,c_code,first_asses,second_asses,exam,total,grade_letter,grade_point,total_point,level,semester) VALUES 
                ('$mat_num','$co_title','$co_code','$f_score','$s_score','$e_score','$t_score','$grade','$grade_p','$t_point','$level','$ssem')";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $_SESSION['message'] = " Score Recorded Successfully";
        header("Location: add-score.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = " Score Wasn't Recorded Successfully";
        header("Location: add-score.php");
        exit(0);
    }
    

}

//For Adding Course Details

if(isset($_POST['add_course']))
{
    $co_title = $_POST['ctitle'];
    $co_code = $_POST['ccode'];
    $co_unit = $_POST['cunit'];
    $co_level = $_POST['level'];
    $co_sem = $_POST['csem'];


    $query = "INSERT INTO coursetbl (c_title,c_code,c_unit,level,semester) VALUES 
                ('$co_title','$co_code','$co_unit','$co_level','$co_sem')";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $_SESSION['message'] = " Course Added Successfully";
        header("Location: add-courses.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = " Adding Plan Action Wasn't Successfully";
        header("Location: add-courses.php");
        exit(0);
    }
    

}

//For Adding Student Details

if(isset($_POST['add_user']))
{
    $regno = $_POST['regno'];
    $name = $_POST['name'];
    $password = $_POST['password'];
    $email = $_POST['email'];
    $dept = $_POST['dept'];
    $school = $_POST['school'];
    $level = $_POST['level'];


    $query = "INSERT INTO studenttbl (reg_no,fullname,email,password,level,dept,sch) VALUES 
                ('$regno', '$name','$email','$password','$level','$dept','$school')";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $cgpa = "INSERT INTO cumulativetbl (reg_no,first_semester,second_semester,third_semester,fourth_semester,
                    total ) VALUES ('$regno', NULL, NULL, NULL, NULL, NULL)";
        $cgpa_run = mysqli_query($con, $cgpa);
                
        $_SESSION['message'] = " Student Added Successfully";
        header("Location: add-users.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = " Adding Student Action Wasn't Successfully";
        header("Location: add-users.php");
        exit(0);
    }
    

}


//For Debiting User Profit
if(isset($_POST['debitpro_btn']))
{
    $cruser_id = $_POST['cuser_id'];
    $profit = $_POST['profit'];


    $query = "UPDATE users SET profit=profit-'$profit'
                WHERE id = '$cruser_id' LIMIT 1";
    $query_run = mysqli_query($con, $query); 

    if($query_run)
    {
        $_SESSION['message'] = " Debited Sucessfully";
        header("Location: view-register.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = " Debit Wasn't Sucessfully";
        header("Location: view-register.php");
        exit(0);
    }
}

//For Debiting User Balance
if(isset($_POST['debit_btn']))
{
    $cruser_id = $_POST['cuser_id'];
    $amt = $_POST['balance'];


    $query = "UPDATE users SET balance=balance-'$amt'
                WHERE id = '$cruser_id' LIMIT 1";
    $query_run = mysqli_query($con, $query); 

    if($query_run)
    {
        $_SESSION['message'] = " Debited Sucessfully";
        header("Location: view-register.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = " Debit Wasn't Sucessfully";
        header("Location: view-register.php");
        exit(0);
    }
}

//For Crediting User Profit
if(isset($_POST['creditpro_btn']))
{
    $cruser_id = $_POST['cuser_id'];
    $profit = $_POST['profit'];


    $query = "UPDATE users SET profit=profit+'$profit'
                WHERE id = '$cruser_id' LIMIT 1";
    $query_run = mysqli_query($con, $query); 

    if($query_run)
    {
        $_SESSION['message'] = " Credited Sucessfully";
        header("Location: view-register.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = " Credit Wasn't Sucessfully";
        header("Location: view-register.php");
        exit(0);
    }
}



//For Crediting User Balance
if(isset($_POST['credit_btn']))
{
    $cruser_id = $_POST['cuser_id'];
    $profit = $_POST['profit'];
    $amt = $_POST['balance'];


    $query = "UPDATE users SET balance=balance+'$amt'
                WHERE id = '$cruser_id' LIMIT 1";
    $query_run = mysqli_query($con, $query); 

    if($query_run)
    {
        $_SESSION['message'] = " Credited Sucessfully";
        header("Location: view-register.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = " Credit Wasn't Sucessfully";
        header("Location: view-register.php");
        exit(0);
    }
}



//For Changing Password
if(isset($_POST['change_pass']))
{
    $password = $_POST['password'];

    if(isset($_SESSION['auth']))
    {
        $email = $_SESSION['auth_user']['user_email'];

        $user_query = "SELECT id FROM users WHERE email = '$email'";
        $user_query_run = mysqli_query($con, $user_query);

        if(mysqli_num_rows($user_query_run) > 0)
        {
            foreach($user_query_run as $data){
                $user_id = $data['id'];
            }
            $wmeth_query = "UPDATE users SET password='$password' WHERE id = '$user_id'";
            $wmeth_query_run = mysqli_query($con, $wmeth_query); 

            if($wmeth_query_run)
            {

                $_SESSION['message'] = " Change Sucessfully";
                header("Location: forgot-password.php");
                exit(0);
            }
            else
            {
                $_SESSION['message'] = "  Action Wasn't Successfully";
                header("Location: forgot-password.php");
                exit(0);
            }
        }
    }
}


// For Adding KYC
if(isset($_POST['kyc_verify']))
{

    $kyc_image_front = $_FILES['front_image']['name'];
    $kyc_image_back = $_FILES['back_image']['name'];
    $kyc_question = $_POST['question'];
    $kyc_answer = $_POST['answer'];
    //renaming the image
    $image_extension_front = pathinfo($kyc_image_front, PATHINFO_EXTENSION);
    $filename_front = time().'.'.$image_extension_front;

    $image_extension_back = pathinfo($kyc_image_back, PATHINFO_EXTENSION);
    $filename_back = time().'.'.$image_extension_back;

    if(isset($_SESSION['auth']))
    {
            $email = $_SESSION['auth_user']['user_email'];

            $user_query = "SELECT id FROM users WHERE email = '$email'";
            $user_query_run = mysqli_query($con, $user_query);

            if(mysqli_num_rows($user_query_run) > 0)
            {
                foreach($user_query_run as $data){
                    $user_id = $data['id'];
                }

                $query = "INSERT INTO kyc (user_id,front_image,back_image,question,answer) VALUES 
                            ('$user_id','$filename_front','$filename_back','$kyc_question','$kyc_answer')";
                $query_run = mysqli_query($con, $query);
                if($query_run)
                {
                    copy($_FILES['front_image']['tmp_name'], '../uploads/kyc/'.$filename_front);
                    copy($_FILES['back_image']['tmp_name'], '../uploads/kyc/'.$filename_back);
                    $_SESSION['message'] = " Submitted Successfully";
                    header("Location: kyc.php");
                    exit(0);
                }
                else
                {
                    $_SESSION['message'] = " Action Wasn't Successfully";
                    header("Location: kyc.php");
                    exit(0);
                }
    

            }

    }
}
                                  
    


//For Stopping Active Investment
if(isset($_POST['stop_invest_btn']))
{
    $active_id = $_POST['stop_invest_btn'];
    $status = '0';

    $wmeth_query = "UPDATE investments SET status='$status' WHERE id = '$active_id'";
    $wmeth_query_run = mysqli_query($con, $wmeth_query); 

    if($wmeth_query_run)
    {

        $_SESSION['message'] = " Investment Stopped";
        header("Location: active-invest.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "  Action Wasn't Successfully";
        header("Location: active-invest.php");
        exit(0);
    }
}



//Adding To New Active User
if(isset($_POST['add_active']))
{      
    $transac_id = $_POST['trx_id'];
    $user_id = $_POST['user_id'];
    $plan_id = $_POST['plan_id'];
    $amount = $_POST['amount'];
    $status = $_POST['status'] == true ? '1':'0';
    
        $confirm_query = "INSERT INTO investments (transaction_id,user_id,plan_id,amount,status) 
        VALUES ('$transac_id','$user_id','$plan_id','$amount','$status')";
        $confirm_query_run = mysqli_query($con, $confirm_query);

        if($confirm_query_run)
        {
            $_SESSION['message'] = "  Added Successfully!";
            header("Location: active-invest.php");
            exit(0);
        }
        else
        {
            $_SESSION['message'] = " Action Wasn't Successfully";
            header("Location: active-invest.php");
            exit(0);
        }

}



//For Deleting Withdrawal Log
if(isset($_POST['withlog_delete_btn']))
{
    $with_id = $_POST['withlog_delete_btn'];

    $query = "DELETE FROM withdraw_logs WHERE id='$with_id' LIMIT 1";
    $query_run = mysqli_query($con, $query);
    
    if($query_run)
    { 

        $_SESSION['message'] = " Deleted Successfully";
        header("Location: view-widthdrawal-log.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = " Action Wasn't Successfully";
        header("Location: view-widthdrawal-log.php");
        exit(0);
    }
}



//For Updating Withdrawal Log

if(isset($_POST['withd-update']))
{
    $with_id = $_POST['with_id'];
    $wmeth_id = $_POST['meth_id'];
    $user_id = $_POST['user_id'];

    $transac_id = $_POST['transac_id'];
    $amount = $_POST['amount'];
    $charges= $_POST['charges'];
    $net_amount = $_POST['net_amount'];
    $details = $_POST['details'];
    $message = $_POST['message'];

    $status = $_POST['status'] == true ? '1':'0';

    $wmeth_query = "UPDATE withdraw_logs SET user_id='$user_id', method_id='$wmeth_id', transaction_id='$transac_id', 
                amount='$amount', charges='$charges', net_amount='$net_amount', send_details='$details',
                message='$message', status='$status' WHERE id = '$with_id'";
    $wmeth_query_run = mysqli_query($con, $wmeth_query); 

    if($wmeth_query_run)
    {

        $_SESSION['message'] = " Withdrawal Updated Successfully";
        header("Location: view-withdrawal-log.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = " Update Action Wasn't Successfully";
        header("Location: view-withdrawal-log.php");
        exit(0);
    }
}



//Adding To Withdrawal Log
if(isset($_POST['make_withd']))
{      
    $withd_type = $_POST['with_type'];
    $withd_amt = $_POST['usd_amount'];
    $withd_details = $_POST['details'];
    $withd_msg = $_POST['message'];

    $check_meth_query = "SELECT * FROM withdraw_methods WHERE name='$withd_type' LIMIT 1 ";
    $meth_res = mysqli_query($con, $check_meth_query);
    $res_data = mysqli_fetch_array($meth_res);
    $method_id = $res_data['id'];
    $meth_percent = $res_data['percent'];

    $withd_charges = ($meth_percent + 1) * $withd_amt / 100;
    $net_amt = $withd_charges + $withd_amt;

    $transac_id = random_strings(20);

    if(isset($_SESSION['auth']))
    {
        $email = $_SESSION['auth_user']['user_email'];

        $user_query = "SELECT id FROM users WHERE email = '$email'";
        $user_query_run = mysqli_query($con, $user_query);

        if(mysqli_num_rows($user_query_run) > 0)
        {
            foreach($user_query_run as $data){
                $user_id = $data['id'];
            }
        }
        
        $confirm_query = "INSERT INTO withdraw_logs (user_id,method_id,transaction_id,amount,charges,net_amount,send_details,message) 
        VALUES ('$user_id', '$method_id','$transac_id','$withd_amt','$withd_charges',' $net_amt','$withd_details','$withd_msg')";
        $confirm_query_run = mysqli_query($con, $confirm_query);

        if($confirm_query_run)
        {
            $_SESSION['message'] = "  Withdrawal Successful!
            Note: it takes 24hrs for all BTC withdrawal and 4 working days for all bank withdrawals ";
            header("Location: index.php");
            exit(0);
        }
        else
        {
            $_SESSION['message'] = " Payment Wasn't Successfully";
            header("Location: index.php");
            exit(0);
        }

    }
}






//For Deleting Withdrawal Method
if(isset($_POST['withdraw_delete_btn']))
{
    $with_id = $_POST['withdraw_delete_btn'];

    $query = "DELETE FROM withdraw_methods WHERE id='$with_id' LIMIT 1";
    $query_run = mysqli_query($con, $query);
    
    if($query_run)
    { 

        $_SESSION['message'] = " Deleted Successfully";
        header("Location: view-withdrawal-method.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = " Action Wasn't Successfully";
        header("Location: view-withdrawal-method.php");
        exit(0);
    }
}


//For Updating Withdrawal Methods

if(isset($_POST['withdraw-update']))
{
    $wmeth_id = $_POST['meth_id'];

    $wmeth_name = $_POST['name'];
    $wmeth_min = $_POST['mini'];
    $wmeth_max = $_POST['maxi'];
    $wmeth_fix = $_POST['fix'];
    $wmeth_percent = $_POST['percent'];
    $wmeth_duration = $_POST['duration'];

    $status = $_POST['status'] == true ? '1':'0';

    $wmeth_query = "UPDATE withdraw_methods SET name='$wmeth_name', withdraw_min='$wmeth_min', withdraw_max='$wmeth_max', 
                fix='$wmeth_fix', percent='$wmeth_percent', duration='$wmeth_duration', status='$status' WHERE id = '$wmeth_id' ";
    $wmeth_query_run = mysqli_query($con, $wmeth_query); 

    if($wmeth_query_run)
    {

        $_SESSION['message'] = " Withdrawal Method Updated Successfully";
        header("Location: edit-withdrawal.php?id=".$wmeth_id);
        exit(0);
    }
    else
    {
        $_SESSION['message'] = " Update Action Wasn't Successfully";
        header("Location: edit-withdrawal.php?id=".$wmeth_id);
        exit(0);
    }
}


// For Adding Withdrawal Methods

if(isset($_POST['add_withdraw']))
{
    $with_name = $_POST['name'];

    $with_mini = $_POST['mini'];
    $with_maxi = $_POST['maxi'];
    $with_fix = $_POST['fix'];
    $with_percent = $_POST['percent'];
    $with_duration = $_POST['duration'];
    
    $status = $_POST['status'] == true ? '1':'0';

    $with_query = "INSERT INTO withdraw_methods (name,withdraw_min,withdraw_max,fix,percent,duration,status) VALUES 
                ('$with_name', '$with_mini','$with_maxi','$with_fix',
                '$with_percent','$with_duration','$status')";
    $with_query_run = mysqli_query($con, $with_query);

    if($with_query_run)
    {
        $_SESSION['message'] = " Withdrawal Method Added Successfully";
        header("Location: add-withdrawal-method.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = " Adding Withdrawal Method Action Wasn't Successfully";
        header("Location: add-withdrawal-method.php");
        exit(0);
    }
    

}


//For Deleting Temp Payment Log
if(isset($_POST['temp_delete_btn']))
{
    $temp_id = $_POST['temp_delete_btn'];

    $query = "DELETE FROM temp_pay WHERE id='$temp_id' LIMIT 1";
    $query_run = mysqli_query($con, $query);
    
    if($query_run)
    { 

        $_SESSION['message'] = " Deleted Successfully";
        header("Location: view-tempay-log.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = " Action Wasn't Successfully";
        header("Location: view-tempay-log.php");
        exit(0);
    }
}



//For Updating Temp Payment

if(isset($_POST['temp-update']))
{
    $temp_id = $_POST['temp_id'];

    $temppay_type = $_POST['pay_type'];

    $tempamount = $_POST['amount'];
    $tempplan_id = $_POST['plan_id'];
    $tempuser_id = $_POST['user_id'];
    
    $tempstatus = $_POST['status'] == true ? '1':'0';

    $tempquery = "UPDATE temp_pay SET payment_type='$temppay_type', usd_amount='$tempamount', plan_id='$tempplan_id', 
                user_id='$tempuser_id', status='$tempstatus' WHERE id = '$temp_id' ";
    $tempquery_run = mysqli_query($con, $tempquery); 

    if($tempquery_run)
    {
        $_SESSION['message'] =  " Payment Log Updated Successfully";
        header("Location: edit-temp.php?id=".$temp_id);
        exit(0);
    }
    else
    {
        $_SESSION['message'] = " Update Action Wasn't Successfully";
        header("Location: edit-temp.php?id=".$temp_id);
        exit(0);
    }
} 


//For Deleting Payment Images
if(isset($_POST['dimg_delete_btn']))
{
    $deposit_id = $_POST['dimg_delete_btn'];
    $transac_id = $_SESSION['trx_id'];

    $check_img_query = "SELECT * FROM deposit_image WHERE id='$deposit_id' LIMIT 1 ";
    $img_res = mysqli_query($con, $check_img_query);
    $res_data = mysqli_fetch_array($img_res);
    $image = $res_data['image'];

    $imgquery = "DELETE FROM deposit_image WHERE image='$image' LIMIT 1";
    $imgquery_run = mysqli_query($con, $imgquery);    

    if($query_run)
    { 
            if(file_exists('../uploads/confirm_pay/'.$image)){
                unlink("../uploads/confirm_pay/".$image);
            }

        $_SESSION['message'] = " Image Deleted Successfully";
        header("Location: view-deposit-image.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = " Action Wasn't Successfully";
        header("Location: view-deposit-image.php");
        exit(0);
    }
}


//For Deleting Payment Log
if(isset($_POST['paylog_delete_btn']))
{
    $payment_id = $_POST['paylog_delete_btn'];
    $transac_id = $_SESSION['trx_id'];

    $check_img_query = "SELECT * FROM deposit_image WHERE transaction_id='$transac_id' LIMIT 1 ";
    $img_res = mysqli_query($con, $check_img_query);
    $res_data = mysqli_fetch_array($img_res);
    $image = $res_data['image'];

    $query = "DELETE FROM payment_logs WHERE id='$payment_id' LIMIT 1";
    $query_run = mysqli_query($con, $query);
    
    if($query_run)
    { 
        $imgquery = "DELETE FROM deposit_image WHERE transaction_id='$transac_id' LIMIT 1";
        $imgquery_run = mysqli_query($con, $imgquery);

            if(file_exists('../uploads/confirm_pay/'.$image)){
                unlink("../uploads/confirm_pay/".$image);
            }

        $_SESSION['message'] = " Deleted Successfully";
        header("Location: view-payment-log.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = " Action Wasn't Successfully";
        header("Location: view-payment-log.php");
        exit(0);
    }
}

//For Updating Payment Logs

if(isset($_POST['pay-update']))
{
    $payment_id = $_POST['payment_id'];

    $plan_id = $_POST['plan_id'];

    $user_id = $_POST['user_id'];
    $transac_id = $_POST['transac_id'];
    $pay_type = $_POST['pay_type'];
    $amount = $_POST['amount'];
    $charges = $_POST['charges'];
    $net_amount = $_POST['net_amount'];
    $btc_amount = $_POST['btc_amount'];
    $btc_account = $_POST['btc_account'];

    $old_filename = $_POST['old_image'];
    $payment_image = $_FILES['image']['name'];

    $update_filename ="";

    if($payment_image != NULL)
    {
        //renaming the image
        $image_extension = pathinfo($payment_image, PATHINFO_EXTENSION);
        $filename = time().'.'.$image_extension;
        $update_filename = $filename;
    }
    else
    {
        $update_filename = $old_filename;
    }

    
    $status = $_POST['status'] == true ? '1':'0';

    $query = "UPDATE payment_logs SET plan_id='$plan_id', user_id='$user_id', transac_id='$transac_id', 
                payment_type='$pay_type', amount='$amount', charges='$charges', net_amount='$net_amount', 
                btc_amount='$btc_amount', btc_account='$btc_account', status='$status' WHERE id = '$payment_id' ";
    $query_run = mysqli_query($con, $query); 

    if($query_run)
    {
        if($payment_image != NULL)
        {
            if(file_exists('../uploads/confirm_pay/'.$old_filename))
            {
                unlink("../uploads/confirm_pay/".$old_filename);
            }
            copy($_FILES['image']['tmp_name'], '../uploads/confirm_pay/'.$update_filename);
        }

        $deposit_image = "INSERT INTO deposit_image (transaction_id,image) VALUES ('$transac_id','$update_filename')";
        $deposit_image_run = mysqli_query($con, $deposit_image);

        $_SESSION['message'] = " Payment Updated Successfully";
        header("Location: edit-payment-log.php?id=".$payment_id);
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Action Wasn't Successfully";
        header("Location: edit-payment-log.php?id=".$payment_id);
        exit(0);
    }
} 


//Adding To Payment Log For Confirmation
if(isset($_POST['confirm_payment']))
{
    $confirm_image = $_FILES['confirm_image']['name'];

        $userpay_id = $_SESSION['user_pay'];
        $plan_id = $_SESSION['plan_pay'];
        $usd_amount = $_SESSION['usd_amount'];
        $transac_id = $_SESSION['trx_id'];
        $pay_type = $_SESSION['pay_type'];
        $charges_res = $_SESSION['pay_charges'];
        $net_amount =  $_SESSION['pay_amount'];
        $btc_amount = $_SESSION['pay_btc'];
        $meth_addy = $_SESSION['pay_addy'];

    //renaming the image
    $image_extension = pathinfo($confirm_image, PATHINFO_EXTENSION);
    $filename = time().'.'.$image_extension;
                    
        
    $confirm_query = "INSERT INTO payment_logs (plan_id,user_id,transac_id,payment_type,amount,charges,net_amount,btc_amount,btc_account) 
    VALUES ('$plan_id', '$userpay_id','$transac_id','$pay_type','$usd_amount','$charges_res','$net_amount','$btc_amount','$meth_addy')";
    $confirm_query_run = mysqli_query($con, $confirm_query);

    if($confirm_query_run)
    {
        $deposit_query = "INSERT INTO deposit_image (transaction_id,image) VALUES ('$transac_id','$filename')";
        $deposit_query_run = mysqli_query($con, $deposit_query);

        copy($_FILES['confirm_image']['tmp_name'], '../uploads/confirm_pay/'.$filename);
        $_SESSION['message'] = " Payment Successfully";
        header("Location: invest-card-view.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = " Payment Wasn't Successfully";
        header("Location: invest-card-view.php");
        exit(0);
    }

}
    

//For Adding payment

if(isset($_POST['make_pay']))
{
    $payment_type = $_POST['payment_type'];

    $usd_amount = $_POST['usd_amount'];
    $plan_id = $_POST['plan_id'];

    if(isset($_SESSION['auth']))
    {
        $email = $_SESSION['auth_user']['user_email'];

        $user_query = "SELECT id FROM users WHERE email = '$email'";
        $user_query_run = mysqli_query($con, $user_query);

        if(mysqli_num_rows($user_query_run) > 0)
        {
            foreach($user_query_run as $data){
                $user_id = $data['id'];
            }
        }
        $query = "INSERT INTO temp_pay (payment_type,usd_amount,plan_id,user_id) VALUES 
                ('$payment_type', '$usd_amount','$plan_id','$user_id')";
        $query_run = mysqli_query($con, $query);

        if($query_run)
        {
            $_SESSION['message'] = " Make Deposit for Confirmation";
            header("Location: confirm-pay.php");
            exit(0);
        }
        else
        {
            $_SESSION['message'] = " Action Wasn't Successfully";
            header("Location: confirm-pay.php");
            exit(0);
        }

    }

    

}


//For Deleting Payment Method
if(isset($_POST['payment_delete_btn']))
{
    $payment_id = $_POST['payment_delete_btn'];

    $check_img_query = "SELECT * FROM payment_methods WHERE id='$payment_id' LIMIT 1 ";
    $img_res = mysqli_query($con, $check_img_query);
    $res_data = mysqli_fetch_array($img_res);
    $image = $res_data['image'];

    $query = "DELETE FROM payment_methods WHERE id='$payment_id' LIMIT 1";
    $query_run = mysqli_query($con, $query);
    
    if($query_run)
    { 
            if(file_exists('../uploads/payment_methods/'.$image)){
                unlink("../uploads/payment_methods/".$image);
            }

        $_SESSION['message'] = " Deleted Successfully";
        header("Location: view-payment-method.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = " Action Wasn't Successfully";
        header("Location: view-payment-method.php");
        exit(0);
    }
}


//For Updating Payment Methods

if(isset($_POST['payment-update']))
{
    $payment_id = $_POST['payment_id'];

    $payment_name = $_POST['name'];

    $payment_rate = $_POST['rate'];
    $payment_percent = $_POST['percent'];
    $payment_account = $_POST['account'];
    $payment_currency = $_POST['currency'];

    $old_filename = $_POST['old_image'];
    $payment_image = $_FILES['image']['name'];

    $update_filename ="";

    if($payment_image != NULL)
    {
        //renaming the image
        $image_extension = pathinfo($payment_image, PATHINFO_EXTENSION);
        $filename = time().'.'.$image_extension;
        $update_filename = $filename;
    }
    else
    {
        $update_filename = $old_filename;
    }

    
    $status = $_POST['status'] == true ? '1':'0';

    $query = "UPDATE payment_methods SET name='$payment_name', image='$update_filename', rate='$payment_rate', 
                percent='$payment_percent', account='$payment_account', currency='$payment_currency', status='$status' WHERE id = '$payment_id ' ";
    $query_run = mysqli_query($con, $query); 

    if($query_run)
    {
        if($payment_image != NULL)
        {
            if(file_exists('../uploads/payment_methods/'.$old_filename))
            {
                unlink("../uploads/payment_methods/".$old_filename);
            }
            copy($_FILES['image']['tmp_name'], '../uploads/payment_methods/'.$update_filename);
        }

        $_SESSION['message'] = " Payment Method Updated Successfully";
        header("Location: edit-payment.php?id=".$payment_id);
        exit(0);
    }
    else
    {
        $_SESSION['message'] = " Update Action Wasn't Successfully";
        header("Location: edit-payment.php?id=".$payment_id);
        exit(0);
    }
} 



// For Adding Payment Methods

if(isset($_POST['add_payment']))
{
    $payment_name = $_POST['name'];

    $payment_rate = $_POST['rate'];
    $payment_percent = $_POST['percent'];
    $payment_address = $_POST['address'];
    $payment_currency = $_POST['currency'];
    $payment_image = $_FILES['image']['name'];
    //renaming the image
    $image_extension = pathinfo($payment_image, PATHINFO_EXTENSION);
    $filename = time().'.'.$image_extension;
    
    $status = $_POST['status'] == true ? '1':'0';

    $query = "INSERT INTO payment_methods (name,image,rate,percent,account,currency,status) VALUES 
                ('$payment_name', '$filename','$payment_rate','$payment_percent',
                '$payment_address','$payment_currency','$status')";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        copy($_FILES['image']['tmp_name'], '../uploads/payment_methods/'.$filename);
        $_SESSION['message'] = " Payment Method Added Successfully";
        header("Location: add-payment-method.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = " Adding Payment Method Action Wasn't Successfully";
        header("Location: add-payment-method.php");
        exit(0);
    }
    

}


//For Deleting Investment Plans
if(isset($_POST['plan_delete_btn']))
{
    $plan_id = $_POST['plan_delete_btn'];

    $check_img_query = "SELECT * FROM plans WHERE id='$plan_id' LIMIT 1 ";
    $img_res = mysqli_query($con, $check_img_query);
    $res_data = mysqli_fetch_array($img_res);
    $image = $res_data['image'];

    $query = "DELETE FROM plans WHERE id='$plan_id' LIMIT 1";
    $query_run = mysqli_query($con, $query);
    
    if($query_run)
    { 
            if(file_exists('../uploads/plans/'.$image)){
                unlink("../uploads/plans/".$image);
            }

        $_SESSION['message'] = " Deleted Successfully";
        header("Location: plans-view.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = " Action Wasn't Successfully";
        header("Location: plans-view.php");
        exit(0);
    }
}

//For Updating Investment Plans

if(isset($_POST['plan-update']))
{
    $plan_id = $_POST['plan_id'];

    $plan_name = $_POST['name'];

    $plan_min = $_POST['minimum'];
    $plan_max = $_POST['maximum'];
    $percent = $_POST['percent'];
    $plan_time = $_POST['time'];

    $old_filename = $_POST['old_image'];
    $plan_image = $_FILES['image']['name'];

    $update_filename ="";

    if($plan_image != NULL)
    {
        //renaming the image
        $image_extension = pathinfo($plan_image, PATHINFO_EXTENSION);
        $filename = time().'.'.$image_extension;
        $update_filename = $filename;
    }
    else
    {
        $update_filename = $old_filename;
    }

    
    $status = $_POST['status'] == true ? '1':'0';

    $query = "UPDATE plans SET name='$plan_name', image='$update_filename', minimum='$plan_min', 
                maximum='$plan_max', percent='$percent', time='$plan_time', status='$status' WHERE id = '$plan_id ' ";
    $query_run = mysqli_query($con, $query); 

    if($query_run)
    {
        if($plan_image != NULL)
        {
            if(file_exists('../uploads/plans/'.$old_filename))
            {
                unlink("../uploads/plans/".$old_filename);
            }
            copy($_FILES['image']['tmp_name'], '../uploads/plans/'.$update_filename);
        }

        $_SESSION['message'] = " Investment Plan Updated Successfully";
        header("Location: edit-plans.php?id=".$plan_id);
        exit(0);
    }
    else
    {
        $_SESSION['message'] = " Adding Plan Action Wasn't Successfully";
        header("Location: edit-plans.php?id=".$plan_id);
        exit(0);
    }
} 

//For Adding Investment Plans

if(isset($_POST['add_plan']))
{
    $plan_name = $_POST['name'];

    $plan_min = $_POST['minimum'];
    $plan_max = $_POST['maximum'];
    $percent = $_POST['percent'];
    $plan_time = $_POST['time'];
    $plan_image = $_FILES['image']['name'];
    //renaming the image
    $image_extension = pathinfo($plan_image, PATHINFO_EXTENSION);
    $filename = time().'.'.$image_extension;
    
    $status = $_POST['status'] == true ? '1':'0';

    $query = "INSERT INTO plans (name,image,minimum,maximum,percent,time,status	) VALUES 
                ('$plan_name', '$filename','$plan_min','$plan_max','$percent','$plan_time','$status')";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        copy($_FILES['image']['tmp_name'], '../uploads/plans/'.$filename);
        $_SESSION['message'] = " Investment Plan Added Successfully";
        header("Location: plans-add.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = " Adding Plan Action Wasn't Successfully";
        header("Location: plans-add.php");
        exit(0);
    }
    

}

//For Updating Users Detail

if(isset($_POST['update_user']))
{

    $user_id = $_POST['user_id'];
    $name = $_POST['name'];
    $password = $_POST['password'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $dob = $_POST['dob'];
    $country = $_POST['country'];
    $status = $_POST['status'] == true ? '1':'0';

    $query = "UPDATE users SET username='$name', password='$password', email='$email', phone='$phone', dateofbirth='$dob', country='$country', status='$status' 
                WHERE id ='$user_id' ";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $_SESSION['message'] = " User Deatils Updated Successfully";
        header("Location: view-register.php");
        exit(0);
    }

}

?>