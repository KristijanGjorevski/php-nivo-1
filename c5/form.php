<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Upload</title>
    </head>
    <body>
        <form action="process-form.php" method="POST" enctype="multipart/form-data">
            <input type="file" name="fajl" multiple="multiple" id="fajl" accept="image/*">
            <input type="submit" value="Upload">
        </form>
    </body>
</html>
