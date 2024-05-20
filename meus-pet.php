<?php
include("config.php");
session_start();


if (!isset($_SESSION['usuarioCodigo']) == true) {
    unset($_SESSION['usuaridoCodigo']);
    header('Location: registrar.php?page=logar');
} else {

    $logado = $_SESSION['usuarioCodigo'];
    $permissao = $_SESSION['permissao'];


    if ($permissao == 1) {
        $btnVoluntario = '';
    } else {
        $btnVoluntario = 'none';
    }

    $logado ? $verBotao = "none" : $verBotao = "";

    $logado ? $btnSair = "" : $btnSair = "none";

    if ($logado) {
        $sql = "SELECT nome FROM usuarios WHERE codigo = $logado";
        $res = $conn->query($sql);
        $row = $res->fetch_object();

        $nomeLogado = $row->nome;
    }
}

?>

<h1 class="mb-5">Seus Pets</h1>

<?php
$sql = "SELECT P.nomePet, P.codigo, P.tipoAnimal, P.sexo, P.vacinado, P.castrado, P.ativo FROM pet P
INNER JOIN petVinculo PV ON PV.pet_codigo = P.codigo
INNER JOIN usuarios U ON U.codigo = PV.usuario_codigo
WHERE PV.usuario_codigo = $logado";

$res = $conn->query($sql);

$qtd = $res->num_rows;

if ($qtd > 0) {
    print '<table class="table table-bordered table-striped table-condensed table-hover">';
    print
        '<thead>
            <th class="text-center">Codigo</th>
            <th class="text-left">Nome</th>
            <th class="text-center">Tipo do Animal</th>
            <th class="text-center">Sexo</th>
            <th class="text-center">Vacinado</th>
            <th class="text-center">Castrado</th>
            <th class="text-center">Ações</th>
        </thead>';
    while ($row = $res->fetch_object()) {

        $vacinado = (bool) $row->vacinado;
        $castrado = (bool) $row->castrado;
        $ativo = (bool) $row->ativo;

        $vacinado ? $vacinado = "Sim" : $vacinado = "Não";
        $castrado ? $castrado = "Sim" : $castrado = "Não";


        if ($row->tipoAnimal == 1) {
            $tipoAnimal = 'Cachorro';
        } else {
            $tipoAnimal = 'Gato';
        }

        if ($row->sexo == 1) {
            $sexo = 'Macho';
        } else {
            $sexo = 'Fêmea';
        }

        if ($ativo) {
            $ativo = "<td class='text-center' style='color:green;font-weight:bold;'>Sim</td>";
        } else {
            $ativo = "<td class='text-center' style='color:red;font-weight:bold;'>Não</td>";
        }
        print '<tr>';
        print "<td class='text-center' style='width:10%;'>" . $row->codigo . "</td>";
        print "<td style='width:20%;'>" . $row->nomePet . "</td>";
        print "<td class='text-center'>" . $tipoAnimal . "</td>";
        print "<td class='text-center'>" . $sexo . "</td>";
        print "<td class='text-center'>" . $vacinado . "</td>";
        print "<td class='text-center'>" . $castrado . "</td>";
        print "<td class='text-center'> 
                    <button class='btn btn-success' style='display: $btnVoluntario;' onclick=\"location.href='?page=editarPet&id=" . $row->codigo . "';\">Editar</button>
                    <button class='btn btn-info'onclick=\"location.href='?page=visualizarPet&id=" . $row->codigo . "'\">Visualizar</button>
                    <button class='btn btn-danger' style='display: $btnVoluntario;' onclick=\"if(confirm('Tem certeza que deseja excluir?')){location.href='?page=salvar&acao=excluirPet&codigo=" . $row->codigo . "';}else{false;}\">Excluir</button>
                   </td>";

        print '</tr>';
    }
    print '</table>';
} else {
    print "<p class='alert alert-danger'>Não encotrou resultado!</p>";
}

?>