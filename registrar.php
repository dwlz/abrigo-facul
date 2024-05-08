<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <title>Registrar-se</title>
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
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
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
                            <h4>Registrar-se</h4>
                        </div>
                        <div class="card-body">
                            <form id="cadastro" action="javascript:gravar()">
                                <div class="form-group">
                                    <label for="usuario">Usuário</label>
                                    <input id="codigo" name="codigo" type="number" value="" hidden>
                                    <input type="text" class="form-control" id="usuario" placeholder="Digite seu usuário">
                                </div>
                                <div class="form-group">
                                    <label for="senha">Senha</label>
                                    <input type="password" class="form-control" id="senha" placeholder="Digite sua senha">
                                </div>
                                <p><a style="font-size: 14px; display: flex; justify-content: end;" href="login.php">Logar</a></p>
                                <button id="btnRegister" type="submit" class="btn btn-primary btn-block">Registrar</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </main>
    <footer></footer>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="js/business_registrar.js"></script>

    <script language="JavaScript" type="text/javascript">
        $(document).ready(function() {

            $("#btnRegister").on("click", function() {
                gravar();
            });

            
            
        });
        function gravar() {
            let form = $("#cadastro")[0];
            let formData = new FormData(form);
            console.log(formdata)
            gravaUsuario(formData, function(data) {
                //Verifica se a função de gravar os campos foi executada corretamente
                smartAlert("Sucesso", "Operação realizada com sucesso!", "success");
            });
        }

        function gravaUsuario(formData, callback) {
            formData.append("funcao", "grava")
            $.ajax({
                url: 'sql/sqlscope_registrar.php',
                type: 'post',
                data: formData,
                processData: false,
                contentType: false,
                success: results => callback(results)
            })
        }
        </script>

</body>

</html>