<?php
// Les configurations facilement modifiables
$largeur = 20;
$hauteur = 10;
// Caractère à utilisé pour dessiner le rectangle
$caractere = "X"; 

// Affichage du rectangle avec boucles imbriquées
for ($ligne = 0; $ligne < $hauteur; $ligne++) {
    for ($colonne = 0; $colonne < $largeur; $colonne++) {
        if ($ligne == 0 || $ligne == $hauteur - 1 || $colonne == 0 || $colonne == $largeur - 1) {
            echo $caractere;
        } else {
            echo "&nbsp;";
        }
    }
    echo "<br/>";
}