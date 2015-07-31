<?php

/*
 * Персональный блог Макарина Николая
 * Файл: systems/acp/settings.php
 */

if (!isset($_POST['site_name'])) {
$data_settings = ask_database('SELECT * FROM settings');
$settings = mysql_fetch_assoc($data_settings);
} else {
	if (isset($_POST['site_domain']) and isset($_POST['site_template']) and isset($_POST['site_visits']) and isset($_POST['site_uniq_visits']) and isset($_POST['page_posts']) and isset($_POST['site_email']) and isset($_POST['site_email_pass']) and isset($_POST['site_email_name'])) {
		if (is_numeric($_POST['site_visits']) and is_numeric($_POST['site_uniq_visits']) and is_numeric($_POST['page_posts'])) {
			if ($_POST['site_template'] != '') {
				$site_name = htmlspecialchars($_POST['site_name']);
				$site_domain = htmlspecialchars($_POST['site_domain']);
				$site_template = htmlspecialchars($_POST['site_template']);
				$site_visits = htmlspecialchars($_POST['site_visits']);
				$site_uniq_visits = htmlspecialchars($_POST['site_uniq_visits']);
				$page_posts = htmlspecialchars($_POST['page_posts']);
				$site_email = htmlspecialchars($_POST['site_email']);
				$site_email_pass = htmlspecialchars($_POST['site_email_pass']);
				$site_email_name = htmlspecialchars($_POST['site_email_name']);
				
				ask_database("UPDATE settings SET site_name='".$site_name."', site_domain='".$site_domain."', site_template='".$site_template."', site_visits='".$site_visits."', site_uniq_visits='".$site_uniq_visits."', page_posts='".$page_posts."', site_email='".$site_email."', site_email_pass='".$site_email_pass."', site_email_name='".$site_email_name."'");
				$resultat = "Изменения успешно сохранены";
			} else $resultat = "Ошибка. Не выбран шаблон";
		} else $resultat = "Ошибка. Неверный тип данных";
	} else $resultat = "Ошибка. Данные переданы неверно";
}
?>
