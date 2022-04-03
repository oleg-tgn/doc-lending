<?php
require_once "SendMailSmtpClass.php"; // подключаем класс
$mailSMTP = new SendMailSmtpClass('sert.alfa@yandex.ru', '78Tis4#', 'ssl://smtp.yandex.ru', 465, "UTF-8");
// $mailSMTP = new SendMailSmtpClass('логин', 'пароль', 'хост', 'порт', 'кодировка письма');

// от кого
$from = array(
    "Alfa Sert", // Имя отправителя
    "info_alfasert@mail.ru" // почта отправителя
);
// кому
$to = 'stelmah.oleg@ya.ru';

$name  = $_POST['feedback_name'];
$email = $_POST['feedback_email'];
$text  = $_POST['feedback_text'];

$message = "<h1>Обратная связь</h1>
<p><b>Имя:</b> $name </p>
<p><b>Email:</b> $email</p>
<p><b>Сообщение:</b> $text</p>";

// отправляем письмо
$result =  $mailSMTP->send($to, 'Обратная связь', $message, $from);
// $result =  $mailSMTP->send('Кому письмо', 'Тема письма', 'Текст письма', 'Отправитель письма');

$url = parse_url($_SERVER['HTTP_REFERER']);
$new_url = 'https://'.$url['host'].$url['path'];

if ($result === true) {
    $new_url .= '?mail=success#feedback';
    header("Location: ".$new_url);
} else {
    $new_url.= '?mail=error&message='.$result.'#feedback';
    header("Location: ".$new_url);
}

exit;



// пример использования
require_once "SendMailSmtpClass.php"; // подключаем класс

$mailSMTP = new SendMailSmtpClass('sert.alfa', '78Tis4#', 'ssl://smtp.yandex.ru', 'stelmah.oleg', 465);
// $mailSMTP = new SendMailSmtpClass('логин', 'пароль', 'хост', 'имя отправителя');

$name  = $_POST['name'];
$email = $_POST['email'];
$text  = $_POST['text'];

$message = "<h1>Обратная связь</h1>
<p><b>Имя:</b> $name </p>
<p><b>Email:</b> $email</p>
<p><b>Сообщение:</b> $text</p>";

// заголовок письма
$headers= "MIME-Version: 1.0\r\n";
$headers .= "Content-type: text/html; charset=utf-8\r\n"; // кодировка письма
$headers .= "From: Alfa Sertificat <stelmah.oleg@yandex.ru>\r\n"; // от кого письмо
$result =  $mailSMTP->send('stelmah.oleg@yandex.ru', 'Обратная связь', $message, $headers); // отправляем письмо
// $result =  $mailSMTP->send('Кому письмо', 'Тема письма', 'Текст письма', 'Заголовки письма');
if($result === true){
    echo "Письмо успешно отправлено";
}else{
    echo "Письмо не отправлено. Ошибка: " . $result;
}
