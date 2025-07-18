<?php

namespace FairySofte\Utils;

require_once __DIR__ . "/../../vendor/autoload.php";
use PHPMailer\PHPMailer\PHPMailer;

class Mailer {

    static function sendMail($address, $subject, $body): void {
        $mail = new PHPMailer();
        $mail->isSMTP();
        $mail->Host = "mail.spacenoop.fr";
        $mail->SMTPAuth = true;
        $mail->Username = "no-reply@spacenoop.fr";
        $mail->Password = "vY9_s!5DNt6YwpB";
        $mail->SMTPSecure = "tls";
        $mail->Port = 587;

        $mail->setFrom("no-reply@spacenoop.fr", "FairySofte");
        $mail->addReplyTo("fairysofte@spacenoop.fr", "FairySofte Support");

        $mail->Subject = $subject;
        $mail->Body = $body;

        $mail->addAddress($address);
    }
}

?>