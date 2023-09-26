let passwordField = document.querySelector("input[type='password']");
let eyeIcon = document.querySelector(".eye-icon");

// console.log(passwordField)
eyeIcon.addEventListener("click", () => {
    // console.log("Hello")
    if(passwordField.type == "text"){
        passwordField.type = "password"
    } else if(passwordField.type == "password"){
        passwordField.type = "text"

    }
});

