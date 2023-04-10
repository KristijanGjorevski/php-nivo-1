<?php

echo '<pre>';
print_r($_FILES);
echo '<pre>';
$max_size = 5000000;

// echo '<pre>';
// print_r($_SERVER);
// echo '<pre>';

if($_SERVER['REQUEST_METHOD'] !== "POST"){
    exit('POST method is required to upload!');
}

if(empty($_FILES)){
    exit('No files for uploading.');
}

if($_FILES['fajl']['error'] !== UPLOAD_ERR_OK){

    // switch($_FILES['fajl']['error']){
    //     case UPLOAD_ERR_INI_SIZE :
    //         exit('The size of the file is too big');
    //         break;
    //     case UPLOAD_ERR_PARTIAL :
    //         exit('The uploading was done partrially');
    //         break;
    //     case UPLOAD_ERR_NO_FILE :
    //         exit('No file was uploaded, maybe check php.ini for default file requesting.');
    //         break;
    //     case UPLOAD_ERR_EXTENSION : 
    //         exit('PHP extension is preventing from uploading a file');
    //         break;
    // }

    match($_FILES['fajl']['error']){
        UPLOAD_ERR_INI_SIZE => exit('The size of the file is too big'),
        UPLOAD_ERR_PARTIAL => exit('The size of the file is too big'),
        UPLOAD_ERR_NO_FILE => exit('No file was uploaded, maybe check php.ini for default file requesting.'),
        UPLOAD_ERR_EXTENSION =>  exit('PHP extension is preventing from uploading a file'),
        default => exit('Unknown error while uploading file. Please contact support.')
    };
}

if($_FILES['fajl']['size'] > $max_size){
    exit('File exeeds 5MB, therefore cannot be uploaded.');
}

$allowed_types = ['image/jpeg','image/png','image/gif'];

if( ! in_array($_FILES['fajl']['type'], $allowed_types)){
    exit('Invalid file type.');
}

// echo __DIR__;

if( ! file_exists('uploads')){
    mkdir('uploads');
}

$filename = rand() . $_FILES['fajl']['name'];
$tmp_filename = $_FILES['fajl']['tmp_name'];
$to = __DIR__ . "/uploads/$filename";

if( ! move_uploaded_file($tmp_filename, $to)){
    exit('Uploaded file didnt move.');
}