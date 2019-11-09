<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/public/style.css">
    <script defer src="/public/main.js"></script>

    <title>Document</title>
</head>
<body>
    <main>
        <form class="auth" action="">
            <fieldset>
                <legend>Autorization</legend>
                <div class="auth__row">
                    <label for="username">User name</label>
                    <input class="auth__text" type="text" name="userName" id="username">
                    <i class="auth-error">Don't contain _, -, {}, $, 0-9 lenght > 5 </i>
                </div>

                <div class="auth__row">
                    <label for="useremail">User email</label>
                    <input class="auth__text" type="text" name="userEmail" id="useremail">
                </div>
                <div class="auth__row">
                    <label for="userpass">User Password</label>
                    <input class="auth__text" type="text" name="userPassword" id="userpass">
                </div>
                <label class="auth__check">
                        Subscribe
                    <input type="checkbox" id="usersubscribe">
                </label>
                
                <div class="auth__row"><button class="auth__btn">Login</button>
                </div>
                

            </fieldset>
        </form>
    </main>
</body>
</html>