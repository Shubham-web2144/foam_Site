<?php

include "./conn.php";

$admin = "admin";
$password = "password";

$user = $_POST['user'];
$pass = $_POST['pass'];

    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        if(!empty($user) && !empty($pass)){
            if($user == $admin && $pass == $password){
                // echo "Login";
                header("Location: ../pages/addProduct.html");
    
            }
            else {
                echo "ERRor";
            }
        }
    }
    

?>