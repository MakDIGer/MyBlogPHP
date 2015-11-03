<?php

/*
 * Персональный блог Макарина Николая
 * Файл: systems/acp/admins.php
 */

if (!isset($_POST['user_id'])) {
$data_admins = ask_database('SELECT user_id, user_name, user_email FROM users');
$admins = mysql_fetch_assoc($data_admins);
} else {
	if (isset($_POST['user_name']) and isset($_POST['user_email'])) {
		if (is_numeric($_POST['user_id'])) {
			if ($_POST['user_email'] != '') {
				$user_id = htmlspecialchars($_POST['user_id']);
				$user_name = htmlspecialchars($_POST['user_name']);
				$user_pass = md5(md5(htmlspecialchars($_POST['user_pass'])));
				$user_email = htmlspecialchars($_POST['user_email']);
				$current_pass = md5(md5(htmlspecialchars($_POST['current_pass'])));
				
				$data_pass = ask_database("SELECT user_pass FROM users");
				$cb_pass = mysql_fetch_assoc($data_pass);
				if ($current_pass == $cb_pass['user_pass']) {
					ask_database("UPDATE users SET user_id='".$user_id."', user_name='".$user_name."', user_pass='".$user_pass."', user_email='".$user_email."'");
					$resultat = "Пароль успешно изменён<br />";
				} else { 
					if ($current_pass <> md5(md5(''))) {
					$resultat = "Новый пароль не сохранён, так как неверно указан текущий<br />";
					}
				}
				ask_database("UPDATE users SET user_id='".$user_id."', user_name='".$user_name."', user_email='".$user_email."'");
					$resultat .= "Настройки успешно сохранены";
			} else $resultat = "Ошибка. Не указан email для авторизации";
		} else $resultat = "Ошибка. Неверный тип данных";
	} else $resultat = "Ошибка. Данные переданы неверно";
}
?>
