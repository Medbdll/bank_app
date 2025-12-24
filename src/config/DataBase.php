<?php
namespace Src\config;

use PDO;
use PDOException;
class Database
{
    private $host = "localhost";
    private $username = "root";
    private $password = "";
    private $db = "bank_app";

    public function connect()
    {
        try {   
        $conn = new PDO("mysql:host=$this->host;dbname=$this->db",$this->username,$this->password);
        echo "Connected successfully";
        return $conn; 
        } catch (PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
        }
    }
}
