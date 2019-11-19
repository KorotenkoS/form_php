'use strict'
var userName = document.querySelector('#username');
var userNameError = document.querySelector('#username + .auth_error_hide');


var userPass = document.querySelector('#userpass');


var userEmail = document.querySelector('#useremail');
var userEmailError = document.querySelector('#useremail + .auth_error_hide');

var userPhone = document.querySelector('#userphone');
var userPhoneError = document.querySelector('#userphone + .auth_error_hide');

var userSubscribe = document.querySelector('#usersubscribe');

var sendBtn = document.querySelector('#sendbtn');

sendBtn.onclick = send;

function send() {

    var isError = false

    if (!(/^[a-zа-я0-9\-_\.\ ]{2,25}$/i.test(userName.value))) {
        userNameError.classList.remove('auth_error_hide');
        userNameError.classList.add('auth_error_show');
        isError = true;
    };

    if (!(/^[0-9a-z.\-_]{1,25}@[0-9a-z.\-_]{1,25}\.[a-z]{1,10}$/i.test(userEmail.value))) {
        userEmailError.classList.remove('auth_error_hide');
        userEmailError.classList.add('auth_error_show');
        isError = true;
    };

    if (!(/^\+[1-9]{1}[0-9]{3,14}$/.test(userPhone.value))) {
        userPhoneError.classList.remove('auth_error_hide');
        userPhoneError.classList.add('auth_error_show');
        isError = true;
    };

    if (isError) return null;

    var data = {
        name: userName.value,
        pasword: userPass.value,
        email: userEmail.value,
        subscribe: userSubscribe.value,
    };

    fetch('/login', {
        method: 'POST',
        body: JSON.stringify(data)
    });
}

function setClearHandler() {
    var elements = document.querySelectorAll('.auth__text');

    elements.forEach(function(element) {
        element.onclick = function() {
            this.nextElementSibling.classList.remove('auth_error_show');
            this.nextElementSibling.classList.add('auth_error_hide');
        }
    });
    console.log(elements);
}

setClearHandler();