<?php
//script php avec header (tel que dans le cours)//
if (empty($_POST["nom"])){
    header("Location:PHP10_3.php?erreur=nom");
    exit;
} 
if (empty($_POST["prenom"])){
    header("Location:PHP10_3.php?erreur=prenom");
    exit;
} 
if (empty($_POST["date"])){
    header("Location:PHP10_3.php?erreur=prenom");
    exit;
}
if (!empty($_POST)){
    header("Location:PHP10_3.php");
    exit;
}


?>