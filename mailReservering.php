<?php

require 'PHPMailer/PHPMailer.php';
require 'PHPMailer/Exception.php';
require 'PHPMailer/SMTP.php';

if (isset($_POST['submitOrder']))
{
    $mail = new \PHPMailer\PHPMailer\PHPMailer();

//  Configuratie voor het mailen
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = '@gmail.com';
    $mail->Password = '';
    $mail->SMTPSecure = 'tls';
    $mail->Port = 587;

//  Email voor degene die besteld, bevestiging voor de klant.
//  Configuratie van de algemene mail gegevens
    $mail->setFrom('@gmail.com', '');
    $mail->addReplyTo('@gmail.com', '');
    $mail->addAddress($_POST['email']);
    $mail->addCC('');
    $mail->addBCC('');

//  Verander de mail in HTML formaat
    $mail->isHTML(true);

//  Het invullen van de content van de mail
    $bodyContent = '<h1></h1>';
    $bodyContent .= '<p></p>';

//  Het invullen van het onderwerp van de mail
    $mail->Subject = '';
    $mail->Body    = $bodyContent;

//  Kijkt of de mail niet is verzonden en geeft hier een error voor aan.
    if(!$mail->send()) {
        echo 'Het bericht kon niet verzonden worden';
        echo 'Mailer Error: ' . $mail->ErrorInfo;
    }
}