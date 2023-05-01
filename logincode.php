<?php
session_start();
include('admin/config/dbcon.php');

if(isset($_POST['login']))
{
    $e_id = mysqli_real_escape_string($con, $_POST['e_id']);
    $password = mysqli_real_escape_string($con, $_POST['password']);

    $login_query = "SELECT * FROM lecturertbl WHERE e_id = '$e_id' AND password = '$password' LIMIT 1";
    $login_query_run = mysqli_query($con, $login_query);

    if(mysqli_num_rows($login_query_run) > 0)
    {
        $row = $login_query_run->fetch_assoc();
        $eid = $row['e_id'];
        $user_id = $row['sn'];
        $user_level = $row['level'];
        $user_name = $row['fullname'];
        $user_email = $row['email'];
        $dept = $row['department'];
        $school = $row['school'];
        

        $_SESSION['auth'] = true;
        $_SESSION['auth_user'] = [
            'user_id'=>$user_id,
            'eid'=>$eid,
            'user_name'=>$user_name,
            'user_email'=>$user_email,
            'user_level'=>$user_level,

        ];

        $_SESSION['message'] = " Welcome to FPN Result Processing";
        header("Location: user/index.php");
        exit(0);

    }
    else
    {
        $_SESSION['message'] = "Wrong Password or EID";
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