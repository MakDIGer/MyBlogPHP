<?php

/*
 * Персональный блог Макарина Николая
 * Файл: templates/default/myprojects.php
 */

?>

<!-- Main -->
				<div id="main" class="wrapper style1">
					<div class="container">
						<header class="major">
							<h2>Мои проекты</h2>
							<p></p>
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
												<th>Дата последнего обновления</th>
											</tr>
										</thead>
										<tbody>
											<?php while ($row = mysql_fetch_assoc($data_db)) { ?>
											<tr>
												<td><a href="myprojects-projects<?php echo $row['id_project']; ?>.html"><?php echo $row['title_project']; ?></a></td>
												<td><?php echo $row['desc_project']; ?></td>
												<td><?php echo $row['version_project']; ?></td>
												<td><?php echo $row['support_project']; ?></td>
												<td><?php echo $row['date_lst_upd_project']; ?></td>
											</tr>	
											<?php } ?>																				
										</tbody>
									</table>
								</div>
								<p><?php
								if ($page_projects > 1) 
								{
									echo "<a href=myprojects-"; echo $page_projects-1; echo ".html"; echo ">Назад</a> | ";
								}
								if (!isset($id_projects)) echo $page_projects; 
								if ($page_projects < $pages_projects) 
								{ 
									echo " | <a href=myprojects-"; echo $page_projects+1; echo ".html"; echo ">Вперёд</a>";
								} ?>
								</p>
							</section>
				<?php } else { ?>
						<!-- Text -->
							<section>
								<?php while ($row = mysql_fetch_assoc($data_db)) { ?>
								<header>
									<h3><?php echo $row['title_project']; ?></h3>
									<p>Язык программирования: <?php echo $row['lang_project']; ?> | Версия проекта: <?php echo $row['version_project']; ?> | Последнее обновление: <?php echo $row['date_lst_upd_project']; ?></p>
								</header>
								<p><?php echo $row['description_project']; ?> </p>
								<p>Дата выпуска: <?php echo $row['date_rls_project']; ?> | Поддержка: <?php echo $row['support_project']; ?></p>
								<?php } ?>
							</section>
							<?php } ?>
					</div>
				</div>
