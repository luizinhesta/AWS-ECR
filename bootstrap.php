<?php
function load_env(string $path): void
{
    if (!is_file($path)) {
        return;
    }

    $lines = file($path, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
    foreach ($lines as $line) {
        $line = trim($line);
        if ($line === '' || str_starts_with($line, '#')) {
            continue;
        }

        $parts = explode('=', $line, 2);
        if (count($parts) !== 2) {
            continue;
        }

        $key = trim($parts[0]);
        $value = trim($parts[1]);

        if ($key === '') {
            continue;
        }

        if ((str_starts_with($value, '"') && str_ends_with($value, '"')) || (str_starts_with($value, "'") && str_ends_with($value, "'"))) {
            $value = substr($value, 1, -1);
        }

        putenv($key . '=' . $value);
        $_ENV[$key] = $value;
    }
}

load_env(__DIR__ . '/.env');

$app = require __DIR__ . '/config/app.php';
$dbConfig = require __DIR__ . '/config/database.php';

require_once __DIR__ . '/lib/Database.php';
require_once __DIR__ . '/lib/Auth.php';

session_name($app['session_name']);
session_start();

function db(): PDO
{
    global $dbConfig;
    return Database::getConnection($dbConfig);
}