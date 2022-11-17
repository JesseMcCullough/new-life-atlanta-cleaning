<?php include_once("includes/header.php"); ?>

<section class="service-selector">
    <div class="overlay"></div>
    <div class="background-img-1"></div>
    <div class="background-img-2"></div>
    <div class="container">
        <h1>I need to clean my ... </h1>
        <h2>Carpet</h2>
        <div class="service-selector-slide">
            <div class="left-arrow"><span>&lt;</span></div>
            <div class="items">
                <div class="item-container left tile" data-id="0" data-title="Tile"
                        data-button-text="tile cleaning" data-button-href="#tilecleaning"
                        data-background-image="images/service-selector/vct-1.png"
                        data-overlay-opacity="0.5">
                    <div class="item-content"></div>
                </div>
                <div class="item-container middle carpet" data-id="1" data-title="Carpet"
                        data-button-text="carpet cleaning" data-button-href="#carpetcleaning"
                        data-background-image="images/service-selector/carpet-1.png">
                    <div class="item-content"></div>
                </div>
                <div class="item-container right upholstery" data-id="2" data-title="Upholstery"
                        data-button-text="upholstery cleaning" data-button-href="#upholsterycleaning"
                        data-background-image="images/service-selector/upholstery-1.png"
                        data-overlay-opacity="0.4">
                    <div class="item-content"></div>
                </div>
                <div class="item-container invisible service-4" data-id="3" data-title="Service 4"
                        data-button-text="service 4 cleaning" data-button-href="#service4cleaning"
                        data-background-image="images/service-selector/vct-2.png"
                        data-overlay-opacity="0.8">
                    <div class="item-content"></div>
                </div>
                <div class="item-container invisible service-5" data-id="4" data-title="Service 5"
                        data-button-text="service 5 cleaning" data-button-href="#service5cleaning"
                        data-background-image="images/service-selector/carpet-2.png">
                    <div class="item-content"></div>
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
            <a href="#" class="button secondary">Learn about&nbsp;<span class="service">carpet cleaning</span></a>
            <a href="#schedule" class="button">Schedule&nbsp;<span class="service"> carpet cleaning</a>
        </div>
    </div>
</section>
<section class="about">
    <div class="container">
        <div class="text">
            <h2>About Us</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris vel fermentum felis. Pellentesque malesuada elit eget pulvinar mollis. Maecenas sit amet mauris et elit rhoncus commodo. Sed vitae ornare arcu, non rhoncus nulla. Vivamus euismod rutrum ante vitae cursus. Etiam lorem ipsum, convallis non lacus a, malesuada porta turpis. Suspendisse potenti. Vivamus ut mi lorem. Fusce a odio sapien. Donec nec volutpat sem, id suscipit nibh. Pellentesque dui quam, ullamcorper quis vestibulum ultricies, commodo ut mi. Aenean et scelerisque urna, vel placerat dui. Maecenas tincidunt lectus quis tempus pretium.</p>
            <p>Quisque maximus maximus ex. Vivamus rutrum egestas metus, vel fringilla odio iaculis eget. In aliquet arcu arcu. Aenean lorem mi, pulvinar in justo nec, convallis ornare est. Aliquam et vestibulum mauris, ultricies pellentesque eros. Maecenas fermentum dui feugiat velit hendrerit lacinia. Morbi ultrices tellus sit amet mauris consectetur, ac condimentum tellus suscipit. Mauris nec neque finibus, interdum odio vitae, sodales urna.</p>
        </div>
        <div class="image">
            <div class="caption">
                <span class="name">Ken &amp; Penny McCullough</span>
                <span class="title">Owners / Operators</span>
            </div>
            <img src="images/ken-penny.png" />
        </div>
    </div>
</section>
<section class="reviews">
    <div class="container">
        <?php
        
        include("includes/review.php");
        include("includes/review.php");
        include("includes/review.php");
        
        ?>
    </div>
</section>

<?php

include_once("includes/cta-full-screen.php");
include_once("includes/footer.php");

?>

<script src="scripts/service-selector.js"></script>
