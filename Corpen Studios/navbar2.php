<!---------- NAVBAR ----------> <!-- USER LOGGED IN -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Corpen Studios</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
          crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
          integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
          crossorigin="anonymous" referrerpolicy="no-referrer"/>             <!-- https://fontawesome.com/icons/ -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/logoutstyle.css">
    <link rel="icon" href="images/CS Logo.png">
    <script src="navbar.js" defer></script>
</head>
<body>
<nav class="navbar">
        <div class="navbar-left">
            <div class="navbar-brand" href="home.php">
                <a>CORPEN STUDIOS</a>
                <img src="images/CS Logo.png" alt="CS logo">
            </div>
        </div>
        <ul class="navbar-links">
            <li><a href="home.php">HOME</a></li>
        </ul>
        <ul class="navbar-links">
            <li><a href="gallery.php">GALLERY</a></li>
        </ul>
        <ul class="navbar-links">
            <li><a href="package.php">PACKAGES</a></li>
        </ul>
        <ul class="navbar-links">
            <li><a href="booking.php">BOOK APPOINTMENT</a></li>
        </ul>
        <ul class="navbar-links">
            <li><a href="about.php">ABOUT</a></li>
        </ul>
        <div class="navbar-right">
            <div class="dropdown">
                <button class="dropbtn"><i class="fa-solid fa-user"></i></button>
                <div class="dropdown-content">
                    <a href="">Profile</a>
                    <a href="">Give Feeedback</a>
                    <a href="php/logout.php">Log Out</a>
                </div>
            </div>
        </div>
    </nav>
</body>
</html>