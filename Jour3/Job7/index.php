<?php
// Étape 1 : Création de la variable string
$str = "Certaines choses changent, et d'autres ne changeront jamais.";

// Étape 2 : Conversion de la chaîne en tableau de caractères (sans fonction native)
$tableau = array();
$i = 0;

// Parcours de la chaîne avec isset pour remplir le tableau
while (isset($str[$i])) {
    $tableau[] = $str[$i];
    $i++;
}

// Étape 3 : Sauvegarde du premier caractère
$premier_caractere = $tableau[0];

// Étape 4 : Décalage de tous les caractères vers la gauche
$taille = count($tableau);
for ($j = 0; $j < $taille - 1; $j++) {
    $tableau[$j] = $tableau[$j + 1];
}

// Étape 5 : Placement du premier caractère en dernière position
$tableau[$taille - 1] = $premier_caractere;

// Étape 6 : Reconstruction de la chaîne finale
$resultat = "";
for ($k = 0; $k < $taille; $k++) {
    $resultat .= $tableau[$k];
}

// Étape 7 : Affichage du résultat
echo $resultat;