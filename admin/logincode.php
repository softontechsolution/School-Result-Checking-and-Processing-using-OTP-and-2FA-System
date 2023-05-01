<?php
session_start();
include('config/dbcon.php');

if(isset($_POST['login']))
{
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $password = mysqli_real_escape_string($con, $_POST['password']);

    $login_query = "SELECT * FROM users WHERE email = '$email' AND password = '$password' LIMIT 1";
    $login_query_run = mysqli_query($con, $login_query);

    if(mysqli_num_rows($login_query_run) > 0)
    {
        foreach($login_query_run as $data){
            $user_id = $data['id'];
            $user_name = $data['username'];
            $user_email = $data['email'];
            $user_level = $data['level'];

        }

        $_SESSION['auth'] = true;
        $_SESSION['auth_user'] = [
            'user_id'=>$user_id,
            'user_name'=>$user_name,
            'user_email'=>$user_email,
            'user_level'=>$user_level,

        ];

        $_SESSION['message'] = " Welcome to FXTM Trade VIP";
        header("Location: index.php");
        exit(0);

    }
    else
    {
        $_SESSION['message'] = "Wrong Password or Email";
        header("Location: login.php");
        exit(0);
    }


}
else
{
    $_SESSION['message'] = "You are not allowed to access this page";
    header("Location: login.php");
    exit(0);
}

?>