<?php
require_once __DIR__ . '/bootstrap.php';

$conn = db();

$nome = trim($_POST['nome'] ?? '');
$login = trim($_POST['login'] ?? '');
$senha = $_POST['senha'] ?? '';

if ($nome === '' || $login === '' || $senha === '') {
    set_flash('Preencha todos os campos.', 'warning');
    header('Location: cadastro.php');
    exit;
}

// verifica se já existe
$stmt = $conn->prepare("SELECT id FROM usuarios WHERE login = ? LIMIT 1");
$stmt->bind_param("s", $login);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    set_flash('Login já existe. Escolha outro.', 'warning');
    header('Location: cadastro.php');
    exit;
}

// cria usuário
$hash = password_hash($senha, PASSWORD_DEFAULT);

$stmt = $conn->prepare("INSERT INTO usuarios (nome, login, senha) VALUES (?, ?, ?)");
$stmt->bind_param("sss", $nome, $login, $hash);
$stmt->execute();

$user = [
    'id' => $conn->insert_id,
    'nome' => $nome,
    'login' => $login,
];

login_user($user);

header('Location: bemvindo.php');
exit;