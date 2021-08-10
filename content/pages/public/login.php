<div class="container-fluid">
    <div class="row w-100">
        <div class="col" style="background-image: url('img/macaco8.jfif'); height: 100vh;  background-size: cover; background-repeat: no-repeat">
        </div>
        <div class="col my-auto h-100 p-5">
            <form action="db/autenticarUtilizador.php" id="login" method="POST">
                <div class="form-group mb-3">
                    <label for="login-username" class="form-label">Username</label>
                    <input type="text" class="form-control" required name="login-username" id="login-username" placeholder="Enter username">
                </div>
                <div class="form-group mb-3">
                    <label class="form-label" for="login-password">Password</label>
                    <input type="password" class="form-control" required name="login-password" id="login-password" placeholder="Password">
                </div>
                <button type="submit" class="btn" style="background-color: rgb(255, 180, 68); color: white;">Let me in!</button>
                <button class="btn" type="button" onclick="displayNone('login'), display('register')">Don't have an account? Click here to register.</button>
            </form>

            <form action="db/insertUtilizador.php" id="register" method="POST">
                <div class="form-group mb-3">
                    <label for="register-name">Name</label>
                    <input type="nome" class="form-control" name="register-name" required id="register-nome" placeholder="Nome">
                </div>
                <div class="form-group mb-3">
                    <label for="register-username">Username</label>
                    <input type="text" class="form-control" name="register-username" required id="register-username" placeholder="Enter username">
                </div>
                <div class="form-group mb-3">
                    <label for="register-email">E-mail</label>
                    <input type="email" class="form-control" name="register-email" required id="register-email" placeholder="Insert E-mail">
                </div>
                <div class="form-group mb-3">
                    <label for="register-password1">Password</label>
                    <input type="password" class="form-control" name="register-password1" required id="register-password1" placeholder="Password">
                </div>
                <div class="form-group mb-3">
                    <label for="register-password2">Repeat Password</label>
                    <input type="password" class="form-control" name="register-password2" required id="register-password2" onkeyup="repeatPassword()" placeholder="Repeat Password">
                </div>
                <div id="passwordMatch" role="alert">
                    <p class="text-danger"> Passwords do not match.</p>
                </div>
                <button type="submit" class="btn" id="btnRegister" style="background-color: rgb(255, 180, 68); color: white;" disabled>Register</button>
                <button class="btn" type="button" onclick="displayNone('register'), display('login')">Already have an account? Click here to login.</button>
            </form>
        </div>
    </div>

</div>