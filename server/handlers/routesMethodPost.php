<?php

if ($method === 'POST') {
    if ($route === '/registration') {
        $request = json_decode(file_get_contents('php://input'), true);

        $isValid = valid($request);

        if ($isValid) {
            $responceSuccess = [
                'result' => true,
                'message' => 'registration successful, go to login',
            ];
            $responceFail = [
                'result' => FALSE,
                'message' => 'U vas LEVIE DANNIE',
            ];
            $request['age'] = 25;

            $isSave = addUser($request);

            if ($isSave) {
                echo json_encode($responceSuccess);
            } else {
                echo json_encode($responceFail);
            }

        } else {
            $responce = [
                'result' => false,
                'message' => $isValid,
            ];

            echo json_encode($responce);
        }
    }
    if ($route === '/login') {
        
        
        $email = $_POST['email'];
        $password = $_POST['password'];
        
        $User = getUser($email);
        /*
         * если юзер не существует в базе данных
         *  или пароль не верный,
         *  отправляем на логин с эрором
         */
        if(empty($User) || empty($User[0]) || $password !== $User[0]['password']) {
            $error = 'User not found, enter correct email';
            include './views/header.php';
            include './views/login.php';
            include './views/footer.php';
            die;
        }
        
        $_SESSION['user'] = $User[0];
        
        $isAdmin = $User[0]['email'] === 'admin@gmail.com';
        
        if($isAdmin) {
        header("location: /users");
        } else {
            header("location: /");
        }
    }
}

