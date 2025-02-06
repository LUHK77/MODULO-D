<?php

$frase = "Ola, meu, amigo, espero, que, voce, esteja, bem,beba,agua";

$palavras = explode(",", $frase);

foreach($palavras as $palavra){
    echo $palavra . PHP_EOL;
}