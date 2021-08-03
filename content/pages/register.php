<div class="container p-5">
        <h1 class="mb-3"> Registo </h1>
        <form action="db/insertUtilizador.php" method="POST">
            <div class="form-group mb-3">
                <label for="form-username">Username</label>
                <input type="text" class="form-control" name="form-username" required id="form-username" placeholder="Enter username">
            </div>
            <div class="form-group mb-3">
                <label for="form-password">Password</label>
                <input type="password" class="form-control" name="form-password" required id="form-password" placeholder="Password">
            </div>
            <div class="form-group mb-3">
                <label for="form-email">E-mail</label>
                <input type="email" class="form-control" name="form-email" required id="form-email" placeholder="Password">
            </div>
            <div class="form-group mb-3">
                <label for="form-name">Nome</label>
                <input type="nome" class="form-control" name="form-name" required id="form-nome" placeholder="Nome">
            </div>
            <button type="submit" class="btn btn-primary">Registar</button>
        </form>
    </div>