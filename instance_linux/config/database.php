<?php
return [
    'host' => getenv('DB_HOST') ?: 'database-1.cibke068umui.us-east-1.rds.amazonaws.com',
    'port' => getenv('DB_PORT') ?: 3306,
    'name' => getenv('DB_NAME') ?: 'db_website_php',
    'user' => getenv('DB_USER') ?: 'admin',
    'pass' => getenv('DB_PASS') ?: 'Teste1234',
    'charset' => 'utf8mb4',
];