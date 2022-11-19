<div class="review">
    <?php

    $image = $rootDirectory . "images/review-default.png";
    if (isset($_POST["image"])) {
        $image = $_POST["image"];
        unset($_POST["image"]);
    }

    $name = "John D.";
    if (isset($_POST["name"])) {
        $name = $_POST["name"];
        unset($_POST["name"]);
    }

    $location = "City, ST";
    if (isset($_POST["location"])) {
        $location = $_POST["location"];
        unset($_POST["location"]);
    }

    $review = "Aliquam auctor, est non aliquet sollicitudin, dui odio tristique dui, id pretium ante quam nec massa. Sed gravida ligula at erat vulputate commodo in vitae eros. Vestibulum neque odio, convallis a venenatis quis, fermentum et justo. In nec tortor a orci volutpat lacinia. In iaculis laoreet faucibus. Nulla egestas est ut blandit pharetra. Nunc vitae enim quam. Integer tristique odio eget facilisis laoreet.";
    if (isset($_POST["review"])) {
        $review = $_POST["review"];
        unset($_POST["review"]);
    }

    $rating = 5;
    if (isset($_POST["rating"])) {
        $rating = $_POST["rating"];
        unset($_POST["rating"]);
    }

    ?>
    <img src="<?php echo $image; ?>" class="profile" />
    <span class="name"><?php echo $name; ?></span>
    <span class="location"><?php echo $location; ?></span>
    <div class="stars">
        <?php

        for ($x = 0; $x < $rating; $x++) {
            echo '<img src="' . $rootDirectory . 'images/star.png" class="star" />';
        }

        ?>
    </div>
    <p><?php echo $review; ?></p>
</div>

