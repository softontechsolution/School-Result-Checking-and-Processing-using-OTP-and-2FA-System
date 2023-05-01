<?php
session_start();

if(isset($_SESSION['auth']))
{
    $_SESSION['message'] = "You are Already Logged In";
    header("Location: index.php");
    exit(0);
}

include('include/header.php');
include('include/navbar.php');
?>

<div class="heading" style="background:url(assets/pic/contact-bg.jpg) repeat">
    <h1>Login</h1>
</div>

<!-- Login Section Starts -->
<section class="login">

    <?php include('message.php'); ?>
    
    <h1>Login into Account</h1>
    <div class="form-container">
    
        <form action="logincode.php" method="post" class="login-form">
            <h3>Sign in into your account using your email and password</h3>

            <div class="flex">
                <div class="inputBox">
                    <span>Email Address</span>
                    <input type="email" placeholder="enter your email address" name="email" required="required">
                </div>
                <div class="inputBox">
                    <span>Password</span>
                    <input type="password" placeholder="enter your password" name="password" required>
                </div>
                <div class="forget">
                    <input type="checkbox" name="terms" value="Remember Me" id="remember">
                    <label for="remember">Remember Me </label>
                    <span><a href="#">Forget Password</a></span>
                </div>

            </div>

            <input type="submit" value="Login" class="btn" name="login">

            <p>New on our platform? <a href="signup.php">Create an account</a> </p>
            
        </form>
    </div>

</section>

<!-- Login Section Ends-->












<?php
include('include/footer.php');
include('include/scripts.php');
?>