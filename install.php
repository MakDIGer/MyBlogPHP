<?php

/*
 * Персональный блог Макарина Николая
 * Файл: install.php
 */

define('SITE_NAME', 'Персональный блог');
define('SERVER_DOMAIN', $_SERVER['HTTP_HOST']);

$page = isset($_GET['page']) ? htmlspecialchars($_GET['page']) : '1';

include_once 'install/function.php';
require_once 'templates/default/head.php';

switch ($page) {
	case '1' : require_once 'install/1.php'; break;
	case '2' : require_once 'install/2.php'; break;
	case '3' : require_once 'install/3.php'; break;
	case '4' : require_once 'install/4.php'; break;
	default: require_once 'install/1.php'; break;
}

require_once 'templates/default/footer.php';
?>
