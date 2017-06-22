<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<a href="recup.php">Go</a>
	<h2>Exo1</h2>
	<?php
 
		echo $_SERVER['HTTP_USER_AGENT'] ;
 
	?>
	<h2>Exo 1.2</h2>

	<?php 
		echo $_SERVER['REMOTE_ADDR']; 
	?> 
	<h2>Exo 1.3</h2>
	<?php

		echo $_SERVER['SERVER_NAME'];
	?>

	<h2>Exo 2</h2>

	<?php 
		session_start();
		$_SESSION['Nom'] = 'Dubech';
		$_SESSION['Prenom'] = 'Franck';
		$_SESSION['Age'] = 23;



	?>
</body>
</html>