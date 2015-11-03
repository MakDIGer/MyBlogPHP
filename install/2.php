<?php

/*
 * Персональный блог Макарина Николая
 * Файл: install/2.php
 */

function add_bd()
{
	ask_database("CREATE TABLE `my_news` (
  `id_post` int(10) NOT NULL AUTO_INCREMENT,
  `title_post` varchar(255) CHARACTER SET utf8 NOT NULL,
  `date_post` varchar(20) CHARACTER SET utf8 NOT NULL,
  `desc_post` varchar(255) CHARACTER SET utf8 NOT NULL,
  `text_post` text CHARACTER SET utf8,
  PRIMARY KEY (`id_post`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13");
	ask_database("CREATE TABLE `my_projects` (
  `id_project` int(11) NOT NULL AUTO_INCREMENT,
  `title_project` varchar(128) CHARACTER SET utf8 NOT NULL,
  `desc_project` varchar(255) CHARACTER SET utf8 NOT NULL,
  `description_project` text CHARACTER SET utf8 NOT NULL,
  `lang_project` varchar(32) CHARACTER SET utf8 NOT NULL,
  `version_project` varchar(32) CHARACTER SET utf8 NOT NULL,
  `support_project` varchar(3) CHARACTER SET utf8 NOT NULL,
  `date_rls_project` varchar(16) CHARACTER SET utf8 NOT NULL,
  `date_lst_upd_project` varchar(16) CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`id_project`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2");
	ask_database("CREATE TABLE `settings` (
  `site_name` varchar(128) CHARACTER SET utf8 NOT NULL,
  `site_domain` varchar(64) CHARACTER SET utf8 NOT NULL,
  `site_template` varchar(32) CHARACTER SET utf8 NOT NULL,
  `site_visits` int(16) NOT NULL,
  `site_uniq_visits` int(8) NOT NULL,
  `page_posts` int(2) NOT NULL,
  `site_email` varchar(64) CHARACTER SET utf8 NOT NULL,
  `site_email_pass` varchar(64) CHARACTER SET utf8 NOT NULL,
  `site_email_name` varchar(32) CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`site_name`)
) ENGINE=MyISAM DEFAULT CHARSET=cp1251");
	ask_database("CREATE TABLE `users` (
  `user_id` int(4) unsigned NOT NULL AUTO_INCREMENT,
  `user_name` varchar(30) CHARACTER SET utf8 NOT NULL,
  `user_pass` varchar(32) CHARACTER SET utf8 NOT NULL,
  `user_email` varchar(32) CHARACTER SET utf8 NOT NULL,
  `user_hash` varchar(32) CHARACTER SET utf8 NOT NULL,
  `user_ip` varchar(32) CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=cp1251 AUTO_INCREMENT=2");

	$date_news = date(d).".".date(m).".".date(Y);
	ask_database("INSERT INTO `my_news` (`id_post`, `title_post`, `date_post`, `desc_post`, `text_post`) VALUES
('1', 'Первая новость', '".$date_news."', 'Описание первое новости.', 'Полный текст первой новости.')");
	ask_database("INSERT INTO `my_projects` (`id_project`, `title_project`, `desc_project`, `description_project`, `lang_project`, `version_project`, `support_project`, `date_rls_project`, `date_lst_upd_project`) VALUES
('1', 'Заголовок первого проекта', 'Короткое описание первого проекта', 'Полное описание первого проекта. Полное описание первого проекта. Полное описание первого проекта. Полное описание первого проекта. Полное описание первого проекта. Полное описание первого проекта. Полное описание первого проекта. Полное описание первого проекта. Полное описание первого проекта. Полное описание первого проекта. Полное описание первого проекта. Полное описание первого проекта. Полное описание первого проекта. ', 'С++', '1.10', 'ДА', '10 август 2015', '11 сентябрь 2015')");
}

if (isset($_POST['db_host']) and isset($_POST['db_user']) and isset($_POST['db_pass']) and isset($_POST['db_name'])) {
	if (substr(sprintf('%o', fileperms('systems')), -4) == '0777') {
		$text = "<?php\n";
		$text .= "define('DB_HOST','".htmlspecialchars($_POST['db_host'])."');\n";
		$text .= "define('DB_USER','".htmlspecialchars($_POST['db_user'])."');\n";
		$text .= "define('DB_PASS','".htmlspecialchars($_POST['db_pass'])."');\n";
		$text .= "define('DB_NAME','".htmlspecialchars($_POST['db_name'])."');\n";
		$text .= "?>";
	
		$filename = 'systems/config.php';
		if (!file_exists($filename)) {
			$fo = fopen($filename,"w");
			fwrite($fo,$text);
			fclose($fo);

			include_once $filename;
			add_bd();
		} else show_error('Ошибка!<br />Файл конфигурации уже существует!');
	} else show_error('Ошибка. Права на каталог systems должны быть 777');
} else show_error('Ошибка!<br />Не заполнены необходимые поля!');

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
