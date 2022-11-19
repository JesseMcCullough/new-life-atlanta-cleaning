<?php 

$_POST["rootDirectory"] = "../";
$_POST["title"] = "Pet Odor Removal";
$_POST["hasNavigationBackground"] = true;
include_once("../includes/header.php");

?>

<section class="about service">
    <div class="container">
        <div class="text only">
            <h2>Pet Odor Removal</h2>
            <p>As much as we love our precious little friends, sometimes accidents happen. Sometime they just don't get out in time, and other times they are just gonna go whenever and wherever they want. One thing certain, we don't want to live in their "toilet."</p>
        </div>
    </div>
</section>
<section class="about service">
    <div class="container">
        <div class="text only">
            <h2>A common sense approach</h2>
            <p>Urine and feces consists of bacteria. Only a live enzyme bacteria that's designed to digest these types of bacteria is most effective at removing the odors associated with pet-caused odors.</p>
            <p>After four decades of carpet cleaning experience, our suggestion on steam cleaning* is still the same as it was from day one in the business: don't do it, especially when it comes to pet odors.</p>
            <p>*Avoid using steam cleaners to clean urine odors from carpet or upholstery. The heat will permanently set the stain and the odor by bonding the protein into any man-made fibers.</p>
        </div>
    </div>
</section>
<section class="about service">
    <div class="container">
        <div class="text only">
            <h2>Never force pet urine into the pad</h2>
            <p>Using high pressure hoses to force water-based products into your carpet drives the pet odors further down into the padding, creating a total magnified mess.</p>
            <p>We use a super concentrated, high-potency enzyme bacteria that will digest all pet waste bacteria on the carpet. And, we keep this removal process on the carpet fibers, above the backing, never driving it or the unfriendly bacteria into the padding.</p>
            <p>However, if the urine has already reached into the padding there are additional procedures offered that completely removes the smell.</p>
        </div>
    </div>
</section>
<section class="about service">
    <div class="container">
        <div class="text only">
            <h2>Friendly, no pressure consultation</h2>
            <p>We provide professional consultation and expertise in pet odor removal. You pay nothing until the method necessary is determined at your approval. No hit and run policy.</p>
        </div>
    </div>
</section>
<section class="about service">
    <div class="container">
        <div class="text only">
            <h2>Don't make a bad situation worse</h2>
            <p>If you have pet odors that you want to remove from your carpet, there is only one call to make. Don't gamble with inferior methods or services. Let us take care of pet odors for you.</p>
            <p>We'll get your dog or cat out of the "doghouse" and make it easier for you breathe in your own home!</p>
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
