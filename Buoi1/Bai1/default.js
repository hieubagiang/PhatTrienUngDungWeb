let form;
let usernameReg = /^[\w\d]+$/;
let username;
let password;
let rePassword;
let gender;
let address;
let email;
let language;
let skill;
window.onload = function () {
    form = document.getElementById("register-form");
    username = form.querySelector("input[name='username']");
    username.addEventListener("input", function () {
        let usernameError = document.getElementById("usernameError");
        if (!usernameReg.test(username.value)) {
            usernameError.innerHTML = "Username khong hop le";
        } else {
            usernameError.innerHTML = "";
        }
    });
};

function initValue() {
    username = form.querySelector("input[name='username']");
    password = form.querySelector("input[name='password']");
    rePassword = form.querySelector("input[name='rePassword']");
    gender = form.querySelector("input[name='gender']");
    address = form.querySelector("textarea[name='address']");
    email = form.querySelector("input[name='email']");
    language = form.querySelectorAll("input.language_checkbox:checked");
    skill = form.querySelector("select[name='skill']");
}

function validateForm() {
        let rePasswordError = document.getElementById("rePasswordError");
        if (password.value !== rePassword.value) {
            rePasswordError.innerHTML = "Nhập lai mật khẩu không đúng";
            return false;
        } else {
            rePasswordError.innerHTML = "";
        }
        return true;
}

function onSubmit() {
    initValue();
    let text = "";
    if (validateForm()) {
        text += "\nUsername: " + username.value;
        text += "\nPassword: " + password.value;
        text += "\nConfirm password: " + rePassword.value;
        text += "\nGender: " + gender.value;
        text += "\nAddress: " + address.value;
        text += "\nEmail: " + email.value;
        text += "\nProgram language: ";
        language.forEach(
            function (currentValue, currentIndex, listObj) {
                text += currentValue.value;
                if (currentIndex < language.length - 1) {
                    text += ', ';
                }
            }
        );
        text += "\nSkill: " + skill.value;
        alert(text);
    }
}

function checkFormEmpty(form) {
    let inputs = form.getElementsByTagName('input');
    for (let i = 0; i < inputs.length; i++) {
        //if(inputs[i].hasAttribute("required")){
        if (inputs[i].value === "") {
            console.log(inputs);
            alert("Please fill all required fields");
            return false;
        }
        //}
    }
        //if(language.length.length)
    return true;
}