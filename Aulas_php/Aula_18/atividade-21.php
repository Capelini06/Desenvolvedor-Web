<?php

$presentes = [];
$ausentes = [];

$qta = (int) readline("Quantos alunos tem na sala: ");

for($i = 1; $i <= $qta; $i++){
    $nome = readline("Insira o nome do aluno: ");
    $presenca = readline("Esta presente(S/N): ");
    if($presenca == "s" || $presenca == "S"){
        $presentes[] = $nome;
    } else {
        $ausentes[] = $nome;
    }
}

$porcentagem = (count($presentes) / $qta) * 100;

echo "ALUNOS PRESENTES\n";
for($i = 0; $i < count($presentes); $i++){
    echo $i+1 . ") $presentes[$i]\n";
}

echo "ALUNOS AUSENTES\n";
for($i = 0; $i < count($ausentes); $i++){
    echo $i+1 . ") $ausentes[$i]\n";
}
echo "PORCENTAGEM DE PRESENÇA: $porcentagem\n";
if($porcentagem < 75){
    echo "Presença abaixo do minimo da turma";
}