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
	$meta_data = ask_database('SELECT title_post, keywords FROM my_news WHERE id_post='.$number_news);

	$row_meta = mysql_fetch_assoc($meta_data);
    define('SITE_KEYWORDS', $row_meta['keywords']);
    define('SITE_DESCRIPTION', $row_meta['title_post']);
} else {
	$meta_data = ask_database('SELECT site_keywords, site_description FROM settings');

	$row_meta = mysql_fetch_assoc($meta_data);
    define('SITE_KEYWORDS', $row_meta['site_keywords']);
    define('SITE_DESCRIPTION', $row_meta['site_description']);
}

?>