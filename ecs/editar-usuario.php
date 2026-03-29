<?php
require __DIR__ . '/bootstrap.php';
require_login();
$user = current_user();
$flash = get_flash();
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Usuário - Projetos DevOps & Cloud</title>
    <link rel="stylesheet" href="styles-devops.css">
</head>
<body>
    <header class="header">
        <div class="container">
            <h1 class="logo">Projetos DevOps & Cloud - AWS</h1>
            <div class="header-right">
                <div class="user-bar">
                    <span class="user-name">Usuário: <?php echo htmlspecialchars($user['nome'], ENT_QUOTES, 'UTF-8'); ?></span>
                    <a class="btn-user" href="editar-usuario.php">Editar usuário</a>
                    <a class="btn-user btn-logout" href="logout.php">Sair</a>
                </div>
                <nav class="nav">
                    <ul>
                        <li><a href="index.php#sobre">Sobre</a></li>
                        <li><a href="bemvindo.php#galeria">Projetos</a></li>
                        <li><a href="index.php#contato">Contato</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </header>

    <?php if ($flash): ?>
        <div class="container" style="margin-top: 16px;">
            <div class="auth-note" style="margin: 0;">
                <?php echo htmlspecialchars($flash['message'], ENT_QUOTES, 'UTF-8'); ?>
            </div>
        </div>
    <?php endif; ?>

    <main class="auth-page">
        <div class="auth-card">
            <h2 class="auth-title">Editar Usuário</h2>
            <p class="auth-subtitle">Atualize seus dados de acesso.</p>

            <form class="auth-form" action="editar_usuario_action.php" method="post">
                <label for="nome">Nome</label>
                <input id="nome" name="nome" type="text" value="<?php echo htmlspecialchars($user['nome'], ENT_QUOTES, 'UTF-8'); ?>" required>

                <label for="login">Login</label>
                <input id="login" name="login" type="text" value="<?php echo htmlspecialchars($user['login'], ENT_QUOTES, 'UTF-8'); ?>" required>

                <label for="senha">Nova senha</label>
                <input id="senha" name="senha" type="password" placeholder="Digite a nova senha">

                <div class="auth-actions">
                    <button type="submit" class="btn-primary">Salvar alterações</button>
                    <a class="btn-secondary" href="bemvindo.php">Cancelar</a>
                </div>
            </form>

            <p class="auth-note">As alterações são salvas no RDS do lab.</p>
        </div>
    </main>

    <!-- Rodape/Contato -->
    <footer id="contato" class="footer">
        <div class="container">
            <h2>Entre em Contato</h2>
            <p>Email: luizaugusouza@gmail.com</p>
            <p>LinkedIn: https://www.linkedin.com/in/luiz-inhesta-341b4b311/</p>
            <p>GitHub: https://github.com/luizinhesta</p>
            <p class="copyright">© 2026 DevOps & Cloud Projects. Todos os direitos reservados Luiz Inhesta.</p>
        </div>
    </footer>
</body>
</html>