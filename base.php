<html>
	<head>
		<title></title>
		<meta charset="UTF-8">
		<style>
		</style>
	</head>
	<body >
	<a href="?ln=et">eesti keeles</a>
	<a href="?ln=en">English</a>
	<a href="?ln=ru">по русски</a>
		<?php
		if(!isset($_GET['ln'])){$_GET['ln']="ru";}
			include "part_".$_GET['ln'].".php";
			
			print_r($_GET['ln']);
		?>
	</body>
		
</html>