<?php
session_start();
include("config.php");

/* if ($_SESSION['usuarioCodigo'] == '') {
    header('Location: login.php');
} */

$logado = $_SESSION['usuarioCodigo'];
$permissao = $_SESSION['permissao'];


if ($permissao == 1) {
    $btnVoluntario = '';
} else {
    $btnVoluntario = "none";
}

$logado ? $verBotao = "none" : $verBotao = "";

$logado ? $btnDados = '' : $btnDados = "none";

$logado ? $btnSair = "" : $btnSair = "none";

if ($logado) {
    $sql = "SELECT nome FROM usuarios WHERE codigo = $logado";
    $res = $conn->query($sql);
    $row = $res->fetch_object();

    $nomeLogado = $row->nome;
}

?>



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
                <a class="navbar-brand" href="#"><img class="logo" src="img/cachorro logo.png" alt="cachorro logo"></a>
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
                                <a class="dropdown-item" href="registrar.php?page=registrarpet" style="display: <?php echo $btnVoluntario ?>;">Cadastrar</a>
                                <a class="dropdown-item" href="registrar.php?page=meusPet" style="display: <?php echo $btnSair ?>;">Meus Pets</a>
                                <a class="dropdown-item" href="registrar.php?page=listarPet">Listagem</a>
                                <!-- Adicione mais opções aqui se necessário -->
                            </div>
                        </li>
                    </ul>
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="registrar.php?page=logar" style="display:<?php echo $verBotao ?>;">Login</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="registrar-usuario.php" style="display:<?php echo $verBotao ?>;">Cadastre-se</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" style="display:<?php echo $btnDados ?>;" href="#" id="navbarDropdownAdote" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <?php echo 'Olá, ' . $nomeLogado  ?>
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdownNome">
                                <a class="dropdown-item" href="<?php echo 'registrar.php?page=editar&id=' . $logado . '' ?>">Editar Dados</a>
                                <a class="dropdown-item" href="sair.php" style="display:<?php echo $btnSair ?>;">Sair</a>
                                <!-- Adicione mais opções aqui se necessário -->
                            </div>
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
                case "meusPet":
                    include("meus-pet.php");
                    break;
                case "sqlScope":
                    include("sqlScope.php");
                    break;
                default:
                    echo '<h1>Página não Encontrada!</h1>';
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