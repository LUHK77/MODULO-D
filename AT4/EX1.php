<?php

function parOuImpar(){
    echo "Digite um valor: ";
    $valor = (int) readline();
    $res = $valor % 2 == 0 ? 'par' . PHP_EOL : 'impar' . PHP_EOL;
    echo $res;
}

parOuImpar();


