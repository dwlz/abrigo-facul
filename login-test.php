<div class="container">
    <div class="row justify-content-center login-container">
        <div class="col-md-6 col-sm-8 col-lg-4">
            <div class="card">
                <div class="card-header text-center">
                    <h4>Login</h4>
                </div>
                <div class="card-body">
                    <form action="sqlScope.php" method="POST">
                        <input type="hidden" name="acao" value="logar">
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" name="email" class="form-control" id="email" placeholder="Digite seu usuário" autocomplete="off">
                        </div>
                        <div class="form-group">
                            <label for="senha">Senha</label>
                            <input type="password" name="senha" class="form-control" placeholder="Digite sua senha" autocomplete="off">
                        </div>
                        <p><a style="font-size: 14px; " href="registrar-usuario.php">Registrar</a></p>
                        <button type="submit" class="btn btn-primary btn-block">Entrar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>