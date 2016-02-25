<?php

/*
 * Персональный блог Макарина Николая
 * Файл: systems/acp/addnews.php
 */

if (isset($_POST['title_post']) and isset($_POST['desc_post']) and isset($_POST['text_post']) and isset($_POST['keywords'])) {
	$title_post = htmlspecialchars($_POST['title_post']);
	$desc_post = htmlspecialchars($_POST['desc_post']);
	$text_post = htmlspecialchars($_POST['text_post']);
	$keywords = htmlspecialchars($_POST['keywords']);
	$date_post = date(d).".".date(m).".".date(Y);
	
	ask_database("INSERT INTO my_news (title_post, date_post, desc_post, text_post, keywords) VALUE ('".$title_post."','".$date_post."','".$desc_post."','".$text_post."','".$keywords."')");
	$resultat = 'Новость успешно добавлена';
}
?>
