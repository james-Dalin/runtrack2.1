<?php

// Créez une fonction nommée “calcule()” qui prend 3 paramètres :
// ● le premier, “$a”, est un nombre,
// ● le deuxième, "$operation", est un caractère (string) contenant le type d’opération
// (+, -, *, /, %),
// ● le troisième, “$b”, est un nombre.
// La fonction doit retourner le résultat de l’opération.

function calcule(int $a, string $operation, int $b) {
  if ($operation === '+') {
    return $a + $b;
  } elseif ($operation === '-') {
    return $a - $b;
  } elseif ($operation === '*') {
    return $a * $b;
  } elseif ($operation === '/') {
    if ($b === 0) {
      throw new InvalidArgumentException('La division par zéro est impossible.');
    }
      return intval($a / $b);
  } elseif ($operation === '%') {
    if ($b === 0) {
      throw new InvalidArgumentException('Le modulo par zéro est impossible.');
    }
    return $a % $b;
  } else {
    throw new InvalidArgumentException('Opération non supportée ' . $operation);
  }
}

$a = 23;
$b = 65;
$resultat = calcule($a, "-", $b);
echo $resultat;

// En changeant les types d'opérations, les résultats s'affichent tous.