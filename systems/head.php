<?php

/*
 * Персональный блог Макарина Николая
 * Файл: systems/head.php
 */

$meta_data = ask_database('SELECT site_keywords, site_description FROM settings');

$row_meta = mysql_fetch_assoc($meta_data);
define('SITE_KEYWORDS', $row_meta['site_keywords']);
define('SITE_DESCRIPTION', $row_meta['site_description']);
?>