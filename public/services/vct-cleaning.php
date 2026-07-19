<?php 

include_once(dirname($_SERVER['DOCUMENT_ROOT']) . "/includes/header.php");
renderHeader(["title" => "VCT Cleaning"]);

?>

<section class="service-selector before-after">
    <div class="overlay"></div>
    <div class="background-img-1" style="background-image: url('/images/vct-cleaning/vct-cleaning-1.jpg')"></div>
    <div class="background-img-2"></div>
    <div class="container">
        <h1>VCT Cleaning</h1>
        <h2>See the difference</h2>
        <div class="service-selector-slide">
            <div class="left-arrow"><span>&lt;</span></div>
            <div class="items">
                <div class="item-container middle" data-id="0"
                        data-background-image="/images/vct-cleaning/vct-cleaning-1.jpg"
                        data-overlay-opacity="0.5">
                    <div class="item-content before" style="background-image: url('/images/vct-cleaning/vct-cleaning-1.jpg')"></div>
                    <div class="item-content after" style="background-image: url('/images/vct-cleaning/vct-cleaning-2.jpg')"></div>
                </div>
                <div class="item-container invisible" data-id="1"
                        data-background-image="/images/vct-cleaning/vct-cleaning-3.jpg"
                        data-overlay-opacity="0.5">
                    <div class="item-content before" style="background-image: url('/images/vct-cleaning/vct-cleaning-3.jpg')"></div>
                    <div class="item-content after" style="background-image: url('/images/vct-cleaning/vct-cleaning-4.jpg')"></div>
                </div>
                <div class="item-container invisible" data-id="2"
                        data-background-image="/images/vct-cleaning/vct-cleaning-5.jpg"
                        data-overlay-opacity="0.5">
                    <div class="item-content before" style="background-image: url('/images/vct-cleaning/vct-cleaning-5.jpg')"></div>
                    <div class="item-content after" style="background-image: url('/images/vct-cleaning/vct-cleaning-6.jpg')"></div>
                </div>
            </div>
            <div class="right-arrow"><span>&gt;</span></div>
        </div>
        <div class="slide-dots">
            <div class="dot active" data-id="0"></div>
            <div class="dot" data-id="1"></div>
            <div class="dot" data-id="2"></div>
        </div>
        <div class="buttons">
            <a href="/schedule" class="button">Schedule&nbsp;<span class="service"> VCT cleaning</a>
        </div>
    </div>
</section>
<section class="about service">
    <div class="container">
        <div class="text">
            <h2>VCT Cleaning</h2>
            <p>Everyone wants their floors to always look clean, smooth and glossy. But it requires a detailed maintenance plan to preserve that "glossy" look. Constant foot traffic, as well as scratches and stains leave it looking dull and lifeless.</p>
            <p>So, how do you keep your VCT floors looking great? The best thing that you can do to keep your VCT floors looking great, is stripping and waxing. Stripping the old finish away and replacing it with the proper amount of new finish brings new life and shine back to the tile.</p>
            <p>Stripping and waxing your VCT floors every 9-12 months keeps them looking great for years to come.</p>
        </div>
        <div class="image">
            <img src="/images/vct-cleaning/vct-cleaning-7.jpg" />
        </div>
    </div>
</section>
<section class="about service">
    <div class="container">
        <div class="text">
            <h2>Make your VCT floors look great again</h2>
            <p>Although VCT floors are very durable, they do require proper maintenance to preserve their resilience and luster. Without proper maintenance, VCT floors lose their attractive shine and brilliance. These VCT floors can develop wax buildup and begin to show an ugly yellow discoloration.</p>
            <p>VCT floor stripping and waxing should be an important part of maintaining your VCT floor's beauty and cleanliness. Yes, we do address all edges and corners!</p>
            <p>New Life Atlanta Cleaning has been offering expert VCT floor stripping and waxing for over 43+ years. Whether the heavy foot traffic is in your commercial business or residential home, we have the right chemicals that are safe for the environment and effective on your VCT flooring to strip away the old wax and dirt that has accumulated on your VCT floor.</p>
            <p>Once the old finish is removed, the new finish can then be applied to make your VCT flooring come to life again!</p>
        </div>
        <div class="image">
            <img src="/images/vct-cleaning/vct-cleaning-1.jpg" />
        </div>
    </div>
</section>
<section class="about service">
    <div class="container">
        <div class="text">
            <h2>Keep your VCT floors looking great</h2>
            <p>Let us take care of your stripping and waxing once a year! With additional VCT floor care services such as spray buffing, your VCT floors will look their best and be protected from everyday wear and tear.</p>
            <p>Keep your VCT floors clean and increase their lifespan with professional VCT floor care services from New Life Atlanta Cleaning.</p>
        </div>
        <div class="image">
            <img src="/images/vct-cleaning/vct-cleaning-2.jpg" />
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
