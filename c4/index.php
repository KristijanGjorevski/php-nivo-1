<?php

// $_GET; // GET superglobalna sostoi data koja e pratena vo skriptata preku URL parametri
// $_POST; // POST superglobalna sostoi data koja e pratena preku HTTP post request.
// $_REQUEST; // REQUEST superglobalna sostoi data od zaedno $_GET i $_POST i $_COOKIE
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Login</title>
    </head>
    <body>
        <h1>Login</h1>
    <!-- asdasd -->
        <form action="login.php" method="POST">
            <label for="username">Username :</label>
            <input type="text" class="" name="username" placeholder="Enter Username (min 8 characters)" pattern=".{8,}">
            <br><br>
            <label for="password" >Password :</label>
            <input type="text" name="password" placeholder="Enter Password (min 8 characters)" pattern=".{8,}">
            <br><br>
            <input type="submit" value="LogIn">
        </form>
    </body>
</html>