<?php

class Vehicule {
    private $name = "Véhicule";
    protected $roues;

    public function __construct($roues){
        $this->roues = $roues;
    }

    public function nombreDeRoues(){
        echo "Ce ".$this->name." a ".$this->roues." roues";
    }
}

class Avion extends Vehicule{
    private $name = "Avion";
    private $newroues = 4;

    public function __construct($roues){
        parent::__construct($roues);
    }

    public function nombreDeRoues(){
        
        echo "Cet ".$this->name." a ".$this->newroues." roues";
        
    }
}

$avion = new Avion(2);
$avion->nombreDeRoues();