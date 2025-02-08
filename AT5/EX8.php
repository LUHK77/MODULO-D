<?php 

$nmrs = [2,5,3,1,9];

print_r($nmrs);

$nmrs = array_map(fn($v) => $v*$v*$v,$nmrs);

print_r($nmrs);