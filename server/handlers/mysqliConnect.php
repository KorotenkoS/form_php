<?php

$link = mysqli_connect("127.0.0.1", "root", "password", "website");

if (!$link) {
    die("пипец ничего не работает");
}

$users = $link->query('SELECT * FROM users WHERE  age > 50');

var_dump($users);

mysqli_close($link);


