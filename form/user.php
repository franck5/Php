<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
	<h1>Exo 1 et exo 3</h1>
	<form action="user.php" method="GET">
		<label>Nom</label>
		<input type="text" name="nom">
		<label>Prenom</label>
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
			<label>Nom</label>
			<input type="text" name="nom">
			<label>Prenom</label>
			<input type="text" name="prenom">
			<input type="submit" value="Ok">
		</form>



	<?php 
		$prenom = $_GET['prenom'];
		$nom = $_GET['nom'];
		echo("<center>Bonjour $prenom $nom</center>");
	?>


	<h2>Exo 5</h2>

	<form method="GET" action="user.php">
		<select name="genre" size="1">
			<option>Homme</option>
			<option>Femme</option>
		</select>
		<input type="text" name="nam">
		<input type="text" name="pre">
		<input type="submit" value="valider">
	</form>			

</body>
</html>