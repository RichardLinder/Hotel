<?php

class Chambre
{
    private bool  $statut;
    private bool  $wifi;
    private Hotel $hotel;
    private float $prix;
    private array $reservations;




    public function __construct(Hotel $hotel , $prix, bool $wifi = false,bool $statut = false)
    {
        $this->prix = $prix;
        $this->hotel = $hotel;
        $this->wifi = $wifi;
        $this->statut = $statut;

        $this->reservations=[];



        $this->hotel->addChambre($this);

    }
//______________________________________________ methode


public function addReservations(Reservation $reservation)
{
   $this->reservations[]=  $reservation;
}

}