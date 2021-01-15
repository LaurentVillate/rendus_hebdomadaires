<?php
$date = "17/17/2019";

// La fonction explode scinde une string en différents segments rangés dans un tableau. On applique explode à la date, puis le jour, le mois et l'année sont affectés à 3 variables placée dans un list().//

list($dd, $mm, $yyyy) = explode("/", $date);

// La fonction checkdate n'accepte que des entiers, il faut donc convertir les strings $dd, $mm, $yyyy en entier//

$dd = (int) $dd;
$mm = (int) $mm;
$yyyy = (int) $yyyy;


echo $dd."/".$mm."/".$yyyy."\n"; 

/* On vérifie la date par le biais des 3 variables. 
On utilise checkdate(attention: checkdate prendra en arguments lees éléments de la date au format américain). 
Une condition permet d'afficher "date non valide" si nécessaire*/

if(!checkdate($mm, $dd, $yyyy)){
    echo "Date non valide";
}


?>