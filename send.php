<?php
	$name = $_POST['name'];
	$phone = $_POST['phone'];
	$name = htmlspecialchars($name);
	$phone = htmlspecialchars($phone);
	$name = urldecode($name);
	$phone = urldecode($phone);
	$name = trim($name);
	$phone = trim($phone);
	if (mail("online@masterclean102.ru", "Заявка: ", "Имя:".$name.". Телефон: ".$phone ,"From: masterclean102bash@gmail.com \r\n"))
	{     
		echo "сообщение успешно отправлено";
	} else {
	    echo "при отправке сообщения возникли ошибки";
	}
?>