<?php 

include_once(dirname($_SERVER['DOCUMENT_ROOT']) . "/includes/header.php");
renderHeader();

?>

<section class="service-selector">
    <div class="overlay"></div>
    <div class="background-img-1" style="background-image: url('/images/vct-cleaning/vct-cleaning-1.jpg')"></div>
    <div class="background-img-2"></div>
    <div class="container">
        <h1>I need to clean my ... </h1>
        <h2>VCT</h2>
        <div class="service-selector-slide">
            <div class="left-arrow"><span>&lt;</span></div>
            <div class="items">
                <div class="item-container left tile" data-id="0" data-title="Upholstery"
                        data-button-text="upholstery cleaning" data-button-href="/services/upholstery-cleaning"
                        data-background-image="/images/upholstery-cleaning/upholstery-cleaning-1.jpg">
                    <div class="item-content" style="background-image: url('/images/upholstery-cleaning/upholstery-cleaning-1.jpg')"></div>
                </div>
                <div class="item-container middle vct" data-id="1" data-title="VCT"
                        data-button-text="VCT cleaning" data-button-href="/services/vct-cleaning"
                        data-background-image="/images/vct-cleaning/vct-cleaning-1.jpg">
                    <div class="item-content" style="background-image: url('/images/vct-cleaning/vct-cleaning-1.jpg')"></div>
                </div>
                <div class="item-container right carpet" data-id="2" data-title="Carpet"
                        data-button-text="carpet cleaning" data-button-href="/services/carpet-cleaning"
                        data-background-image="/images/carpet-cleaning/carpet-cleaning-10.jpg">
                    <div class="item-content" style="background-image: url('/images/carpet-cleaning/carpet-cleaning-10.jpg')"></div>
                </div>
                <div class="item-container invisible service-4" data-id="3" data-title="Area Rug"
                        data-button-text="area rug cleaning" data-button-href="/services/area-rug-cleaning"
                        data-background-image="/images/area-rug-cleaning/area-rug-cleaning-2.jpg">
                    <div class="item-content" style="background-image: url('/images/area-rug-cleaning/area-rug-cleaning-2.jpg')"></div>
                </div>
                <div class="item-container invisible service-7" data-id="4" data-title="Whole House Odor"
                        data-button-text="whole house odor removal" data-button-href="/services/whole-house-odor-removal"
                        data-background-image="/images/whole-house-odor-removal-1.jpg">
                    <div class="item-content" style="background-image: url('/images/whole-house-odor-removal-1.jpg')"></div>
                </div>
            </div>
            <div class="right-arrow"><span>&gt;</span></div>
        </div>
        <div class="slide-dots">
            <div class="dot" data-id="0"></div>
            <div class="dot active" data-id="1"></div>
            <div class="dot" data-id="2"></div>
            <div class="dot" data-id="3"></div>
            <div class="dot" data-id="4"></div>
        </div>
        <div class="buttons">
            <a href="/services/vct-cleaning" class="button secondary">Learn about&nbsp;<span class="service">VCT cleaning</span></a>
            <a href="/schedule" class="button">Schedule&nbsp;<span class="service"> VCT cleaning</a>
        </div>
    </div>
</section>
<section class="about">
    <div class="container">
        <div class="text">
            <h2>About Us</h2>
            <p>For over 40 years, we have been exceeding the standard for  cleaning across the metro Atlanta area. We promise to treat you like family, with integrity and total fairness as you invite us out for your cleaning. You are our #1 priority!</p>
        </div>
        <div class="image">
            <div class="caption">
                <span class="name">Ken &amp; Penny McCullough</span>
                <span class="title">Owners / Operators</span>
            </div>
            <img src="/images/ken-penny.png" />
        </div>
    </div>
</section>
<section class="reviews">
    <div class="container">
        <?php

        include_once(ROOT_PATH . "/includes/review.php");

        renderReview([
            "name" => "Holly B.",
            "location" => "Cumming, GA",
            "review" => "My carpets always look so nice, and smell so good after Ken and Penny are done! They are the best! And very good prices!",
            "rating" => 5
        ]);

        renderReview([
            "name" => "Nancy D.",
            "location" => "Roswell, GA",
            "review" => "Honest, professional, timely, and reasonable. New Life Atlanta Cleaning is the best.",
            "rating" => 5
        ]);

        renderReview([
            "name" => "Adrian S.",
            "location" => "Atlanta, GA",
            "review" => "Ken and his family are awesome! They are very detailed and complete the work on time. Their method of carpet cleaning is the best type of cleaning that anyone can do to their carpet. I have tried many other types of carpet cleaning and nothing last like their work. I highly recommend them. Even when you think your carpet is gone, they bring New Life to the carpet!",
            "rating" => 5
        ]);

        ?>
    </div>
</section>

<?php

include_once(ROOT_PATH . "/includes/cta-full-screen.php");
include_once(ROOT_PATH . "/includes/footer.php");

?>

<script src="/scripts/service-selector.js"></script>
