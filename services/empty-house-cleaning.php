<?php 

$_POST["rootDirectory"] = "../";
$_POST["title"] = "Empty House Cleaning";
include_once("../includes/header.php"); ?>

<section class="service-selector before-after">
    <div class="overlay"></div>
    <div class="background-img-1"></div>
    <div class="background-img-2"></div>
    <div class="container">
        <h1>Empty House Cleaning</h1>
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
            <a href="<?php echo $rootDirectory; ?>schedule.php" class="button">Schedule&nbsp;<span class="service"> empty house cleaning</a>
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
            <h2>Empty House Cleaning</h2>
            <p>Moving out? Moving In? Trying to sell?</p>
            <p>New Life Atlanta Cleaning's complete turnkey service gets your home move-in ready! Let us handle your empty house cleaning from top to bottom.</p>
        </div>
        <div class="image">
            <img src="<?php echo $rootDirectory; ?>images/service-selector/vct-1.png" />
        </div>
    </div>
</section>
<section class="about service">
    <div class="container">
        <div class="text">
            <h2>Here's what you get</h2>
            <p>Ceiling fans dusted and brushed clean.</p>

            <p>Bathrooms cleaned thoroughly.</p>

            <p>Air vents, sinks, vanities, tubs, toilets, mirrors, and floors are shined to perfection.</p>

            <p>Wood floors are swept and cleaned.</p>

            <p>Reshine available.</p>

            <p>Carpets are vacuumed.</p>

            <p>Tile floors swept and cleaned.</p>

            <p>Kitchen appliances wiped out and deep cleaned.</p>

            <p>Cabinets vacuumed and wiped out.</p>

            <p>Drawers vacuumed and wiped out.</p>

            <p>Outlet covers cleaned.</p>

            <p>Window sills dusted and cleaned.</p>

            <p>Baseboards wiped and cleaned.</p>

            <p>Air vent intakes dusted and brushed clean.</p>

            <p>Remove all cob webs.</p>

            <p>Wipe all molding, trim, and door frames.</p>

            <p>Vacuum all stairs.</p>

            <p>Extras available.</p>

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
