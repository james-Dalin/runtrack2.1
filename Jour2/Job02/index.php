<?php

$exclu = array(26, 37, 88, 1111);

    for ($i = 0; $i <= 1337; $i++) {
        if (!in_array($i, $exclu)) {
            echo $i . "<br/>";
        }
    } 