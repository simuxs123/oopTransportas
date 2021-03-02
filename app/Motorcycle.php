<?php
namespace VehicleApp;
class Motorcycle extends Vehicle {
    private $kategorija;

    public function __construct($modelis, $marke)
    {
        parent::__construct($modelis, $marke);
    }
    public function setKategorija($kategorija){
        $this->kategorija=$kategorija;
    }
    public function getKategorija(){
        return $this->kategorija;
    }
    public function showMotorcycle(){
        return array_merge($this->showData(), [$this->kategorija]);
    }
}