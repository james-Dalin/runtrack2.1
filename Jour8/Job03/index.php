<?php

declare(strict_types=1);

session_start();

if (isset($_SESSION['prenoms'])) {
    $_SESSION['prenoms'] = [];
}

if ($_POST) {
    if (isset($_POST['prenom']) && !empty($_POST['prenom'])) {
        $_SESSION['prenoms'][] = $_POST['prenom'];
    }

    if (isset($_POST['reset'])) {
        $_SESSION['prenoms'] = [];
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Job03</title>
</head>
<body>

    <form method="POST">
        <input type="text" name="prenom" placeholder="Votre prénom">
        <button type="submit">Ajouter</button>
    </form>

    <form method="POST">
        <button name="reset" type="submit">Reset</button>
    </form>

<ul>
    <?php foreach ($_SESSION['prenoms'] as $prenom): ?>
        <li><?php echo $prenom; ?></li>
    <?php endforeach; ?>
</ul>

</body>
</html>