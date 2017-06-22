<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
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

	<a href="recup.php">Go</a>
	<?php 
		session_start();
		$_SESSION['Nom'] = 'Dubech';
		$_SESSION['Prenom'] = 'Franck';
		$_SESSION['Age'] = 23;

	?>
	<h2>Exo 3</h2>
	<form action="#" method="POST">
		<label for="login">Login</label>
		<input type="text" name="login">
		<label for="pass">Mot de passe</label>
		<input type="password" name="pass">
		<input type="submit" value="Envoyer">

	</form>

	<?php 
		if(isset($_POST['login'])){

		    setcookie('login', $_POST['login'], time() + 365*24*3600, null, null, false, true);!
		    header("Location: index.php");
		}if(isset($_POST['pass'])){

		    setcookie('pass', $_POST['pass'], time() + 365*24*3600, null, null, false, true);!
		    header("Location: index.php");
		}

	?>
</body>
</html>