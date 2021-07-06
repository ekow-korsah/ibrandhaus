<?php

if (isset($_POST['submit'])){
    $email = $_POST['email'];
    $message = $_POST['email'];

    $emailFrom = $email;

    $subject = "Add me to your newsletter!";

    $emailBody = 
                "User Email: $email.\n".
                "User Subject: $subject. \n".
                "User Message: $message. \n";

    

    $to = "info@ibrandhaus.com";
    
    $headers = "From: $emailFrom \r\n";

    $headers .= "Reply To: $email \r\n";

    mail($to,$subject,$emailBody,$headers);

    header("Location: contact.php?mailsend");
}
?>