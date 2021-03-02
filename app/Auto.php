<?php
namespace VehicleApp;
class Auto extends  Vehicle {
    private $kiekVaromu;
    public function __construct($modelis, $marke)
    {
        parent::__construct($modelis, $marke);
    }
    public function setKiekVaromu($kiekVaromu){
        $this->kiekVaromu=$kiekVaromu;
    }
    public function getKiekVaromu(){
        return $this->kiekVaromu;
    }
    public function showAuto(){
        return array_merge($this->showData(), [$this->kiekVaromu]);
    }
}
