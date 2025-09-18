<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jour03</title>
</head>
<body>
    
    <h1>Titre exemple</h1>

    <?php
    
    $texte = "Bonjour"; // Chaîne de caractère
    $age = 28; // Entier
    $prix = 5.99; // Nombre à virgule flottante
    $estVrai = true; //Booléen
    
    ?>

    <table>
        <thead>
            <th>type</th>
            <th>nom</th>
            <th>valeur</th>
        </thead>
        <tbody>
            <tr>
                <td>Chaîne de caractère</td>
                <td>$texte</td>
                <td><?= $texte; ?></td>
            </tr>
            <tr>
                <td>Entier</td>
                <td>$age</td>
                <td><?= $age; ?></td>
            </tr>
            <tr>
                <td>Nombre de virgule flottante</td>
                <td>$prix</td>
                <td><?= $prix; ?></td>
            </tr>
            <tr>
                <td>Boléen</td>
                <td>$estVrai</td>
                <td><?= $estVrai; ?></td>
            </tr>
        </tbody>
    </table>

</body>
</html>