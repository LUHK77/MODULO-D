<?php
$alunos = [
    "nome" => [1,2,3,4,5,6,7,8,9,10],
    "nota" => [1,2,3,4,5,6,7,8,9,10],
];

for($i = 1;$i < count($alunos); $i++){
    echo "Digite o nome do aluno: ";
    $nome = readline();

    echo "Digite a nota do aluno: ";
    $nota = readline();
    
    $alunos["nome"][$i] = $nome;
    $alunos["nota"][$i] = $nota;
}

for($i = 1;$i < count($alunos); $i++){
    echo "nome" . $alunos["nome: "][$i] . PHP_EOL;
    echo "nota" . $alunos["nota: "][$i] . PHP_EOL;
}

