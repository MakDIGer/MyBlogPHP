<?php

/*
 * Персональный блог Макарина Николая
 * Файл: templates/dafault/acp/addprojects.php
 */

?>
							</div>
							<div class="8u$ 12u$(medium) important(medium)">

						<header class="major">
							<h2>Добавить проект</h2>
							<p></p>
						</header>
							<?php if (isset($_POST['title_project'])) { echo $resultat."<br />Переадресация через 5 секунд."; header( 'Refresh: 5; url=acp_myprojects.html' ); } else { ?>
													<!-- Form -->
							<section>
								<form name="add_project" method="post" action="acp_addprojects.html">
									<div class="row uniform 50%">
										<div class="6u 12u$(xsmall)">
											<input type="text" name="title_project" id="title_post" maxlength="128" value="" placeholder="Заголовок проекта" />
										</div>
										<div class="6u 12u$(xsmall)">
											<input type="text" name="lang_project" id="lang_project" maxlength="32" value="" placeholder="Язык программирования" />
										</div>
										<div class="6u 12u$(xsmall)">
											<input type="text" name="version_project" id="version_project" maxlength="32" value="" placeholder="Версия" />
										</div>
										<div class="6u 12u$(xsmall)">
											<input type="text" name="support_project" id="support_project" maxlength="3" value="" placeholder="Поддержка" />
										</div>
										<div class="6u 12u$(xsmall)">
											<input type="text" name="date_rls_project" id="date_rls_project" maxlength="16" value="" placeholder="Дата выпуска DD месяц YYYY" />
										</div>
										<div class="6u 12u$(xsmall)">
											<input type="text" name="date_lst_upd_project" id="date_lst_upd_project" maxlength="16" value="" placeholder="Дата последнего обновления DD месяц YYYY" />
										</div>
										<div class="12u$">
											<textarea name="desc_project" id="desc_project" maxlength="255" placeholder="Краткое описание проекта" rows="6"></textarea>
										</div>
										<div class="12u$">
											<textarea name="description_project" id="description_project" maxlength="1200" placeholder="Подробное описание проекта" rows="6"></textarea>
										</div>
										<div class="6u 12u$(xsmall)">
											<input type="text" name="keywords" id="keywords" maxlength="255" value="" placeholder="Ключевые слова" />
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
							<?php } ?>
						</p>									
					</div>

							</div>
						</div>
					</div>
				</div>
