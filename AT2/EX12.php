<?php 

$numeros = [];
$numeros2 = [];
$soma = [];

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

   for($i = 0;$i < 10;$i+=2){
    $soma[$i] = $numeros[$i];
    $soma[$i+1] = $numeros2[$i];
   }

   echo "listagem" . PHP_EOL;
for($i = 0;$i <= count($numeros)-1; $i++){
    echo $soma[$i] . PHP_EOL;
}