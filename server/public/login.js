'use strict'
var userName = document.querySelector('#username');
var userPass = document.querySelector('#userpass');
var userEmail = document.querySelector('#useremail');
var userSubscribe = document.querySelector('#usersubscribe');

var sendBtn = document.querySelector('#sendbtn');

sendBtn.onclick = send;

function send() {
    if (!(/^[a-zа-я0-9\-_\.\ ]{2,25}$/i.test(userName.value))) {
        alert('invalid [a-zа-я0-9\-_\.\ ]')
        return false;
    }


    var data = {
        name: userName.value,
        pasword: userPass.value,
        email: userEmail.value,
        subscribe: userSubscribe.value,
    }

    fetch('/login', {
        method: 'POST',
        body: JSON.stringify(data)
    });
}