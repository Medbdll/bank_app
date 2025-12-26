<?php
namespace Src\view;
class CompteEpargne extends compte{
    private $solde_minimum;

    public function __construct($id,$type, $solde, $clientId, $solde_minimum){
        parent::__construct($id, $type, $solde, $clientId);
        $this->solde_minimum = $solde_minimum;
    }

    public function getsolde_minimum(){
        return $this->solde_minimum;
    }

    public function setsolde_minimum($solde_minimum){
        $this->solde_minimum = $solde_minimum;
    }
}