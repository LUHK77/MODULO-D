<?php

function palindromo($palavra){
    return $palindromo = $palavra == strrev($palavra) 
    ? "Palindromo" . PHP_EOL : "Não é um palindromo" . PHP_EOL;
}

echo "Digite uma palavra: ";
$world = readline();

echo palindromo($world);
