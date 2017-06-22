<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h2>Exo2</h2>
	<?php 
	session_start();
		echo $_SESSION['Nom'];
		echo $_SESSION['Prenom'];
		echo $_SESSION['Age'];

	?>
	<h2>Exo4</h2>
	<?php
	echo $_COOKIE['login'];
	
	echo $_COOKIE['pass'];
	?>
</body>
</html>


