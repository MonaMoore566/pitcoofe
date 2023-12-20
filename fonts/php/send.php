
<?php
$fio = $_POST['name'];
$email = 'elya.svalova@yandex.ru';
$day = $_POST['day'];
$hour = $_POST['hour'];
$phone = $_POST['phone'];
$person = $_POST['person'];
$fio = htmlspecialchars($fio);
$email = htmlspecialchars($email);
$day = htmlspecialchars($day);
$hour = htmlspecialchars($hour);
$phone = htmlspecialchars($phone);
$person =htmlspecialchars($person);
$fio = urldecode($fio);
$email = urldecode($email);
$day = urldecode($day);
$hour = urldecode($hour);
$phone = urldecode($phone);
$person = urldecode($person);
$fio = trim($fio);
$email = trim($email);
$day = trim($day);
$hour = trim($hour);
$phone = trim($phone);
$person = trim($person);
if (mail("Xalva47@yandex.ru", "Бронирование на", .$day. .$hour. "телефон покупателя: " .$phone. "количество персон:" .$person.   "ФИО:".$fio.". E-mail: ".$email ,"From: elya.svalova@yandex.ru \r\n"))
 {     echo "сообщение успешно отправлено";
} else {
    echo "при отправке сообщения возникли ошибки";
}?>