<?php
require __DIR__ . '/bootstrap.php';
$flash = get_flash();
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
    <!-- Cabecalho -->
    <header class="header">
        <div class="container">
            <h1 class="logo">Projetos DevOps & Cloud - AWS</h1>
            <div class="header-right">
                <form class="login-form" action="login.php" method="post">
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

    <?php if ($flash): ?>
        <div class="container" style="margin-top: 16px;">
            <div class="auth-note" style="margin: 0;">
                <?php echo htmlspecialchars($flash['message'], ENT_QUOTES, 'UTF-8'); ?>
            </div>
        </div>
    <?php endif; ?>

    <!-- Secao Hero -->
    <section class="hero">
        <div class="hero-content">
            <h2>Infraestrutura, Automação e Inovação</h2>
            <p>Transformando ideias em soluções escaláveis na nuvem</p>
        </div>
    </section>

    <!-- SECAO SOBRE: AWS Cloud x DevOps -->
    <section id="sobre" class="sobre">
        <div class="container">
            <h2 class="section-title">Sobre: AWS Cloud e DevOps</h2>
            <div class="sobre-content">
                <div class="sobre-card">
                    <h3>O que é Cloud Computing (AWS)?</h3>
                    <p>
                        Amazon Web Services (AWS) é uma plataforma de computação em nuvem que oferece uma ampla gama
                        de serviços sob demanda, incluindo armazenamento, processamento, bancos de dados e análise de dados.
                        Permite que empresas escalem recursos de TI de forma rápida e eficiente, reduzindo custos de infraestrutura.
                    </p>
                </div>
                
                <div class="sobre-card">
                    <h3>O que é DevOps?</h3>
                    <p>
                        DevOps é uma cultura e práticas de engenharia que integra desenvolvimento (Dev) e operações (Ops).
                        Focado em automação, integração contínua, entrega contínua e monitoramento para melhorar a qualidade
                        e velocidade de entrega de software, garantindo confiabilidade e estabilidade em produção.
                    </p>
                </div>

                <div class="sobre-card">
                    <h3>A Sinergia AWS + DevOps</h3>
                    <p>
                        AWS fornece a infraestrutura escalável e flexível que DevOps necessita para implementar práticas modernas.
                        Juntos, permitem automação total do deploy, gerenciamento de recursos, monitoramento em tempo real e
                        recuperação de falhas, criando um ciclo de desenvolvimento mais ágil e confiável.
                    </p>
                </div>
            </div>
    </section>

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

    <script src="script-devops.js"></script>
</body>
</html>