
document.getElementById("create").addEventListener("submit", function (event) {
    var name = document.getElementById("name").value;
    var email = document.getElementById("email").value;
    var pass = document.getElementById("password").value;
    var isValid = true;
    
// Full name
const nameError = document.getElementById("nameError")
    if (name.trim() === "") {
        nameError.innerHTML = "Please enter your full name.<br>";
        isValid = false;
    }else if(!validateFullName(name)) {
        nameError.innerHTML = "Invalid full name.<br>";
        isValid = false;
    }else{
        nameError.innerHTML="" ;
    }

// Email
const emailError = document.getElementById("emailError")
if (email.trim() === "") {
    emailError.innerHTML = "Please enter your email.<br>";
    isValid = false;
} else if (!validateEmail(email)) {
    emailError.innerHTML = "Please enter a valid email address.<br>";
    isValid = false;
}else{
    emailError.innerHTML="" ;
}

});


function validateEmail(email) {
var regex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
return regex.test(email);
}

function validateFullName(name) {
var regex = /^[A-Za-z\s]+$/;
return regex.test(name);
}