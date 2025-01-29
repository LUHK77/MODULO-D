<?php

echo "Calculadora". PHP_EOL . "1-Soma" . PHP_EOL . "2-Subtração" . PHP_EOL . "3-Multiplicação" . PHP_EOL . "4-Divisão" . PHP_EOL;


echo "Digite sua escolha: ";
$escolha = (int) readline();

switch($escolha) {
    case 1:
        echo "Digite o primeiro numero: ";
        $nmr1 = (int) readline(); 
        echo "Digite o segundo numero: ";
        $nmr2 = (int) readline(); 
        echo "Resultado: " . $nmr1 + $nmr2;
        break;
    case 2:
            echo "Digite o primeiro numero: ";
            $nmr1 = (int) readline(); 
            echo "Digite o segundo numero: ";
            $nmr2 = (int) readline(); 
            echo "Resultado: " . $nmr1 - $nmr2;
            break;
    case 3:
            echo "Digite o primeiro numero: ";
            $nmr1 = (int) readline(); 
            echo "Digite o segundo numero: ";
            $nmr2 = (int) readline(); 
            echo "Resultado: " .$nmr1 * $nmr2;
            break;
    case 4:
            echo "Digite o primeiro numero: ";
            $nmr1 = (int) readline(); 
            echo "Digite o segundo numero: ";
            $nmr2 = (int) readline(); 
            echo "Resultado: " . $nmr1 / $nmr2;
            break;

   
}