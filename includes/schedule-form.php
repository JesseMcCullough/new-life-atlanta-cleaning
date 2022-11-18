<form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="POST">
    <div class="group">
        <label for="first-name">First Name</label>
        <input type="text" name="firstName" id="first-name" placeholder="First Name" 
                value="<?php if (isset($_POST["firstName"])) { echo $_POST["firstName"]; }?>" />
    </div>
    <div class="group">
        <label for="last-name">Last Name</label>
        <input type="text" name="lastName" id="last-name" placeholder="Last Name"
                value="<?php if (isset($_POST["lastName"])) { echo $_POST["lastName"]; }?>" />
    </div>
    <div class="group">
        <label for="phone">Phone</label>
        <input type="tel" name="phone" id="phone" placeholder="Phone"
                value="<?php if (isset($_POST["phone"])) { echo $_POST["phone"]; }?>" />
    </div>
    <div class="group">
        <label for="email">Email</label>
        <input type="email" name="email" id="email" placeholder="Email"
                value="<?php if (isset($_POST["email"])) { echo $_POST["email"]; }?>" />
    </div>
    <div class="group">
        <label for="street-address">Street Address</label>
        <input type="text" name="streetAddress" id="street-address" placeholder="Street Address"
                value="<?php if (isset($_POST["streetAddress"])) { echo $_POST["streetAddress"]; }?>" />
    </div>
    <div class="group city">
        <label for="city">City</label>
        <input type="text" name="city" id="city" placeholder="City"
                value="<?php if (isset($_POST["city"])) { echo $_POST["city"]; }?>" />
    </div>
    <div class="group zip-code">
        <label for="zip-code">ZIP Code</label>
        <input type="text" name="zipCode" id="zip-code" placeholder="ZIP Code"
                value="<?php if (isset($_POST["zipCode"])) { echo $_POST["zipCode"]; }?>" />
    </div>
    <div class="group">
        <label for="date">Cleaning Date</label>
        <input type="date" name="date" id="date" placeholder="Cleaning Date"
                value="<?php if (isset($_POST["date"])) { echo $_POST["date"]; }?>" />
    </div>
    <div class="group">
        <label for="time">Cleaning Time</label>
        <input type="time" name="time" id="time" placeholder="Cleaning Time"
                value="<?php if (isset($_POST["time"])) { echo $_POST["time"]; }?>" />
    </div>
    <div class="group description">
        <label for="description">Description</label>
        <textarea name="description" id="description" placeholder="I need to clean my ..."
                value="<?php if (isset($_POST["description"])) { echo $_POST["description"]; }?>"></textarea>
    </div>
    <div class="g-recaptcha" data-sitekey="<?php echo $config["recaptcha_site_key"]; ?>"></div>
    <button type="submit" name="submit">Schedule cleaning</button>
</form>