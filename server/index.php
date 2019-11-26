<?php

$route = $_SERVER['REQUEST_URI'];
$method = $_SERVER['REQUEST_METHOD'];

// echo '<pre>';
// var_dump($_SERVER);
// echo '</pre>';
// die;

if ($method === 'GET') {

    include './views/header.php';

    if ($route === '/') {
        include './views/home.php';
    }
    if ($route === '/contacts') {
        include './views/contacts.php';
    }
    if ($route === '/login' && $method === 'GET') {
        include './views/login.php';
    }

    include './views/footer.php';
}

if ($method === 'POST') {

    if ($route === '/login' && $method === 'POST') {
        $request = json_decode(file_get_contents('php://input'), true); //true делает из даты массив. Чтобы нейм вызвать как обьект массива в квадратных скобках.
        valid($request); // var_dump($data['name']); var_dump($data->name); и наверху нет тру, тогда работаем как с обьектом.
        // echo 'hello';
    }
}


function valid($data)
{
    $errors = [];

    if (!preg_match('/^[a-zа-я0-9\-_\.\ ]{2,25}$/i', $data['name'])) {
        $errors['name'] ='name is not valid';
    }
    if (!preg_match('/^[0-9a-z.\-_]{1,25}@[0-9a-z.\-_]{1,25}\.[a-z]{1,10}$/i', $data['email'])) {
        $errors['email'] ='email is not valid';
    }
    if (!preg_match('/^\+[1-9]{1}[0-9]{3,14}$/', $data['phone'])) {
        $errors['phone'] ='phone is not valid';
    }
    if (!preg_match('/^[a-zа-я0-9\-_\.\ ]{2,25}$/i', $data['pasword'])) {
        $errors['pasword'] ='pasword is not valid';
    }
    if (!(gettype($data['subscribe']) === 'boolean')) {
        $errors['subscribe'] ='subscribe is not valid';
    }
    if($errors){
        return $errors;
    }
    return true;
}
