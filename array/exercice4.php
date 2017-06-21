<?php 

	$mois = array('Janvier','Février','Mars','Avril', 'Mai', 'Juin', 'Juillet', 'Aout', 'Septembre', 'Octobre', 'Novembre', 'Décembre');
	array_splice($mois, 7, 0, 'Août');
	echo $mois[7];

?>