<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h2>Exo 1</h2>
	<?php 

		echo $today = date("d/m/Y");

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

	<h2>Exo 6</h2>

	<?php 

		$date1 = "22/06/2017";
		$date2 = "16/05/2016";
  

		list($jour1, $mois1, $annee1) = explode('/', $date1);
		list($jour2, $mois2, $annee2) = explode('/', $date2);
		 

		$timestamp1 = mktime(0,0,0,$mois1,$jour1,$annee1);
		$timestamp2 = mktime(0,0,0,$mois2,$jour2,$annee2);
		$nbJours = abs($timestamp2 - $timestamp1)/86400;
		echo "Nombre de jours : ".$nbJours;

	?>
	<h2>Exo 7</h2>
	<?php
		$number = cal_days_in_month(CAL_GREGORIAN, 2, 2016); // 31
		echo $number;
	?>
	<h2>Exo 8</h2>
	<?php
	echo $today = date("d/m/Y",strtotime('+20 days'));

	?>
	<h2>Exo 9</h2>
	<?php

		echo $today = date("d/m/Y",strtotime('-22 days'));
	?>
	<h2>EXO 10</h2>
	<form>
		<select name="mois">
			<option>Janvier</option>
			<option>Fevrier</option>
			<option>Mars</option>
			<option>Avril</option>
			<option>Mai</option>
			<option>Juin</option>
			<option>Juillet</option>
			<option>Aout</option>
			<option>Septembre</option>
			<option>Octobre</option>
			<option>Decembre</option>
		</select>
		<select name="annee">
			<option>2017</option>
			<option>2016</option>
			<option>2015</option>
			<option>2014</option>
			<option>2013</option>
			<option>2012</option>
			<option>2011</option>
			<option>2010</option>
			<option>2009</option>
			<option>2008</option>
			<option>2007</option>
		</select>
		<input type="submit" name="ok">
	</form>



	


</body>
</html>