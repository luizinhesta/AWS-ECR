<?php
require __DIR__ . '/bootstrap.php';

try {
    $pdo = db();
    echo "Conectado ✅<br>";
    echo "Status: " . $pdo->getAttribute(PDO::ATTR_CONNECTION_STATUS) . "<br>";
    $res = $pdo->query('SELECT COUNT(*) AS c FROM usuarios')->fetch();
    echo "Usuarios: " . $res['c'] . "<br>";
} catch (PDOException $e) {
    echo "Erro de BD: " . $e->getMessage();
}