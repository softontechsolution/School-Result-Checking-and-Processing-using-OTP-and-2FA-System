<?php

function check_login($con)
{

    if(isset($_SESSION['user_id']))
    {

        $id = $_SESSION['user_id'];
        $query = "select * from users where user_id = '$id' limit 1";

        $result = mysqli_query($con,$query);

        if($result && mysqli_num_rows($result) > 0)
        {

            $user_data  = mysqli_fetch_assoc($result);
            return $user_data;
        }

    }

    // redirect to login page
     header("Location: login.php");
     die;

}

//another function

function random_num($length)
{

    $text = ""; 
    if($length < 5)
    {
        $length = 5;
    }

    $len = rand(4,$length);

    for ($i=0; $i <  $len; $i++) { 
        # code...

        $text = rand(0,20);
    }

    return $text;
}

// Function to generate random strings of characters 
function random_strings($length_of_string){
    return substr(sha1(time()), 0, $length_of_string);
}