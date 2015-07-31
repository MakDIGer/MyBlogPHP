<?php

/*
 * Персональный блог Макарина Николая
 * Файл: install.php
 */

$page = isset($_GET['page']) ? htmlspecialchars($_GET['page']) : '1';

require_once 'templates/default/head.php';

switch ($page) {
	case '1' : require_once 'install/1.php'; break;
	default: require_once 'install/1.php'; break;
}

require_once 'templates/default/footer.php';
?>
