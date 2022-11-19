<?php 

$_POST["rootDirectory"] = "../";
$_POST["title"] = "Whole House Odor Removal";
$_POST["hasNavigationBackground"] = true;
include_once("../includes/header.php");

?>

<section class="about service">
    <div class="container">
        <div class="text">
            <h2>Whole House Odor Removal</h2>
            <p>If you have poor indoor air quality, the electronic air cleaner is for you!</p>
            <p>Just plug it in, turn it on, and get ready for some fresh air.</p>
            <p>This is truly one of the most amazing machines when you consider all it does.</p>
            <p>Unwanted smells associated with cigarette smoke, mold & mildew, smoke damage, cooking, damp basements, pets, water damage and many others are no match for the electronic air cleaner.</p>
            <p>It attacks odors at their source and converts the bad bacteria into oxygen, leaving a fresh clean smell.</p>
        </div>
        <div class="image">
            <img src="<?php echo $rootDirectory; ?>images/whole-house-odor-removal-1.jpg" />
        </div>
    </div>
</section>
<section class="about service">
    <div class="container">
        <div class="text only">
            <h2>Doubles as a sanitizer</h2>
            <p>Indoor air pollution can seem like an impossible foe to defeat. Since we build our homes to be energy efficient and air tight, the negative is...that can become a breeding ground for bacteria.</p>
            <p>Running the electronic air cleaner is like exposing all of those air tight enclosures to the outside world.</p>
            <p>It's like bringing the cleaning power of nature into your home.You will be amazed at how fresh and clean your once stinky, smelly house, office, or car used to smell. Everything that comes in contact with the electronic air cleaner will smell like it's been "aired out" in the clean, natural forest.</p>
        </div>
    </div>
</section>
<section class="about service">
    <div class="container">
        <div class="text only">
            <h2>Has many applications</h2>
            <p>In addition to using it in your home, it's also perfect for dormitories, pubs, apartments, Real Estate Sales, autos, hospitals, rental cars, bars, rental properties, restaurants, bingo parlors, RVs, locker rooms, schools, day-cares, casinos, damp basements, and the list can go on-and-on!</p>
            <p>Imagine bringing the cleaning, freshening power of nature inside your home, office, or vehicle.</p>
            <p>The active oxygen will travel into air ducts, cracks and crevices, permeating the carpet, walls, drapes, furniture, and anything porous, totally eliminating any foul smell; converting bad bacteria into oxygen.</p>
            <p>This is a rental service in which you would rent the machine for 1-3 days, depending on the pollutant you want to eliminate.</p>
        </div>
    </div>
</section>
<section class="reviews">
    <div class="container">
        <?php
        
        $_POST["name"] = "Beth N.";
        $_POST["location"] = "Roswell, GA";
        $_POST["review"] = "I would highly recommend New Life Atlanta Cleaning! Ken and Penny are wonderful, honest, and efficient! We have been using their services for years and have been very pleased.";
        $_POST["rating"] = 5;
        include($rootDirectory . "includes/review.php");

        $_POST["name"] = "Rebecca B.";
        $_POST["location"] = "Covington, GA";
        $_POST["review"] = "We have proudly used New Life Atlanta Carpet Cleaning for 7 years. We are very pleased with their professionalism, great work ethics, and just plain PLEASANT attitude. Peace and Thanks.";
        $_POST["rating"] = 5;
        include($rootDirectory . "includes/review.php");

        $_POST["name"] = "Darlene C";
        $_POST["location"] = "Morrow, GA";
        $_POST["review"] = "The best people ever. Very professional to work with. Dependable always and a great job!";
        $_POST["rating"] = 5;
        include($rootDirectory . "includes/review.php");
        
        ?>
    </div>
</section>

<?php

include_once($rootDirectory . "includes/cta-full-screen.php");
include_once($rootDirectory . "includes/footer.php");

?>

<script src="<?php echo $rootDirectory; ?>scripts/before-after.js"></script>
