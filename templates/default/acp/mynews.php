<?php

/*
 * Персональный блог Макарина Николая
 * Файл: templates/default/acp/mynews.php
 */
 
?>

	</div>
					<div class="8u$ 12u$(medium) important(medium)">

						<header class="major">
							<h2>Мои новости</h2>
							<?php if (!isset($id_news)) { ?><p><a href="acp_addnews.html" class="button special fit small">Добавить</a></p><?php } ?>
						</header>
							<?php if (!isset($id_news)) { ?>
							
														<!-- Text -->
							<section>
								<?php 
									$num_records = mysql_num_rows($data_db);
									if ($num_records < 1) { ?>
								<header>
									<h3>Нет новостей</h3>
								</header>
								<p><?php echo $error_message; ?></p>
									<?php } else { 
										while ($row = mysql_fetch_assoc($data_db)) { ?>
								<header>
									<h3><a href=mynews-news<?php echo $row['id_post']; ?>.html target="_blank"><?php echo $row['title_post']; ?></a> <?php if (!isset($_GET['news'])) { ?>| <a href=acp_mynews-news<?php echo $row['id_post']; ?>.html>Редактировать</a> | <a href=acp_mynews-del<?php echo $row['id_post']; ?>.html>Удалить<a/><?php } ?></h3>
									<p>опубликовано <?php echo $row['date_post']; ?></p>
								</header>
								<p><?php if (isset($id_news)) { echo $row['text_post']; } else { echo $row['desc_post']; } ?></p>
								<hr />
								<?php } } ?>
								<p><?php
								if ($page_news > 1) 
								{
									echo "<a href=acp_mynews-"; echo $page_news-1; echo ".html"; echo ">Назад</a> | ";
								}
								if (!isset($id_news)) echo $page_news; 
								if ($page_news < $pages_news) 
								{ 
									echo " | <a href=acp_mynews-"; echo $page_news+1; echo ".html"; echo ">Вперёд</a>"; 
								}
								?> </p>
								
							</section>	
								
							<?php } else { $row = mysql_fetch_assoc($data_db); ?> 
								
														<!-- Form -->
							<section>
								<form name="edit_news" method="post" action="acp_editnews.html">
									<div class="row uniform 50%">
										<div class="6u 12u$(xsmall)">
											<input type="text" name="id_post" id="id_post" maxlength="10" value="<?php echo $row['id_post']; ?>" />
										</div>
										<div class="6u 12u$(xsmall)">
											<input type="text" name="title_post" id="title_post" maxlength="255" value="<?php echo $row['title_post']; ?>" />
										</div>
										<div class="12u$">
											<textarea name="desc_post" id="desc_post" maxlength="255" rows="6"><?php echo $row['desc_post']; ?></textarea>
										</div>
										<div class="12u$">
											<textarea name="text_post" id="text_post" rows="6"><?php echo $row['text_post']; ?></textarea>
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
					</div>

							</div>
						</div>
					</div>
				</div>
