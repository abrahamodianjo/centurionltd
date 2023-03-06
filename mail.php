<?php
    
    $to = 'info@centurionobuchimultimedia.xyz';
    $name = $_POST["name"];
    $email= $_POST["email"];
    $text= $_POST["message"];
    $subject= $_POST["subject"];
    


    $headers = 'MIME-Version: 1.0' . "\r\n";
    $headers .= "From: " . $email . "\r\n"; // Sender's E-mail
    $headers .= "Subject: " . $subject . "\r\n"; // Subject
    $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

    $message ='<table style="width:100%">
        <tr><td>Dear Admin, you have a new message from the contact us site</td></tr>
        <tr><td>The Details are as followed:</td></tr>
        <tr><td> </td></tr>
        <tr><td>Name: '.$name.'</td></tr>
        <tr><td>Email: '.$email.'</td></tr>
        <tr><td>subject: '.$subject.'</td></tr>
        <tr><td>Message: '.$text.'</td></tr>
        
    </table>';

    if (@mail($to, $email, $message, $headers))
    {
        echo 'Your message has been sent, we will get back to you shortly.';
    }else{
        echo 'failed';
    }

?>

