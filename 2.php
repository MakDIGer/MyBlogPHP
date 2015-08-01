<?php

/*
 * Персональный блог Макарина Николая
 * Файл: install/2.php
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

function add_bd()
{
	//фнукция заливки базы
}

if (isset($_POST['db_host']) and isset($_POST['db_user']) and isset($_POST['db_pass']) and isset($_POST['db_name'])) {
	/*$text = "define('DB_HOST','".htmlspecialchars($_POST['db_host'])."')\n";
	$text. = "define('DB_USER','".htmlspecialchars($_POST['db_user'])."')\n";
	$text. = "define('DB_PASS','".htmlspecialchars($_POST['db_pass'])."')\n";
	$text. = "define('DB_NAME','".htmlspecialchars($_POST['db_name'])."')\n";
	
	$filename = 'systems/config2.php';
	if (!file_exists($filename)) {
		$fo = fopen($filename,"w");
		fwrite($fo,$text);
		fclose($fo);
	} else show_error('Ошибка!<br />Файл конфигурации уже существует!');*/
} else show_error('Ошибка!<br />Не заполнены необходимые поля!');

?>
			<!-- Banner -->
				<section id="banner">
					<div class="content">
						<header>
							<h2>Установка персонального блога</h2>
							<p>Проверка</p>
						</header>
					</div>
					<a href="install.php?page=1" class="goto-next scrolly">1 шаг</a>
				</section>
