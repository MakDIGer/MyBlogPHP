<?php

/*
 * Персональный блог Макарина Николая
 * Файл: templates/default/acp/main.php
 */

?>
							</div>
							<div class="8u$ 12u$(medium) important(medium)">

						<header class="major">
							<h2>Состояние</h2>
							<p></p>
						</header>
						<p>
							Основной домен: <a href="<?php echo $settings['site_domain']; ?>"><?php echo $settings['site_domain']; ?></a><br />
							Заголовок портала: <?php echo $settings['site_name']; ?><br /><br />
							
							Имя сайта в Email: <?php echo $settings['site_email_name']; ?><br />
							Email портала: <?php echo $settings['site_email']; ?><br /><br />
							
							Текущий шаблон: <?php echo $settings['site_template']; ?><br />
							Новостей в базе: <?php echo NUM_NEWS; ?><br />
							Проектов в базе: <?php echo NUM_PROJECTS; ?><br /><br />
							
							Администратор портала: <?php echo $users['user_name']; ?><br />
							Email Администратора: <?php echo $users['user_email']; ?><br />
							Ваш IP: <?php echo $_SERVER['REMOTE_ADDR']; ?>
						</p>									
					</div>

							</div>
						</div>
					</div>
				</div>
