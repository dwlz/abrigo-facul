<h1 class="center col-auto mb-4">Editar Pet</h1>

<?php
$sql = "SELECT * FROM pet WHERE codigo =" . $_REQUEST["id"];
$res = $conn->query($sql);
$row = $res->fetch_object();

?>


<form class="center col-auto mb-4" action="?page=salvar" method="POST">
    <input type="hidden" name="codigo" id="codigo" value="<?php $row->codigo;?>">
    <input type="hidden" name="acao" value="editarPet">
    <div class="row">
        <div class="col col-3  mb-2">
            <label for="nomePet">Nome do Animal</label>
            <input id="nomePet" type="text" name="nomePet" class="form-control" required>
        </div>
        <div class="col col-3 mb-2">
            <label for="tipoAnimal">Tipo do Animal</label>
            <select class="form-control" name="tipoAnimal" id="tipoAnimal" required>
                <option value=""></option>
                <option value="1">Cachorro</option>
                <option value="2">Gato</option>
            </select>
        </div>
        <div class="col col-3 mb-2">
            <label for="dataNascimento">Data de Nascimento</label>
            <input id="dataNascimento" type="date" name="dataNascimento" class="form-control text-center">
        </div>
        <div class="col col-3 mb-2">
            <label for="sexo">Sexo</label>
            <select class="form-control" name="sexo" id="sexo" required>
                <option value=""></option>
                <option value="1">Macho</option>
                <option value="2">Fêmea</option>
            </select>
        </div>
        <div class="col col-3 mb-2">
            <label for="porte">Porte</label>
            <select class="form-control" name="porte" id="porte">
                <option value=""></option>
                <option value="1">Pequeno</option>
                <option value="2">Médio</option>
                <option value="3">Grande</option>
            </select>
        </div>
        <div class="col col-3 mb-2">
            <label for="castrado">Castrado</label>
            <select class="form-control" name="castrado" id="castrado">
                <option value="0" selected>Não</option>
                <option value="1">Sim</option>
            </select>
        </div>
        <div class="col col-3 mb-2">
            <label for="vacinado">Vacinado</label>
            <select class="form-control" name="vacinado" id="vacinado">
                <option value="0" selected>Não</option>
                <option value="1">Sim</option>
            </select>
        </div>
        <div class="col col-3 mb-3">
            <label for="raca">Raça</label>
            <input id="raca" type="text" name="raca" class="form-control">
        </div>
        <div class="col col-5 mb-3">
            <label for="comportamento">Comportamento</label>
            <input type="text" name="comportamento" id="comportamento" class="form-control">
        </div>
        <div class="col col-12 text-left">
            <button type="submit" class="btn btn-primary btn-lg">Editar</button>
        </div>
    </div>




</form>


<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>



<script>
    $(document).ready(function() {
        carregaPagina();
    });



    function carregaPagina() {
        var urlx = window.document.URL.toString();
        var params = urlx.split("id");
        if (params.length === 2) {
            var id = params[1];
            var idx = id.split("=");
            var idd = idx[1];
            if (idd !== "") {
                recuperaPet(idd, function (data) {
                    $("#codigo").val(data.codigo)
                    $("#nomePet").val(data.nomePet);
                    $("#tipoAnimal").val(data.tipoAnimal);
                    $("#dataNascimento").val(data.data_nascimento);
                    $("#sexo").val(data.sexo);
                    $("#porte").val(data.porte);
                    $("#castrado").val(data.castrado);
                    $("#vacinado").val(data.vacinado);
                    $("#raca").val(data.raca);
                    $("#comportamento").val(data.comportamento);
                });
            }
        }
    }

    function recuperaPet(codigo, callback) {
    $.ajax({
        url: 'sqlScope.php',
        dataType: 'json',
        type: 'POST',
        data: {
            acao: 'recuperaPet',
            codigo: codigo
        },
        success: function(response) {
            console.log(response);
            callback(response);
        },
        error: function(jqXHR, textStatus, errorThrown) {
            console.error(textStatus, errorThrown);
            console.error(jqXHR.responseText);
        }
    });
}
</script>