<?php

if (isset($_POST['submit'])) {
            /* $ announce the variable */
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    $mailTo = "yu-jie.wu@hotmail.com"; 
    $headers = "From: ".$email;
    $txt = "You have recieved an e-mail from".$name. ".\n\n". $message;


    mail($mailTo, $txt,$headers);
    header("Location: index.php?mailsend");
}