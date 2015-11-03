<?php

/*
 * Персональный блог Макарина Николая
 * Файл: systems/myprojects.php
 */
 
if (isset($_GET['project'])) 
{
	$id_projects = htmlspecialchars($_GET['project']);
	if (!is_numeric($id_projects)) $id_projects = 1;
	$page_projects = 1; $pages_projects = 1;
	
	$data_db = ask_database('SELECT * FROM my_projects WHERE id_project='.$id_projects);
	
} else {
	//Определяем текущую страницу
	$page_projects = isset($_GET['page_projects']) ? htmlspecialchars($_GET['page_projects']) : 1;
	if (!is_numeric($page_projects)) $page_projects = 1;
	if ($page_projects<1) $page_projects = 1;

	$num_DB = ask_database('SELECT * FROM my_projects');
	$num_records = mysql_num_rows($num_DB); //колличество записей

	if ($num_records < 1) {  } else {
	$pages_projects = $num_records/PAGE_POSTS;
	$pages_projects = ceil($pages_projects); //колличество страниц

	if ($page_projects > $pages_projects) $page_projects = $pages_projects;

	if ($page_projects == 1) {
		$start_projects = 0;
	} else {
		$start_projects = ($page_projects-1)*PAGE_POSTS;
	}
	$data_db = ask_database('SELECT * FROM my_projects ORDER by id_project DESC LIMIT '.PAGE_POSTS.' OFFSET '.$start_projects);
	}
}
 ?>
