<?php 

$_POST["rootDirectory"] = "../";
$_POST["title"] = "Carpet Cleaning";
include_once("../includes/header.php");

?>

<section class="service-selector before-after">
    <div class="overlay"></div>
    <div class="background-img-1" style="background-image: url('<?php echo $rootDirectory; ?>images/carpet-cleaning/carpet-cleaning-2-after.jpg')"></div>
    <div class="background-img-2"></div>
    <div class="container">
        <h1>Carpet Cleaning</h1>
        <h2>See the difference</h2>
        <div class="service-selector-slide">
            <div class="left-arrow"><span>&lt;</span></div>
            <div class="items">
                <div class="item-container middle" data-id="0"
                        data-background-image="<?php echo $rootDirectory; ?>images/carpet-cleaning/carpet-cleaning-2-after.jpg"
                        data-overlay-opacity="0.5">
                    <div class="item-content before" style="background-image: url('<?php echo $rootDirectory; ?>images/carpet-cleaning/carpet-cleaning-2-before.jpg')"></div>
                    <div class="item-content after" style="background-image: url('<?php echo $rootDirectory; ?>images/carpet-cleaning/carpet-cleaning-2-after.jpg')"></div>
                </div>
                <div class="item-container invisible" data-id="1"
                        data-background-image="<?php echo $rootDirectory; ?>images/carpet-cleaning/carpet-cleaning-3-after.jpg"
                        data-overlay-opacity="0.5">
                    <div class="item-content before" style="background-image: url('<?php echo $rootDirectory; ?>images/carpet-cleaning/carpet-cleaning-3-before.jpg')"></div>
                    <div class="item-content after" style="background-image: url('<?php echo $rootDirectory; ?>images/carpet-cleaning/carpet-cleaning-3-after.jpg')"></div>
                </div>
                <div class="item-container invisible" data-id="2"
                        data-background-image="<?php echo $rootDirectory; ?>images/carpet-cleaning/carpet-cleaning-4-after.jpg"
                        data-overlay-opacity="0.5">
                    <div class="item-content before" style="background-image: url('<?php echo $rootDirectory; ?>images/carpet-cleaning/carpet-cleaning-4-before.jpg')"></div>
                    <div class="item-content after" style="background-image: url('<?php echo $rootDirectory; ?>images/carpet-cleaning/carpet-cleaning-4-after.jpg')"></div>
                </div>
                <div class="item-container invisible" data-id="3"
                        data-background-image="<?php echo $rootDirectory; ?>images/carpet-cleaning/carpet-cleaning-1-after.jpg"
                        data-overlay-opacity="0.7">
                    <div class="item-content before" style="background-image: url('<?php echo $rootDirectory; ?>images/carpet-cleaning/carpet-cleaning-1-before.jpg')"></div>
                    <div class="item-content after" style="background-image: url('<?php echo $rootDirectory; ?>images/carpet-cleaning/carpet-cleaning-1-after.jpg')"></div>
                </div>
            </div>
            <div class="right-arrow"><span>&gt;</span></div>
        </div>
        <div class="slide-dots">
            <div class="dot active" data-id="0"></div>
            <div class="dot" data-id="1"></div>
            <div class="dot" data-id="2"></div>
            <div class="dot" data-id="3"></div>
        </div>
        <div class="buttons">
            <a href="<?php echo $rootDirectory; ?>schedule.php" class="button">Schedule&nbsp;<span class="service"> carpet cleaning</a>
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
            <h2>Carpet Cleaning</h2>
            <p>New Life Atlanta Cleaning has been creating loyal customers for over 43+ years by providing superior service that's always done right the first time.</p>
            <p>Quality control is job one, damage control is never included in our process, nor is it necessary. Get what you pay for: great results, not excuses.</p>
        </div>
        <div class="image">
            <img src="<?php echo $rootDirectory; ?>images/carpet-cleaning/carpet-cleaning-5.jpg" />
        </div>
    </div>
</section>
<section class="about service">
    <div class="container">
        <div class="text">
            <h2>Dries in 1-2 hours<br />—not days</h2>
            <p>Our unique method cleans the entire carpet fiber without getting the pad underneath the carpet wet. Care is taken to make sure your carpet is dry in 1-2 hours.</p>
            <p>Avoid the hard sell of so called "deep cleaning" many of our competitors use in their persuasive techniques to make it sound like that's something you need. Truth is, their level of "deep" cleaning usually soaks the padding under the carpet causing a breeding ground for mold and mildew, also taking days to completely dry.</p>
            <p>Knowing how to clean carpet effectively while keeping YOU happy is what New Life Atlanta Cleaning is all about.</p>
        </div>
        <div class="image">
            <img src="<?php echo $rootDirectory; ?>images/carpet-cleaning/carpet-cleaning-6.jpg" />
        </div>
    </div>
</section>
<section class="about service">
    <div class="container">
        <div class="text">
            <h2>Free sanitizer</h2>
            <p>Receive free sanitizer with every cleaning. This is not a limited time special. It's what we always do.</p>
            <p>Why clean and not sanitize? Other companies know this, that's why they charge anywhere from $90 minimum to $25-$30 per room. Well, there goes your 3 room special for $119.</p>
            <p>We want you happy. When we quote you a price over the phone or internet, that's the price you get. There's never any extra charge for sanitizer. It's always free! Remember, we are creating loyal customers.</p>
        </div>
        <div class="image">
            <img src="<?php echo $rootDirectory; ?>images/carpet-cleaning/carpet-cleaning-8.jpg" />
        </div>
    </div>
</section>
<section class="about service">
    <div class="container">
        <div class="text">
            <h2>One method for all carpet</h2>
            <p>We know our business. We know what clean carpet looks like and feels like. That's what over 43+ years experience can do. We use the original bonnet method and we use it to perfection. This is a lost art that has seen many inefficient diversions. We still maintain the original process that is superior to any other system out there. We leave your carpets clean, fresh, soft to the touch, and dry within 2 hours!</p>
            <p>Another trick of the trade many companies use is to quote a low price, and after inspecting your carpet, they decide that an alternate cleaning method is required that will cost you a lot more money. They don't care if you call them back. Chances are, you will... only to complain. Again, they don't care.</p>
            <p>At New Life Atlanta Cleaning, we do care. We bring New Life to your old carpet. Making you happy is our goal.</p>
        </div>
        <div class="image">
            <img src="<?php echo $rootDirectory; ?>images/carpet-cleaning/carpet-cleaning-7.jpg" />
        </div>
    </div>
</section>
<section class="about service">
    <div class="container">
        <div class="text">
            <h2>We love our customers</h2>
            <p>Sounds silly or cliché, but that's truly why New Life Atlanta Cleaning is different and why we do things the way we do. Instead of rudeness, we bring kindness and always delight in honoring you.</p>
            <p>With New Life Atlanta Cleaning, there are no corrupt business practices or any crooked deception tactics. We know we live in an upside down world now, but if integrity is important to you, you are the customer we are looking for. Give us a call today, you won't be disappointed.</p>
        </div>
        <div class="image">
            <img src="<?php echo $rootDirectory; ?>images/carpet-cleaning/carpet-cleaning-9.jpg" />
        </div>
    </div>
</section>
<section class="about service">
    <div class="container">
        <div class="text">
            <h2>We leave you happy</h2>
            <p>There's nothing more frustrating than hiring a company to provide a service and it winds up becoming a nightmare.</p>
            <p>At New Life Atlanta Cleaning, your satisfaction is our goal. We want to be the only company you think of when it comes to carpet and upholstery cleaning. The choice is simple: good or bad?</p>
        </div>
        <div class="image">
            <img src="<?php echo $rootDirectory; ?>images/carpet-cleaning/carpet-cleaning-10.jpg" />
        </div>
    </div>
</section>
<section class="reviews">
    <div class="container">
        <?php
        
        $_POST["name"] = "Terrie S.";
        $_POST["image"] = $rootDirectory . "images/customer-4-ts.jpg";
        $_POST["location"] = "Social Circle, GA";
        $_POST["review"] = "I was so impressed with Ken and Penny. They came in to my house and made my carpet look like new. We had our youngest son, daughter-in-law and their 6 year old daughter living with us for a year while their new house was being built. They also had a Jack Russell that stayed here as well. We have a Boxer, a Jack Russell, and a cat, so we had a house full. Needless to say the carpet was a mess. These wonderful, brave people came in and said no problem, we can make your carpet look like new. WOW, is all I can say. It LOOKS LIKE NEW!! I am so impressed and would recommend them to anyone who needs a good job done and in a timely manner. They helped move furniture, put down foil under the legs of my tables, chairs and what ever needed it. I will use them again in about 6 months, to keep my carpet looking like it does today!";
        $_POST["rating"] = 5;
        include($rootDirectory . "includes/review.php");

        $_POST["name"] = "Mary L.";
        $_POST["image"] = $rootDirectory . "images/customer-6-maryl.jpg";
        $_POST["location"] = "Stone Mountain, GA";
        $_POST["review"] = "I have been using Ken McCullough and his wife for at least 15 years. They are very good and professional. Once I had a carpet emergency--dog got crazy. They came on a Sunday and did an excellent job. They have cleaned the carpet in my rental house also. I will certaily continue to use them, they are the best!!!";
        $_POST["rating"] = 5;
        include($rootDirectory . "includes/review.php");

        $_POST["name"] = "Adrian S.";
        $_POST["image"] = $rootDirectory . "images/customer-3-as.jpg";
        $_POST["location"] = "Atlanta, GA";
        $_POST["review"] = "Ken and his family are awesome! They are very detailed and complete the work on time. Their method of carpet cleaning is the best type of cleaning that anyone can do to their carpet. I have tried many other types of carpet cleaning and nothing last like their work. I highly recommend them. Even when you think your carpet is gone, they bring New Life to the carpet!";
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
