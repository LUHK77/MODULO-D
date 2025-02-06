<?php

$nmrs = [1,2,3,4,5,6,7,8];

function dobra($n){
    return ($n * 2);
}

//duplica os valores
$nmrsM = array_map('dobra',$nmrs);

foreach($nmrsM as $nmr){
    echo $nmr . PHP_EOL;
}