<h1 class="center col-auto mb-4">Adote seu Pet!</h1>

<form class="center col-auto mb-4" action="?page=salvar" method="POST">
    <input type="hidden" name="acao" value="adotar">
    <div class="row">
        <div class="col col-4 col-auto mb-3">
            <label for="nome">Nome</label>
            <select class="form-control" name="usuario" id="usuario" required>
                <?php
                $sql = "SELECT * FROM usuarios";
                $res = $conn->query($sql);

                $qtd = $res->num_rows;

                $codigo = $row->codigo;

                if ($qtd > 0) {
                    echo '<option></option>';
                    while ($row = $res->fetch_object()) {
                        echo '<option value =' . $row->codigo . '>' . $row->nome . '</option>';
                    }
                } else {
                }


                ?>
            </select>
        </div>
        <div class="col col-4 col-auto mb-3">
            <label for="pet">Pets Disponíveis</label>
            <select class="form-control" name="pet" id="pet" required>
                <?php
                $sql = "SELECT * FROM pet WHERE ativo = 1";
                $res = $conn->query($sql);

                $qtd = $res->num_rows;

                $codigo = $row->codigo;

                if ($qtd > 0) {
                    echo '<option></option>';
                    while ($row = $res->fetch_object()) {
                        echo '<option value =' . $row->codigo . '>' . $row->nomePet . '</option>';
                    }
                } else {
                }


                ?>
            </select>
        </div>
    </div>
    <hr hidden>
    <div class="row">
        <div class="col col-3 mb-2 hidden" hidden>
            <label for="tipoAnimal">Tipo do Animal</label>
            <select class="form-control" name="tipoAnimal" id="tipoAnimal" disabled>
                <option value=""></option>
                <option value="1">Cachorro</option>
                <option value="2">Gato</option>
            </select>
        </div>
        <div class="col col-3 mb-2 hidden" hidden>
            <label for="dataNascimento">Data de Nascimento</label>
            <input id="dataNascimento" type="date" name="dataNascimento" class="form-control text-center" disabled>
        </div>
        <div class="col col-3 mb-2 hidden" hidden>
            <label for="sexo">Sexo</label>
            <select class="form-control" name="sexo" id="sexo" disabled>
                <option value=""></option>
                <option value="1">Macho</option>
                <option value="2">Fêmea</option>
            </select>
        </div>
        <div class="col col-3 mb-2 hidden" hidden>
            <label for="porte">Porte</label>
            <select class="form-control" name="porte" id="porte" disabled>
                <option value=""></option>
                <option value="1">Pequeno</option>
                <option value="2">Médio</option>
                <option value="3">Grande</option>
            </select>
        </div>
        <div class="col col-3 mb-2 hidden" hidden>
            <label for="castrado">Castrado</label>
            <select class="form-control" name="castrado" id="castrado" disabled>
                <option value="0" selected>Não</option>
                <option value="1">Sim</option>
            </select>
        </div>
        <div class="col col-3 mb-2 hidden" hidden>
            <label for="vacinado">Vacinado</label>
            <select class="form-control" name="vacinado" id="vacinado" disabled>
                <option value="0" selected>Não</option>
                <option value="1">Sim</option>
            </select>
        </div>
        <div class="col col-3 mb-3 hidden" hidden>
            <label for="raca">Raça</label>
            <input id="raca" type="text" name="raca" class="form-control" disabled>
        </div>
        <div class="col col-5 mb-4 hidden" hidden>
            <label for="comportamento">Comportamento</label>
            <input id="comportamento" type="text" name="comportamento" class="form-control" disabled>
        </div>
        <div class="col col-12 text-left">
            <button id="btnAdotar" type="submit" class="btn btn-primary btn-lg" disabled>Adotar</button>
        </div>
    </div>

</form>


<!-- jQuery -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<!-- Bootstrap JavaScript -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


<script>
    $(document).ready(function() {

        $("#pet").on("change", () => recuperandoPet());


        //carregaPagina();
    });



    function recuperandoPet() {
        var pet = $("#pet").val();

        recuperaPet(pet, function(data) {
            if (data.status == 'success') {
                $(".hidden").prop('hidden', false);
                $("#tipoAnimal").val(data.tipoAnimal);
                $("#dataNascimento").val(data.data_nascimento);
                $("#sexo").val(data.sexo);
                $("#porte").val(data.porte);
                $("#castrado").val(data.castrado);
                $("#vacinado").val(data.vacinado);
                $("#raca").val(data.raca);
                $("#comportamento").val(data.comportamento);
                $("#btnAdotar").prop('disabled', false);
                $("hr").prop('hidden', false);
            } else {
                smartAlert("Error", "Falha ao recuperar informações do Pet", "error")
            }
        })
    }


    function carregaPagina() {
        var urlx = window.document.URL.toString();
        var params = urlx.split("id");
        if (params.length === 2) {
            var id = params[1];
            var idx = id.split("=");
            var idd = idx[1];
            if (idd !== "") {
                recuperaPet(idd, function(data) {
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