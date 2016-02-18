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
				<?php } else { while ($row = mysql_fetch_assoc($data_db)) { ?>
						<!-- Form -->
							<section>
								<form name="editprojects" method="post" action="acp_editprojects.html">
									<div class="row uniform 50%">
										<div class="6u 12u$(xsmall)">
											<input type="text" name="id_project" id="id_project" maxlength="11" value="<?php echo $row['id_project']; ?>" />
										</div>
										<div class="6u 12u$(xsmall)">
											<input type="text" name="title_project" id="title_project" maxlength="128" value="<?php echo $row['title_project']; ?>" />
										</div>
										<div class="12u$">
											<textarea name="desc_project" id="desc_project" maxlength="255" rows="6"><?php echo $row['desc_project']; ?></textarea>
										</div>
										<div class="12u$">
											<textarea name="description_project" id="description_project" rows="6"><?php echo $row['description_project']; ?></textarea>
										</div>
										<div class="6u 12u$(xsmall)">
											<input type="text" name="lang_project" id="lang_project" maxlength="32" value="<?php echo $row['lang_project']; ?>" />
										</div>
										<div class="6u 12u$(xsmall)">
											<input type="text" name="version_project" id="version_project" maxlength="32" value="<?php echo $row['version_project']; ?>" />
										</div>
										<div class="6u 12u$(xsmall)">
											<input type="text" name="support_project" id="support_project" maxlength="3" value="<?php echo $row['support_project']; ?>" />
										</div>
										<div class="6u 12u$(xsmall)">
											<input type="text" name="date_rls_project" id="date_rls_project" maxlength="16" value="<?php echo $row['date_rls_project']; ?>" />
										</div>
										<div class="6u 12u$(xsmall)">
											<input type="text" name="date_lst_upd_project" id="date_lst_upd_project" maxlength="16" value="<?php echo $row['date_lst_upd_project']; ?>" />
										</div>
										<div class="6u 12u$(xsmall)">
											<input type="text" name="keywords" id="keywords" maxlength="255" value="<?php echo $row['keywords']; ?>" />
										</div>
										<div class="12u$">
											<ul class="actions">
												<li><input type="submit" value="Отправить сообщение" class="special" /></li>
											</ul>
										</div>
									</div>
								</form>
							</section>
						
						
							<?php } } ?>
					</div>

							</div>
						</div>
					</div>
				</div>
