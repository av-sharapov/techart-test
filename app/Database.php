<?php

namespace App;

use PDO;

final class Database
{
    public static function connect()
    {
        $pdo = new \PDO(sprintf("%s:host=%s;dbname=%s",
            $_ENV['DB_CONNECTION'],
            $_ENV['DB_HOST'],
            $_ENV['DB_DATABASE']
        ), $_ENV['DB_USERNAME'], $_ENV['DB_PASSWORD']);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $pdo;
    }
}