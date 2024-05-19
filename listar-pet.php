<h1 class="mb-5">Listagem de Pet</h1>

<?php
$sql = "SELECT * FROM pet";

$res = $conn->query($sql);

$qtd = $res->num_rows;

if ($qtd > 0) {
    print '<table class="table table-bordered table-striped table-condensed table-hover">';
    print
        '<thead>
            <th class="text-center">Codigo</th>
            <th class="text-center">Nome</th>
            <th class="text-center">Tipo do Animal</th>
            <th class="text-center">Sexo</th>
            <th class="text-center">Vacinado</th>
            <th class="text-center">Disponível</th>
            <th class="text-center">Ações</th>
        </thead>';
    while ($row = $res->fetch_object()) {

        $vacinado = $row->vacinado;
        $ativo = (bool) $row->ativo;

        $vacinado ? $vacinado = "Sim" : $vacinado = "Não";

        $tipoAnimal;
        $sexo;
        
        if($row->tipoAnimal == 1) {
            $tipoAnimal = 'Cachorro';
        } else {
            $tipoAnimal = 'Gato';
        }

        if($row->sexo == 1) {
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
        print "<td style='width:10%;'>" . $row->nomePet . "</td>";
        print "<td class='text-center'>" . $tipoAnimal . "</td>";
        print "<td class='text-center'>" . $sexo . "</td>";
        print "<td class='text-center'>" . $vacinado . "</td>";
        print $ativo;
        print "<td class='text-center'> 
                    <button class='btn btn-success' onclick=\"location.href='?page=editarPet&id=" . $row->codigo . "';\">Editar</button>
                    <button class='btn btn-info'onclick=\"location.href='?page=visualizarPet&id=" . $row->codigo . "'\">Visualizar</button>
                    <button class='btn btn-danger'onclick=\"if(confirm('Tem certeza que deseja excluir?')){location.href='?page=salvar&acao=excluirPet&codigo=" . $row->codigo . "';}else{false;}\">Excluir</button>
                   </td>";

        print '</tr>';
    }
    print '</table>';
} else {
    print "<p class='alert alert-danger'>Não encotrou resultado!</p>";
}

?>