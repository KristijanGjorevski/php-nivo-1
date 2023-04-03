<?php
$opcii_boi = ['Yellow','Purple','Blue','', null];
$filmovi = ["the shawshank redemption", "the godfather", "the dark knight", "the lord of the rings"];
?>

<h1>Cetvrt Cas</h1>


<h3>Static</h3>
<select id="" name="">
    <option value="">Yellow</option>
    <option value="">Purple</option>
    <option value="">Blue</option>
</select>
<h3>Primer 1</h3>
<select id="" name="">
    <?php
        foreach($opcii_boi as $index => $boja){
            echo "<option value=''>$boja</option>";
        }
    ?>
</select>

<h3>Primer 2</h3>
<select id="" name="">
    <?php foreach($opcii_boi as $index => $boja){ ?>
            <option value="<?=$index;?>"><?= $boja;?></option>
       <?php }?>
    ?>
</select>


<?php 



function ispecatiNesto(){
    echo '<h4>Ispecati Nesto</h4>';
}

ispecatiNesto();

// function ispecatiNestoSoParametri(){

// }


function soberiDvaBroja( $x ,$y){
    $z = $x + $y;
    return $z;
}
$w = soberiDvaBroja(7,13);

echo $w;
echo $z;

function izbor($array){
    echo '<pre>';
    print_r($array);
    echo '</pre>';
}
izbor($opcii_boi);

function br(){
    echo '<br>';
}
br();

function iteriranje($array){
    foreach($array as $key => $value ){
        echo $value;
        br();
    }
}
iteriranje($filmovi);


// $ime = 'Kris '.str_repeat("&nbsp;",100).' tijan';
// echo $ime;
// echo trim($ime);

echo '<h1>Manipulacija so stringovi</h1>';

echo ucfirst('kristijan');
br();
echo strpos('Go sakam PHP, ne sakam','sakam');
br();
echo strtoupper('open');
br();
echo strtolower('OPEN');
br();
echo substr('Go sakam PHP, ne sakam',9,3); // Pocni od 9tiot karakter i ispecati 3 karakteri
br();

$string = implode('/',$opcii_boi);
echo $string;
$brojanica = '11=asd##222=asdasd##123123=fasfas';
izbor(explode('##',$brojanica));

//str_replace(); // str_replace -  replace na part of a string
//str_word_count(); - broj na zborovi vo strings
//echo str_word_count('Go sakam PHP, ne sakam'); // ova vrakja broj 5 , bidejki ima 5 zborcinja vo ovoj string
//phpinfo(); // info za php jazikot vo lokalnata masina i pri razni instalacii

//die(); // gasenje od skripta
// www.php.net

?>