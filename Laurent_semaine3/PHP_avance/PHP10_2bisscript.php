<?php
// Essai pour valider la date dans formulaire jarditou//
if (empty($_POST["date"])){
        $erreur_date = "Veuillez renseigner la date";
    }
if (!empty($_POST["date"])){
    $date = $_POST["date"];
    function validateDate($date, $format = 'Y-m-d H:i:s')
    {
    $d = DateTime::createFromFormat($format, $date);
    return $d && $d->format($format) == $date;
    }
    if (validateDate($date, "d/m/Y")== false){
        $erreur_date = "Date non valide";
    }
    }
    if (empty($erreur_date)){
        include("PHP10_2bis.php");
    }
    else{
        include("PHP10_2bisscriptphp.php");
    }?>