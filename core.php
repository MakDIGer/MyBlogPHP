<?php

/*
 * Персональный блог Макарина Николая
 * Файл: core.php
 */
 
$page = isset($_GET['page']) ? htmlspecialchars($_GET['page']) : 'main';

require_once 'templates/'.TEMPLATE.'/head.php';

switch ($page) {
	case 'main': require_once 'templates/'.TEMPLATE.'/main.php'; break;
	case 'mynews' : include_once 'systems/mynews.php'; require_once 'templates/'.TEMPLATE.'/mynews.php'; break;
	case 'myprojects': include_once 'systems/myprojects.php'; require_once 'templates/'.TEMPLATE.'/myprojects.php'; break;
	case 'email': include_once 'systems/email.php'; require_once 'templates/'.TEMPLATE.'/email.php'; break;
	case '404': require_once 'templates/'.TEMPLATE.'/404.php'; break;
	default: require_once 'templates/'.TEMPLATE.'/404.php';
}

require_once 'templates/'.TEMPLATE.'/footer.php';

?>
