<?php

include 'PHPMailer/Exception.php';
include 'PHPMailer/PHPMailer.php';
include 'PHPMailer/SMTP.php';

if (isset($_POST['submitContact']))
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

//  Email voor de fotografe, bevestiging aanvraag fotosessie
//  Configuratie van de algemene mail gegevens
    $mail->setFrom('@gmail.com', 'Zenna\'s Photography');
    $mail->addReplyTo('@gmail.com', 'Zenna\'s Photography');
    $mail->addAddress('@gmail.com');
    $mail->addCC('');
    $mail->addBCC('');

//  Verander de mail in HTML formaat
    $mail->isHTML(true);

//  Het invullen van de content van de mail
    $bodyContent = '<h3></h3>';
    $bodyContent .= '<p></p>';

//  Het invullen van het onderwerp van de mail
    $mail->Subject = '';
    $mail->Body = $bodyContent;

//  Kijkt of de mail niet is verzonden en geeft hier een error voor aan.
    if (!$mail->send()) {
        echo 'Het bericht kon niet verzonden worden.';
        echo 'Mailer Error: ' . $mail->ErrorInfo;
    }
}
