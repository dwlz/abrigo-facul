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
                            <a class="nav-link" href="index.php">Sobre</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="index.php">Canil</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownAdote" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Adote
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdownAdote">
                                <a class="dropdown-item" href="adote.php">Opção 1</a>
                                <a class="dropdown-item" href="subpagina.php">Opção 2</a>
                                <!-- Adicione mais opções aqui se necessário -->
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="registrar.php?page=registrar">Cadastre-se</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="registrar.php?page=listar">Listagem</a>
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
                case "salvar":
                    include("salvar-usuario.php");
                    break;
                case "listar":
                    include("listar-usuario.php");
                    break;
                case "editar":
                    include("editar-usuario.php");
                    break;
                default:
            }

            ?>


    </main>
    <footer></footer>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"></script>

    <script language="JavaScript" type="text/javascript">
        $(document).ready(function() {

            // Aplica a máscara ao campo de telefone
            $('#telefone').mask('(00) 0000-00009');

        });

    </script>

</body>

</html>