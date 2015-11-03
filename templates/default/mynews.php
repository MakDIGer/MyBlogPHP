<?php

/*
 * Персональный блог Макарина Николая
 * Файл: templates/default/mynews.php
 */
 
 ?>

<!-- Main -->
				<div id="main" class="wrapper style1">
					<div class="container">
						<header class="major">
							<h2>Мои новости</h2>
							<p></p>
						</header>

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
									<h3><a href=mynews-news<?php echo $row['id_post']; ?>.html><?php echo $row['title_post']; ?></a></h3>
									<p>опубликовано <?php echo $row['date_post']; ?></p>
								</header>
								<p><?php if (isset($id_news)) { echo $row['text_post']; } else { echo $row['desc_post']; } ?></p>
								<hr />
								<?php } } ?>
								<p><?php
								if ($page_news > 1) 
								{
									echo "<a href=mynews-"; echo $page_news-1; echo ".html"; echo ">Назад</a> | ";
								}
								if (!isset($id_news)) echo $page_news; 
								if ($page_news < $pages_news) 
								{ 
									echo " | <a href=mynews-"; echo $page_news+1; echo ".html"; echo ">Вперёд</a>"; 
								}
								?> </p>
								
							</section>
					</div>
				</div>
