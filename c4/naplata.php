<?php

$ceni = [
    'hamburger' => 200,
    'chicken' => 200,
    'hotdog' => 150,
    'majonez' => 20,
    'kecap' => 20,
    'senf' => 25,
    'pomfrit' => 50,
    'pavlaka' => 35,
    'pecurki' => 60,
    'delivery' => 120
];




/* 
1.  Prviot del od vezbata treba da napravite kalkulacija so cenite i spored odbranite polinja vo formata da gi prikazete site polinja
    koi se selektirani kako del od narackata zaedno so vkupniot iznos. Validacija na cenata dali e nad 400 denari, ako e togas, korisnikot
    dobiva besplatna usluga delivery do negovata adresa.

2. Site podatoci koisto se selektirani da gi zapisete vo eden fajl.


*/






function pre($arr){
    echo '<pre>';
    print_r($arr);
    echo '</pre>';
}

pre($_REQUEST);
?>