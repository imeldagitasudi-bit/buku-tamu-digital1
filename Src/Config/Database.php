<?php
namespace Src\Config;

use PDO;
use PDOException;

class Database {
    public static function conn(array $cfg): PDO {
        try {
            $pdo = new PDO(
                $cfg['db']['dsn'],
                $cfg['db']['user'],
                $cfg['db']['pass'],
                [
                    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
                ]
            );
            return $pdo;
        } catch (PDOException $e) {
            die('Database error: ' . $e->getMessage());
        }
    }
}
