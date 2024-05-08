<?php 
    $acao = $_REQUEST['acao'];

    if($acao == 'salvar'){
        $nome = $_POST["nome"];
        $senha = md5($_POST["senha"]);

        $sql = "INSERT INTO usuario (nome, senha) values ('{$nome}', '{$senha}')";
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

        $sql = "UPDATE usuario SET 
        nome='{$nome}', 
        senha='{$senha}' WHERE codigo = $codigo";
        $res = $conn->query($sql);
        if($res == false) {
            print "<script>alert('Não foi possivel editar!');</script>";
            print "<script>location.href='registrar.php?page=listar';</script>";
        } else {
            print "<script>alert('Editado com Sucesso!');</script>";
            print "<script>location.href='registrar.php?page=listar';</script>";
        }
    }
  /*   switch ($_REQUEST['acao']) {
        case 'salvar':
            $nome = $_POST["nome"];
            $senha = $_POST["senha"];

            $sql = "INSERT INTO usuario (nome, senha) values ('{$nome}', '{$senha}')";
            $res = $conn->query($sql);
            if($res < 0) {
                print 'Erro ao gravar';
            }

            break;

        case 'editar':
            # code...
            break;

        case 'excluir':
            # code...
            break;
        
      
    } */

?>