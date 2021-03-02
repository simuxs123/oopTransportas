<?php
namespace VehicleApp;
class Vehicle{
    protected $modelis;
    protected $marke;
    protected $kaina;
    protected $svoris;
    protected $yraVariklis;
    protected $galia;
    protected $maxGreitis;
    protected $aprasymas;
    protected $kiekZmoniu;
    public function __construct($modelis,$marke)
    {
        $this->modelis=$modelis;
        $this->marke=$marke;
    }
    public function setModelis($modelis){
        $this->modelis=$modelis;
    }
    public function setKaina($kaina){
        $this->kaina=$kaina;
    }
    public function setMarke($marke){
        $this->marke=$marke;
    }
    public function setSvoris($svoris){
        $this->svoris=$svoris;
    }
    public function setYraVariklis($yraVariklis){
        $this->yraVariklis=$yraVariklis;
    }
    public function setGalia($galia){
        $this->galia=$galia;
    }
    public function setMaxGreitis($maxGreitis){
        $this->maxGreitis=$maxGreitis;
    }
    public function setAprasymas($aprasymas){
        $this->aprasymas=$aprasymas;
    }
    public function setKiekZmoniu($kiekZmoniu){
        $this->kiekZmoniu=$kiekZmoniu;
    }
    public function getModelis(){
        return $this->modelis;
    }
    public function getMarke(){
        return $this->marke;
    }
    public function getKaina(){
        return $this->kaina;
    }
    public function getSvoris(){
        return $this->svoris;
    }
    public function getYraVariklis(){
        return $this->yraVariklis;
    }
    public function getGalia(){
        return $this->galia;
    }
    public function getMaxGreitis(){
        return $this->maxGreitis;
    }
    public function getAprasymas(){
        return $this->aprasymas;
    }
    public function getKiekZmoniu(){
        return $this->kiekZmoniu;
    }
    public function showData(){
        return [$this->modelis,$this->marke,$this->kaina,$this->svoris,$this->yraVariklis,$this->galia,
            $this->maxGreitis,$this->aprasymas,$this->kiekZmoniu];
    }
}
