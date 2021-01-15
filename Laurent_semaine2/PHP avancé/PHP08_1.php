<?php

date_default_timezone_set("Europe/Paris");
$date = new DateTime();
setlocale(LC_TIME, "fr_FR");
print_r($date->format("l d F Y"));
print_r(strftime("\nEn français :  %A %d %B %Y"));

// indique une date au format fraçais avec les noms des jours et des mois en français //

?>