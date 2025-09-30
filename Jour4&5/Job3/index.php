<?php 

$nbrs_arguments = count($_POST);
echo "Le nombre d'argument envoyé est de : $nbrs_arguments";

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Job3</title>
</head>
<body>
  <form action="" method="POST">
    <input type="text" name="nom" placeholder="Votre Nom">
    <input type="text" name="age" placeholder="Votre Âge">
    <input type="text" name="ville" placeholder="Votre Ville">
    <input type="submit" value="Envoyer">
  </form>
</body>
</html>