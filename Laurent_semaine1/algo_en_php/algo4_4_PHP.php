<?php
$n = $post["nombre"];
$prix = 0;

if ($n<=10){
    $prix = $n * 0.1;
}
else if ($n<=30){
    $prix = 10 * 0.1 + ($n - 10) * 0.09;
}
else{
    $prix = 10 * 0.1 + ($n - 10) * 0.09 + ($n - 30) * 0.08;
}

echo $prix." euros";

// Calcul du prix de photocopies avec un tarif degressif //

?>



