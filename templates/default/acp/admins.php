<?php

/*
 * Персональный блог Макарина Николая
 * Файл: templates/default/acp/admins.php
 */

?>
							</div>
							<div class="8u$ 12u$(medium) important(medium)">

						<header class="major">
							<h2>Настройки администратора</h2>
							<p></p>
						</header>
							<?php if (isset($_POST['user_id'])) { echo $resultat."<br />Переадресация через 5 секунд."; header( 'Refresh: 5; url=acp_admins.html' ); } else { ?>
												<!-- Form -->
							<section>
								<form name="set_admins" method="post" action="acp_admins.html">
									<div class="row uniform 50%">
										<div class="6u 12u$(xsmall)">
											User ID: <input type="text" name="user_id" id="user_id" maxlength="4" value="<?php echo $admins['user_id']; ?>" />
										</div>
										<div class="6u 12u$(xsmall)">
											Имя пользователя: <input type="text" name="user_name" id="user_name" maxlength="30" value="<?php echo $admins['user_name']; ?>" />
										</div>
										<div class="6u 12u$(xsmall)">
											Новый пароль: <input type="password" name="user_pass" id="user_pass" maxlength="32" value="" placeholder="xxxxxxxxxxx" />
										</div>
										<div class="6u 12u$(xsmall)">
											Email пользователя: <input type="email" name="user_email" id="user_email" maxlength="32" value="<?php echo $admins['user_email']; ?>" />
										</div>
										<div class="6u 12u$(xsmall)">
											Текущий пароль(если хотите поменять пароль): <input type="password" name="current_pass" id="current_pass" maxlength="32" value="" placeholder="xxxxxxxxxxx" />
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
