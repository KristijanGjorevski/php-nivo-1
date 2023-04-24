<?php 

// Ovie dolenavedeni funckii se odnesuvaat na fajlovi koi sto sakame da bidat vkluceni vo druga skripta
// Tuka se vnesuva kontentot na stranata

require_once 'db.php';

$sql = "SELECT * FROM php12.studenti";

$query = $db->prepare($sql);
$query->execute();
$studenti = $query->fetchAll(PDO::FETCH_ASSOC);

echo '<pre>';
print_r($studenti);
echo '</pre>';
?>

<div class="container">
    <table class="table table-dark table-striped">
        <thead>
            <tr>
                <th>#</th>
                <th>Ime</th>
                <th>Prezime</th>
                <th>Godini</th>
                <th>Email</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($studenti as $student){ ?>
            <tr>
                <td><?=  $student['id']; ?></td>
                <td><?=  $student['ime']; ?></td>
                <td><?=  $student['prezime']; ?></td>
                <td><?=  $student['godini']; ?></td>
                <td><?=  $student['email']; ?></td>
            </tr>
            <?php } ?>
        </tbody>
    </table>
    <form action="create.php">
        <input type="submit" value="Create Student" class="btn btn-block btn-warning">
    </form>
</div>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">