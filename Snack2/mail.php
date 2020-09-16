<?php
$name = $_GET['name'];
$mail = $_GET['mail'];
$age = $_GET['age'];

if(strlen($name) <3){
    echo 'il nome è corto';
}


if(strlen($name) < 3 || empty($mail) ||  is_numeric($age) == false){
    $text = 'accesso negato';
} else {
    if((strpos($mail,'@') !== false) && (strpos($mail,'.') !== false)){
    $text = 'accesso riuscito';
    } else {
    $text = ' controlla la mail';
    }
echo $text;
}


?>
