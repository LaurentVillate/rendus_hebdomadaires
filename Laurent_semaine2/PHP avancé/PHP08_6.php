<?php

//Date au format américain: mm/dd/yyyy//
var_dump(checkdate(17, 17, 2019));

//Date au format français : jj/mm/aaaa). Vérification de la date avec la fonction valadationDate//

function validateDate($date, $format = 'Y-m-d H:i:s')
{
    $d = DateTime::createFromFormat($format, $date);
    return $d && $d->format($format) == $date;
}

var_dump(validateDate("17/17/2019", "d/m/Y"))

//Date au format français. Autre méthode//

//création d'une simple variable $date avec la date à vérifier//













?>

