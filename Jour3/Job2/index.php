<?php

$str = "Tous ces instants seront perdus dans le temps comme les larmes sous la pluie";
$output = "";
for($i = 0; $i < strlen($str); $i += 2) $output .= $str[$i];
echo $output;