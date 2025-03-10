<?php

require_once 'config.php';

class Database
{
    public function getConnection(): PDO
    {

        $dsn = "mysql:host=" . DB_HOST  . ";dbname=" . DB_NAME;
        $pdo = new PDO($dsn, DB_USER, DB_PASS);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
        $pdo->setAttribute(PDO::ATTR_STRINGIFY_FETCHES, false);

        return $pdo;
    }
}
