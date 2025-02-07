<?php

function fatorial(){
    echo "Digite um valor para ser fatorado: ";
    $valor = readline();
    for($i = $valor -1;$i > 0;$i--){
        $valor *= $i;
    }
    echo "Resultado: $valor";
}

fatorial();