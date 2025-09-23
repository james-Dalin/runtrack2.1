<?php

$nombres = [
    200,
    204,
    173,
    98,
    171,
    404,
    459
];

foreach ($nombres as $nombre) {
    if ($nombre % 2 == 1) {
        echo $nombre . " est impaire <br/>";
    } elseif ($nombre % 2 == 0) {
        echo $nombre . " est paire <br/>";
    } else {
        echo $nombre . "<br/>";
    }
}   