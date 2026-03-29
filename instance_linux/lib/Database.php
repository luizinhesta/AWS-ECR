<?php
class Database
{
    private static ?PDO $conn = null;

    public static function getConnection(array $config): PDO
    {
        if (self::$conn instanceof PDO) {
            return self::$conn;
        }

        $dsn = sprintf(
            'mysql:host=%s;port=%s;dbname=%s;charset=%s',
            $config['host'],
            $config['port'],
            $config['name'],
            $config['charset']
        );

        $options = [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        ];

        self::$conn = new PDO($dsn, $config['user'], $config['pass'], $options);
        return self::$conn;
    }
}