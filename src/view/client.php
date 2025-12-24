<?php

namespace Src\view;

class client
{
    private $id;
    private $nom;
    private $email;
    private $cin;
    private $telephone;
    public function __construct($id, $nom, $email, $cin, $telephone)
    {
        $this->id = $id;
        $this->nom = $nom;
        $this->email = $email;
        $this->cin = $cin;
        $this->telephone = $telephone;
    }
    public function getId()
    {
        return $this->id;
    }
    public function getNom()
    {
        return $this->nom;
    }
    public function getEmail()
    {
        return $this->email;
    }
    public function getCin()
    {
        return $this->cin;
    }
    public function getTelephone()
    {
        return $this->telephone;
    }
}

