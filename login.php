<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <title>Login</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
</head>

<body>
    <header>
    <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #e3f2fd;">
            <div class="container">
                <!-- Logo ou Nome da Marca -->
                <a class="navbar-brand" href="#"><img class="logo" src="img/cachorro logo.png" alt="cachorro logo"></a>
                <!-- Botão de Colapso (para dispositivos móveis) -->
                <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <!-- Itens da Navegação -->
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="index.php">Início</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Sobre</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Canil</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Adote</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <main>
        <div class="container">
            <div class="row justify-content-center login-container">
              <div class="col-md-6 col-sm-8 col-lg-4">
                <div class="card">
                  <div class="card-header text-center">
                    <h4>Login</h4>
                  </div>
                  <div class="card-body">
                    <form>
                      <div class="form-group">
                        <label for="username">Usuário</label>
                        <input type="text" class="form-control" id="username" placeholder="Digite seu usuário">
                      </div>
                      <div class="form-group">
                        <label for="password">Senha</label>
                        <input type="password" class="form-control" id="password" placeholder="Digite sua senha">
                      </div>
                      <p><a style="font-size: 14px; display: flex; justify-content: end;" href="registrar.php">Registrar</a></p>
                      <button type="submit" class="btn btn-primary btn-block">Entrar</button>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
    
    </main>
    <footer></footer>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="script.js"></script>
    <script src="/js/business_login.js"></script>
</body>

</html>