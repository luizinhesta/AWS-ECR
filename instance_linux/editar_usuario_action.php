<?php
require __DIR__ . '/bootstrap.php';
require_login();

$user = current_user();
$nome = trim($_POST['nome'] ?? '');
$login = trim($_POST['login'] ?? '');
$senha = $_POST['senha'] ?? '';

if ($nome === '' || $login === '') {
    set_flash('Nome e login são obrigatórios.', 'warning');
    header('Location: editar-usuario.php');
    exit;
}

if ($login !== $user['login']) {
    $stmt = db()->prepare('SELECT id FROM usuarios WHERE login = :login LIMIT 1');
    $stmt->execute(['login' => $login]);
    if ($stmt->fetch()) {
        set_flash('Login já existe. Escolha outro.', 'warning');
        header('Location: editar-usuario.php');
        exit;
    }
}

if ($senha !== '') {
    $hash = password_hash($senha, PASSWORD_DEFAULT);
    $update = db()->prepare('UPDATE usuarios SET nome = :nome, login = :login, senha = :senha WHERE id = :id');
    $update->execute([
        'nome' => $nome,
        'login' => $login,
        'senha' => $hash,
        'id' => $user['id'],
    ]);
} else {
    $update = db()->prepare('UPDATE usuarios SET nome = :nome, login = :login WHERE id = :id');
    $update->execute([
        'nome' => $nome,
        'login' => $login,
        'id' => $user['id'],
    ]);
}

login_user([
    'id' => $user['id'],
    'nome' => $nome,
    'login' => $login,
]);

set_flash('Dados atualizados com sucesso.', 'success');
header('Location: editar-usuario.php');
exit;