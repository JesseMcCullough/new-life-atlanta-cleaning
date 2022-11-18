<?php

session_start();

$rootDirectory = "";
if (isset($_POST["rootDirectory"])) {
    $rootDirectory = $_POST["rootDirectory"];
}

$configString = file_get_contents($rootDirectory . "config.json");
$config = json_decode($configString, true);
$mail = $config["mail"];

function getMailHeaders() {
	global $mail;

	$headers = "From: \"" . $mail["name"] . "\" <" . $mail["address"] . ">\r\n"
			. "Reply-To: \"" . $mail["name"] . "\" <" . $mail["address"] . ">\r\n";

	$mailToArray = $mail["to"];
	$mailToArrayCount = count($mailToArray);

	$mailToOthers = "";
	for ($x = 0; $x < $mailToArrayCount; $x++) {
		$mailToOthers .= "\"" . $mail["to"][$x]["name"] . "\" <" . $mail["to"][$x]["address"] . ">";
		if ($x != $mailToArrayCount - 1) { // not last 
			$mailToOthers .= ",";
		}
	}
	$headers .= "Bcc: " . $mailToOthers;

	return $headers;
}

// If a title is given, the title will be "GIVEN_TITLE | New Life Atlanta Cleaning".
$title = "New Life Atlanta Cleaning";
if (isset($_POST["title"])) {
    $temp = $title;
    $title = $_POST["title"] . " | " . $temp;
}


?>

<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="initial-scale=1.0, width=device-width" />
    <meta charset="UTF-8" />
    <link rel="stylesheet" type="text/css" href="<?php echo $rootDirectory; ?>styles/style.css" />
    <title><?php echo $title; ?></title>
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
</head>
<body>
    <div class="nav">
        <div class="container">
            <a href="<?php echo $rootDirectory; ?>index.php" class="logo"><img src="<?php echo $rootDirectory; ?>images/logo.png" /></a>
            <ul>
                <li class="schedule"><a href="#">Schedule</a></li>
                <li><a href="<?php echo $rootDirectory; ?>services/vct-cleaning.php">VCT</a></li>
                <li><a href="<?php echo $rootDirectory; ?>services/carpet-cleaning.php">Carpet</a></li>
                <li><a href="<?php echo $rootDirectory; ?>services/upholstery-cleaning.php">Upholstery</a></li>
                <li><a href="<?php echo $rootDirectory; ?>services/area-rug-cleaning.php">Area Rug</a></li>
                <li><a href="<?php echo $rootDirectory; ?>services/empty-house-cleaning.php">Empty House</a></li>
                <li><a href="<?php echo $rootDirectory; ?>services/pet-odor-removal.php">Pet Odor</a></li>
                <li><a href="<?php echo $rootDirectory; ?>services/whole-house-odor-removal.php">Whole House Odor</a></li>
            </ul>
            <div class="phone-cta">
                <a href="tel:(678)318-1353" class="phone">
                    <img src="<?php echo $rootDirectory; ?>images/icons/phone-icon.png" />
                    (678) 318-1353
                </a>
                <a href="#" class="button">Schedule</a>
            </div>
            <div class="mobile-menu-icon">
                <div class="bar"></div>
                <div class="bar"></div>
                <div class="bar"></div>
            </div>
            <div class="mobile-overlay"></div>
        </div>
    </div>
