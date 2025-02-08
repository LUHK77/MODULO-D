<?php

$soma = function($n1,$n2){
    return $n1 + $n2;
};

echo $soma(2,7);

$numeros = [12,34,21,54,23];

$numeros = array_filter($numeros, function($dado){
    return ($dado % 2 == 0);
});

print_r($numeros);