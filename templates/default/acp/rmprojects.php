<?php

/*
 * Персональный блог Макарина Николая
 * Файл: templates/default/acp/rmprojects.php
 */
 
?>
			<!-- Banner -->
				<section id="banner">
					<div class="content">
						<header>
							<h2>Удаление проекта!</h2>
							<p><?php echo $resultat; ?><br />
							Переадресация страницы через 5 секунд.</p>
						</header>
						<?php header( 'Refresh: 5; url=acp_myprojects.html' ); ?>
					</div>
					<a href="acp_mynews.html" class="goto-next scrolly">Вернуться назад</a>
				</section>
