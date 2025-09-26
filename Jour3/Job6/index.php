<?php

$str = "Les choses que l'on possède finissent par nous posséder.";
$reverse ="";
$c = 0;

while(isset($str[$c])) {
    $c++;
}
for ($i = $c - 1; $i >= 0; $i--) {
    $reverse .= $str[$i];
}
echo $reverse;