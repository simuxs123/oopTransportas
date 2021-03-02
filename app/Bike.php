<?php
namespace VehicleApp;
class Bike extends Vehicle {
    private $tipas;
    public function __construct($modelis, $marke)
    {
        parent::__construct($modelis, $marke);
    }
    public function setTipas($tipas){
        $this->tipas=$tipas;
    }
    public function getTipas(){
        return $this->tipas;
    }
    public function showBike(){
        return array_merge($this->showData(), [$this->tipas]);
    }
}