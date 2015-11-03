<?php

/*
 * Персональный блог Макарина Николая
 * Файл: systems/acp/login.php
 */

if (!isset($_POST['email']) or !isset($_POST['pass'])) $_SESSION['user_key'] = '';
$email = isset($_POST['email']) ? htmlspecialchars($_POST['email']) : '';
$pass = isset($_POST['pass']) ? htmlspecialchars($_POST['pass']) : '';

if ($email == '' or $pass == '') {
	$resultat = 'Логин или пароль не введены';
} else {
	$data_db = ask_database('SELECT user_pass, user_email FROM users');
	$res = mysql_fetch_assoc($data_db);
	if ($email == $res['user_email']) {
		if (md5(md5($pass)) == $res['user_pass']) {
			$_SESSION['user_key'] = md5(md5(rand(rand(5,95), rand(145,995))));
			ask_database("UPDATE users SET user_hash='".$_SESSION['user_key']."', user_ip='".$_SERVER['REMOTE_ADDR']."'");
			$resultat = "Авторизация успешно пройдена,<br />через 5 секунд произойдёт переадресация в админ-панель.";
		} else { $resultat = 'Email или Пароль введён неверно'; }
	} else { $resultat = 'Email или Пароль введён неверно'; }
}
?>
