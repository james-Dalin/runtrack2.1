<?php

for ($nombre = 2; $nombre <= 1000; $nombre++) {
    
    // Vérifier si le nombre est premier
    $estPremier = true;
    
    // Cas spécial : 2 est premier
    if ($nombre == 2) {
        $estPremier = true;
    }
    // Les nombres pairs (sauf 2) ne sont pas premiers
    elseif ($nombre % 2 == 0) {
        $estPremier = false;
    }
    // Teste sur les diviseurs impairs jusqu'à la racine carrée
    else {
        // Optimise seulement pour la racine carré
        $racine = (int)sqrt($nombre);
        
        // Teste de tous les nombres impairs de 3 à racine carrée
        for ($diviseur = 3; $diviseur <= $racine; $diviseur += 2) {
            if ($nombre % $diviseur == 0) {
                $estPremier = false;
                break; // J'arrête dès qu'un diviseur est trouvé
            }
        }
    }
    
    // Afficher le nombre s'il est premier
    if ($estPremier) {
        echo $nombre . "<br />";
    }
}