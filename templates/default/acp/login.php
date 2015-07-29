<?php

/*
 * Персональный блог Макарина Николая
 * Файл: templates/default/acp/login.php
 */


?>

			<!-- Banner -->
				<section id="banner">
					<div class="content">
						<header>
							<h2 align="center">Авторизация</h2>
							<p><?php if (isset($_POST['email'])) echo $resultat; if (!check_auth()) { ?></p>
							<!-- Form -->
							<section align="center">
								<form name="auth_form" method="post" action="acp_login.html">
									<div class="row uniform 50%">
										<div class="12u$">
											<input type="email" name="email" id="email" value="" placeholder="Email" />
										</div>
										<div class="12u$">
											<input type="password" name="pass" id="pass" value="" placeholder="Пароль" />
										</div>
										<div class="12u$">
											<ul class="actions">
												<li><input type="submit" value="Отправить сообщение" class="special" /></li>
												<li><input type="reset" value="Очистить" /></li>
											</ul>
										</div>
									</div>
								</form>
							</section>
							<?php } else header( 'Refresh: 5; url=acp_main.html' ); ?>
						</header>
					</div>
					<a href="acp_main.html" class="goto-next scrolly">Переход на главную</a>
				</section>
