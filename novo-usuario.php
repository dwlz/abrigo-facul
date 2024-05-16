<h1 class="center col-auto mb-4">Novo Usuário</h1>

<form class="center col-auto mb-4" action="?page=salvar" method="POST">
    <input type="hidden" name="acao" value="salvar">
    <div class="row">
        <div class="col col-4 col-auto mb-3">
            <label for="Nome">Nome Completo</label>
            <input type="text" name="nome" class="form-control">
        </div>
        <div class="col col-4 col-auto mb-3">
            <label for="dataNascimento">Data de Nascimento</label>
            <input id="dataNascimento" type="date" name="dataNascimento" class="form-control text-center">
        </div>
        <div class="col col-4 col-auto mb-3">
            <label for="telefone">Telefone</label>
            <input id="telefone" type="text" name="telefone" class="form-control">
        </div>
        <div class="col col-4 col-auto mb-3">
            <label for="email">E-mail</label>
            <input id="email" type="email" name="email" class="form-control">
        </div>
        <div class="col col-3 col-auto mb-3">
            <label for="senha">Senha</label>
            <input id="senha" type="password" name="senha" class="form-control">
        </div>
        <div class="col col-12 text-left"> 
            <button type="submit" class="btn btn-primary btn-lg">Registrar</button>
        </div>
    </div>

</form>

</script>