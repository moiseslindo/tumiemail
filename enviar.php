<?php
require 'PHPMailer/PHPMailerAutoload.php';
$mail = new PHPMailer();
$mail->IsSMTP();
$mail->Host = 'smtp.mailersend.net';
$mail->Port = 587;
$mail->SMTPAuth = true;
$mail->Username = 'MS_a6P8ku@trial-0p7kx4xq93eg9yjr.mlsender.net';
$mail->Password = '0L8S9hLURctlXDmH';
$mail->setFrom('MS_a6P8ku@trial-0p7kx4xq93eg9yjr.mlsender.net', 'Moises Lindo The Greatest');
$mail->addAddress('camilo.quintana10@gmail.com', 'Camilo');
//$mail->addAddress('mlindo@gmail.com', 'Moises');
$mail->addReplyTo('rrodriguezm98@gmail.com', 'Richard');
$mail->Subject = 'Prueba de envio de emails desde mailersend';
$mail->Body = "Hola a todos!!, ya tenemos mensajeria, bajar el proyecto desde: https://github.com/moiseslindo/tumiemail.git";
if (!$mail->send()) {
    echo 'Email could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    echo 'Email was successfully sent.';
}
?>