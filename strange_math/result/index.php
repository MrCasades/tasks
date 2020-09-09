<?php
//Загрузка функций
include 'functions.html.php';

if (isset ($_GET['add']))
{
	//Данные для заголовка
	
	$title = 'Вычеслена позиция числа';//Данные тега <title>
	$headMain = 'Позиция искомого числа';
	$robots = 'noindex, nofollow';
	$stylePath = '../../styles.css';
	
	//Генерация массива "странной математики"
	$n = $_POST['n'];
	$value = (int)$_POST['ins_data'];
	
	for ($i = 1; $i <= $n; $i++)
	{
		$strangeMathArr[] = (string)$i.' ';
	}
	
	//Сортировка массива по правилам "Странной математики"
	quickSortArr($strangeMathArr);
	
	//Вывод ошибки
	if(($_POST['ins_data'] < 1) || ($_POST['ins_data'] > $n) || ($_POST['ins_data'] == ''))
	{
		//Данные для заголовка
		$title = 'Ошибка';//Данные тега <title>
		$headMain = 'Ошибка';
		$robots = 'noindex, nofollow';
		$stylePath = '../../styles.css';
		
		$error = '<p>Вы ввели некорректные данные.</p>';
	 
		include 'error.html.php';
		exit();
	}
	
	$result = array_search($value, $strangeMathArr) + 1;
	
	include 'result.html.php';
}