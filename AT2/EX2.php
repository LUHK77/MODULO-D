<?php

$numeros =[1,2,3,4,5,6,7,8,9,10];
$pares = 0;
$impares = 0;
$negativos = 0;
$positivos = 0;

for($i = 0; $i < count($numeros); $i++){
    echo "Digite seu numero: ";
    $nmr = readline();
     $numeros[$i] = $nmr;
     if($nmr > 0){
        $positivos++;
     }else{
        $negativos++;
     }
     if($nmr % 2 == 0){
        $pares++;
     } else { 
        $impares++;
     }
}
 echo "Pares: $pares\n Impares: $impares\n Positivos: $positivos\n Negativos: $negativos";