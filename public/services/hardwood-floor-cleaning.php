<?php 

include_once(dirname($_SERVER['DOCUMENT_ROOT']) . "/includes/header.php");
renderHeader(["title" => "Hardwood Floor Cleaning"]);

?>

<section class="service-selector before-after">
    <div class="overlay"></div>
    <div class="background-img-1" style="background-image: url('/images/hardwood-floor-cleaning/hardwood-floor-cleaning-1.jpg')"></div>
    <div class="background-img-2"></div>
    <div class="container">
        <h1>Hardwood Floor Cleaning</h1>
        <h2>See the difference</h2>
        <div class="service-selector-slide">
            <div class="left-arrow"><span>&lt;</span></div>
            <div class="items">
                <div class="item-container middle" data-id="0"
                        data-background-image="/images/hardwood-floor-cleaning/hardwood-floor-cleaning-1.jpg"
                        data-overlay-opacity="0.5">
                    <div class="item-content before" style="background-image: url('/images/hardwood-floor-cleaning/hardwood-floor-cleaning-1.jpg')"></div>
                    <div class="item-content after" style="background-image: url('/images/hardwood-floor-cleaning/hardwood-floor-cleaning-2.jpg')"></div>
                </div>
                <div class="item-container invisible" data-id="1"
                        data-background-image="/images/hardwood-floor-cleaning/hardwood-floor-cleaning-3.jpg"
                        data-overlay-opacity="0.5">
                    <div class="item-content before" style="background-image: url('/images/hardwood-floor-cleaning/hardwood-floor-cleaning-3.jpg')"></div>
                    <div class="item-content after" style="background-image: url('/images/hardwood-floor-cleaning/hardwood-floor-cleaning-4.jpg')"></div>
                </div>
            </div>
            <div class="right-arrow"><span>&gt;</span></div>
        </div>
        <div class="slide-dots">
            <div class="dot active" data-id="0"></div>
            <div class="dot" data-id="1"></div>
        </div>
        <div class="buttons">
            <a href="/schedule" class="button">Schedule&nbsp;<span class="service"> hardwood floor cleaning</a>
        </div>
    </div>
</section>
<section class="about service">
    <div class="container">
        <div class="text">
            <h2>Hardwood Floor Cleaning</h2>
            <p>When it comes to enhancing your wood floors' beauty, New Life Atlanta Cleaning offers a hardwood floor clean and shine that will add years to the life of your floors and make your floors look amazing!</p>
            <p>Over the years, the cleaning methods we use for our hardwood floors, just aren't enough. Sometimes a deeper clean may be necessary. Depending on the traffic in your home you may need to take advantage of our hardwood floor cleaning service every 3-18 months.</p>
            <p>The process involves a light scrub clean using a rotary machine, rinsing with an oil-based cleaner, and then applying a protectant and shine based upon your preference.</p>
        </div>
        <div class="image">
            <img src="/images/hardwood-floor-cleaning/hardwood-floor-cleaning-1.jpg" />
        </div>
    </div>
</section>
<section class="about service">
    <div class="container">
        <div class="text">
            <h2>The results are fabulous</h2>
            <p>We have helped many people sell their homes very quickly after restoring the beauty of their hardwoods. Call today for a quote. Schedule a hardwood floor cleaning with New Life Atlanta Cleaning and receive one room carpet cleaning or one area rug cleaning for FREE!</p>
        </div>
        <div class="image">
            <img src="/images/hardwood-floor-cleaning/hardwood-floor-cleaning-2.jpg" />
        </div>
    </div>
</section>
<section class="about service">
    <div class="container">
        <div class="text">
            <h2>Other types of flooring that we service</h2>
            <p>Laminate</p>
            <p>Tile</p>
            <p>Engineered Wood</p>
            <p>Ceramic Tile</p>
            <p>Slate</p>
        </div>
        <div class="image">
            <img src="/images/hardwood-floor-cleaning/hardwood-floor-cleaning-3.jpg" />
        </div>
    </div>
</section>
<section class="reviews">
    <div class="container">
        <?php include_once(ROOT_PATH . "/includes/default-reviews.php"); ?>
    </div>
</section>

<?php

include_once(ROOT_PATH . "/includes/cta-full-screen.php");
include_once(ROOT_PATH . "/includes/footer.php");

?>

<script src="/scripts/before-after.js"></script>
