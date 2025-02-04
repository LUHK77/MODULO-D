<?php

$numeros =[];

for($i = 0; $i < 10; $i++){
    echo "Digite seu numero: ";
    $nmr = readline();
     $numeros[$i] = $nmr;
}

for($i = count($numeros) - 1; $i >= 0; $i--){
    echo $numeros[$i] . PHP_EOL;
}