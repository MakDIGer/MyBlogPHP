<?php

/*
 * Персональный блог Макарина Николая
 * Файл: acp_core.php
 */

$acp_page = isset($_GET['acp_page']) ? htmlspecialchars($_GET['acp_page']) : 'main';
if (!check_auth()) $acp_page = 'login';

require_once 'systems/head.php';
require_once 'templates/'.TEMPLATE.'/head.php';

switch ($acp_page) {
	case 'login' : include_once 'systems/acp/login.php'; require_once 'templates/'.TEMPLATE.'/acp/login.php'; break;
	case 'main' : require_once 'templates/'.TEMPLATE.'/acp/head.php'; require_once 'templates/'.TEMPLATE.'/acp/sidebar.php'; include_once 'systems/acp/main.php'; require_once 'templates/'.TEMPLATE.'/acp/main.php'; break;
	case 'mynews' : require_once 'templates/'.TEMPLATE.'/acp/head.php'; require_once 'templates/'.TEMPLATE.'/acp/sidebar.php'; include_once 'systems/acp/mynews.php'; require_once 'templates/'.TEMPLATE.'/acp/mynews.php'; break;
	case 'rmnews' : include_once 'systems/acp/rmnews.php'; require_once 'templates/'.TEMPLATE.'/acp/rmnews.php'; break;
	case 'addnews' : require_once 'templates/'.TEMPLATE.'/acp/head.php'; require_once 'templates/'.TEMPLATE.'/acp/sidebar.php'; include_once 'systems/acp/addnews.php'; require_once 'templates/'.TEMPLATE.'/acp/addnews.php'; break;
	case 'editnews' : require_once 'templates/'.TEMPLATE.'/acp/head.php'; require_once 'templates/'.TEMPLATE.'/acp/sidebar.php'; include_once 'systems/acp/editnews.php'; require_once 'templates/'.TEMPLATE.'/acp/editnews.php'; break;
	case 'sitemap' : require_once 'templates/'.TEMPLATE.'/acp/head.php'; require_once 'templates/'.TEMPLATE.'/acp/sidebar.php'; include_once 'systems/acp/sitemap.php'; require_once 'templates/'.TEMPLATE.'/acp/sitemap.php'; break;
	case 'myprojects' : require_once 'templates/'.TEMPLATE.'/acp/head.php'; require_once 'templates/'.TEMPLATE.'/acp/sidebar.php'; include_once 'systems/acp/myprojects.php'; require_once 'templates/'.TEMPLATE.'/acp/myprojects.php'; break;
	case 'rmprojects' : include_once 'systems/acp/rmprojects.php'; require_once 'templates/'.TEMPLATE.'/acp/rmprojects.php'; break;
	case 'addprojects' : require_once 'templates/'.TEMPLATE.'/acp/head.php'; require_once 'templates/'.TEMPLATE.'/acp/sidebar.php'; include_once 'systems/acp/addprojects.php'; require_once 'templates/'.TEMPLATE.'/acp/addprojects.php'; break;
	case 'editprojects' : require_once 'templates/'.TEMPLATE.'/acp/head.php'; require_once 'templates/'.TEMPLATE.'/acp/sidebar.php'; include_once 'systems/acp/editprojects.php'; require_once 'templates/'.TEMPLATE.'/acp/editprojects.php'; break;
	case 'settings' : require_once 'templates/'.TEMPLATE.'/acp/head.php'; require_once 'templates/'.TEMPLATE.'/acp/sidebar.php'; include_once 'systems/acp/settings.php'; require_once 'templates/'.TEMPLATE.'/acp/settings.php'; break;
	case 'admins' : require_once 'templates/'.TEMPLATE.'/acp/head.php'; require_once 'templates/'.TEMPLATE.'/acp/sidebar.php'; include_once 'systems/acp/admins.php'; require_once 'templates/'.TEMPLATE.'/acp/admins.php'; break;
	default: require_once 'templates/'.TEMPLATE.'/404.php';
}

require_once 'templates/'.TEMPLATE.'/footer.php';
?>
