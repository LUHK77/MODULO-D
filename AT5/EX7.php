<?php

$nmrs = [2,-5,3,1,-9];

print_r($nmrs);

$nmrs = array_filter($nmrs,fn($v) => $v > 0);

print_r($nmrs);