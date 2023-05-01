<?php
session_start();
include('includes/header.php');
include('includes/navbar.php');
?>

<!-- Home Section Starts -->

<section class="home">

    <div class="swiper home-slider">
        <div class="swiper-wrapper">
            <div class="swiper-slide slide" style="background:linear-gradient(to bottom, rgba(22, 22, 23, 0.52), 
            rgba(28, 27, 27, 0.73)), url(assets/pic/home-slider-1.png) repeat">
                <div class="content">
                    <span>Recording Student Scores Made Easy</span>
                    <h3>Get Started</h3>
                    <a href="login.php" class="btn">Login</a>
                </div>
            </div>

            <div class="swiper-slide slide" style="background:linear-gradient(to bottom, rgba(22, 22, 23, 0.52), 
            rgba(28, 27, 27, 0.73)), url(assets/pic/home-slider-1.png) repeat">
                <div class="content">
                    <span>Trade & Invest With FXTMTRADEVIP Today</span>
                    <h3>Earn For Lifetime</h3>
                    <a href="login.php" class="btn">Get Started</a>
                </div>
            </div>

            <div class="swiper-slide slide" style="background:linear-gradient(to bottom, rgba(22, 22, 23, 0.52), 
            rgba(28, 27, 27, 0.73)), url(assets/pic/home-slider-3.png) repeat">
                <div class="content">
                    <span>Fast, Secured & Easy Payout</span>
                    <h3>Withdraw Instantly</h3>
                    <a href="login.php" class="btn">Get Started</a>
                </div>
            </div>

        </div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
    </div>

</section>

<!-- Home Section Ends -->

<!-- Services Section Starts -->

<section class="services">
    <h1 class="heading-title">How to Use FPN?</h1>

    <div class="box-container">
        <div class="box">
            <img src="assets/icon/icon1.png"  alt="Man Holding Money Illustration">
            <h3>Login to Access Dashboard</h3>
        </div>

        <div class="box">
            <img src="assets/icon/icon4.png"  alt="Man Holding Money Illustration">
            <h3>Navigate to Score Sheet</h3>
        </div>

        <div class="box">
            <img src="assets/icon/icon2.png" alt="Man Holding Money Illustration">
            <h3>Enter Scores!</h3>
        </div>

    </div>
    
</section>

<!-- Services Section Ends -->








<?php
include('includes/footer.php');
include('includes/scripts.php');
?>