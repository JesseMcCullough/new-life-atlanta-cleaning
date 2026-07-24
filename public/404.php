<?php 

include_once(dirname($_SERVER['DOCUMENT_ROOT']) . "/includes/header.php");
renderHeader(["title" => "404 Page Not Found", "hasNavigationBackground" => true]);

?>

<section class="about service">
    <div class="container">
        <h1>404</h1>
        <p>The page you're looking for doesn't exist. <a href="/">Go back home</a></p>
    </div>
</section>

<?php

include_once(ROOT_PATH . "/includes/cta-full-screen.php");
include_once(ROOT_PATH . "/includes/footer.php");

?>