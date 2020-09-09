<?php 
/*Загрузка header*/
include_once '../header.inc.php';?>

	<div class = "maincont_for_view">
	 <div class = "post" align="center">
	   <p><em>Данная статья обрезана до 200 знаков, последние 3 слова сделаны ссылкой на полную версию.</em> </p>
		<p><?php echo $articlePreview;?></p>
	 </div>	 
	</div>

<?php 
/*Загрузка footer*/
include_once '../footer.inc.php';?>