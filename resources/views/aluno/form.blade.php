<div class="mb-4">
    <h2><?php echo $id ? 'Editar' : 'Cadastrar'; ?> Usuário</h2>
</div>

<div class="card shadow-sm">
    <div class="card-body">
        <form method="POST">
            <div class="row mb-3">
                <div class="col-md-6">
                    <label>Nome Completo</label>
                    <input type="text" name="nome" class="form-control" value="<?php echo $usuario['nome']; ?>" required>
                </div>
                <div class="col-md-6">
                    <label>Telefone</label>
                    <input type="text" name="telefone" class="form-control" value="<?php echo $usuario['telefone']; ?>" required>
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-md-4">
                    <label>E-mail</label>
                    <input type="email" name="email" class="form-control" value="<?php echo $usuario['email']; ?>" required>
                </div>
                <div class="col-md-4">
                    <label>Login</label>
                    <input type="text" name="login" class="form-control" value="<?php echo $usuario['login']; ?>" required>
                </div>
                <div class="col-md-4">
                    <label>Senha</label>
                    <input type="password" name="senha" class="form-control" value="<?php echo $usuario['senha']; ?>" required>
                </div>
            </div>
            <button type="submit" class="btn btn-success">Salvar</button>
            <a href="UsuarioList.php" class="btn btn-secondary">Cancelar</a>
        </form>
    </div>
</div>