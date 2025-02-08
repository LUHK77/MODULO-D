<?php

$numeros = [3,4,5,6,2,3];

echo "Normal: \n";
print_r($numeros);

$numeros = array_map(function($valor){return $valor *= 2;},$numeros);

echo "Dobrado: \n";
print_r($numeros);