<?php  

$users = [
    1 => [
    "nome" => " ",
    "cidade" => " ",
    "idade" => " ",
    "idade" => " ",
    "sexo" => " ",
    ],
    2 => [
        "nome" => " ",
        "cidade" => " ",
        "idade" => " ",
        "idade" => " ",
        "sexo" => " ",
    ],
    3 => [
        "nome" => " ",
        "cidade" => " ",
        "idade" => " ",
        "idade" => " ",
        "sexo" => " ",
    ],
    4 => [
        "nome" => " ",
        "cidade" => " ",
        "idade" => " ",
        "idade" => " ",
        "sexo" => " ",
    ],
    5 => [
        "nome" => " ",
        "cidade" => " ",
        "idade" => " ",
        "idade" => " ",
        "sexo" => " ",
    ],
    6 => [
        "nome" => " ",
        "cidade" => " ",
        "idade" => " ",
        "idade" => " ",
        "sexo" => " ",
    ],
    7 => [
        "nome" => " ",
        "cidade" => " ",
        "idade" => " ",
        "idade" => " ",
        "sexo" => " ",
    ],
    8 => [
        "nome" => " ",
        "cidade" => " ",
        "idade" => " ",
        "idade" => " ",
        "sexo" => " ",
    ],
    9 => [
        "nome" => " ",
        "cidade" => " ",
        "idade" => " ",
        "idade" => " ",
        "sexo" => " ",
    ],
    10 => [
        "nome" => " ",
        "cidade" => " ",
        "idade" => " ",
        "idade" => " ",
        "sexo" => " ",
    ],
];

//Criação dos usuarios
for($i = 1;$i < count($users);$i++){
    echo "Digite o nome do usuario: ";
    $users[$i]["nome"] = (string) readline();
    echo "Digite a cidade do usuario: ";
    $users[$i]["cidade"] = (string) readline();
    echo "Digite a idade do usuario: ";
    $users[$i]["idade"] = (int) readline();
    echo "Digite o sexo do usuario: ";
    $users[$i]["sexo"] = (string) readline();
}

//Listagem de nomes e idades
echo "Usuarios por nome e idade: \n";
for($i = 1;$i < count($users);$i++){
   echo "Nome: " . $users[$i]["nome"] . PHP_EOL ;
   echo "Idade: " . $users[$i]["idade"] . " anos" . PHP_EOL;
}

//Listagem de quem mora em santos
echo "Usuarios que moram em santos: \n";
for($i = 1;$i < count($users);$i++){
    if($users[$i]['cidade'] === "santos"){
    echo "Nome: " . $users[$i]["nome"] . PHP_EOL ;
    echo "Cidade: " . $users[$i]["cidade"] . PHP_EOL;
    }
 }

//Listagem por idade
echo "Usuarios com mais de  18 anos: \n";
for($i = 1;$i < count($users);$i++){
    if($users[$i]['idade'] >= 18){
    echo "Nome: " . $users[$i]["nome"] . PHP_EOL ;
    echo "Idade: " . $users[$i]["idade"] ." anos" . PHP_EOL;
    }
 }

 //Listagem por sexo
 echo "Usuarios Homens \n";
 for($i = 1;$i < count($users);$i++){
    if($users[$i]['sexo'] == "m"){
    echo "Nome: " . $users[$i]["nome"] . PHP_EOL ;
    echo "Sexo: " . $users[$i]["sexo"] . PHP_EOL;
    }
 }