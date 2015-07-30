<?php

/*
 * Персональный блог Макарина Николая
 * Файл: systems/acp/editnews.php
 */

if (isset($_POST['title_post']) and isset($_POST['desc_post']) and isset($_POST['text_post']) and isset($_POST['id_post'])) {
	$title_post = htmlspecialchars($_POST['title_post']);
	$desc_post = htmlspecialchars($_POST['desc_post']);
	$text_post = htmlspecialchars($_POST['text_post']);
	$id_post = htmlspecialchars($_POST['id_post']);
	if (!is_numeric($id_post)) {
		$resultat = "Ошибка, новость не отредактирована";
	} else {
	ask_database("UPDATE my_news SET title_post='".$title_post."', desc_post='".$desc_post."', text_post='".$text_post."' WHERE id_post='".$id_post."'");
	$resultat = 'Новость успешно отредактирована';
	}
}
?>
