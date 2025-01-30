<?php

$numeros1 =[1,2,3,4,5,6,7,8,9,10];
$numeros2 =[1,2,3,4,5,6,7,8,9,10];

for($i = 0; $i < count($numeros1); $i++){
    echo "Digite pro primeiro vetor: ";
    $nmr = readline();
     $numeros1[$i] = $nmr;
}

for($i = 0; $i < count($numeros2); $i++){
    echo "Digite pro segundo vetor: ";
    $nmr = readline();
     $numeros2[$i] = $nmr;
}

for($i = 0; $i < count($numeros1); $i++){
    $nmr1 = $numeros1[$i];
    $nmr2 = $numeros2[$i];
    $resultado = $nmr1 * $nmr2;
    echo "$nmr1 X $nmr2 = $resultado" . PHP_EOL;
}