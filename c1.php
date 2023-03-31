<?php
/*
// obicen primer

$profesor = 'Kristijan'.'Gjorevski';
$student = 'Goran';
$godini = 30;

// promenliva so data tip string
$data_tip = '';

// promenliva so data tip boolean
$false = false;
$true = true;

// promenliva so data tip null
$data_tip = null;

// promenliva so data tip integer
$data_tip = 30;

// promenliva so data tip float
// $data_tip = "30.24";
$data_tip2 = '10';
// echo $data_tip + $data_tip2;
// Aritmeticki Operacii
// echo 2 + 2;
// echo 2 - 2;
// echo 2 * 2;
// echo 2 / 2;
// echo 2 % 2;
// echo 2 ** 2;
// echo $data_tip + $data_tip2;

//echo $student + $godini;

// echo - predefinirana funkcija na php za printanje promenlivi
// echo $student;

// array
$array_one = array(30,'Alojz','Goran',$student,'Alojz','Goran',$student,'Alojz','Goran',$student,'Alojz','Goran','10');
$array_two = [30,'Alojz','Goran',$student,'Alojz','Goran',$student,'Alojz','Goran',$student,'Alojz','Goran'];

$index_array = ['Kristijan','Alojz','Goran',30,true,null,];

// Indeksiran array
$person = ['Kristijan','Gjorevski',30,'kikogjorevski@gmail.com'];
// echo $person[3]; // 'Kristijan'

// Associjativen array
$associjativen_array = [
    'ime' => 'Kristijan',
    'prezime' => 'Gjorevski',
    'godini' => 30
];

// echo $associjativen_array['godini'];

// Matrica - Multidimenzionalen array

$multi_dimenzionalen_array = [
    $array_two,
    $associjativen_array
];

// echo $multi_dimenzionalen_array[1]['godini'];

// echo '<pre>';
// print_r($multi_dimenzionalen_array);
// echo '</pre>';

print_r($array_one);

echo '<pre>';
var_dump($array_one);
echo '</pre>';

// USLOVI - uslovot IF

if (2+2 == 4) {
    echo 'Navistina';
}

if (2+2 != 4) {
    echo 'Navistina';
}

if(false){
    echo 'Ova e false';
}

if(true){
    echo 'Epa ova ne e false';
}

if($data_tip === '30'){
    echo $data_tip + 10 . 'denari';
}

if(($true !== $false) || ($false === $true)){
    echo 'Super <br>';
}


// USLOVI - uslovot IF...Else
$sobiranje = 2+2;
if($sobiranje == 4){
    echo 'Profesor e tocno';
} 
else{
    echo 'Profesor ne e tocno';
}

// Ternary Operator
// Isto so toa pogore
$rezultat =  $sobiranje == 4 ? 'Vrednosta e tocna' : 'Vrednosta e ne tocna';
// echo $rezultat;


// USLOVI - uslovot Else...If
$action = 'Edit';

if($action === 'Edit'){
    echo 'You have clicked on action Edit';
    echo 'Nema da raboti';

}elseif($action === "Open"){
    echo 'You have clicked on action Open';
}elseif($action === "Delete"){
    echo 'You have clicked on action Delete';
}else {
    echo 'You have clicked UNKNOWN action !!';
}

// isto
//Swtich - Kontrolna Struktura 
switch ($action) {
    case 'Edit':
        echo 'You have clicked on action Edit';
        break;
    case 'Open':
        echo 'You have clicked on action Open';
        break;
    case 'Delete':
        echo 'You have clicked on action Delete';
        break;
    default:
        echo 'You have clicked UNKNOWN action !!';
        break;
}

$broj = 7;

if($broj % 2 == 0){
    echo  $broj.': Ova e Paren Broj';
}else {
    echo "$broj: Ovoj broj e ne paren";
}


if( ! ($broj > 7)){
    echo 'Tocno';
}

if($broj < 7 || $broj > 7){
    echo 'Tocno';
}

if($broj < 7 && $broj > 7){
    echo 'Tocno';
}

//pomalo ili ednakvo / pogolemo ili ednakvo
if($broj <= 7 || $broj >= 7){
    echo 'Tocno';
}

if($broj < 7 XOR $broj > 7){
    echo 'Tocno';
}


if(1 == 1 XOR 2 == 3 ){
    echo "Tuka nema logika";
}

if(1 == 1 OR 2 == 2 ){
    echo "Tuka ima logika";
}

*/