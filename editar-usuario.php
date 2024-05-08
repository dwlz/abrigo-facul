<h1 class="center col-auto mb-4">Editar Usuário</h1>

<?php 
    $sql = "SELECT * FROM usuario WHERE codigo =" .$_REQUEST["id"];
    $res = $conn->query($sql);
    $row = $res->fetch_object();



?>


<form class="" action="?page=salvar" method="POST">
    <input type="hidden" name="acao" value="editar">
    <input type="hidden" name="codigo" value="<?php print $row->codigo;?>">
    <div class="col col-4 col-auto mb-3">
        <label for="Nome">Nome</label>
        <input type="text" name="nome" class="form-control" value="<?php print $row->nome;?>">
    </div>
    <div class="col col-4 col-auto mb-3">
        <label for="senha">Senha</label>
        <input type="password" name="senha" class="form-control" required>
    </div>
    <div class="col col-3 mb-3">
        <button type="submit" class="btn btn-primary">Registrar</button>
    </div>
</form>