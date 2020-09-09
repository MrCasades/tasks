<?php
	$title = 'Выбор раздела';//Данные тега <title>
	$headMain = 'Выбрать задание';
	$robots = 'noindex, nofollow';
	$stylePath = 'styles.css';
?>

<?php 
/*Загрузка header*/
include_once './header.inc.php';?>

	<div class = "maincont_for_view">
	 <div class = "post" align="center">
		<strong>[<a href = "./open_article">Открыть статью</a>] [<a href = "./help_programmer">Помочь Пете</a>] [<a href = "./strange_math">Странная математика</a>]</strong>
	 </div>	 
	</div>

<?php 
/*Загрузка footer*/
include_once './footer.inc.php';?>