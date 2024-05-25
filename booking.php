<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Corpen Studios</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/booking.css">
    <link rel="icon" href="images/CS Logo.png">
    <script src="navbar.js" defer></script>
    <script src="calendar/calendar_script.js" defer></script>
</head>
<body>
    
<!-- NAVBAR -->
<?php
session_start();

if (isset($_SESSION['UserId'])) {
    include_once "navbar2.php";
} else {
    include_once "navbar.php";
}
?>

<!-- BOOK AN APPOINTMENT -->
<div class="heading-container">
    <h2>Book Your Session</h2>
</div>
<div class=" layout-padding booking-section">
    <div class="form-content">
        <!-- FORM 1 -->
        <form id="firstForm" method="post" style="display: block;">
            <div class="form-group">
                <a href="home.php" onclick="goBackForm()">Back</a><br><br>
                <label for="date">Date:</label>
                <input type="date" class="input-box" id="date" name="date" required>
            </div>
            <div class="form-group">
                <label for="time">Time:</label>
                <input type="time" class="input-box" id="time" name="time" required>
            </div>
            <div class="form-group">
                <button type="button" class="input-submit" onclick="showNextForm()">CONTINUE</button>
            </div>
        </form>
        <!-- FORM 2 -->
        <form id="secondForm" style="display: none;">
            <div class="form-group">
                <a href="#" onclick="goBackForm()">Back</a><br><br>
                <label for="package">Package:</label>
                <select id="package" name="package" class="input-box" required>
                    <option value="basic">Basic</option>
                    <option value="standard">Standard</option>
                    <option value="premium">Premium</option>
                </select>
            </div>
            <div class="form-group">
                <label for="message">Write a Message:</label>
                <textarea id="message" class="input-box" name="message" rows="4" required></textarea>
            </div>
            <div class="form-group">
                <label for="participants">Session Participants:</label>
                <input type="number" class="input-box" id="participants" name="participants" min="1" required>
            </div>
            <div class="form-group">
                <label for="participant_names">Participant Names and Ages:</label>
                <textarea id="participant_names" class="input-box" name="participant_names" rows="4" required></textarea>
            </div>
            <div class="form-group">
                <button type="button" class="input-submit" onclick="showFinalForm()">CONTINUE</button>
            </div>
        </form>
        <!-- FORM 3 -->
        <form id="finalForm" method="post" style="display: none;">
            <div class="form-group">
                <a href="#" onclick="goBackForm()">Back</a><br><br>
                <h4 for="contract_agreement">Contract Agreement:</h4>
                <label for="contract_agreement">
                    THIS AGREEMENT is made between Client (“Client”), and Corpen Studios (“Photographer”). By signing this Agreement, Client agrees to pay Photographer for the Family Session ("Services") services provided by Photographer.
                    <br><br>
                    This service includes 2 hours of coverage and an online gallery with 100 color corrected images that can be digitally downloaded. Additional hours and images can be requested via email.
                    <br><br>
                    The Client has to reimburse Photographer for any additional costs the Photographer may incur on the day of the session, such as travel and parking, if Photographer needs to travel further than 25 miles from Tennessee.
                    <br><br>
                    Client may terminate the Agreement and/or reschedule the session by providing Photographer with written notice no later than 21 days before the session date.
                    <br><br>
                    Photographer owns the copyright to all of the edited images created during the photo session. Client will be granted a print release for personal use of images. No images taken by Photographer will be edited, cropped or altered in any way by Client.
                    <br><br>
                    Photographer shall not be held liable for any injury, property damage, liability, claim or other cause of action arising out of or related to the photography services provided to the client.
                    <br><br>
                    By click the Continue button below, the Client and the Photographer acknowledge that they have read and understood this Agreement and agree to be bound by its terms.
                </label>
            </div>
                <button type="submit" class="input-submit"><a href="home.php">Book Here</a></button>
        </form>
    </div>
    <div class="calendar" id="calendar" style="display: block;">
    <?php include_once "calendar/calendar.php"?>
    </div>
</div>

<!-- FOOTER -->
    <footer class="layout-padding copyright">
        <img src="images/CS Logo.png" alt="CS logo"><br><br>
        &copy;2024 Corpen Studios All Rights Reserved
     </footer>
</body>
</html>

<!-------------------------------------------------------------------------------------------->
<script>
    function showNextForm() {
        document.getElementById('firstForm').style.display = 'none';
        document.getElementById('secondForm').style.display = 'block';
        var c = document.getElementById("calendar");
        c.style.opacity = "0";
    }
    function showFinalForm() {
        document.getElementById('secondForm').style.display = 'none';
        document.getElementById('finalForm').style.display = 'block';
        var c = document.getElementById("calendar");
        c.style.opacity = "0";
    }
</script>