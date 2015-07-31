<?php

/*
 * Персональный блог Макарина Николая
 * Файл: systems/acp/rmprojects.php
 */
 
$del = isset($_GET['del']) ? htmlspecialchars($_GET['del']) : '';

if ($del == '' && !is_numeric($del)) {
	$resultat = "Не выбран проект для удаления";
} else {
	ask_database('DELETE FROM my_projects WHERE id_project="'.$del.'"'); 
	$resultat = "Проект успешно удален!"; 
}
?>
