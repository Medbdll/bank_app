<?php

namespace Src\repos;

use Src\view\Client;
use PDO;

class clientRepository
{
    private PDO $conn;

    public function __construct(PDO $conn)
    {
        $this->conn = $conn;
    }
    public function createClient(Client $client)
    {
        $stmt = $this->conn->prepare("INSERT INTO clients (nom, email, cin, telephone) VALUES (?, ?, ?, ?)");
        $stmt->execute([
            $client->getNom(),
            $client->getEmail(),
            $client->getCin(),
            $client->getTelephone()
        ]);
        $client->setId($this->conn->lastInsertId());
        return $client;
    }

    public function selectClient($id)
    {
        $stmt = $this->conn->prepare("SELECT * FROM clients WHERE id=?");
        $stmt->execute([$id]);
        $data = $stmt->fetch(PDO::FETCH_ASSOC);
        return $data;
    }
    public function selectAllClients()
    {
        $stmt = $this->conn->prepare("SELECT * FROM clients");
        $stmt->execute();
        $data = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $data;
    }
    public function updateClient($id, Client $client)
    {
        $stmt = $this->conn->prepare("UPDATE clients SET nom=?, email=?, cin=?, telephone=? WHERE id=?");
        $stmt->execute([
            $client->getNom(),
            $client->getEmail(),
            $client->getCin(),
            $client->getTelephone(),
            $id
        ]);
        return $client;
    }
    public function deleteClient($id)
    {
        $stmt = $this->conn->prepare("DELETE FROM clients WHERE id=?");
        $stmt->execute([$id]);
        return print_r("Client with ID $id deleted successfully.\n");
    }
}
