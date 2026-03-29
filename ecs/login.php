<?php
require_once __DIR__ . '/bootstrap.php';

$conn = db();

$login = trim($_POST['login'] ?? '');
$senha = $_POST['senha'] ?? '';

if ($login === '' || $senha === '') {
    set_flash('Preencha login e senha.', 'warning');
    header('Location: index.php');
    exit;
}

// busca usuário
$stmt = $conn->prepare("SELECT id, nome, login, senha FROM usuarios WHERE login = ? LIMIT 1");
$stmt->bind_param("s", $login);
$stmt->execute();
$result = $stmt->get_result();

$user = $result->fetch_assoc();

if (!$user || !password_verify($senha, $user['senha'])) {
    set_flash('Login ou senha inválidos.', 'danger');
    header('Location: index.php');
    exit;
}

// login OK
login_user($user);

header('Location: bemvindo.php');
exit;