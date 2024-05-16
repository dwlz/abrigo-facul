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
            <input type="text" name="nome" class="form-control" value="<?php print $row->nome; ?>">
        </div>
        <div class="col col-4 col-auto mb-3">
            <label for="dataNascimento">Data de Nascimento</label>
            <input id="dataNascimento" type="date" name="dataNascimento" value="<?php print $row->data_nascimento;?>" class="form-control text-center">
        </div>
        <div class="col col-4 col-auto mb-3">
            <label for="telefone">Telefone</label>
            <input id="telefone" type="text" name="telefone" value="<?php print $row->telefone; ?>" class="form-control text-center">
        </div>
        <div class="col col-4 col-auto mb-3">
            <label for="senha">Senha</label>
            <input type="password" name="senha" class="form-control" required>
        </div>
        <div class="col col-4 col-auto mb-3">
            <label for="email">E-mail</label>
            <input id="email" type="email" value="<?php print $row->email; ?>" name="email" class="form-control">
        </div>
        <div class="col col-12 text-left">
            <button type="submit" class="btn btn-primary btn-lg">Editar</button>
        </div>
    </div>
</form>