<?php
namespace app\core;

use PDO;
use PDOException;

class Database
{
    public PDO $pdo;

    public function __construct(array $config) {
        $dsn = $config['dsn'] ?? '';
        $user = $config['user'] ?? '';
        $password = $config['password'] ?? '';

        try {
            $this->pdo = new PDO($dsn, $user, $password);
            $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            throw new \PDOException("Database connection failed: " . $e->getMessage(), (int)$e->getCode());
        }
    }
}
?>
