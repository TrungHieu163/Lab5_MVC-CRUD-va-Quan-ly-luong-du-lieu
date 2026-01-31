<?php
namespace App\Models;

use PDO;
use PDOException;

class BaseModel {
    protected $pdo;

    public function __construct() {
        $host = $_ENV['DB_HOST'];
        $dbname = $_ENV['DB_NAME'];
        $username = $_ENV['DB_USER'];
        $password = $_ENV['DB_PASS'];

        try {
            $this->pdo = new PDO(
                "mysql:host=$host;dbname=$dbname;charset=utf8",
                $username,
                $password
            );

            $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        } catch (PDOException $e) {
            die("Hệ thống đang bảo trì, vui lòng quay lại sau");
        }
    }
}
