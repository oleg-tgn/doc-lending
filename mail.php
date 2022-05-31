<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;

require 'PHPMailer/Exception.php';
require 'PHPMailer/PHPMailer.php';
require 'PHPMailer/SMTP.php';

$mail = new PHPMailer(true);

$url = parse_url($_SERVER['HTTP_REFERER']);
$new_url = 'http://'.$url['host'].$url['path'];

try {
    //Server settings
    $mail->SMTPDebug = SMTP::DEBUG_OFF;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.yandex.ru';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'sert.alfa@yandex.ru';                     //SMTP username
    $mail->Password   = '78Tis4#';                               //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
    $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
    $mail->CharSet = 'UTF-8';

    //Recipients
    $mail->setFrom('sert.alfa@yandex.ru', 'Alfa Sert');  // от кого
    $mail->addAddress('info_alfasert@mail.ru', 'Alfa Sertificat'); // кому
   
    $name  = $_POST['feedback_name'];
    //$email = $_POST['feedback_email'];
    // $text  = $_POST['feedback_text'];
    $tel = $_POST['feedback_text'];
    $message = "<h1>Обратная связь</h1>
                <p><b>Имя:</b> $name </p>
                <p><b>Телефон:</b> $tel</p>";

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'Обратная связь';
    $mail->Body    = $message;

    if ($mail->send()) {
        $new_url .= '?mail=success#feedback';
        header("Location: ".$new_url);
    }    
} catch (Exception $e) {
    $new_url.= '?mail=error&message='.$mail->ErrorInfo.'#feedback';
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}