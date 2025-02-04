<?php

$numeros = [];
$soma = 0;

//Pega os valores do usuarios
for($i = 0;$i < 10; $i++){
    echo "Digite um valor: ";
    $newNmr = (int)readline();
    $numeros[$i] = $newNmr;   
   }

for($i = 0; $i <= count($numeros) -1;$i+=2){
$soma += $numeros[$i];
}

echo "A soma dos valores de indice par é " . $soma;