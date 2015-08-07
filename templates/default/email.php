<?php

/*
 * Персональный блог Макарина Николая
 * Файл: templates/default/email.php
 */

?>

			<!-- Banner -->
				<section id="banner">
					<div class="content">
						<header>
							<h2>Отправка сообщения</h2>
							<p><?php echo $resultat; ?></p>
							<?php header( 'Refresh: 5; url=main.html' ); ?>
						</header>
					</div>
					<a href="main.html" class="goto-next scrolly">Вернуться назад</a>
				</section>
