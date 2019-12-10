<?php

function getUsers() {
    $DB = mysqli_connect("127.0.0.1", "root", "password", "website");

    if (!$DB) {
        die("пипец ничего не работает");
    }

    $dataUsers = $DB->query('SELECT username, id, email, phone from users');

    $users = $dataUsers->fetch_all(MYSQLI_ASSOC);

    mysqli_close($DB);

    return $users;
}

function addUser($data) {
    $DB = mysqli_connect("127.0.0.1", "root", "password", "website");

    if (!$DB) {
        die("пипец ничего не работает");
    }
    $sql = "INSERT INTO users (username, email, `pasword`, phone, age) ";

    $sql .= "VALUES('{$data['name']}', '{$data['email']}', '{$data['pasword']}', '{$data['phone']}', '{$data['age']}')";

    $resultQuery = $DB->query($sql);


    mysqli_close($DB);

    return $resultQuery;
}

//$user = [
//"username" => 'vasa-1',
// "email" => 'vasa-1@gmail.com',
// "pasword" => '6674654564',
// "phone" => '+380658994450',`
// "age" => 25,
//];

// addUser($user);
