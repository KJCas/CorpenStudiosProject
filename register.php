<form action="home.php" method="post" id="formed" name="formed">  <!-- id=JAVASCRIPT ; name=PHP -->
    <div class="box-register" id="register">
        <div class="top-header">
            <h3>Sign Up, Now!</h3>
            <small>We are happy to have you with us.</small>
        </div>
        <div class="input-group">
            <div class="input-field">
                <input type="text" class="input-box" name="username" id="regUsername" required>
                <label for="regUsername">Username</label>
            </div>
            <div class="input-field">
                <input type="text" class="input-box" name="email" id="regEmail" required>
                <label for="regEmail">Email address</label>
            </div>
            <div class="input-field">
                <input type="password" class="input-box" name="password" id="regPassword" required>
                <label for="regPassword">Password</label>
                <div class="eye-area">
                    <div class="eye-box" onclick="myRegPassword()">
                        <i class="fa-regular fa-eye" id="eye-2"></i>
                        <i class="fa-regular fa-eye-slash" id="eye-slash-2"></i>
                    </div>
                </div>
            </div>
            <div class="input-field">
                <input type="password" class="input-box" name="repassword" id="regRePassword" required>
                <label for="regRePassword">Repeat Password</label>
                <div class="eye-area">
                    <div class="eye-box" onclick="myRegRePassword()">
                        <i class="fa-regular fa-eye" id="eye-3"></i>
                        <i class="fa-regular fa-eye-slash" id="eye-slash-3" style="opacity: 0;"></i>
                    </div>
                </div>
            </div>
            <div class="input-field">
                <input type="submit" class="input-submit" name="submit" id="signUp" value="Sign Up" required>
            </div>
        </div>
<!-- <script>alert("Registered Succesfully!")</script> -->