<?php

$str = "On n'est pas le meilleur quand on le croit mais quand on le sait";

$dic = [
    "voyelles" => 0,
    "consonne" => 0
];
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table>
        <thead>
            <th>Consonnes</th>
            <th>Voyelles</th>
        </thead>
        <tbody>
            <tr>
                <td><?= $dics ?></td>
                <td><?= $dics ?></td>
            </tr>
        </tbody>
    </table>
</body>
</html>