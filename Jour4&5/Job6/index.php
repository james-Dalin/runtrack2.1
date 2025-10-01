<?php

if (isset($_GET['nombre']) && $_GET['nombre'] !== '') {
    $valeur = $_GET['nombre'];
    if (is_numeric($valeur)) {
        if ($valeur % 2 == 0) {
            echo "nombre pair";
        } else {
            echo "nombre impair";
        }
    } else {
        echo "Veuiller entrer un nombre valide";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Job6</title>
</head>
<body>
    <form action="" method="GET">
        <input type="text" name="nombre" required>
        <input type="submit" value="Vérifier">
    </form>
</body>
</html>