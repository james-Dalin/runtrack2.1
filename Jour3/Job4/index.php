<?php

$str = "Dans l'espace, personne ne vous entend crier.";

$nbrChars = 0;
$parcourir = 0;

while (isset($str[$parcourir])) {
     $nbrChars++;
     $parcourir++;
}
echo "Le nombre de caractère qui se trouve dans cette phrase est de : $nbrChars";
