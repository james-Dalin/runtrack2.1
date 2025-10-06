<?php

// Créez une fonction nommée “calcule()” qui prend 3 paramètres :
// ● le premier, “$a”, est un nombre,
// ● le deuxième, "$operation", est un caractère (string) contenant le type d’opération
// (+, -, *, /, %),
// ● le troisième, “$b”, est un nombre.
// La fonction doit retourner le résultat de l’opération.

$a = 13;
$b = 25;

function calcule(int $a, string $operation, int $b) {
    $resultat = $a + $b;
      return $resultat;
}

$operation = calcule(13, "+", 25);
echo $operation;

// En changeant les types d'opérations, les résultats s'affichent tous.