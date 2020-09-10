<?php 
/*Загрузка header*/
include_once '../../header.inc.php';?>

	<div class = "maincont_for_view">
	 <div class = "post" align="center">
	  <h3>Результат поиска.</h3>
		<p> Позиция выбранного числа <?php echo $val;?> в заданной последовательности "странной математики" - <?php echo $result;?> из <?php echo $n;?> значений!</p>
		<div align="center"><button onclick="history.back();">Ещё раз?</button></div>
	 </div>
	 <div class = "post" align="center">
	  <h3>Заданный массив.</h3>
		<table>
		<?php foreach ($strangeMathArr as $key => $value): ?>
				
					<?php $pointer = $result == $key + 1 ? 'style="color: red"' : ''; //Выделение найденного значения красным?>
					
						<tr><td align="left"><span <?php echo $pointer;?>><?php echo 'Ключ ['.($key + 1).']';?></span></td><td align="left"><span <?php echo $pointer;?>><?php echo 'Значение '.$value;?></span></td></tr>
							
		 <?php endforeach; ?>
		</table>
	 </div>	
	</div>

<?php 
/*Загрузка footer*/
include_once '../../footer.inc.php';?>