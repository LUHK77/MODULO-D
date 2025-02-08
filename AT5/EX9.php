<?php

$palavras = ["meu pai","ontem","cavalo","ja sinto aqui","ele tenta"];

print_r($palavras);

$palavras = array_map(fn($p) => strtoupper($p),$palavras);

print_r($palavras);