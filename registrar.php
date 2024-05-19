<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <title>Abrigo de Animais</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #e3f2fd;">
            <div class="container">
                <!-- Logo ou Nome da Marca -->
                <a class="navbar-brand" href="index.php"><img class="logo" src="img/cachorro logo.png" alt="cachorro logo"></a>
                <!-- Botão de Colapso (para dispositivos móveis) -->
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <!-- Itens da Navegação -->
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="index.php">Início</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="index.php#sobre">Sobre</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="registrar.php?page=adotar">Adotar</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownAdote" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Animais
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdownAdote">
                                <a class="dropdown-item" href="registrar.php?page=registrarpet">Cadastrar</a>
                                <a class="dropdown-item" href="registrar.php?page=listarPet">Listagem</a>
                                <!-- Adicione mais opções aqui se necessário -->
                            </div>
                        </li>
                    </ul>
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="registrar.php?page=logar">Login</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="registrar.php?page=registrar">Cadastre-se</a>
                        </li>
                    </ul>
                </div>

            </div>
        </nav>
    </header>
    <main>
        <div class="container">
            <?php
            include("config.php");
            switch (@$_REQUEST["page"]) {
                case "logar":
                    include("login.php");
                    break;
                case "registrar":
                    include("novo-usuario.php");
                    break;
                case "registrarpet":
                    include("registrar-pet.php");
                    break;
                case "adotar":
                    include("adotar.php");
                    break;
                case "salvar":
                    include("sqlScope.php");
                    break;
                case "listar":
                    include("listar-usuario.php");
                    break;
                case "listarPet":
                    include("listar-pet.php");
                    break;
                case "editar":
                    include("editar-usuario.php");
                    break;
                case "editarPet":
                    include("editar-pet.php");
                    break;
                case "visualizarPet":
                    include("visualizar-pet.php");
                    break;
                default: echo '<h1>Página não Encontrada!</h1>';
            }
            ?>
    </main>
    <footer></footer>

    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- Bootstrap JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <!-- Máscara de telefone -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"></script>
    <script>
        $(document).ready(function() {
            // Aplica a máscara ao campo de telefone
            $('#telefone').mask('(00) 0000-00009');
        });
    </script>

</body>

</html>