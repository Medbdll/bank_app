<?php
namespace Src\view;
class CompteCourant extends compte{
    private $decouvertAutorise;

    public function __construct($id,$type, $solde, $clientId, $decouvertAutorise){
        parent::__construct($id, $type, $solde, $clientId);
        $this->decouvertAutorise = $decouvertAutorise;
    }

    public function getDecouvertAutorise(){
        return $this->decouvertAutorise;
    }

    public function setDecouvertAutorise($decouvertAutorise){
        $this->decouvertAutorise = $decouvertAutorise;
    }
}