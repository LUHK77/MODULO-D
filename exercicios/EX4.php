<?php

echo "Digite um numero: ";
$nmr = (int) readline();

for($i = 1; $i < 11 ; $i++){
    $resultado = $nmr * $i;
    echo "$nmr X $i = $resultado" . PHP_EOL;
}