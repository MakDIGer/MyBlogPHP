<?php

/*
 * Персональный блог Макарина Николая
 * Файл: templates/default/404.php
 */

?>

			<!-- Banner -->
				<section id="banner">
					<div class="content">
						<header>
							<h2>Ошибка 404</h2>
							<p>Извините,<br />
							Такой страницы не существует!</p>
							<?php header( 'Refresh: 5; url=main.html' ); ?>
						</header>
					</div>
					<a href="main.html" class="goto-next scrolly">Вернуться назад</a>
				</section>
