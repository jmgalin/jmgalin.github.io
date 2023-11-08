<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];
    
    $to = "jos-galindo@hotmail.com";  // Coloca aquí tu dirección de correo electrónico
    $headers = "From: $email";
    $email_body = "You have received a new message from the user $name.\nEmail: $email\n\nSubject: $subject\n\n$message";
    
    mail($to, "Subject: $subject", $email_body, $headers);
}
?>
