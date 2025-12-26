<?php
namespace Src\core;
use PDO;
use PDOException;

require_once __DIR__ . '/../config/database.php';

class Database
{
    private static $instance = null;
    private PDO $conn;


    private function __construct()
    {
        try {   
            $this->conn = new PDO("mysql:host=" . HOST . ";dbname=" . DB, USERNAME, PASSWORD);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
        }
    }
    public static function getInstance()
    {
        if (self::$instance === null) {
            self::$instance = new Database();
        }
        return self::$instance;
    }
        public function getConnection()
        {
            return $this->conn;
        }   
}
