<?php
session_start();

if(isset($_SESSION['auth']))
{
    $_SESSION['message'] = "You are Already Logged In";
    header("Location: user/index.php");
    exit(0);
}

include('includes/header.php');
include('includes/navbar.php');
?>

<div class="heading" style="background:url(assets/pic/home-slider-1.png) repeat">
    <h1>Register</h1>
</div>

<?php include('message.php'); ?>
<!-- Login Section Starts -->
<section class="register">


    <form action="registercode.php" method="post" class="signup-form">
        <h1>Create an Account</h1>
        <h3>Sign up with your email and get started with your free account.</h3>

        <div class="flex">
            <div class="inputBox">
                <span>Employee ID Number</span>
                <input type="text" placeholder="enter your id number" name="eid" required>
            </div>
            <div class="inputBox">
                <span>Full Name</span>
                <input type="text" placeholder="enter your full name" name="name" required>
            </div>
            <div class="inputBox">
                <span>Email Address</span>
                <input type="email" placeholder="enter your email" name="email" required>
            </div>
            <div class="inputBox">
                <span>Password</span>
                <input type="password" placeholder="enter a password" name="password" required>
            </div>
            <div class="inputBox">
                <span>Confirm Password</span>
                <input type="password" placeholder="enter a password" name="cpassword" required>
            </div>
            <div class="inputBox">
                <span>Phone Number</span>
                <input type="number" placeholder="enter your number" name="phone" required>
            </div>
            <div class="inputBox">
                <span>Department</span>
                <input type="text" placeholder="enter your department" name="dept" required>
            </div>
            <div class="inputBox">
                <span>School</span>
                <input type="text" placeholder="enter your school" name="school" required>
            </div>
            <div class="inputBox">
                <span>Level</span>
                <input type="text" placeholder="enter your level" name="level" required>
            </div>
    
        </div>

        <input type="checkbox" name="terms" value="I have agree to the Terms & Condition" id="Terms" required>
        <label for="Terms">I have agree to the <a href="#">Terms & Condition</a></label><br>

        <input type="submit" value="Register" class="btn" name="register">

        <p> Already have an account? <a href="login.php">Sign in instead</a></p>

    </form>

</section>

<!-- Login Section Ends-->












<?php
include('includes/footer.php');
include('includes/scripts.php');
?>