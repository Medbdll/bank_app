<?php
namespace Src\view;
class transaction {
    private $id;
    private $compteId;
    private $type;
    private $montant;
    private $date_operation;

    public function __construct($id, $compteId, $montant, $type, $date_operation) {
        $this->id = $id;
        $this->compteId = $compteId;
        $this->montant = $montant;
        $this->type = $type;
        $this->date_operation = $date_operation;
    }

    public function getId() {
        return $this->id;
    }

    public function getCompteId() {
        return $this->compteId;
    }

    public function getMontant() {
        return $this->montant;
    }

    public function getType() {
        return $this->type;
    }

    public function getDate_operation() {
        return $this->date_operation;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function setCompteId($compteId) {
        $this->compteId = $compteId;
    }

    public function setMontant($montant) {
        $this->montant = $montant;
    }

    public function setType($type) {
        $this->type = $type;
    }

    public function setDate_operation($date_operation) {
        $this->date_operation = $date_operation;
    }
}