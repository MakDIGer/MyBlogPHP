<?php

/*
 * Персональный блог Макарина Николая
 * Файл: templates/default/acp/myprojects.php
 */


?>
	</div>
					<div class="8u$ 12u$(medium) important(medium)">
						<header class="major">
							<h2>Мои проекты</h2>
							<?php if (!isset($id_projects)) { ?><p><a href="acp_addprojects.html" class="button special fit small">Добавить</a></p><?php } ?>
						</header>
				<?php if (!isset($id_projects)) { ?>
						<!-- Table -->
							<section>
								<div class="table-wrapper">
									<table>
										<thead>
											<tr>
												<th>Название проекта</th>
												<th>Описание</th>
												<th>Текущая версия</th>
												<th>Поддержка</th>
												<th></th>
											</tr>
										</thead>
										<tbody>
											<?php while ($row = mysql_fetch_assoc($data_db)) { ?>
											<tr>
												<td><a href="myprojects-projects<?php echo $row['id_project']; ?>.html"><?php echo $row['title_project']; ?></a></td>
												<td><?php echo $row['desc_project']; ?></td>
												<td><?php echo $row['version_project']; ?></td>
												<td><?php echo $row['support_project']; ?></td>
												<td><a href="acp_myprojects-projects<?php echo $row['id_project']; ?>.html">Изменить</a><br /><a href="acp_myprojects-del<?php echo $row['id_project']; ?>.html">Удалить</a></td>
											</tr>	
											<?php } ?>																				
										</tbody>
									</table>
								</div>
								<p><?php
								if ($page_projects > 1) 
								{
									echo "<a href=acp_myprojects-"; echo $page_projects-1; echo ".html"; echo ">Назад</a> | ";
								}
								if (!isset($id_projects)) echo $page_projects; 
								if ($page_projects < $pages_projects) 
								{ 
									echo " | <a href=acp_myprojects-"; echo $page_projects+1; echo ".html"; echo ">Вперёд</a>";
								} ?>
								</p>
							</section>
				<?php } else { ?>
						<!-- Form -->
							<section>
								<form name="edit_news" method="post" action="acp_editnews.html">
									<div class="row uniform 50%">
										<div class="6u 12u$(xsmall)">
											<input type="text" name="id_post" id="id_post" value="<?php echo $row['id_post']; ?>" />
										</div>
										<div class="6u 12u$(xsmall)">
											<input type="text" name="title_post" id="title_post" value="<?php echo $row['title_post']; ?>" />
										</div>
										<div class="12u$">
											<textarea name="desc_post" id="desc_post" rows="6"><?php echo $row['desc_post']; ?></textarea>
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
