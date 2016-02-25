<?php

/*
 * Персональный блог Макарина Николая
 * Файл: templates/dafault/acp/addnews.php
 */

?>
							</div>
							<div class="8u$ 12u$(medium) important(medium)">

						<header class="major">
							<h2>Добавить новость</h2>
							<p></p>
						</header>
						<p>
							<?php if (isset($_POST['title_post'])) { echo $resultat."<br />Переадресация через 5 секунд."; header( 'Refresh: 5; url=acp_mynews.html' ); } else { ?>
													<!-- Form -->
							<section>
								<form name="add_news" method="post" action="acp_addnews.html">
									<div class="row uniform 50%">
										<div class="6u 12u$(xsmall)">
											<input type="text" name="title_post" id="title_post" value="" maxlength="255" placeholder="Заголовок" />
										</div>
										<div class="12u$">
											<textarea name="desc_post" id="desc_post" maxlength="255" placeholder="Краткое описание новости" rows="6"></textarea>
										</div>
										<div class="12u$">
											<textarea name="text_post" id="text_post" maxlength="1200" placeholder="Подробное описание новости" rows="6"></textarea>
										</div>
										<div class="6u 12u$(xsmall)">
											<input type="text" name="keywords" id="keywords" value="" maxlength="255" placeholder="Ключевые слова" />
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
