<?php
session_reset();
include('config/dbcon.php');
include('config/func.php');

if(isset($_POST['register']))
{
      //something was posted
    
      $user_name = mysqli_real_escape_string($con, $_POST['name']);
      $email = mysqli_real_escape_string($con, $_POST['email']);
      $password = mysqli_real_escape_string($con, $_POST['password']);
      $confirm_password = mysqli_real_escape_string($con, $_POST['cpassword']);
      $phone = mysqli_real_escape_string($con, $_POST['phone']);
      $dob = mysqli_real_escape_string($con, $_POST['dateofbirth']);

      // checking if password entered is thesame with confirm password

      if($password == $confirm_password)
      {
        // Checking if email already existed 
        $checkemail = "SELECT email FROM admin WHERE email = '$email'";
        $checkemail_run = mysqli_query($con, $checkemail);

        if(mysqli_num_rows($checkemail_run) > 0)
        {
            // Already Email Exist
            $_SESSION['message'] = "A User With This Email Already Exist!";
            header("Location: signup.php");
            exit(0);
        }
        else
        {
            //SAVING TO DATABASE
            $user_query = "INSERT INTO admin (fullname,email,password,phone,dateofbirth) VALUES ('$user_name','$email','$password','$phone','$dob')";
            $user_query_run = mysqli_query($con, $user_query);

            if($user_query_run)
            {
                $_SESSION['message'] = "Registered Successfully!";
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