<?php

if($_REQUEST){    
    pre($_REQUEST);
}


$username = $_POST['username'];
$password = $_POST['password'];

$database_saved_pass = password_hash('password123',PASSWORD_DEFAULT);
$database_saved_username = 'adminadmin';

// echo password_hash('password123',PASSWORD_DEFAULT);
// exit;

if(validateINput($username, $password, $database_saved_pass, $database_saved_username)){
    echo "Login successful ". $username;
}else {
    echo "Login unsuccessful : ". $password . " wrong or username or password";
}

function validateInput($username, $password, $database_saved_pass, $database_saved_username){

    // global $username, $password, $database_saved_pass, $database_saved_username;
    $no_of_chars_username = strlen($username);
    $no_of_chars_password = strlen($password);

    return isset($username) &&
           isset($password) &&
           password_verify($password, $database_saved_pass) &&
           $database_saved_username === $username &&
           $no_of_chars_username >= 8 &&
           $no_of_chars_password >= 8;
}

// echo $database_saved_pass;





















function pre($arr){
    echo '<pre>';
    var_dump($arr);
    echo '</pre>';
}