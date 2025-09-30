<?php 

$nombres_arguments = count($_GET);
echo "Le nombre d'argument est de : $nombres_arguments"

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Job1</title>
</head>
<body>
  <form action="" method="GET">
    <input type="text" name="nom" placeholder="Votre nom">
    <input type="text" name="age" placeholder="Votre âge">
    <input type="text" name="ville" placeholder="Votre ville">
    <input type="submit" value="Envoyer">
  </form>
</body>
</html>