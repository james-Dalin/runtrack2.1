<?php

if (isset($_GET['largeur']) && isset($_GET['hauteur'])) {
    $largeur = intval($_GET['largeur']);
    $hauteur = intval($_GET['hauteur']);

    if ($largeur > 2 && $hauteur > 2) {
        echo "<pre>";

        // Génération du toit
        for ($i = 0; $i < $largeur / 2; $i++) {
        // Espace avant le sommet du toit
            for ($j = 0; $j < ($largeur / 2) - $i - 1; $j++) {
                echo " ";
            }
            // Bord Gauche du toit
            echo "/";
            // Espace intérieur
            for ($j = 0; $j < $i * 2; $j++) {
                echo ($i == ($largeur / 2) - 1) ? "_" : " ";
            }
            // Bord droit du toit
            echo "\\";
            echo "\n";
        }
        // Génération des murs
        for ($i = 0; $i < $hauteur; $i++) {
            echo "|";
            for ($j = 0; $j < $largeur - 2; $j++) {
                echo " ";
            }
            echo "|";
            echo "\n";
        }

        echo "</pre>";
    } else {
        echo "La largeur et la hauteur doivent être supérieures à 2";
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Job7</title>
</head>
<body>
    <form action="" method="GET">
        <input type="text" name="largeur" placeholder="Largeur">
        <input type="text" name="hauteur" placeholder="Hauteur">
        <input type="submit" value="Dessiner la maison">
    </form>
</body>
</html>