<?php

/*
 * Персональный блог Макарина Николая
 * Файл: templates/default/head.php
 */

?>

<!DOCTYPE HTML>
<!--
	Работает на системе Макарина Николая
	Версия 0.77 Beta
	Шаблон взят с сайта HTML5 UP
	html5up.net | @n33co
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html lang="ru">
	<head>
		<title><?php echo SITE_NAME; ?></title>
		<base href="<?php echo SERVER_DOMAIN; ?>"> 
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="/assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="/assets/css/main.css" />
		<!--[if lte IE 9]><link rel="stylesheet" href="/assets/css/ie9.css" /><![endif]-->
		<!--[if lte IE 8]><link rel="stylesheet" href="/assets/css/ie8.css" /><![endif]-->
		<?php if ($page == 'main') { ?><script src="/assets/js/check_form.js"></script><?php } ?>
	</head>
	<body class="landing">
		<div id="page-wrapper">

			<!-- Header -->
				<header id="header">
					<h1 id="logo"><a href="main.html">Персональный блог</a></h1>
					<nav id="nav">
						<ul>
							<li><a href="main.html">Главная</a></li>
							<li><a href="mynews.html">Мои новости</a></li>
							<li><a href="myprojects.html">Мои проекты</a></li>
							<li><a href="main.html#five" class="button special">Написать мне</a></li>
						</ul>
					</nav>
				</header>
