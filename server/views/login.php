<form class="auth" action="/login" method="post">
    <fieldset>
        <legend>Autorization</legend>
        
        <p style="color:red; text-align:center;"><?= $error ? $error : '' ?></p>
        
        <div class="auth__row">
            <label for="useremail">User email</label>
            <input value="Vasiliy@gmail.com" class="auth__text" type="text" name="email" id="useremail">
        </div>

        <div class="auth__row">
            <label for="userpass">User Password</label>
            <input value="Vasiliy777" class="auth__text" type="text" name="password" id="userpass">
        </div>

        <div class="auth__row">
            <button id="sendbtn" type="submit" class="auth__btn">Login</button>
        </div>
    </fieldset>
</form>
