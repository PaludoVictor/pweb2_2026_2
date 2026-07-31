<div class="d-flex justify-content-between align-items-center mb-4">
    <h2>Gerenciar Usuários</h2>
    <a href="UsuarioForm.php" class="btn btn-primary">+ Novo Usuário</a>
</div>

<form method="GET" class="mb-4">
    <div class="input-group w-50">
        <input type="text" name="busca" class="form-control" placeholder="Buscar por nome ou login..." value="<?php echo htmlspecialchars($busca); ?>">
        <button class="btn btn-outline-secondary" type="submit">Pesquisar</button>
    </div>
</form>

<div class="card shadow-sm">
    <div class="card-body">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>E-mail</th>
                    <th>Login</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($usuarios as $u): ?>
                <tr>
                    <td><?php echo $u['id']; ?></td>
                    <td><?php echo $u['nome']; ?></td>
                    <td><?php echo $u['email']; ?></td>
                    <td><?php echo $u['login']; ?></td>
                    <td>
                        <a href="UsuarioForm.php?id=<?php echo $u['id']; ?>" class="btn btn-sm btn-warning">Editar</a>
                        <a href="UsuarioList.php?deletar=<?php echo $u['id']; ?>" class="btn btn-sm btn-danger" onclick="return confirm('Tem certeza?');">Excluir</a>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>