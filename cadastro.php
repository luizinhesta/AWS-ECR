<?php
require __DIR__ . '/bootstrap.php';
$flash = get_flash();
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Usuário - Projetos DevOps & Cloud</title>
    <link rel="stylesheet" href="styles-devops.css">
</head>
<body>
    <header class="header">
        <div class="container">
            <h1 class="logo">Projetos DevOps & Cloud - AWS</h1>
            <div class="header-right">
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
            <h2 class="auth-title">Cadastro de Usuário</h2>
            <p class="auth-subtitle">Crie seu acesso para entrar no laboratório.</p>

            <form class="auth-form" action="cadastro_action.php" method="post">
                <label for="nome">Nome</label>
                <input id="nome" name="nome" type="text" placeholder="Seu nome completo" required>

                <label for="login">Login</label>
                <input id="login" name="login" type="text" placeholder="Seu login" required>

                <label for="senha">Senha</label>
                <input id="senha" name="senha" type="password" placeholder="Crie uma senha" required>

                <div class="auth-actions">
                    <button type="submit" class="btn-primary">Cadastrar</button>
                    <a class="btn-secondary" href="index.php">Voltar para o login</a>
                </div>
            </form>

            <p class="auth-note">Este fluxo grava no RDS do seu lab (EC2).</p>
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