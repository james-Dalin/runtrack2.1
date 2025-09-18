<?php
// Afficher tous les nombres premiers de 2 à 1000
for ($nombre = 2; $nombre <= 1000; $nombre++) {
    
    // Vérifier si le nombre est premier
    $est_premier = true;
    
    // Cas spécial : 2 est premier
    if ($nombre == 2) {
        $est_premier = true;
    }
    // Les nombres pairs (sauf 2) ne sont pas premiers
    elseif ($nombre % 2 == 0) {
        $est_premier = false;
    }
    // Teste sur les diviseurs impairs jusqu'à la racine carrée
    else {
        // Optimisation : tester seulement jusqu'à la racine carrée
        $racine = (int)sqrt($nombre);
        
        // Teste de tous les nombres impairs de 3 à racine carrée
        for ($diviseur = 3; $diviseur <= $racine; $diviseur += 2) {
            if ($nombre % $diviseur == 0) {
                $est_premier = false;
                break; // J'arrête dès qu'un diviseur est trouvé
            }
        }
    }
    
    // Afficher le nombre s'il est premier
    if ($est_premier) {
        echo $nombre . "<br />";
    }
}