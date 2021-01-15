<?php
$today = new DateTime();
$end = new DateTime("2021/07/07");

$diff = $end->diff($today);
print_r($diff);
?>