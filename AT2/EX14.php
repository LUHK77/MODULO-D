<?php

$numeros = [];
$numeros2 = [];
$numerosM = [];

//Pega os valores do usuarios
for($i = 0;$i < 10; $i++){
    echo "Digite um valor pra primeira lista: ";
    $newNmr = (int)readline();
    $numeros[$i] = $newNmr;   
   }

//Pega os valores do usuarios pro segundo array
for($i = 0;$i < 10; $i++){
    echo "Digite um valor pra segunda lista: ";
    $newNmr = (int)readline();
    $numeros2[$i] = $newNmr;   
   }

for($i = 0;$i < 10; $i++){
    $numerosM[$i] = $numeros[$i] * $numeros2[$i];
}

for($i = 0;$i < 10; $i++){
    echo "Resultado: $numerosM[$i]" . PHP_EOL;
}
