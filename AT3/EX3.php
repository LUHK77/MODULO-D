<?php

$nmrs = [1,2,3,4,5,6,7];

echo "Antes de adcionar" . PHP_EOL;
foreach($nmrs as $numero){
    echo "N$numero, ";
}

$nmr = 8;

array_push($nmrs,$nmr);

echo "\nDepois de adcionar" . PHP_EOL;

foreach($nmrs as $numero){
    echo "N$numero, ";
}