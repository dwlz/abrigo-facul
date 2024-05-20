<h1 class="center col-auto mb-4">Editar Usuário</h1>

<?php
$sql = "SELECT * FROM usuarios WHERE codigo =" . $_REQUEST["id"];
$res = $conn->query($sql);
$row = $res->fetch_object();



?>


<form class="center col-auto mb-4" action="?page=salvar" method="POST">
    <input type="hidden" name="acao" value="editar">
    <input type="hidden" name="codigo" value="<?php print $row->codigo; ?>">
    <div class="row">
        <div class="col col-4 col-auto mb-3">
            <label for="Nome">Nome</label>
            <input type="text" name="nome" id="nome" class="form-control" required>
        </div>
        <div class="col col-4 col-auto mb-3">
            <label for="dataNascimento">Data de Nascimento</label>
            <input id="dataNascimento" type="date" name="dataNascimento" class="form-control text-center" required>
        </div>
        <div class="col col-4 col-auto mb-3">
            <label for="telefone">Telefone</label>
            <input id="telefone" type="text" name="telefone" class="form-control text-center" required>
        </div>
        <div class="col col-4 col-auto mb-3">
            <label for="senha">Senha</label>
            <input type="password" name="senha" class="form-control" required>
        </div>
        <div class="col col-4 col-auto mb-3">
            <label for="email">E-mail</label>
            <input id="email" type="email" name="email" class="form-control" required>
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
                recuperaUsuario(idd, function (data) {
                    $("#nome").val(data.nome);
                    $("#telefone").val(data.telefone);
                    $("#email").val(data.email);
                    $("#dataNascimento").val(data.data_nascimento);
                });
            }
        }
    }

    function recuperaUsuario(codigo, callback) {
    $.ajax({
        url: 'sqlScope.php',
        dataType: 'json',
        type: 'POST',
        data: {
            acao: 'recuperaUsuario',
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