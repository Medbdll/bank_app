<?php
require_once __DIR__ . '/vendor/autoload.php';
use Src\core\Database;
use Src\repos\clientRepository;
use Src\repos\CompteRepository;
use Src\view\Client;
use Src\view\compte;
use Src\view\CompteCourant;
use Src\view\CompteEpargne;

$client1 = new Client( null,"moha", "moha.4doe@example.com","A12345678", "123-456-7890");
$client2 = new Client( null,"khalid", "khalid.4doe@example.com","A12345678", "123-456-7890");
$compte2 = new CompteEpargne(null, "Epargne", 5000, 1, 500);
$compte3 = new CompteCourant(null, "Courant", 2000, 1, 300);
$dbInstance = Database::getInstance()->getConnection();
$clientRepo = new clientRepository($dbInstance);
// $createdClient = $clientRepo->createClient($client1);
// $lastClient = $createdClient->getId();
// $updateClient = $clientRepo->updateClient(4, $client2);
// $deletedClient = $clientRepo->deleteClient(2);
// $allClients = $clientRepo->selectAllClients();
// print_r($allClients);
$compteRepo = new CompteRepository($dbInstance);
// $createdCompte = $compteRepo->createCompte($compte3);
// $createdCompte = $compteRepo->createCompte($compte2);
$allComptes = $compteRepo->deleteCompte(11);
// print_r($allComptes);
