<!---------- NAVBAR ----------> <!-- USER IS NOT YET LOGGED IN -->
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
    <link rel="stylesheet" href="css/loginstyle.css">
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
            <li><a href="usr/index.php">BOOK APPOINTMENT</a></li>
        </ul>
        <ul class="navbar-links">
            <li><a href="about.php">ABOUT</a></li>
        </ul>
        <ul class="navbar-links">
            <li><a href="usr/index.php">CLIENT</a></li>
        </ul>
        <ul class="navbar-links">
            <li><a href="admin/index.php">ADMIN</a></li>
        </ul>


    </nav>

    <!---------- LOGIN / REGISTER ---------->

    <div class="blur-bg-overlay"></div>
    <div class="form-popup">
        <div class="container">
            <div class="box">
                <span class="fa-solid fa-xmark"></span>

                <!---------- LOGIN ---------->
                
                <?php
                include_once "php/config.php";
                if(isset($_POST['submit'])){
                    $email = mysqli_real_escape_string($con,$_POST['email']);
                    $password = mysqli_real_escape_string($con,$_POST['password']);
                
                    $result = mysqli_query($con,"SELECT * FROM users WHERE Email='$email' AND Password='$password'") or die("Select Error");
                    $row = mysqli_fetch_assoc($result);
                
                if(is_array($row) && !empty($row)){
                    $_SESSION['valid'] = $row['Email'];
                    $_SESSION['username'] = $row['Username'];
                    $_SESSION['UserId'] = $row['UserId'];

                }else{
                    include_once "login.php"; //login.php mentioned
                    echo "<div><small id='e_p_error'>Wrong Email or Password</small></div>";
                    echo "</div>
                    </form>";


                }
                if(isset($_SESSION['valid'])){
                   header("Location: home.php");
                }
                }else{

                 ?>
                 <?php include_once "login.php";
                     echo "</div></form>";
                } ?>
                <!---------- REGISTER ---------->

                <?php
                include_once "php/config.php";
                if(isset($_POST['submit'])){
                //    $username = $_POST['username']; wait lang sa username. Di raw mahanap eh
                   $email = $_POST['email'];
                   $password = $_POST['password'];

                //verifying the unique email

                $verify_query = mysqli_query($con,"SELECT Email FROM users WHERE Email='$email'");
                $verify_query2 = mysqli_query($con,"SELECT Password FROM users WHERE Password='$password'");

                if(mysqli_num_rows($verify_query) !=0){
                    include_once "register.php";
                    echo "<div><small id='email_error'>Email already in use. Please choose another.</small></div>";
                    echo "</div></form>";
                }
                // elseif(mysqli_num_rows($verify_query2) !=0){
                //     mysqli_query($con,"INSERT INTO users(Username,Email,Password) VALUES('$username','$email','$password')") or die("Error Occured");
                //     echo "<div><small id='email_error'>Passwords do not match.</small></div>";
                //     echo "</div></form>";
                // }
                else{
                   mysqli_query($con,"INSERT INTO users(Username,Email,Password) VALUES('$username','$email','$password')") or die("Error Occured");
                   include_once "register.php";
                   echo "<div class='message'>
                             <p>Registration successfully! Press the login button to continue</p>
                         </div><br>";
                }
                }else{
                
                ?>

                <?php
                include_once "register.php";
                echo "</div></form>";?>
                <?php } ?>

                <!----------------------------- VERIFY EMAIL ----------------------------->

                <!-- <div class="box-verify" id="verify">
                <div class="top-header">
                    <h3>Verification required</h3>
                    <small>Enter the code that we've emailed to ****@gmail.com</small>
                </div>
                    <div class="input-group">
                    <div class="input-field">
                        <input type="text" class="input-box" id="verCode" maxLength="6" required>
                        <label for="verCode">Code</label>
                    </div>
                    <div class="remember">
                        <input type="checkbox" id="formCheck" class="check">
                        <label for="formCheck">Remember Me</label>
                    </div>
                    <div class="input-field">
                        <input type="submit" class="input-submit" value="Continue" required>
                    </div>
                    </div>
                </div> -->
                <div class="switch">
                    <a href="#" class="login active" onclick="login()">Login</a>
                    <a href="#" class="register" onclick="register()">Register</a>
                    <div class="btn-active" id="btn"></div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>