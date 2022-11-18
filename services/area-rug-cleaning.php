<?php 

$_POST["rootDirectory"] = "../";
$_POST["title"] = "Area Rug Cleaning";
include_once("../includes/header.php"); ?>

<section class="service-selector before-after">
    <div class="overlay"></div>
    <div class="background-img-1"></div>
    <div class="background-img-2"></div>
    <div class="container">
        <h1>Area Rug Cleaning </h1>
        <h2>See the difference</h2>
        <div class="service-selector-slide">
            <div class="left-arrow"><span>&lt;</span></div>
            <div class="items">
                <div class="item-container middle" data-id="0"
                        data-background-image="<?php echo $rootDirectory; ?>images/service-selector/carpet-1.png"
                        data-overlay-opacity="0.5">
                    <div class="item-content before" style="background-image: url('<?php echo $rootDirectory; ?>images/service-selector/carpet-1-before-demo.png')">1</div>
                    <div class="item-content after" style="background-image: url('<?php echo $rootDirectory; ?>images/service-selector/carpet-1.png')"></div>
                </div>
                <div class="item-container invisible" data-id="1"
                        data-background-image="<?php echo $rootDirectory; ?>images/service-selector/vct-1.png"
                        data-overlay-opacity="0.5">
                    <div class="item-content before" style="background-image: url('<?php echo $rootDirectory; ?>images/service-selector/carpet-1-before-demo.png')">2</div>
                    <div class="item-content after" style="background-image: url('<?php echo $rootDirectory; ?>images/service-selector/carpet-1.png')"></div>
                </div>
                <div class="item-container invisible" data-id="2"
                        data-background-image="<?php echo $rootDirectory; ?>images/service-selector/carpet-1.png"
                        data-overlay-opacity="0.5">
                    <div class="item-content before" style="background-image: url('<?php echo $rootDirectory; ?>images/service-selector/carpet-1-before-demo.png')">3</div>
                    <div class="item-content after" style="background-image: url('<?php echo $rootDirectory; ?>images/service-selector/carpet-1.png')"></div>
                </div>
                <div class="item-container invisible" data-id="3"
                        data-background-image="<?php echo $rootDirectory; ?>images/service-selector/vct-1.png"
                        data-overlay-opacity="0.5">
                    <div class="item-content before" style="background-image: url('<?php echo $rootDirectory; ?>images/service-selector/carpet-1-before-demo.png')">4</div>
                    <div class="item-content after" style="background-image: url('<?php echo $rootDirectory; ?>images/service-selector/carpet-1.png')"></div>
                </div>
                <div class="item-container invisible" data-id="4"
                        data-background-image="<?php echo $rootDirectory; ?>images/service-selector/vct-1.png"
                        data-overlay-opacity="0.5">
                    <div class="item-content before" style="background-image: url('<?php echo $rootDirectory; ?>images/service-selector/carpet-1-before-demo.png')">5</div>
                    <div class="item-content after" style="background-image: url('<?php echo $rootDirectory; ?>images/service-selector/carpet-1.png')"></div>
                </div>
            </div>
            <div class="right-arrow"><span>&gt;</span></div>
        </div>
        <div class="slide-dots">
            <div class="dot active" data-id="0"></div>
            <div class="dot" data-id="1"></div>
            <div class="dot" data-id="2"></div>
            <div class="dot" data-id="3"></div>
            <div class="dot" data-id="4"></div>
        </div>
        <div class="buttons">
            <a href="#schedule" class="button">Schedule&nbsp;<span class="service"> area rug cleaning</a>
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
            <h2>Area Rug Cleaning</h2>
            <p>Area rugs give the perfect accent and character to any room and they also need cleaning from time to time.</p>
            <p>Experience the vivid, bright colors of your beautiful rugs once again! We clean the entire fiber of the rugs with no moisture going into the backing, so there's never a chance of damaging the floors underneath.</p>
            <p>Save up to 400% compared to competitors pricing, when you choose New Life Atlanta Cleaning for your area rug cleaning.</p>
        </div>
        <div class="image">
            <img src="<?php echo $rootDirectory; ?>images/service-selector/vct-1.png" />
        </div>
    </div>
</section>
<section class="about service">
    <div class="container">
        <div class="text">
            <h2>Area rug cleaning in your home</h2>
            <p>Perfectly safe to do inside your home, right on top of your floors which can save you a bundle on pick up and delivery fees! Choosing another company could cost you hundreds more!</p>
        </div>
        <div class="image">
            <img src="<?php echo $rootDirectory; ?>images/service-selector/carpet-1.png" />
        </div>
    </div>
</section>
<section class="about service">
    <div class="container">
        <div class="text">
            <h2>Over 40 years of expertise</h2>
            <p>Since 1978, we have been building long lasting relationships with our customers.</p>
            <p>Our whole philosophy is integrity. Giving the absolute best end product to the customer at a fair price with no deception at any time.</p>
            <p>We will test your rug to make sure it can be cleaned. Most rugs can be cleaned, but we want to make sure first, then we clean it right where it sits with no harm to your floors.</p>
            <p>Get the respect you deserve. No exorbitant fees just because it's a rug. Experience how easy and effective it is to have your area rugs cleaned by New Life!</p>
        </div>
        <div class="image">
            <img src="<?php echo $rootDirectory; ?>images/service-selector/carpet-1.png" />
        </div>
    </div>
</section>
<section class="about service">
    <div class="container">
        <div class="text">
            <h2>Choose us for your area rug cleaning</h2>
            <p>Discover what it's like to have confidence and loyalty at your fingertips for your area rug cleaning needs. We are sure once you try us, you will be a customer for life!</p>
            <p>If quality matters to you, then you are the customer we are looking for. Let us prove to you, New Life Atlanta Cleaning is the only cleaning company you'll ever need.</p>
            <p>Don't take any more chances, give us a call today!</p>
        </div>
        <div class="image">
            <img src="<?php echo $rootDirectory; ?>images/service-selector/carpet-1.png" />
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
