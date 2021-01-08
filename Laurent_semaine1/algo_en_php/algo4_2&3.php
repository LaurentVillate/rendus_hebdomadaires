<?php

$localtime = localtime( );
$seconde = $localtime[0];
$minute = $localtime[1];
$heure = $localtime[2];

print_r($heure."h".($minute+1)."mn");
// Affiche l'heure qu'il est une minute plus tard. Exercice 4.2 et 4.3 (qui applique le même principe aux secondes)//
?>


