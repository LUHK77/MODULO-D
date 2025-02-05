<?php 

$nmrs = [1,2,3,4,5,6,7];
$nmrs2 = [8,9,10,11,12,13,14];

$somaArrays = array_merge($nmrs,$nmrs2);

foreach($somaArrays as $numero){
    echo "N$numero, ";
}