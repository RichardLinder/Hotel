<?php

class Hotel
{
    private string $nom;
    private string $adresse;
    private array $chambres;

    public function __construct($nom , $adresse)
    {
        $this->nom = $nom;
        $this->adresse = $adresse;

        $this->chambres= [];


    }

    public function addChambre( Chambre $chambre)
    {
        $this->chambres[]= $chambre;
    }

    public function __toString()
    {
        return $this->nom ;
    }

}
