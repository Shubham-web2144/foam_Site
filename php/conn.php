<?php

$host = 'localhost';
$user = "root";
$pass = "";
$db_name = 'ameri_site';

$conn = mysqli_connect($host, $user, $pass, $db_name);

if(!$conn){
    echo "Internal Server Problem" .mysqli_connect_error();
}

?>