<?php

$nombre = array(6);

for ($i=0; $i<=5; $i++){
    $nombre[$i] = $nombre[$i - 1] + 2;
}

print_r($nombre);
?>