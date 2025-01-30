<?php

$numeros =[1,2,3,4,5,6,7,8,9,10];


for($i = 0; $i < count($numeros); $i++){
    echo "Digite seu numero: ";
    $nmr = readline();
     $numeros[$i] = $nmr;
}

echo "Digite um multiplicador";
$nmrM = readline();

for($i = 0; $i < count($numeros); $i++){
    $v = $numeros[$i];
    $resultado = $nmrM * $v;
    echo "$nmrM X $v = $resultado" . PHP_EOL;
}