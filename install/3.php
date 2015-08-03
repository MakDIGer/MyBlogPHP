<?php

/*
 * Персональный блог Макарина Николая
 * Файл: install/4.php
 */

if (isset($_POST['site_name']) and isset($_POST['site_domain']) and isset($_POST['page_posts']) and isset($_POST['site_email']) and isset($_POST['site_email_pass']) and isset($_POST['site_email_name'])) {
	$site_name = htmlspecialchars($_POST['site_name']);
	$site_domain = htmlspecialchars($_POST['site_domain']);
	if (is_numeric($_POST['page_posts'])) { $page_posts = htmlspecialchars($_POST['page_posts']); } else show_error('Ошибка<br />Колличество страниц на страницу должно быть числом');
	$site_email = htmlspecialchars($_POST['site_email']);
	$site_email_pass = htmlspecialchars($_POST['site_email_pass']);
	$site_email_name = htmlspecialchars($_POST['site_email_name']);

	include 'systems/config.php';
	ask_database("INSERT INTO `settings` (`site_name`, `site_domain`, `site_template`, `site_visits`, `site_uniq_visits`, `page_posts`, `site_email`, `site_email_pass`, `site_email_name`) VALUES
('".$site_name."', '".$site_domain."', 'default', '0', '0', '".$page_posts."', '".$site_email."', '".$site_email_pass."', '".$site_email_name."')");

} else show_error('Ошибка!<br />Не все необходимые поля заполнены');
?>
			<!-- Banner -->
				<section id="banner">
					<div class="content">
						<header>
							<h2>Установка персонального блога</h2>
							<p>
													<!-- Form -->
													<section>
														<form name="users" method="post" action="install.php?page=4">
															<div class="row uniform 50%">
																<div class="6u 12u$(xsmall)">
																	<input type="text" name="user_name" id="user_name" value="" placeholder="Имя администратора портала" />
																</div>
																<div class="6u 12u$(xsmall)">
																	<input type="text" name="user_pass" id="user_pass" value="" placeholder="Пароль к панели администрирования" />
																</div>
																<div class="6u 12u$(xsmall)">
																	<input type="text" name="user_email" id="user_email" value="" placeholder="Email для входа в панель администрирования" />
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