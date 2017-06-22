<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
	<h1>Exo 1 et exo 3</h1>
	<form action="user.php" method="GET">
		<label for="nom">Nom</label>
		<input type="text" name="nom">
		<label for="prenom">Prenom</label>
		<input type="text" name="prenom">
		<input type="submit" value="Ok">
	</form>
	<?php 
		$prenom = $_GET['prenom'];
		$nom = $_GET['nom'];
		echo("<center>Bonjour $prenom $nom</center>");
	?> 
	<h2>Exo 2 et Exo 4</h2>
		<form action="user.php" method="POST">
			<label for="n">Nom</label>
			<input type="text" name="nom">
			<label for="prenom">Prenom</label>
			<input type="text" name="prenom">
			<input type="submit" value="Ok">
		</form>



	<?php 
		$prenom = $_POST['prenom'];
		$nom = $_POST['nom'];
		echo("<center>Bonjour $prenom $nom</center>");
	?>


	<h2>Exo 5 et 6</h2>

	<form method="GET" action="user.php" enctype="multipart/form-data">
		<select name="genre" size="1">
			<option>Homme</option>
			<option>Femme</option>
		</select>
		<label for="nam"></label>
		<input type="text" name="nam">
		<label for="pre"></label>
		<input type="text" name="pre">
		<input type="file" name="fichier" id="fichier" />

		<input type="submit" value="valider">
	</form>
	
	<?php
		$pre = $_GET['pre'];
		$nam = $_GET['nam'];
		$fichier = $_GET['fichier'];
		echo("<center>Nom: $nam Prenom : $pre Fichier : $fichier </center>");


	?>
</body>
</html>