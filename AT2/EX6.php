<?php

$numeros =[1,2,3,4,5,6,7,8,9,10];

for($i = 0; $i < count($numeros); $i++){
    echo "Digite seu numero: ";
    $nmr = readline();
     $numeros[$i] = $nmr;
}

for($i = count($numeros) - 1; $i >= 0; $i--){
    echo $numeros[$i] . PHP_EOL;
}