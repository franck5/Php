<?php

	function number($nb1, $nb2){
		if ($nb1>$nb2) {
			echo "Le premier nombre est plus grand";
		}elseif ($nb1<$nb2) {

			echo "Le premier nombre est plus petit";
		}elseif ($nb1=$nb2) {
			echo "Les deux nombres sont identiques";
		}
	}

	number(5, 6)

?>