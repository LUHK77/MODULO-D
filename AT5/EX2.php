<?php

$numeros = [3,4,5,6,2,3];

echo "Normal: \n";
print_r($numeros);

$numeros = array_filter($numeros,function($numero){return $numero % 2 == 0;});

echo "Quadrado: \n";
print_r($numeros);