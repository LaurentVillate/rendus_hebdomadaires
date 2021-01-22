<?php


    if (empty($_POST["nom"])){
        $erreur_nom = "Veuillez renseigner votre nom";
    }
    if (!empty($_POST["nom"])){
        $nom = $_POST["nom"];
        if (preg_match("~^[a-zA-Z-éèçëê\s]+$~", $nom)){
        }
        else{
        $erreur_nom = "Saisissez seulement des lettres et des tirets";
        }
    }
    if (empty($_POST["prenom"])){
        $erreur_prenom = "Veuillez renseigner votre prénom";
    }
    if (!empty($_POST["prenom"])){
        $prenom = $_POST["prenom"];
        if (preg_match("~^[a-zA-Z-éèçëê\s]+$~", $prenom)){
        }
        else{
        $erreur_prenom = "Saisissez seulement des lettres et des tirets";
        }
    }
    if (empty($_POST["genre"])){
        $erreur_genre = "Veuillez renseigner votre genre";
    }
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
    if (empty($_POST["postal"])){
        $erreur_postal = "Veuillez renseigner le code postal";
    }
    if (!empty($_POST["postal"])){
        $postal = $_POST["postal"];
        if (preg_match("~^[0-9]{5}$~", $postal)){
        }
        else{
        $erreur_postal = "Code postal invalide";
        }
    }
    if (empty($_POST["adresse"])){
        $erreur_adresse = "Veuillez renseigner l'adresse";
    }
    if (empty($_POST["ville"])){
        $erreur_ville = "Veuillez renseigner la ville";
    }
    if (!empty($_POST["ville"])){
        $ville = $_POST["ville"];
        if (preg_match("~^[a-zA-Z-éèçëê\s]+$~", $ville)){
        }
        else{
        $erreur_ville = "Saisissez seulement des lettres et des tirets";
        }
    }
    if (empty($_POST["mail"])){
        $erreur_mail = "Veuillez renseigner le mail";
    }
    if (!empty($_POST["mail"])){
        $mail = $_POST["mail"];
        if (filter_var($mail, FILTER_VALIDATE_EMAIL)){
        }
        else{
            $erreur_mail = "Mail non valide";
        }
    }
    foreach ($_REQUEST["sujet"] as $choixsujet){
        $choixsujet;
    }
    if ($choixsujet=="Veuillez sélectionner un sujet"){
        $erreur_sujet = "Veuillez sélectionner un sujet";
    }
    if (empty($_POST["question"])){
        $erreur_question = "Veuillez poser votre question";
    }
    if (empty($erreur_nom) && empty($erreur_prenom) && empty($erreur_date) && empty($erreur_postal) && empty($erreur_adresse) && empty($erreur_ville) && empty($erreur_mail) && empty($erreur_sujet) && empty($_erreur_question)){
        include("PHP10_2scriptphp.php");
    }
    else{
        include("PHP10_2.php");
    }
?>