<?php

/*
 * Персональный блог Макарина Николая
 * Файл: systems/settings.php
 */

if (!isset($_SESSION['visitor'])) {
	$_SESSION['visitor'] = 1;
	plus_uniq_visits();
}

$question = ask_database('SELECT site_name, site_domain, site_template, site_visits, site_uniq_visits, page_posts FROM settings');
$vars = mysql_fetch_assoc($question);
define('SITE_NAME', $vars['site_name']);
define('SERVER_DOMAIN', $vars['site_domain']);
define('TEMPLATE', $vars['site_template']);
define('PAGE_POSTS', $vars['page_posts']);

if (!isset($_SESSION['user_key'])) plus_visits();
?>
