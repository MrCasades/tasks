<?php

if (isset ($_GET['add']))
{
	//Данные для заголовка
	
	$title = 'Сколько потребуется коммитов?';//Данные тега <title>
	$headMain = 'Сколько потребуется коммитов?';
	$robots = 'noindex, nofollow';
	$stylePath = '../../styles.css';
	
	//Получение данных из формы
	$data[] = explode(' ', $_POST['ins_data']);
	
	//Вывод ошибки
	if(($data == '') || ($data[0][0] == '') || ($data[0][1] == '') || ($data[0][0] < 1) || ($data[0][0] > 1000) || ($data[0][1] < 1) || ($data[0][1] > 1000))
	{
		//Данные для заголовка
		$title = 'Ошибка';//Данные тега <title>
		$headMain = 'Ошибка';
		$robots = 'noindex, nofollow';
		$stylePath = '../../styles.css';
		
		$error = '<p>Вы ввели некорректные данные. Пишите числа через <strong>один</strong> пробел.</p>
	  			  <p>Также вводимое значение должно быть больше 0 и меньше 1000.</p>';
		
		include 'error.html.php';
		exit();
	}
	
	//Получение начального количества эрроров и ворнингов
	$errors = $data[0][0];
	$warnings = $data[0][1];
	
	$commits = 0;//счётчик коммитов
		
	$timer_1 = time();//время начала цикла
	
	while (true)
	{
		//Исправление 1-й ошибки за коммит
		$errors = $errors - 1;
		$errors = $errors + 1;
		
		$commits ++;
		
		//Исправление 1-го ворнинга за коммит
		$warnings = $warnings - 1;
		$warnings = $warnings + 2;
		
		$commits ++;
		
		//Исправление 2-х ворнингов за коммит
		$warnings = $warnings - 2;
		$errors = $errors + 1;
		
		$commits ++;
		
		//Исправление 2-х ошибок за коммит
		$errors = $errors - 2;
		
		$commits ++;
		
		$timer_2 = time();//подсчёт времени цикла
		
		if (($errors == 0) && ($warnings == 0)) 
		{
			$result = 'Код исправлен!';
			break;
		}
		
		elseif ($timer_1+10 < $timer_2)//если решение затянулось
		{
			$commits = -1;
			$result = 'Код нельзя исправить!';
			break;
		}
	}
	
	include 'result.html.php';
}