<?php

$hauteur = 10;
$caractère = "I";

// Triangle isocèle centré
for ($ligne = 1; $ligne <= $hauteur; $ligne++) {
    
    // 1. Afficher les espaces de centrage
    $nb_espaces = $hauteur - $ligne;
    for ($espace = 1; $espace <= $nb_espaces; $espace++) {
        echo "&nbsp;"; // Espace HTML pour un bon rendu
    }
    
    // 2. Afficher les caractères (nombre impair)
    $nb_caractères = 2 * $ligne - 1;
    for ($colonne = 1; $colonne <= $nb_caractères; $colonne++) {
        echo $caractère;
    }
    
    // 3. Retour à la ligne
    echo "<br/>";
}
?>