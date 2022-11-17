<?php

session_start();

$configString = file_get_contents("config.json");
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

?>

<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="initial-scale=1.0, width=device-width" />
    <meta charset="UTF-8" />
    <link rel="stylesheet" type="text/css" href="styles/style.css" />
    <title>New Life Atlanta Cleaning</title>
</head>
<body>
    <div class="nav">
        <a href="index.php" class="logo"><img src="images/logo.png" /></a>
        <ul>
            <li class="schedule"><a href="#">Schedule</a></li>
            <li><a href="service.php">Tile</a></li>
            <li><a href="#">Carpet</a></li>
            <li><a href="#">Upholstery</a></li>
            <li><a href="#">Rug</a></li>
            <li><a href="#">Hardwood</a></li>
            <li><a href="#">Upholstery</a></li>
            <li><a href="#">Rug</a></li>
            <li><a href="#">Hardwood</a></li>
        </ul>
        <div class="phone-cta">
            <a href="tel:(678)318-1353" class="phone">
                <img src="images/icons/phone-icon.png" />
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
