<?php

class Voiture
{
    public $couleur;
    public $masse;
    public $marque;
    public $puissance;
    public $vitesse;

    public function __construct($couleur, $marque, $masse, $puissance)
    {
        $this -> couleur = $couleur;
        $this -> marque = $marque;
        $this -> masse = $masse;
        $this -> puissance = $puissance;
    }

    public function demarrer()
    {
        $message = "La voiture démarre";
        return $message;
    }
}