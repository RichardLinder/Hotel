<?php
class Client
{
    private string $prenom;
    private string $nom;
    private array $reservations;



    public function __construct( string $prenom, string $nom)
    {
        $this->prenom = $prenom;
        $this->nom = $nom;


    }



}
