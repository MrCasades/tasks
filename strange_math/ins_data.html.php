<?php 
/*Загрузка header*/
include_once '../header.inc.php';?>

	<div class = "maincont_for_view">
	 <div class = "post">
	  <h3>Сформирована последовательность "странной математики" из <?php echo $n;?> чисел</h3>
	  <div>
	   <p aligin = "center">Введите число, чтобы найти его позицию в последовательности "странной математики!" Массив генерируется автоматически при каждом новом запуске. В нём от 11 до 33 значений!</p>
	  </div>  
		<strong><p id = "incorr" style="color: red"></p></strong>
		<div align="center">	
		<form action = "result/?add" method = "post">
			<input type = "text" name = "ins_data" placeholder = "Число от 1 до <?php echo $n;?>" id = "ins_data">
			<input type = "hidden" name = "n" value = "<?php echo $n;?>" id = "lengarr">
			<input type = "submit" value = "Найти индекс" id = "add">
		</form>
		</div>	
	 </div>	 
	</div>

<?php 
/*Загрузка footer*/
include_once '../footer.inc.php';?>