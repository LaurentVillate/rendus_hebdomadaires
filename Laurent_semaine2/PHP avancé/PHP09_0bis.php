<?php
$myVar = "Bonjour le monde";

// Ouverture en écriture seule 
$fp = fopen("demo_0bis.txt", "a"); 

// Ecriture du contenu ($myVar) 
fputs($fp, $myVar); 

// Fermeture du fichier  
fclose($fp); 
?>