<?php
$fio = $_POST['Name'];
$email = $_POST['txt'];
$fio = htmlspecialchars($fio);
$email = htmlspecialchars($email);
$fio = urldecode($fio);
$email = urldecode($email);
$fio = trim($fio);
$email = trim($email);
if (mail("Pereezdekat2@mail.ru", "Заявка с сайта", "Телефон:".$fio.". Текст заказа: ".$email ,"From: pereezdekb@pereezdekat.ru \r\n")){     
 	echo "сообщение успешно отправлено";
	} else {
	    echo "при отправке сообщения возникли ошибки";
	}
?>