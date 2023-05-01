<?php
session_reset();
include('admin/config/dbcon.php');
include('admin/config/func.php');


if(isset($_POST['register']))
{
      //something was posted
    
      $e_id = mysqli_real_escape_string($con, $_POST['eid']);
      $user_name = mysqli_real_escape_string($con, $_POST['name']);
      $email = mysqli_real_escape_string($con, $_POST['email']);
      $password = mysqli_real_escape_string($con, $_POST['password']);
      $confirm_password = mysqli_real_escape_string($con, $_POST['cpassword']);
      $phone = mysqli_real_escape_string($con, $_POST['phone']);
      $dept = mysqli_real_escape_string($con, $_POST['dept']);
      $school = mysqli_real_escape_string($con, $_POST['school']);
      $level = mysqli_real_escape_string($con, $_POST['level']);

      // checking if password entered is thesame with confirm password

      if($password == $confirm_password)
      {
        // Checking if email already existed 
        $checkid = "SELECT e_id FROM lecturertbl WHERE e_id = '$e_id'";
        $checkid_run = mysqli_query($con, $checkid);

        if(mysqli_num_rows($checkid_run) > 0)
        {
            // Already Email Exist
            $_SESSION['message'] = "A User With This EID Already Exist!";
            header("Location: signup.php");
            exit(0);
        }
        else
        {
            //SAVING TO DATABASE
            $user_query = "INSERT INTO lecturertbl (e_id,fullname,email,password,phone,department,school,level) VALUES ('$e_id','$user_name','$email','$password', '$phone','$dept','$school','$level')";
            $user_query_run = mysqli_query($con, $user_query);

            if($user_query_run)
            {
                $_SESSION['message'] = " Registration Sucessful";
                header("Location: login.php");
                exit(0);
            }
            else
            {
                $_SESSION['message'] = "Registeration Failed, Something Went Wrong!";
                header("Location: signup.php");
                exit(0);
            }

        }

      }
      else
      {
        $_SESSION['message'] = "Password and Confirm Password does not match!";
        header("Location: signup.php");
        exit(0);
      }

}
else
{
    header("Location: signup.php");
    exit(0);
}


?>