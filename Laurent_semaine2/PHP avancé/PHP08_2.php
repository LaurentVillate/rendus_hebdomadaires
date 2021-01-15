<?php
$date = new DateTime("2019/07/14");
$date->format("d/F/Y");
print_r($date->format("d/m/Y"));
print_r("\n Semaine: ".$date->format("W"));


// Indique la date au format français et le numéro de la semaine//
?>