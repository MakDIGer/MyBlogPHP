<?php

/*
 * Персональный блог Макарина Николая
 * Файл: systems/email.php
 */
 
$name_email = isset($_POST['name']) ? htmlspecialchars($_POST['name']) : '';
$email = isset($_POST['email']) ? htmlspecialchars($_POST['email']) : '';
$message_email = isset($_POST['message']) ? htmlspecialchars($_POST['message']) : '';

if ($name_email == '' or $email == '' or $message_email == '') {
	$resultat = "Не все поля были заполнены.<br />Заполните пожалуйста.";
} else {
			//Проверка емайл
			if (!preg_match("/([\w\-]+\@[\w\-]+\.[\w\-]+)/", $email))
			{
				$resultat = "Ваше сообщение не отправлено.<br />Ошибка в написании Email-адреса.";
			} else {
			$email_params = get_email_params();
			$mailSMTP = new SendMailSmtpClass($email_params['site_email'], $email_params['site_email_pass'], 'ssl://smtp.yandex.ru', $email_params['site_email_name'], 465); // создаем экземпляр класса
			// $mailSMTP = new SendMailSmtpClass('логин', 'пароль', 'хост', 'имя отправителя');
 
			// заголовок письма
			$headers= "MIME-Version: 1.0\r\n";
			$headers .= "Content-type: text/html; charset=utf-8\r\n"; // кодировка письма
			$headers .= "From: $email <$name_email>\r\n"; // от кого письмо
			$result =  $mailSMTP->send($email_params['site_email'], 'Письмо с сайта '.SERVER_DOMAIN, $message_email, $headers); // отправляем письмо
			if($result === true){
						$resultat = "Письмо успешно отправлено";
			} else {
						$resultat = "Письмо не отправлено. Ошибка: " . $result;
				}
			
			if (isset($_POST['copy'])) {
				$result2 =  $mailSMTP->send($email, 'Письмо с сайта '.SERVER_DOMAIN, $message_email, $headers); // отправляем письмо
				if($result2 === true){
						$resultat .= "<br />Копия успешно отправлена";
						} else {
									$resultat .= "<br />Копия не отправлена. Ошибка: " . $result;
				}
			
			}
		}
	}
?>
