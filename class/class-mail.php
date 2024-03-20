<?php

use PHPMailer\PHPMailer\PHPMailer;

require_once('./PHPMailer-master/src/PHPMailer.php');
require_once('./PHPMailer-master/src/Exception.php');
require_once('./PHPMailer-master/src/SMTP.php');

class Mail
{

    public function SendMail($subject)
    {
        $mail = new PHPMailer(true);
        $response = FALSE;
        try {
            $mail->isSMTP();
            $mail->SMTPAuth = true;
            $mail->Host       = 'smtpout.secureserver.net';
            $mail->Username   = 'desarrollo@foxconceptstore.com';
            $mail->Password   = 'Foxracingcolombia2020';
            $mail->Port       = 465;
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;

            $mail->setFrom('ruizmunozc@gmail.com');

            $mail->isHTML(true);
            $mail->Subject = $subject;
            $mail->Body    = '<h3>Tenemos un nuevo producto, ingresa ya.</h3>';

            $mail->send();
            $response = TRUE;
        } catch (Exception $e) {
            $response = $e;
        }
        return $response;
    }
}
