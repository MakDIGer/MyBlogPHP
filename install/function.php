<?php

/*
 * Персональный блог Макарина Николая
 * Файл: install/function.php
 */

function show_error($resultat)
{ 	?>
				<!-- Banner -->
				<section id="banner">
					<div class="content">
						<header>
							<h2>Установка персонального блога</h2>
							<p><?php echo $resultat; header( 'Refresh: 5; url=install.php?page=1' );?></p>
						</header>
					</div>
					<a href="install.php?page=1" class="goto-next scrolly">1 шаг</a>
				</section>
	<?php
}

function ask_database($query)
{
	// соединяемся с сервером базы данных
    $connect_db = mysql_connect(DB_HOST, DB_USER, DB_PASS)
    or die("Could not connect: " . mysql_error());
    
    // подключаемся к базе данных
    mysql_select_db(DB_NAME, $connect_db)
    or die("Could not select DB: " . mysql_error());
	mysql_query("SET NAMES utf8");
	
	// Выполняем SQL-запрос
	$data_db = mysql_query($query) or die('Запрос не удался: ' . mysql_error());
	return $data_db;
}

?>