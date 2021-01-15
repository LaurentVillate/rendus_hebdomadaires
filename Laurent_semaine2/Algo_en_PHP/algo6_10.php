<?php

$tab_un = [4, 8, 7, 9, 1, 5, 4, 6];
$tab_deux = [7, 6, 5, 2, 1, 3, 7, 4];

for ($i = 0; $i<8; $i++)
{
    $tab_total[] = $tab_un[$i] + $tab_deux[$i];
}

print_r($tab_total);

// Sommes par colonne des nombres du tableau 1 et des nombres du tableau 2 //

?>

