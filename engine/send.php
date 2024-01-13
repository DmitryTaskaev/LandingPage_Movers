<?php
$fio = $_POST['fio'];
$email = $_POST['email'];
$fio = htmlspecialchars($fio);
$email = htmlspecialchars($email);
$fio = urldecode($fio);
$email = urldecode($email);
$fio = trim($fio);
$email = trim($email);
if (mail("Pereezdekat2@mail.ru", "Заявка с сайта", "ФИО:".$fio.". Телефон: ".$email ,"From: pereezdekb@pereezdekat.ru \r\n")){     
 	echo "сообщение успешно отправлено";
	} else {
	    echo "при отправке сообщения возникли ошибки";
	}
?>