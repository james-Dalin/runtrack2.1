<?php

if(!empty($_POST)) {
    echo '<table border="1">';
  echo '<thead><tr><th>Argument</th><th>Valeur<th></tr></thead>';
  echo '<tbody>';
  foreach ($_POST as $key => $valeur) {
    echo '<tr><td>' . htmlspecialchars($key) . '</td><td>' . htmlspecialchars($valeur) . '</td></tr>';
  }
  echo '</tbody>';
  echo '</table>';
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Job4</title>
</head>
<body>
  <form action="" method="POST">
    <input type="text" name="nom" placeholder="Votre Nom">
    <input type="text" name="âge" placeholder="Votre Âge">
    <input type="text" name="ville" placeholder="Votre Ville">
    <input type="submit" value="Envoyer">
  </form>
</body>
</html>