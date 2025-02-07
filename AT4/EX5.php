<?php

function calculaMedia(array $numeros): float {
    $soma = 0;
    $qtdN = count($numeros);
    for($i = 0; $i < $qtdN; $i++){
      $soma += $numeros[$i];
    }

    return $soma / $qtdN;
}

$valores = [4,5,3,4,6,5];

echo "Media: " . calculaMedia($valores);