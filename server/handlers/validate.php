<?php

function valid($data) {
    $errors = [];

    if (!preg_match('/^[a-zа-я0-9\-_\.\ ]{2,25}$/i', $data['name'])) {
        $errors['name'] = 'name is not valid';
    }
    if (!preg_match('/^[0-9a-z.\-_]{1,25}@[0-9a-z.\-_]{1,25}\.[a-z]{1,10}$/i', $data['email'])) {
        $errors['email'] = 'email is not valid';
    }
    if (!preg_match('/^\+[1-9]{1}[0-9]{3,14}$/', $data['phone'])) {
        $errors['phone'] = 'phone is not valid';
    }
    if (!preg_match('/^[a-zа-я0-9\-_\.\ ]{2,25}$/i', $data['pasword'])) {
        $errors['pasword'] = 'pasword is not valid';
    }
    if (!(gettype($data['subscribe']) === 'boolean')) {
        $errors['subscribe'] = 'subscribe is not valid';
    }
    if ($errors) {
        return $errors;
    }
    return true;
}
