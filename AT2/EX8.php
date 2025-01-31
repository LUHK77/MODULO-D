<?php

$carros = [
    0 => [
        "modelo" => "Uno",
        "fabricante" => "Fiat",
        "cor" => "prata",
        "portas" => 4,
        "ano" => 2014,
    ],
    1 => [
        "modelo" => "Fiesta",
        "fabricante" => "Ford",
        "cor" => "preto",
        "portas" => 2,
        "ano" => 2015,
    ],
    2 => [
        "modelo" => "Doblo",
        "fabricante" => "Fiat",
        "cor" => "verde",
        "portas" => 4,
        "ano" => 2013,
    ],

    3 => [
        "modelo" => "Celta",
        "fabricante" => "GM",
        "cor" => "preto",
        "portas" => 2,
        "ano" => 2012,
    ],

    4 => [
        "modelo" => "March",
        "fabricante" => "Nissan",
        "cor" => "prata",
        "portas" => 2,
        "ano" => 2015,
    ],

    5 => [
        "modelo" => "Corsa",
        "fabricante" => "GM",
        "cor" => "branco",
        "portas" => 2,
        "ano" => 2010,
    ],

    6 => [
        "modelo" => "Ranger",
        "fabricante" => "Ford",
        "cor" => "prata",
        "portas" => 4,
        "ano" => 2012,
    ],
    7 => [
        "modelo" => "Trail",
        "fabricante" => "Blazer",
        "cor" => "branco",
        "portas" => 4,
        "ano" => 2014,
    ],
    8 => [
        "modelo" => "Ecosport",
        "fabricante" => "Ford",
        "cor" => "preto",
        "portas" => 4,
        "ano" => 2013,
    ],
    9 => [
        "modelo" => "Tucson",
        "fabricante" => "Hyundai",
        "cor" => "vinho",
        "portas" => 4,
        "ano" => 2012,
    ],
];

echo "Modelo e ano: \n";
for($i = 0; $i < count($carros);$i++){
    echo "modelo: " . $carros[$i]["modelo"] . PHP_EOL;
    echo "ano: " . $carros[$i]["ano"] . PHP_EOL;
}

echo "Carros com a cor prata: \n";
for($i = 0; $i < count($carros);$i++){
    if($carros[$i]["cor"] == "prata"){
    echo "modelo: " . $carros[$i]["modelo"] . PHP_EOL;
    echo "ano: " . $carros[$i]["ano"] . PHP_EOL;
    echo "cor: " . $carros[$i]["cor"] . PHP_EOL;
    }
}

echo "Cores de veiculos e portas: \n";
for($i = 0; $i < count($carros);$i++){
    echo "modelo: " . $carros[$i]["modelo"] . PHP_EOL;
    echo "cor: " . $carros[$i]["cor"] . PHP_EOL;
    echo "portas: " . $carros[$i]["portas"] . PHP_EOL;
}

echo "Carros da fabricante Ford: \n";
for($i = 0; $i < count($carros);$i++){
    if($carros[$i]["fabricante"] == "Ford"){
    echo "modelo: " . $carros[$i]["modelo"] . PHP_EOL;
    echo "ano: " . $carros[$i]["ano"] . PHP_EOL;
    echo "Fabricante: " . $carros[$i]["fabricante"] . PHP_EOL;
    }
}

echo "Carros Superiores de 2013 \n";
for($i = 0; $i < count($carros);$i++){
    if($carros[$i]["ano"] > 2013){
    echo "modelo: " . $carros[$i]["modelo"] . PHP_EOL;
    echo "ano: " . $carros[$i]["ano"] . PHP_EOL;
    }
}
