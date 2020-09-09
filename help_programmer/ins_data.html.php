<?php 
/*Загрузка header*/
include_once '../header.inc.php';?>

	<div class = "maincont_for_view">
	 <div class = "post">
	  <h3>Количество эрроров и ворнингов в программе.</h3>
	  <div aligin = "justify">
	   <p>Введите в поле <strong>через пробел</strong> количество эрроров (N) и количество ворнингов (M). Если в течении 10 секунд решение не будет найдено, значит код нельзя исправить. Вводимые значения должны быть больше 0 и меньше 1001!</p>
	  </div>  
		<strong><p id = "incorr" style="color: red"></p></strong>
		<div align="center">	
		<form action = "result/?add" method = "post">
			<input type = "text" name = "ins_data" placeholder = "N M" id = "ins_data">
			<input type = "submit" value = "Исправить код" id = "add">
		</form>
		</div>	
	 </div>	 
	</div>

<?php 
/*Загрузка footer*/
include_once '../footer.inc.php';?>