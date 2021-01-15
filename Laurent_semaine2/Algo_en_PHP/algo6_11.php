<?php

$tableau_un = [4, 8, 7, 12];
$tableau_deux = [3, 6];
$n = count($tableau_un);
$m = count($tableau_deux);



for ($i=0; $i<$n; $i++){
    for ($j=0; $j<$m; $j++){
$total = $total + $tableau_un[$i]*$tableau_deux[$j];
    }
}

var_dump($total);

//nombres du tableau 1 multipliés par les nombres du tableau 2. Puis, somme des produits. //
