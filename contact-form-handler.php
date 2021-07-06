<?php

if (isset($_POST['submit'])){
    $name = $_POST['fullname'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    $emailFrom = $email;

    $emailBody = "User Name: $name \n".
                "User Email: $email.\n".
                "User Subject: $subject. \n".
                "User Message: $message. \n";


    $to = 'info@ibrandhaus.com';
    
    $headers = "From: $emailFrom \r\n";

    $headers .= "Reply To: $email \r\n";

    mail($to,$subject,$emailBody,$headers);

    header("Location: contact.php?mailsend");
}
?>
