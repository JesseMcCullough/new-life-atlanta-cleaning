<?php

define("ROOT_PATH", dirname($_SERVER['DOCUMENT_ROOT']));
define("PUBLIC_PATH", $_SERVER['DOCUMENT_ROOT']);

session_start();

$configString = file_get_contents(dirname($_SERVER['DOCUMENT_ROOT']) . "/config.json");
$config = json_decode($configString, true);
$mail = $config["mail"];

function renderHeader($options = []) {
    $defaultTitle = "New Life Atlanta Cleaning";
    $defaults = [
        "title" => $defaultTitle,
        "description" => "For over 40 years, we have been exceeding the standard for cleaning across the metro Atlanta area. We promise to treat you like family, with integrity and total fairness as you invite us out for your cleaning. You are our #1 priority!",
        "hasNavigationBackground" => false
    ];
    $options = array_merge($defaults, $options);

    // If a title is given, the title will be "GIVEN_TITLE | New Life Atlanta Cleaning".
    if ($options["title"] != $defaultTitle) {
        $options["title"] = $options["title"] . " | " . $defaultTitle;
    }
    ?>
    <!DOCTYPE html>
    <html>
    <head>
        <meta name="viewport" content="initial-scale=1.0, width=device-width" />
        <meta charset="UTF-8" />
        <meta property="og:title" content="<?php echo $options["title"]; ?>" />
        <meta property="og:description" content="<?php echo $options["description"]; ?>" />
        <meta property="og:image" content="https://newlifeatlantacleaning.com/images/full-logo.png" />

        <link rel="stylesheet" type="text/css" href="/styles/style.css" />
        <link href="/images/favicon.ico" type="image/x-icon" rel="icon" />

        <title><?php echo $options["title"]; ?></title>
        
        <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    </head>
    <body>
        <div class="nav<?php if ($options["hasNavigationBackground"]) { echo " background"; } ?>">
            <div class="container">
                <a href="/" class="logo"><img src="/images/logo.png" /></a>
                <ul>
                    <li class="schedule"><a href="/schedule">Schedule</a></li>
                    <li><a href="/services/vct-cleaning">VCT</a></li>
                    <li><a href="/services/carpet-cleaning">Carpet</a></li>
                    <li><a href="/services/upholstery-cleaning">Upholstery</a></li>
                    <li><a href="/services/area-rug-cleaning">Area Rug</a></li>
                    <li><a href="/services/empty-house-cleaning">Empty House</a></li>
                    <li class="dropdown-menu">Odor
                        <ul>
                            <li><a href="/services/pet-odor-removal">Pet Odor</a></li>
                            <li><a href="/services/whole-house-odor-removal">Whole House Odor</a></li>
                        </ul>
                    </li>
                </ul>
                <div class="phone-cta">
                    <a href="tel:(678)318-1353" class="phone">
                        <img src="/images/icons/phone-icon.png" />
                        (678) 318-1353
                    </a>
                    <a href="/schedule" class="button">Schedule</a>
                </div>
                <div class="mobile-menu-icon">
                    <div class="bar"></div>
                    <div class="bar"></div>
                    <div class="bar"></div>
                </div>
                <div class="mobile-overlay"></div>
            </div>
        </div>
<?php

}

?>
