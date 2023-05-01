<?php

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "fpn_db";

$con = mysqli_connect("$dbhost","$dbuser","$dbpass","$dbname");

if(!$con)
{
    header("Location: ../errors/dberrors.php");
    die();
}

?>