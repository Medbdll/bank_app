<?php

namespace Src\repos;

use PDO;
use Src\view\compte;
use Src\view\CompteCourant;
use src\view\CompteEpargne;

class CompteRepository
{
    private $db;
    function __construct(PDO $db)
    {
        $this->db = $db;
    }
    public function createCompte(Compte $compte)
    {
        $stmt = $this->db->prepare("INSERT INTO comptes (type, solde, client_id,decouvert_autorise,solde_minimum) VALUES (?, ?, ?, ?, ?)");
        $stmt->execute([
            $compte->getType(),
            $compte->getSolde(),
            $compte->getClientId(),
            $compte instanceof CompteCourant ? $compte->getDecouvertAutorise() : null,
            $compte instanceof CompteEpargne ? $compte->getsolde_minimum() : null
        ]);
        $compte->setId($this->db->lastInsertId());
        return $compte;
    }
    public function allComptesClient($id)
    {
        $stmt = $this->db->prepare("select * from comptes where client_id=?");
        $stmt->execute([$id]);
        return $stmt->fetchAll(PDO::FETCH_CLASS);
    }
    public function allComptes()
    {
        $stmt = $this->db->prepare("select * from comptes");
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_CLASS);
    }
    public function deleteCompte($id)
    {
        $stmt = $this->db->prepare("SELECT solde FROM comptes WHERE id=?");
        $stmt->execute([$id]);
        $compte = $stmt->fetch(PDO::FETCH_ASSOC);
        if ($compte && $compte['solde'] > 0) {
            return print_r("Impossible de supprimer un compte avec un solde positif.\n");
        } else {
            $stmt = $this->db->prepare("DELETE FROM comptes WHERE id=?");
            $stmt->execute([$id]);
            return print_r("Compte with ID $id deleted successfully.\n");
        }
    }
}
