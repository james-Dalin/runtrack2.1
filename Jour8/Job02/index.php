<?php

if (isset($_POST['reset'])) {
    setcookie('nbvisites', '', time() - 3600);
    $nbvisites = 0;
} else {
    $nbvisites = isset($_COOKIE['nbvisites']) ? (int)$_COOKIE['nbvisites'] + 1 : 1;
    setcookie('nbvisites', $nbvisites, time() + 3600);
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>
<p>Nombre de visites: <?php echo $nbvisites; ?></p>
<form method="post">
    <button name="reset" type="submit">Reset</button>
</form>