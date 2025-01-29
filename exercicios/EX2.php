<?php

echo "Digite um numero";
$nmr = (int) readline();

if($nmr % 2 == 0){
    echo "Seu numero eh par";
} else {
    echo "Seu numero eh impar";
}