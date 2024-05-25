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
    <link rel="stylesheet" href="css/calendar/calendar_style.css">
    <link rel="stylesheet" href="css/gallery.css">
    <link rel="icon" href="images/CS Logo.png">
    <script src="navbar.js" defer></script>

</head>
<body>
<!-- NAVBAR -->
<?php
session_start(); // Start the session (if not already started)

if (isset($_SESSION['UserId'])) {
    // User is signed in, show navbar2.php
    include_once "navbar2.php";
} else {
    // User is not signed in, show navbar.php
    include_once "navbar.php";
}
?>

<h1> Explore Our Gallery </h1>

<div class="silder-container">
<div class="slider">
        <div class="slide-track">

            <!-- First set of images -->

            <div class="slide">
                <img src="images/Picture 1.jpg"/>
            </div>

            <div class="slide">
                <img src="images/Picture 2.jpg"/>
            </div>

            <div class="slide">
                <img src="images/Picture 3.jpg"/>
            </div>

            <div class="slide">
                <img src="images/Picture 4.jpg"/>
            </div>

            <div class="slide">
                <img src="images/Picture 6.jpg"/>
            </div>

            <div class="slide">
                <img src="images/Picture 7.jpg"/>
            </div>

            <div class="slide">
                <img src="images/Picture 8.jpg"/>
            </div>

            <div class="slide">
                <img src="images/Picture 9.jpg"/>
            </div>
            
            <div class="slide">
                <img src="images/Picture 10.jpg"/>
            </div>

            <!-- Seecond set of images -->

            <div class="slide">
                <img src="images/Picture 1.jpg"/>
            </div>

            <div class="slide">
                <img src="images/Picture 2.jpg"/>
            </div>

            <div class="slide">
                <img src="images/Picture 3.jpg"/>
            </div>

            <div class="slide">
                <img src="images/Picture 4.jpg"/>
            </div>

            <div class="slide">
                <img src="images/Picture 6.jpg"/>
            </div>

            <div class="slide">
                <img src="images/Picture 7.jpg"/>
            </div>

            <div class="slide">
                <img src="images/Picture 8.jpg"/>
            </div>

            <div class="slide">
                <img src="images/Picture 9.jpg"/>
            </div>

            <div class="slide">
                <img src="images/Picture 10.jpg"/>
            </div>
            
        </div>

    </div>
</div>

</body>

</html>