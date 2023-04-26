<?php

abstract class Blago {

    public $calorii;
    protected $cena;
    public $tip;

    public function pre(){
        echo '<pre>';
        print_r($this);
        echo '</pre>';
    }

    abstract public function ispecati();
}

class Torta extends Blago {

    public function __construct($calorii,$cena,$tip){
        $this->calorii = $calorii;
        $this->cena = $cena;
        $this->tio = $tip;
    }
    public function ispecati(){
        echo 'Ova e Torta';
    }
}


 class Cars {
    public $color;
    public $date_of_creation;
    public $dimension_of_tires;
    public $speed;

    public function GetExchangeRate(){
        echo 'Car is not driving';
    }
}



class Fico extends Cars {
    public function drive(){
       echo 'Car is driving at 50km/h';
    }
}

class Mercedes extends Cars {
    public function drive(){
        echo 'Car is driving at 350km/h';

    }
}

class Mazda extends Cars {
    
}


$fico = new Fico;
$mazda = new Mazda;
$mercedes = new Mercedes;

$fico->drive();
$mazda->drive();
$mercedes->drive();

?>