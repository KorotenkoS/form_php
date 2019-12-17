<?php

if ($method === 'GET') {

    $curentUser = $_SESSION['user'];
    $isAdmin = !empty($curentUser) && $curentUser['email'] === 'admin@gmail.com';


    if (empty($_SESSION['routes'])) {
        $_SESSION['routes'] = [];
    }

    if (empty($_SESSION['routes'][$route])) {
        $_SESSION['routes'][$route] = 1;
    } else {
        $_SESSION['routes'][$route] ++;
    }

    $routes_str = '';

    foreach ($_SESSION['routes'] as $k => $kvalue) {
        $routes_str .= "{$k} = {$kvalue}, ";
    }

    include './views/header.php';

    if ($route === '/') {
        include './views/home.php';
    }
    if ($route === '/contacts') {
        include './views/contacts.php';
    }
    if ($route === '/registration') {
        include './views/registration.php';
    }
    if ($route === '/login') {
        $error = '';
        include './views/login.php';
    }
    if ($route === '/users' && $isAdmin) {

        $users = getUsers();

        include './views/users.php';
        
    } elseif ($route === '/users') {
        header('location: /login');
    }

    include './views/footer.php';
}

