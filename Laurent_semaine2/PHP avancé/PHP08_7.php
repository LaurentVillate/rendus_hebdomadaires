<?php

date_default_timezone_set("Europe/Paris");
$date = new DateTime();
setlocale(LC_TIME, "fr_FR");
print_r($date);
print_r(strftime("\n%Hh%M"));


/*setlocale(LC_TIME, "fr_FR");
print_r($date->format("l d F Y"));
print_r(strftime("\nEn français :  %A %d %B %Y"));*/

?>