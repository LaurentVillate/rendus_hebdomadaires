<?php

$suite = array(7);

$suite[0] = 1;
$suite[1] = 1;

for ($i = 2; $i<=7; $i++){

    $suite[$i] = $suite[$i - 1] + $suite[$i - 2];

}

print_r($suite);



?>