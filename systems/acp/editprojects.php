<?php

/*
 * Персональный блог Макарина Николая
 * Файл: systems/acp/editprojects.php
 */

if (isset($_POST['id_project']) and isset($_POST['title_project']) and isset($_POST['desc_project']) and isset($_POST['description_project']) and isset($_POST['lang_project']) and isset($_POST['version_project']) and isset($_POST['support_project']) and isset($_POST['date_rls_project']) and isset($_POST['date_lst_upd_project'])) {
	$id_project = htmlspecialchars($_POST['id_project']);
	$title_project = htmlspecialchars($_POST['title_project']);
	$desc_project = htmlspecialchars($_POST['desc_project']);
	$description_project = htmlspecialchars($_POST['description_project']);
	$lang_project = htmlspecialchars($_POST['lang_project']);
	$version_project = htmlspecialchars($_POST['version_project']);
	$support_project = htmlspecialchars($_POST['support_project']);
	$date_rls_project = htmlspecialchars($_POST['date_rls_project']);
	$date_lst_upd_project = htmlspecialchars($_POST['date_lst_upd_project']);
	$keywords = htmlspecialchars($_POST['keywords']);
	if (!is_numeric($id_project)) {
		$resultat = "Ошибка, проект не отредактирован";
	} else {
	ask_database("UPDATE my_projects SET title_project='".$title_project."', desc_project='".$desc_project."', description_project='".$description_project."', lang_project='".$lang_project."', version_project='".$version_project."', support_project='".$support_project."', date_rls_project='".$date_rls_project."', date_lst_upd_project='".$date_lst_upd_project."', keywords='".$keywords."' WHERE id_project='".$id_project."'");
	$resultat = 'Проект успешно отредактирован';
	}
}
?>
