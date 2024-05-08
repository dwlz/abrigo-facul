<?php
include "config.php";
include "repositorio.php";

// chama as funções 
$funcao = $_POST["funcao"];

if ($funcao == 'grava') {
    call_user_func($funcao);
}


function grava()
{
    //Cadastro
    $codigo = (int) $_POST["codigo"];
    $nomeUsuario = formatarString($_POST["username"]);
    $senha = formatarString($_POST["password"]);
    $ativo = 1;

      $sql = "dbo.usuario_Atualiza
      $codigo,
      $nomeUsuario,
      $senha,
      $ativo";




    $reposit = new reposit();
    $result = $reposit->Execprocedure($sql);

    if($result > 0) {
        
    }
}


function formatarString($value)
{
    $aux = $value;
    if (!$aux) {
        return 'NULL';
    }
    $aux = "'" . trim($aux) . "'";
    return $aux;
}

$reposit = new reposit();
$result = $reposit->Execprocedure($sql);

if ($result > 0) {
    $codigo = $result[0]['codigo'];
}
return;

