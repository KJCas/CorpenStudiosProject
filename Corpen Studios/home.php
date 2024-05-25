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
    <link rel="icon" href="images/CS Logo.png">
    <script src="navbar.js" defer></script>
    <script src="calendar/calendar_script.js" defer></script>
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

include('php/config.php');//get configuration file
    if(isset($_POST['login']))
    {
      $email=$_POST['email'];
      $password=($_POST['password']);//
      $stmt=$mysqli->prepare("SELECT email, password, usertype FROM users WHERE email=? and password=? and usertype=admin");//sql to log in user
      $stmt->bind_param('ss',$email,$password);//bind fetched parameters
      $stmt->execute();//execute bind
      $stmt -> bind_result($email,$password,$usertype);//bind result
      $rs=$stmt->fetch();
      $_SESSION['usertype']=$usertype;//assaign session to admin id
      //$uip=$_SERVER['REMOTE_ADDR'];
      //$ldate=date('d/m/Y h:i:s', time());
      if($rs)
      {//if its sucessfull
        header("location:admin/admin-dashboard.php");
      }
      else
      {
      #echo "<script>alert('Access Denied Please Check Your Credentials');</script>";
      $error = "Access Denied Please Check Your Credentials";
      }
  }
?>

<!-- WELCOME -->
    <div class="heading-container layout-padding welcome-section">
        <div class="welcome-content">
                <img src="images/CS Welcome.png" alt="display">
        </div>
    </div>

<!-- PACKAGES -->
    <div class="heading-container layout-padding">
        <h2>PACKAGES</h2>
        <p>See what suits your needs</p>
        <div class="section">
            <div class="packages" onclick="location.href='package.php';">
                <div id="box-img">
                    <span>Family</span>
                    <img src="images/pack-1.jpg" alt="image"><br><br>
                </div>
                <div id="box-img">
                    <span>Graduate</span>
                    <img src="images/pack-2.jpg" alt="image"><br><br>
                </div>
                <div id="box-img">
                    <span>Model</span>
                    <img src="images/pack-3.jpg" alt="image"><br><br>
                </div>
            </div>
        </div>
    </div>

<!-- GALLERY -->
    <div class="gallery-section layout-padding gallery-bg">
        <div class="heading-container gallery-text">
            <h2>OUR PORTFOLIO</h2>
            <a  href="gallery.php">VIEW GALLERY</a>
        </div>
        <div class="gallery-container">
            <img class="gallery-box-bg" src="images/BG Round.png" alt="gallery bg">
            <div class="gallery-box">
                <img src="images/gall-1.jpg" alt="image">
                <img src="images/gall-2.jpg" alt="image">
                <img src="images/gall-3.jpg" alt="image">
            </div>
        </div>
    </div>

<!-- APPOINTMENT -->
    <div class="layout-padding appointment-section">
        <?php include_once "calendar/calendar.php"?>
        <div class="heading-container">
            <h2>BOOK AN APPOINTMENT</h2>
            <a  href="usr/index.php">Book Here</a>
        </div>
    </div>

<!-- ABOUT -->
    <div class="heading-container layout-padding about-section">
        <h2>ABOUT US</h2>
        <p>
            We help clients portray themselves to capture the special moments of their student-life
            with affordable prices and great experience.
        </p>
        <div class="about-container">
            <img src="images/about-1.jpg" alt="team-picture">
            <img src="images/about-2.jpg" alt="team-picture">
        </div>
    </div>
    
<!-- FEEDBACK -->
    <div class="feedback-section layout-padding">
        <div class="heading-container feedback-text">
            <h2>CUSTOMER FEEDBACK</h2>
            <a  href="home.php" class="login-btn" onclick="login()">SUBMIT A REVIEW</a>
        </div>
        <div class="feedback-container">
            <img class="feedback-box-bg" src="images/BG Round.png" alt="feedback bg">
            <div class="feedback-box">
                <div class="feedback-user">
                    <div class="feedback-user-image">
                        <img src="images/User 1.jpg" alt="image">
                    </div>
                    <h5>Maria Clara</h5>
                </div>
                <h1 for="subject">"I love it! Would recommend this studio."</h1>
            </div>
        </div>
    </div>

<!-- COPYRIGHT -->
     <footer class="layout-padding copyright">
        <img src="images/CS Logo.png" alt="CS logo"><br><br>
        &copy;2024 Corpen Studios All Rights Reserved
     </footer>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>