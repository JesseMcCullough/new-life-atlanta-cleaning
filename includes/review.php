<?php

function renderReview($options = []) {
    static $defaults = [
        "image" => "/images/review-default.png",
        "name" => "John D.",
        "location" => "City, ST",
        "review" => "Aliquam auctor, est non aliquet sollicitudin, dui odio tristique dui, id pretium ante quam nec massa. Sed gravida ligula at erat vulputate commodo in vitae eros. Vestibulum neque odio, convallis a venenatis quis, fermentum et justo. In nec tortor a orci volutpat lacinia. In iaculis laoreet faucibus. Nulla egestas est ut blandit pharetra. Nunc vitae enim quam. Integer tristique odio eget facilisis laoreet.",
        "rating" => 5,
    ];
    $options = array_merge($defaults, $options);
    ?>
    <div class="review">
        <img src="<?php echo $options["image"]; ?>" class="profile" />
        <span class="name"><?php echo $options["name"]; ?></span>
        <span class="location"><?php echo $options["location"]; ?></span>
        <div class="stars">
            <?php

            for ($x = 0; $x < $options["rating"]; $x++) {
                echo '<img src="/images/star.png" class="star" />';
            }

            ?>
        </div>
        <p><?php echo $options["review"]; ?></p>
    </div>
<?php

}

?>

