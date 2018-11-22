<?php

session_start();


if(isset($_POST['submit']))
{
    mail('francoisgillioen@live.fr', 'My Subject', "yo");

    $from    = $_POST['from'];
    $to      =  'francoisgillioen@live.fr';
    $subject = $_POST['subject'];
    $message = $_POST['message'];
    $headers = 'From:'. $from . "\r\n" .
        'Reply-To: ' . $to . "\r\n" .
        'X-Mailer: PHP/' . phpversion();

    mail($to, $subject, $message, $headers);

            // Redirect to index page
            header('location: ../../HTML/Contact.php');
            // Display notification
            $_SESSION['msg'] ="Thank you for your message";
    
}
?> 