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
  <link rel="stylesheet" href="css/about.css">
  <link rel="icon" href="images/CS Logo.png">
  <script src="navbar.js" defer></script>
</head>
<body>

<!-- NAVBAR -->
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

<!--ABOUT-->
    <div class="about-us">
        <h1> About Us </h1>
        <p>
            At Corpen Studios, we are passionate about capturing the moments that matter most to you.
            We specialize in photography services that bring your unique vision to life.
            Whether it's a special event, a family portrait, a wedding, or a corporate project,
            our team of dedicated photographers is here to preserve your memories in stunning images.
        </p>
    </div>
    <div class="other-info">
        <h3>What Sets Us Apart</h3>
        <dl>
            <dt> Creativity</dt>
            <dd>
                We believe in the power of creativity to transform ordinary moments
                into extraordinary memories. Our photographers are artists at heart,
                constantly seeking new and innovative ways to tell your story through the lens.
            </dd>
            <br>
            <dt> Professionalism</dt>
            <dd>
                With years of experience, our photographers are skilled in handling
                every aspect of your photoshoot, ensuring a seamless and stress-free experience.
                We pay attention to every detail, from lighting to composition,
                to deliver high-quality results.
            </dd>
            <br>
            <dt>Personalized Service</dt>
            <dd>
                Your satisfaction is our top priority.
                We work closely with you to understand your unique needs and preferences,
                tailoring our services to match your style and expectations.
                Your vision is our inspiration.
            </dd>
            <br>
            <dt>State-of-the-Art Equipment</dt>
            <dd>
                We invest in the latest photography equipment and technology
                to ensure that your photos are of the highest quality.
                We believe that cutting-edge tools are essential for creating timeless images.
            </dd>
            <br>
            <dt>Diverse Services</dt>
            <dd>
                From weddings to family portraits, corporate headshots to product photography,
                we offer a wide range of photography services to meet your needs.
                No project is too big or too small.
            </dd>
        </dl>
    </div>
    <div class="visit-us">
    </div>
    <div class="images">
        <inline>
            <img src="images/about-1.jpg" alt="team-picture">
            <img src="images/about-2.jpg" alt="team-picture">
        </inline>
    </div>
    </body>
</html>