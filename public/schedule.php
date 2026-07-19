<?php 

include_once(dirname($_SERVER['DOCUMENT_ROOT']) . "/includes/header.php");
renderHeader(["title" => "Schedule Cleaning"]);

$resendApiKey = $config["resend_api_key"];

function sendResendEmail($toEmail, $replyTo, $subject, $htmlContent) {
    global $mail;
	global $resendApiKey;

    $data = [
        'from' => $mail["from"],
        'to' => $toEmail,
		'reply_to' => $replyTo,
        'subject' => $subject,
        'html' => $htmlContent
    ];

    $ch = curl_init('https://api.resend.com/emails');
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));
    curl_setopt($ch, CURLOPT_HTTPHEADER, [
        'Content-Type: application/json',
        'Authorization: Bearer ' . $resendApiKey
    ]);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

    $response = curl_exec($ch);
    $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    curl_close($ch);

    return $httpCode === 200;
}

?>

<section class="schedule-form">
    <div class="container">
        <h1>Schedule your cleaning</h1>
        <p>We'll call you to confirm and price your cleaning, plus answer any of your questions. No payment is due until your cleaning is completed.</p>
        <?php

        if (isset($_SESSION["completedScheduleForm"])) {
            echo '<p class="success">You\'re all set! We\'ll be in touch within 24 hours.</p>';
        } else if (isset($_POST["submit"])) {
            $missingFields = [];

            if (empty(trim($_POST["firstName"]))) {
                $missingFields[] = "first name";
            }

            if (empty(trim($_POST["lastName"]))) {
                $missingFields[] = "last name";
            }

            if (empty(trim($_POST["phone"]))) {
                $missingFields[] = "phone";
            }

            if (empty($_POST["email"])) {
                $missingFields[] = "email";
            }

            if (empty($_POST["streetAddress"])) {
                $missingFields[] = "street address";
            }

            if (empty($_POST["city"])) {
                $missingFields[] = "city";
            }

            if (empty($_POST["zipCode"])) {
                $missingFields[] = "ZIP code";
            }

            if (empty(trim($_POST["date"]))) {
                $missingFields[] = "cleaning date";
            }

            if (empty(trim($_POST["time"]))) {
                $missingFields[] = "cleaning time";
            }

            if (empty(trim($_POST["description"]))) {
                $missingFields[] = "description";
            }

            if (!empty($missingFields)) {
                $fields = "";
                $missingFieldsCount = count($missingFields);
                $requiresCommaSeparation = $missingFieldsCount >= 3;

                if ($missingFieldsCount == 1) {
                    $fields = $missingFields[0];
                } else {
                    for ($x = 0; $x < $missingFieldsCount; $x++) {
                        if ($requiresCommaSeparation) {
                            if ($x < $missingFieldsCount - 1) { // Any element that's not the last element.
                                $fields .= $missingFields[$x] . ", ";
                            } else if ($x == $missingFieldsCount - 1) { // The element is the element.
                                $fields .= "and " . $missingFields[$x];
                            }
                        } else { // Only two missing fields.
                            if ($x == 0) {
                                $fields .= $missingFields[$x] . " and ";
                            } else {
                                $fields .= $missingFields[$x];
                            }
                        }
                    }
                }
            
                echo '<p class="error">Please enter your ' . $fields . '.</p>';
                include_once("includes/schedule-form.php");
            } else {
                $recaptchaUrl = "https://www.google.com/recaptcha/api/siteverify";
                $recaptchaSecretKey = $config["recaptcha_secret_key"];
                $recaptchaResponse = $_POST["g-recaptcha-response"];
                $recaptcha = file_get_contents($recaptchaUrl . "?secret=" . $recaptchaSecretKey . "&response=" . $recaptchaResponse);
                $recaptcha = json_decode($recaptcha, true);

                if (!$recaptcha["success"]) {
                    echo '<p class="error">Verification failed. Please reverify and resubmit the form.</p>';
                    include_once(ROOT_PATH . "/includes/schedule-form.php");
                } else {
                    $subject = "Schedule Cleaning";
                    $dateFormatted = date_format(date_create($_POST["date"]), "F j, Y");
                    $message = "Name: " . $_POST["firstName"] . " " . $_POST["lastName"] . "\n"
                            . "Phone: " . $_POST["phone"] . "\n"
                            . "Email: " . $_POST["email"] . "\n"
                            . "Street Address: " . $_POST["streetAddress"] . "\n"
                            . "City: " . $_POST["city"] . "\n"
                            . "ZIP Code: " . $_POST["zipCode"] . "\n"
                            . "Date: " . $dateFormatted . "\n"
                            . "Time: " . $_POST["time"] . "\n"
                            . "Description: " . $_POST["description"] . "\n";
                    
                    $sent = sendResendEmail($mail["to"], $mail["from"], $subject, $message);
							
                    if ($sent) {
                        $_SESSION["completedScheduleForm"] = true;
                        echo '<p class="success">You\'re all set! We\'ll be in touch within 24 hours.</p>';
                    } else {
                        echo '<p>Something went wrong. Please try again.</p>';
                        include_once(ROOT_PATH . "/includes/schedule-form.php");
                    }
                }
            }
        } else {
            include_once(ROOT_PATH . "/includes/schedule-form.php");
        }
        
        ?>
    </div>
</section>

<?php

include_once(ROOT_PATH . "/includes/footer.php");

?>

