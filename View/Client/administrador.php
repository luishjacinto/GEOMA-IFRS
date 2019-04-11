<!DOCTYPE html>
<title>Administração Login</title>

<div class="container-fluid">
    <h2 class="text-center titulo-padrao">Login</h2>
    <form method="POST" action="logar">
        <div class="form-group">
            <label for="nickname">Administrador</label>
            <input type="text" class="form-control" name="nickname" aria-describedby="emailHelp" placeholder="Insira seu Login de Aministrador">
        </div>
        <div class="form-group">
            <label for="senha">Senha</label>
            <input type="password" class="form-control" name="senha" placeholder="Insira sua Senha">
        </div>
        <button type="submit" class="btn btn-primary">Logar</button>
    </form>
</div>