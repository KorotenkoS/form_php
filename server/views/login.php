        <form class="auth" action="">
            <fieldset>
                <legend>Autorization</legend>
                <div class="auth__row">
                    <label for="username">User name</label>
                    <input value="Vasiliy" class="auth__text" type="text" name="userName" id="username">
                    <i class="auth__error auth_error_hide">Don't contain (_, -, {}, $, 0-9 lenght > 5) </i>
                </div>

                <div class="auth__row">
                    <label for="useremail">User email</label>
                    <input value="Vasiliy@gmail.com" class="auth__text" type="text" name="userEmail" id="useremail">
                    <i class="auth__error auth_error_hide">Not valid email (example@domain.com)</i>
                </div>

                <div class="auth__row">
                    <label for="userphone">User phone </label>
                    <input value="+380906775530" class="auth__text" type="text" name="userPhone" id="userphone">
                    <i class="auth__error auth_error_hide">Not valid phone </i>
                </div>

                <div class="auth__row">
                    <label for="userpass">User Password</label>
                    <input value="Vasiliy777" class="auth__text" type="text" name="userPassword" id="userpass">
                    <i class="auth__error auth_error_hide">Must contain (a-z, A-Z, 0-9, lenght > 7 chars) </i>
                </div>
                <label class="auth__check">
                    Subscribe
                    <input type="checkbox" id="usersubscribe">
                </label>

                <div class="auth__row">
                    <button id="sendbtn" type="button" class="auth__btn">Login</button>
                </div>


            </fieldset>
        </form>
        <script src="/public/login.js"></script>