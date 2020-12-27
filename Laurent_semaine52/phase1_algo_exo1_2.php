<?php
$a = [];

for ($i=1; $i <= 25; $i++) 
{
    $a[] .= $i;
}
print_r($a);
?>

// erreurs corrigées: La boucle doit commencé à 1 et non à 0. Elle doit tourner tant que $i est inférieur OU EGALE à 25, pour prendre en compte le 25./
