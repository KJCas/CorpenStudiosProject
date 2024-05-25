//-------------------- LOGIN & REGISTER FORM POPUP --------------------//

const showPopupBtn = document.querySelector(".login-btn");
const formPopup = document.querySelector(".form-popup");
const hidePopupBtn = formPopup.querySelector(".fa-solid");

//---------- SHOW ----------
showPopupBtn.addEventListener("click", () => {
    document.body.classList.toggle("show-popup");
});

//---------- HIDE ----------
hidePopupBtn.addEventListener("click", () => showPopupBtn.click());

//-------------------- LOGIN & REGISTER FORM SWITCH --------------------//

var x = document.getElementById('login');
var y = document.getElementById('register');
var z = document.getElementById('btn');

function login(){
    x.style.left = "27px";
    y.style.right = "-350px";
    z.style.left = "0px";

    document.getElementById('logEmail').disabled = false
    document.getElementById('logPassword').disabled = false
    document.getElementById('formCheck').disabled = false
    document.getElementById('signIn').disabled = false

    document.getElementById('regUsername').disabled = true
    document.getElementById('regEmail').disabled = true
    document.getElementById('regPassword').disabled = true
    document.getElementById('regRePassword').disabled = true
    document.getElementById('signUp').disabled = true
}

function register(){
    x.style.left = "-350px";
    y.style.right = "27px";
    z.style.left = "150px";

    document.getElementById('regUsername').disabled = false
    document.getElementById('regEmail').disabled = false
    document.getElementById('regPassword').disabled = false
    document.getElementById('regRePassword').disabled = false
    document.getElementById('signUp').disabled = false

    document.getElementById('logEmail').disabled = true
    document.getElementById('logPassword').disabled = true
    document.getElementById('formCheck').disabled = true
    document.getElementById('signIn').disabled = true
}

//-------------------- VIEW PASSWORD --------------------//

function myLogPassword(){

    var a = document.getElementById("logPassword");
    var b = document.getElementById("eye");
    var c = document.getElementById("eye-slash");

    if(a.type === "password"){
       a.type = "text";
       b.style.opacity = "0";
       c.style.opacity = "1";
    }else{
       a.type = "password";
       b.style.opacity = "1";
       c.style.opacity = "0";
    }
}

function myRegPassword(){

    var d = document.getElementById("regPassword");
    var b = document.getElementById("eye-2");
    var c = document.getElementById("eye-slash-2");
    
    if(d.type === "password"){
       d.type = "text";
       b.style.opacity = "0";
       c.style.opacity = "1";
    }else{
       d.type = "password";
       b.style.opacity = "1";
       c.style.opacity = "0";
    }
}

function myRegRePassword(){

    var e = document.getElementById("regRePassword");
    var b = document.getElementById("eye-3");
    var c = document.getElementById("eye-slash-3");
    
    if(e.type === "password"){
       e.type = "text";
       b.style.opacity = "0";
       c.style.opacity = "1";
    }else{
       e.type = "password";
       b.style.opacity = "1";
       c.style.opacity = "0";
    }
}

//-------------------- FORM VALIDATION --------------------//

//---------- LOGIN ----------
// var email = document.forms['form']['logEmail'];
// var password = document.forms['form']['logPassword'];

// var e_p_error = document.getElementById('e_p_error');

// email.addEventListener('textInput', email_verify);
// password.addEventListener('textInput', pass_verify);

// function email_verify(){
// 	if (email.value.length >= 0) {
// 		e_p_error.style.display = "none";
// 		return true;
// 	}
// }
// function pass_verify(){
// 	if (password.value.length >= 0) {
// 		e_p_error.style.display = "none";
// 		return true;
// 	}
// }

//---------- REGISTRATION ----------

var b = document.getElementById("eye-2");
var c = document.getElementById("eye-slash-2");

function myRegRePassword() {
    var password = document.getElementById('regPassword').value;
    var repassword = document.getElementById('regRePassword').value;

    var eye2 = document.getElementById('eye-2');
    var eyeSlash2 = document.getElementById('eye-slash-2');

    if (password === repassword) { // Passwords match, handle accordingly (e.g., hide error message, update styles)
        eye2.style.opacity = "1";
        eyeSlash2.style.opacity = "0";
    } else { // Passwords don't match, display error message
        eye2.style.opacity = "0";
        eyeSlash2.style.opacity = "1";
        alert('The passwords do not match. Try again!');
    }
}