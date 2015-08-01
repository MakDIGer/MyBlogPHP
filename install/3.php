<?php

/*
 * Персональный блог Макарина Николая
 * Файл: install/3.php
 */

?>
			<!-- Banner -->
				<section id="banner">
					<div class="content">
						<header>
							<h2>Установка персонального блога</h2>
							<p>
													<!-- Form -->
													<section>
														<form name="settings" method="post" action="install.php?page=3">
															<div class="row uniform 50%">
																<div class="6u 12u$(xsmall)">
																	<input type="text" name="site_name" id="site_name" value="" placeholder="Заголовок портала" />
																</div>
																<div class="6u 12u$(xsmall)">
																	<input type="text" name="site_domain" id="site_domain" value="" placeholder="Основной домен" />
																</div>
																<div class="6u 12u$(xsmall)">
																	<input type="text" name="page_posts" id="page_posts" value="" placeholder="Колличество позиций на страницу" />
																</div>
																<div class="6u 12u$(xsmall)">
																	<input type="email" name="site_email" id="site_email" value="" placeholder="Электронная почта портала" />
																</div>
																<div class="6u 12u$(xsmall)">
																	<input type="text" name="site_email_pass" id="site_email_pass" value="" placeholder="Пароль для отправки Email с портала" />
																</div>
																<div class="6u 12u$(xsmall)">
																	<input type="text" name="site_email_name" id="site_email_name" value="" placeholder="Имя для отправки Email с портала" />
																</div>
																<div class="12u$">
																	<ul class="actions">
																		<li><input type="submit" value="Отправить" class="special" /></li>
																		<li><input type="reset" value="Очистить" /></li>
																	</ul>
																</div>
															</div>
														</form>
													</section>
							</p>
						</header>
					</div>
					<a href="install.php?page=1" class="goto-next scrolly">1 шаг</a>
				</section>