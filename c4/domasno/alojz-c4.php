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

//----------------------------------------
$limit_free   = 400;
$new_line     = "\r\n";
//----------------------------------------
$zbir_artikli = 0;
$delivery     = 0;
$text_body    = '';
//----------------------------------------

$text_body .= namesti('artikal', 'cena');
$text_body .= crti('=');

citaj($_POST);

if($zbir_artikli == 0){
    die('nemate izbrano!! Vratete se nazad');
}
$text_body .= crti('-');
$text_body .= namesti('SUM:', $zbir_artikli);

if($zbir_artikli <= $limit_free){
    $delivery = $ceni['delivery'];
}
$text_body .= namesti('delivery', $delivery);

$total = $zbir_artikli + $delivery;
$text_body .= crti('=');
$text_body .= namesti('TOTAL:', $total);
$text_body .= crti('=');

pre($text_body);

//---------------------------------------- 2

$file_name = 'smetka_' . date("YmdHis") . '.txt';
$myfile = fopen($file_name, "w") or die("Ne moze da se kreira $file_name!");
fwrite($myfile, $text_body);
fclose($myfile);

//----------------------------------------

function citaj($niza){
    global $ceni, $zbir_artikli, $text_body;
    
    foreach($niza as $artikal){
        if(is_array($artikal)){
            citaj($artikal);
        }else{
            $cena          = $ceni[$artikal];
            $text_body    .= namesti($artikal, $cena);
            $zbir_artikli += $cena;
        }
    }
}

function namesti($nlevo, $ndesno){
    global $new_line;
    return str_pad($nlevo, 10, ' ', STR_PAD_RIGHT)
         . str_pad($ndesno, 4, ' ', STR_PAD_LEFT)
         . $new_line;
}

function crti($crta){
    global $new_line;
    return str_repeat($crta, 14) . $new_line;
}

function pre($arr){
    echo '<pre>';
    print_r($arr);
    echo '</pre>';
}

//pre($_REQUEST);


/* 
1.  Prviot del od vezbata treba da napravite kalkulacija so cenite i spored odbranite polinja vo formata da gi prikazete site polinja
    koi se selektirani kako del od narackata zaedno so vkupniot iznos. Validacija na cenata dali e nad 400 denari, ako e togas, korisnikot
    dobiva besplatna usluga delivery do negovata adresa.

2. Site podatoci koisto se selektirani da gi zapisete vo eden fajl.


*/

/*
// bez rekurzija
foreach($_POST as $artikal){
    if(is_array($artikal)){
        foreach($artikal as $dodatok){
            $cena=$ceni[$dodatok];
            $text_body.=namesti($dodatok,$cena);
            $zbir_artikli+=$cena;
        }
    }else{
        $cena=$ceni[$artikal];
        $text_body.=namesti($artikal,$cena);
        $zbir_artikli+=$cena;
    }
}
*/

?>