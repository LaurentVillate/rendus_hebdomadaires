<?php
    $sexe = $post["sexe"];
    $age = $post["age"];

    if ($sexe == "M" && $age > 20){
        echo "Vous ête un homme de plus 20 ans : imposable";
    }
    
    else if ($sexe == "F" && ($age > 18 && $age < 35)){
        echo "Vous êtes une femme entre 18 et 35 ans: imposable";
    }

    else{
        echo "Vous n'êtes pas imposable";
    }
// Imposition différenciée selon âge et sexe //
    ?>