<?php
// Date du jour en France //
date_default_timezone_set("Europe/Paris");
$date = new DateTime();

// Réécriture de au format français: jj mm an//
setlocale(LC_TIME, "fr_FR");
$date_FR = strftime("\n%d %m %Y");
echo "Date d'aujourd'hui: $date_FR \n";

// On applique la fonction explode à la date, puis le jour, le mois et l'année sont affectés à 3 variables placée dans un list().//
list($dd, $mm, $yyyy) = explode(" ", $date_FR);

//On ajoute 1 au mois en cours //
$mm = $mm + 1;
echo "Date d'aujourd'hui + 1 mois: $dd $mm $yyyy \n"; 


// AUTRE METHODE: utilisation de la fonction date_add.//
$date_2 = new DateTime(); 
print_r($date_2);
print_r(date_add($date_2, date_interval_create_from_date_string("1 month")));





?>


