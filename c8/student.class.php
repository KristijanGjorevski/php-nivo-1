<?php

class Student {

    private $id;
    public $name;
    public $lastname;
    public $age;
    public $email;
    public static $no_of_initialisations = 0;

    function __construct($n, $l, $a, $e){
        $this->name = $n;
        $this->lastname = $l;
        $this->age = $a;
        $this->email = $e;
        
        self::$no_of_initialisations++;
    }

    public function printStudentName(){
        echo "$this->name, $this->lastname, $this->email";
    }

    public function setStudentId($id){
        $this->id =  $id;
    }

    public function getStudentId(){
        echo $this->id;
    }

    public static function pre($arr){
        echo '<pre>';
        var_dump($arr);
        echo '</pre>';
    }

    public function __destruct(){
    }
}

$andrej = new Student('Andrej','Nikoloski',44,'a.n@gmail.com');
$andrej1 = new Student('Andrej','Nikoloski',44,'a.n@gmail.com');
$andrej2 = new Student('Andrej','Nikoloski',44,'a.n@gmail.com');
$andrej3 = new Student('Andrej','Nikoloski',44,'a.n@gmail.com');
$andrej4 = new Student('Andrej','Nikoloski',44,'a.n@gmail.com');

// $blagojce = new Student; // instanciranje na objekt od klasa;
// echo $name; // Ova ne e pravilen nacin na koristenje na property vo klasa i dava error
// echo $andrej->name; // Ova e pravilen nacin na akcesiranje na property vo klasa

// $blagojce->name = 'Blagojce';
// $blagojce->lastname = 'Dojanovski';
// $blagojce->age = 45;
// $blagojce->email = 'b.d@yahoo.com';
// echo $blagojce->name . '<br>';

// $blagojce->printStudentName(); // ovoj e nacinot na koj sto se povikuva metod vo klasa


// echo $andrej->id . 'Andrej<br>'; // bidejki e private, ovoj nacin ne raboti za tie tipovi na property, se koristi metoda
// echo $blagojce->getStudentId();
// $blagojce->setStudentId(2);


// echo Student::pre($blagojce);

echo Student::$no_of_initialisations; // ova e staticno povikuvanje na properti od samata klasa, ne od objekt!!


// echo '<pre>';
// var_dump($andrej);
// echo '</pre>';


?>