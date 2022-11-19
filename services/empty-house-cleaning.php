<?php 

$_POST["rootDirectory"] = "../";
$_POST["title"] = "Empty House Cleaning";
$_POST["hasNavigationBackground"] = true;
include_once("../includes/header.php");

?>

<section class="about service">
    <div class="container">
        <div class="text only">
            <h2>Empty House Cleaning</h2>
            <p>Moving out? Moving In? Trying to sell?</p>
            <p>New Life Atlanta Cleaning's complete turnkey service gets your home move-in ready! Let us handle your empty house cleaning from top to bottom.</p>
        </div>
    </div>
</section>
<section class="about service">
    <div class="container">
        <div class="text only">
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
