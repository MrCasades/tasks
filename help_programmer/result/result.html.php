<?php 
/*Загрузка header*/
include_once '../../header.inc.php';?>

	<div class = "maincont_for_view">
	 <div class = "post" align="center">
	  <h3>Количество эрроров и ворнингов в программе.</h3>
		<p> Для исправления кода потребуется <?php echo $commits;?> коммитов! <?php echo $result;?></p>
		<div align="center"><button onclick="history.back();">Ещё раз?</button></div>
	 </div>	 
	</div>

<?php 
/*Загрузка footer*/
include_once '../../footer.inc.php';?>