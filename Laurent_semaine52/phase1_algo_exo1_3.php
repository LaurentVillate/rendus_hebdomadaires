<?php
function placement ($co, $n, $i)
{
$total = $co*(1+$i)**$n;
$cn = $total-$co;
return $cn;
}

echo 'Placement de 5 ans, intérêt annuel 4%, valeur acquise:' .placement(100000, 5, 0.04).'; placement de 5 ans, taux intérêtannuel 4%, valeur acquise: ' .placement(100000, 4, 0.05);

?>