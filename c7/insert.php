<?php

require_once 'db.php';


print_r($_REQUEST);

$sql = "
INSERT INTO studenti 
    (ime, prezime, godini, email ) 
VALUES
    (:ime, :prezime, :godini, :email)
";

$query = $db->prepare($sql);
$query->bindValue(':ime',$_REQUEST['ime'], PDO::PARAM_STR);
$query->bindValue(':prezime',$_REQUEST['prezime'], PDO::PARAM_STR);
$query->bindValue(':godini',$_REQUEST['godini'], PDO::PARAM_INT);
$query->bindValue(':email',$_REQUEST['email'], PDO::PARAM_STR);

if($query->execute()){
echo 'Studentot e kreairan';
} else {
echo 'Studentot ne e kreairan';
}



?>