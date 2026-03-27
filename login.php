<?php
require __DIR__ . '/bootstrap.php';

$login = trim($_POST['login'] ?? '');
$senha = $_POST['senha'] ?? '';

if ($login === '' || $senha === '') {
    set_flash('Informe login e senha.', 'warning');
    header('Location: index.php');
    exit;
}

$stmt = db()->prepare('SELECT id, nome, login, senha FROM usuarios WHERE login = :login LIMIT 1');
$stmt->execute(['login' => $login]);
$user = $stmt->fetch();

if (!$user) {
    set_flash('Usuário não encontrado.', 'warning');
    header('Location: index.php');
    exit;
}

$hash = $user['senha'];
$hashInfo = password_get_info($hash);
$valid = $hashInfo['algo'] !== 0 ? password_verify($senha, $hash) : hash_equals($hash, $senha);

if (!$valid) {
    set_flash('Senha inválida.', 'warning');
    header('Location: index.php');
    exit;
}

if ($hashInfo['algo'] === 0) {
    $newHash = password_hash($senha, PASSWORD_DEFAULT);
    $update = db()->prepare('UPDATE usuarios SET senha = :senha WHERE id = :id');
    $update->execute(['senha' => $newHash, 'id' => $user['id']]);
}

login_user($user);
header('Location: bemvindo.php');
exit;