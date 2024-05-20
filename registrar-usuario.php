<?php
include("config.php");
session_start();
/* if($_SESSION['usuarioCodigo'] == '') {
        header('Location: registrar-usuario.php');

    } else {

        
    } */
$logado = $_SESSION['usuarioCodigo'];
$permissao = $_SESSION['permissao'];


if ($permissao == 1) {
    $btnVoluntario = '';
} else {
    $btnVoluntario = "none";
}

$logado ? $verBotao = "none" : $verBotao = "";

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
                                <a class="dropdown-item" href="registrar.php?page=listarPet">Listagem</a>
                                <!-- Adicione mais opções aqui se necessário -->
                            </div>
                        </li>
                    </ul>
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="login.php" style="display:<?php echo $verBotao ?>;">Login</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="registrar-usuario.php" style="display:<?php echo $verBotao ?>;">Cadastre-se</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo 'registrar.php?page=editar&id='. $logado .'' ?>" style="display:<?php echo $btnSair ?>;"><?php echo 'Olá, ' . $nomeLogado . '' ?></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="sair.php" style="display:<?php echo $btnSair ?>;">Sair</a>
                        </li>
                    </ul>
                </div>

            </div>
        </nav>
    </header>
    <main>
        <div class="container">
            <h1 class="center col-auto mb-4">Novo Usuário</h1>

            <form class="center col-auto mb-4" action="registrar.php?page=salvar" method="POST">
                <input type="hidden" name="acao" value="salvar">
                <div class="row">
                    <div class="col col-4 col-auto mb-3">
                        <label for="Nome">Nome Completo</label>
                        <input type="text" name="nome" class="form-control" required>
                    </div>
                    <div class="col col-4 col-auto mb-3">
                        <label for="dataNascimento">Data de Nascimento</label>
                        <input id="dataNascimento" type="date" name="dataNascimento" class="form-control text-center" required>
                    </div>
                    <div class="col col-4 col-auto mb-3">
                        <label for="telefone">Telefone</label>
                        <input id="telefone" type="text" name="telefone" class="form-control" required>
                    </div>
                    <div class="col col-4 col-auto mb-3">
                        <label for="email">E-mail</label>
                        <input id="email" type="email" name="email" class="form-control" required>
                    </div>
                    <div class="col col-3 col-auto mb-3">
                        <label for="senha">Senha</label>
                        <input id="senha" type="password" name="senha" class="form-control" required>
                    </div>
                    <div class="col col-12 text-left">
                        <button type="submit" class="btn btn-primary btn-lg">Registrar</button>
                    </div>
                </div>

            </form>
        </div>
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

