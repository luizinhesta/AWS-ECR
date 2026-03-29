<?php
require __DIR__ . '/bootstrap.php';
require_login();
$user = current_user();
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bem-vindo - Projetos DevOps & Cloud</title>
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
                        <li><a href="#galeria">Projetos</a></li>
                        <li><a href="index.php#contato">Contato</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </header>

    <main class="auth-page auth-page-compact">
        <div class="auth-card">
            <h2 class="auth-title">Seja bem-vindo</h2>
            <p class="auth-subtitle">Você entrou no ambiente interno do lab.</p>

            <p class="auth-note">
                A partir daqui vamos integrar o API Gateway, Lambda e RDS para autenticar e buscar usuários.
            </p>
        </div>
    </main>

    <!-- GALERIA DE PROJETOS (APENAS LOGADO) -->
    <section id="galeria" class="galeria galeria-compact">
        <div class="container">
            <h2 class="section-title">Galeria de Projetos</h2>
            
            <!-- Filtros -->
            <div class="filtros">
                <button class="filtro-btn ativo" data-filtro="todos">Todos</button>
                <button class="filtro-btn" data-filtro="aws">AWS</button>
                <button class="filtro-btn" data-filtro="devops">DevOps</button>
                <button class="filtro-btn" data-filtro="infra">Infraestrutura</button>
            </div>

            <!-- Grid de Projetos -->
            <div class="grid-fotos">

                <!-- Projeto 1 -->
                <div class="foto-item" data-categoria="devops">
                    <img src="images/imagem(1).jpg" alt="Docker Swarm para AWS">
                    <div class="foto-overlay">
                        <h3>Docker Swarm para AWS</h3>
                        <p>Cluster Docker Swarm implantado na AWS com balanceamento de carga, alta disponibilidade e escalabilidade automática.</p>
                    </div>
                </div>

                <!-- Projeto 2 -->
                <div class="foto-item" data-categoria="aws">
                    <img src="images/imagem(2).jpg" alt="AWS Organizations na Prática">
                    <div class="foto-overlay">
                        <h3>AWS Organizations na Prática</h3>
                        <p>Estrutura multi-contas com governança, controle de acesso, billing centralizado e políticas SCP aplicadas.</p>
                    </div>
                </div>

                <!-- Projeto 3 -->
                <div class="foto-item" data-categoria="aws">
                    <img src="images/imagem(3).jpg" alt="Amazon VPC">
                    <div class="foto-overlay">
                        <h3>Amazon VPC</h3>
                        <p>Arquitetura de rede segura com sub-redes públicas e privadas, roteamento, NAT e controle via Security Groups.</p>
                    </div>
                </div>

                <!-- Projeto 4 -->
                <div class="foto-item" data-categoria="devops">
                    <img src="images/imagem(4).jpg" alt="CI/CD com Jenkins e Docker">
                    <div class="foto-overlay">
                        <h3>CI/CD com Jenkins e Docker</h3>
                        <p>Pipeline automatizado de integração contínua e entrega contínua com Jenkins, Docker e Git.</p>
                    </div>
                </div>

                <!-- Projeto 5 -->
                <div class="foto-item" data-categoria="aws">
                    <img src="images/imagem(5).jpg" alt="Transit Gateway na Prática">
                    <div class="foto-overlay">
                        <h3>Transit Gateway na Prática</h3>
                        <p>Integração de múltiplas VPCs e VPNs centralizadas com roteamento avançado e conectividade híbrida.</p>
                    </div>
                </div>

                <!-- Projeto 6 -->
                <div class="foto-item" data-categoria="devops">
                    <img src="images/imagem(8).jpg" alt="VPS para AWS">
                    <div class="foto-overlay">
                        <h3>Código de Status com o ZABBIX</h3>
                        <p>Monitoramento e alerta de status de servidores e aplicações com o ZABBIX.</p>
                    </div>
                </div>

                <!-- Projeto 7 -->
                <div class="foto-item" data-categoria="aws">
                    <img src="images/imagem(6).jpg" alt="AWS VPN Site-to-Site para PfSense">
                    <div class="foto-overlay">
                        <h3>AWS VPN Site-to-Site para PfSense</h3>
                        <p>Conexão híbrida segura entre ambiente on-premises (pfSense) e AWS utilizando VPN IPsec Site-to-Site.</p>
                    </div>
                </div>

                <!-- Projeto 8 -->
                <div class="foto-item" data-categoria="devops">
                    <img src="images/imagem(7).png" alt="Git - Repositório Local">
                    <div class="foto-overlay">
                        <h3>Git - Repositório Local</h3>
                        <p>Controle de versão distribuído com Git, gerenciamento de commits, branches e integração com GitHub.</p>
                    </div>
                </div>

                <!-- Projeto 9 -->
                <div class="foto-item" data-categoria="infra">
                    <img src="images/imagem(9).jpg" alt="Backup e DR">
                    <div class="foto-overlay">
                        <h3>AMAZON ECR</h3>
                        <p>Criando repositórios de contêineres na AWS.</p>
                    </div>
                </div>

                <!-- Projeto 10 -->
                <div class="foto-item" data-categoria="aws">
                    <img src="images/imagem(10).jpg" alt="S3 com CloudFront">
                    <div class="foto-overlay">
                        <h3>AMAZON RDS</h3>
                        <p>Configurar RDS na AWS.</p>
                    </div>
                </div>

                <!-- Projeto 11 -->
                <div class="foto-item" data-categoria="devops">
                    <img src="images/imagem(11).jpg" alt="Docker Compose Padrao">
                    <div class="foto-overlay">
                        <h3>Git Branch e Merge na AWS CodeCommit</h3>
                        <p>Padronização de serviços locais com variáveis e perfis de execução.</p>
                    </div>
                </div>

                <!-- Projeto 12 -->
                <div class="foto-item" data-categoria="infra">
                    <img src="images/imagem(12).jpg" alt="Hardening Linux">
                    <div class="foto-overlay">
                        <h3>AWS IAM na Prática ROLES VS POLICES</h3>
                        <p>Trabalhar com Roles e Polices na AWS.</p>
                    </div>
                </div>

                <!-- Projeto 13 -->
                <div class="foto-item" data-categoria="aws">
                    <img src="images/imagem(13).jpg" alt="RDS Multi-AZ">
                    <div class="foto-overlay">
                        <h3>VPS PARA AWS</h3>
                        <p>Migração e integração de servidor VPS para AWS com automação de provisionamento e infraestrutura como código.</p>
                    </div>
                </div>
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