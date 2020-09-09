<?php
//Быстрая сортировка
function quickSortArr(&$array) 
{
	$left = 0;
	$right = count($array) - 1;

	mySort($array, $left, $right);
}

//Функция, непосредственно производящая сортировку.

function mySort(&$array, $left, $right) 
{

	//Создаем копии пришедших переменных, с которыми будем манипулировать в дальнейшем.
	$l = $left;
	$r = $right;

	//Вычисляем 'центр', на который будем опираться. Берем значение ~центральной ячейки массива.
	$center = $array[(int)($left + $right) / 2];

	//Цикл, начинающий саму сортировку
	do 
	{
		//Ищем значения больше 'центра'
		while ($array[$r] > $center) 
		{
			$r--;
		}

		//Ищем значения меньше 'центра'
		while ($array[$l] < $center) 
		{
			$l++;
		}

		//После прохода циклов проверяем счетчики циклов
		if ($l <= $r) 
		{
			//И если условие true, то меняем ячейки друг с другом.
			list($array[$r], $array[$l]) = array($array[$l], $array[$r]);

			//И переводим счетчики на следующий элементы
			$l++;
			$r--;
		}	
	} 
	//Повторяем цикл, если true
	while ($l <= $r);

	//Если условие true, совершаем рекурсию
	//Передаем массив, исходное начало и текущий конец
	if ($r > $left) 
	{
		mySort($array, $left, $r);
	}

	//Если условие true, совершаем рекурсию
	//Передаем массив, текущие начало и конец
	if ($l < $right) 
	{
		mySort($array, $l, $right);
	}
}