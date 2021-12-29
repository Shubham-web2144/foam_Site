<?php

include "./conn.php";

$fname = $_POST['fname'];
$lname = $_POST['lname'];
$email = $_POST['mail'];
$cname  = $_POST['cname'];
$msg = $_POST['msg'];

$fullname = $fname ." ".$lname;

$sql = "INSERT INTO `ameri_contact` ( `name`, `mail`, `msg`, `company`) VALUES ('$fullname', '$email', '$msg', '$cname')";

if(!empty($email)){
    if(mysqli_query($conn, $sql)){
        // echo "data inserted";
        $recevier = "shubhamkjadhav21@gmail.com";
        $sender = $email;
        $sub = "New Contact From site" . $sender;
        $body = "This is new contact alert" .$msg;

        if(mail($recevier,$sub, $body)){
            echo "Message sent";
        }
    }
}

?>