<?php
echo '<h1>Ciklusi<h1>';


$serii = [
     '2021' =>'Game of Thrones', //0
     '2022' =>'Sherlock Holmes',// 1
     '2023' =>'Picky Blinders',
     '2004' =>'Superman',
     '2005' =>'Star Trek',
     '2007' =>'Itchy Scratches'
];

$serii[100] = 'Friends'; // 7
$serii[99] = 'Rocky 2';
$serii[] = 'Rocky 3';
array_push($serii,'Rocky 4');

//count() // Vrakja brojot od elementi vo niza
//array_push() // Dodava eden element od krajot na nizata
//array_pop() // Go vadi nadvor od nizata posledniot element i istiot go vrakja nazad 
//array_keys() //
//array_shift()
//array_unshift()
//array_merge()
//array_slice()
//array_splice()


// $shift = array_shift($serii);
// $shift = array_unshift($serii,'Friends');
// echo $shift;
// asort($serii);
// print_r(array_keys($serii));
// print_r(max(array_keys($serii)));

// echo '<pre>';
// print_r($serii);
// echo '</pre>';
// var_dump($serii);

// echo "Poznati serii se : $serii[0], $serii[1],$serii[2], $serii[3],$serii[4], $serii[5] <br><br>";
// echo count($serii).'<br>';

for($i=0 ;$i <= max(array_keys($serii)); $i++){
    if(!empty($serii[$i])){
        echo $serii[$i]. '<br>';
    }
}
        
$elementi = [12,32,15,55,23,24];

foreach($elementi as $broj) {
    echo  $broj.'<br>';
}

foreach($serii as $key => $serija) {
    echo  'serija '.$serija."e proizvedena na $key <br>";
}


$elem=[1,2,3,4,5,6];
$rezultat=0;
foreach($elem as $broj){
    $rezultat+=$broj;
    // $rezultat= $rezultat + $broj;
}
echo $rezultat.'<br>';

for($i = 3,$n = 0; $i<7;$i++){
    echo $i;
}

$i = 3;
while($i < 7){
    echo "Brojot e $i! <br>";
    $i++;
}

do{
echo $i;
$i++;
}while($i<7);


/*

   $broevi = [
        [1, 2, 3, 2],
        [4, 5, 6, 2],
        [7, 8, 9, 2]
   ]; 
   1. Iskoristite go FOR ciklusot sto go ucevme minatiot cas, so cel da go dobiete zbirot od ovaa multi-dimenzionalna niza $broevi.


   $filmovi = ["the shawshank redemption", "the godfather", "the dark knight", "the lord of the rings"];
   $godini = [1994, 1972, 2008, 2001];
   2. Napravete foreach kadesto ke gi kombinirate dvete nizi, so toa sto nizata za godini ke stanat klucevi za nizata od filmovi,
      pritoa sto ke ja prikazete taa niza so toa sto ke napravite site zborovi vo $filmovi nizata da imaat golemi bukvi.
      primer: [1994] => "The Shawshank Redemtion"


    email: kikogjorevski@gmail.com
*/

// $broevi = [
//     'arhiva' => [1, 2, 3, 2],
//     'lager' => [4, 5, 6, 2],
//     'magacin' => [7, 8, 9, 2],
//     'zaliha' => [1, 2, 3, 2]
// ];

// $filmovi = ["the shawshank redemption", "the godfather", "the dark knight", "the lord of the rings"];
// $godini = [1994, 1972, 2008, 2001];
// $niza = [];
// foreach($filmovi as $brojcanik => $value1){
//     // echo "$key e klucot, $value e vrednosta <br>";
//     $niza[$godini[$brojcanik]] = ucwords($value1);
// }
// echo '<pre>';
// print_r($niza);
// echo '</pre>';
// for($i=0;$i<count($broevi);$i++){
//     $broevi[$i];
// }
//array_combine()
// $sum = 0;
// foreach($broevi a $element){
//     foreach($element as $element2){
//         $sum += $element2;
//     }
// }
