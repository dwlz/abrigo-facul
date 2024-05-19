<h1 class="center col-auto mb-4">Cadastrar Pet</h1>

<form class="center col-auto mb-4" action="?page=salvar" method="POST">
    <input type="hidden" name="acao" value="salvarPet">
    <div class="row">
        <div class="col col-3  mb-2">
            <label for="nomePet">Nome do Animal</label>
            <input type="text" name="nomePet" class="form-control" required>
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
            <input type="text" name="raca" class="form-control">
        </div>
        <div class="col col-5 mb-3">
            <label for="comportamento">Comportamento</label>
            <input type="text" name="comportamento" class="form-control">
        </div>
        
        <div class="col col-12 text-left">
            <button type="submit" class="btn btn-primary btn-lg">Registrar</button>
        </div>
    </div>

</form>