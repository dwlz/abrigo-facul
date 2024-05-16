<?php 
    $acao = $_REQUEST['acao'];

    if($acao == 'salvar'){
        $nome = $_POST["nome"];
        $senha = md5($_POST["senha"]);
        $data_nascimento = $_POST["dataNascimento"];
        $email = $_POST["email"];
        $telefone = $_POST["telefone"];

        $sql = "INSERT INTO usuarios (nome, senha, telefone, email, data_nascimento) values ('{$nome}', '{$senha}', '{$telefone}', '{$email}', '{$data_nascimento}')";
        $res = $conn->query($sql);
        if($res == false) {
            print "<script>alert('Não foi possivel cadastrar!');</script>";
            print "<script>location.href='registrar.php?page=listar';</script>";
        } else {
            print "<script>alert('Cadastro concluido com Sucesso!');</script>";
            print "<script>location.href='registrar.php?page=listar';</script>";
        }




    }

    if($acao == 'editar') {
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
        if($res == false) {
            print "<script>alert('Não foi possivel editar!');</script>";
            print "<script>location.href='registrar.php?page=listar';</script>";
        } else {
            print "<script>alert('Editado com Sucesso!');</script>";
            print "<script>location.href='registrar.php?page=listar';</script>";
        }
    }
    if($acao == 'excluir') {
        $codigo = $_REQUEST['codigo'];

        $sql = "DELETE FROM usuario WHERE codigo = $codigo";
        $res = $conn->query($sql);
        if($res == false) {
            print "<script>alert('Não foi possivel excluir!');</script>";
            print "<script>location.href='registrar.php?page=listar';</script>";
        } else {
            print "<script>alert('Excluido com Sucesso!');</script>";
            print "<script>location.href='registrar.php?page=listar';</script>";
        }
    }
?>
