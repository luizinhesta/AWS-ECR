<?php
require __DIR__ . '/bootstrap.php';

$nome = trim($_POST['nome'] ?? '');
$login = trim($_POST['login'] ?? '');
$senha = $_POST['senha'] ?? '';

if ($nome === '' || $login === '' || $senha === '') {
    set_flash('Preencha todos os campos.', 'warning');
    header('Location: cadastro.php');
    exit;
}

$stmt = db()->prepare('SELECT id FROM usuarios WHERE login = :login LIMIT 1');
$stmt->execute(['login' => $login]);
if ($stmt->fetch()) {
    set_flash('Login já existe. Escolha outro.', 'warning');
    header('Location: cadastro.php');
    exit;
}

$hash = password_hash($senha, PASSWORD_DEFAULT);
$insert = db()->prepare('INSERT INTO usuarios (nome, login, senha) VALUES (:nome, :login, :senha)');
$insert->execute([
    'nome' => $nome,
    'login' => $login,
    'senha' => $hash,
]);

$user = [
    'id' => (int) db()->lastInsertId(),
    'nome' => $nome,
    'login' => $login,
];
login_user($user);
header('Location: bemvindo.php');
exit;