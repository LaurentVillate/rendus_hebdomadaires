<?php
$date = new DateTime();
$date_fin = new DateTime("2021/07/07");
echo "jour présent: " .$date->format("z");
echo "\njour fin: " .$date_fin->format("z");
$today = $date->format("z");
$end = $date_fin->format("z");

echo "\nIl reste "  .($end - $today) ." jours";

/*calcul du nbre de jours restant dans la formation.
Récupération du jour présent et jour de fin avec DateTime et format("z). */
?>

