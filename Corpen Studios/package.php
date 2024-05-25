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
  <link rel="stylesheet" href="css/package.css">
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

<div class="container">
  <div class="card">
    <img src="images/pack-3.jpg">
    <div class="card__head">Model Package</div>
  </div>
  <div class="card">
    <img src="images/User 1.jpg">
    <div class="card__head">Graduation Package</div>
  </div>
  <div class="card">
    <img src="images/pack-1.jpg">
    <div class="card__head">Family Package</div>
  </div>
  <div class="card">
    <img src="images/Picture 3.jpg">
    <div class="card__head">Wedding Package</div>
  </div>
  <div class="card">
    <img src="images/Sample 1.jpg">
    <div class="card__head">Baby Package</div>
  </div>
</div class="container">
  <div class="card">
    <img src="images/graduation.jpg">
    <div class="card__head">Graduation Package Prices</div>
  </div>
  <div class="card">
    <img src="images/Family.jpg">
    <div class="card__head">Family Package Prices</div>
  </div>
  <div class="card">
    <img src="images/Model.jpg">
    <div class="card__head">Model Package Prices</div>
  </div>
</div>

<!--
<div class="package-display-page">
    <div class="booking-button">
        <b class="button-text">
            <p class="blank-line">&nbsp;</p>
            <p class="book-an-appointment">Book an appointment</p>
        </b>
    </div>
    <img class="lines-icon" alt="" src="./public/lines.svg" />
    <div class="model-package">
        <img class="model-package-icon" alt="" src="images/Sample 3.jpg" />
        <b class="model-set-container">
            <p class="blank-line">MODEL - SET A </p>
            <li class="php-package-set-cardpo">
                <li class="php-package">1,500php package</li>
                <li class="php-package">Set Card/Portfolio Pictorial</li>
                <li class="php-package">Thirty (30) minutes studio time (unlimited shots) </li>
                <li class="php-package">Unlimited wardrobe change (provided by the client) </li>
                <li class="php-package">Professional hair and makeup included</li>
                <li>Unedited softcopies of the client/s pictures (flash drive provided by the client) </li>
        </li>
        </b>
        <b class="model-package1">Model Package</b>
    </div>
    <div class="graduation-package">
        <div class="texts">
            <b class="set-d-container">
                <p class="blank-line">SET - D</p>
                <p class="blank-line">&nbsp;</p>
                <li class="php-package-toga-filipi">
                    <li class="php-package">
                        <span>1,950php package </span>
                    </li>
                    <li class="php-package">
                        <span> - </span>
                        <span class="unedited-softcopy-of">
                            Toga, Filipiniana/Barong, Uniform or Formal (brought by client) shots</span>
                    </li>
                    <li class="php-package">
                        <span class="unedited-softcopy-of"> - Unedited softcopy of the picture</span>
                    </li>
                    <li class="php-package">
                        <span class="unedited-softcopy-of">
                             One (1) photo for framed photo, one (1) photo for 5R</span>
                    </li>
                    <li class="php-package">
                        <span class="unedited-softcopy-of">
                            Three (3) photos for wallet size (client/s choice)
                            edited softcopy of photo for printout</span>
                    </li>
                    <li class="php-package">
                        <span class="unedited-softcopy-of">
                             One 8R(8x12), one (1) 5R(5x7) same as framed photo</span>
                    </li>
                    <li class="php-package">
                        <span class="unedited-softcopy-of">
                            Four (4) wallet size, one (1) 5R(5x7),
                            four (4) copies each of the three (3) client/s choice photos </span>
                    </li>
                    <li class="php-package">
                        <span class="unedited-softcopy-of">for wallet size</span>
                    </li>
                    <li class="php-package">
                        <span class="unedited-softcopy-of">10x14 double glass frame</span>
                    </li>
                    <li>
                        <span class="unedited-softcopy-of">Professional hair and makeup included.</span>
                    </li>
             </li>
            </b>
            <b class="set-c-container">
                <p class="blank-line">SET - C</p>
                <p class="blank-line">&nbsp;</p>
                <ul class="php-package-toga-filipi">
                    <li class="php-package">1,500php package</li>
                    <li class="php-package">Toga only shots</li>
                    <li class="php-package">Unedited softcopy of the picture</li>
                    <li class="php-package">One edited softcopy of photo for printout </li>
                    <li class="php-package">One 8R(8x10), one (1) 5R(5x7)</li>
                    <li class="php-package">Four (4) wallet size</li>
                    <li class="php-package">10x12 matted frame</li>
                    <li>Professional hair and makeup included</li>
                </ul>
            </b>
            <b class="set-b-container">
                <p class="blank-line">
                    <span class="set-b1">SET - B</span>
                    <span>&nbsp;</span>
                </p>
                <ul class="php-package-toga-filipi">
                    <li class="php-package">
                        <span>1,000php package </span>
                    </li>
                    <li class="php-package">
                        <span>&nbsp;</span>
                    </li>
                    <li class="php-package">
                        <span class="unedited-softcopy-of">Toga, Filipiniana/Barong, Uniform or Formal, Creative (brought by client) shots</span>
                    </li>
                    <li class="php-package">
                        <span class="unedited-softcopy-of">Unedited softcopy of the picture</span>
                    </li>
                    <li class="php-package">
                        <span class="unedited-softcopy-of">One (1) photo for framed photo, two (2) photo for 5R,
                            four (4) photos for wallet size (client/s choice) edited softcopy of photo
                            for printout</span>
                    </li>
                    <li class="php-package">
                        <span class="unedited-softcopy-of">One 8R (8x12), 5R(5x7) same as framed photo</span>
                    </li>
                    <li class="php-package">
                        <span class="unedited-softcopy-of">Four (4) wallet size</span>
                    </li>
                    <li class="php-package">
                        <span class="unedited-softcopy-of">Six 2x2 and four (4) 1x1 photos, two (2) 5R(5x7),
                            four (4) copies each of the four (4) client/s choice photos for wallet size</span>
                    </li>
                    <li class="php-package">
                        <span class="unedited-softcopy-of">10x14 double glass frame</span>
                    </li>
                    <li>
                        <span class="unedited-softcopy-of">Professional hair and makeup included</span>
                    </li>
                </li>
            </b>
            <b class="graduation-set-container">
                <p class="blank-line">GRADUATION - SET A </p>
                <ul class="php-package-toga-only-shot">
                    <li class="php-package">
                        <span>1,000php packages </span>
                    </li>
                    <li class="php-package">
                        <span>Toga only shots</span>
                    </li>
                    <li class="php-package">
                        <span>Unedited softcopy of the picture</span>
                    </li>
                    <li class="php-package">
                        <span>One (1) edited softcopy of photo for printout</span>
                    </li>
                    <li>
                        <span>One (1) 8R(8x10), one (1) 5R(5x7), and four (4) wallet size.</span>
                    </li>
                </ul>
            </b>
        </div>
        <img class="grad-package-icon" alt="" src="images/gall-2.jpg" />
        <b class="graduation-package1">Graduation Package</b>
    </div>
    <div class="family-package">
        <b class="family-set-container">
            <p class="blank-line">FAMILY - SET A </p>
            <ul class="php-package-set-cardpo">
                <li class="php-package">3,999php package</li>
                <li class="php-package">&nbsp;</li>
                <li class="php-package">Unlimited pictorial for thirty (30) minutes </li>
                <li class="php-package">11R framed photo included</li>
                <li class="php-package">Unlimited wardrobe change (provided by the client) </li>
                <li>Unedited softcopies of the client/s pictures (flash drive provided by the client) </li>
            </ul>
        </b>
        <img class="fam-package-icon" alt="" src="images/pack-1.jpg" />
        <b class="family-package1">Family Package</b>
    </div>
    <div class="package-display">
        <div class="pictures">
            <img class="model-pic-icon" alt="" src="images/pack-3.jpg"/>
            <img class="graduation-pic-icon" alt="" src="images/pack-2.jpg" />
            <img class="family-package-pic" alt="" src="images/pack-1.jpg"/>
        </div>
        <div class="texts1">
            <b class="family">FAMILY</b>
            <b class="graduation">GRADUATION</b>
            <b class="model">MODEL</b>
        </div>
    </div>
    <b class="packages">PACKAGES</b>
</div>


<script>
    var shape = document.getElementById("shape");
    if (shape) {
        shape.addEventListener("click", function(e) {
            // Please sync "Appointment Page" to the project
        });
    }
</script>
!-->
</body>