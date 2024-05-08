<h1 class="mb-5">Listagem de Usuarios</h1>

<?php 
    $sql = "SELECT * FROM usuario";

    $res = $conn->query($sql);

    $qtd = $res->num_rows;

    if($qtd > 0) {
        print '<table class="table table-bordered table-striped table-condensed table-hover">';
        print 
        '<thead>
            <th class="text-center">Codigo</th>
            <th class="text-center">Nome</th>
            <th class="text-center">Senha</th>
            <th class="text-center">Ações</th>
        </thead>';
        while ($row = $res->fetch_object()) {
            print '<tr>';
            print "<td>".$row->codigo."</td>";  
            print "<td>".$row->nome."</td>";  
            print "<td>".$row->senha."</td>";  
            print "<td> 
                    <button class='btn btn-success' onclick=\"location.href='?page=editar&id=".$row->codigo."';\">Editar</button>
                    <button class='btn btn-danger'onclick=\"if(confirm('Tem certeza que deseja excluir?')){location.href='?page=salvar&acao=excluir&codigo=".$row->codigo."';}else{false;}\">Excluir</button>
                   </td>";  

            print '</tr>';
         }
         print '</table>';

    }else {
        print "<p class='alert alert-danger'>Não encotrou resultado!</p>";
    }

?>