<?php
require_once __DIR__ . '/bootstrap.php';

$flash = function_exists('get_flash') ? get_flash() : null;
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projetos DevOps & Cloud - AWS e Infraestrutura Moderna</title>
    <link rel="stylesheet" href="styles-devops.css">
</head>
<body>

<header class="header">
    <div class="container">
        <h1 class="logo">Projetos DevOps & Cloud - AWS</h1>

        <div class="header-right">
            <form class="login-form" action="login.php" method="post" autocomplete="off">
                <input type="text" name="login" placeholder="Login" required>
                <input type="password" name="senha" placeholder="Senha" required>
                <button type="submit" class="btn-login">Entrar</button>
                <a class="link-cadastro" href="cadastro.php">Criar usuário</a>
            </form>

            <nav class="nav">
                <ul>
                    <li><a href="#sobre">Sobre</a></li>
                    <li><a href="bemvindo.php#galeria">Projetos</a></li>
                    <li><a href="#contato">Contato</a></li>
                </ul>
            </nav>
        </div>
    </div>
</header>

<?php if (!empty($flash['message'])): ?>
    <div class="container" style="margin-top: 16px;">
        <div class="auth-note" style="margin: 0;">
            <?= htmlspecialchars($flash['message'], ENT_QUOTES, 'UTF-8'); ?>
        </div>
    </div>
<?php endif; ?>

<section class="hero">
    <div class="hero-content">
        <h2>Infraestrutura, Automação e Inovação</h2>
        <p>Transformando ideias em soluções escaláveis na nuvem</p>
    </div>
</section>

<section id="sobre" class="sobre">
    <div class="container">
        <h2 class="section-title">Sobre: AWS Cloud e DevOps</h2>

        <div class="sobre-content">

            <div class="sobre-card">
                <h3>O que é Cloud Computing (AWS)?</h3>
                <p>
                    Amazon Web Services (AWS) é uma plataforma de computação em nuvem que oferece serviços sob demanda,
                    como armazenamento, processamento e bancos de dados, permitindo escalabilidade e redução de custos.
                </p>
            </div>

            <div class="sobre-card">
                <h3>O que é DevOps?</h3>
                <p>
                    DevOps integra desenvolvimento e operações com foco em automação, CI/CD e monitoramento,
                    aumentando a velocidade e qualidade das entregas.
                </p>
            </div>

            <div class="sobre-card">
                <h3>A Sinergia AWS + DevOps</h3>
                <p>
                    AWS fornece a base ideal para DevOps, permitindo automação de deploy, escalabilidade,
                    observabilidade e resiliência de aplicações modernas.
                </p>
            </div>

        </div>
    </div>
</section>

<footer id="contato" class="footer">
    <div class="container">
        <h2>Entre em Contato</h2>

        <p>Email: <?= htmlspecialchars('luizaugusouza@gmail.com'); ?></p>
        <p>LinkedIn: <a href="https://www.linkedin.com/in/luiz-inhesta-341b4b311/" target="_blank">Perfil</a></p>
        <p>GitHub: <a href="https://github.com/luizinhesta" target="_blank">Repositório</a></p>

        <p class="copyright">
            © 2026 DevOps & Cloud Projects. Todos os direitos reservados Luiz Inhesta.
        </p>
    </div>
</footer>

<script src="script-devops.js"></script>

</body>
</html>