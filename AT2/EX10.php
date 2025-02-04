<?php

$numeros = [];

//Pega os valores do usuarios
for($i = 0;$i < 10; $i++){
 echo "Digite um valor: ";
 $newNmr = readline();
 $numeros[$i] = $newNmr;   
}

echo "listagem normal" . PHP_EOL;
for($i = 0;$i <= count($numeros)-1; $i++){
    echo $numeros[$i] . PHP_EOL;
}

echo "listagem inversa" . PHP_EOL;
for($i = count($numeros) - 1;$i >= 0;$i--){
   echo $numeros[$i] . PHP_EOL; 
 }
