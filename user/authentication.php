<?php
session_start();
include('config/dbcon.php');
 
if(!isset($_SESSION['auth']))
{
    $_SESSION['message'] = "Login to access Dashboard";
    header("Location: ../login.php");
    exit(0);
}
else
{

}


?>