<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h2>Exo 1</h2>
	<?php 

		echo $today = date("d/m/Y");;

	?>
	<h2>Exo 2</h2>
	<?php 

		echo $today = date("d-m-y");;

	?>

	<h2>Exo3</h2>
	<?php
	date_default_timezone_set('Europe/Paris');
	setlocale(LC_TIME, 'fr_FR.utf8','fra');
	echo strftime("%A %d %B %Y");
	?>
	<h2>Exo 4</h2>
	<?php 

	echo time();
	?>

	<h2>Exo 5</h2>

	<?php 
	 
		echo mktime(15, 0, 0, 8, 2, 2016);
	?>
</body>
</html>