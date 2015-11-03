<?php

/*
 * Персональный блог Макарина Николая
 * Файл: install/1.php
 */

?>

			<!-- Banner -->
				<section id="banner">
					<div class="content">
						<header>
							<h2>Установка персонального блога</h2>
							<p>													<!-- Form -->
							<section>
								<form name="database" method="post" action="install.php?page=2">
									<div class="row uniform 50%">
										<div class="6u 12u$(xsmall)">
											<input type="text" name="db_host" id="db_host" value="" placeholder="Хост базы данных" />
										</div>
										<div class="6u 12u$(xsmall)">
											<input type="text" name="db_user" id="db_user" value="" placeholder="Пользователь базы данных" />
										</div>
										<div class="6u 12u$(xsmall)">
											<input type="text" name="db_pass" id="db_pass" value="" placeholder="Пароль базы данных" />
										</div>
										<div class="6u 12u$(xsmall)">
											<input type="text" name="db_name" id="db_name" value="" placeholder="Имя базы данных" />
										</div>
										<div class="12u$">
											<ul class="actions">
												<li><input type="submit" value="Отправить" class="special" /></li>
												<li><input type="reset" value="Очистить" /></li>
											</ul>
										</div>
									</div>
								</form>
							</section></p>
						</header>
					</div>
					<a href="install.php?page=1" class="goto-next scrolly">1 шаг</a>
				</section>
