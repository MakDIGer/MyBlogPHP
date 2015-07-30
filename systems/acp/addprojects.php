<?php

/*
 * Персональный блог Макарина Николая
 * Файл: systems/acp/addprojects.php
 */

if (isset($_POST['title_project']) and isset($_POST['desc_project']) and isset($_POST['description_project']) and isset($_POST['lang_project']) and isset($_POST['version_project']) and isset($_POST['support_project']) and isset($_POST['date_rls_project']) and isset($_POST['date_lst_upd_project'])) {
	$title_post = htmlspecialchars($_POST['title_post']);
	$desc_post = htmlspecialchars($_POST['desc_post']);
	$text_post = htmlspecialchars($_POST['text_post']);
	$date_post = date(d).".".date(m).".".date(Y);
	
	ask_database("INSERT INTO my_news (title_post, date_post, desc_post, text_post) VALUE ('".$title_post."','".$date_post."','".$desc_post."','".$text_post."')");
	$resultat = 'Проект успешно добавлен';
}
?>
