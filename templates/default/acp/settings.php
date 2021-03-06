<?php

/*
 * Персональный блог Макарина Николая
 * Файл: templates/default/acp/settings.php
 */

?>
							</div>
							<div class="8u$ 12u$(medium) important(medium)">

						<header class="major">
							<h2>Настройки портала</h2>
							<p></p>
						</header>
							<?php if (isset($_POST['site_name'])) { echo $resultat."<br />Переадресация через 5 секунд."; header( 'Refresh: 5; url=acp_settings.html' ); } else { ?>
												<!-- Form -->
							<section>
								<form name="set_settings" method="post" action="acp_settings.html">
									<div class="row uniform 50%">
										<div class="6u 12u$(xsmall)">
											Заголовок сайта: <input type="text" name="site_name" id="site_name" maxlength="128" value="<?php echo $settings['site_name'] ?>" />
										</div>
										<div class="6u 12u$(xsmall)">
											Основной домен: <input type="text" name="site_domain" id="site_domain" maxlength="64" value="<?php echo $settings['site_domain'] ?>" />
										</div>
										<div class="6u 12u$(xsmall)">
											Текущий шаблон: <input type="text" name="site_template" id="site_template" maxlength="32" value="<?php echo $settings['site_template'] ?>" />
										</div>
										<div class="6u 12u$(xsmall)">
											Колличество просмотров: <input type="text" name="site_visits" id="site_visits" maxlength="16" value="<?php echo $settings['site_visits'] ?>" />
										</div>
										<div class="6u 12u$(xsmall)">
											Колличество уникальных посетителей: <input type="text" name="site_uniq_visits" id="site_uniq_visits" maxlength="8" value="<?php echo $settings['site_uniq_visits'] ?>" />
										</div>
										<div class="6u 12u$(xsmall)">
											Колличество постов на страницу: <input type="text" name="page_posts" id="page_posts" maxlength="2" value="<?php echo $settings['page_posts'] ?>" />
										</div>
										<div class="6u 12u$(xsmall)">
											Email портала: <input type="text" name="site_email" id="site_email" maxlength="64" value="<?php echo $settings['site_email'] ?>" />
										</div>
										<div class="6u 12u$(xsmall)">
											Пароль к Email'у портала: <input type="password" name="site_email_pass" id="site_email_pass" maxlength="64" value="<?php echo $settings['site_email_pass'] ?>" />
										</div>
										<div class="6u 12u$(xsmall)">
											Имя портала в Email: <input type="text" name="site_email_name" id="site_email_name" maxlength="32" value="<?php echo $settings['site_email_name'] ?>" />
										</div>
										<div class="6u 12u$(xsmall)">
											Ключевые слова: <input type="text" name="site_keywords" id="site_keywords" maxlength="32" value="<?php echo $settings['site_keywords'] ?>" />
										</div>
										<div class="12u$">
											<textarea name="site_description" id="site_description" maxlength="255" rows="6"><?php echo $settings['site_description']; ?></textarea>
										</div>
										<div class="12u$">
											<ul class="actions">
												<li><input type="submit" value="Сохранить настройки" class="special" /></li>
											</ul>
										</div>
									</div>
								</form>
							</section>		
							<?php } ?>							
					</div>

							</div>
						</div>
					</div>
				</div>
