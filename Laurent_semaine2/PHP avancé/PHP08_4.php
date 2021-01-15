<?php

$today = time();
$end = mktime(0, 0, 0, 7, 7, 2021);
$jours = ($end - $today)/86400;



echo $today. "\n" .$end. "\n" .round($jours); 

/*calcul du nbre de jours restant dans la formation.
Récupération du jour présent et jour de fin, exprimés en nombre de secondes écoulés depuis 01/01/1970.
Calcul de la différence et division par le nombre de secondes dans une journée */


?>