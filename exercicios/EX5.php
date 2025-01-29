<?php

//$nmrAl = rand(1,100);
$nmrAl = 2;


for($tentativa = 1 ;$tentativa < 5 ; $tentativa++){
    echo "Digite um valor: ";
$nmrU = (int) readline();
    if($nmrU == $nmrAl){
        echo "Voce advinhou" . PHP_EOL;
         break;
    } else {
        echo "Voce errou" . PHP_EOL;
    }
}