<?php

$str = "Bonjour";
$char = "o";

function occurrence(string $str, string $char): int 
{
  $compte = 0;
  $longueur = strlen($str);

  for ($i = 0; $i <= $longueur; $i++) {
    if ($str[$i] === $char) {
      $compte++;
    }
  }
  return $compte;
}

echo occurrence($str, $char);