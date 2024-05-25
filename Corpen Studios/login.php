
<form action="home.php" method="post" id="form" name="form"> <!-- id=JAVASCRIPT ; name=PHP -->
    <div class="box-login" id="login">
        <div class="top-header">
            <h3>Hello, Again!</h3>
            <small>We are happy to have you back.</small>
        </div>
        <div class="input-group">
            <div class="input-field">
                <input type="text" class="input-box" id="logEmail" name="email" required>
                <label for="logEmail">Email address</label>
            </div>
            <div class="input-field">
                <input type="password" class="input-box" id="logPassword" name="password" required>
                <label for="logPassword">Password</label>
                <div class="eye-area">
                    <div class="eye-box" onclick="myLogPassword()">
                        <i class="fa-regular fa-eye" id="eye"></i>
                        <i class="fa-regular fa-eye-slash" id="eye-slash"></i>
                    </div>
                </div>
            </div>
            <!-- <div class="remember">
                <input type="checkbox" id="formCheck" class="check">
                <label for="formCheck">Remember Me</label>
            </div> -->
            <!-- <div class="forgot">
                <a href="#">Forgot password?</a>
            </div> -->
            <div class="input-field">
                <input type="submit" class="input-submit" name="submit" id="signIn" value="Sign In" required>
            </div>
        </div>