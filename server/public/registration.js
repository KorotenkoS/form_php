'use strict'

var formManager = {

    Name: document.querySelector('#username'),
    NameError: document.querySelector('#username + .auth__error'),
    Password: document.querySelector('#userpass'),
    PasswordError: document.querySelector('#userpass + .auth__error'),
    Email: document.querySelector('#useremail'),
    EmailError: document.querySelector('#useremail + .auth__error'),
    Phone: document.querySelector('#userphone'),
    PhoneError: document.querySelector('#userphone + .auth__error'),
    Subscribe: document.querySelector('#usersubscribe'),
    sendBtn: document.querySelector('#sendbtn'),
};


formManager.valid = function() {
    var isNotError = true

    if (!(/^[a-zа-я0-9\-_\.\ ]{2,25}$/i.test(formManager.Name.value))) {
        this.NameError.classList.remove('auth_error_hide');
        this.NameError.classList.add('auth_error_show');
        isNotError = false;
    };

    if (!(/^[0-9a-z.\-_]{1,25}@[0-9a-z.\-_]{1,25}\.[a-z]{1,10}$/i.test(formManager.Email.value))) {
        this.EmailError.classList.remove('auth_error_hide');
        this.EmailError.classList.add('auth_error_show');
        isNotError = false;
    };

    if (!(/^\+[1-9]{1}[0-9]{3,14}$/.test(formManager.Phone.value))) {
        this.PhoneError.classList.remove('auth_error_hide');
        this.PhoneError.classList.add('auth_error_show');
        isNotError = false;
    };

    if (!(/^[a-zа-я0-9\-_\.\ ]{2,25}$/i.test(formManager.Password.value))) {
        this.PasswordError.classList.remove('auth_error_hide');
        this.PasswordError.classList.add('auth_error_show');
        isNotError = false;
    };

    return isNotError;
};


formManager.send = function() {

    if (this.valid() === false) return null;

    var data = {
        name: this.Name.value,
        pasword: this.Password.value,
        email: this.Email.value,
        phone: this.Phone.value,
        subscribe: this.Subscribe.checked,
    };

    fetch('/registration', {
        method: 'POST',
        body: JSON.stringify(data)
    }).then(function(response){
        return response.json()
    }).then(function(data){
        alert(data.message);
    });
};


formManager.setClearHandler = function() {
    var elements = document.querySelectorAll('.auth__text');

    elements.forEach(function(element) {
        element.onclick = function() {
            this.nextElementSibling.classList.remove('auth_error_show');
            this.nextElementSibling.classList.add('auth_error_hide');
        }
    });
    console.log(elements);
};


formManager.init = function() {
    this.sendBtn.onclick = this.send.bind(this); // bind(this) аналогично bind(formManager)
    this.setClearHandler();
};


formManager.init();