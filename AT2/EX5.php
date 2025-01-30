<?php

$meses =["janeiro","fevereiro","março","abril",
"maio","junho","julho","agosto","setembro","outubro","novembro","dezembro"];

echo "Digite o numero do mes: ";
    $mes = readline();

echo $meses[$mes - 1];
