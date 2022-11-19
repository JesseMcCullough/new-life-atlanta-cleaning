<?php 

$_POST["rootDirectory"] = "../";
$_POST["title"] = "Upholstery Cleaning";
include_once("../includes/header.php"); ?>

<section class="service-selector before-after">
    <div class="overlay"></div>
    <div class="background-img-1" style="background-image: url('<?php echo $rootDirectory; ?>images/upholstery-cleaning/upholstery-cleaning-1.jpg')"></div>
    <div class="background-img-2"></div>
    <div class="container">
        <h1>Upholstery Cleaning</h1>
        <h2>See the difference</h2>
        <div class="service-selector-slide">
            <div class="left-arrow"><span>&lt;</span></div>
            <div class="items">
                <div class="item-container middle" data-id="0"
                        data-background-image="<?php echo $rootDirectory; ?>images/upholstery-cleaning/upholstery-cleaning-1.jpg"
                        data-overlay-opacity="0.5">
                    <div class="item-content before" style="background-image: url('<?php echo $rootDirectory; ?>images/upholstery-cleaning/upholstery-cleaning-1.jpg')"></div>
                    <div class="item-content after" style="background-image: url('<?php echo $rootDirectory; ?>images/upholstery-cleaning/upholstery-cleaning-2.jpg')"></div>
                </div>
                <div class="item-container invisible" data-id="1"
                        data-background-image="<?php echo $rootDirectory; ?>images/upholstery-cleaning/upholstery-cleaning-3.jpg"
                        data-overlay-opacity="0.7">
                    <div class="item-content before" style="background-image: url('<?php echo $rootDirectory; ?>images/upholstery-cleaning/upholstery-cleaning-3.jpg')"></div>
                    <div class="item-content after" style="background-image: url('<?php echo $rootDirectory; ?>images/upholstery-cleaning/upholstery-cleaning-1.jpg')"></div>
                </div>
            </div>
            <div class="right-arrow"><span>&gt;</span></div>
        </div>
        <div class="slide-dots">
            <div class="dot active" data-id="0"></div>
            <div class="dot" data-id="1"></div>
        </div>
        <div class="buttons">
            <a href="#schedule" class="button">Schedule&nbsp;<span class="service"> upholstery cleaning</a>
        </div>
    </div>
</section>
<section class="stats-banner">
    <div class="container">
        <p class="stat"><span class="highlight">99.9%</span>of germs eliminated <br />by free sanitizer</p>
        <p class="stat"><span class="highlight">48x</span>faster drying <br />than steam cleaning</p>
        <p class="stat"><span class="highlight">40+</span>years of <br />experience</p>
    </div>
</section>
<section class="about service">
    <div class="container">
        <div class="text">
            <h2>Upholstery Cleaning</h2>
            <p>Did you know upholstered fabrics should be cleaned every 12-24 months depending on the use and soil exposure as well as the location of the upholstery?</p>
            <p>Scheduled upholstery cleaning also extends the life of the fabric if care is taken to make sure it is vacuumed routinely between cleanings.</p>
        </div>
        <div class="image">
            <img src="<?php echo $rootDirectory; ?>images/upholstery-cleaning/upholstery-cleaning-1.jpg" />
        </div>
    </div>
</section>
<section class="about service">
    <div class="container">
        <div class="text">
            <h2>Don't soak it</h2>
            <p>Our philosophy on upholstery cleaning is the same we have for carpet. Never over-wet anything!</p>
            <p>Just as you don't want to get the padding wet under your carpet, you certainly don't want the filling inside your upholstery fabric to get soaked.</p>
            <p>Every piece of furniture is different. We manually control the amount of cleaning solution used for each unique piece of furniture which ensures you are getting the safest, most effective results possible.</p>
            <p>Our fast drying technique allows fabrics to dry in way less time than it takes for a truck mounted or steam system.</p>
            <p>Both sides of cushions are cleaned and we make sure you understand the drying process before the cushions are returned to their proper position.</p>
        </div>
        <div class="image">
            <img src="<?php echo $rootDirectory; ?>images/upholstery-cleaning/upholstery-cleaning-2.jpg" />
        </div>
    </div>
</section>
<section class="about service">
    <div class="container">
        <div class="text">
            <h2>Free sanitizer</h2>
            <p>Detailed care and TLC goes into every job.</p>
            <p>The cleaning process also sanitizes, which eliminates odors and leaves your fabric nice and fresh.</p>
            <p>There's never any additional charges to sanitize.</p>
            <p>Whether you're freshening up for soon-to-be-arriving guests or cleaning up after your brother-in-law slept on the couch last weekend, there's never been a better time to get it cleaned now!</p>
        </div>
        <div class="image">
            <img src="<?php echo $rootDirectory; ?>images/upholstery-cleaning/upholstery-cleaning-3.jpg" />
        </div>
    </div>
</section>
<section class="reviews">
    <div class="container">
        <?php
        
        include($rootDirectory . "includes/review.php");
        include($rootDirectory . "includes/review.php");
        include($rootDirectory . "includes/review.php");
        
        ?>
    </div>
</section>

<?php

include_once($rootDirectory . "includes/cta-full-screen.php");
include_once($rootDirectory . "includes/footer.php");

?>

<script src="<?php echo $rootDirectory; ?>scripts/before-after.js"></script>
