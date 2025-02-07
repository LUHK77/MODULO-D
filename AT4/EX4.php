<?php

function aleatorio($inicial,$final){
   $valores = [];
   for($i = $inicial;$i <= $final;$i++){
    array_push($valores,$i);
   }
   foreach($valores as $valor){
    echo "N$valor\n";
   }
   echo "Numero Aleatorio: " . rand($inicial,$final);
}

echo "Digite o primeiro valor: ";
$valor1 = readline();

echo "Digite o segundo valor: ";
$valor2 = readline();

aleatorio($valor1,$valor2);