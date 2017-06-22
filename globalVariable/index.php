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
</body>
</html>