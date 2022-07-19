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
    $mail->Password   = '8nc5radZkDZ:#Y=0DBGg#';                               //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
    $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
    $mail->CharSet = 'UTF-8';

    //Recipients
    $mail->setFrom('sert.alfa@yandex.ru', 'Alfa Sert');  // от кого
    //$mail->addAddress('info_alfasert@mail.ru', 'Alfa Sertificat'); // кому
    $mail->addAddress('stelmah.oleg@ya.ru', 'Alfa Sertificat'); // кому

    $informationContent  = $_POST['informationContent'];
    $easyNavigate  = $_POST['easyNavigate'];
    $design  = $_POST['design'];
    $message = "<h1>Оценка сайта:</h1>
                <p><b>Информационное наполнение:</b> $informationContent</p>
                <p><b>Удобство навигации:</b> $informationContent</p>
                <p><b>Дизайн, визуальное представление:</b> $design</p>";



    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'Оценка сайта';
    $mail->Body    = $message;

    if ($mail->send()) {
        $new_url .= '?feedback=success#feedbackBtn';
        header("Location: ".$new_url);
    }
} catch (Exception $e) {
    $new_url.= '?mail=error&message='.$mail->ErrorInfo.'#feedback';
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}