<?php
include("config.php");

$acao = $_REQUEST['acao'];

if ($acao == 'salvar') {
    $nome = $_POST["nome"];
    $senha = md5($_POST["senha"]);
    $data_nascimento = $_POST["dataNascimento"];
    $email = $_POST["email"];
    $telefone = $_POST["telefone"];

    $sql = "INSERT INTO usuarios (nome, senha, telefone, email, data_nascimento) values ('{$nome}', '{$senha}', '{$telefone}', '{$email}', '{$data_nascimento}')";
    $res = $conn->query($sql);
    if ($res == false) {
        print "<script>alert('Não foi possivel cadastrar!');</script>";
        print "<script>location.href='registrar.php?page=listar';</script>";
    } else {
        print "<script>alert('Cadastro concluido com Sucesso!');</script>";
        print "<script>location.href='registrar.php?page=listar';</script>";
    }
}


if ($acao == 'salvarPet') {
    $nomePet = $_POST["nomePet"];
    $tipoAnimal = $_POST["tipoAnimal"];
    $data_nascimento = $_POST["dataNascimento"];
    $sexo = $_POST["sexo"];
    $porte = $_POST["porte"];
    $castrado = (int) $_POST["castrado"];
    $vacinado = (int) $_POST["vacinado"];
    $raca = $_POST["raca"];
    $comportamento = $_POST["comportamento"];
    $ativo = 1;

    $sql = "INSERT INTO pet (nomePet, tipoAnimal, data_nascimento, sexo, porte, castrado, vacinado, raca, comportamento, ativo) 
        values ('{$nomePet}', '{$tipoAnimal}', '{$data_nascimento}', '{$sexo}', '{$porte}',{$castrado},{$vacinado},'{$raca}','{$comportamento}',{$ativo})";

    $res = $conn->query($sql);
    if ($res == false) {
        print "<script>alert('Não foi possivel cadastrar!');</script>";
        print "<script>location.href='registrar.php?page=listarPet';</script>";
    } else {
        print "<script>alert('Cadastro concluido com Sucesso!');</script>";
        print "<script>location.href='registrar.php?page=listarPet';</script>";
    }
}

if ($acao == 'editar') {
    $codigo = $_REQUEST['codigo'];
    $nome = $_POST["nome"];
    $senha = md5($_POST["senha"]);
    $dataNascimento = $_POST["dataNascimento"];
    $email = $_POST["email"];
    $telefone = $_POST["telefone"];

    $sql = "UPDATE usuarios SET 
        nome='{$nome}', 
        senha='{$senha}',
        telefone='{$telefone}', 
        email='{$email}', 
        data_nascimento='{$dataNascimento}' 
        WHERE codigo = $codigo";
    $res = $conn->query($sql);
    if ($res == false) {
        print "<script>alert('Não foi possivel editar!');</script>";
        print "<script>location.href='registrar.php?page=listar';</script>";
    } else {
        print "<script>alert('Editado com Sucesso!');</script>";
        print "<script>location.href='registrar.php?page=listar';</script>";
    }
}
if ($acao == 'excluir') {
    $codigo = $_REQUEST['codigo'];

    $sql = "DELETE FROM usuarios WHERE codigo = $codigo";
    $res = $conn->query($sql);
    if ($res == false) {
        print "<script>alert('Não foi possivel excluir!');</script>";
        print "<script>location.href='registrar.php?page=listar';</script>";
    } else {
        print "<script>alert('Excluido com Sucesso!');</script>";
        print "<script>location.href='registrar.php?page=listar';</script>";
    }
}

if ($acao == 'editarPet') {

    $codigo = $_POST['codigo'];
    $nomePet = $_POST["nomePet"];
    $tipoAnimal = $_POST["tipoAnimal"];
    $data_nascimento = $_POST["dataNascimento"];
    $sexo = $_POST["sexo"];
    $porte = $_POST["porte"];
    $castrado = (int) $_POST["castrado"];
    $vacinado = (int) $_POST["vacinado"];
    $raca = $_POST["raca"];
    $comportamento = $_POST["comportamento"];

    $sql = "UPDATE pet SET 
    nomePet='{$nomePet}', 
    tipoAnimal='{$tipoAnimal}',
    data_nascimento='{$data_nascimento}', 
    porte='{$porte}',
    castrado={$castrado},
    vacinado={$vacinado},
    raca='{$raca}',
    comportamento='{$comportamento}'
    WHERE codigo = $codigo";

    $res = $conn->query($sql);
    if ($res == false) {
        print "<script>alert('Não foi possivel editar!');</script>";
        print "<script>location.href='registrar.php?page=listarPet';</script>";
    } else {
        print "<script>alert('Pet editado com Sucesso!');</script>";
        print "<script>location.href='registrar.php?page=listarPet';</script>";
    }
}


if ($acao == 'excluirPet') {
    $codigo = $_REQUEST['codigo'];

    $sql = "DELETE FROM pet WHERE codigo = $codigo";
    $res = $conn->query($sql);
    if ($res == false) {
        print "<script>alert('Não foi possivel excluir!');</script>";
        print "<script>location.href='registrar.php?page=listarPet';</script>";
    } else {
        print "<script>alert('Excluido com Sucesso!');</script>";
        print "<script>location.href='registrar.php?page=listarPet';</script>";
    }
}





if ($acao == 'recuperaPet') {

    $codigo = $_POST['codigo'];

    $sql = "SELECT * FROM pet WHERE codigo = $codigo";
    $res = $conn->query($sql);
    $row = $res->fetch_object();

    echo json_encode([
        'status' => 'success',
        'nomePet' => $row->nomePet,
        'codigo' => $row->codigo,
        'tipoAnimal' => $row->tipoAnimal,
        'data_nascimento' => $row->data_nascimento,
        'sexo' => $row->sexo,
        'porte' => $row->porte,
        'castrado' => $row->castrado,
        'vacinado' => $row->vacinado,
        'raca' => $row->raca,
        'comportamento' => $row->comportamento
    ]);

    return;
}


if ($acao == 'recuperaUsuario') {

    $codigo = $_POST['codigo'];

    $sql = "SELECT * FROM usuarios WHERE codigo = $codigo";
    $res = $conn->query($sql);
    $row = $res->fetch_object();

    echo json_encode([
        'status' => 'success',
        'nome' => $row->nome,
        'codigo' => $row->codigo,
        'data_nascimento' => $row->data_nascimento,
        'telefone' => $row->telefone,
        'email' => $row->email
    ]);

    return;
}

if($acao == 'adotar') {

    $pet = $_POST['pet'];
    $usuario = $_POST['usuario'];

    $sql = "INSERT INTO petVinculo (usuario_codigo, pet_codigo) VALUES ('{$usuario}', {$pet})";
    $res = $conn->query($sql);

    if ($res == false) {
        print "<script>alert('Não foi possível Adotar!');</script>";
        print "<script>location.href='registrar.php?page=listarPet';</script>";
    }

    $sql = "UPDATE pet SET ativo = 0 WHERE codigo = $pet";
    $res = $conn->query($sql);

    if ($res == false) {
        print "<script>alert('Não foi possível Adotar!');</script>";
        print "<script>location.href='registrar.php?page=listarPet';</script>";
    } else {
        print "<script>alert('Adotado com Sucesso!');</script>";
        print "<script>location.href='registrar.php?page=listar';</script>";
    }

}
