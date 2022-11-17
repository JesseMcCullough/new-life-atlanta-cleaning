<?php include_once("includes/header.php"); ?>

<section class="schedule-form">
    <div class="container">
        <h1>Schedule your cleaning</h1>
        <p>We'll call you to confirm and price your cleaning, plus answer any of your questions. No payment is due until your cleaning is completed.</p>
        <form>
            <div class="group">
                <label for="first-name">First Name</label>
                <input type="text" name="firstName" id="first-name" placeholder="First Name" />
            </div>
            <div class="group">
                <label for="last-name">Last Name</label>
                <input type="text" name="lastName" id="last-name" placeholder="Last Name" />
            </div>
            <div class="group">
                <label for="phone">Phone</label>
                <input type="tel" name="phone" id="phone" placeholder="Phone" />
            </div>
            <div class="group">
                <label for="email">Email</label>
                <input type="email" name="email" id="email" placeholder="Email" />
            </div>
            <div class="group">
                <label for="street-address">Street Address</label>
                <input type="text" name="streetAddress" id="fstreet-address" placeholder="Street Address" />
            </div>
            <div class="group city">
                <label for="city">City</label>
                <input type="text" name="city" id="city" placeholder="City" />
            </div>
            <div class="group zip-code">
                <label for="zip-code">ZIP Code</label>
                <input type="text" name="zipCode" id="zip-code" placeholder="ZIP Code" />
            </div>
            <div class="group">
                <label for="date">Cleaning Date</label>
                <input type="date" name="date" id="date" placeholder="Cleaning Date" />
            </div>
            <div class="group">
                <label for="time">Time</label>
                <input type="time" name="time" id="time" placeholder="Time" />
            </div>
            <div class="group description">
                <label for="description">Description</label>
                <textarea name="description" id="description" placeholder="I need to clean my ..."></textarea>
            </div>
            <button type="submit">Schedule cleaning</button>
            <!-- <input type="text" name="lastName" placeholder="Last Name" />
            <input type="tel" name="phone" placeholder="Phone" />
            <input type="email" name="email" placeholder="Email" />
            <input type="text" name="streetAddress" placeholder="Street Address" />
            <input type="text" name="city" placeholder="City" />
            <input type="text" name="zipCode" placeholder="Zip Code" />
            <input type="date" name="date" placeholder="Cleaning Date" />
            <input type="time" name="time" step="900" placeholder="Cleaning Time" /> -->
        </form>
    </div>
</section>

<?php

include_once("includes/footer.php");

?>

