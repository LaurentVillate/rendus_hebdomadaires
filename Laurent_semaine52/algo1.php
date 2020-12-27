
<?php

// Exercice 1.1//
$a =1;
$b = $a + 1;
$a = 3;

echo "Résultat de l'exercice 1.1: a = $a et b = $b.\n";

// Exercice 1.2 //
$a = 5;
$b = 3;
$c = $a + $b;
$a = 2;
$c = $b - $a;

echo "Résultat de l'exercice 1.2: a = $a, b = $b, c = $c.\n";

// Exercice 1.3 //
$a = 5;
$b = $a + 4;
$a = $a + 1;
$b = $a - 4 ;

echo "Résultat de l'exercice 1.3: a = $a et b = $b.\n";

// Exercice 1.4 //
$a = 3;
$b = 10;
$c = $a + $b;
$b = $a + $b;
$a = $c;

echo "Résultat de l'exercice 1.4: a = $a, b = $b, c = $c.\n";

// Exercice 1.5 //
$a = 5;
$b = 2;
$a = $b; 
$b = $a;

echo "Résultat de l'exercice 1.5: a = $a et b = $b.\n";

//Exercice 1.6 //
// Echanger les valeurs de a et b //

$a;
$b;

$a = $a + $b;
$b = $a - $b;
$a = $a - $b;
// Exemple //
$a = 7;
$b = 2;

$a = $a + $b;
$b = $a - $b;
$a = $a - $b;

echo "Résultat de l'exercice 1.6(1) (valeurs initiales: a = 7, b = 2): a = $a et b = $b.\n";

// Echanger les valeurs de a et b en utilisant 3 variables a, b et c //
$a;
$b;
$c;

$c = $a;
$a = $b;
$b = $c;
// Exemple //
$a = 2;
$b = 5;
$c = 4;

$c = $a;
$a = $b;
$b = $c;

echo "Résultat de l'exercice 1.6(2) (valeurs initiales: a = 2, b = 5, c = 4): a = $a et b = $b.\n";

// Exercice 1.7 //

$a;
$b;
$c;
$d;

$d = $c;
$c = $b;
$b = $a;
$a = $d;

// Exemple //
$a = 7;
$b = 1;
$c = 3;
$d = 8;

$d = $c;
$c = $b;
$b = $a;
$a = $d;

echo "Résultat de l'exercice 1.7 (valeurs initiales: a = 7, b = 1, c = 3, d = 8): a = $a, b = $b et c = $c.\n";

// Exercice 1.8 //
$a = "423";
$b = "12";
$c = $a + $b;
// NB: même si les entiers en $a et $b sont en chaîne de caractères, il fait l'addition //
echo "Résultat de l'exercice 1.8: c = $c.\n";

// Exercice 1.9 //
$a = "423";
$b = "12";
$c = $a .$b;
// NB: ici, c'est une concaténation de 2 chaines de caractères //
echo "Résultat de l'exercice 1.9: c = $c.\n";

?>










