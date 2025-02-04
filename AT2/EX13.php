<?php

$numeros = [];

//Pega os valores do usuarios
for($i = 0;$i < 20; $i++){
    echo "Digite um valor: ";
    $newNmr = (int)readline();
    $numeros[$i] = $newNmr;   
   }

//Exibe numeros impares
for($i = 0;$i < count($numeros); $i++){
    if($numeros[$i] % 2 != 0){
        echo "Numero Impar: " . $numeros[$i] . PHP_EOL;
    }
}