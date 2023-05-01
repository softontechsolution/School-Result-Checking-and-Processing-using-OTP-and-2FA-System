<?php
session_start();
include('config/dbcon.php');

if($_SESSION['auth_user']['user_level'] != 10) 
{
    //could redirect page here
    die('This page is not available to non-administrators.');
}
else
{

}

?>