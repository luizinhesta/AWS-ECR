<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

$conn = new mysqli(
    "database-1.cibke068umui.us-east-1.rds.amazonaws.com",
    "admin",
    "Teste1234",
    "db_website_php"
);

if ($conn->connect_error) {
    die("Erro: " . $conn->connect_error);
}

echo "ðŸ”¥ Conectado com sucesso no RDS!";
?>