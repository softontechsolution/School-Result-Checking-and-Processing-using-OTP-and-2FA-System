<?php
session_start();

if(isset($_POST['logout']))
{
    //session_destroy();
    unset($_SESSION['auth']);
    unset($_SESSION['auth_user']);

    $_SESSION['message'] = "Logged out successfully";
    header("Location: ../index.php");
    exit(0);

}

?>