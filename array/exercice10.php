<?php 
	$Departments = array(
 
      02 => 'Aisne', 
      59 => 'Nord', 
      60 => 'Oise', 
      62 => 'Pas-de-Calais',
      80 => 'Somme '
  );
	foreach($Departments as $cle=>$valeur) 
    { 
    echo "Le département". " ".$valeur." "."a le numéro"." ".$cle.'<br>'; 
    }

?>