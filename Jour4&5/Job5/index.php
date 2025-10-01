<?php 

if ($_SERVER['REQUEST_METHOD'] === $_POST) {
    $uernsame = $_POST['username'] ?? '';

    if ($username === 'John' && $password === 'Rambo') {
        echo "C'est pas ma guerre !";
    } else {
        echo "Votre pire cauchemard !";
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Job5</title>
</head>
<body>
    <form action="" method="POST">
        <input type="text" name="username" placeholder="Nom D'utilisateur" required>
        <input type="text" name="password" placeholder="Mot De Passe" required>
        <input type="submit" value="Envoyer">
    </form>
</body>
</html>