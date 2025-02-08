<?php

$palavras = ["meu pai","ontem","cavalo","ja sinto aqui","ele tenta"];

$ordenarPorTamanho = function($a, $b) {
    return strlen($a) - strlen($b);
};

usort($palavras,$ordenarPorTamanho);

print_r($palavras);