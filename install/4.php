<?php

/*
 * Персональный блог Макарина Николая
 * Файл: install/4.php
 */


if (isset($_POST['user_name']) and isset($_POST['user_pass']) and isset($_POST['user_email'])) {
	$user_name = htmlspecialchars($_POST['user_name']);
	$user_pass = md5(md5(htmlspecialchars($_POST['user_pass'])));
	$user_email = htmlspecialchars($_POST['user_email']);

	include 'systems/config.php';
	ask_database("INSERT INTO `users` (`user_id`, `user_name`, `user_pass`, `user_email`, `user_hash`, `user_ip`) VALUES
('1', '".$user_name."', '".$user_pass."', '".$user_email."', '0', '0')");
} else show_error('Ошибка!< br />Не все необходимые поля заполнены');
?>
<!-- Banner -->
				<section id="banner">
					<div class="content">
						<header>
							<h2>Установка персонального блога</h2>
							<p>
							Поздравляем!<br />
							Установка успешно завершена!
							</p>
						</header>
					</div>
					<a href="install.php?page=1" class="goto-next scrolly">1 шаг</a>
				</section>