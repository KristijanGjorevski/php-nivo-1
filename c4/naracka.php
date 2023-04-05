<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Klikni Jadi</title>
</head>
<body>




    <form action="naplata.php" method="POST">
        <h3>Glaven Obrok</h3>
        <input type="radio" name="glaven_obrok" id="hamburger" value="hamburger">
        <label for="hamburger">Hamburger</label>
        <br>
        <input type="radio" name="glaven_obrok" id="chicken" value="chicken">
        <label for="chicken">Chicken</label>
        <br>
        <input type="radio" name="glaven_obrok" id="hotdog" value="hotdog">
        <label for="hotdog">Hot-dog</label>
        <br>

        <h3>Sosovi</h3>

        <input type="checkbox" name="sosovi[]" id="majonez" value="majonez">
        <label for="majonez">Majonez</label>
        <br>

        <input type="checkbox" name="sosovi[]" id="kecap" value="kecap">
        <label for="kecap">Kecap</label>
        <br>

        <input type="checkbox" name="sosovi[]" id="senf" value="senf">
        <label for="senf">Senf</label>
        <br>
        
        <input type="checkbox" name="sosovi[]" id="pomfrit" value="pomfrit">
        <label for="pomfrit">Pomfrit</label>
        <br>

        <input type="checkbox" name="sosovi[]" id="pavlaka" value="pavlaka">
        <label for="pavlaka">Pavlaka</label>
        <br>

        <input type="checkbox" name="sosovi[]" id="pecurki" value="pecurki">
        <label for="pecurki">Pecurki</label>
        <br>

        <input type="submit" value="Naracaj">
    </form>

</body>
</html>