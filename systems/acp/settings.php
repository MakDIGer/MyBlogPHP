<?php

/*
 * Персональный блог Макарина Николая
 * Файл: systems/acp/settings.php
 */

$data_settings = ask_database('SELECT site_name, site_domain, site_template, site_visits, site_uniq_visits, page_posts, site_email, site_email_name FROM settings');
$settings = mysql_fetch_assoc($data_settings);

$data_users = ask_database('SELECT user_name, user_email FROM users');
$users = mysql_fetch_assoc($data_users);

$data_news = ask_database('SELECT id_post FROM my_news');
define('NUM_NEWS',mysql_num_rows($data_news));

$data_projects = ask_database('SELECT id_project FROM my_projects');
define('NUM_PROJECTS',mysql_num_rows($data_projects));
?>
