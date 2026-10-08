<?php

$alunos  = [];

for($i = 1; $i <= 5; $i++){
    $aluno = readline("Insira o nome do aluno: ");
    $alunos[] = $aluno;
}
echo "Primeiro aluno: $alunos[0]\n";
echo "Quinto aluno: $alunos[4]\n";

echo "=========================================\n";

echo "Aluno do indice 2 trocado.\n";
$alunos[2] = "Adelino";

echo "=========================================\n";

echo "Aluno surpresa adicionado\n";
$alunos[] = "Godofredo";
print_r($alunos);

echo "Quantidade de alunos cadastrados: " . count($alunos);
