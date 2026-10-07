<?php

$alunos = ["Carlos", "Eduardo", "Marcela", "Marcio", "Leticia"];
$presentes = 0;
$ausentes = 0;
$invalido = 0;

foreach ($alunos as $nomes){
        $chamada = readline("O aluno $nomes esta presente(S/N): ");
        if ($chamada == "S" || $chamada == "s"){
            $presentes++;
        }elseif ($chamada == "N" || $chamada == "n") {
            $ausentes++;
        } else {
            $invalido++;
        }
    }

    echo "Alunos presentes: $presentes\n";
    echo "Alunos ausentes: $ausentes\n";
    echo "Comandos invalidos: $invalido\n";