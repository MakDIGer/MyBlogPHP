<?php

/*
 * Персональный блог Макарина Николая
 * Файл: systems/acp/mynews.php
 */

if (isset($_GET['news'])) 
{
	$id_news = htmlspecialchars($_GET['news']);
	if (!is_numeric($id_news)) $id_news = 1;
	$page_news = 1; $pages_news = 1;
	
	$data_db = ask_database('SELECT * FROM my_news WHERE id_post='.$id_news);
	
} else {
	//Определяем текущую страницу
	$page_news = isset($_GET['acp_page_news']) ? htmlspecialchars($_GET['acp_page_news']) : 1;
	if (!is_numeric($page_news)) $page_news = 1;
	if ($page_news<1) $page_news = 1;

	$num_DB = ask_database('SELECT * FROM my_news');
	$num_records = mysql_num_rows($num_DB); //колличество записей

	if ($num_records < 1) { $error_message = "В базе новостей нет"; } else {
	$pages_news = $num_records/PAGE_POSTS;
	$pages_news = ceil($pages_news); //колличество страниц

	if ($page_news > $pages_news) $page_news = $pages_news;

	if ($page_news == 1) {
		$start_news = 0;
	} else {
		$start_news = ($page_news-1)*PAGE_POSTS;
	}
	$data_db = ask_database('SELECT * FROM my_news ORDER by id_post DESC LIMIT '.PAGE_POSTS.' OFFSET '.$start_news);
	}
}

?>
