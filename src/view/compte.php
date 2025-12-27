<?php
namespace Src\view;
 class compte{
    protected $id;
    protected $type;
    protected $solde;
    protected $clientId;

    public function __construct($id, $type, $solde, $clientId){
        $this->id = $id;
        $this->type = $type;
        $this->solde = $solde;
        $this->clientId = $clientId;
    }
    public function getId(){
        return $this->id;
    }
    public function getType(){
        return $this->type;
    }
    public function getSolde(){
        return $this->solde;
    }
    public function getClientId(){
        return $this->clientId;
    }
    public function setId($id){
        $this->id = $id;
    }
    public function setType($type){
        $this->type = $type;
    }
    public function setSolde($solde){
        $this->solde = $solde;
    }
}
