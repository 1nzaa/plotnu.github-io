<?php
// несколько получателей
$to  = 'igorslobodan05@gmail.com.com' . ', ';  // обратите внимание на запятую
$to .= 'onajdorf@gmail.com';

// тема письма
$subject = 'Лист з сайта';

// текст письма
$message = 'Користувач залишив заявку.'<br /> <br />
'Зв`язатися з ним можна за email <a href="mailto:' . $_POST['email'] . '">' . $_POST['email'] . '</a>'
;

// Для отправки HTML-письма должен быть установлен заголовок Content-type
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n"; 

// Дополнительные заголовки
$headers .= 'To: Иван <igorslobodan05@gmail.com>' . "\r\n"; // Свое имя и email
$headers .= 'From: ' '<' . $_POST['email'] . '>' . "\r\n";

// Отправляем
mail($to, $subject, $message, $headers);
?>