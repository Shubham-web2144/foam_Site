<?php

include './conn.php';

$name = $_POST['mname'];
$mail = $_POST['mail'];
$msg = $_POST['msg'];

$sql = "INSERT INTO `ameri_msg` (`msg_name`, `msg_mail`, `msg`) VALUES ('$name', '$mail', '$msg')";


if(!empty($name) || !empty($mail)){
    if(mysqli_query($conn, $sql)){
        echo "Thanks for your response";
    }
    else{
        echo "Failed to send response";
    }
}
else{
    echo "Please enter valid details";
}

?>