<?php

if (empty($_POST["nom"])){
    header("Location:PHP10_4.php?erreur=nom");
    exit;
} 
if (!empty($_POST["nom"])){
    header("location:PHP10_4.php?erreur&valeur=".$_POST["nom"]);
    exit;
}
if (empty($_POST["prenom"])){
    header("Location:PHP10_4.php?erreur=prenom");
    exit;
} 
if (empty($_POST["date"])){
    header("Location:PHP10_4.php?erreur=date");
    exit;
} 
if (empty($_POST["postal"])){
    header("Location:PHP10_4.php?erreur=postal");
    exit; 
} 
if (empty($_POST["adresse"])){
    header("Location:PHP10_4.php?erreur=adresse");
    exit;
} 
if (empty($_POST["ville"])){
    header("Location:PHP10_4.php?erreur=ville");
    exit;
} 
if (empty($_POST["mail"])){
    header("Location:PHP10_4.php?erreur=mail");
    exit;
} 
?>