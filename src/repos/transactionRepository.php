<?php
namespace Src\repos;
use PDO;
use Src\view\transaction;

class TransactionRepository{
    private $pdo;
    
    public function __construct(PDO $pdo){
        $this->pdo = $pdo;
    }
    public function create(Transaction $transaction){

    }
}