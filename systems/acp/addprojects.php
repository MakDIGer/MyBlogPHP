<?php

/*
 * Персональный блог Макарина Николая
 * Файл: systems/acp/addprojects.php
 */

if (isset($_POST['title_project']) and isset($_POST['desc_project']) and isset($_POST['description_project']) and isset($_POST['lang_project']) and isset($_POST['version_project']) and isset($_POST['support_project']) and isset($_POST['date_rls_project']) and isset($_POST['date_lst_upd_project'])) {
	$title_project = htmlspecialchars($_POST['title_project']);
	$desc_project = htmlspecialchars($_POST['desc_project']);
	$description_project = htmlspecialchars($_POST['description_project']);
	$lang_project = htmlspecialchars($_POST['lang_project']);
	$version_project = htmlspecialchars($_POST['version_project']);
	$support_project = htmlspecialchars($_POST['support_project']);
	$date_rls_project = htmlspecialchars($_POST['date_rls_project']);
	$keywords = htmlspecialchars($_POST['keywords']);
	$date_lst_upd_project = htmlspecialchars($_POST['date_lst_upd_project']);
	
	ask_database("INSERT INTO my_projects (title_project, desc_project, description_project, lang_project, version_project, support_project, date_rls_project, date_lst_upd_project, keywords) VALUE ('".$title_project."','".$desc_project."','".$description_project."','".$lang_project."','".$version_project."','".$support_project."','".$date_rls_project."','".$date_lst_upd_project."','".$keywords."')");
	$resultat = 'Проект успешно добавлен';
}
?>
