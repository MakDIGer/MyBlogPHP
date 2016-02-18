<?php

/*
 * Персональный блог Макарина Николая
 * Файл: systems/head.php
 */

/*$meta_data = ask_database('SELECT site_keywords, site_description FROM settings');

$row_meta = mysql_fetch_assoc($meta_data);
define('SITE_KEYWORDS', $row_meta['site_keywords']);
define('SITE_DESCRIPTION', $row_meta['site_description']);
*/

if (isset($_GET['news'])) {
	$number_news = htmlspecialchars($_GET['news']);
	$meta_data = ask_database('SELECT desc_post, keywords FROM my_news WHERE id_post='.$number_news);

	$row_meta = mysql_fetch_assoc($meta_data);
    define('SITE_KEYWORDS', $row_meta['keywords']);
    define('SITE_DESCRIPTION', $row_meta['desc_post']);
} else if (isset($_GET['project'])) {
	$number_project = htmlspecialchars($_GET['project']);
	$meta_data = ask_database('SELECT desc_project, keywords FROM my_projects WHERE id_project='.$number_project);

	$row_meta = mysql_fetch_assoc($meta_data);
    define('SITE_KEYWORDS', $row_meta['keywords']);
    define('SITE_DESCRIPTION', $row_meta['desc_project']);
} else {
	$meta_data = ask_database('SELECT site_keywords, site_description FROM settings');

	$row_meta = mysql_fetch_assoc($meta_data);
    define('SITE_KEYWORDS', $row_meta['site_keywords']);
    define('SITE_DESCRIPTION', $row_meta['site_description']);
}

?>
